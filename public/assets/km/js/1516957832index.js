jQuery(function($){
$('body').addClass('js');
$('.home-middle article, .home-top article').each(function(){
var $time=$(this).find('.entry-time');
$(this).find('a.alignleft, a.alignnone, a.alignright').append($time);
});
});
jQuery(function($){
$("header .genesis-nav-menu, .nav-primary .genesis-nav-menu, .nav-secondary .genesis-nav-menu").addClass("responsive-menu").before('<div class="responsive-menu-icon"></div>');
$(".responsive-menu-icon").click(function(){
$(this).next("header .genesis-nav-menu, .nav-primary .genesis-nav-menu, .nav-secondary .genesis-nav-menu").slideToggle();
});
$(window).resize(function(){
if(window.innerWidth > 768){
$("header .genesis-nav-menu, .nav-primary .genesis-nav-menu, .nav-secondary .genesis-nav-menu, nav .sub-menu").removeAttr("style");
$(".responsive-menu > .menu-item").removeClass("menu-open");
}});
$(".responsive-menu > .menu-item").click(function(event){
if(event.target!==this)
return;
$(this).find(".sub-menu:first").slideToggle(function(){
$(this).parent().toggleClass("menu-open");
});
});
});
jQuery(document).ready(function($){
var offset=500;
var speed=500;
var duration=500;
$(window).scroll(function(){
if($(this).scrollTop() < offset){
$('.topbutton') .fadeOut(duration);
}else{
$('.topbutton') .fadeIn(duration);
}});
$('.topbutton').on('click', function(){
$('html, body').animate({scrollTop:0}, speed);
return false;
});
});