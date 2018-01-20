
jQuery(document).ready(function(){

			var array_ad=["mua-nha","xe-may","nhac-cu","may-anh","cap-cuu"];
			var ad_content	=	getParameterByName("utm_content");
			
				if(array_ad.indexOf(ad_content)>-1){
						

					if(ad_content != "xe-may"){
						jQuery(".vay-kinh-doanh div").first().removeClass("vay-vip-xe-may");
						jQuery(".vay-kinh-doanh div").first().addClass('vay-vip-'+ad_content);
						// $('.home-banner').addClass('vay-vip-'+ad_content);
						jQuery(".home-banner").css("background","url(langding/img/"+ad_content+".jpg)");
						jQuery(".home-banner").css("background-position","center 40px");
						jQuery(".home-banner").css("background-repeat","no-repeat");
					}
				
			}
			});