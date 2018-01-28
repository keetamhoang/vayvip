(function($){
'use strict';
if(typeof wpcf7==='undefined'||wpcf7===null){
return;
}
wpcf7=$.extend({
cached: 0,
inputs: []
}, wpcf7);
$(function(){
wpcf7.supportHtml5=(function(){
var features={};
var input=document.createElement('input');
features.placeholder='placeholder' in input;
var inputTypes=[ 'email', 'url', 'tel', 'number', 'range', 'date' ];
$.each(inputTypes, function(index, value){
input.setAttribute('type', value);
features[ value ]=input.type!=='text';
});
return features;
})();
$('div.wpcf7 > form').each(function(){
var $form=$(this);
wpcf7.initForm($form);
if(wpcf7.cached){
wpcf7.refill($form);
}});
});
wpcf7.getId=function(form){
return parseInt($('input[name="_wpcf7"]', form).val(), 10);
};
wpcf7.initForm=function(form){
var $form=$(form);
$form.submit(function(event){
if(typeof window.FormData!=='function'){
return;
}
wpcf7.submit($form);
event.preventDefault();
});
$('.wpcf7-submit', $form).after('<span class="ajax-loader"></span>');
wpcf7.toggleSubmit($form);
$form.on('click', '.wpcf7-acceptance', function(){
wpcf7.toggleSubmit($form);
});
$('.wpcf7-exclusive-checkbox', $form).on('click', 'input:checkbox', function(){
var name=$(this).attr('name');
$form.find('input:checkbox[name="' + name + '"]').not(this).prop('checked', false);
});
$('.wpcf7-list-item.has-free-text', $form).each(function(){
var $freetext=$(':input.wpcf7-free-text', this);
var $wrap=$(this).closest('.wpcf7-form-control');
if($(':checkbox, :radio', this).is(':checked')){
$freetext.prop('disabled', false);
}else{
$freetext.prop('disabled', true);
}
$wrap.on('change', ':checkbox, :radio', function(){
var $cb=$('.has-free-text', $wrap).find(':checkbox, :radio');
if($cb.is(':checked')){
$freetext.prop('disabled', false).focus();
}else{
$freetext.prop('disabled', true);
}});
});
if(! wpcf7.supportHtml5.placeholder){
$('[placeholder]', $form).each(function(){
$(this).val($(this).attr('placeholder'));
$(this).addClass('placeheld');
$(this).focus(function(){
if($(this).hasClass('placeheld')){
$(this).val('').removeClass('placeheld');
}});
$(this).blur(function(){
if(''===$(this).val()){
$(this).val($(this).attr('placeholder'));
$(this).addClass('placeheld');
}});
});
}
if(wpcf7.jqueryUi&&! wpcf7.supportHtml5.date){
$form.find('input.wpcf7-date[type="date"]').each(function(){
$(this).datepicker({
dateFormat: 'yy-mm-dd',
minDate: new Date($(this).attr('min')),
maxDate: new Date($(this).attr('max'))
});
});
}
if(wpcf7.jqueryUi&&! wpcf7.supportHtml5.number){
$form.find('input.wpcf7-number[type="number"]').each(function(){
$(this).spinner({
min: $(this).attr('min'),
max: $(this).attr('max'),
step: $(this).attr('step')
});
});
}
$('.wpcf7-character-count', $form).each(function(){
var $count=$(this);
var name=$count.attr('data-target-name');
var down=$count.hasClass('down');
var starting=parseInt($count.attr('data-starting-value'), 10);
var maximum=parseInt($count.attr('data-maximum-value'), 10);
var minimum=parseInt($count.attr('data-minimum-value'), 10);
var updateCount=function(target){
var $target=$(target);
var length=$target.val().length;
var count=down ? starting - length:length;
$count.attr('data-current-value', count);
$count.text(count);
if(maximum&&maximum < length){
$count.addClass('too-long');
}else{
$count.removeClass('too-long');
}
if(minimum&&length < minimum){
$count.addClass('too-short');
}else{
$count.removeClass('too-short');
}};
$(':input[name="' + name + '"]', $form).each(function(){
updateCount(this);
$(this).keyup(function(){
updateCount(this);
});
});
});
$form.on('change', '.wpcf7-validates-as-url', function(){
var val=$.trim($(this).val());
if(val
&& ! val.match(/^[a-z][a-z0-9.+-]*:/i)
&& -1!==val.indexOf('.')){
val=val.replace(/^\/+/, '');
val='http://' + val;
}
$(this).val(val);
});
};
wpcf7.submit=function(form){
if(typeof window.FormData!=='function'){
return;
}
var $form=$(form);
$('.ajax-loader', $form).addClass('is-active');
$('[placeholder].placeheld', $form).each(function(i, n){
$(n).val('');
});
wpcf7.clearResponse($form);
var formData=new FormData($form.get(0));
var detail={
id: $form.closest('div.wpcf7').attr('id'),
status: 'init',
inputs: [],
formData: formData
};
$.each($form.serializeArray(), function(i, field){
if('_wpcf7'==field.name){
detail.contactFormId=field.value;
}else if('_wpcf7_version'==field.name){
detail.pluginVersion=field.value;
}else if('_wpcf7_locale'==field.name){
detail.contactFormLocale=field.value;
}else if('_wpcf7_unit_tag'==field.name){
detail.unitTag=field.value;
}else if('_wpcf7_container_post'==field.name){
detail.containerPostId=field.value;
}else if(field.name.match(/^_wpcf7_\w+_free_text_/)){
var owner=field.name.replace(/^_wpcf7_\w+_free_text_/, '');
detail.inputs.push({
name: owner + '-free-text',
value: field.value
});
}else if(field.name.match(/^_/)){
}else{
detail.inputs.push(field);
}});
wpcf7.triggerEvent($form.closest('div.wpcf7'), 'beforesubmit', detail);
var ajaxSuccess=function(data, status, xhr, $form){
detail.id=$(data.into).attr('id');
detail.status=data.status;
var $message=$('.wpcf7-response-output', $form);
switch(data.status){
case 'validation_failed':
$.each(data.invalidFields, function(i, n){
$(n.into, $form).each(function(){
wpcf7.notValidTip(this, n.message);
$('.wpcf7-form-control', this).addClass('wpcf7-not-valid');
$('[aria-invalid]', this).attr('aria-invalid', 'true');
});
});
$message.addClass('wpcf7-validation-errors');
$form.addClass('invalid');
wpcf7.triggerEvent(data.into, 'invalid', detail);
break;
case 'spam':
$message.addClass('wpcf7-spam-blocked');
$form.addClass('spam');
$('[name="g-recaptcha-response"]', $form).each(function(){
if(''===$(this).val()){
var $recaptcha=$(this).closest('.wpcf7-form-control-wrap');
wpcf7.notValidTip($recaptcha, wpcf7.recaptcha.messages.empty);
}});
wpcf7.triggerEvent(data.into, 'spam', detail);
break;
case 'mail_sent':
$message.addClass('wpcf7-mail-sent-ok');
$form.addClass('sent');
if(data.onSentOk){
$.each(data.onSentOk, function(i, n){ eval(n) });
}
wpcf7.triggerEvent(data.into, 'mailsent', detail);
break;
case 'mail_failed':
case 'acceptance_missing':
default:
$message.addClass('wpcf7-mail-sent-ng');
$form.addClass('failed');
wpcf7.triggerEvent(data.into, 'mailfailed', detail);
}
wpcf7.refill($form, data);
if(data.onSubmit){
$.each(data.onSubmit, function(i, n){ eval(n) });
}
wpcf7.triggerEvent(data.into, 'submit', detail);
if('mail_sent'==data.status){
$form.each(function(){
this.reset();
});
}
$form.find('[placeholder].placeheld').each(function(i, n){
$(n).val($(n).attr('placeholder'));
});
$message.html('').append(data.message).slideDown('fast');
$message.attr('role', 'alert');
$('.screen-reader-response', $form.closest('.wpcf7')).each(function(){
var $response=$(this);
$response.html('').attr('role', '').append(data.message);
if(data.invalidFields){
var $invalids=$('<ul></ul>');
$.each(data.invalidFields, function(i, n){
if(n.idref){
var $li=$('<li></li>').append($('<a></a>').attr('href', '#' + n.idref).append(n.message));
}else{
var $li=$('<li></li>').append(n.message);
}
$invalids.append($li);
});
$response.append($invalids);
}
$response.attr('role', 'alert').focus();
});
};
$.ajax({
type: 'POST',
url: wpcf7.apiSettings.getRoute('/contact-forms/' + wpcf7.getId($form) + '/feedback'),
data: formData,
dataType: 'json',
processData: false,
contentType: false
}).done(function(data, status, xhr){
ajaxSuccess(data, status, xhr, $form);
$('.ajax-loader', $form).removeClass('is-active');
}).fail(function(xhr, status, error){
var $e=$('<div class="ajax-error"></div>').text(error.message);
$form.after($e);
});
};
wpcf7.triggerEvent=function(target, name, detail){
var $target=$(target);
var event=new CustomEvent('wpcf7' + name, {
bubbles: true,
detail: detail
});
$target.get(0).dispatchEvent(event);
$target.trigger('wpcf7:' + name, detail);
$target.trigger(name + '.wpcf7', detail);
};
wpcf7.toggleSubmit=function(form, state){
var $form=$(form);
var $submit=$('input:submit', $form);
if(typeof state!=='undefined'){
$submit.prop('disabled', ! state);
return;
}
if($form.hasClass('wpcf7-acceptance-as-validation')){
return;
}
$submit.prop('disabled', false);
$('input:checkbox.wpcf7-acceptance', $form).each(function(){
var $a=$(this);
if($a.hasClass('wpcf7-invert')&&$a.is(':checked')
|| ! $a.hasClass('wpcf7-invert')&&! $a.is(':checked')){
$submit.prop('disabled', true);
return false;
}});
};
wpcf7.notValidTip=function(target, message){
var $target=$(target);
$('.wpcf7-not-valid-tip', $target).remove();
$('<span role="alert" class="wpcf7-not-valid-tip"></span>')
.text(message).appendTo($target);
if($target.is('.use-floating-validation-tip *')){
var fadeOut=function(target){
$(target).not(':hidden').animate({
opacity: 0
}, 'fast', function(){
$(this).css({ 'z-index': -100 });
});
};
$target.on('mouseover', '.wpcf7-not-valid-tip', function(){
fadeOut(this);
});
$target.on('focus', ':input', function(){
fadeOut($('.wpcf7-not-valid-tip', $target));
});
}};
wpcf7.refill=function(form, data){
var $form=$(form);
var refillCaptcha=function($form, items){
$.each(items, function(i, n){
$form.find(':input[name="' + i + '"]').val('');
$form.find('img.wpcf7-captcha-' + i).attr('src', n);
var match=/([0-9]+)\.(png|gif|jpeg)$/.exec(n);
$form.find('input:hidden[name="_wpcf7_captcha_challenge_' + i + '"]').attr('value', match[ 1 ]);
});
};
var refillQuiz=function($form, items){
$.each(items, function(i, n){
$form.find(':input[name="' + i + '"]').val('');
$form.find(':input[name="' + i + '"]').siblings('span.wpcf7-quiz-label').text(n[ 0 ]);
$form.find('input:hidden[name="_wpcf7_quiz_answer_' + i + '"]').attr('value', n[ 1 ]);
});
};
if(typeof data==='undefined'){
$.ajax({
type: 'GET',
url: wpcf7.apiSettings.getRoute('/contact-forms/' + wpcf7.getId($form) + '/refill'),
beforeSend: function(xhr){
var nonce=$form.find(':input[name="_wpnonce"]').val();
if(nonce){
xhr.setRequestHeader('X-WP-Nonce', nonce);
}},
dataType: 'json'
}).done(function(data, status, xhr){
if(data.captcha){
refillCaptcha($form, data.captcha);
}
if(data.quiz){
refillQuiz($form, data.quiz);
}});
}else{
if(data.captcha){
refillCaptcha($form, data.captcha);
}
if(data.quiz){
refillQuiz($form, data.quiz);
}}
};
wpcf7.clearResponse=function(form){
var $form=$(form);
$form.removeClass('invalid spam sent failed');
$form.siblings('.screen-reader-response').html('').attr('role', '');
$('.wpcf7-not-valid-tip', $form).remove();
$('[aria-invalid]', $form).attr('aria-invalid', 'false');
$('.wpcf7-form-control', $form).removeClass('wpcf7-not-valid');
$('.wpcf7-response-output', $form)
.hide().empty().removeAttr('role')
.removeClass('wpcf7-mail-sent-ok wpcf7-mail-sent-ng wpcf7-validation-errors wpcf7-spam-blocked');
};
wpcf7.apiSettings.getRoute=function(path){
var url=wpcf7.apiSettings.root;
url=url.replace(wpcf7.apiSettings.namespace,
wpcf7.apiSettings.namespace + path);
return url;
};})(jQuery);
(function (){
if(typeof window.CustomEvent==="function") return false;
function CustomEvent(event, params){
params=params||{ bubbles: false, cancelable: false, detail: undefined };
var evt=document.createEvent('CustomEvent');
evt.initCustomEvent(event,
params.bubbles, params.cancelable, params.detail);
return evt;
}
CustomEvent.prototype=window.Event.prototype;
window.CustomEvent=CustomEvent;
})();
function isExternal(a){function b(a){return a.replace("http://","").replace("https://","").split("/")[0]}return b(location.href)!==b(a)}if(!ThriveGlobal||!ThriveGlobal.$j){var __thrive_$oJ=window.$,ThriveGlobal={$j:jQuery.noConflict()};__thrive_$oJ&&(window.$=__thrive_$oJ)}var TVE_jQFn={},TCB_Front={tableSort:function(a){a.on("click",function(){function b(a,b){return a.text==b.text?0:a.text>b.text?1:-1}function c(a,b){return a.text==b.text?0:a.text>b.text?-1:1}var d=ThriveGlobal.$j(this),e=d.index(),f=d.parents(".tve_make_sortable"),g=f.find("tbody"),h=[],i=[],j="down"==d.attr("data-direction")?"up":"down",k=[];d.attr("data-direction",j),ThriveGlobal.$j(f).find("tbody tr").each(function(){var a=ThriveGlobal.$j(this),b=a.find("> td").eq(e),c=parseFloat(b.text());isNaN(c)?h.push({tr:a,text:b.text().trim().toLowerCase()}):i.push({tr:a,text:c})}),"down"==j?h.sort(b):h.sort(c),"down"==j?i.sort(b):i.sort(c),k="down"==j?i.concat(h):h.concat(i),ThriveGlobal.$j.each(k,function(a,b){g.append(b.tr)}),a.attr("data-direction",""),d.attr("data-direction",j)})},getCookie:function(a){for(var b=a+"=",c=document.cookie.split(";"),d=0;d<c.length;d++){for(var e=c[d];" "==e.charAt(0);)e=e.substring(1,e.length);if(0==e.indexOf(b))return e.substring(b.length,e.length)}return null},setCookie:function(a,b,c){if("number"==typeof c.expires){var d=c.expires,e=c.expires=new Date;e.setTime(+e+864e5*d)}return document.cookie=[encodeURIComponent(a),"=",encodeURIComponent(b),c.expires?"; expires="+c.expires.toUTCString():"",c.path?"; path="+c.path:"",c.domain?"; domain="+c.domain:"",c.secure?"; secure":""].join("")},postGridLayout:function(){var a=ThriveGlobal.$j(".tve_post_grid_masonry");if(a.length>0)try{a.masonry()}catch(a){console.log(a)}var b=ThriveGlobal.$j(".tve_post_grid_grid");b.length<=0||b.find(".tve_pg_row").each(function(){var a=0,b=ThriveGlobal.$j(this).css("height","");b.find(".tve_post").each(function(){var b=ThriveGlobal.$j(this),c=parseInt(b.css("height"));c>a&&(a=c),b.css("height","100%")}),b.css("height",a-1+"px")})},changeAutoplayVideo:function(a){var b,c=this;b=void 0===a?ThriveGlobal.$j(".thrv_responsive_video"):a.find(".thrv_responsive_video"),b.each(function(){if(!tve_frontend_options.is_editor_page){var a=ThriveGlobal.$j(this);a.parents(".tve_p_lb_content").length||c.makeAutoplayVideo(a)}})},makeAutoplayVideo:function(a){var b,c,d,e=a.attr("data-type");if("1"===a.attr("data-autoplay")){switch(e){case"youtube":case"vimeo":c="&autoplay=1";break;case"wistia":c="&autoPlay=true"}"youtube"===e||"vimeo"===e||"wistia"===e?(b=a.find("iframe"),d=b.attr("src"),0!==d.length&&(b.attr("src",d+c),b.attr("data-src",d+c))):"custom"!==e&&"self"!==e||a.find("video").get(0).play()}},isValidUrl:function(a){return/(http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/.test(a)},pageSectionHeight:function(){var a=TCB_Front.$window;ThriveGlobal.$j(".pdfbg.pdwbg").css({"box-sizing":"border-box",height:a.height()+"px"}),ThriveGlobal.$j(".pddbg").css("max-width",a.width()+"px"),ThriveGlobal.$j(".pddbg.pdfbg").each(function(){var a=ThriveGlobal.$j(this).css("height",""),b=a.attr("data-height"),c=a.attr("data-width");if(void 0!==b&&void 0!==c){var d=a.parent().width(),e=d*b/c;d<=c?a.css("min-height",e+"px"):a.css({"min-height":b+"px"})}})},getBrowserScrollSize:function(){var a=ThriveGlobal.$j,b={border:"none",height:"200px",margin:"0",padding:"0",width:"200px"},c=a("<div>").css(a.extend({},b)),d=a("<div>").css(a.extend({left:"-1000px",overflow:"scroll",position:"absolute",top:"-1000px"},b)).append(c).appendTo("body").scrollLeft(1e3).scrollTop(1e3),e={height:d.offset().top-c.offset().top||0,width:d.offset().left-c.offset().left||0};return d.remove(),e},openLightbox:function(a,b){function c(a,b){a.find("iframe").not(".thrv_social_default iframe").each(function(){var a=ThriveGlobal.$j(this).addClass("tcb-dr-done");a.attr("data-src",a.attr("src")),a.attr("src","")}),a.find("video").each(function(){ThriveGlobal.$j(this)[0].pause()}),void 0===b&&1===ThriveGlobal.$j(".tve_lb_open").length&&(e.removeClass(g).css("padding-right",""),f.removeClass(g)),a.removeClass("tve_lb_open tve_lb_opening").addClass("tve_lb_closing"),setTimeout(function(){a.attr("class","").css("display","none").find("tve_p_lb_content").trigger("tve.lightbox-close")},300),ThriveGlobal.$j("#tve-lg-error-container").hide()}function d(b){var c,d,e=a.find(".tve_p_lb_content"),f=TCB_Front.$window.height(),g=void 0!==b&&b?"animate":"css";TCB_Front.postGridLayout(),c=e.outerHeight(!0),d=(f-c)/2,a.find(".tve_p_lb_overlay")[g]({height:c+80+"px","min-height":f+"px"},200),e[g]({top:(d<40?40:d)+"px"},200),c+40>f&&a.addClass("tve-scroll")}var e=ThriveGlobal.$j("body"),f=ThriveGlobal.$j("html"),g="tve-o-hidden tve-l-open tve-hide-overflow",h=this.getBrowserScrollSize().width,i=this,j=parseInt(e.css("padding-right")),k=a.find("input[placeholder]");k.length&&k.thrive_iphone_placeholder(),a.find(".thrv_responsive_video").each(function(){var a=ThriveGlobal.$j(this);i.makeAutoplayVideo(a)}),a.off().on("click",".tve_p_lb_close",function(){return c(a),!1}),e.off("keyup.tve_lb_close").on("keyup.tve_lb_close",function(b){if(27==b.which)return c(a),!1}),a.children(".tve_p_lb_overlay").off("click.tve_lb_close").on("click.tve_lb_close",function(){return c(a),!1}),c(ThriveGlobal.$j(".tve_p_lb_background.tve_lb_open"),!0),a.addClass("tve_p_lb_background tve_lb_anim_"+b),e.addClass(g),f.addClass(g),TCB_Front.$window.height()<ThriveGlobal.$j(document).height()&&e.css("padding-right",j+h+"px"),a.find(".tve_scT").length?a.find(".tve_scT").each(function(){var a=ThriveGlobal.$j(this),b=parseInt(a.attr("data-selected"));tve_frontend_options.is_editor_page||a.find("> ul li").eq(isNaN(b)?0:b).click()}):a.find("iframe").not(".thrv_social_default iframe").each(function(){var a=ThriveGlobal.$j(this);a.attr("data-src")&&a.attr("src",a.attr("data-src"))}),setTimeout(function(){a.css("display",""),a.addClass("tve_lb_opening"),setTimeout(function(){d()},0)},20),a.find(".tve_p_lb_content").trigger("tve.before-lightbox-open"),setTimeout(function(){a.removeClass("tve_lb_opening").addClass("tve_lb_open").find(".tve_p_lb_content").trigger("tve.lightbox-open")},300),TCB_Front.$window.resize(function(){d()}),a.on("lbresize",function(){d(!0)})},event_triggers:function(a){window.TVE_Event_Manager_Registered_Callbacks&&a.find(".tve_evt_manager_listen").each(function(){var a=ThriveGlobal.$j(this),b=a.attr("data-tcb-events");if(b||(b=a.closest(".thrv_wrapper").attr("data-tcb-events")),!b)return!0;try{b=ThriveGlobal.$j.parseJSON(b.replace("__TCB_EVENT_","").replace("_TNEVE_BCT__","")),ThriveGlobal.$j.each(b,function(b,c){if(TVE_Event_Manager_Registered_Callbacks[c.a]){var d="mouseover"===c.t?"mouseenter":c.t;a.off(d+".tcbevt"+c.t).on(d+".tcbevt"+c.t,function(){return TVE_Event_Manager_Registered_Callbacks[c.a].call(a[0],c.t,c.a,c.config?c.config:{})})}})}catch(a){console.log("Could not parse events"),console.log(a)}})},show_data_elemements:function(a){tve_frontend_options.is_editor_page||ThriveGlobal.$j(".thrv_data_element").filter(":not(.thrv_data_element_start)").each(function(){var b=ThriveGlobal.$j(this),c=TCB_Front.$window.height();a+c>=b.offset().top+b.outerHeight()&&"hidden"!==b.css("visibility")&&b.addClass("thrv_data_element_start").trigger("tve.start-animation")})},onDOMReady:function(){function a(){g.filter(":not(.tve-recapcha-rendered)").each(function(){var a=ThriveGlobal.$j(this),b=window.innerWidth<400?"compact":a.attr("data-size");a.addClass("tve-recaptcha-rendered"),grecaptcha.render(this.id,{sitekey:a.attr("data-site-key"),theme:a.attr("data-theme"),type:a.attr("data-type"),size:b})})}function b(){"undefined"==typeof grecaptcha?setTimeout(b,50):a()}ThriveGlobal.$j(".tcb-video-background-el").each(function(){this.parentNode.classList.add("tcb-video-background-parent")}),!window.TVE_Dash||TVE_Dash.ajax_sent?this.getShareCounts():ThriveGlobal.$j(document).on("tve-dash.load",function(a){var b=TCB_Front.getShareCounts(ThriveGlobal.$j("body"),{},!0);b&&TVE_Dash.add_load_item("tcb_social",b[0],b[1])}),ThriveGlobal.$j.each(TVE_jQFn,function(a,b){ThriveGlobal.$j.fn[a]=b});var c=ThriveGlobal.$j("ul.tve_w_menu.tve_horizontal"),d=c.length;if(c.each(function(){this.style.zIndex=d+5;var a=ThriveGlobal.$j(this);a.find("ul").css("z-index",d+6),a.parents()?a.parents().each(function(){var a=ThriveGlobal.$j(this);"static"!==a.css("position")&&a.css("z-index",d+7)}):a.css("z-index",d+8),d--}),ThriveGlobal.$j(".tve_scT").each(function(){var a=ThriveGlobal.$j(this),b=parseInt(a.attr("data-selected"));a.find("iframe").not(".thrv_social_default iframe").each(function(){var a=ThriveGlobal.$j(this);a.is(":visible")&&a.attr("data-src")&&a.attr("data-src").length&&a.attr("src").length<=0?(a.attr("src",a.attr("data-src")),a.attr("data-src",""),a.removeClass("tcb-dr-done")):a.is(":visible")||a.attr("src").length&&(a.addClass("tcb-dr-done"),a.attr("data-src",a.attr("src")),a.attr("src",""))}),tve_frontend_options.is_editor_page||a.find("> ul li").eq(isNaN(b)?0:b).click()}),ThriveGlobal.$j(".thrv_toggle_shortcode").each(function(){ThriveGlobal.$j(this).find("iframe").not(".thrv_social_default iframe").not(".tcb-dr-done").each(function(){var a=ThriveGlobal.$j(this);a.addClass("tcb-dr-done"),a.attr("src")&&a.attr("data-src",a.attr("src")),a.attr("src","")})}),tve_frontend_options.is_editor_page)try{ThriveGlobal.$j("html").getNiceScroll().remove()}catch(a){}else{var e=null;TCB_Front.getCookie("account_create_fields")&&"null"!=TCB_Front.getCookie("account_create_fields")&&function(){function a(){TCB_Front.setCookie("account_create_fields",null,{path:"/"})}var b=decodeURIComponent(TCB_Front.getCookie("account_create_fields"));b=JSON.parse(b),e=b,ThriveGlobal.$j.each(b,function(a,b){var c=ThriveGlobal.$j("body").find("input[name="+b.name+"]");c.val(b.value).hide(),c.parent().append('<div class="tve-editable-field"><p>'+b.value+'</p><span class="tve_sc_icon icon-lock tve-edit-field"></span></div>')}),setTimeout(a,2500)}(),ThriveGlobal.$j(document).on("tl-ajax-loaded",function(){function a(){TCB_Front.setCookie("account_create_fields",null,{path:"/"})}e&&(ThriveGlobal.$j.each(e,function(a,b){var c=ThriveGlobal.$j("body").find("input[name="+b.name+"]");c.val(b.value).hide(),c.val(b.value).closest("form").find(".tve-editable-field").is(":visible")||c.parent().append('<div class="tve-editable-field"><p>'+b.value+'</p><span class="tve_sc_icon icon-lock tve-edit-field"></span></div>')}),setTimeout(a,2500))}()),ThriveGlobal.$j("input[type=password], input[name=confirm_password]").on("keyup",function(){var a,b=ThriveGlobal.$j(this),c=f(b.val()),d="#e3ecef",e="";b.next().find(".tve-password-strength").css({"background-color":"#e3ecef"}),c<30?(d="#ef5350",e="Weak",a=b.next().find(".tve-password-strength").first()):c>=30&&c<60?(d="#ffa726",e="So-so",a=b.next().find(".tve-password-strength:lt(2)")):c>=60&&c<80?(d="#8bc34a",e="Good",a=b.next().find(".tve-password-strength:lt(3)")):(d="#4caf50",e="Great!",a=b.next().find(".tve-password-strength:lt(4)")),a.each(function(){ThriveGlobal.$j(this).css({"background-color":d})}),b.next().find(".tve-password-strength-text").text(e).css({color:d})});var f=function(a){var b,c=0,d={},e=0;if(!a)return c;for(var f=0;f<a.length;f++)d[a[f]]=(d[a[f]]||0)+1,c+=5/d[a[f]];b={digits:/\d/.test(a),lower:/[a-z]/.test(a),upper:/[A-Z]/.test(a),nonWords:/\W/.test(a)};for(var g in b)e+=1==b[g]?1:0;return c+=10*(e-1),parseInt(c)};ThriveGlobal.$j(document).on("click",".tve-edit-field",function(){ThriveGlobal.$j(this).parent().hide().prev().show()}),ThriveGlobal.$j(document).on("click",".tve-close-error-message",function(){ThriveGlobal.$j(this).parent().hide().prev().show()}),ThriveGlobal.$j(document).on("click",".tve-image-overlay",function(){var a=ThriveGlobal.$j(this).parent();a.is("a")||a.find("img").trigger("click")}),ThriveGlobal.$j(document).on("mouseenter mouseout",".tve-image-overlay",function(a){ThriveGlobal.$j(this).parent().find("img").trigger(a.type)}),ThriveGlobal.$j(".thrv_fill_counter").each(function(){var a=ThriveGlobal.$j(this);a.one("tve.start-animation",function(){var b=a.find(".tve_fill_counter"),c=b.attr("data-fill"),d=2*c,e=["-webkit-transform","-ms-transform","transform"];for(var f in e)ThriveGlobal.$j(".tve_fill_c_in, .tve_fill_circle.tve_fill_circle1",this).css(e[f],"rotate("+c+"deg)"),ThriveGlobal.$j(".tve_fill_c_in-d",this).css(e[f],"rotate("+d+"deg)")})}),ThriveGlobal.$j(".thrv_number_counter").each(function(){ThriveGlobal.$j(this).on("tve.start-animation",function(){function a(b,d){b<=d?(c.text(b),b+=h,b+h>d&&(c.text(d),clearTimeout(g)),g=setTimeout(function(){a(b,d)},50)):clearTimeout(g)}function b(a,d){a>=d?(c.text(a),a-=h,a-h<d&&(c.text(d),clearTimeout(g)),g=setTimeout(function(){b(a,d)},50)):clearTimeout(g)}var c=ThriveGlobal.$j(".tve_numberc_text",this),d=c.attr("data-counter"),e=c.attr("data-counter-start")?c.attr("data-counter-start"):0,f=parseInt(e),g=null,h=Math.ceil((d>f?d:f)/100);h=h||1,f<d?a(f,d):b(f,d)})});ThriveGlobal.$j(".tve_p_lb_content").find("video").each(function(){ThriveGlobal.$j(this)[0].pause()}),ThriveGlobal.$j(".tve_p_lb_content iframe").not(".thrv_social_default iframe").not(".thrv_responsive_video iframe").not(".tcb-dr-done").each(function(){var a=ThriveGlobal.$j(this).addClass("tcb-dr-done");a.attr("src")&&a.attr("data-src",a.attr("src")),a.attr("src","")}),ThriveGlobal.$j(".thrv_content_reveal").each(function(){var a=ThriveGlobal.$j(this),b=parseInt(a.attr("data-after")),c=a.parents(".tve_p_lb_content"),d=a.children("thrv_tabs_shortcode").length,e=a.children(".thrv_toggle_shortcode").length;b=isNaN(b)?0:b,a.find("iframe").not(".tcb-dr-done").not(".thrv_social_default iframe").each(function(){var a=ThriveGlobal.$j(this);a.addClass("tcb-dr-done"),a.attr("src")&&a.attr("data-src",a.attr("src")),a.attr("src","")});var f=function(){setTimeout(function(){a.slideDown(200,function(){a.trigger("lbresize")}),a.data("scroll")&&jQuery("html, body").animate({scrollTop:a.offset().top-270}),"1"===tve_frontend_options.is_single&&"string"==typeof a.attr("data-redirect-url")&&a.attr("data-redirect-url").length&&TCB_Front.isValidUrl(a.attr("data-redirect-url"))&&(window.location=a.attr("data-redirect-url")),a.find("iframe").not(".thrv_social_default iframe").each(function(){var a=ThriveGlobal.$j(this);a.attr("src")||d&&e||a.attr("src",a.attr("data-src"))}),TCB_Front.changeAutoplayVideo(a),a.trigger("tve-content-revealed")},1e3*b)};c.length?c.bind("tve.lightbox-open",f):f()}),ThriveGlobal.$j(".thrv_tw_qs").tve_front_tw_qs(),ThriveGlobal.$j(".thrv-countdown_timer_evergreen, .tve_countdown_timer_evergreen").thrive_tcb_timer(),ThriveGlobal.$j(".thrv-countdown_timer_plain, .thrv_countdown_timer:not(.tve_countdown_timer_evergreen)").thrive_tcb_timer(),ThriveGlobal.$j(".thrv_lead_generation").tve_front_lead_generation(),setTimeout(function(){try{ThriveGlobal.$j(".tve_typefocus").each(function(){var a=ThriveGlobal.$j(this),b=[],c=parseInt(a.attr("data-speed")),d=a.attr("data-colors");0!==a.attr("data-typist").length&&(b.push(a.text()),b=b.concat(a.attr("data-typist").split("|")),a.typed({strings:b,loop:!0,typeSpeed:125,backSpeed:50,highlightClass:1===parseInt(a.attr("data-highlight"))?"tve_selected_typist":"",highlightStyle:1===parseInt(a.attr("data-highlight"))&&d?"background-color:"+d:"",backDelay:c,contentType:"text",startDelay:800,showCursor:a.hasClass("tve_typefocus_cursor")}))})}catch(a){console.log(a)}},1e3),ThriveGlobal.$j(".thrv_responsive_video").off().click(function(){var a,b,c,d=ThriveGlobal.$j(this),e=d.find(".video_overlay_image"),f=d.attr("data-type");switch(f){case"youtube":case"vimeo":b="&autoplay=1";break;case"wistia":b="&autoPlay=true"}if("youtube"===f||"vimeo"===f||"wistia"===f)a=d.find("iframe"),c=a.attr("src"),0!==c.length&&a.attr("src",c+b);else if("custom"===f||"self"===f){var g=d.find("video").get(0);g.paused?g.play():g.pause()}e.length>0&&e.fadeOut()})}if(TCB_Front.changeAutoplayVideo(),ThriveGlobal.$j(".thrv_responsive_video:hidden").find("video").each(function(){ThriveGlobal.$j(this)[0].pause()}),TCB_Front.postGridLayout(),TCB_Front.$window.on("load",function(){TCB_Front.postGridLayout()}),window.FB&&setTimeout(function(){ThriveGlobal.$j(".thrv_social_default .tve_s_fb_share, .thrv_social_default .tve_s_fb_like").each(function(){FB.XFBML.parse(this)})},200),TCB_Front.$window.on("scroll",function(){var a=ThriveGlobal.$j(document).scrollTop();TCB_Front.show_data_elemements(a);try{ThriveGlobal.$j(".tve_typefocus").each(function(){var b=ThriveGlobal.$j(this),c=TCB_Front.$window.height();b.data("typed")&&(a+c>=b.offset().top&&b.offset().top>a||"start"==b.attr("data-typefocus")?b.typed("start"):(b.attr("data-typefocus"),b.typed("pause")))})}catch(a){console.log(a)}}),TCB_Front.$window.trigger("scroll"),!tve_frontend_options.is_editor_page){var g=ThriveGlobal.$j(".tve-captcha-container");if(g.length){var h=!1;window.tve_gapi_loaded||(ThriveGlobal.$j.getScript("https://www.google.com/recaptcha/api.js?render=explicit",b),h=!0,window.tve_gapi_loaded=!0),h||b()}var i=ThriveGlobal.$j(".tve-fb-comments");i.length&&(ThriveGlobal.$j("#fb-root").length&&ThriveGlobal.$j("head").append('<div id="fb-root"></div>'),i.each(function(){""===ThriveGlobal.$j(this).attr("data-href")&&ThriveGlobal.$j(this).attr("data-href",window.location),ThriveGlobal.$j(this).addClass("fb-comments"),FB.XFBML.parse(this.parentNode)}));var j=ThriveGlobal.$j(".thrv_disqus_comments #disqus_thread");j.length&&(window.disqus_shortname=j.attr("data-disqus_shortname"),""==j.attr("data-disqus_url")?window.disqus_url=window.location:window.disqus_url=j.attr("data-disqus_url"),window.disqus_identifier=window.disqus_url,"undefined"==typeof DISQUS&&ThriveGlobal.$j.getScript("//"+disqus_shortname+".disqus.com/embed.js"))}window.mejs&&ThriveGlobal.$j(".tcb-video-shortcode").not(".mejs-container").filter(function(){return!ThriveGlobal.$j(this).parent().hasClass(".mejs-mediaelement")}).mediaelementplayer(),this.resizePageSection(),this.playBackgroundYoutube(ThriveGlobal.$j("div.tcb-yt-bg"))},resizePageSection:function(a){void 0===a&&(a=ThriveGlobal.$j(".tcb-window-width")),a.each(function(){var a=ThriveGlobal.$j(this),b=(a.parent().width(),a.find(".tve-page-section-in"),a.css("left"));b="auto"===b?0:Number(a.css("left").replace("px","")),a.css({width:TCB_Front.$window.width()+"px",left:-a.offset().left+b+"px"})})},onSocialCustomClick:{wnd:function(a,b,c){var d=void 0!==window.screenLeft?window.screenLeft:screen.left,e=void 0!==window.screenTop?window.screenTop:screen.top,f=window.innerWidth?window.innerWidth:document.documentElement.clientWidth?document.documentElement.clientWidth:screen.width,g=window.innerHeight?window.innerHeight:document.documentElement.clientHeight?document.documentElement.clientHeight:screen.height,h=f/2-b/2+d,i=g/2-c/2+e,j=window.open(a,"Thrive Share","scrollbars=yes,resizable=yes,toolbar=no,menubar=no,scrollbars=no,location=no,directories=no,width="+b+", height="+c+", top="+i+", left="+h);return window.focus&&j.focus(),j},fb_share:function(a){var b=a.data();if(b.href||(b.href=location.href),b.type&&"feed"!=b.type)this.wnd("https://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(b.href),650,500);else{var c="";b.name&&(c+="&title="+encodeURIComponent(b.name)),b.description&&(c+="&description="+encodeURIComponent(b.description)),b.href&&(c+="&u="+encodeURIComponent(b.href)),b.caption&&(c+="&caption="+encodeURIComponent(b.caption)),b.image&&(c+="&picture="+encodeURIComponent(b.image)),c="?"+c.substr(1),this.wnd("https://www.facebook.com/sharer.php"+c,650,500)}return!1},g_share:function(a){var b=a.data();b.href||(b.href=location.href),this.wnd("https://plus.google.com/share?url="+encodeURIComponent(b.href),600,600)},t_share:function(a){var b=a.data();b.href||(b.href=location.href),this.wnd("https://twitter.com/intent/tweet?url="+encodeURIComponent(b.href)+(b.tweet?"&text="+encodeURIComponent(b.tweet):"")+(b.via?"&via="+b.via:""),550,450)},in_share:function(a){var b=a.data();b.href||(b.href=location.href),this.wnd("https://www.linkedin.com/shareArticle?mini=true&url="+encodeURIComponent(b.href),550,400)},pin_share:function(a){var b=a.data();b.href||(b.href=location.href),this.wnd("https://pinterest.com/pin/create/button/?url="+encodeURIComponent(b.href)+(b.media?"&media="+encodeURIComponent(b.media):"")+(b.description?"&description="+encodeURIComponent(b.description):""),600,600)},xing_share:function(a){var b=a.data();b.href||(b.href=location.href),this.wnd("https://www.xing.com/spi/shares/new?url="+encodeURIComponent(b.href),600,500)}},getShareCounts:function(a,b,c){a=a||ThriveGlobal.$j("body");var d=a.find(".tve_social_items.tve_social_custom");if(d.length){var e={action:"tve_social_count",for:[]};if(void 0!==b?ThriveGlobal.$j.each(b,function(a,b){e[a]=b}):"undefined"!=typeof tve_path_params&&tve_path_params.post_id&&(e.post_id=tve_path_params.post_id),d.each(function(a){var b=ThriveGlobal.$j(this),c={};if(b.data("tve-social-counts")||!b.hasClass("tve_social_cb")&&"1"!==b.parent().attr("data-counts"))return void b.data("tve-social-counts",1);b.data("tve-social-counts",1);var d=b.prev(".tve_s_share_count"),f=b.children(".tve_s_item").each(function(){var a=ThriveGlobal.$j(this).addClass("tve_count_loading");c[a.attr("data-s")]=a.attr("data-href")});if(c.hasOwnProperty("t_share")&&1===f.length)return f.removeClass("tve_count_loading"),d.remove(),void b.parent().removeAttr("data-counts");e.for[a]=c}),!e.for.length)return null;TCB_Front.total_share_counts={};var f=function(a){a&&a.counts&&a.totals&&d.each(function(b){var c=ThriveGlobal.$j(this),d=c.prev(".tve_s_share_count"),e=c.children(".tve_s_item");if(ThriveGlobal.$j.each(a.counts[b],function(a,b){e.filter(".tve_s_"+a).find(".tve_s_count").html(b.formatted)}),e.removeClass("tve_count_loading"),a.totals&&a.totals[b]&&"1"===c.parent().attr("data-counts")){var f=parseInt(c.parent().attr("data-min_shares"));f=isNaN(f)?0:f,d.find(".tve_s_cnt").html(a.totals[b].formatted),f<a.totals[b].value?d.css("display","inline-block"):d.css("display","none")}a.totals&&a.totals[b]&&(TCB_Front.total_share_counts[e.attr("data-href")]=a.totals[b])})};if(void 0!==c&&c)return[e,f];ThriveGlobal.$j.ajax({type:"post",xhrFields:{withCredentials:!0},url:tve_frontend_options.ajaxurl,data:e,dataType:"json"}).done(f)}},playBackgroundYoutube:function(a){if(a.length){var b=this;void 0!==window.YT&&window.YT.Player?this._playYTBackground(a):(window.onYouTubeIframeAPIReady=function(){b._playYTBackground(a)},ThriveGlobal.$j.ajax({url:"https://www.youtube.com/iframe_api",type:"get",crossDomain:!0,cache:!0,dataType:"script"}))}},_playYTBackground:function(a){a.each(function(){var a,b=this.getAttribute("data-yt-id");a=34===b.length?new YT.Player(this.id,{playerVars:{autoplay:1,cc_load_policy:0,controls:0,disablekb:1,fs:0,iv_load_policy:0,modestbranding:1,loop:1,playsinline:1,rel:0,showinfo:0,listType:"playlist",list:b},events:{onReady:function(a){a.target.mute()},onStateChange:function(a){a.target.mute()}}}):new YT.Player(this.id,{videoId:b,playerVars:{autoplay:1,cc_load_policy:0,controls:0,disablekb:1,fs:0,iv_load_policy:0,modestbranding:1,loop:1,playsinline:1,rel:0,showinfo:0,playlist:b},events:{onReady:function(a){a.target.mute()},onStateChange:function(a){a.target.mute()}}}),ThriveGlobal.$j(a.getIframe()).data("tcb-yt-player",a)})},refreshBackgroundYoutube:function(){if(window.YT&&window.YT.Player){var a=this;ThriveGlobal.$j("iframe.tcb-yt-bg").each(function(){var b=ThriveGlobal.$j(this);b.data("tcb-yt-player")||a._playYTBackground(b)})}}};TVE_jQFn.tve_front_tw_qs=function(){return this.each(function(){var a=ThriveGlobal.$j(this);if(a.data("tve_front_tw_qs_done"))return this;a.data("tve_front_tw_qs_done",!0),a.click(function(){window.open(b(),"_blank")});var b=function(){var b=a.attr("data-use_custom_url")&&a.attr("data-custom_url"),c=b?a.attr("data-custom_url"):window.location.href,d=a.data("url")+"?text="+encodeURIComponent(a.find("p").text())+"&url="+encodeURIComponent(c);return a.data("via").length>0&&(d+="&via="+a.data("via")),d}})},TVE_jQFn.tve_front_lead_generation=function(){return window.TCB_PAGE_INDEX=window.TCB_PAGE_INDEX||1,this.each(function(){var a=ThriveGlobal.$j(this),b=a.find("form"),c=b.find(".tve-f-a-hidden").val();if(0==b.length&&(a.find(".thrv_lead_generation_container").wrapInner('<form method="post"></form>'),b=a.find("form")),b.find('input[type="checkbox"],input[type="radio"]').each(function(){if(!this.id)return!0;ThriveGlobal.$j("#"+this.id).not(this).length&&(this.id=this.id+"-"+window.TCB_PAGE_INDEX++,ThriveGlobal.$j(this).next("label").attr("for",this.id))}),void 0!==c&&"#"==b.attr("action")&&b.attr("action",c),a.data("tve_lg_done"))return this;if(a.data("tve_lg_done",!0),void 0!==window.SegMet&&SegMet&&-1!==b[0].action.indexOf("infusionsoft")&&!b.data("tve-segmet-submit")){b.data("tve-segmet-submit",1);var d=b[0].submit;b[0].submit=function(){return b.data("tve-segmet-submitted")?d.call(b[0]):(b.data("tve-segmet-submitted",1),b.submit())}}var e={errClass:"tve-lg-error",init:function(){this.container=ThriveGlobal.$j("#tve-lg-error-container"),this.container.length||(this.container=ThriveGlobal.$j('<div id="tve-lg-error-container"></div>').appendTo("body"),this.container.on("click",".tve-lg-err-close",ThriveGlobal.$j.proxy(this.close,this))),this.container.empty().hide(),this.clear()},close:function(){this.container.fadeOut(200);var a=b.find("."+this.errClass);return a.length||(a=b.find("input,select,textarea")),a.first().focus(),!1},clear:function(){b.find("input,select,textarea").removeClass(this.errClass)},markApiError:function(a){return this.container.append('<div class="tve-lg-err-item tve-lg-ext-err">'+a+"</div>"),this},_markError:function(a,b,c){a&&a.addClass(this.errClass),"required"===c&&this.container.find(".tve-lg-required").length||this.container.append('<div class="tve-lg-err-item tve-lg-'+c+'">'+b+"</div>")},show:function(){this.container.append('<a href="javascript:void(0)" class="tve-lg-err-close" title="Close"><span class="thrv-icon thrv-icon-cross"></span></a>');var a=this;setTimeout(function(){var c=b.offset(),d=parseInt(b.css("margin-top")),e=parseInt(b.css("margin-left")),f=c.top-10-a.container.outerHeight(!0)-(isNaN(d)?0:d);b.parents(".thrv-ribbon").length&&("bottom"==b.parents(".tve-leads-ribbon").attr("data-position")?f+=7:f=c.top+b.outerHeight()),a.container.css({top:f+"px",left:c.left-(isNaN(e)?0:e),width:b.outerWidth()}).fadeIn(200)},50)},phone:function(a,b){return!a.val().replace(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{3,6}$/im,"").length||(this._markError(a,b,"phone"),!1)},required:function(a,b){return!!("radio"===a.attr("type")?ThriveGlobal.$j('input[name="'+a.attr("name")+'"]').is(":checked"):"checkbox"===a.attr("type")?a.is(":checked"):ThriveGlobal.$j.trim(a.val()).length>0)||(this._markError(a,b,"required"),!1)},password:function(a,b){var c=!0;return a.val()||1!==a.data("required")||(c=!1),!!c||(this._markError(a,b,"password"),!1)},mismatch:function(a,b){var c=!0;return a.password!=a.confirm_password&&(c=!1),!!c||(this._markError("",b,"passwordmismatch"),!1)},email:function(a,b){return!!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(a.val())||(this._markError(a,b,"email"),!1)},getErrors:function(a){try{return JSON.parse(a.find(".tve-lg-err-msg").val())}catch(a){return{required:"Please fill in all of the required fields",phone:"The phone number is not valid",email:"The email address is not valid"}}}},f=function(a,c){var d=ThriveGlobal.$j.extend({success:"Success!",error:"Error!"},c),e=b.find("#_form_type").val(),f=b.find("input[name=name]").val()?b.find("input[name=name]").val():"",g=b.find("input[name=email]").val();if(a){b.parents(".tl-style").first().find(".tve_p_lb_close").trigger("click");var h=ThriveGlobal.$j.Event("leads_messages.tcb");b.trigger(h),"lead_generation"==e&&(b.find("input").val(""),b.parents(".tve_p_lb_content").find(".tve_p_lb_close").click()),d.success=d.success.replace("[lead_email]",g),d.success=d.success.replace("[lead_name]",f),jQuery("body").slideDown("fast",function(){jQuery("body").prepend('<div class="tvd-toast tve-fe-message"><div class="tve-toast-message"><div class="tve-toast-icon-container"><span class="tve_tick thrv-icon-checkmark"></span></div><div class="tve-toast-message-container">'+d.success+"</div></div></div>")}),setTimeout(function(){jQuery(".tvd-toast").hide()},6e3)}else{var i=b.parent(),j=i.parent(),k=j.find(".tve-error-wrapper");1==b.find("#_error_message_option").val()?(i.hide(),0==k.length?(j.append('<div class="tve-error-wrapper"><div class="tve-error-content"></div><button class="tve-close-error-message">Retry</button></div>'),d.error=d.error.replace("[lead_email]",g),d.error=d.error.replace("[lead_name]",f),j.find(".tve-error-content").append(d.error)):j.find(".tve-error-wrapper").show()):location.reload()}b.tve_form_loading(!0)};!function(){a.data("form-target")&&a.data("form-target").length&&a.find("form").attr("target",a.data("form-target"))}(),a.find(".tve-lg-err-msg").length&&function(){var c=e.getErrors(a);b.submit(function(a){if(b.data("tve-force-submit"))return!0;var d=!0,g=ThriveGlobal.$j(this),h={};if(e.init(),g.find("input, select, textarea").each(function(){var a=ThriveGlobal.$j(this),b=a.data("validation"),f=a.data("required"),g=a.data("iphone-placeholder");""!==g&&a.val()===g&&a.val(""),"password"==a.attr("type")&&(h[a.attr("name")]=a.val()),1===f&&(e.required(a,c.required)||(d=!1)),void 0!==b&&"none"!==b&&e[b]&&(e[b](a,c[b])||(d=!1))}),g.find("#g-recaptcha-response").length>0&&""==g.find("#g-recaptcha-response").val()&&(e.markApiError("Please validate captcha form"),d=!1),2==Object.keys(h).length&&(e.mismatch(h,c.passwordmismatch)||(d=!1)),!d)return e.show(),b.find("."+e.errClass).first().focus(),!1;if(b.tve_form_loading(),"api"==b.parents(".thrv_lead_generation").attr("data-connection")){var i=b.serialize()+"&action=tve_api_form_submit&url="+encodeURIComponent(location.href),j=b.find("#_submit_option").val(),k=ThriveGlobal.$j.Event("form_conversion.tcb");b.trigger(k);var l=b.find("#_autofill").val();if(l)var m=b.find("input").not("input[type=hidden]").not("input[type=password]").serializeArray();return k.post_data&&(i+="&"+ThriveGlobal.$j.param(k.post_data)),tve_frontend_options.post_id&&(i+="&post_id="+tve_frontend_options.post_id),ThriveGlobal.$j.ajax({type:"post",xhrFields:{withCredentials:!0},url:tve_frontend_options.ajaxurl,data:i}).fail(function(){e.markApiError("An error occurred while submitting your data. Please try again").show(),b.tve_form_loading(!0)}).done(function(a){try{a=ThriveGlobal.$j.parseJSON(a);var c=a.form_messages||{},d="";if(a.redirect&&(d=a.redirect,delete a.redirect),delete a.form_messages,a.variation){a.variation;delete a.variation}if(a.back_url){var e=a.back_url;delete a.back_url}var g=Object.keys(a).length>0&&!a.error;if(a.error)return void f(g,c)}catch(a){console.log(a)}var h=ThriveGlobal.$j.Event("lead_conversion_success.tcb");if(b.trigger(h),h.content_unlocked)return!1;var i=b.find("#_error_message_option").val();if(!j||"reload"===j&&(g||1!=i))return void location.reload();if("redirect"===j){var k=b.find("#_back_url").val();if(l&&m&&!isExternal(k)&&TCB_Front.setCookie("account_create_fields",JSON.stringify(m),{path:"/"}),k&&TCB_Front.isValidUrl(k)&&(g||1!=i))return void(location.href=k)}else{if("state"===j&&g){var n=TL_Front.parent_state,o=b.find(".tve-switch-state-trigger"),p=-1!==o.attr("data-tcb-events").indexOf("tl_state_lightbox"),q=b.parents(".tve_post_lightbox").length>0;if(o.trigger("click"),p)if(q)n&&(TL_Front.close_form(n),delete TL_Front.parent_state);else{var r=ThriveGlobal.$j.Event("leads_messages.tcb");r.lightbox_state=!0,b.trigger(r),b.tve_form_loading(!0)}return void(TL_Front.parent_state&&(b.parents(".tl-style").first().find(".tve_p_lb_close").trigger("click"),delete TL_Front.parent_state))}if("klicktipp-redirect"==j&&g){
if(d&&TCB_Front.isValidUrl(d))return void(location.href=d)}else if("page"==j&&g&&e&&TCB_Front.isValidUrl(e))return void(location.href=e)}return f(g,c),jQuery(".tve_lead_generated_inputs_container").parent()[0].reset(),!0}),a.stopPropagation(),a.preventDefault(),!1}var n=ThriveGlobal.$j.Event("should_submit_form.tcb");if(b.trigger(n),"1"!==b.find("input#_asset_option").val()&&!n.flag_need_data)return!0;var i=b.serialize()+"&action=tve_custom_form_submit&email="+function(a){if(a.find('[data-validation="email"]').length)return a.find('[data-validation="email"]').val();var b="";return a.find("input").each(function(){if(this.name&&this.name.match(/email/i))return b=this.value,!1}),b}(b)+"&name="+function(a){var b=!1;return a.find("input").each(function(){var a=ThriveGlobal.$j(this),c=a.attr("placeholder"),d=a.attr("name");if(c&&-1!==c.toLowerCase().indexOf("name")||d&&-1!==d.toLowerCase().indexOf("name"))return b=a,!1}),!1!==b?b.val():""}(b),k=ThriveGlobal.$j.Event("form_conversion.tcb");return b.trigger(k),k.post_data&&(i+="&"+ThriveGlobal.$j.param(k.post_data)),ThriveGlobal.$j.ajax({type:"post",xhrFields:{withCredentials:!0},url:tve_frontend_options.ajaxurl,data:i}).always(function(a){b.find("input,select,textarea").removeAttr("disabled"),b.data("tve-force-submit",!0).submit()}),a.stopPropagation(),!1})}()})},TVE_jQFn.tve_form_loading=function(a){var b=this,c=b.find("button[type=submit]").parent(),d=b.find(".tcb-form-loader");return void 0!==a&&a?(d.fadeOut(),b.find("input,select,textarea").removeAttr("disabled"),c.find("button").fadeIn(),this):(d.length||(d=ThriveGlobal.$j('<div class="tcb-form-loader"><span class="tcb-form-loader-icon thrv-icon-spinner9"></span></div>').appendTo(c),c.css({position:"relative",width:c.width()+"px",height:c.height()+"px"})),c.find("button").hide(),d.show(),this)},TVE_jQFn.thrive_tcb_timer=function(){return this.each(function(){function a(){setTimeout(function(){c.find(".tve_t_day .t-digits").css("min-width",c.find(".tve_t_sec .t-digits > span").outerWidth()*j+"px")},10)}var b,c=ThriveGlobal.$j(this),d=new Date,e=new Date(c.attr("data-date")+"T"+c.attr("data-hour")+":"+c.attr("data-min")+":"+(c.attr("data-sec")||"00")+c.attr("data-timezone")),f=0,g=0,h=0,i=0,j=2,k=c.attr("data-text"),l=c.hasClass("thrv-countdown_timer_evergreen")||c.hasClass("tve_countdown_timer_evergreen"),m=c.attr("data-norestart"),n=parseInt(c.attr("data-day")),o=parseInt(c.attr("data-hour")),p=parseInt(c.attr("data-min")),q=parseInt(c.attr("data-sec"));if(c.data("tcb_timer_done"))return this;if(c.data("tcb_timer_done",!0),l){e=new Date;var r=TCB_Front.getCookie(c.attr("data-id"));if(r){r=r.split("-");var s=new Date(r[0],r[1]-1,r[2],r[3],r[4],r[5]);e.setTime(s)}else{e.setTime(d.getTime()+24*n*3600*1e3+3600*o*1e3+60*p*1e3+1e3*q);var t=e.getFullYear()+"-"+(e.getMonth()+1)+"-"+e.getDate()+"-"+e.getHours()+"-"+e.getMinutes()+"-"+e.getSeconds(),u=new Date("2034-01-01");if(!parseInt(m)){var v=new Date(e.getTime());u=v.setDate(e.getDate()+parseInt(c.attr("data-expday"))),u=v.setHours(e.getHours()+parseInt(c.attr("data-exphour"))),u=new Date(u)}TCB_Front.setCookie(c.attr("data-id"),t,{expires:u})}}c.parents(".thrv_content_reveal").on("tve-content-revealed",a),c.parents(".tve_p_lb_content").on("tve.before-lightbox-open",a);var w=function(a,b){if(a.html()==b)return a;a.removeClass("next");var c=a.clone().removeClass("go-down").addClass("next").html(b);return a.before(c).next(".go-down").remove(),a.addClass("go-down"),setTimeout(function(){c.addClass("go-down")},20),a},x=function(a,b,c){void 0===c&&(c=!1);var d=0;if(b<=99)w(a.find(".part-1").first(),b%10),w(a.find(".part-2").first(),Math.floor(b/10)),d=2;else for(;b;)d++,w(a.find(".part-"+d).first(),b%10),b=Math.floor(b/10);if(!1!==c&&d<c)for(var e=d+1;e<=c;e++)w(a.find(".part-"+e).first(),0)},y=function(){i--,i<0&&(i=59,h--),h<0&&(h=59,g--),g<0&&(g=23,f--),x(c.find(".tve_t_sec .t-digits"),i),x(c.find(".tve_t_min .t-digits"),h),x(c.find(".tve_t_hour .t-digits"),g),x(c.find(".tve_t_day .t-digits"),f,j),f<=0&&g<=0&&h<=0&&i<=0&&(f=g=h=i=0,clearInterval(b),z())},z=function(){c.addClass("tve_cd_expired"),c.find(".t-digits span").html("0"),k&&(c.find(".tve_t_part").addClass("ct_finished"),c.find(".tve_t_text").html(k).fadeIn(200));var a=ThriveGlobal.$j.Event("tve.countdown-finished");c.trigger(a)};!l&&d>=e?z():(i=Math.floor((e.getTime()-d.getTime())/1e3),h=Math.floor(i/60),i%=60,g=Math.floor(h/60),h%=60,f=Math.floor(g/24),g%=24,f>99&&(j=f.toString().length),function(){var a=function(a,b){return ThriveGlobal.$j('<span class="part-p ct-d-placeholder">&nbsp;</span><span class="part-'+a+'">'+b+"</span>")};c.find(".tve_t_sec .t-digits").empty().append(a(2,Math.floor(i/10))).append(a(1,i%10)),c.find(".tve_t_min .t-digits").empty().append(a(2,Math.floor(h/10))).append(a(1,h%10)),c.find(".tve_t_hour .t-digits").empty().append(a(2,Math.floor(g/10))).append(a(1,g%10));for(var b=c.find(".tve_t_day .t-digits").empty(),d=f,e=1;e<=j;e++)b.append(a(e,d%10)),d=Math.floor(d/10);b.css("min-width","")}(),c.addClass("init_done"),b=setInterval(y,1e3)),l&&d>=e&&(clearInterval(b),z())})},TVE_jQFn.thrive_iphone_placeholder=function(){if(!0===(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream))return this.each(function(){var a=ThriveGlobal.$j(this),b=a.attr("placeholder");return"password"===a.attr("type")?this:a.data("iphone-placeholder")?this:(a.attr("placeholder","").val(b),void a.on("focus",function(){a.val()===b&&a.val("")}).on("blur",function(){""===a.val()&&a.val(b)}).data("iphone-placeholder",b))})},void 0!==ThriveGlobal&&(TCB_Front.$window=ThriveGlobal.$j(window),ThriveGlobal.$j(document).ready(function(){function a(){ThriveGlobal.$j(".tve-m-trigger:visible").length?ThriveGlobal.$j(".tve-m-trigger").each(function(){var a=ThriveGlobal.$j(this).parent().find("> ul");if(!a.data("tve-colors-added")&&a.find("ul a").attr("data-tve-custom-colour")){var b=a.find("ul a").attr("data-tve-custom-colour");a.find("> li > a").each(function(){var a=ThriveGlobal.$j(this);a.attr("data-tve-custom-colour")&&(a.attr("data-o-color",a.attr("data-tve-custom-colour")),a.attr("data-tve-custom-colour",b))})}a.data("tve-colors-added",!0)}):(ThriveGlobal.$j(".tve-m-expanded").removeClass("tve-m-expanded"),ThriveGlobal.$j(".tve-m-trigger").each(function(){var a=ThriveGlobal.$j(this).parent().find("> ul");if(!a.data("tve-colors-added")&&a.find("> li > a").attr("data-o-color")){var b=a.find("> li > a"),c=b.attr("data-o-color");b.attr("data-tve-custom-colour",c).removeAttr("data-o-color")}a.data("tve-colors-added",!1)}))}var b=ThriveGlobal.$j(tve_frontend_options.is_editor_page?"#tve_editor":"body"),c=[];b.on("click",".tve_scT > ul li",function(a){var b=ThriveGlobal.$j(this),c=b.parents(".tve_scT").first(),d=c.find("> .tve_scTC").eq(b.index()),e=c.find("> ul .tve_tS"),f=e.attr("data-tve-custom-colour"),g=b.attr("data-tve-custom-colour");b.attr("data-tve-custom-colour",void 0!==f&&!1!==f?f:""),e.attr("data-tve-custom-colour",void 0!==g&&!1!==g?g:""),c.find("> ul .tve_tS").removeClass("tve_tS"),c.find("> .tve_scTC").hide(),b.addClass("tve_tS"),d.show(),TCB_Front.postGridLayout(),d.find("iframe").not(".thrv_social_default iframe").each(function(){var a=ThriveGlobal.$j(this);a.attr("data-src")&&(a.attr("src",a.attr("data-src")),a.attr("data-src",""),a.removeClass("tcb-dr-done"))}),TCB_Front.changeAutoplayVideo(d),c.find("> .tve_scTC").each(function(a){if(a!==b.index()){var c=ThriveGlobal.$j(this);c.find("iframe").not(".thrv_social_default iframe").not(".tcb-dr-done").each(function(){var a=ThriveGlobal.$j(this);a.attr("src")&&(a.attr("data-src",a.attr("src")),a.attr("src",""),a.addClass("tcb-dr-done"))}),c.find("video").each(function(){ThriveGlobal.$j(this)[0].pause()})}})}),b.off("click.tvetoggleelem").on("click.tvetoggleelem",".tve_faqB",function(){var a=ThriveGlobal.$j(this).parents(".tve_faq"),b=ThriveGlobal.$j(this),c=ThriveGlobal.$j(b).siblings(".tve_faqC");c.is(":visible")?(c.find("iframe").not(".thrv_social_default iframe").each(function(){var a=ThriveGlobal.$j(this);a.attr("src")&&a.attr("data-src",a.attr("src")),a.attr("src","")}),c.find("video").each(function(){ThriveGlobal.$j(this)[0].pause()}),c.slideUp("fast",function(){c.trigger("lbresize")}),a.removeClass("tve_oFaq")):(c.find("iframe").not(".thrv_social_default iframe").each(function(){var a=ThriveGlobal.$j(this);a.attr("data-src")&&a.attr("src",a.attr("data-src"))}),c.slideDown("fast",function(){c.trigger("lbresize")}),TCB_Front.postGridLayout(),TCB_Front.changeAutoplayVideo(c),a.addClass("tve_oFaq"))}).on("click",".thrv_social_custom .tve_s_link",function(){var a=ThriveGlobal.$j(this).parents(".tve_s_item"),b=a.attr("data-s");TCB_Front.onSocialCustomClick[b]&&TCB_Front.onSocialCustomClick[b](a)}),tve_frontend_options.is_editor_page||(b.on("mouseenter",".tve_w_menu.tve_horizontal li",function(){var a=ThriveGlobal.$j(this);a.parents(".tve-m-expanded").length||a.hasClass("menu-item-has-children")&&a.find("> ul").stop().fadeIn("fast")}).on("mouseleave",".tve_w_menu.tve_horizontal li",function(){var a=ThriveGlobal.$j(this);a.parents(".tve-m-expanded").length||a.hasClass("menu-item-has-children")&&a.find("> ul").stop().fadeOut("fast")}).on("click",".menu-item",function(){return ThriveGlobal.$j(".tve-m-trigger").is(":visible")&&ThriveGlobal.$j(".tve_w_menu").removeClass("tve-m-expanded"),!0}),b.on("click",".tve-m-trigger",function(){return ThriveGlobal.$j(this).parent().find("> ul").toggleClass("tve-m-expanded"),!1}),b.on("click",".thrv_contents_table a",function(a){var b=ThriveGlobal.$j,c=b(this),d=b(c.attr("href"));d.length&&b("html, body").animate({scrollTop:d.offset().top-130})}),"undefined"!=typeof TVE_Event_Manager_Registered_Callbacks&&(TCB_Front.event_triggers(b),tve_frontend_options.page_events&&ThriveGlobal.$j.each(tve_frontend_options.page_events,function(a,b){TVE_Event_Manager_Registered_Callbacks[b.a]&&ThriveGlobal.$j(document).on("tve-page-event-"+b.t,function(a,c){var d=!0;return"timer"===b.t&&c&&b.config&&b.config.t_delay!==c&&(d=!1),!!d&&TVE_Event_Manager_Registered_Callbacks[b.a].call(document,b.t,b.a,b.config?b.config:{})})})),c.push(TCB_Front.postGridLayout),c.push(a),a()),TCB_Front.onDOMReady(),"undefined"==typeof ThriveApp&&(TCB_Front.pageSectionHeight(),c.push(TCB_Front.pageSectionHeight)),c.push(TCB_Front.resizePageSection),TCB_Front.$window.resize(function(){ThriveGlobal.$j.each(c,function(a,b){b.call(null)})}),TCB_Front.tableSort(ThriveGlobal.$j(".tve_make_sortable tr:last-child th"))})),function(a){"use strict";var b=function(b,c){this.el=a(b),this.options=a.extend({},a.fn.typed.defaults,c),this.isInput=this.el.is("input"),this.attr=this.options.attr,this.showCursor=!this.isInput&&this.options.showCursor,this.elContent=this.attr?this.el.attr(this.attr):this.el.text(),this.contentType=this.options.contentType,this.typeSpeed=this.options.typeSpeed,this.startDelay=this.options.startDelay,this.backSpeed=this.options.backSpeed,this.backDelay=this.options.backDelay,this.stringsElement=this.options.stringsElement,this.strings=this.options.strings,this.strPos=0,this.arrayPos=0,this.stopNum=0,this.loop=this.options.loop,this.loopCount=this.options.loopCount,this.curLoop=0,this.stop=!1,this.cursorChar=this.options.cursorChar,this.shuffle=this.options.shuffle,this.sequence=[],this.build()};b.prototype={constructor:b,init:function(a){function b(){for(var b=0;b<c.strings.length;++b)c.sequence[b]=b;c.shuffle&&(c.sequence=c.shuffleArray(c.sequence)),"delete"===a?(c.strPos=c.strings[c.sequence[c.arrayPos]].length,c.options.highlightClass?c.highlight(c.strings[c.sequence[c.arrayPos]],c.strPos):c.backspace(c.strings[c.sequence[c.arrayPos]],c.strPos)):(c.strPos=0,c.typewrite(c.strings[c.sequence[c.arrayPos]],c.strPos))}void 0===a&&(a="delete");var c=this;"delete"===a?c.timeout=setTimeout(b,c.startDelay):b()},build:function(){var b=this;if(!0===this.showCursor&&(this.cursor=a('<span class="typed-cursor">'+this.cursorChar+"</span>"),this.el.after(this.cursor)),this.stringsElement){b.strings=[],this.stringsElement.hide();var c=this.stringsElement.find("p");a.each(c,function(c,d){b.strings.push(a(d).html())})}this.init()},typewrite:function(b,c){if(!0!==this.stop){var d=this.typeSpeed,e=this;a(this.el);e.timeout=setTimeout(function(){var a=0,d=b.substr(c);if("^"===d.charAt(0)){var f=1;/^\^\d+/.test(d)&&(d=/\d+/.exec(d)[0],f+=d.length,a=parseInt(d)),b=b.substring(0,c)+b.substring(c+f)}if("html"===e.contentType){var g=b.substr(c).charAt(0);if("<"===g||"&"===g){var h="",i="";for(i="<"===g?">":";";b.substr(c).charAt(0)!==i;)h+=b.substr(c).charAt(0),c++;c++,h+=i}}e.timeout=setTimeout(function(){if(c===b.length){if(e.options.onStringTyped(e.arrayPos),e.arrayPos===e.strings.length-1&&(e.options.callback(),e.curLoop++,!1===e.loop||e.curLoop===e.loopCount))return;e.timeout=setTimeout(function(){e.options.highlightClass?e.highlight(b,c):e.backspace(b,c)},e.backDelay)}else{0===c&&e.options.preStringTyped(e.arrayPos);var a=b.substr(0,c+1);e.attr?e.el.attr(e.attr,a):e.isInput?e.el.val(a):"html"===e.contentType?e.el.html(a):e.el.text(a),c++,e.typewrite(b,c)}},a)},d)}},highlight:function(b,c){if(!0!==this.stop){var d=this.backSpeed,e=this;a(e.el),a("<span/>");e.timeout=setTimeout(function(){if("html"===e.contentType&&">"===b.substr(c).charAt(0)){for(var a="";"<"!==b.substr(c).charAt(0);)a-=b.substr(c).charAt(0),c--;c--,a+="<"}var d=b.substr(0,c),f=b.substr(c);e.attr?e.el.attr(e.attr,d):e.el.html(d+'<span class="'+e.options.highlightClass+'" style="'+(e.options.highlightStyle||"")+'">'+f+"</span>"),c>e.stopNum?(c--,e.highlight(b,c)):c<=e.stopNum&&setTimeout(function(){e.arrayPos++,e.arrayPos===e.strings.length?(e.arrayPos=0,e.init("write")):e.typewrite(e.strings[e.sequence[e.arrayPos]],c)},200)},d)}},backspace:function(b,c){if(!0!==this.stop){var d=this.backSpeed,e=this,f=a(e.el);e.timeout=setTimeout(function(){if("html"===e.contentType&&">"===b.substr(c).charAt(0)){for(var a="";"<"!==b.substr(c).charAt(0);)a-=b.substr(c).charAt(0),c--;c--,a+="<"}var d=b.substr(0,c);e.attr?e.el.attr(e.attr,d):e.isInput?e.el.val(d):"html"===e.contentType?e.el.html(d):e.el.text(d),c>e.stopNum?(c--,e.backspace(b,c)):c<=e.stopNum&&(e.arrayPos++,e.arrayPos===e.strings.length?(e.arrayPos=0,e.shuffle&&(e.sequence=e.shuffleArray(e.sequence)),e.init("write")):e.typewrite(e.strings[e.sequence[e.arrayPos]],c),e.options.highlightClass&&f.is("."+e.options.highlightClass)&&f.removeClass(e.options.highlightClass))},d)}},shuffleArray:function(a){var b,c,d=a.length;if(d)for(;--d;)c=Math.floor(Math.random()*(d+1)),b=a[c],a[c]=a[d],a[d]=b;return a},pause:function(){var a=this;a.stop=!0,clearInterval(a.timeout)},start:function(){!1!==this.stop&&(this.stop=!1,this.init())},reset:function(){var a=this;clearInterval(a.timeout);var b=this.el.attr("id");this.el.after('<span id="'+b+'"/>'),this.el.remove(),void 0!==this.cursor&&this.cursor.remove(),a.options.resetCallback()}},a.fn.typed=function(c){return this.each(function(){var d=a(this),e=d.data("typed"),f="object"==typeof c&&c;e||d.data("typed",e=new b(this,f)),"string"==typeof c&&e[c]()})},a.fn.typed.defaults={strings:["These are the default values...","You know what you should do?","Use your own!","Have a great day!"],stringsElement:null,typeSpeed:0,startDelay:0,backSpeed:0,shuffle:!1,backDelay:500,loop:!1,loopCount:!1,showCursor:!0,cursorChar:"|",attr:null,contentType:"html",callback:function(){},preStringTyped:function(){},onStringTyped:function(){},resetCallback:function(){}}}(window.jQuery);
var TL_Front=TL_Front||{},ThriveGlobal=ThriveGlobal||{$j:jQuery.noConflict()};TL_Front.add_page_css=function(a){ThriveGlobal.$j.each(a,function(a,b){a+="-css",ThriveGlobal.$j("#"+a).length||ThriveGlobal.$j('link[href="'+b+'"]').length||ThriveGlobal.$j('<link rel="stylesheet" id="'+a+'" type="text/css" href="'+b+'"/>').appendTo("head")})},TL_Front.document_write=function(a){ThriveGlobal.$j("body").append(a)},TL_Front.add_head_script=function(a,b,c){var d=document.createElement("script"),e=ThriveGlobal.$j("head")[0];d.async=!0,"function"==typeof c&&(d.onload=d.onreadystatechange=c),void 0!==b&&(d.id=b),d.src=a,e.insertBefore(d,e.firstChild)},TL_Front.add_page_js=function(a,b){function c(){if(0===d)return void b();setTimeout(c,50)}"function"!=typeof b&&(b=function(){});var d=0;ThriveGlobal.$j.each(a,function(a,b){if("tve_frontend"===a&&"undefined"!=typeof TCB_Front)return!0;if(a+="-js",b&&!ThriveGlobal.$j("#"+a).length&&!ThriveGlobal.$j('script[src="'+b+'"]').length){if(d++,-1!==b.indexOf("connect.facebook.net"))return TL_Front.add_head_script(b,a,function(){d--}),!0;ThriveGlobal.$j.getScript(b,function(){d--})}}),c()},TL_Front.do_impression=function(){var a=TL_Front.impressions_data;if(void 0===a)return void console.log("No form to register impression for !");var b={security:TL_Const.security,action:TL_Const.action_impression,tl_data:a,current_screen:TL_Const.current_screen};ThriveGlobal.$j.each(TL_Const.custom_post_data,function(a,c){b[a]=c}),window.TVE_Dash&&!TVE_Dash.ajax_sent?TVE_Dash.add_load_item("tl_impression",b):ThriveGlobal.$j.post(TL_Const.ajax_url,b)},ThriveGlobal.$j(function(){function a(){function a(a){if(a.find('[data-validation="email"]').length)return a.find('[data-validation="email"]').val();var b="";return a.find("input").each(function(){if(this.name&&this.name.match(/email/i))return b=this.value,!1}),b}if(!TL_Const.forms)return!1;ThriveGlobal.$j("body").on("submit",".tve-leads-conversion-object form",function(b){var c=ThriveGlobal.$j(this),d=c.parents(".tve-leads-conversion-object").first().attr("data-tl-type"),e={};if(c.data("tve-force-submit")||c.data("tl-do-submit")||!d||!TL_Const.forms[d])return!0;c.tve_form_loading(),c.find("input").each(function(){var a=ThriveGlobal.$j(this),b=a.attr("name");void 0!==b&&-1===TL_Const.ignored_fields.indexOf(b)&&(e[a.attr("name")]=a.val())});var f={security:TL_Const.security,action:TL_Const.action_conversion,type:d,tl_data:TL_Const.forms[d],custom_fields:e,email:a(c),current_screen:TL_Const.current_screen};return ThriveGlobal.$j.each(TL_Const.custom_post_data,function(a,b){f[a]=b}),ThriveGlobal.$j.ajax({url:TL_Const.ajax_url,data:f,type:"post",xhrFields:{withCredentials:!0}}).always(function(){void 0===c.attr("action")?location.reload():c.data("tve-force-submit",!0).submit()}),!1}),ThriveGlobal.$j("body").on("form_conversion.tcb",".tve-leads-conversion-object form",function(a){var b=ThriveGlobal.$j(this),c=b.parents(".tve-leads-conversion-object").first().attr("data-tl-type");if(!c||!TL_Const.hasOwnProperty("forms")||!TL_Const.forms[c])return!0;var d={type:c,tl_data:TL_Const.forms[c],current_screen:TL_Const.current_screen};ThriveGlobal.$j.each(TL_Const.custom_post_data,function(a,b){d[a]=b}),a.post_data=a.post_data||{},a.post_data.thrive_leads=d}).on("lead_conversion_success.tcb",".tve_lead_lock_shortcode form",function(a){var b=ThriveGlobal.$j(this),c=b.parents(".tve_content_lock");c.removeClass("tve_lead_lock").find(".tve_lead_lock_shortcode").remove(),c.find(".tve_lead_locked_overlay").remove(),a.content_unlocked=!0}).on("leads_states.tcb",".tve-leads-conversion-object form",function(a,b){var c=ThriveGlobal.$j(this);switch(c.find("#_form_type").val()){case"ribbon":var d=c.parents(".tve-leads-ribbon");c.parents(".tve_shortcode_editor").empty().html(b),TL_Front.open_ribbon(d);break;case"lightbox":case"tve_lead_2s_lightbox":c.parents(".tve_p_lb_control").empty().html(b);break;case"widget":case"in-content":case"post-footer":case"php-insert":c.parents(".tve_shortcode_editor").empty().html(b);break;case"slide-in":var e=c.parents(".tve-leads-slide-in");c.parents(".tve_shortcode_editor").empty().html(b),TL_Front.open_slide_in(e);break;case"screen-filler-lightbox":var f=c.parents(".tve-leads-screen-filler");c.parents(".tve_shortcode_editor").empty().html(b),TL_Front.open_screen_filler(f);break;case"scroll-mat":var d=c.parents(".tve-leads-greedy_ribbon");c.parents(".tve_shortcode_editor").empty().html(b),TL_Front.open_ribbon(d);break;case"tve_lead_shortcode":c.parents(".tve-leads-shortcode").empty().html(b);break;case"lead_generation":default:a.change_states=!1}a.change_states=!0}).on("leads_messages.tcb",".tve-leads-conversion-object form",function(a){var b=ThriveGlobal.$j(this);switch(b.find("#_form_type").val()){case"tve_lead_shortcode":a.lightbox_state&&b.parents(".tve-leads-shortcode").hide();break;case"ribbon":b.parents(".thrv-ribbon").find(".tve-ribbon-close").click();break;case"lightbox":case"tve_lead_2s_lightbox":b.parents(".tve_p_lb_content").find(".tve_p_lb_close").click(),b.parents(".tve-leads-screen-filler").find(".tve-screen-filler-close").click();break;case"slide-in":b.parents(".thrv-leads-slide-in").find(".tve-leads-close").click();break;case"screen-filler-lightbox":b.parents(".tve-leads-screen-filler").find(".tve-screen-filler-close").click();break;case"scroll-mat":b.parents(".thrv-greedy-ribbon").find(".tve_et_click").click();break;case"widget":case"in-content":case"post-footer":case"php-insert":default:b.find("input").val("")}b.parents(".tve-leads-conversion-object").find(".tve_ea_thrive_leads_form_close").click(),TL_Front.parent_state&&TL_Front.close_form(TL_Front.parent_state)})}function b(b){function d(a){var b=a.replace("two_step_","");ThriveGlobal.$j(".tl-2step-trigger-"+b).show()}function e(){if(!c)return void setTimeout(e,50);TCB_Front.event_triggers(ThriveGlobal.$j("body")),TCB_Front.onDOMReady(),a(),ThriveGlobal.$j(TCB_Front).trigger("tl-ajax-loaded")}if(b&&b.res&&b.js&&b.html){if(TL_Front.add_page_css(b.res.css),TL_Front.add_page_css(b.res.fonts),b.html&&(b.html.widget||ThriveGlobal.$j(".tl-widget-container").remove(),ThriveGlobal.$j.each(b.html,function(a,c){if(!c)return!0;if("in_content"===a){var e="after",f=ThriveGlobal.$j(".tve-tl-cnt-wrap"),g=f.find("p").filter(":visible");0===g.length&&0==b.in_content_pos?ThriveGlobal.$j(".tve-tl-cnt-wrap").prepend(c):(0==b.in_content_pos&&(b.in_content_pos=1,e="before"),g.eq(parseInt(b.in_content_pos)-1)[e](c))}else{var h=ThriveGlobal.$j(".tl-placeholder-f-type-"+a);if(b.js[a]&&b.js[a].content_locking){var i=h.parents(".tve_content_lock").first();if(b.js[a].has_conversion)return i.removeClass("tve_lock_hide"),!0;"tve_lock_blur"==b.js[a].lock&&i.removeClass("tve_lock_hide").addClass(b.js[a].lock)}h.replaceWith(c),"widget"===a&&ThriveGlobal.$j(".tl-widget-container").children().unwrap(),0===a.indexOf("two_step")&&d(a)}})),b.body_end){var f=ThriveGlobal.$j(b.body_end);f.find(".tve_wistia_popover").each(function(){ThriveGlobal.$j("#"+this.id).length&&this.parentNode.removeChild(this)}),f.filter("link[href]").each(function(){ThriveGlobal.$j('link[href="'+this.getAttribute("href")+'"]').length&&(f=f.not(this))}),f.filter("script[src]").each(function(){ThriveGlobal.$j('script[src="'+this.getAttribute("src")+'"]').length&&(f=f.not(this))});try{ThriveGlobal.$j("body").append(f)}catch(a){console.log("Body append: "+a)}}void 0!==b.js.TVO_Form&&(TVO_Form=b.js.TVO_Form),TL_Front.add_page_js(b.res.js,function(){c=!0}),setTimeout(e,50),TL_Const.forms=b.js}}if("undefined"!=typeof TL_Const){if(ThriveGlobal.$j(".tve-leads-screen-filler iframe, .tve-leads-ribbon iframe").not(".thrv_social_default iframe").not(".tcb-dr-done").each(function(){var a=ThriveGlobal.$j(this).addClass("tcb-dr-done");a.attr("src")&&a.attr("data-src",a.attr("src")),a.attr("src","")}),"undefined"!=typeof TCB_Front&&ThriveGlobal.$j(TCB_Front).on("content_loaded.thrive",function(a,b){b.find(".tve-tl-anim").each(function(){var a=ThriveGlobal.$j(this);ThriveGlobal.$j(TL_Front).trigger("showform.thriveleads",{$target:a})})}),ThriveGlobal.$j(TL_Front).on("showform.thriveleads",function(a,b){var c,d=b.$target?b.$target:ThriveGlobal.$j("."+b.form_id);d.length&&(b.first&&(d=d.first()),d.attr("data-s-state")&&(d=d.closest(".tl-states-root").find('[data-state="'+d.attr("data-s-state")+'"] .tl-lb-target')),c=d.hasClass("tve-tl-anim")?d:d.find(".tve-tl-anim"),d.css("display",""),setTimeout(function(){c.addClass("tve-leads-triggered"),TL_Front.handle_typefocus(c,"start"),TCB_Front.postGridLayout()},0),"function"==typeof TL_Front["open_"+b.form_type]?TL_Front["open_"+b.form_type](d,b.TargetEvent):d.show(),setTimeout(function(){d.find(".thrv_responsive_video iframe, .thrv_custom_html_shortcode iframe").each(function(){var a=ThriveGlobal.$j(this);a.attr("data-src")&&a.attr("src",a.attr("data-src"))})},200))}),ThriveGlobal.$j("body").on("click",".tve-ribbon-close",function(){var a=ThriveGlobal.$j(this).closest(".tve-leads-ribbon"),b=a.data("position");a.find(".thrv_responsive_video iframe, .thrv_custom_html_shortcode iframe, .thrv_responsive_video video").each(function(){var a=ThriveGlobal.$j(this);a.attr("data-src",a.attr("src")),a.attr("src","")}),a.removeClass("tve-leads-triggered"),"top"===b?ThriveGlobal.$j("body").animate({marginTop:0},200,function(){document.body.style.removeProperty("margin-top")}):"bottom"===b&&ThriveGlobal.$j("body").animate({marginBottom:"0px"},200,function(){document.body.style.removeProperty("margin-bottom")}),TL_Front.handle_typefocus(a,"pause"),setTimeout(function(){a.css(b,"")},400),ThriveGlobal.$j("#tve-lg-error-container").hide()}),TL_Const.ajax_load||TL_Front.do_impression(),TL_Const.ajax_load){var c=!1,d=(ThriveGlobal.$j(".tve-leads-two-step-trigger").hide(),{tcb_js:"undefined"!=typeof TCB_Front?1:0,main_group_id:TL_Const.main_group_id,shortcode_ids:TL_Const.shortcode_ids,two_step_ids:TL_Const.two_step_ids,action:"tve_leads_ajax_load_forms",security:TL_Const.security,display_options:TL_Const.display_options,current_screen:TL_Const.current_screen});return ThriveGlobal.$j.each(TL_Const.custom_post_data,function(a,b){d[a]=b}),void(window.TVE_Dash&&!TVE_Dash.ajax_sent?ThriveGlobal.$j(document).on("tve-dash.load",function(a){TVE_Dash.add_load_item("tl_lazy_load",d,b)}):ThriveGlobal.$j.ajax({url:TL_Const.ajax_url,type:"post",dataType:"json",data:d,xhrFields:{withCredentials:!0}}).done(b))}a()}}),TL_Front.switch_lightbox_state=function(a,b){return a.find(".tve_p_lb_overlay").css("opacity","0.8"),a.find(".tve_p_lb_content").css("top",b.find(".tve_p_lb_content").css("top")).addClass("tve-leads-triggered"),window.tve_lb_switch_state=!0,TL_Front.open_lightbox(a.find(".tl-lb-target"))},TL_Front.close_lightbox=function(){var a=ThriveGlobal.$j("body"),b=ThriveGlobal.$j("html"),c=arguments[0]||a.data("tl-open-lightbox");c&&c.length&&(c.find(".tve-tl-anim").removeClass("tve-leads-triggered"),window.tve_lb_switch_state||(1===ThriveGlobal.$j(".tve_lb_open").length&&(a.removeClass("tve-o-hidden tve-l-open tve-hide-overflow").css("padding-right",""),b.removeClass("tve-o-hidden tve-l-open tve-hide-overflow")),b.removeClass(b.data("tl-anim-class"))),window.tve_lb_switch_state=!1,setTimeout(function(){c.addClass("tve_lb_closing"),c.removeClass("tve_lb_open tve_lb_opening tve_lb_closing tve_p_lb_background").css({visibility:"hidden",position:"fixed",left:"-9000px"}).find("tve_p_lb_content").trigger("tve.lightbox-close")},200),c.find(".thrv_responsive_video iframe, .thrv_custom_html_shortcode iframe, .thrv_responsive_video video").each(function(){var a=ThriveGlobal.$j(this);a.attr("data-src",a.attr("src")),a.attr("src","")}),TL_Front.handle_typefocus(c,"pause"),ThriveGlobal.$j("#tve-lg-error-container").hide())},TL_Front.open_lightbox=function(a,b){var c=window.tve_lb_switch_state;ThriveGlobal.$j.fn.thrive_iphone_placeholder&&a.find("input[placeholder]").thrive_iphone_placeholder(),TL_Front.close_lightbox(ThriveGlobal.$j(".tve_p_lb_background.tve_lb_open")),a.css({visibility:"",position:"",left:"",display:""}).parents(".tl-style").css({visibility:"",position:"",left:"",display:""});var d=ThriveGlobal.$j("body"),e=ThriveGlobal.$j("html"),f=function(){var a=ThriveGlobal.$j,b={border:"none",height:"200px",margin:"0",padding:"0",width:"200px"},c=a("<div>").css(a.extend({},b)),d=a("<div>").css(a.extend({left:"-1000px",overflow:"scroll",position:"absolute",top:"-1000px"},b)).append(c).appendTo("body").scrollLeft(1e3).scrollTop(1e3),e={height:d.offset().top-c.offset().top||0,width:d.offset().left-c.offset().left||0};return d.remove(),e}().width,g=parseInt(d.css("paddingRight")),h=ThriveGlobal.$j(".tve_p_lb_background.tve_lb_open").length;isNaN(g)&&(g=0),a.find(".tve_p_lb_close").off().on("click",function(){return TL_Front.close_lightbox(),!1}),d.off("keyup.tve_lb_close").on("keyup.tve_lb_close",function(a){if(27==a.which)return TL_Front.close_lightbox(),!1}),a.find(".tve_p_lb_overlay").off("click.tve_lb_close").on("click.tve_lb_close",function(){return TL_Front.close_lightbox(),!1}),d.data("tl-open-lightbox",a),a.addClass("tve_p_lb_background"),d.addClass("tve-o-hidden tve-l-open tve-hide-overflow"),e.addClass("tve-o-hidden tve-l-open tve-hide-overflow");var i=ThriveGlobal.$j(window).height(),j=i<ThriveGlobal.$j(document).height();!c&&j&&d.css("padding-right",g+f+"px"),a.find(".thrv_responsive_video iframe, .thrv_custom_html_shortcode iframe, .thrv_responsive_video video").each(function(){var a=jQuery(this);a.attr("data-src")&&a.attr("src",a.attr("data-src"))}),a.find(".thrv_responsive_video").each(function(){var a=ThriveGlobal.$j(this);TCB_Front.makeAutoplayVideo(a)});var k="";ThriveGlobal.$j.each(a.parents(".tl-states-root").attr("class").split(" "),function(a,b){if(0===b.indexOf("tl-anim"))return k=b,!1}),e.addClass(k).data("tl-anim-class",k),setTimeout(function(){function b(){var b=a.find(".tve_p_lb_content").outerHeight(!0)+2*parseInt(a.css("padding-top")),c=a.find(".tve_p_lb_content"),d=ThriveGlobal.$j(window).height(),e=(d-b)/2;a.find(".tve_p_lb_overlay").css({height:b+80+"px","min-height":d+"px"}),h?c.animate({top:e<40?40:e},100):c.css("top",(e<40?40:e)+"px"),b+40>d&&a.addClass("tve-scroll")}setTimeout(function(){a.addClass("tve_lb_opening")},0),a.find("iframe").not(".thrv_social_default iframe").each(function(){var a=ThriveGlobal.$j(this);!a.data("tve_ifr_loaded")&&a.attr("data-src")&&a.data("tve_ifr_loaded",1).attr("src",a.attr("data-src"))}),b(),ThriveGlobal.$j(window).on("resize",b)},20),setTimeout(function(){a.removeClass("tve_lb_opening").addClass("tve_lb_open").find(".tve_p_lb_content").trigger("tve.lightbox-open"),ThriveGlobal.$j(window).trigger("scroll")},300),b&&b.preventDefault&&(b.preventDefault(),b.stopPropagation()),a.parents(".tl-states-root").off("switchstate").on("switchstate",function(a,b){var c=Array.prototype.slice.call(arguments,1);TL_Front.switch_lightbox_state.apply(TL_Front,c)})},TL_Front.open_two_step_lightbox=TL_Front.open_lightbox,TL_Front.open_ribbon=function(a){function b(){a.addClass("tve-leads-triggered");var b=a.attr("data-position")||"top";"top"===b?a.css("top",ThriveGlobal.$j("#wpadminbar").length?"32px":"0px"):"bottom"===b&&(a.css("bottom","0px"),a.css("top","auto"));var c=0,d=a.outerHeight(),e=setInterval(function(){c++;var f=a.outerHeight();f==d&&10!=c||clearInterval(e),"top"===b?ThriveGlobal.$j("body").animate({"margin-top":f+"px"},200,function(){document.body.style.setProperty("margin-top",f+"px","important")}):"bottom"===b&&ThriveGlobal.$j("body").animate({"margin-bottom":f+"px"},200)},100);a.off("switchstate").on("switchstate",function(a,b){var c=Array.prototype.slice.call(arguments,1);TL_Front.switch_ribbon_state.apply(TL_Front,c)})}TL_Const.forms.greedy_ribbon?(TL_Const.close_callbacks=TL_Const.close_callbacks||{},TL_Const.close_callbacks.greedy_ribbon=[b]):b()},TL_Front.switch_ribbon_state=function(a){var b=a.outerHeight(!0),c="top"===a.parent().attr("data-position")?"margin-top":"margin-bottom",d={};d[c]=b+"px",ThriveGlobal.$j("body").animate(d,200)},TL_Front.open_greedy_ribbon=function(a){var b=ThriveGlobal.$j("body"),c=ThriveGlobal.$j(window),d=b.css("position");c.scrollTop(0),b.css("position","static"),b.addClass("tve-tl-gr-anim"),a.css("top",ThriveGlobal.$j("#wpadminbar").length?"32px":"0px");var e=a.outerHeight();b[0].style.setProperty("margin-top",e+"px","important");var f=1;setTimeout(function(){ThriveGlobal.$j('.tve-leads-ribbon[data-position="top"]').removeClass("tve-leads-triggered")},50),c.scroll(function(){var g=b.hasClass("tve-tl-gr-anim");if(1===f&&g){var h=c.scrollTop();if(h>e){(a.find(".tve_ea_thrive_wistia").length||a.find(".tve_with_wistia_popover"))&&ThriveGlobal.$j(".wistia_placebo_close_button").trigger("click"),b.removeClass("tve-tl-gr-anim"),a.addClass("tve-no-animation");var i=h-e;a.removeClass("tve-leads-triggered"),a.find(".thrv_responsive_video iframe, .thrv_custom_html_shortcode iframe, .thrv_responsive_video video").each(function(){var a=ThriveGlobal.$j(this);a.attr("data-src",a.attr("src")),a.attr("src","")}),b.css("margin-top",""),b.css("position",d),c.scrollTop(i),a.removeClass("tve-no-animation"),f=0,TL_Front.form_closed("greedy_ribbon"),TL_Const.forms.greedy_ribbon.allow_callbacks=!1}}}),a.off("switchstate").on("switchstate",function(a,b){})},TL_Front.open_screen_filler=function(a,b){function c(a){a.find(".thrv_responsive_video iframe, .thrv_custom_html_shortcode iframe, .thrv_responsive_video video").each(function(){var a=ThriveGlobal.$j(this);a.attr("data-src",a.attr("src")),a.attr("src","")}),a.removeClass("tve-leads-triggered"),TL_Front.handle_typefocus(a,"pause"),ThriveGlobal.$j(document).off("keyup.close-screenfiller"),0==ThriveGlobal.$j.find(".tve-leads-ribbon").length&&ThriveGlobal.$j("body").animate({"margin-top":"0px"},200),e.removeClass(d),f.removeClass(f.data("tl-s-anim-class")),setTimeout(function(){a.css("top","").hide()},400),ThriveGlobal.$j("#tve-lg-error-container").hide()}var d="tve-so-hidden tve-sl-open tve-s-hide-overflow",e=ThriveGlobal.$j("html,body"),f=ThriveGlobal.$j("html");if(ThriveGlobal.$j.fn.thrive_iphone_placeholder&&a.find("input[placeholder]").thrive_iphone_placeholder(),a.css("top",ThriveGlobal.$j("#wpadminbar").length?"32px":"0px").css("visibility",""),!0===a.hasClass("stl-anim-slip_from_top")){var g=ThriveGlobal.$j(window).scrollTop();a.css("top",g).css("visibility","")}a.find(".tve-screen-filler-close").on("click",function(){c(a)}),e.addClass(d);var h="";ThriveGlobal.$j.each(a.attr("class").split(" "),function(a,b){if(0===b.indexOf("stl-anim"))return h=b,!1}),f.addClass(h).data("tl-s-anim-class",h),TL_Front.close_screen_filler=c,b&&b.preventDefault&&(b.preventDefault(),b.stopPropagation()),ThriveGlobal.$j(document).off("keyup.close-screenfiller").on("keyup.close-screenfiller",function(b){27==b.which&&c(a)}),a.find(".thrv_responsive_video iframe, .thrv_custom_html_shortcode iframe, .thrv_responsive_video video").each(function(){var a=jQuery(this);a.attr("data-src")&&a.attr("src",a.attr("data-src"))})},TL_Front.switch_slide_in_state=function(a){TL_Front.slide_in_position(a.find(".thrv-leads-slide-in"))},TL_Front.slide_in_position=function(a){var b=ThriveGlobal.$j(window),c=a.outerHeight();if(b.width()<=782||b.height()<c){a.parents(".tve-leads-slide-in").addClass("tve-lb");var d=b.height(),e=ThriveGlobal.$j("body"),f=ThriveGlobal.$j("html");setTimeout(function(){var b=(d-c)/2;e.addClass("tve-o-hidden tve-l-open tve-hide-overflow"),f.addClass("tve-o-hidden tve-l-open tve-hide-overflow"),a.parents(".tve-leads-conversion-object").first().css({height:c+80+"px","min-height":d+"px"}),a.css("top",(b<40?40:b)+"px"),c+40>d&&a.parents(".tve-leads-slide-in").css("overflow-y","scroll")},0)}},TL_Front.open_slide_in=function(a){function b(a){a.removeClass("tve-leads-triggered"),TL_Front.handle_typefocus(a,"pause"),ThriveGlobal.$j(document).off("keyup.close-slidein"),d.removeClass(c),e.removeClass(c),a.find(".thrv_responsive_video iframe, .thrv_custom_html_shortcode iframe, .thrv_responsive_video video").each(function(){var a=ThriveGlobal.$j(this);a.attr("data-src",a.attr("src")),a.attr("src","")}),ThriveGlobal.$j("#tve-lg-error-container").hide()}var c="tve-o-hidden tve-l-open tve-hide-overflow",d=ThriveGlobal.$j("body"),e=ThriveGlobal.$j("html");ThriveGlobal.$j.fn.thrive_iphone_placeholder&&a.find("input[placeholder]").thrive_iphone_placeholder(),TL_Front.slide_in_position(a.find(".thrv-leads-slide-in").filter(":visible")),a.off().on("click",".tve-leads-close",function(){b(a)}),a.find(".tve_ea_thrive_leads_form_close").on("click",function(){b(a)}),a.on("switchstate",function(a,b){var c=Array.prototype.slice.call(arguments,1);TL_Front.switch_slide_in_state.apply(TL_Front,c)}),ThriveGlobal.$j(document).off("keyup.close-slidein").on("keyup.close-slidein",function(c){27==c.which&&b(a)})},TL_Front.close_form=function(a,b,c,d){var e=ThriveGlobal.$j(a),f=e.parents(".tve-leads-triggered"),g=f.attr("data-tl-type");if(void 0===g&&f.hasClass("tve-leads-widget"))g="widget";else if(void 0===g&&f.hasClass("tve-leads-post-footer"))g="post-footer";else if(void 0===g&&f.hasClass("tve-leads-slide-in"))g="slide-in";else if(void 0===g&&f.hasClass("tve-leads-in-content"))g="in-content";else if(void 0===g&&f.hasClass("tve-leads-shortcode"))g="shortcode";else if(void 0===g&&f.hasClass("tve-leads-greedy_ribbon"))g="greedy_ribbon";else{if(void 0===g&&f.hasClass("tve_p_lb_content"))return TL_Front.close_lightbox(),!1;if(void 0===g&&f.hasClass("tve-leads-screen-filler"))return TL_Front.close_screen_filler(f),!1}switch(f.removeClass("tve-leads-triggered"),TL_Front.handle_typefocus(f,"pause"),g){case"ribbon":var h=f.find(".tve-ribbon-close");h.length||(h=jQuery('<span class="tve-ribbon-close" style="display: none"></span>').appendTo(f)),h.trigger("click");break;case"slide-in":f.find(".tve-leads-close").trigger("click"),f.find(".thrv_responsive_video iframe, .thrv_custom_html_shortcode iframe, .thrv_responsive_video video").each(function(){var a=ThriveGlobal.$j(this);a.attr("data-src",a.attr("src")),a.attr("src","")});break;case"post-footer":case"in-content":case"shortcode":f.fadeOut(200,function(){TL_Front.form_closed(g)});break;case"widget":f.parent().slideUp(200);break;case"greedy_ribbon":var i=ThriveGlobal.$j("body"),j=ThriveGlobal.$j(window),k=i.css("margin-top");i[0].style.removeProperty("margin-top"),f.find(".thrv_responsive_video iframe, .thrv_custom_html_shortcode iframe, .thrv_responsive_video video").each(function(){var a=ThriveGlobal.$j(this);a.attr("data-src",a.attr("src")),a.attr("src","")}),i.css("margin-top",k),j.scrollTop(0),i.animate({"margin-top":"0px"},300,"linear",function(){TL_Front.form_closed(g)}).removeClass("tve-tl-gr-anim")}},TL_Front.form_closed=function(a){TL_Const.close_callbacks&&TL_Const.close_callbacks[a]&&ThriveGlobal.$j.each(TL_Const.close_callbacks[a],function(a,b){ThriveGlobal.$j.isFunction(b)&&b()})},TL_Front.handle_typefocus=function(a,b){a.find(".tve_typefocus").each(function(){jQuery(this).attr("data-typefocus",b)})};
var advanced_ads_layer_cache_busting;
if(! advanced_ads_layer_cache_busting){
advanced_ads_layer_cache_busting={
doc_loaded: false,
bufferedAds: [],
flush: function(){
var _bufferedAds=this.bufferedAds;
this.bufferedAds=[];
for(var i=0; i < _bufferedAds.length; i++){
this._process_item(jQuery(_bufferedAds[i]));
}},
_process_item: function(banner){
var banner_id=banner.attr('id');
advads_items.conditions[banner_id]=advads_items.conditions[banner_id]||{};
advads_layer_center_if_not_sticky(banner)
if(banner.hasClass('advads-effect')){
advads_layer_gather_effects(banner_id);
}
advads_layer_gather_background(banner_id);
if(banner.hasClass('advads-layer-onload')){
advads_items.conditions[banner_id].scrolloffset=true;
advads_check_item_conditions(banner_id);
}else if(banner.hasClass('advads-layer-exit')){
ouibounce(banner[0], {
aggressive: true,
timer: 0,
callback: function(){
banner.css('display', 'none');
advads_items.conditions[banner_id].scrolloffset=true;
advads_check_item_conditions(banner_id);
}});
}else{
var advads_scrollhalf=(jQuery(document).height() - jQuery(window).height()) / 2;
var scroll_handler=function(event){
if(jQuery.inArray(banner_id, advads_items.showed)!==-1){
jQuery(window).off('scroll', scroll_handler);
return;
}
if(banner.hasClass('advads-layer-stop')){
advads_items.conditions[banner_id].scrolloffset=true;
advads_check_item_conditions(banner_id);
}
if(jQuery(document).scrollTop() >=advads_scrollhalf){
if(banner.hasClass('advads-layer-half')){
advads_items.conditions[banner_id].scrolloffset=true;
advads_check_item_conditions(banner_id);
}}
if(banner.hasClass('advads-layer-offset')){
var custom_offset=advads_extract_custom_offset_from_class('#' + banner_id);
if(jQuery(document).scrollTop() >=custom_offset){
advads_items.conditions[banner_id].scrolloffset=true;
advads_check_item_conditions(banner_id);
}}
}
jQuery(window).onEnd('scroll', scroll_handler, 100);
}},
observe: function (event){
if(event.event==='postscribe_done'&&event.ref&&event.ad){
var banner=jQuery(event.ref).children('div');
if(! banner.hasClass('advads-layer')){
return;
}
if(advanced_ads_layer_cache_busting.doc_loaded){
advanced_ads_layer_cache_busting.bufferedAds.push(banner);
advanced_ads_layer_cache_busting.flush();
}}
},
}}
if(typeof advanced_ads_pro==='object'&&advanced_ads_pro!==null){
advanced_ads_pro.postscribeObservers.add(advanced_ads_layer_cache_busting.observe);
}
jQuery(document).ready(function ($){
advanced_ads_layer_cache_busting.doc_loaded=true;
jQuery('.advads-layer').each(function (){
advanced_ads_layer_cache_busting.bufferedAds.push(jQuery(this));
});
advanced_ads_layer_cache_busting.flush();
});
function advads_layer_center_if_not_sticky(ad){
if(! ad.hasClass('advads-sticky')){
var width=parseInt(ad.attr('data-width'), 10);
var height=parseInt(ad.attr('data-height'), 10);
var is_transform_supported=getSupportedTransform();
var transform_property='';
if(! height){
if(is_transform_supported){
transform_property +='translateY(50%) ';
}else{
jQuery(ad).css({ 'top':'0', 'bottom':'auto' });
}}
if(! width){
if(is_transform_supported){
transform_property +='translateX(-50%) ';
}else{
jQuery(ad).css({ 'left':'0', 'right':'auto' });
}}
if(transform_property){
set_ad_transform(ad, transform_property);
}}
}
function advads_layer_gather_effects(id){
var banner=jQuery('#' + id);
advads_items.effect_durations[id]=advads_extract_duration_from_class(banner);
if(banner.hasClass('advads-effect-fadein')){
advads_items.display_effect_callbacks[id]='advads_display_effect_fadein';
};
if(banner.hasClass('advads-effect-show')){
advads_items.display_effect_callbacks[id]='advads_display_effect_show';
};
if(banner.hasClass('advads-effect-slide')){
advads_items.display_effect_callbacks[id]='advads_display_effect_slide';
};}
function advads_layer_gather_background(id){
var banner=jQuery('#' + id);
if(banner.hasClass('advads-has-background')&&banner.is(':hidden')){
if(!advads_items.display_callbacks[id]!='undefined'){
advads_items.display_callbacks[id]={};
var length=0;
}else{
var length=advads_items.display_callbacks[id].length;
}
advads_items.display_callbacks[id][length]='advads_layer_display_background_callback';
}}
function can_remove_background(item){
advads_items.backgrounds[ item ]=false;
var remove=true;
jQuery.each(advads_items.backgrounds, function(i, val){
if(val==true){
if(advads_items.conditions.hasOwnProperty(i)&&advads_items.conditions[i].scrolloffset==true){
remove=false;
return false;
}}
});
return remove;
}
function advads_check_item_conditions(id){
var item=jQuery('#' + id);
if(item.length==0){
return;
}
var display=true;
jQuery.each(advads_items.conditions[id], function (method, flag){
if(flag===false){
display=false;
}});
if(display){
advads_items.showed.push(id);
item.trigger('advads-layer-trigger');
if(item.hasClass('use-fancybox')){
fancybox_display (id);
}else{
var ad=jQuery('#' + id);
var position=jQuery(ad).attr('data-position');
var width=parseInt(ad.attr('data-width'), 10);
var height=parseInt(ad.attr('data-height'), 10);
var is_transform_supported=getSupportedTransform();
switch(position){
case 'topcenter':
if(! width){
if(is_transform_supported){
set_ad_transform(ad, 'translateX(-50%)');
}else{
jQuery(ad).css({ 'left':'0', 'right':'auto', 'top':'0', 'bottom':'auto' });
}}
break;
case 'centerleft':
if(! height){
if(is_transform_supported){
set_ad_transform(ad, 'translateY(50%)');
}else{
jQuery(ad).css({ 'left':'0', 'right':'auto', 'top':'0', 'bottom':'auto' });
}}
break;
case 'center':
var transform_property='';
if(! height){
if(is_transform_supported){
transform_property +='translateY(50%) ';
}else{
jQuery(ad).css({ 'top':'0', 'bottom':'auto' });
}}
if(! width){
if(is_transform_supported){
transform_property +='translateX(-50%) ';
}else{
jQuery(ad).css({ 'left':'0', 'right':'auto' });
}}
if(transform_property){
set_ad_transform(ad, transform_property);
}
break;
case 'centerright':
if(! height){
if(is_transform_supported){
set_ad_transform(ad, 'translateY(50%)');
}else{
jQuery(ad).css({ 'left':'0', 'right':'auto', 'top':'0', 'bottom':'auto' });
}}
break;
case 'bottomcenter':
if(! width){
if(is_transform_supported){
set_ad_transform(ad, 'translateX(-50%)');
}else{
jQuery(ad).css({ 'left':'0', 'right':'auto', 'top':'0', 'bottom':'auto' });
}}
break;
}
jQuery.each(advads_items.display_callbacks, function (adid, callbacks){
jQuery.each(callbacks, function (key, funcname){
var callback=window[funcname];
callback(adid);
});
});
if(advads_items.display_effect_callbacks[id]==undefined){
ad.show();
}else{
var callback=window[advads_items.display_effect_callbacks[id]];
callback(id);
}}
}}
function fancybox_display(id){
var banner=jQuery('#' + id);
var settings={
'speedIn':0,
'speedOut':0,
'showCloseButton':true,
'hideOnOverlayClick':true,
'centerOnScroll':true,
'margin':0,
'padding':10,
'onClosed': function(){
if(typeof advads_items.close_functions[ id ]==='function'){
advads_items.close_functions[ id ]();
}},
}
if(advads_items.display_effect_callbacks[id]==undefined){
settings['transitionIn']='none';
}else{
var callback=advads_items.display_effect_callbacks[id];
switch(callback){
case 'advads_display_effect_fadein':
settings['transitionIn']='fade';
break;
case 'advads_display_effect_show':
settings['transitionIn']='elastic';
break;
default:
settings['transitionIn']='none';
}}
if(! banner.hasClass('advads-has-background')){
settings['overlayShow']=false;
}
if(! banner.hasClass('advads-close')){
settings['showCloseButton']=false;
}
var speedIn=advads_extract_duration_from_class(banner);
settings['speedIn']=(speedIn) ? speedIn:0;
var position=jQuery(banner).attr('data-position');
var output_css='#fancybox-close { right: -15px; }';
output_css +='#fancybox-loading, #fancybox-loading div, #fancybox-overlay, #fancybox-wrap, #fancybox-wrap div {';
output_css +='-webkit-box-sizing: content-box !important; -moz-box-sizing: content-box !important; box-sizing: content-box !important; }';
switch(position){
case 'topleft':
output_css +='#fancybox-wrap { position: fixed; bottom: auto !important; top: 0px !important; right: auto !important; left: 0px !important; }';
break;
case 'topcenter':
output_css +='#fancybox-wrap { position: fixed; bottom: auto !important; top: 0px !important; }';
break;
case 'topright':
output_css +='#fancybox-wrap { position: fixed; bottom: auto !important; top: 0px !important; right: 0px !important; left: auto !important; }';
break;
case 'centerleft':
output_css +='#fancybox-wrap { left: 0px !important; right: auto !important; }';
break;
case 'center':
break;
case 'centerright':
output_css +='#fancybox-wrap { right: 0px !important; left: auto !important; }';
break;
case 'bottomleft':
output_css +='#fancybox-wrap { position: fixed; bottom: 0px !important; top: auto !important; right: auto !important; left: 0px !important; }';
break;
case 'bottomcenter':
output_css +='#fancybox-wrap { position: fixed; bottom: 0px !important; top: auto !important; }';
break;
case 'bottomright':
output_css +='#fancybox-wrap { position: fixed; bottom: 0px !important; top: auto !important; right: 0px !important; left: auto !important; }';
break;
}
jQuery('#advads-layer-custom-css').html(output_css);
if(typeof jQuery.fancybox=='function'){
banner.waitForImages(function(){
settings['content']=banner.show();
jQuery.fancybox(settings);
});
}}
function advads_extract_custom_offset_from_class(field){
var offset=0;
var classes=jQuery(field).attr('class');
if(classes!==undefined){
classes=classes.split(/\s+/);
jQuery.each(classes, function (key, value){
if(value==='')
return false;
if(value.match(/advads-layer-offset-/gi)){
infos=value.split('-');
offset=parseInt(infos[3])
return false;
}});
}
return offset;
};
function advads_extract_duration_from_class(field){
var duration=0;
var classes=field.attr('class');
if(classes!==undefined){
classes=classes.split(/\s+/);
jQuery.each(classes, function (key, value){
if(value==='')
return false;
if(value.match(/advads-duration-/gi)){
infos=value.split('-');
duration=parseInt(infos[2])
return false;
}});
}
return duration;
};
function advads_layer_display_background_callback(id){
var banner=jQuery('#' + id);
if(banner.hasClass('advads-has-background')&&banner.is(':hidden')){
advads_items.backgrounds[id]=true;
if(jQuery('.advads-background').length===0){
jQuery('<div class="advads-background" style="position: fixed; bottom: 0; right: 0; display: block; width: 100%; height: 100%; background: #000; z-index: 9998; opacity:.5;"></div>').appendTo('body');
}}
}
function advads_display_effect_fadein(id){
var banner=jQuery('#' + id);
var duration=parseInt(advads_items.effect_durations[id]);
banner.fadeIn(duration);
}
function advads_display_effect_show(id){
var banner=jQuery('#' + id);
var duration=parseInt(advads_items.effect_durations[id]);
banner.show(duration);
}
function advads_display_effect_slide(id){
var banner=jQuery('#' + id);
var duration=parseInt(advads_items.effect_durations[id]);
banner.slideDown(duration);
}
http://stackoverflow.com/a/12625986
function getSupportedTransform(){
var prefixes='transform WebkitTransform MozTransform OTransform msTransform'.split(' ');
var div=document.createElement('div');
for(var i=0; i < prefixes.length; i++){
if(div&&div.style[prefixes[i]]!==undefined){
return prefixes[i];
}}
return false;
}
function set_ad_transform(ad, transform_properties){
jQuery(ad).css({
'-webkit-transform': transform_properties,
'-moz-transform': transform_properties,
'transform': transform_properties
});
}
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){a.fn.onEnd=function(){var a,b=Array.prototype.slice.call(arguments),c=b.pop(),d=b.pop(),e=function(){var b=Array.prototype.slice.call(arguments);clearTimeout(a),a=setTimeout(function(){d.apply(this,b)}.bind(this),c)};e.guid=d.guid||(d.guid=jQuery.guid++),b.push(e),this.on.apply(this,b)}});
!function(e,n){"function"==typeof define&&define.amd?define(n):"object"==typeof exports?module.exports=n(require,exports,module):e.ouibounce=n()}(this,function(e,n,o){return function(e,n){"use strict";function o(e,n){return"undefined"==typeof e?n:e}function i(e){var n=24*e*60*60*1e3,o=new Date;return o.setTime(o.getTime()+n),"; expires="+o.toUTCString()}function t(){s()||(L.addEventListener("mouseleave",u),L.addEventListener("mouseenter",r),L.addEventListener("keydown",c))}function u(e){e.clientY>k||(D=setTimeout(m,y))}function r(){D&&(clearTimeout(D),D=null)}function c(e){g||e.metaKey&&76===e.keyCode&&(g=!0,D=setTimeout(m,y))}function d(e,n){return a()[e]===n}function a(){for(var e=document.cookie.split("; "),n={},o=e.length-1;o>=0;o--){var i=e[o].split("=");n[i[0]]=i[1]}return n}function s(){return d(T,"true")&&!v}function m(){s()||(e&&(e.style.display="block"),E(),f())}function f(e){var n=e||{};"undefined"!=typeof n.cookieExpire&&(b=i(n.cookieExpire)),n.sitewide===!0&&(w=";path=/"),"undefined"!=typeof n.cookieDomain&&(x=";domain="+n.cookieDomain),"undefined"!=typeof n.cookieName&&(T=n.cookieName),document.cookie=T+"=true"+b+x+w,L.removeEventListener("mouseleave",u),L.removeEventListener("mouseenter",r),L.removeEventListener("keydown",c)}var l=n||{},v=l.aggressive||!1,k=o(l.sensitivity,20),p=o(l.timer,1e3),y=o(l.delay,0),E=l.callback||function(){},b=i(l.cookieExpire)||"",x=l.cookieDomain?";domain="+l.cookieDomain:"",T=l.cookieName?l.cookieName:"viewedOuibounceModal",w=l.sitewide===!0?";path=/":"",D=null,L=document.documentElement;setTimeout(t,p);var g=!1;return{fire:m,disable:f,isDisabled:s}}});
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a(jQuery)}(function(a){var b="waitForImages";a.waitForImages={hasImageProperties:["backgroundImage","listStyleImage","borderImage","borderCornerImage","cursor"],hasImageAttributes:["srcset"]},a.expr[":"]["has-src"]=function(b){return a(b).is('img[src][src!=""]')},a.expr[":"].uncached=function(b){return a(b).is(":has-src")?!b.complete:!1},a.fn.waitForImages=function(){var c,d,e,f=0,g=0,h=a.Deferred();if(a.isPlainObject(arguments[0])?(e=arguments[0].waitForAll,d=arguments[0].each,c=arguments[0].finished):1===arguments.length&&"boolean"===a.type(arguments[0])?e=arguments[0]:(c=arguments[0],d=arguments[1],e=arguments[2]),c=c||a.noop,d=d||a.noop,e=!!e,!a.isFunction(c)||!a.isFunction(d))throw new TypeError("An invalid callback was supplied.");return this.each(function(){var i=a(this),j=[],k=a.waitForImages.hasImageProperties||[],l=a.waitForImages.hasImageAttributes||[],m=/url\(\s*(['"]?)(.*?)\1\s*\)/g;e?i.find("*").addBack().each(function(){var b=a(this);b.is("img:has-src")&&j.push({src:b.attr("src"),element:b[0]}),a.each(k,function(a,c){var d,e=b.css(c);if(!e)return!0;for(;d=m.exec(e);)j.push({src:d[2],element:b[0]})}),a.each(l,function(c,d){var e,f=b.attr(d);return f?(e=f.split(","),void a.each(e,function(c,d){d=a.trim(d).split(" ")[0],j.push({src:d,element:b[0]})})):!0})}):i.find("img:has-src").each(function(){j.push({src:this.src,element:this})}),f=j.length,g=0,0===f&&(c.call(i[0]),h.resolveWith(i[0])),a.each(j,function(e,j){var k=new Image,l="load."+b+" error."+b;a(k).one(l,function m(b){var e=[g,f,"load"==b.type];return g++,d.apply(j.element,e),h.notifyWith(j.element,e),a(this).off(l,m),g==f?(c.call(i[0]),h.resolveWith(i[0]),!1):void 0}),k.src=j.src})}),h.promise()}});
!function(a){a.fn.hoverIntent=function(b,c,d){var e={interval:100,sensitivity:6,timeout:0};e="object"==typeof b?a.extend(e,b):a.isFunction(c)?a.extend(e,{over:b,out:c,selector:d}):a.extend(e,{over:b,out:b,selector:c});var f,g,h,i,j=function(a){f=a.pageX,g=a.pageY},k=function(b,c){return c.hoverIntent_t=clearTimeout(c.hoverIntent_t),Math.sqrt((h-f)*(h-f)+(i-g)*(i-g))<e.sensitivity?(a(c).off("mousemove.hoverIntent",j),c.hoverIntent_s=!0,e.over.apply(c,[b])):(h=f,i=g,c.hoverIntent_t=setTimeout(function(){k(b,c)},e.interval),void 0)},l=function(a,b){return b.hoverIntent_t=clearTimeout(b.hoverIntent_t),b.hoverIntent_s=!1,e.out.apply(b,[a])},m=function(b){var c=a.extend({},b),d=this;d.hoverIntent_t&&(d.hoverIntent_t=clearTimeout(d.hoverIntent_t)),"mouseenter"===b.type?(h=c.pageX,i=c.pageY,a(d).on("mousemove.hoverIntent",j),d.hoverIntent_s||(d.hoverIntent_t=setTimeout(function(){k(c,d)},e.interval))):(a(d).off("mousemove.hoverIntent",j),d.hoverIntent_s&&(d.hoverIntent_t=setTimeout(function(){l(c,d)},e.timeout)))};return this.on({"mouseenter.hoverIntent":m,"mouseleave.hoverIntent":m},e.selector)}}(jQuery);
(function ($, w){
"use strict";
var methods=(function (){
var c={
bcClass: 'sf-breadcrumb',
menuClass: 'sf-js-enabled',
anchorClass: 'sf-with-ul',
menuArrowClass: 'sf-arrows'
},
ios=(function (){
var ios=/iPhone|iPad|iPod/i.test(navigator.userAgent);
if(ios){
$(w).load(function (){
$('body').children().on('click', $.noop);
});
}
return ios;
})(),
wp7=(function (){
var style=document.documentElement.style;
return ('behavior' in style&&'fill' in style&&/iemobile/i.test(navigator.userAgent));
})(),
unprefixedPointerEvents=(function (){
return (!!w.PointerEvent);
})(),
toggleMenuClasses=function ($menu, o){
var classes=c.menuClass;
if(o.cssArrows){
classes +=' ' + c.menuArrowClass;
}
$menu.toggleClass(classes);
},
setPathToCurrent=function ($menu, o){
return $menu.find('li.' + o.pathClass).slice(0, o.pathLevels)
.addClass(o.hoverClass + ' ' + c.bcClass)
.filter(function (){
return ($(this).children(o.popUpSelector).hide().show().length);
}).removeClass(o.pathClass);
},
toggleAnchorClass=function ($li){
$li.children('a').toggleClass(c.anchorClass);
},
toggleTouchAction=function ($menu){
var msTouchAction=$menu.css('ms-touch-action');
var touchAction=$menu.css('touch-action');
touchAction=touchAction||msTouchAction;
touchAction=(touchAction==='pan-y') ? 'auto':'pan-y';
$menu.css({
'ms-touch-action': touchAction,
'touch-action': touchAction
});
},
applyHandlers=function ($menu, o){
var targets='li:has(' + o.popUpSelector + ')';
if($.fn.hoverIntent&&!o.disableHI){
$menu.hoverIntent(over, out, targets);
}else{
$menu
.on('mouseenter.superfish', targets, over)
.on('mouseleave.superfish', targets, out);
}
var touchevent='MSPointerDown.superfish';
if(unprefixedPointerEvents){
touchevent='pointerdown.superfish';
}
if(!ios){
touchevent +=' touchend.superfish';
}
if(wp7){
touchevent +=' mousedown.superfish';
}
$menu
.on('focusin.superfish', 'li', over)
.on('focusout.superfish', 'li', out)
.on(touchevent, 'a', o, touchHandler);
},
touchHandler=function (e){
var $this=$(this),
$ul=$this.siblings(e.data.popUpSelector);
if($ul.length > 0&&$ul.is(':hidden')){
$this.one('click.superfish', false);
if(e.type==='MSPointerDown'||e.type==='pointerdown'){
$this.trigger('focus');
}else{
$.proxy(over, $this.parent('li'))();
}}
},
over=function (){
var $this=$(this),
o=getOptions($this);
clearTimeout(o.sfTimer);
$this.siblings().superfish('hide').end().superfish('show');
},
out=function (){
var $this=$(this),
o=getOptions($this);
if(ios){
$.proxy(close, $this, o)();
}else{
clearTimeout(o.sfTimer);
o.sfTimer=setTimeout($.proxy(close, $this, o), o.delay);
}},
close=function (o){
o.retainPath=($.inArray(this[0], o.$path) > -1);
this.superfish('hide');
if(!this.parents('.' + o.hoverClass).length){
o.onIdle.call(getMenu(this));
if(o.$path.length){
$.proxy(over, o.$path)();
}}
},
getMenu=function ($el){
return $el.closest('.' + c.menuClass);
},
getOptions=function ($el){
return getMenu($el).data('sf-options');
};
return {
hide: function (instant){
if(this.length){
var $this=this,
o=getOptions($this);
if(!o){
return this;
}
var not=(o.retainPath===true) ? o.$path:'',
$ul=$this.find('li.' + o.hoverClass).add(this).not(not).removeClass(o.hoverClass).children(o.popUpSelector),
speed=o.speedOut;
if(instant){
$ul.show();
speed=0;
}
o.retainPath=false;
o.onBeforeHide.call($ul);
$ul.stop(true, true).animate(o.animationOut, speed, function (){
var $this=$(this);
o.onHide.call($this);
});
}
return this;
},
show: function (){
var o=getOptions(this);
if(!o){
return this;
}
var $this=this.addClass(o.hoverClass),
$ul=$this.children(o.popUpSelector);
o.onBeforeShow.call($ul);
$ul.stop(true, true).animate(o.animation, o.speed, function (){
o.onShow.call($ul);
});
return this;
},
destroy: function (){
return this.each(function (){
var $this=$(this),
o=$this.data('sf-options'),
$hasPopUp;
if(!o){
return false;
}
$hasPopUp=$this.find(o.popUpSelector).parent('li');
clearTimeout(o.sfTimer);
toggleMenuClasses($this, o);
toggleAnchorClass($hasPopUp);
toggleTouchAction($this);
$this.off('.superfish').off('.hoverIntent');
$hasPopUp.children(o.popUpSelector).attr('style', function (i, style){
return style.replace(/display[^;]+;?/g, '');
});
o.$path.removeClass(o.hoverClass + ' ' + c.bcClass).addClass(o.pathClass);
$this.find('.' + o.hoverClass).removeClass(o.hoverClass);
o.onDestroy.call($this);
$this.removeData('sf-options');
});
},
init: function (op){
return this.each(function (){
var $this=$(this);
if($this.data('sf-options')){
return false;
}
var o=$.extend({}, $.fn.superfish.defaults, op),
$hasPopUp=$this.find(o.popUpSelector).parent('li');
o.$path=setPathToCurrent($this, o);
$this.data('sf-options', o);
toggleMenuClasses($this, o);
toggleAnchorClass($hasPopUp);
toggleTouchAction($this);
applyHandlers($this, o);
$hasPopUp.not('.' + c.bcClass).superfish('hide', true);
o.onInit.call(this);
});
}};})();
$.fn.superfish=function (method, args){
if(methods[method]){
return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
}
else if(typeof method==='object'||! method){
return methods.init.apply(this, arguments);
}else{
return $.error('Method ' +  method + ' does not exist on jQuery.fn.superfish');
}};
$.fn.superfish.defaults={
popUpSelector: 'ul,.sf-mega',
hoverClass: 'sfHover',
pathClass: 'overrideThisToUse',
pathLevels: 1,
delay: 800,
animation: {opacity: 'show'},
animationOut: {opacity: 'hide'},
speed: 'normal',
speedOut: 'fast',
cssArrows: true,
disableHI: false,
onInit: $.noop,
onBeforeShow: $.noop,
onShow: $.noop,
onBeforeHide: $.noop,
onHide: $.noop,
onIdle: $.noop,
onDestroy: $.noop
};})(jQuery, window);
jQuery(function ($){
'use strict';
$('.js-superfish').superfish({
'delay': 100,
'animation':   {'opacity': 'show', 'height': 'show'},
'dropShadows': false
});
});
var TVE_Dash=TVE_Dash||{},ThriveGlobal=ThriveGlobal||{$j:jQuery.noConflict()};!function(a){TVE_Dash.ajax_sent=!1;var b={},c={};TVE_Dash.add_load_item=function(d,e,f){if("function"!=typeof f&&(f=a.noop),TVE_Dash.ajax_sent){var g={},h={};return g[d]=e,h[d]=f,this.send_ajax(g,h),!0}return e?(b[d]&&console.error&&console.error(d+" ajax action already defined"),b[d]=e,c[d]=f,!0):(console.error&&console.error("missing ajax data"),!1)},TVE_Dash.ajax_load_css=function(b){a.each(b,function(b,c){b+="-css",a("link#"+b).length||a('<link rel="stylesheet" id="'+b+'" type="text/css" href="'+c+'"/>').appendTo("head")})},TVE_Dash.ajax_load_js=function(b){var c=document.body;a.each(b,function(d,e){if(-1!==d.indexOf("_before"))return!0;var f=document.createElement("script");if(b[d+"_before"]){a('<script type="text/javascript">'+b[d+"_before"]+"</script>").after(c.lastChild)}d&&(f.id=d+"-script"),f.src=e,c.appendChild(f)})},TVE_Dash.send_ajax=function(b,c){a.ajax({url:tve_dash_front.ajaxurl,xhrFields:{withCredentials:!0},data:{action:"tve_dash_front_ajax",tve_dash_data:b},dataType:"json",type:"post"}).done(function(b){b&&a.isPlainObject(b)&&(b.__resources&&(b.__resources.css&&TVE_Dash.ajax_load_css(b.__resources.css),b.__resources.js&&TVE_Dash.ajax_load_js(b.__resources.js),delete b.__resources),a.each(b,function(a,b){if("function"!=typeof c[a])return!0;c[a].call(null,b)}))})},a(function(){setTimeout(function(){var d=new a.Event("tve-dash.load");return a(document).trigger(d),!a.isEmptyObject(b)&&(!tve_dash_front.is_crawler&&(TVE_Dash.send_ajax(b,c),void(TVE_Dash.ajax_sent=!0)))})})}(ThriveGlobal.$j);
!function(a,b){"use strict";function c(){if(!e){e=!0;var a,c,d,f,g=-1!==navigator.appVersion.indexOf("MSIE 10"),h=!!navigator.userAgent.match(/Trident.*rv:11\./),i=b.querySelectorAll("iframe.wp-embedded-content");for(c=0;c<i.length;c++){if(d=i[c],!d.getAttribute("data-secret"))f=Math.random().toString(36).substr(2,10),d.src+="#?secret="+f,d.setAttribute("data-secret",f);if(g||h)a=d.cloneNode(!0),a.removeAttribute("security"),d.parentNode.replaceChild(a,d)}}}var d=!1,e=!1;if(b.querySelector)if(a.addEventListener)d=!0;if(a.wp=a.wp||{},!a.wp.receiveEmbedMessage)if(a.wp.receiveEmbedMessage=function(c){var d=c.data;if(d.secret||d.message||d.value)if(!/[^a-zA-Z0-9]/.test(d.secret)){var e,f,g,h,i,j=b.querySelectorAll('iframe[data-secret="'+d.secret+'"]'),k=b.querySelectorAll('blockquote[data-secret="'+d.secret+'"]');for(e=0;e<k.length;e++)k[e].style.display="none";for(e=0;e<j.length;e++)if(f=j[e],c.source===f.contentWindow){if(f.removeAttribute("style"),"height"===d.message){if(g=parseInt(d.value,10),g>1e3)g=1e3;else if(~~g<200)g=200;f.height=g}if("link"===d.message)if(h=b.createElement("a"),i=b.createElement("a"),h.href=f.getAttribute("src"),i.href=d.value,i.host===h.host)if(b.activeElement===f)a.top.location.href=d.value}else;}},d)a.addEventListener("message",a.wp.receiveEmbedMessage,!1),b.addEventListener("DOMContentLoaded",c,!1),a.addEventListener("load",c,!1)}(window,document);