	var selectedNow = 1;
	var selectedHighlight = 1;
	function changeHighlight(change){
		if( change == "next" ){
			selectedHighlight++;
		}
		else if( change == "previous" ){
			selectedHighlight--;
		}
		
		console.log(selectedHighlight);
		if( selectedHighlight == 1 ){
			jQuery("#lastHighlight").css("visibility","hidden");
			jQuery("#nextHighlight").css("visibility","visible");
		}
		if( selectedHighlight == 2 ){
			jQuery("#lastHighlight").css("visibility","visible");
			jQuery("#nextHighlight").css("visibility","hidden");
		}
		
		jQuery("#highlight-1,#highlight-2").css("display","none");
		jQuery("#highlight-"+selectedHighlight).css("display","block");
	}
	

	function changeNow(change){
		if( change == "next" ){
			selectedNow++;
		}
		else if( change == "previous" ){
			selectedNow--;
		}
		console.log(selectedNow);
		if( selectedNow == 1 ){
			jQuery("#lastNow").css("visibility","hidden");
			jQuery("#nextNow").css("visibility","visible");
		}
		else if( selectedNow == 4 ){
			jQuery("#nextNow").css("visibility","hidden");
			jQuery("#lastNow").css("visibility","visible");
		}
		else{
			jQuery("#nextNow").css("visibility","visible");
			jQuery("#lastNow").css("visibility","visible");		
		}
		
		jQuery("#now-1,#now-2,#now-3,#now-4").css("display","none");
		jQuery("#now-"+selectedNow).css("display","block");
	}
