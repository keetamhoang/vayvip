var playerTvc,playerIframe,isAudienceCreated=!1,_admtvcPgid="";try{_admtvcPgid=admtvcPgid()}catch(a){}
window.addEventListener?window.addEventListener("message",function(a){"addParam"==a.data&&a.source.postMessage('addParamTVC("'+admParamTvc()+'")',a.origin);"admtvcPgid"==a.data&&a.source.postMessage('admtvcSetPgid("'+_admtvcPgid+'")',a.origin);"admGetReff"==a.data&&a.source.postMessage('admSetReff("'+document.referrer+'")',a.origin);"admGetIP"==a.data&&a.source.postMessage('admSetIP("'+_AdmGetIP("__IP")+'")',a.origin);try{-1!=a.origin.indexOf("vcplayer.")&&-1!=a.data("_admTargetTvcPreroll")&&eval(a.data)}catch(b){}"chkPrLink"==
a.data&&"undefined"!=typeof _chkPrLink&&a.source.postMessage('addChkPrLink("'+_chkPrLink+'")',a.origin);try{-1!==a.origin.indexOf("vcplayer.")&&-1!==a.data.indexOf("admExpandVPAID")?(playerIframe=a.origin,playerTvc=a.source,ExpandableTVCPreroll(a.data.split("admExpandVPAID")[1])):"getDataAudien"!=a.data||isAudienceCreated||(_AdmAudienData.createTag(a),isAudienceCreated=!0)}catch(b){}},!1):window.attachEvent&&window.attachEvent("onmessage",function(a){"addParam"==a.data&&a.source.postMessage('addParamTVC("'+
admParamTvc()+'")',a.origin);"admtvcPgid"==a.data&&a.source.postMessage('admtvcSetPgid("'+_admtvcPgid+'")',a.origin);"admGetReff"==a.data&&a.source.postMessage('admSetReff("'+document.referrer+'")',a.origin);"admGetIP"==a.data&&a.source.postMessage('admSetIP("'+_AdmGetIP("__IP")+'")',a.origin);try{-1!=a.origin.indexOf("vcplayer.")&&-1!=a.data.indexOf("_admTargetTvcPreroll")&&eval(a.data)}catch(b){}"chkPrLink"==a.data&&"undefined"!=typeof _chkPrLink&&(console.log("event.data :"+a.data),a.source.postMessage('addChkPrLink("'+
_chkPrLink+'")',a.origin));-1!==a.origin.indexOf("vcplayer.")&&-1!==a.data.toString().indexOf(".html")?(playerIframe=a.origin,playerTvc=a.source,ExpandableTVCPreroll(a.data)):"getDataAudien"!=a.data||isAudienceCreated||(_AdmAudienData.createTag(a),isAudienceCreated=!0)});
window.addEventListener("message",function(a){"admCloseExpandVpaidHtml"==a.data&&CloseTVCPreroll();"admSendClickTracking"==a.data&&posMesClickTracking();try{if(a.data&&"string"==typeof a.data&&-1!=a.data.indexOf("admOpenLanding")){var b=a.data.split("admOpenLanding");admOpenLanding(b[1]);waitCloseExpandLanding(a)}}catch(c){}});
var _AdmPrerollIplay=new function(){this.open=function(a){window.open(a,"_blank")};this.create=function(a){var b=document.createDocumentFragment(),c=document.createElement("div");for(c.innerHTML=a;c.firstChild;)b.appendChild(c.firstChild);return b};this.expand=function(a){document.body.style.overflow="hidden";if(void 0==document.getElementById("_AdmPrerollIplay")){var b=this.create('<div  class="blockUI blockMsg blockPage" style="width:100%; height:100%;border: 0px none; margin: 0px; padding: 0px; text-align: left; overflow: visible; position: fixed; z-index: 100000; top: 0px; left: 0px;" dir="ltr" id="_AdmPrerollIplay"></div>');
document.body.insertBefore(b,document.body.childNodes[0])}b=document.getElementById("_AdmPrerollIplay");b.style.display="";b.style.left="0px";b.style.top="0px";b.innerHTML='<iframe  width="100%" height="100%" frameborder="0" scrolling="no" src="'+a+'" ></iframe>'};this.expandLanding=function(a){document.body.style.overflow="hidden";if(void 0==document.getElementById("_AdmPrerollIplay")){var b=this.create('<div  class="blockUI blockMsg blockPage" style="width:100%; height:100%;border: 0px none; margin: 0px; padding: 0px; text-align: left; overflow: visible; position: fixed; z-index: 100000; top: 0px; left: 0px;" dir="ltr" id="_AdmPrerollIplay"></div>');
document.body.insertBefore(b,document.body.childNodes[0])}b=document.getElementById("_AdmPrerollIplay");b.style.display="";b.style.left="0px";b.style.top="50px";b.innerHTML='<iframe  width="100%" height="100%" frameborder="0" scrolling="yes" src="'+a+'" ></iframe><div style="height:50px;width:100%;position:absolute;z-index:9999;background:#fff;top:-50px;border-bottom: solid 1px #606060;"><div style="cursor:pointer;width:80px; height:50px;line-height:50px; float:right;    border-left: solid 1px #606060;" id="closeExpandLanding"><img style="position:absolute;top:11px;right:35px;" src="//adi.admicro.vn/adt/cpc/tvcads/files/others/admVpaidCore/pclose.png"></div></div>'};
this.closeExpand=function(){document.body.style.overflow="auto";var a=document.getElementById("_AdmPrerollIplay");a.innerHTML="";a.style.display="none"}};function ExpandableTVCPreroll(a){_AdmPrerollIplay.expand(a)}function admOpenLanding(a){_AdmPrerollIplay.expandLanding(a)}function waitCloseExpandLanding(a){document.getElementById("closeExpandLanding").addEventListener("click",function(){CloseTVCPrerollLanding(a.source,a.origin)})}
function CloseTVCPrerollLanding(a,b){_AdmPrerollIplay.closeExpand();a.postMessage("CloseExpandable",b)}function CloseTVCPreroll(){_AdmPrerollIplay.closeExpand();playerTvc.postMessage("CloseExpandable",playerIframe)}function posMesClickTracking(){playerTvc.postMessage("admSendClickTracking",playerIframe)}
function _admTargetTvcPreroll(a){var b=_jsGetfrlso("retargetPopup");"undefined"!=typeof b&&""!=b&&"object"!=typeof b&&(b=JSON.parse(b));var c=!1,d;for(d in b)d==a&&(c=!0);c||(b||(b={}),c=(new Date).getTime(),d={target:"484"},d.timestamp=c+1814400,b[a]=d,b=JSON.stringify(b),_jsSetfrlso("retargetPopup",b))}
function _AdmGetIP(a){a+="=";for(var b=document.cookie.split(";"),c=0;c<b.length;c++){for(var d=b[c];" "==d.charAt(0);)d=d.substring(1);if(0==d.indexOf(a))return d.substring(a.length,d.length)}return"noip"}
var _AdmAudienData=new function(){this.createTag=function(a){var b=(new Date).getTime(),c=document.createElement("script");b="//pq-direct.revsci.net/pql?placementIdList=RVHyEf&cb="+b;var d=document.getElementsByTagName("script")[0];c.async=!0;c.onload=function(){if("undefined"!=typeof asiPlacements){"undefined"!=typeof asiPlacements.RVHyEf&&"undefined"!=typeof asiPlacements.RVHyEf["default"]&&(window.gwdTagDataAdGroup="adgroup="+asiPlacements.RVHyEf["default"].key,window.gwdTagDataBlob="blob="+asiPlacements.RVHyEf.blob,
window.gwdTagDataAdserver="adserver="+asiAdserver,window.asiAdserver=asiAdserver);for(var b in asiPlacements){window["ASPQ_"+b]="";for(var c in asiPlacements[b].data)window["ASPQ_"+b]+="PQ_"+b+"_"+c}}console.log("send message: @",(new Date).getTime(),_AdmAudienData.getDataAudien());a.source.postMessage('setDataAudien("'+_AdmAudienData.getDataAudien()+'")',a.origin)};c.src=b;d.parentNode.insertBefore(c,d)};this.getDataAudien=function(){var a=(new Date).getTime();return"undefined"!=typeof asiPlacements&&
"undefined"!=typeof gwdTagDataAdGroup&&"undefined"!=typeof gwdTagDataBlob?"//"+asiAdserver+"/rtbads/pq?mode=s&placement=RVHyEf&"+gwdTagDataAdGroup+"&"+gwdTagDataBlob+"&cachebuster="+a+"&click=%%http://admicro.vn%%":"notag"}};
(function(){if("undefined"!=typeof ADS_CHECKER){var a=function(){var a=new Image,c=new Image,d=new Image,f=(new Date).getTime(),g=0,k=0,l=0,m=0;a.onload=function(){k=(new Date).getTime()-f;g++};c.onload=function(){l=(new Date).getTime()-f;g++};d.onload=function(){m=(new Date).getTime()-f;g++};var e="",n=!1;if(1>=Math.floor(10*Math.random())){n=!0;var h=new Image;h.onerror=function(){e="-1"};h.onload=function(){e=(new Date).getTime()-f};h.src="//www.lazada.vn/favicon.ico"}c.src="//media5.admicro.vn/rtc?rd="+
Math.random();a.src="//media4.admicro.vn/rtc?rd="+Math.random();d.src="//media6.admicro.vn/rtc?rd="+Math.random();window.setTimeout(function(){var a="",b="";n&&(""==e&&(h.src="",e="loop"),a="_lz",b="_"+e);e="loop";3==g&&((new Image).src="//lg.logging.admicro.vn/rtc?dmn=ad4_ad5_ad6"+a+"&d="+(k+"_"+l+"_"+m+b),ADS_CHECKER.setStorage("__speednw","1",360,"/"))},1E4)};""==ADS_CHECKER.getStorage("__speednw")&&"https:"!=window.location.protocol&&a()}})();
(function(){if("undefined"!=typeof ADS_CHECKER){var a=ADM_AdsTracking.get("__uid");AdmonDomReady(function(){"undefined"==typeof window.admlgnews&&_admloadJs("//media1.admicro.vn/core/lgnews.js");var b=ADS_CHECKER.getStorage("_fips");if(""==a||""==b)ADS_CHECKER.setStorage("_fips",1,30,"/"),_admloadJs("//media1.admicro.vn/core/fipmin.js")})}})();
function admtvcPgid(){if("undefined"!=typeof ADS_CHECKER&&"undefined"!=typeof __AdmsendRandom)try{return"undefined"!=__admloadPageIdc?__AdmsendRandom+"&dgid="+__admloadPageIdc:__AdmsendRandom+"&dgid="+(_admislocalStorage?localStorage.__uidac:"")}catch(a){return __AdmsendRandom}else if("undefined"!=typeof ADM_CHECKER&&"undefined"!=typeof ADM_CHECKER.sr)return"&lsn="+__m_admPageloadid+"&dgid="+__admloadPageRdIdc+"&ui="+ADM_CHECKER.__uid;return""};

