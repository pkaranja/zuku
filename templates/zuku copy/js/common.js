jQuery(document).ready(function(){
	
	var mobileSearch = false;
	var mobileMenu = false;
	
	//HOME SLIDER
	jQuery('#camera_wrap_1').camera({
			thumbnails: false,
			fx:"scrollLeft",
			hover: true,
			navigation: true,
			navigationHover: false,
			playPause: false,
			pagination: false,
			loader: 'none',
			minHeight: '450px',
			time: 5000
		});
		
		
	jQuery(window).resize(function(){
		if( jQuery(window).width() > 800 ){
			if(mobileMenu){
				jQuery("#siteHolder").css("position","absolute");
				jQuery("#siteHolder").animate({"left":"0"},{duration : 500 , queue : false });
				jQuery("#mobileMenu").animate({"left":"105%"},{duration : 500 , queue : false },function(){
					jQuery("#mobileMenu").css("display","none");
				})
				
				mobileMenu = false;
			}
		}
		if( jQuery(window).width() > 331 ){
			jQuery(".arrows").css("visibility","hidden");
			jQuery("#highlight-1,#highlight-2,#now-1,#now-2,#now-3,#now-4").css("display","block");
		}		
	});
	
	jQuery("#sliderAdditional").css("display","block");
	//HOME SLIDER
	
	//POP UPS
	jQuery('#myZukuButton').click(function (e) {
		jQuery('#myZukuTop').modal();
		return false;
	});
	//POP UPS	
	
	//BUTTONS
	jQuery(".worker").click(function(){
		var id = jQuery(this).attr("id");
		jQuery("#b"+id).click();
	});
	
	
	jQuery(".packButton").click(function(){
		var id = jQuery(this).attr("id");
		id = new String( id );
		id = id.replace("button","pack");
		jQuery("#"+id).toggle(500,function(){
			
		});
	});
	
	
	jQuery(".dropToggle").click(function(){
		var id = jQuery(this).attr("id");
		id= new String( id );
		id = id.replace("toggle","list");
		jQuery("#"+id).toggle("display");
	});
	//
	
	
	//SCROLLERS
	jQuery(window).load(function(){
		jQuery(".packageChanels,.packageChanelsMobile").mCustomScrollbar({
			advanced:{
				updateOnContentResize: true,
			},
			 scrollButtons:{
			  enable:true
			},
			mouseWheel: true,
			autoDraggerLength: true,
			contentTouchScroll: true,
			scrollInertia: 150
		});		
	});
	
	//
		
	jQuery("#searchToggleMobile").click(function(){
		if(mobileMenu){ //Return menu if visible
			jQuery("#mobileMenuToggle").click();
		}
		
		if(!mobileSearch){
			jQuery("#mobileSearch").slideDown(500,function(){
				mobileSearch = true;
			});
		}
		else{
			jQuery("#mobileSearch").slideUp(500,function(){
				mobileSearch = false;
			});
		}
	});
	
	jQuery("#mobileMenuToggle").click(function(){
		if(!mobileMenu){
			jQuery("#siteHolder").css("position","absolute");
			jQuery("#mobileMenu").css("display","block");
			jQuery("#siteHolder").animate({"left":"-89%"},{duration : 400 , queue : false });
			jQuery("#mobileMenu").animate({"left":"11%"},{duration : 400 , queue : false })
			mobileMenu = true;
		}
		else{
			jQuery("#siteHolder").css("position","absolute");
			jQuery("#siteHolder").animate({"left":"0"},{duration : 400 , queue : false });
			jQuery("#mobileMenu").animate({"left":"105%"},{duration : 400 , queue : false },function(){
				jQuery("#mobileMenu").css("display","none");
			})
			mobileMenu = false;
		}
	});
});