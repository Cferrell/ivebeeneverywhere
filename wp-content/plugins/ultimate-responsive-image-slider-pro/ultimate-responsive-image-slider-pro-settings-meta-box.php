<?php
/**
 * Load Saved Ultimate Responsive Image Slider Pro Settings
 */
$PostId = $post->ID;
$RISP_Gallery_Settings_Key ="WRIS_Gallery_Settings_".$PostId;
$RISP_Gallery_Settings = unserialize(get_post_meta( $PostId, $RISP_Gallery_Settings_Key, true));
if(isset($RISP_Gallery_Settings['RISP_Slider_Layout']))
		$RISP_Slider_Layout  = $RISP_Gallery_Settings['RISP_Slider_Layout'];
	else 
		$RISP_Slider_Layout  =  3;

if($RISP_Slider_Layout) {
	
	// if free to pro
	if(isset($RISP_Gallery_Settings['RISP_Slide_In_Title_Color']))
		$RISP_Slide_In_Title_Color			= $RISP_Gallery_Settings['RISP_Slide_In_Title_Color'];
	else if(isset($RISP_Gallery_Settings['WRIS_L3_Title_Color']))
		$RISP_Slide_In_Title_Color   		= $RISP_Gallery_Settings['WRIS_L3_Title_Color'];
	else
		$RISP_Slide_In_Title_Color   		= "#31A3DD" ;
	
	// if free to pro
	if(isset($RISP_Gallery_Settings['RISP_Slide_In_Title_BG_Color']))
		$RISP_Slide_In_Title_BG_Color		= $RISP_Gallery_Settings['RISP_Slide_In_Title_BG_Color'];
	else if(isset($RISP_Gallery_Settings['WRIS_L3_Title_BgColor']))
		$RISP_Slide_In_Title_BG_Color   	= $RISP_Gallery_Settings['WRIS_L3_Title_BgColor'];
	else
		$RISP_Slide_In_Title_BG_Color   	= "#ffffff" ; 
	
	// if free to pro
	if(isset($RISP_Gallery_Settings['RISP_Slide_In_Desc_Color']))
		$RISP_Slide_In_Desc_Color			= $RISP_Gallery_Settings['RISP_Slide_In_Desc_Color'];
	else if(isset($RISP_Gallery_Settings['WRIS_L3_Desc_Color']))
		$RISP_Slide_In_Desc_Color   		= $RISP_Gallery_Settings['WRIS_L3_Desc_Color'];
	else
		$RISP_Slide_In_Desc_Color   		= "#31A3DD" ;
	
	// if free to pro
	if(isset($RISP_Gallery_Settings['RISP_Slide_In_Desc_BG_Color']))
		$RISP_Slide_In_Desc_BG_Color		= $RISP_Gallery_Settings['RISP_Slide_In_Desc_BG_Color'];
	else if(isset($RISP_Gallery_Settings['WRIS_L3_Desc_BgColor']))
		$RISP_Slide_In_Desc_BG_Color   		= $RISP_Gallery_Settings['WRIS_L3_Desc_BgColor'];
	else
		$RISP_Slide_In_Desc_BG_Color   		= "#ffffff" ;
	
	if(isset($RISP_Gallery_Settings['RISP_Thumbnail_BG_Color']))
		$RISP_Thumbnail_BG_Color  			= $RISP_Gallery_Settings['RISP_Thumbnail_BG_Color'];
	else 
		$RISP_Thumbnail_BG_Color  			= "#31a3dd";
	
	if(isset($RISP_Gallery_Settings['RISP_Thumbnail_Title_Color']))
		$RISP_Thumbnail_Title_Color  		= $RISP_Gallery_Settings['RISP_Thumbnail_Title_Color'];
	else 
		$RISP_Thumbnail_Title_Color  		= "#ffffff";
	
	
	if(isset($RISP_Gallery_Settings['RISP_Thumbnail_Desc_Color']))
		$RISP_Thumbnail_Desc_Color  		= $RISP_Gallery_Settings['RISP_Thumbnail_Desc_Color'];
	else 
		$RISP_Thumbnail_Desc_Color  		= "#ffffff";
	
	if(isset($RISP_Gallery_Settings['RISP_BG_Color_Opacity']))
		$RISP_BG_Color_Opacity  			= $RISP_Gallery_Settings['RISP_BG_Color_Opacity'];
	else 
		$RISP_BG_Color_Opacity  			= "0.5";
	
	if(isset($RISP_Gallery_Settings['RISP_Read_More_Link_ON']))
		$RISP_Read_More_Link_ON				= $RISP_Gallery_Settings['RISP_Read_More_Link_ON'];
	else
		$RISP_Read_More_Link_ON				= "text";
	
	if(isset($RISP_Gallery_Settings['RISP_Read_More_Link_Text']))
		$RISP_Read_More_Link_Text			= $RISP_Gallery_Settings['RISP_Read_More_Link_Text'];
	else
		$RISP_Read_More_Link_Text			= "Read More";
	
	if(isset($RISP_Gallery_Settings['RISP_Read_More_Link_Color']))
		$RISP_Read_More_Link_Color			= $RISP_Gallery_Settings['RISP_Read_More_Link_Color'];
	else
		$RISP_Read_More_Link_Color			= "#7B85F4";	
	
	if(isset($RISP_Gallery_Settings['RISP_Read_More_Link_Open']))
		$RISP_Read_More_Link_Open			= $RISP_Gallery_Settings['RISP_Read_More_Link_Open'];
	else
		$RISP_Read_More_Link_Open			= "_new";
	
	// if free to pro
	if(isset($RISP_Gallery_Settings['RISP_Naviagtion_Button_Color']))
		$RISP_Naviagtion_Button_Color= $RISP_Gallery_Settings['RISP_Naviagtion_Button_Color'];
	else if(isset($RISP_Gallery_Settings['WRIS_L3_Navigation_Bullets_Color']))
		$RISP_Naviagtion_Button_Color   	= $RISP_Gallery_Settings['WRIS_L3_Navigation_Bullets_Color'];
	else
		$RISP_Naviagtion_Button_Color   	= "#31A3DD" ;
	
	if(isset($RISP_Gallery_Settings['RISP_Naviagtion_Button_Size']))
		$RISP_Naviagtion_Button_Size		= $RISP_Gallery_Settings['RISP_Naviagtion_Button_Size'];
	else
		$RISP_Naviagtion_Button_Size		= 10;
	
	// if free to pro
	if(isset($RISP_Gallery_Settings['RISP_Naviagtion_Arrow_Color']))
		$RISP_Naviagtion_Arrow_Color		= $RISP_Gallery_Settings['RISP_Naviagtion_Arrow_Color'];
	else if(isset($RISP_Gallery_Settings['WRIS_L3_Navigation_Color']))
		$RISP_Naviagtion_Arrow_Color   		= $RISP_Gallery_Settings['WRIS_L3_Navigation_Color'];
	else
		$RISP_Naviagtion_Arrow_Color   		= "#31a3dd" ;
	
	if(isset($RISP_Gallery_Settings['RISP_Lightbox_Preview']))
		$RISP_Lightbox_Preview				= $RISP_Gallery_Settings['RISP_Lightbox_Preview'];
	else
		$RISP_Lightbox_Preview				= 1;
	
	// if free to pro
	if(isset($RISP_Gallery_Settings['RISP_Fullscreeen']))
		$RISP_Fullscreeen					= $RISP_Gallery_Settings['RISP_Fullscreeen'];
	else if(isset($RISP_Gallery_Settings['WRIS_L3_Fullscreeen']))
		$RISP_Fullscreeen   				= $RISP_Gallery_Settings['WRIS_L3_Fullscreeen'];
	else
		$RISP_Fullscreeen   				= 1 ;
	
	// if free to pro
	if(isset($RISP_Gallery_Settings['RISP_Font_Style']))
		$RISP_Font_Style					= $RISP_Gallery_Settings['RISP_Font_Style'];
	else if(isset($RISP_Gallery_Settings['WRIS_L3_Font_Style']))
		$RISP_Font_Style   					= $RISP_Gallery_Settings['WRIS_L3_Font_Style'];
	else
		$RISP_Font_Style   					= "Courgette";
	
	// if free to pro
	if(isset($RISP_Gallery_Settings['RISP_Custom_CSS']))
		$RISP_Custom_CSS					= $RISP_Gallery_Settings['RISP_Custom_CSS'];
	else if(isset($RISP_Gallery_Settings['WRIS_L3_Custom_CSS']))
		$RISP_Custom_CSS   					= $RISP_Gallery_Settings['WRIS_L3_Custom_CSS'];
	else
		$RISP_Custom_CSS   					= "";	
	
	
	//layout 1 settings
	if($RISP_Slider_Layout == 1) {
		$RISP_L1_Text_Alignment  		= $RISP_Gallery_Settings['RISP_L1_Text_Alignment'];
		$RISP_L1_Title_Transition   	= $RISP_Gallery_Settings['RISP_L1_Title_Transition'];
		$RISP_L1_Description_Transition = $RISP_Gallery_Settings['RISP_L1_Description_Transition'];
		$RISP_L1_Auto_Slideshow   		= $RISP_Gallery_Settings['RISP_L1_Auto_Slideshow'];
		
		if(isset($RISP_Gallery_Settings['RISP_L1_Slide_Order']))
			$RISP_L1_Slide_Order   			= $RISP_Gallery_Settings['RISP_L1_Slide_Order'];
		else
			$RISP_L1_Slide_Order   			= "ASC";
		if(isset($RISP_Gallery_Settings['RISP_L1_Slide_Distance']))
			$RISP_L1_Slide_Distance   		= $RISP_Gallery_Settings['RISP_L1_Slide_Distance'];
		else
			$RISP_L1_Slide_Distance   		= 5;
		if(isset($RISP_Gallery_Settings['RISP_L1_Thumbnail_Style_Color']))
			$RISP_L1_Thumbnail_Style_Color   = $RISP_Gallery_Settings['RISP_L1_Thumbnail_Style_Color'];
		else
			$RISP_L1_Thumbnail_Style_Color   = "#31A3DD";
			$RISP_L1_Sliding_Arrow   			= $RISP_Gallery_Settings['RISP_L1_Sliding_Arrow'];
			$RISP_L1_Slider_Navigation   		= $RISP_Gallery_Settings['RISP_L1_Slider_Navigation'];
			$RISP_L1_Navigation_Button   		= $RISP_Gallery_Settings['RISP_L1_Navigation_Button'];
		if(isset($RISP_Gallery_Settings['RISP_L1_Navigation_Button_Style']))
			$RISP_L1_Navigation_Button_Style= $RISP_Gallery_Settings['RISP_L1_Navigation_Button_Style'];
		else
			$RISP_L1_Navigation_Button_Style= 1;
			$RISP_L1_Slider_Transition_Speed= $RISP_Gallery_Settings['RISP_L1_Slider_Transition_Speed'];
			$RISP_L1_Slider_Transition_Effect= $RISP_Gallery_Settings['RISP_L1_Slider_Transition_Effect'];
			$RISP_L1_Slider_Width   		= $RISP_Gallery_Settings['RISP_L1_Slider_Width'];
		if(isset($RISP_Gallery_Settings['RISP_L1_Width']))
			$RISP_L1_Width   				= $RISP_Gallery_Settings['RISP_L1_Width'];
		else
			$RISP_L1_Width					= "custom";		
			$RISP_L1_Slider_Height   		= $RISP_Gallery_Settings['RISP_L1_Slider_Height'];
		if(isset($RISP_Gallery_Settings['RISP_L1_Height']))
			$RISP_L1_Height   				= $RISP_Gallery_Settings['RISP_L1_Height'];
		else
			$RISP_L1_Height					= "custom";
	}
	
	//layout 2 settings
	if($RISP_Slider_Layout == 2) {
		$RISP_L2_Auto_Slideshow   		= $RISP_Gallery_Settings['RISP_L2_Auto_Slideshow'];
		if(isset($RISP_Gallery_Settings['RISP_L2_Slide_Order']))
			$RISP_L2_Slide_Order   			= $RISP_Gallery_Settings['RISP_L2_Slide_Order'];
		else
			$RISP_L2_Slide_Order   			= "ASC";
		if(isset($RISP_Gallery_Settings['RISP_L2_Slide_Distance']))
			$RISP_L2_Slide_Distance   		= $RISP_Gallery_Settings['RISP_L2_Slide_Distance'];
		else
			$RISP_L2_Slide_Distance   		= 5;
		$RISP_L2_Sliding_Arrow   			= $RISP_Gallery_Settings['RISP_L2_Sliding_Arrow'];
		$RISP_L2_Navigation_Button   		= $RISP_Gallery_Settings['RISP_L2_Navigation_Button'];
		if(isset($RISP_Gallery_Settings['RISP_L2_Navigation_Button_Style']))
			$RISP_L2_Navigation_Button_Style= $RISP_Gallery_Settings['RISP_L2_Navigation_Button_Style'];
		else
			$RISP_L2_Navigation_Button_Style= 1;
		$RISP_L2_Slider_Transition_Speed	= $RISP_Gallery_Settings['RISP_L2_Slider_Transition_Speed'];
		$RISP_L2_Slider_Transition_Effect	= $RISP_Gallery_Settings['RISP_L2_Slider_Transition_Effect'];
		$RISP_L2_Slider_Width   			= $RISP_Gallery_Settings['RISP_L2_Slider_Width'];
		if(isset($RISP_Gallery_Settings['RISP_L2_Width']))
			$RISP_L2_Width   				= $RISP_Gallery_Settings['RISP_L2_Width'];
		else
			$RISP_L2_Width					= "percentage";
		$RISP_L2_Slider_Height   		= $RISP_Gallery_Settings['RISP_L2_Slider_Height'];
		if(isset($RISP_Gallery_Settings['RISP_L2_Height']))
			$RISP_L2_Height   				= $RISP_Gallery_Settings['RISP_L2_Height'];
		else
			$RISP_L2_Height					= "custom";
	}
	
	//layout 3 settings
	if($RISP_Slider_Layout == 3) {
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Text_Alignment']))
			$RISP_L3_Text_Alignment   				= $RISP_Gallery_Settings['RISP_L3_Text_Alignment'];
		else
			$RISP_L3_Text_Alignment					= "centerCenter";
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Title_Transition']))
			$RISP_L3_Title_Transition   			= $RISP_Gallery_Settings['RISP_L3_Title_Transition'];
		else
			$RISP_L3_Title_Transition				= "up";
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Description_Transition']))
			$RISP_L3_Description_Transition   		= $RISP_Gallery_Settings['RISP_L3_Description_Transition'];
		else
			$RISP_L3_Description_Transition			= "down";
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Auto_Slideshow']))
			$RISP_L3_Auto_Slideshow   				= $RISP_Gallery_Settings['RISP_L3_Auto_Slideshow'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Auto_Slideshow']))
			$RISP_L3_Auto_Slideshow   				= $RISP_Gallery_Settings['WRIS_L3_Auto_Slideshow'];
		else
			$RISP_L3_Auto_Slideshow   				= 1;		
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Slide_Order']))
			$RISP_L3_Slide_Order   				= $RISP_Gallery_Settings['RISP_L3_Slide_Order'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Transition']))
			$RISP_L3_Slide_Order   				= $RISP_Gallery_Settings['WRIS_L3_Slide_Order'];
		else
			$RISP_L3_Slide_Order   				= "ASC";
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Slide_Distance']))
			$RISP_L3_Slide_Distance   			= $RISP_Gallery_Settings['RISP_L3_Slide_Distance'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Slide_Distance']))
			$RISP_L3_Slide_Distance   			= $RISP_Gallery_Settings['WRIS_L3_Slide_Distance'];
		else
			$RISP_L3_Slide_Distance   			= 5;
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Navigation_Position']))
			$RISP_L3_Navigation_Position   		= $RISP_Gallery_Settings['RISP_L3_Navigation_Position'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Navigation_Position']))
			$RISP_L3_Navigation_Position   		= $RISP_Gallery_Settings['WRIS_L3_Navigation_Position'];
		else
			$RISP_L3_Navigation_Position   		= "bottom";
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Thumbnail_Style']))
			$RISP_L3_Thumbnail_Style   			= $RISP_Gallery_Settings['RISP_L3_Thumbnail_Style'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Thumbnail_Style']))
			$RISP_L3_Thumbnail_Style   			= $RISP_Gallery_Settings['WRIS_L3_Thumbnail_Style'];
		else
			$RISP_L3_Thumbnail_Style   			= "border";
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Thumbnail_Style_Color']))
			$RISP_L3_Thumbnail_Style_Color   	= $RISP_Gallery_Settings['RISP_L3_Thumbnail_Style_Color'];
		else
			$RISP_L3_Thumbnail_Style_Color   	= "#31A3DD";
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Thumbnail_Width']))
			$RISP_L3_Thumbnail_Width   			= $RISP_Gallery_Settings['RISP_L3_Thumbnail_Width'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Thumbnail_Width']))
			$RISP_L3_Thumbnail_Width   			= $RISP_Gallery_Settings['WRIS_L3_Thumbnail_Width'];
		else
			$RISP_L3_Thumbnail_Width   			= 120;
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Thumbnail_Height']))
			$RISP_L3_Thumbnail_Height   		= $RISP_Gallery_Settings['RISP_L3_Thumbnail_Height'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Thumbnail_Height']))
			$RISP_L3_Thumbnail_Height   		= $RISP_Gallery_Settings['WRIS_L3_Thumbnail_Height'];
		else
			$RISP_L3_Thumbnail_Height   		= 100;
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Sliding_Arrow']))
			$RISP_L3_Sliding_Arrow   			= $RISP_Gallery_Settings['RISP_L3_Sliding_Arrow'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Sliding_Arrow']))
			$RISP_L3_Sliding_Arrow   			= $RISP_Gallery_Settings['WRIS_L3_Sliding_Arrow'];
		else
			$RISP_L3_Sliding_Arrow   			= 1;
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Slider_Navigation']))
			$RISP_L3_Slider_Navigation   		= $RISP_Gallery_Settings['RISP_L3_Slider_Navigation'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Slider_Navigation']))
			$RISP_L3_Slider_Navigation   		= $RISP_Gallery_Settings['WRIS_L3_Slider_Navigation'];
		else
			$RISP_L3_Slider_Navigation   		= 1;
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Navigation_Button']))
			$RISP_L3_Navigation_Button   		= $RISP_Gallery_Settings['RISP_L3_Navigation_Button'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Navigation_Button']))
			$RISP_L3_Navigation_Button   		= $RISP_Gallery_Settings['WRIS_L3_Navigation_Button'];
		else
			$RISP_L3_Navigation_Button   		= 1;
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Navigation_Button_Style']))
			$RISP_L3_Navigation_Button_Style= $RISP_Gallery_Settings['RISP_L3_Navigation_Button_Style'];
		else
			$RISP_L3_Navigation_Button_Style= 1;
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Slider_Transition_Speed']))
			$RISP_L3_Slider_Transition_Speed	= $RISP_Gallery_Settings['RISP_L3_Slider_Transition_Speed'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Transition']))
			$RISP_L3_Slider_Transition_Speed   	= $RISP_Gallery_Settings['WRIS_L3_Transition_Speed'];
		else
			$RISP_L3_Slider_Transition_Speed   	= 5000;
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Slider_Transition_Effect']))
			$RISP_L3_Slider_Transition_Effect= $RISP_Gallery_Settings['RISP_L3_Slider_Transition_Effect'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Transition']))
			$RISP_L3_Slider_Transition_Effect   = $RISP_Gallery_Settings['WRIS_L3_Transition'];
		else
			$RISP_L3_Slider_Transition_Effect   		= 1;
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Slider_Width']))
			$RISP_L3_Slider_Width   			= $RISP_Gallery_Settings['RISP_L3_Slider_Width'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Slider_Width']))
			$RISP_L3_Slider_Width   			= $RISP_Gallery_Settings['WRIS_L3_Slider_Width'];
		else
			$RISP_L3_Slider_Width   			= 1000;
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Slider_Height']))
			$RISP_L3_Slider_Height   			= $RISP_Gallery_Settings['RISP_L3_Slider_Height'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Slider_Height']))
			$RISP_L3_Slider_Height   			= $RISP_Gallery_Settings['WRIS_L3_Slider_Height'];
		else
			$RISP_L3_Slider_Height   			= 500;
		
		if(isset($RISP_Gallery_Settings['RISP_L3_Width']))
			$RISP_L3_Width= $RISP_Gallery_Settings['RISP_L3_Width'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Width']))
			$RISP_L3_Width   					= $RISP_Gallery_Settings['WRIS_L3_Width'];
		else
			$RISP_L3_Width   					= "custom";

		if(isset($RISP_Gallery_Settings['RISP_L3_Height']))
			$RISP_L3_Height= $RISP_Gallery_Settings['RISP_L3_Height'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Height']))
			$RISP_L3_Height   					= $RISP_Gallery_Settings['WRIS_L3_Height'];
		else
			$RISP_L3_Height   					= "custom";
		if(isset($RISP_Gallery_Settings['RISP_Slide_In_Desc_Color']))
			$RISP_Slide_In_Desc_Color= $RISP_Gallery_Settings['RISP_Slide_In_Desc_Color'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Desc_Color']))
			$RISP_Slide_In_Desc_Color   		= $RISP_Gallery_Settings['WRIS_L3_Desc_Color'];
		else
			$RISP_Slide_In_Desc_Color   		= "#31A3DD" ;
		if(isset($RISP_Gallery_Settings['RISP_Slide_In_Desc_BG_Color']))
			$RISP_Slide_In_Desc_BG_Color= $RISP_Gallery_Settings['RISP_Slide_In_Desc_BG_Color'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Desc_BgColor']))
			$RISP_Slide_In_Desc_BG_Color   		= $RISP_Gallery_Settings['WRIS_L3_Desc_BgColor'];
		else
			$RISP_Slide_In_Desc_BG_Color   		= "#ffffff" ;	
		if(isset($RISP_Gallery_Settings['RISP_Naviagtion_Arrow_Color']))
			$RISP_Naviagtion_Arrow_Color= $RISP_Gallery_Settings['RISP_Naviagtion_Arrow_Color'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Navigation_Color']))
			$RISP_Naviagtion_Arrow_Color   		= $RISP_Gallery_Settings['WRIS_L3_Navigation_Color'];
		else
			$RISP_Naviagtion_Arrow_Color   		= "#31a3dd" ;

		if(isset($RISP_Gallery_Settings['RISP_Naviagtion_Button_Color']))
			$RISP_Naviagtion_Button_Color= $RISP_Gallery_Settings['RISP_Naviagtion_Button_Color'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Navigation_Bullets_Color']))
			$RISP_Naviagtion_Button_Color   	= $RISP_Gallery_Settings['WRIS_L3_Navigation_Bullets_Color'];
		else
			$RISP_Naviagtion_Button_Color   	= "#31A3DD" ;	
	}
	
	//layout 4 settings
	if($RISP_Slider_Layout == 4) {
		$RISP_L4_Auto_Slideshow   			= $RISP_Gallery_Settings['RISP_L4_Auto_Slideshow'];
		if(isset($RISP_Gallery_Settings['RISP_L4_Slide_Order']))
			$RISP_L4_Slide_Order   			= $RISP_Gallery_Settings['RISP_L4_Slide_Order'];
		else
			$RISP_L4_Slide_Order   			= "ASC";
		if(isset($RISP_Gallery_Settings['RISP_L4_Slide_Distance']))
			$RISP_L4_Slide_Distance   		= $RISP_Gallery_Settings['RISP_L4_Slide_Distance'];
		else
			$RISP_L4_Slide_Distance   		= 5;
		$RISP_L4_Sliding_Arrow   			= $RISP_Gallery_Settings['RISP_L4_Sliding_Arrow'];
		$RISP_L4_Navigation_Button   		= $RISP_Gallery_Settings['RISP_L4_Navigation_Button'];
		if(isset($RISP_Gallery_Settings['RISP_L4_Navigation_Button_Style']))
			$RISP_L4_Navigation_Button_Style= $RISP_Gallery_Settings['RISP_L4_Navigation_Button_Style'];
		else
			$RISP_L4_Navigation_Button_Style= 1;
		$RISP_L4_Slider_Transition_Speed	= $RISP_Gallery_Settings['RISP_L4_Slider_Transition_Speed'];
		$RISP_L4_Slider_Transition_Effect	= $RISP_Gallery_Settings['RISP_L4_Slider_Transition_Effect'];
		$RISP_L4_Slider_Width   			= $RISP_Gallery_Settings['RISP_L4_Slider_Width'];
		if(isset($RISP_Gallery_Settings['RISP_L4_Width']))
			$RISP_L4_Width   				= $RISP_Gallery_Settings['RISP_L4_Width'];
		else
			$RISP_L4_Width					= "custom";
		$RISP_L4_Slider_Height   			= $RISP_Gallery_Settings['RISP_L4_Slider_Height'];
		if(isset($RISP_Gallery_Settings['RISP_L4_Height']))
			$RISP_L4_Height   				= $RISP_Gallery_Settings['RISP_L4_Height'];
		else
			$RISP_L4_Height					= "custom";
	}
	
	//layout 5 settings
	if($RISP_Slider_Layout == 5) {
		$RISP_L5_Auto_Slideshow   			= $RISP_Gallery_Settings['RISP_L5_Auto_Slideshow'];
		if(isset($RISP_Gallery_Settings['RISP_L5_Slide_Order']))
			$RISP_L5_Slide_Order   			= $RISP_Gallery_Settings['RISP_L5_Slide_Order'];
		else
			$RISP_L5_Slide_Order   			= "ASC";
		if(isset($RISP_Gallery_Settings['RISP_L5_Slide_Distance']))
			$RISP_L5_Slide_Distance   		= $RISP_Gallery_Settings['RISP_L5_Slide_Distance'];
		else
			$RISP_L5_Slide_Distance   		= 5;
		if(isset($RISP_Gallery_Settings['RISP_L5_Thumbnail_Style_Color']))
			$RISP_L5_Thumbnail_Style_Color  = $RISP_Gallery_Settings['RISP_L5_Thumbnail_Style_Color'];
		else
			$RISP_L5_Thumbnail_Style_Color  = "#31A3DD";
		$RISP_L5_Sliding_Arrow   			= $RISP_Gallery_Settings['RISP_L5_Sliding_Arrow'];
		$RISP_L5_Sliding_Direction   		= $RISP_Gallery_Settings['RISP_L5_Sliding_Direction'];
		$RISP_L5_Navigation_Button   		= $RISP_Gallery_Settings['RISP_L5_Navigation_Button'];
		if(isset($RISP_Gallery_Settings['RISP_L5_Navigation_Button_Style']))
			$RISP_L5_Navigation_Button_Style= $RISP_Gallery_Settings['RISP_L5_Navigation_Button_Style'];
		else
			$RISP_L5_Navigation_Button_Style= 1;
		$RISP_L5_Slider_Navigation   		= $RISP_Gallery_Settings['RISP_L5_Slider_Navigation'];
		$RISP_L5_Slider_Navigation_Content  = $RISP_Gallery_Settings['RISP_L5_Slider_Navigation_Content'];
		$RISP_L5_Slider_Navigation_Position = $RISP_Gallery_Settings['RISP_L5_Slider_Navigation_Position'];
		$RISP_L5_Slider_Transition_Speed	= $RISP_Gallery_Settings['RISP_L5_Slider_Transition_Speed'];
		$RISP_L5_Slider_Transition_Effect	= $RISP_Gallery_Settings['RISP_L5_Slider_Transition_Effect'];
		$RISP_L5_Slider_Width   			= $RISP_Gallery_Settings['RISP_L5_Slider_Width'];
		if(isset($RISP_Gallery_Settings['RISP_L5_Width']))
			$RISP_L5_Width   				= $RISP_Gallery_Settings['RISP_L5_Width'];
		else
			$RISP_L5_Width					= "custom";
		$RISP_L5_Slider_Height   			= $RISP_Gallery_Settings['RISP_L5_Slider_Height'];
		if(isset($RISP_Gallery_Settings['RISP_L5_Height']))
			$RISP_L5_Height   				= $RISP_Gallery_Settings['RISP_L5_Height'];
		else
			$RISP_L5_Height					= "custom";
	}
}
?>
<style>
@media only screen and (min-width: 970px){
	#post-body.columns-2 #postbox-container-1 {
		float: right;
		margin-right: 15px;
		width: 280px;
		right:0;
		position:fixed;
	}
}
.thumb-pro th, .thumb-pro label, .thumb-pro h3, .thumb-pro{
	color:#31a3dd !important;
	font-weight:bold;
}
.caro-pro th, .caro-pro label, .caro-pro h3, .caro-pro{
	color:#DA5766 !important;
	font-weight:bold;
}
</style>
<?php require_once("tooltip.php"); ?>	
<table class="form-table">
	<tbody>
		
		<!----------------------------- Slider Common Settings Start -------------------->
		<tr>
			<th scope="row"><label><?php _e('Slider Layout', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_Slider_Layout)) $RISP_Slider_Layout = 3; ?>
				<input type="radio" name="wl-slider-layout" id="wl-slider-layout" value="1" <?php if($RISP_Slider_Layout == 1 ) { echo "checked"; } ?> onclick="return LayoutChecked();"> <?php _e('Layout', RISP_TEXT_DOMAIN); ?> 1 <a href="#" id="p1" data-tooltip="#s1"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>&nbsp;&nbsp;
				<input type="radio" name="wl-slider-layout" id="wl-slider-layout" value="2" <?php if($RISP_Slider_Layout == 2 ) { echo "checked"; } ?> onclick="return LayoutChecked();"> <?php _e('Layout', RISP_TEXT_DOMAIN); ?> 2 <a href="#" id="p2" data-tooltip="#s2"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>&nbsp;&nbsp;
				<input type="radio" name="wl-slider-layout" id="wl-slider-layout" value="3" <?php if($RISP_Slider_Layout == 3 ) { echo "checked"; } ?> onclick="return LayoutChecked();"> <?php _e('Layout', RISP_TEXT_DOMAIN); ?> 3 <a href="#" id="p3" data-tooltip="#s3"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>&nbsp;&nbsp;
				<input type="radio" name="wl-slider-layout" id="wl-slider-layout" value="4" <?php if($RISP_Slider_Layout == 4 ) { echo "checked"; } ?> onclick="return LayoutChecked();"> <?php _e('Layout', RISP_TEXT_DOMAIN); ?> 4 <a href="#" id="p4" data-tooltip="#s4"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>&nbsp;&nbsp;
				<input type="radio" name="wl-slider-layout" id="wl-slider-layout" value="5" <?php if($RISP_Slider_Layout == 5 ) { echo "checked"; } ?> onclick="return LayoutChecked();"> <?php _e('Layout', RISP_TEXT_DOMAIN); ?> 5 <a href="#" id="p5" data-tooltip="#s5"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
			</td>
		</tr>
		
		<!----------------------------- layout 1 settings ------------------------------>
		<tr id="L1">
			<th scope="row" colspan="2"><h2><?php _e('Configure Slider Layout 1 Settings For Slider Shortcode', RISP_TEXT_DOMAIN); ?>: <?php echo "[URISP id=$PostId]"; ?></h2><hr></th>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Slider Text Alignment', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Text_Alignment)) $RISP_L1_Text_Alignment = "centerCenter"; ?>
				<select name="wl-l1-text-alignment" id="wl-l1-text-alignment" class="standard-dropdown">
					<optgroup label="Select Test Alignment">
						<option value="topLeft" <?php if($RISP_L1_Text_Alignment == "topLeft" ) { echo "selected=selected"; } ?>><?php _e('Top Left', RISP_TEXT_DOMAIN); ?></option>
						<option value="topCenter" <?php if($RISP_L1_Text_Alignment == "topCenter" ) { echo "selected=selected"; } ?>><?php _e('Top Center', RISP_TEXT_DOMAIN); ?></option>
						<option value="topRight" <?php if($RISP_L1_Text_Alignment == "topRight" ) { echo "selected=selected"; } ?>><?php _e('Top Right', RISP_TEXT_DOMAIN); ?></option>
						<option value="centerLeft" <?php if($RISP_L1_Text_Alignment == "centerLeft" ) { echo "selected=selected"; } ?>><?php _e('Middle Left', RISP_TEXT_DOMAIN); ?></option>
						<option value="centerCenter" <?php if($RISP_L1_Text_Alignment == "centerCenter" ) { echo "selected=selected"; } ?>><?php _e('Middle', RISP_TEXT_DOMAIN); ?></option>
						<option value="centerRight" <?php if($RISP_L1_Text_Alignment == "centerRight" ) { echo "selected=selected"; } ?>><?php _e('Middle Right', RISP_TEXT_DOMAIN); ?></option>
						<option value="bottomLeft" <?php if($RISP_L1_Text_Alignment == "bottomLeft" ) { echo "selected=selected"; } ?>><?php _e('Bottom Left', RISP_TEXT_DOMAIN); ?></option>
						<option value="bottomCenter" <?php if($RISP_L1_Text_Alignment == "bottomCenter" ) { echo "selected=selected"; } ?>><?php _e('Bottom Center', RISP_TEXT_DOMAIN); ?></option>
						<option value="bottomRight" <?php if($RISP_L1_Text_Alignment == "bottomRight" ) { echo "selected=selected"; } ?>><?php _e('Bottom Right', RISP_TEXT_DOMAIN); ?></option>
					</optgroup>
				</select>
				<p class="description">
					<?php _e('Select a position to place slides text (title, description, read more link)', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p6" data-tooltip="#s6"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Title Transition Effect', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Title_Transition)) $RISP_L1_Title_Transition = "up"; ?>
				<input type="radio" name="wl-l1-title-transition" id="wl-l1-title-transition" value="left" <?php if($RISP_L1_Title_Transition == "left" ) { echo "checked"; } ?>> <?php _e('From Left', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l1-title-transition" id="wl-l1-title-transition" value="right" <?php if($RISP_L1_Title_Transition == "right" ) { echo "checked"; } ?>> <?php _e('From Right', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l1-title-transition" id="wl-l1-title-transition" value="up" <?php if($RISP_L1_Title_Transition == "up" ) { echo "checked"; } ?>> <?php _e('From Up', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l1-title-transition" id="wl-l1-title-transition" value="down" <?php if($RISP_L1_Title_Transition == "down" ) { echo "checked"; } ?>> <?php _e('From Down', RISP_TEXT_DOMAIN); ?> 
				<p class="description">
					<?php _e('Select a transition effect apply on slide title', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p7" data-tooltip="#s7"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Description Transition Effect', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Description_Transition)) $RISP_L1_Description_Transition = "down"; ?>
				<input type="radio" name="wl-l1-description-transition" id="wl-l1-description-transition" value="left" <?php if($RISP_L1_Description_Transition == "left" ) { echo "checked"; } ?>> <?php _e('From Left', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l1-description-transition" id="wl-l1-description-transition" value="right" <?php if($RISP_L1_Description_Transition == "right" ) { echo "checked"; } ?>> <?php _e('From Right', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l1-description-transition" id="wl-l1-description-transition" value="up" <?php if($RISP_L1_Description_Transition == "up" ) { echo "checked"; } ?>> <?php _e('From Up', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l1-description-transition" id="wl-l1-description-transition" value="down" <?php if($RISP_L1_Description_Transition == "down" ) { echo "checked"; } ?>> <?php _e('From Down', RISP_TEXT_DOMAIN); ?> 
				<p class="description">
					<?php _e('Select a transition effect apply on slide description', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p8" data-tooltip="#s8"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
				
		<tr id="L1">
			<th scope="row"><label><?php _e('Auto Play Slide Show', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Auto_Slideshow)) $RISP_L1_Auto_Slideshow = 1; ?>
				<input type="radio" name="wl-l1-auto-slide" id="wl-l1-auto-slide" value="1" <?php if($RISP_L1_Auto_Slideshow == 1 ) { echo "checked"; } ?>> <?php _e('Yes', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l1-auto-slide" id="wl-l1-auto-slide" value="2" <?php if($RISP_L1_Auto_Slideshow == 2 ) { echo "checked"; } ?>> <?php _e('Yes with Pause On Mouse Hover', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l1-auto-slide" id="wl-l1-auto-slide" value="3" <?php if($RISP_L1_Auto_Slideshow == 3 ) { echo "checked"; } ?>> <?php _e('No', RISP_TEXT_DOMAIN);?>
				<p class="description">
					<?php _e('Select an option to auto slide enable or disable', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p9" data-tooltip="#s9"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Slide Order', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Slide_Order)) $RISP_L1_Slide_Order = "ASC"; ?>
				<input type="radio" name="wl-l1-slide-order" id="wl-l1-slide-order" value="ASC" <?php if($RISP_L1_Slide_Order == "ASC" ) { echo "checked"; } ?>> <?php _e('Ascending', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l1-slide-order" id="wl-l1-slide-order" value="DESC" <?php if($RISP_L1_Slide_Order == "DESC" ) { echo "checked"; } ?>> <?php _e('Descending', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l1-slide-order" id="wl-l1-slide-order" value="shuffle" <?php if($RISP_L1_Slide_Order == "shuffle" ) { echo "checked"; } ?>> <?php _e('Random', RISP_TEXT_DOMAIN);?>
				<p class="description">
					<?php _e('Select an option to decide slide show order', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Slide Distance', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Slide_Distance)) $RISP_L1_Slide_Distance = 5; ?>
				<select name="wl-l1-slide-distance" id="wl-l1-slide-distance">
					<option value="0" <?php if($RISP_L1_Slide_Distance == 0) echo "selected=selected";?>>0</option>
					<option value="5" <?php if($RISP_L1_Slide_Distance == 5) echo "selected=selected";?>>5</option>
					<option value="10" <?php if($RISP_L1_Slide_Distance == 10) echo "selected=selected";?>>10</option>
					<option value="15" <?php if($RISP_L1_Slide_Distance == 15) echo "selected=selected";?>>15</option>
					<option value="20" <?php if($RISP_L1_Slide_Distance == 20) echo "selected=selected";?>>20</option>
					<option value="25" <?php if($RISP_L1_Slide_Distance == 25) echo "selected=selected";?>>25</option>
				</select>
				<p class="description">
					<?php _e('Set a gap between all slides. Range 0 to 25', RISP_TEXT_DOMAIN); ?>&nbsp;
				</p>
			</td>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Selected Thumbnail Pointer Color', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Thumbnail_Style_Color)) $RISP_L1_Thumbnail_Style_Color = "#31A3DD"; ?>
				<input id="wl-l1-thumbnail-style-color" name="wl-l1-thumbnail-style-color" type="text" value="<?php echo $RISP_L1_Thumbnail_Style_Color; ?>" class="my-color-field" data-default-color="#000000" />
				<p class="description">
					<?php _e('Select a color you want to apply on selected thumbnail pointer', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Sliding Arrow', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Sliding_Arrow)) $RISP_L1_Sliding_Arrow = 1; ?>
				<input type="radio" name="wl-l1-sliding-arrow" id="wl-l1-sliding-arrow" value="1" <?php if($RISP_L1_Sliding_Arrow == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l1-sliding-arrow" id="wl-l1-sliding-arrow" value="0" <?php if($RISP_L1_Sliding_Arrow == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide arrows on mouse hover on slide', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p10" data-tooltip="#s10"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Show Detailed Navigation', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Slider_Navigation)) $RISP_L1_Slider_Navigation = 1; ?>
				<input type="radio" name="wl-l1-navigation" id="wl-l1-navigation" value="1" <?php if($RISP_L1_Slider_Navigation == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l1-navigation" id="wl-l1-navigation" value="0" <?php if($RISP_L1_Slider_Navigation == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide details (Title & Description) based navigation below slides', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p11" data-tooltip="#s11"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Show Navigation Bullets', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Navigation_Button)) $RISP_L1_Navigation_Button = 1; ?>
				<input type="radio" name="wl-l1-navigation-button" id="wl-l1-navigation-button" value="1" <?php if($RISP_L1_Navigation_Button == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l1-navigation-button" id="wl-l1-navigation-button" value="0" <?php if($RISP_L1_Navigation_Button == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide slider navigation buttons under image slider', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p12" data-tooltip="#s12"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Navigation Bullets Style', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Navigation_Button_Style)) $RISP_L1_Navigation_Button_Style = 1; ?>
				<input type="radio" name="wl-l1-navigation-style" id="wl-l1-navigation-style" value="1" <?php if($RISP_L1_Navigation_Button_Style == 1 ) { echo "checked"; } ?>> <?php _e('Circle', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l1-navigation-style" id="wl-l1-navigation-style" value="0" <?php if($RISP_L1_Navigation_Button_Style == 0 ) { echo "checked"; } ?>> <?php _e('Rectangle', RISP_TEXT_DOMAIN); ?>
				<p class="description">
					<?php _e('Select navigation style you want to apply on navigation bullets', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Slider Transition Speed', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Slider_Transition_Speed)) $RISP_L1_Slider_Transition_Speed = "5000"; ?>
				<input type="text" id="wl-l1-slider-transition-speed" name="wl-l1-slider-transition-speed"  value="<?php echo $RISP_L1_Slider_Transition_Speed; ?>" >
				<p class="description">
				<?php _e('Enter 500 to 5000 between numeric value for increase / decrease slider transition speed. Default transition speed 5000', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Slider Transition Effect', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Slider_Transition_Effect)) $RISP_L1_Slider_Transition_Effect = 1; ?>
				<input type="radio" id="wl-l1-slider-transition-effect" name="wl-l1-slider-transition-effect"  value="1" <?php if($RISP_L1_Slider_Transition_Effect == 1 ) { echo "checked=checked"; } ?>> Fade
				<input type="radio" id="wl-l1-slider-transition-effect" name="wl-l1-slider-transition-effect"  value="0" <?php if($RISP_L1_Slider_Transition_Effect == 0 ) { echo "checked=checked"; } ?>> Slide
				<p class="description">
				<?php _e('Set a slide transition effect', RISP_TEXT_DOMAIN); ?> 
				</p>
			</td>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Slider Width', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Slider_Width)) $RISP_L1_Slider_Width = 1000; ?>
				<?php if(!isset($RISP_L1_Width)) $RISP_L1_Width = "custom"; ?>
				<input type="radio" name="wl-l1-width" id="wl-l1-width" value="100%" <?php if($RISP_L1_Width == "100%" ) { echo "checked"; } ?>> <?php _e('100% Width', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l1-width" id="wl-l1-width" value="fullWidth" <?php if($RISP_L1_Width == "fullWidth" ) { echo "checked"; } ?>> <?php _e('Full Width', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l1-width" id="wl-l1-width" value="custom" <?php if($RISP_L1_Width == "custom" ) { echo "checked"; } ?>> <?php _e('Custom', RISP_TEXT_DOMAIN); ?>
				<input type="text" name="wl-l1-slider-width" id="wl-l1-slider-width" value="<?php echo $RISP_L1_Slider_Width; ?>">
				<p class="description">
					<?php _e('Enter your desired width for slider. Default width is 1000px', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p13" data-tooltip="#s13"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L1">
			<th scope="row"><label><?php _e('Slider Height', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L1_Slider_Height)) $RISP_L1_Slider_Height = 500; ?>
				<?php if(!isset($RISP_L1_Height)) $RISP_L1_Height = "custom"; ?>				
				<input type="radio" name="wl-l1-height" id="wl-l1-height" value="auto" <?php if($RISP_L1_Height == "auto" ) { echo "checked"; } ?>> <?php _e('Auto Height', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l1-height" id="wl-l1-height" value="custom" <?php if($RISP_L1_Height == "custom" ) { echo "checked"; } ?>> <?php _e('Custom', RISP_TEXT_DOMAIN); ?>
				<input type="text" name="wl-l1-slider-height" id="wl-l1-slider-height" value="<?php echo $RISP_L1_Slider_Height; ?>">
				<p class="description">
					<?php _e('Enter your desired height for slider. Default height is 500px', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p14" data-tooltip="#s14"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		<!----------------------------- layout 1 settings end -------------------------->

		
		<!----------------------------- layout 2 settings ------------------------------>
		<tr id="L2">
			<th scope="row" colspan="2"><h2><?php _e('Configure Slider Layout 2 Settings For Slider Shortcode', RISP_TEXT_DOMAIN); ?>: <?php echo "[URISP id=$PostId]"; ?></h2><hr></th>
			
		</tr>
		
		<tr id="L2">
			<th scope="row"><label><?php _e('Auto Play Slide Show', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L2_Auto_Slideshow)) $RISP_L2_Auto_Slideshow = 1; ?>
				<input type="radio" name="wl-l2-auto-slide" id="wl-l2-auto-slide" value="1" <?php if($RISP_L2_Auto_Slideshow == 1 ) { echo "checked"; } ?>> <?php _e('Yes', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l2-auto-slide" id="wl-l2-auto-slide" value="2" <?php if($RISP_L2_Auto_Slideshow == 2 ) { echo "checked"; } ?>> <?php _e('Yes with Pause On Mouse Hover', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l2-auto-slide" id="wl-l2-auto-slide" value="3" <?php if($RISP_L2_Auto_Slideshow == 3 ) { echo "checked"; } ?>> <?php _e('No', RISP_TEXT_DOMAIN);?>
				<p class="description">
					<?php _e('Select Yes/No option to auto slide enable or disable into slider', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p15" data-tooltip="#s15"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L2">
			<th scope="row"><label><?php _e('Slide Order', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L2_Slide_Order)) $RISP_L2_Slide_Order = "ASC"; ?>
				<input type="radio" name="wl-l2-slide-order" id="wl-l2-slide-order" value="ASC" <?php if($RISP_L2_Slide_Order == "ASC" ) { echo "checked"; } ?>> <?php _e('Ascending', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l2-slide-order" id="wl-l2-slide-order" value="DESC" <?php if($RISP_L2_Slide_Order == "DESC" ) { echo "checked"; } ?>> <?php _e('Descending', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l2-slide-order" id="wl-l2-slide-order" value="shuffle" <?php if($RISP_L2_Slide_Order == "shuffle" ) { echo "checked"; } ?>> <?php _e('Random', RISP_TEXT_DOMAIN);?>
				<p class="description">
					<?php _e('Select an option to decide slide show order', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L2">
			<th scope="row"><label><?php _e('Slide Distance', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L2_Slide_Distance)) $RISP_L2_Slide_Distance = 5; ?>
				<select name="wl-l2-slide-distance" id="wl-l2-slide-distance">
					<option value="0" <?php if($RISP_L2_Slide_Distance == 0) echo "selected=selected";?>>0</option>
					<option value="5" <?php if($RISP_L2_Slide_Distance == 5) echo "selected=selected";?>>5</option>
					<option value="10" <?php if($RISP_L2_Slide_Distance == 10) echo "selected=selected";?>>10</option>
					<option value="15" <?php if($RISP_L2_Slide_Distance == 15) echo "selected=selected";?>>15</option>
					<option value="20" <?php if($RISP_L2_Slide_Distance == 20) echo "selected=selected";?>>20</option>
					<option value="25" <?php if($RISP_L2_Slide_Distance == 25) echo "selected=selected";?>>25</option>
				</select>
				<p class="description">
					<?php _e('Set a gap between all slides. Range 0 to 25', RISP_TEXT_DOMAIN); ?>&nbsp;
				</p>
			</td>
		</tr>
		
		<tr id="L2">
			<th scope="row"><label><?php _e('Sliding Arrow', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L2_Sliding_Arrow)) $RISP_L2_Sliding_Arrow = 1; ?>
				<input type="radio" name="wl-l2-sliding-arrow" id="wl-l2-sliding-arrow" value="1" <?php if($RISP_L2_Sliding_Arrow == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l2-sliding-arrow" id="wl-l2-sliding-arrow" value="0" <?php if($RISP_L2_Sliding_Arrow == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide arrows on mouse hover on slide', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p16" data-tooltip="#s16"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L2">
			<th scope="row"><label><?php _e('Show Navigation Bullets', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L2_Navigation_Button)) $RISP_L2_Navigation_Button = 1; ?>
				<input type="radio" name="wl-l2-navigation-button" id="wl-l2-navigation-button" value="1" <?php if($RISP_L2_Navigation_Button == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l2-navigation-button" id="wl-l2-navigation-button" value="0" <?php if($RISP_L2_Navigation_Button == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide slider navigation buttons under image slider', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p17" data-tooltip="#s17"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L2">
			<th scope="row"><label><?php _e('Navigation Bullets Style', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L2_Navigation_Button_Style)) $RISP_L2_Navigation_Button_Style = 1; ?>
				<input type="radio" name="wl-l2-navigation-style" id="wl-l2-navigation-style" value="1" <?php if($RISP_L2_Navigation_Button_Style == 1 ) { echo "checked"; } ?>> <?php _e('Circle', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l2-navigation-style" id="wl-l2-navigation-style" value="0" <?php if($RISP_L2_Navigation_Button_Style == 0 ) { echo "checked"; } ?>> <?php _e('Rectangle', RISP_TEXT_DOMAIN); ?>
				<p class="description">
					<?php _e('Select navigation style you want to apply on navigation bullets', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L2">
			<th scope="row"><label><?php _e('Slider Transition Speed', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L2_Slider_Transition_Speed)) $RISP_L2_Slider_Transition_Speed = "5000"; ?>
				<input type="text" id="wl-l2-slider-transition-speed" name="wl-l2-slider-transition-speed"  value="<?php echo $RISP_L2_Slider_Transition_Speed; ?>" >
				<p class="description">
					<?php _e('Enter 500 to 5000 between numeric value for increase / decrease slider transition speed. Default transition speed 5000', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L2">
			<th scope="row"><label><?php _e('Slider Transition Effect', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L2_Slider_Transition_Effect)) $RISP_L2_Slider_Transition_Effect = 1; ?>
				<input type="radio" id="wl-l2-slider-transition-effect" name="wl-l2-slider-transition-effect"  value="1" <?php if($RISP_L2_Slider_Transition_Effect == 1 ) { echo "checked=checked"; } ?>> Fade
				<input type="radio" id="wl-l2-slider-transition-effect" name="wl-l2-slider-transition-effect"  value="0" <?php if($RISP_L2_Slider_Transition_Effect == 0 ) { echo "checked=checked"; } ?>> Slide
				<p class="description">
					<?php _e('Set a slide transition effect fade or slide', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L2">
			<th scope="row"><label><?php _e('Slider Width', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L2_Slider_Width)) $RISP_L2_Slider_Width = "50%"; ?>
				<?php if(!isset($RISP_L2_Width)) $RISP_L2_Width = "percentage"; ?>
				<input type="radio" name="wl-l2-width" id="wl-l2-width" value="fullWidth" <?php if($RISP_L2_Width == "fullWidth" ) { echo "checked"; } ?>> <?php _e('Force Full Width', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l2-width" id="wl-l2-width" value="percentage" <?php if($RISP_L2_Width == "percentage" ) { echo "checked"; } ?>> <?php _e('Percentage Width', RISP_TEXT_DOMAIN); ?>
				<select id="wl-l2-slider-width" name="wl-l2-slider-width">
					<option value="10%" <?php selected($RISP_L2_Slider_Width, '10%' ); ?>>10%</option>
					<option value="20%" <?php selected($RISP_L2_Slider_Width, '20%' ); ?>>20%</option>
					<option value="30%" <?php selected($RISP_L2_Slider_Width, '30%' ); ?>>30%</option>
					<option value="40%" <?php selected($RISP_L2_Slider_Width, '40%' ); ?>>40%</option>
					<option value="50%" <?php selected($RISP_L2_Slider_Width, '50%' ); ?>>50%</option>
					<option value="60%" <?php selected($RISP_L2_Slider_Width, '60%' ); ?>>60%</option>
					<option value="70%" <?php selected($RISP_L2_Slider_Width, '70%' ); ?>>70%</option>
					<option value="80%" <?php selected($RISP_L2_Slider_Width, '80%' ); ?>>80%</option>
					<option value="90%" <?php selected($RISP_L2_Slider_Width, '90%' ); ?>>90%</option>
				</select>
				<p class="description">
					<?php _e('Force slider width to according to container width.', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p18" data-tooltip="#s18"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L2">
			<th scope="row"><label><?php _e('Slider Height', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L2_Slider_Height)) $RISP_L2_Slider_Height = 500; ?>
				<?php if(!isset($RISP_L2_Height)) $RISP_L2_Height = "custom"; ?>				
				<input type="radio" name="wl-l2-height" id="wl-l2-height" value="auto" <?php if($RISP_L2_Height == "auto" ) { echo "checked"; } ?>> <?php _e('Auto Height', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l2-height" id="wl-l2-height" value="custom" <?php if($RISP_L2_Height == "custom" ) { echo "checked"; } ?>> <?php _e('Custom', RISP_TEXT_DOMAIN); ?>
				<input type="text" name="wl-l2-slider-height" id="wl-l2-slider-height" value="<?php echo $RISP_L2_Slider_Height; ?>">
				<p class="description">
					<?php _e('Enter your desired height for slider. Default height is 500px', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p19" data-tooltip="#s19"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		<!----------------------------- layout 2 settings end -------------------------->

		
		<!----------------------------- layout 3 settings ------------------------------>
		<tr id="L3">
			<th scope="row" colspan="2"><h2><?php _e('Configure Slider Layout 3 Settings For Slider Shortcode', RISP_TEXT_DOMAIN); ?>: <?php echo "[URISP id=$PostId]"; ?></h2><hr></th>
		</tr>
		<tr id="L3">
			<th scope="row"><label><?php _e('Slider Text Alignment', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L3_Text_Alignment)) $RISP_L3_Text_Alignment = "centerCenter"; ?>
				<select name="wl-l3-text-alignment" id="wl-l3-text-alignment" class="standard-dropdown">
					<optgroup label="Select Test Alignment">
						<option value="topLeft" <?php if($RISP_L3_Text_Alignment == "topLeft" ) { echo "selected=selected"; } ?>><?php _e('Top Left', RISP_TEXT_DOMAIN); ?></option>
						<option value="topCenter" <?php if($RISP_L3_Text_Alignment == "topCenter" ) { echo "selected=selected"; } ?>><?php _e('Top Center', RISP_TEXT_DOMAIN); ?></option>
						<option value="topRight" <?php if($RISP_L3_Text_Alignment == "topRight" ) { echo "selected=selected"; } ?>><?php _e('Top Right', RISP_TEXT_DOMAIN); ?></option>
						<option value="centerLeft" <?php if($RISP_L3_Text_Alignment == "centerLeft" ) { echo "selected=selected"; } ?>><?php _e('Middle Left', RISP_TEXT_DOMAIN); ?></option>
						<option value="centerCenter" <?php if($RISP_L3_Text_Alignment == "centerCenter" ) { echo "selected=selected"; } ?>><?php _e('Middle', RISP_TEXT_DOMAIN); ?></option>
						<option value="centerRight" <?php if($RISP_L3_Text_Alignment == "centerRight" ) { echo "selected=selected"; } ?>><?php _e('Middle Right', RISP_TEXT_DOMAIN); ?></option>
						<option value="bottomLeft" <?php if($RISP_L3_Text_Alignment == "bottomLeft" ) { echo "selected=selected"; } ?>><?php _e('Bottom Left', RISP_TEXT_DOMAIN); ?></option>
						<option value="bottomCenter" <?php if($RISP_L3_Text_Alignment == "bottomCenter" ) { echo "selected=selected"; } ?>><?php _e('Bottom Center', RISP_TEXT_DOMAIN); ?></option>
						<option value="bottomRight" <?php if($RISP_L3_Text_Alignment == "bottomRight" ) { echo "selected=selected"; } ?>><?php _e('Bottom Right', RISP_TEXT_DOMAIN); ?></option>
					</optgroup>
				</select>
				<p class="description">
					<?php _e('Select a position to place slides text (title, description, read more link)', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p20" data-tooltip="#s20"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Title Transition Effect', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L3_Title_Transition)) $RISP_L3_Title_Transition = "up"; ?>
				<input type="radio" name="wl-l3-title-transition" id="wl-l3-title-transition" value="left" <?php if($RISP_L3_Title_Transition == "left" ) { echo "checked"; } ?>> <?php _e('From Left', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l3-title-transition" id="wl-l3-title-transition" value="right" <?php if($RISP_L3_Title_Transition == "right" ) { echo "checked"; } ?>> <?php _e('From Right', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l3-title-transition" id="wl-l3-title-transition" value="up" <?php if($RISP_L3_Title_Transition == "up" ) { echo "checked"; } ?>> <?php _e('From Up', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l3-title-transition" id="wl-l3-title-transition" value="down" <?php if($RISP_L3_Title_Transition == "down" ) { echo "checked"; } ?>> <?php _e('From Down', RISP_TEXT_DOMAIN); ?> 
				<p class="description">
					<?php _e('Select a transition effect apply on slide title', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p21" data-tooltip="#s21"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Description Transition Effect', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L3_Description_Transition)) $RISP_L3_Description_Transition = "down"; ?>
				<input type="radio" name="wl-l3-desc-transition" id="wl-l3-desc-transition" value="left" <?php if($RISP_L3_Description_Transition == "left" ) { echo "checked"; } ?>> <?php _e('From Left', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l3-desc-transition" id="wl-l3-desc-transition" value="right" <?php if($RISP_L3_Description_Transition == "right" ) { echo "checked"; } ?>> <?php _e('From Right', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l3-desc-transition" id="wl-l3-desc-transition" value="up" <?php if($RISP_L3_Description_Transition == "up" ) { echo "checked"; } ?>> <?php _e('From Up', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l3-desc-transition" id="wl-l3-desc-transition" value="down" <?php if($RISP_L3_Description_Transition == "down" ) { echo "checked"; } ?>> <?php _e('From Down', RISP_TEXT_DOMAIN); ?> 
				<p class="description">
					<?php _e('Select a transition effect apply on slide description', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p22" data-tooltip="#s22"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Auto Play Slide Show', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php
					if(!isset($RISP_L3_Auto_Slideshow ))  $RISP_L3_Auto_Slideshow = 1; 
				?>
				<input type="radio" name="wl-l3-auto-slide" id="wl-l3-auto-slide" value="1" <?php if($RISP_L3_Auto_Slideshow == 1 ) { echo "checked"; } ?>> <?php _e('Yes', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l3-auto-slide" id="wl-l3-auto-slide" value="2" <?php if($RISP_L3_Auto_Slideshow == 2 ) { echo "checked"; } ?>> <?php _e('Yes with Pause On Mouse Hover', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l3-auto-slide" id="wl-l3-auto-slide" value="3" <?php if($RISP_L3_Auto_Slideshow == 3 ) { echo "checked"; } ?>> <?php _e('No', RISP_TEXT_DOMAIN);?>
				<p class="description">
					<?php _e('Select Yes/No option to auto slide enable or disable into slider', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p23" data-tooltip="#s23"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slide Order', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_L3_Slide_Order ))  $RISP_L3_Slide_Order = "ASC";
				?>
				<input type="radio" name="wl-l3-slide-order" id="wl-l3-slide-order" value="ASC" <?php if($RISP_L3_Slide_Order == "ASC" ) { echo "checked"; } ?>> <?php _e('Ascending', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l3-slide-order" id="wl-l3-slide-order" value="DESC" <?php if($RISP_L3_Slide_Order == "DESC" ) { echo "checked"; } ?>> <?php _e('Descending', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l3-slide-order" id="wl-l3-slide-order" value="shuffle" <?php if($RISP_L3_Slide_Order == "shuffle" ) { echo "checked"; } ?>> <?php _e('Random', RISP_TEXT_DOMAIN);?>
				<p class="description">
					<?php _e('Select an option to decide slide show order', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slide Distance', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_L3_Slide_Distance ))  $RISP_L3_Slide_Distance = 5;
				?>
				<select name="wl-l3-slide-distance" id="wl-l3-slide-distance">
					<option value="0" <?php if($RISP_L3_Slide_Distance == 0) echo "selected=selected";?>>0</option>
					<option value="5" <?php if($RISP_L3_Slide_Distance == 5) echo "selected=selected";?>>5</option>
					<option value="10" <?php if($RISP_L3_Slide_Distance == 10) echo "selected=selected";?>>10</option>
					<option value="15" <?php if($RISP_L3_Slide_Distance == 15) echo "selected=selected";?>>15</option>
					<option value="20" <?php if($RISP_L3_Slide_Distance == 20) echo "selected=selected";?>>20</option>
					<option value="25" <?php if($RISP_L3_Slide_Distance == 25) echo "selected=selected";?>>25</option>
				</select>
				<p class="description">
					<?php _e('Set a gap between all slides. Range 0 to 25', RISP_TEXT_DOMAIN); ?>&nbsp;
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Selected Thumbnail Style', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_L3_Thumbnail_Style ))  $RISP_L3_Thumbnail_Style = "border" ;
				?>
				<input type="radio" name="wl-l3-thumbnail-style" id="wl-l3-thumbnail-style" value="border" <?php if($RISP_L3_Thumbnail_Style == "border" ) { echo "checked"; } ?>> <?php _e('Border', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-thumbnail-style" id="wl-l3-thumbnail-style" value="pointer" <?php if($RISP_L3_Thumbnail_Style == "pointer" ) { echo "checked"; } ?>> <?php _e('Pointer', RISP_TEXT_DOMAIN); ?>
				<p class="description">
					<?php _e('Select a thumbnail style to apply on selected thumbnail', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Selected Thumbnail Style Color', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L3_Thumbnail_Style_Color)) $RISP_L3_Thumbnail_Style_Color = "#31A3DD"; ?>
				<input id="wl-l3-thumbnail-style-color" name="wl-l3-thumbnail-style-color" type="text" value="<?php echo $RISP_L3_Thumbnail_Style_Color; ?>" class="my-color-field" data-default-color="#000000" />
				<p class="description">
					<?php _e('Select a color you to apply on selected', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Thumbnail Resize', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php
					if(!isset($RISP_L3_Thumbnail_Width ))  $RISP_L3_Thumbnail_Width = 100 ;
				?>
				<?php 
					if(!isset($RISP_L3_Thumbnail_Height ))  $RISP_L3_Thumbnail_Height = 120 ;
				?>
				<?php _e('Width', RISP_TEXT_DOMAIN); ?> <input type="text" name="wl-l3-thumbnail-width" id="wl-l3-thumbnail-width" value="<?php echo $RISP_L3_Thumbnail_Width; ?>"> &nbsp;&nbsp;
				<?php _e('Height', RISP_TEXT_DOMAIN); ?> <input type="text" name="wl-l3-thumbnail-height" id="wl-l3-thumbnail-height" value="<?php echo $RISP_L3_Thumbnail_Height; ?>">
				<p class="description">
					<?php _e('Set custom thumbnail height & width according to you', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Sliding Arrow', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php	
					if(!isset($RISP_L3_Sliding_Arrow ))  $RISP_L3_Sliding_Arrow = 1 ;
				?>
				<input type="radio" name="wl-l3-sliding-arrow" id="wl-l3-sliding-arrow" value="1" <?php if($RISP_L3_Sliding_Arrow == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l3-sliding-arrow" id="wl-l3-sliding-arrow" value="0" <?php if($RISP_L3_Sliding_Arrow == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide arrows on mouse hover on slide', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p24" data-tooltip="#s24"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Show Thumbnail Navigation', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_L3_Slider_Navigation ))  $RISP_L3_Slider_Navigation = 1 ;
				?>
				<input type="radio" name="wl-l3-navigation" id="wl-l3-navigation" value="1" <?php if($RISP_L3_Slider_Navigation == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l3-navigation" id="wl-l3-navigation" value="0" <?php if($RISP_L3_Slider_Navigation == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide thumbnail based navigation under slides', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p25" data-tooltip="#s25"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Thumbnail Position', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_L3_Navigation_Position ))  $RISP_L3_Navigation_Position = "bottom" ;
				?>
				<input type="radio" name="wl-l3-navigation-position" id="wl-l3-navigation-position" value="top" <?php if($RISP_L3_Navigation_Position == "top" ) { echo "checked"; } ?>> <?php _e('Top', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-navigation-position" id="wl-l3-navigation-position" value="bottom" <?php if($RISP_L3_Navigation_Position == "bottom" ) { echo "checked"; } ?>> <?php _e('Bottom', RISP_TEXT_DOMAIN); ?>
				<p class="description">
					<?php _e('Select a thumbnail position to show above or below the slider', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Show Navigation Bullets', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php
					if(!isset($RISP_L3_Navigation_Button ))  $RISP_L3_Navigation_Button = 1 ;
				?>
				<input type="radio" name="wl-l3-navigation-button" id="wl-l3-navigation-button" value="1" <?php if($RISP_L3_Navigation_Button == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l3-navigation-button" id="wl-l3-navigation-button" value="0" <?php if($RISP_L3_Navigation_Button == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide slider navigation buttons under image slider', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p26" data-tooltip="#s26"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Navigation Bullets Style', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L3_Navigation_Button_Style)) $RISP_L3_Navigation_Button_Style = 1; ?>
				<input type="radio" name="wl-l3-navigation-style" id="wl-l3-navigation-style" value="1" <?php if($RISP_L3_Navigation_Button_Style == 1 ) { echo "checked"; } ?>> <?php _e('Circle', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l3-navigation-style" id="wl-l3-navigation-style" value="0" <?php if($RISP_L3_Navigation_Button_Style == 0 ) { echo "checked"; } ?>> <?php _e('Rectangle', RISP_TEXT_DOMAIN); ?>
				<p class="description">
					<?php _e('Select navigation style you want to apply on navigation bullets', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slider Transition Speed', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_L3_Slider_Transition_Speed ))  $RISP_L3_Slider_Transition_Speed = 5000 ; ?>
				<input type="text" id="wl-l3-slider-transition-speed" name="wl-l3-slider-transition-speed"  value="<?php echo $RISP_L3_Slider_Transition_Speed; ?>" >
				<p class="description">
					<?php _e('Enter 500 to 5000 between numeric value for increase / decrease slider transition speed. Default transition speed 5000', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slider Transition Effect', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php
					if(!isset($RISP_L3_Slider_Transition_Effect ))  $RISP_L3_Slider_Transition_Effect = 1 ; ?>
				<input type="radio" id="wl-l3-slider-transition-effect" name="wl-l3-slider-transition-effect"  value="1" <?php if($RISP_L3_Slider_Transition_Effect == 1 ) { echo "checked=checked"; } ?>> Fade
				<input type="radio" id="wl-l3-slider-transition-effect" name="wl-l3-slider-transition-effect"  value="0" <?php if($RISP_L3_Slider_Transition_Effect == 0 ) { echo "checked=checked"; } ?>> Slide
				<p class="description">
					<?php _e('Set a slide transition effect fade or slide', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slider Width', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php
				
				if(!isset($RISP_L3_Slider_Width ))  $RISP_L3_Slider_Width = 1000 ;
				
				if(!isset($RISP_L3_Width ))  $RISP_L3_Width = "custom" ;
				?>
				<input type="radio" name="wl-l3-width" id="wl-l3-width" value="100%" <?php if($RISP_L3_Width == "100%" ) { echo "checked"; } ?>> <?php _e('100% Width', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-width" id="wl-l3-width" value="fullWidth" <?php if($RISP_L3_Width == "fullWidth" ) { echo "checked"; } ?>> <?php _e('Full Width', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-width" id="wl-l3-width" value="custom" <?php if($RISP_L3_Width == "custom" ) { echo "checked"; } ?>> <?php _e('Custom', RISP_TEXT_DOMAIN); ?>
				<input type="text" name="wl-l3-slider-width" id="wl-l3-slider-width" value="<?php echo $RISP_L3_Slider_Width; ?>">
				<p class="description">
					<?php _e('Enter your desired width for slider. Default width is 1000px', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p27" data-tooltip="#s27"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slider Height', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php
					if(!isset($RISP_L3_Slider_Height ))  $RISP_L3_Slider_Height = 500 ;				
					if(!isset($RISP_L3_Height ))  $RISP_L3_Height = "custom" ;
				?>				
				<input type="radio" name="wl-l3-height" id="wl-l3-height" value="auto" <?php if($RISP_L3_Height == "auto" ) { echo "checked"; } ?>> <?php _e('Auto Height', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-height" id="wl-l3-height" value="custom" <?php if($RISP_L3_Height == "custom" ) { echo "checked"; } ?>> <?php _e('Custom', RISP_TEXT_DOMAIN); ?>
				<input type="text" name="wl-l3-slider-height" id="wl-l3-slider-height" value="<?php echo $RISP_L3_Slider_Height; ?>">
				<p class="description">
					<?php _e('Enter your desired height for slider. Default height is 500px', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p28" data-tooltip="#s28"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		<!----------------------------- layout 3 settings end -------------------------->

		
		<!----------------------------- layout 4 settings ------------------------------>
		<tr id="L4">
			<th scope="row" colspan="2"><h2><?php _e('Configure Slider Layout 4 Settings For Slider Shortcode', RISP_TEXT_DOMAIN); ?>: <?php echo "[URISP id=$PostId]"; ?></h2><hr></th>
		</tr>
		
		<tr id="L4">
			<th scope="row"><label><?php _e('Auto Play Slide Show', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L4_Auto_Slideshow)) $RISP_L4_Auto_Slideshow = 1; ?>
				<input type="radio" name="wl-l4-auto-slide" id="wl-l4-auto-slide" value="1" <?php if($RISP_L4_Auto_Slideshow == 1 ) { echo "checked"; } ?>> <?php _e('Yes', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l4-auto-slide" id="wl-l4-auto-slide" value="2" <?php if($RISP_L4_Auto_Slideshow == 2 ) { echo "checked"; } ?>> <?php _e('Yes with Pause On Mouse Hover', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l4-auto-slide" id="wl-l4-auto-slide" value="3" <?php if($RISP_L4_Auto_Slideshow == 3 ) { echo "checked"; } ?>> <?php _e('No', RISP_TEXT_DOMAIN);?>
				<p class="description">
					<?php _e('Select Yes/No option to auto slide enable or disable into slider', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p29" data-tooltip="#s29"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L4">
			<th scope="row"><label><?php _e('Slide Order', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L4_Slide_Order)) $RISP_L4_Slide_Order = "ASC"; ?>
				<input type="radio" name="wl-l4-slide-order" id="wl-l4-slide-order" value="ASC" <?php if($RISP_L4_Slide_Order == "ASC" ) { echo "checked"; } ?>> <?php _e('Ascending', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l4-slide-order" id="wl-l4-slide-order" value="DESC" <?php if($RISP_L4_Slide_Order == "DESC" ) { echo "checked"; } ?>> <?php _e('Descending', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l4-slide-order" id="wl-l4-slide-order" value="shuffle" <?php if($RISP_L4_Slide_Order == "shuffle" ) { echo "checked"; } ?>> <?php _e('Random', RISP_TEXT_DOMAIN);?>
				<p class="description">
					<?php _e('Select an option to decide slide show order', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>

		<tr id="L4">
			<th scope="row"><label><?php _e('Slide Distance', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L4_Slide_Distance)) $RISP_L4_Slide_Distance = 5; ?>
				<select name="wl-l4-slide-distance" id="wl-l4-slide-distance">
					<option value="0" <?php if($RISP_L4_Slide_Distance == 0) echo "selected=selected";?>>0</option>
					<option value="5" <?php if($RISP_L4_Slide_Distance == 5) echo "selected=selected";?>>5</option>
					<option value="10" <?php if($RISP_L4_Slide_Distance == 10) echo "selected=selected";?>>10</option>
					<option value="15" <?php if($RISP_L4_Slide_Distance == 15) echo "selected=selected";?>>15</option>
					<option value="20" <?php if($RISP_L4_Slide_Distance == 20) echo "selected=selected";?>>20</option>
					<option value="25" <?php if($RISP_L4_Slide_Distance == 25) echo "selected=selected";?>>25</option>
				</select>
				<p class="description">
					<?php _e('Set a gap between all slides. Range 0 to 25', RISP_TEXT_DOMAIN); ?>&nbsp;
				</p>
			</td>
		</tr>
		
		<tr id="L4">
			<th scope="row"><label><?php _e('Sliding Arrow', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L4_Sliding_Arrow)) $RISP_L4_Sliding_Arrow = 1; ?>
				<input type="radio" name="wl-l4-sliding-arrow" id="wl-l4-sliding-arrow" value="1" <?php if($RISP_L4_Sliding_Arrow == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l4-sliding-arrow" id="wl-l4-sliding-arrow" value="0" <?php if($RISP_L4_Sliding_Arrow == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide arrows on mouse hover on slide', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p30" data-tooltip="#s30"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L4">
			<th scope="row"><label><?php _e('Show Navigation Bullets', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L4_Navigation_Button)) $RISP_L4_Navigation_Button = 1; ?>
				<input type="radio" name="wl-l4-navigation-button" id="wl-l4-navigation-button" value="1" <?php if($RISP_L4_Navigation_Button == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l4-navigation-button" id="wl-l4-navigation-button" value="0" <?php if($RISP_L4_Navigation_Button == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide slider navigation buttons under image slider', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p31" data-tooltip="#s31"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L4">
			<th scope="row"><label><?php _e('Navigation Bullets Style', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L4_Navigation_Button_Style)) $RISP_L4_Navigation_Button_Style = 1; ?>
				<input type="radio" name="wl-l4-navigation-style" id="wl-l4-navigation-style" value="1" <?php if($RISP_L4_Navigation_Button_Style == 1 ) { echo "checked"; } ?>> <?php _e('Circle', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l4-navigation-style" id="wl-l4-navigation-style" value="0" <?php if($RISP_L4_Navigation_Button_Style == 0 ) { echo "checked"; } ?>> <?php _e('Rectangle', RISP_TEXT_DOMAIN); ?>
				<p class="description">
					<?php _e('Select navigation style you want to apply on navigation bullets', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L4">
			<th scope="row"><label><?php _e('Slider Transition Speed', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L4_Slider_Transition_Speed)) $RISP_L4_Slider_Transition_Speed = "5000"; ?>
				<input type="text" id="wl-l4-slider-transition-speed" name="wl-l4-slider-transition-speed"  value="<?php echo $RISP_L4_Slider_Transition_Speed; ?>" >
				<p class="description">
					<?php _e('Enter 500 to 5000 between numeric value for increase / decrease slider transition speed. Default transition speed 5000', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L4">
			<th scope="row"><label><?php _e('Slider Transition Effect', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L4_Slider_Transition_Effect)) $RISP_L4_Slider_Transition_Effect = 1; ?>
				<input type="radio" id="wl-l4-slider-transition-effect" name="wl-l4-slider-transition-effect"  value="1" <?php if($RISP_L4_Slider_Transition_Effect == 1 ) { echo "checked=checked"; } ?>> Fade
				<input type="radio" id="wl-l4-slider-transition-effect" name="wl-l4-slider-transition-effect"  value="0" <?php if($RISP_L4_Slider_Transition_Effect == 0 ) { echo "checked=checked"; } ?>> Slide
				<p class="description">
				<?php _e('Set a slide transition effect fade or slide', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L4">
			<th scope="row"><label><?php _e('Slider Width', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L4_Slider_Width)) $RISP_L4_Slider_Width = 1000; ?>
				<?php if(!isset($RISP_L4_Width)) $RISP_L4_Width = "custom"; ?>
				<input type="radio" name="wl-l4-width" id="wl-l4-width" value="100%" <?php if($RISP_L4_Width == "100%" ) { echo "checked"; } ?>> <?php _e('100% Width', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l4-width" id="wl-l4-width" value="fullWidth" <?php if($RISP_L4_Width == "fullWidth" ) { echo "checked"; } ?>> <?php _e('Full Width', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l4-width" id="wl-l4-width" value="custom" <?php if($RISP_L4_Width == "custom" ) { echo "checked"; } ?>> <?php _e('Custom', RISP_TEXT_DOMAIN); ?>
				<input type="text" name="wl-l4-slider-width" id="wl-l4-slider-width" value="<?php echo $RISP_L4_Slider_Width; ?>">
				<p class="description">
					<?php _e('Enter your desired width for slider. Default width is 1000px', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p32" data-tooltip="#s32"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L4">
			<th scope="row"><label><?php _e('Slider Height', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L4_Slider_Height)) $RISP_L4_Slider_Height = 500; ?>
				<?php if(!isset($RISP_L4_Height)) $RISP_L4_Height = "custom"; ?>				
				<input type="radio" name="wl-l4-height" id="wl-l4-height" value="auto" <?php if($RISP_L4_Height == "auto" ) { echo "checked"; } ?>> <?php _e('Auto Height', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l4-height" id="wl-l4-height" value="custom" <?php if($RISP_L4_Height == "custom" ) { echo "checked"; } ?>> <?php _e('Custom', RISP_TEXT_DOMAIN); ?>
				<input type="text" name="wl-l4-slider-height" id="wl-l4-slider-height" value="<?php echo $RISP_L4_Slider_Height; ?>">
				<p class="description">
					<?php _e('Enter your desired height for slider. Default height is 500px', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="33" data-tooltip="#33"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		<!----------------------------- layout 4 settings end -------------------------->

		
		<!----------------------------- layout 5 settings start ------------------------------>
		<tr id="L5">
			<th scope="row" colspan="2"><h2><?php _e('Configure Slider Layout 5 Settings For Slider Shortcode', RISP_TEXT_DOMAIN); ?>: <?php echo "[URISP id=$PostId]"; ?></h2><hr></th>
		</tr>
		<tr id="L5">
			<th scope="row"><label><?php _e('Auto Play Slide Show', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Auto_Slideshow)) $RISP_L5_Auto_Slideshow = 1; ?>
				<input type="radio" name="wl-l5-auto-slide" id="wl-l5-auto-slide" value="1" <?php if($RISP_L5_Auto_Slideshow == 1 ) { echo "checked"; } ?>> <?php _e('Yes', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l5-auto-slide" id="wl-l5-auto-slide" value="2" <?php if($RISP_L5_Auto_Slideshow == 2 ) { echo "checked"; } ?>> <?php _e('Yes with Pause On Mouse Hover', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l5-auto-slide" id="wl-l5-auto-slide" value="3" <?php if($RISP_L5_Auto_Slideshow == 3 ) { echo "checked"; } ?>> <?php _e('No', RISP_TEXT_DOMAIN);?>
				<p class="description">
					<?php _e('Select Yes/No option to auto slide enable or disable into slider', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p34" data-tooltip="#s34"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L5">
			<th scope="row"><label><?php _e('Slide Order', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Slide_Order)) $RISP_L5_Slide_Order = "ASC"; ?>
				<input type="radio" name="wl-l5-slide-order" id="wl-l5-slide-order" value="ASC" <?php if($RISP_L5_Slide_Order == "ASC" ) { echo "checked"; } ?>> <?php _e('Ascending', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l5-slide-order" id="wl-l5-slide-order" value="DESC" <?php if($RISP_L5_Slide_Order == "DESC" ) { echo "checked"; } ?>> <?php _e('Descending', RISP_TEXT_DOMAIN);?>&nbsp;&nbsp;
				<input type="radio" name="wl-l5-slide-order" id="wl-l5-slide-order" value="shuffle" <?php if($RISP_L5_Slide_Order == "shuffle" ) { echo "checked"; } ?>> <?php _e('Random', RISP_TEXT_DOMAIN);?>
				<p class="description">
					<?php _e('Select an option to decide slide show order', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L5">
			<th scope="row"><label><?php _e('Slide Distance', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Slide_Distance)) $RISP_L5_Slide_Distance = 5; ?>
				<select name="wl-l5-slide-distance" id="wl-l5-slide-distance">
					<option value="0" <?php if($RISP_L5_Slide_Distance == 0) echo "selected=selected";?>>0</option>
					<option value="5" <?php if($RISP_L5_Slide_Distance == 5) echo "selected=selected";?>>5</option>
					<option value="10" <?php if($RISP_L5_Slide_Distance == 10) echo "selected=selected";?>>10</option>
					<option value="15" <?php if($RISP_L5_Slide_Distance == 15) echo "selected=selected";?>>15</option>
					<option value="20" <?php if($RISP_L5_Slide_Distance == 20) echo "selected=selected";?>>20</option>
					<option value="25" <?php if($RISP_L5_Slide_Distance == 25) echo "selected=selected";?>>25</option>
				</select>
				<p class="description">
					<?php _e('Set a gap between all slides. Range 0 to 25', RISP_TEXT_DOMAIN); ?>&nbsp;
				</p>
			</td>
		</tr>
		
		<tr id="L5">
			<th scope="row"><label><?php _e('Selected Thumbnail Pointer Color', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Thumbnail_Style_Color)) $RISP_L5_Thumbnail_Style_Color = "#31A3DD"; ?>
				<input id="wl-l5-thumbnail-style-color" name="wl-l5-thumbnail-style-color" type="text" value="<?php echo $RISP_L5_Thumbnail_Style_Color; ?>" class="my-color-field" data-default-color="#000000" />
				<p class="description">
					<?php _e('Select a color you want to apply on selected thumbnail pointer', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L5">
			<th scope="row"><label><?php _e('Sliding Arrow', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Sliding_Arrow)) $RISP_L5_Sliding_Arrow = 1; ?>
				<input type="radio" name="wl-l5-sliding-arrow" id="wl-l5-sliding-arrow" value="1" <?php if($RISP_L5_Sliding_Arrow == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l5-sliding-arrow" id="wl-l5-sliding-arrow" value="0" <?php if($RISP_L5_Sliding_Arrow == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide arrows on mouse hover on slide', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p35" data-tooltip="#s35"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L5">
			<th scope="row"><label><?php _e('Sliding Direction', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Sliding_Direction)) $RISP_L5_Sliding_Direction = "vertical"; ?>
				<input type="radio" name="wl-l5-sliding-direction" id="wl-l5-sliding-direction" value="vertical" <?php if($RISP_L5_Sliding_Direction == "vertical" ) { echo "checked"; } ?>> <?php _e('Vertical', RISP_TEXT_DOMAIN); ?> <i class="fa fa-arrows-v fa-2x"></i>&nbsp;
				<input type="radio" name="wl-l5-sliding-direction" id="wl-l5-sliding-direction" value="horizontal" <?php if($RISP_L5_Sliding_Direction == "horizontal" ) { echo "checked"; } ?>> <?php _e('Horizontal', RISP_TEXT_DOMAIN); ?> <i class="fa fa-arrows-h fa-2x"></i>
				<p class="description">
					<?php _e('Select Vertical/Horizontal option for sliding direction of slides', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p36" data-tooltip="#s36"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L5">
			<th scope="row"><label><?php _e('Show Navigation Bullets', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Navigation_Button)) $RISP_L5_Navigation_Button = 1; ?>
				<input type="radio" name="wl-l5-navigation-button" id="wl-l5-navigation-button" value="1" <?php if($RISP_L5_Navigation_Button == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l5-navigation-button" id="wl-l5-navigation-button" value="0" <?php if($RISP_L5_Navigation_Button == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide slider navigation buttons under slider', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p37" data-tooltip="#s37"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L5">
			<th scope="row"><label><?php _e('Navigation Bullets Style', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Navigation_Button_Style)) $RISP_L5_Navigation_Button_Style = 1; ?>
				<input type="radio" name="wl-l5-navigation-style" id="wl-l5-navigation-style" value="1" <?php if($RISP_L5_Navigation_Button_Style == 1 ) { echo "checked"; } ?>> <?php _e('Circle', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l5-navigation-style" id="wl-l5-navigation-style" value="0" <?php if($RISP_L5_Navigation_Button_Style == 0 ) { echo "checked"; } ?>> <?php _e('Rectangle', RISP_TEXT_DOMAIN); ?>
				<p class="description">
					<?php _e('Select navigation style you want to apply on navigation bullets', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L5">
			<th scope="row"><label><?php _e('Show Detailed Navigation', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Slider_Navigation)) $RISP_L5_Slider_Navigation = 1; ?>
				<input type="radio" name="wl-l5-navigation" id="wl-l5-navigation" value="1" <?php if($RISP_L5_Slider_Navigation == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l5-navigation" id="wl-l5-navigation" value="0" <?php if($RISP_L5_Slider_Navigation == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide detailed based navigation(Title + Description + Thumbnail)', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p38" data-tooltip="#s38"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="hide" style="display: none;">
			<th scope="row"><label><?php _e('Detailed Navigation Content', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Slider_Navigation_Content)) $RISP_L5_Slider_Navigation_Content = "both"; ?>
				<input type="radio" name="wl-l5-navigation-content" id="wl-l5-navigation-content" value="thumbnail" <?php if($RISP_L5_Slider_Navigation_Content == "thumbnail" ) { echo "checked"; } ?>> <?php _e('Only Thumbnail', RISP_TEXT_DOMAIN); ?> 
				<input type="radio" name="wl-l5-navigation-content" id="wl-l5-navigation-content" value="detail" <?php if($RISP_L5_Slider_Navigation_Content == "detail" ) { echo "checked"; } ?>> <?php _e('Only Title & Description', RISP_TEXT_DOMAIN); ?>
				<input type="radio" name="wl-l5-navigation-content" id="wl-l5-navigation-content" value="both" <?php if($RISP_L5_Slider_Navigation_Content == "both" ) { echo "checked"; } ?>> <?php _e('Both (Thumbnail + Title & Description)', RISP_TEXT_DOMAIN); ?>
				<p class="description">
					<?php _e('Select any option to show into detailed navigation', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p39" data-tooltip="#s39"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L5">
			<th scope="row"><label><?php _e('Detailed Navigation Position', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Slider_Navigation_Position)) $RISP_L5_Slider_Navigation_Position = "right"; ?>
				<input type="radio" name="wl-l5-navigation-position" id="wl-l5-navigation-position" value="left" <?php if($RISP_L5_Slider_Navigation_Position == "left" ) { echo "checked"; } ?>> <?php _e('Left Side', RISP_TEXT_DOMAIN); ?>
				<input type="radio" name="wl-l5-navigation-position" id="wl-l5-navigation-position" value="right" <?php if($RISP_L5_Slider_Navigation_Position == "right" ) { echo "checked"; } ?>> <?php _e('Right Side', RISP_TEXT_DOMAIN); ?>
				<p class="description">
					<?php _e('Select Left/Right option to show detailed based navigation on left OR right of the slider', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p40" data-tooltip="#s40"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L5">
			<th scope="row"><label><?php _e('Slider Transition Speed', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Slider_Transition_Speed)) $RISP_L5_Slider_Transition_Speed = "5000"; ?>
				<input type="text" id="wl-l5-slider-transition-speed" name="wl-l5-slider-transition-speed"  value="<?php echo $RISP_L5_Slider_Transition_Speed; ?>" >
				<p class="description">
					<?php _e('Enter 500 to 5000 between numeric value for increase / decrease slider transition speed. Default transition speed 5000', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L5">
			<th scope="row"><label><?php _e('Slider Transition Effect', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Slider_Transition_Effect)) $RISP_L5_Slider_Transition_Effect = 1; ?>
				<input type="radio" id="wl-l5-slider-transition-effect" name="wl-l5-slider-transition-effect"  value="1" <?php if($RISP_L5_Slider_Transition_Effect == 1 ) { echo "checked=checked"; } ?>> Fade
				<input type="radio" id="wl-l5-slider-transition-effect" name="wl-l5-slider-transition-effect"  value="0" <?php if($RISP_L5_Slider_Transition_Effect == 0 ) { echo "checked=checked"; } ?>> Slide
				<p class="description">
				<?php _e('Set a slide transition effect fade or slide', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L5">
			<th scope="row"><label><?php _e('Slider Width', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Slider_Width)) $RISP_L5_Slider_Width = 1000; ?>
				<?php if(!isset($RISP_L5_Width)) $RISP_L5_Width = "custom"; ?>
				<input type="radio" name="wl-l5-width" id="wl-l5-width" value="100%" <?php if($RISP_L5_Width == "100%" ) { echo "checked"; } ?>> <?php _e('100% Width', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<!--<input type="radio" name="wl-l5-width" id="wl-l5-width" value="fullWidth" <?php //if($RISP_L5_Width == "fullWidth" ) { echo "checked"; } ?>> <?php _e('Full Width', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;-->
				<input type="radio" name="wl-l5-width" id="wl-l5-width" value="custom" <?php if($RISP_L5_Width == "custom" ) { echo "checked"; } ?>> <?php _e('Custom', RISP_TEXT_DOMAIN); ?>
				<input type="text" name="wl-l5-slider-width" id="wl-l5-slider-width" value="<?php echo $RISP_L5_Slider_Width; ?>">
				<p class="description">
					<?php _e('Enter your desired width for slider. Default width is 1000px', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p41" data-tooltip="#s41"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L5">
			<th scope="row"><label><?php _e('Slider Height', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_L5_Slider_Height)) $RISP_L5_Slider_Height = 500; ?>
				<?php if(!isset($RISP_L5_Height)) $RISP_L5_Height = "custom"; ?>				
				<input type="radio" name="wl-l5-height" id="wl-l5-height" value="auto" <?php if($RISP_L5_Height == "auto" ) { echo "checked"; } ?>> <?php _e('Auto Height', RISP_TEXT_DOMAIN); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l5-height" id="wl-l5-height" value="custom" <?php if($RISP_L5_Height == "custom" ) { echo "checked"; } ?>> <?php _e('Custom', RISP_TEXT_DOMAIN); ?>
				<input type="text" name="wl-l5-slider-height" id="wl-l5-slider-height" value="<?php echo $RISP_L5_Slider_Height; ?>">
				<p class="description">
					<?php _e('Enter your desired height for slider. Default height is 500px', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="42" data-tooltip="#42"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		<!----------------------------- layout 5 settings end -------------------------->
		
		<!----------------------------- Slider Common Settings Start -------------------->
		<tr id="TC">
			<th scope="row"><label><?php _e('Title Color', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_Slide_In_Title_Color ))  $RISP_Slide_In_Title_Color = "#31A3DD" ; ?>
				<input id="wl-slide-in-title-color" name="wl-slide-in-title-color" type="text" value="<?php echo $RISP_Slide_In_Title_Color; ?>" class="my-color-field" data-default-color="#f80000" />
				<p class="description">
				<?php _e('Choose a color for slide title appears on slides', RISP_TEXT_DOMAIN); ?>.
				<a href="#" id="p43" data-tooltip="#s43"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="TBC">
			<th scope="row"><label><?php _e('Title Background Color', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_Slide_In_Title_BG_Color ))  $RISP_Slide_In_Title_BG_Color = "#ffffff" ;	?>
				<input id="wl-slide-in-title-bg-color" name="wl-slide-in-title-bg-color" type="text" value="<?php echo $RISP_Slide_In_Title_BG_Color; ?>" class="my-color-field" data-default-color="#f80000" />
				<p class="description">
				<?php _e('Choose a background color for slide title appears on slides', RISP_TEXT_DOMAIN); ?>.
				<a href="#" id="p44" data-tooltip="#s44"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="DC">
			<th scope="row"><label><?php _e('Description Color', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_Slide_In_Desc_Color ))  $RISP_Slide_In_Desc_Color = "#31A3DD" ;	?>
				<input id="wl-slide-in-desc-color" name="wl-slide-in-desc-color" type="text" value="<?php echo $RISP_Slide_In_Desc_Color; ?>" class="my-color-field" data-default-color="#f80000" />
				<p class="description">
				<?php _e('Choose a color for slide description appears on slides', RISP_TEXT_DOMAIN); ?>.
				<a href="#" id="p45" data-tooltip="#s45"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="DBC">
			<th scope="row"><label><?php _e('Description Background Color', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_Slide_In_Desc_BG_Color ))  $RISP_Slide_In_Desc_BG_Color = "#ffffff" ;?>
				<input id="wl-slide-in-desc-bg-color" name="wl-slide-in-desc-bg-color" type="text" value="<?php echo $RISP_Slide_In_Desc_BG_Color; ?>" class="my-color-field" data-default-color="#f80000" />
				<p class="description">
				<?php _e('Choose a background color for slide description appears on slides', RISP_TEXT_DOMAIN); ?>.
				<a href="#" id="p46" data-tooltip="#s46"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="ThBC">
			<th scope="row"><label><?php _e('Thumbnail Background Color', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_Thumbnail_BG_Color)) $RISP_Thumbnail_BG_Color = "#31a3dd"; ?>
				<input id="wl-thumb-bg-color" name="wl-thumb-bg-color" type="text" value="<?php echo $RISP_Thumbnail_BG_Color; ?>" class="my-color-field" data-default-color="#f80000" />
				<p class="description">
				<?php _e('Choose a thumbnail background color for slider thumbnails', RISP_TEXT_DOMAIN); ?>.
				<a href="#" id="p47" data-tooltip="#s47"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="ThTC">
			<th scope="row"><label><?php _e('Thumbnail Title Color', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_Thumbnail_Title_Color)) $RISP_Thumbnail_Title_Color = "#ffffff"; ?>
				<input id="wl-thumb-title-color" name="wl-thumb-title-color" type="text" value="<?php echo $RISP_Thumbnail_Title_Color; ?>" class="my-color-field" data-default-color="#f80000" />
				<p class="description">
				<?php _e('Choose a color for thumbnail title appears in slider details thumbnail', RISP_TEXT_DOMAIN); ?>.
				<a href="#" id="p49" data-tooltip="#s48"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="ThDC">
			<th scope="row"><label><?php _e('Thumbnail Description Color', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_Thumbnail_Desc_Color)) $RISP_Thumbnail_Desc_Color = "#ffffff"; ?>
				<input id="wl-thumb-desc-color" name="wl-thumb-desc-color" type="text" value="<?php echo $RISP_Thumbnail_Desc_Color; ?>" class="my-color-field" data-default-color="#f80000" />
				<p class="description">
				<?php _e('Choose a color for thumbnail description appears in slider details thumbnail', RISP_TEXT_DOMAIN); ?>.
				<a href="#" id="p50" data-tooltip="#s49"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="BCO">
			<th scope="row"><label><?php _e('Background Color Opacity', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_BG_Color_Opacity)) $RISP_BG_Color_Opacity = "0.5"; ?>
				<select name="wl-bg-color-opacity" id="wl-bg-color-opacity">
					<optgroup label="Select Background Color Opacity">
						<option value="1" <?php if($RISP_BG_Color_Opacity == '1') echo "selected"; ?>>1</option>
						<option value="0.9" <?php if($RISP_BG_Color_Opacity == '0.9') echo "selected"; ?>>0.9</option>
						<option value="0.8" <?php if($RISP_BG_Color_Opacity == '0.8') echo "selected"; ?>>0.8</option>
						<option value="0.7" <?php if($RISP_BG_Color_Opacity == '0.7') echo "selected"; ?>>0.7</option>
						<option value="0.6" <?php if($RISP_BG_Color_Opacity == '0.6') echo "selected"; ?>>0.6</option>
						<option value="0.5" <?php if($RISP_BG_Color_Opacity == '0.5') echo "selected"; ?>>0.5</option>
						<option value="0.4" <?php if($RISP_BG_Color_Opacity == '0.4') echo "selected"; ?>>0.4</option>
						<option value="0.3" <?php if($RISP_BG_Color_Opacity == '0.3') echo "selected"; ?>>0.3</option>
						<option value="0.2" <?php if($RISP_BG_Color_Opacity == '0.2') echo "selected"; ?>>0.2</option>
						<option value="0.1" <?php if($RISP_BG_Color_Opacity == '0.1') echo "selected"; ?>>0.1</option>
					</optgroup>
				</select>
				<p class="description">
				<?php _e('Choose a color opacity for title and description background color transparency', RISP_TEXT_DOMAIN); ?>.
				<a href="#" id="p51" data-tooltip="#s50"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="LO">
			<th scope="row"><label><?php _e('Read More Link On', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_Read_More_Link_ON)) $RISP_Read_More_Link_ON = "text"; ?>
				<input type="radio" id="wl-read-more-link-on" name="wl-read-more-link-on" <?php if($RISP_Read_More_Link_ON == "slide" ) { echo "checked"; } ?> value="slide" /> Slide
				<input type="radio" id="wl-read-more-link-on" name="wl-read-more-link-on" <?php if($RISP_Read_More_Link_ON == "text" ) { echo "checked"; } ?> value="text" /> <?php _e('Read More Text', RISP_TEXT_DOMAIN); ?>
				<p class="description">
					<?php _e('You can specify link appearance on Read More Text or on Slide', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="RMLT">
			<th scope="row"><label><?php _e('Read More Link Text', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_Read_More_Link_Text)) $RISP_Read_More_Link_Text = "Read More"; ?>
				<input id="wl-read-more-link-text" name="wl-read-more-link-text" type="text" value="<?php echo $RISP_Read_More_Link_Text; ?>" />
				<p class="description">
				<?php _e('You can specify your own custom text for read more link', RISP_TEXT_DOMAIN); ?>.
				<a href="#" id="p52" data-tooltip="#s51"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a><br>
				<b><?php _e('Note',RISP_TEXT_DOMAIN); ?></b> : <?php _e('Read More text will not be visible untill', RISP_TEXT_DOMAIN); ?> <b> <?php _e('Slide Description', RISP_TEXT_DOMAIN); ?> <?php _e('is empty',RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="RMLC">
			<th scope="row"><label><?php _e('Read More Link Color', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_Read_More_Link_Color)) $RISP_Read_More_Link_Color = "#7B85F4"; ?>
				<input id="wl-read-more-link-color" name="wl-read-more-link-color" type="text" value="<?php echo $RISP_Read_More_Link_Color; ?>" class="my-color-field" data-default-color="#f80000" />
				<p class="description">
				<?php _e('You can specify your own custom text for read more link', RISP_TEXT_DOMAIN); ?>.
				<a href="#" id="p53" data-tooltip="#s52"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="RMLO">
			<th scope="row"><label><?php _e('Open Read More Link', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_Read_More_Link_Open)) $RISP_Read_More_Link_Open = "_new"; ?>
				<input id="wl-read-more-link-open" name="wl-read-more-link-open" type="radio" value="_new" <?php if($RISP_Read_More_Link_Open == "_new") echo "checked=checked"; ?>/> <?php _e('In New Tab', RISP_TEXT_DOMAIN); ?>
				<input id="wl-read-more-link-open" name="wl-read-more-link-open" type="radio" value="_self" <?php if($RISP_Read_More_Link_Open == "_self") echo "checked=checked"; ?>/> <?php _e('In Same Tab', RISP_TEXT_DOMAIN); ?>
				<p class="description">
					<?php _e('You can specify your own link opening choice in new tab or same tab', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="NBuC">
			<th scope="row"><label><?php _e('Navigation Bullets Color', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_Naviagtion_Button_Color ))  $RISP_Naviagtion_Button_Color = "#31A3DD" ; ?>
				<input id="wl-navigation-button-color" name="wl-navigation-button-color" type="text" value="<?php echo $RISP_Naviagtion_Button_Color; ?>" class="my-color-field" data-default-color="#f80000" />
				<p class="description">
					<?php _e('You can choose a custom color for naviagation button under the slider', RISP_TEXT_DOMAIN); ?>.
					<a href="#" id="p55" data-tooltip="#s54"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="NBuS">
			<th scope="row"><label><?php _e('Navigation Bullets Size', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_Naviagtion_Button_Size)) $RISP_Naviagtion_Button_Size = 10; ?>
				<input id="wl-navigation-button-size" name="wl-navigation-button-size" type="radio" value="10" <?php if($RISP_Naviagtion_Button_Size == 10) echo "checked=checked"; ?>/> <?php _e('Small', RISP_TEXT_DOMAIN); ?>
				<input id="wl-navigation-button-size" name="wl-navigation-button-size" type="radio" value="15" <?php if($RISP_Naviagtion_Button_Size == 15) echo "checked=checked"; ?>/> <?php _e('Medium', RISP_TEXT_DOMAIN); ?>
				<input id="wl-navigation-button-size" name="wl-navigation-button-size" type="radio" value="20" <?php if($RISP_Naviagtion_Button_Size == 20) echo "checked=checked"; ?>/> <?php _e('Large', RISP_TEXT_DOMAIN); ?>
				<p class="description">
				<?php _e('You can specify your own link opening choice in new tab or same tab', RISP_TEXT_DOMAIN); ?>.
				<a href="#" id="p56" data-tooltip="#s55"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="NAC">
			<th scope="row"><label><?php _e('Navigation Arrow Color', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_Naviagtion_Arrow_Color ))  $RISP_Naviagtion_Arrow_Color = "#31a3dd" ;?>
				<input id="wl-navigation-arrow-color" name="wl-navigation-arrow-color" type="text" value="<?php echo $RISP_Naviagtion_Arrow_Color; ?>" class="my-color-field" data-default-color="#f80000" />
				<p class="description">
				<?php _e('You can choose a custom color for naviagation arrow appears on slide on mouse hover', RISP_TEXT_DOMAIN); ?>.
				<a href="#" id="p57" data-tooltip="#s56"><?php _e('Preview', RISP_TEXT_DOMAIN); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="LBP">
			<th scope="row"><label><?php _e('Slide Lightbox Preview', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php if(!isset($RISP_Lightbox_Preview)) $RISP_Lightbox_Preview = 1; ?>
				<input type="radio" id="wl-light-box-preview" name="wl-light-box-preview"  value="1" <?php if($RISP_Lightbox_Preview == 1 ) { echo "checked=checked"; } ?>> <i class="fa fa-check fa-2x"></i>
				<input type="radio" id="wl-light-box-preview" name="wl-light-box-preview"  value="0" <?php if($RISP_Lightbox_Preview == 0 ) { echo "checked=checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
				 <?php _e('Select a choice Yes/No to show slide preview into lightbox, this is work when you click on a slide', RISP_TEXT_DOMAIN); ?>.</br>
				 <b><?php _e('Note', RISP_TEXT_DOMAIN); ?></b> : <?php _e('If', RISP_TEXT_DOMAIN); ?> <b><?php _e('Read More Link On setting', RISP_TEXT_DOMAIN); ?></b> <?php _e('is selected to', RISP_TEXT_DOMAIN); ?> <b><?php _e('SLIDE', RISP_TEXT_DOMAIN); ?></b> ,<?php _e('then Light Box will not work', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="FSS">
			<th scope="row"><label><?php _e('Full Screen Slide Show', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_Fullscreeen ))  $RISP_Fullscreeen = 1 ; ?>
				<input type="radio" name="wl-fullscreen" id="wl-fullscreen" value="1" <?php if($RISP_Fullscreeen == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> &nbsp;&nbsp;
				<input type="radio" name="wl-fullscreen" id="wl-fullscreen" value="0" <?php if($RISP_Fullscreeen == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option for full screen slide show', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="FSTY">
			<th scope="row"><label><?php _e('Caption Font Style', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_Font_Style ))  $RISP_Font_Style = "Courgette" ; ?>
				<select name="wl-font-style" id="wl-font-style" class="standard-dropdown">
						<optgroup label="Default Fonts">
						<option value="Arial"           <?php if($RISP_Font_Style == 'Arial' ) { echo "selected"; } ?>>Arial</option>
						<option value="Arial Black"    <?php if($RISP_Font_Style == 'Arial Black' ) { echo "selected"; } ?>>Arial Black</option>
						<option value="Courier New"     <?php if($RISP_Font_Style == 'Courier New' ) { echo "selected"; } ?>>Courier New</option>
						<option value="Georgia"         <?php if($RISP_Font_Style == 'Georgia' ) { echo "selected"; } ?>>Georgia</option>
						<option value="Grande"          <?php if($RISP_Font_Style == 'Grande' ) { echo "selected"; } ?>>Grande</option>
						<option value="Helvetica" 	<?php if($RISP_Font_Style == 'Helvetica' ) { echo "selected"; } ?>>Helvetica Neue</option>
						<option value="Impact"         <?php if($RISP_Font_Style == 'Impact' ) { echo "selected"; } ?>>Impact</option>
						<option value="Lucida"         <?php if($RISP_Font_Style == 'Lucida' ) { echo "selected"; } ?>>Lucida</option>
						<option value="Lucida Grande"         <?php if($RISP_Font_Style == 'Lucida Grande' ) { echo "selected"; } ?>>Lucida Grande</option>
						<option value="_OpenSansBold"   <?php if($RISP_Font_Style == '_OpenSansBold' ) { echo "selected"; } ?>>OpenSansBold</option>
						<option value="Palatino Linotype"       <?php if($RISP_Font_Style == 'Palatino Linotype' ) { echo "selected"; } ?>>Palatino</option>
						<option value="Sans"           <?php if($RISP_Font_Style == 'Sans' ) { echo "selected"; } ?>>Sans</option>
						<option value="sans-serif"           <?php if($RISP_Font_Style == 'sans-serif' ) { echo "selected"; } ?>>Sans-Serif</option>
						<option value="Tahoma"         <?php if($RISP_Font_Style == 'Tahoma' ) { echo "selected"; } ?>>Tahoma</option>
						<option value="Times New Roman"          <?php if($RISP_Font_Style == 'Times New Roman' ) { echo "selected"; } ?>>Times New Roman</option>
						<option value="Trebuchet"      <?php if($RISP_Font_Style == 'Trebuchet' ) { echo "selected"; } ?>>Trebuchet</option>
						<option value="Verdana"        <?php if($RISP_Font_Style == 'Verdana' ) { echo "selected"; } ?>>Verdana</option>
					</optgroup>
					<optgroup label="Google Fonts">
						<option value="Abel"<?php selected($RISP_Font_Style, 'Abel' ); ?>>Abel</option>
						<option value="Abril Fatface" <?php selected($RISP_Font_Style, 'Abril Fatface' ); ?>>Abril Fatface</option>
						<option value="Aclonica" <?php selected($RISP_Font_Style, 'Aclonica' ); ?>>Aclonica</option>
						<option value="Acme" <?php selected($RISP_Font_Style, 'Acme' ); ?>>Acme</option>
						<option value="Actor" <?php selected($RISP_Font_Style, 'Actor' ); ?>>Actor</option>
						<option value="Adamina" <?php selected($RISP_Font_Style, 'Adamina' ); ?>>Adamina</option>
						<option value="Advent Pro" <?php selected($RISP_Font_Style, 'Advent Pro' ); ?>>Advent Pro</option>
						<option value="Aguafina Script" <?php selected($RISP_Font_Style, 'Aguafina Script' ); ?>>Aguafina Script</option>
						<option value="Aladin" <?php selected($RISP_Font_Style, 'Aladin' ); ?>>Aladin</option>
						<option value="Aldrich" <?php selected($RISP_Font_Style, 'Aldrich' ); ?>>Aldrich</option>
						<option value="Alegreya" <?php selected($RISP_Font_Style, 'Alegreya' ); ?>>Alegreya</option>
						<option value="Alegreya SC" <?php selected($RISP_Font_Style, 'Alegreya SC' ); ?>>Alegreya SC</option>
						<option value="Alex Brush" <?php selected($RISP_Font_Style, 'Alex Brush' ); ?>>Alex Brush</option>
						<option value="Alfa Slab One" <?php selected($RISP_Font_Style, 'Alfa Slab One' ); ?>>Alfa Slab One</option>
						<option value="Alice" <?php selected($RISP_Font_Style, 'Alice' ); ?>>Alice</option>
						<option value="Alike" <?php selected($RISP_Font_Style, 'Alike' ); ?>>Alike</option>
						<option value="Alike Angular" <?php selected($RISP_Font_Style, 'Alike Angular' ); ?>>Alike Angular</option>
						<option value="Allan" <?php selected($RISP_Font_Style, 'Allan' ); ?>>Allan</option>
						<option value="Allerta" <?php selected($RISP_Font_Style, 'Allerta' ); ?>>Allerta</option>
						<option value="Allerta Stencil"<?php selected($RISP_Font_Style, 'Allerta Stencil' ); ?>>Allerta Stencil</option>
						<option value="Allura" <?php selected($RISP_Font_Style, 'Allura' ); ?>>Allura</option>
						<option value="Almendra" <?php selected($RISP_Font_Style, 'Almendra' ); ?>>Almendra</option>
						<option value="Almendra SC"<?php selected($RISP_Font_Style, 'Almendra SC' ); ?>>Almendra SC</option>
						<option value="Amaranth" <?php selected($RISP_Font_Style, 'Amaranth' ); ?>>Amaranth</option> <option value="Amatic SC"<?php selected($RISP_Font_Style, 'Amatic SC' ); ?>>Amatic SC</option>
						<option value="Amethysta" <?php selected($RISP_Font_Style, 'Amethysta' ); ?>>Amethysta</option><option value="Andada"<?php selected($RISP_Font_Style, 'Andada' ); ?>>Andada</option>
						<option value="Andika" <?php selected($RISP_Font_Style, 'Andika' ); ?>>Andika</option>
						<option value="Angkor" <?php selected($RISP_Font_Style, 'Angkor' ); ?>>Angkor</option>
						<option value="Annie Use Your Telescope" <?php selected($RISP_Font_Style, 'Annie Use Your Telescope' ); ?>>Annie Use Your Telescope</option>
						<option value="Anonymous Pro" <?php selected($RISP_Font_Style, 'Anonymous Pro' ); ?>>Anonymous Pro</option>
						<option value="Antic" <?php selected($RISP_Font_Style, 'Antic' ); ?>>Antic</option>
						<option value="Antic Didone" <?php selected($RISP_Font_Style, 'Antic Didone' ); ?>>Antic Didone</option>
						<option value="Antic Slab" <?php selected($RISP_Font_Style, 'Antic Slab' ); ?>>Antic Slab</option>
						<option value="Anton" <?php selected($RISP_Font_Style, 'Anton' ); ?>>Anton</option>
						<option value="Arapey" <?php selected($RISP_Font_Style, 'Arapey' ); ?>>Arapey</option>
						<option value="Arbutus" <?php selected($RISP_Font_Style, 'Arbutus' ); ?>>Arbutus</option>
						<option value="Architects Daughter" <?php selected($RISP_Font_Style, 'Architects Daughter' ); ?>>Architects Daughter</option>
						<option value="Arimo" <?php selected($RISP_Font_Style, 'Arimo' ); ?>>Arimo</option>
						<option value="Arizonia" <?php selected($RISP_Font_Style, 'Arizonia' ); ?>>Arizonia</option>
						<option value="Armata" <?php selected($RISP_Font_Style, 'Armata' ); ?>>Armata</option>
						<option value="Artifika" <?php selected($RISP_Font_Style, 'Artifika' ); ?>>Artifika</option>
						<option value="Arvo" <?php selected($RISP_Font_Style, 'Arvo' ); ?>>Arvo</option>
						<option value="Asap" <?php selected($RISP_Font_Style, 'Asap' ); ?>>Asap</option>
						<option value="Asset" <?php selected($RISP_Font_Style, 'Asset' ); ?>>Asset</option>
						<option value="Astloch" <?php selected($RISP_Font_Style, 'Astloch' ); ?>>Astloch</option>
						<option value="Asul" <?php selected($RISP_Font_Style, 'Asul' ); ?>>Asul</option>
						<option value="Atomic Age" <?php selected($RISP_Font_Style, 'Atomic Age' ); ?>>Atomic Age</option>
						<option value="Aubrey" <?php selected($RISP_Font_Style, 'Aubrey' ); ?>>Aubrey</option>
						<option value="Audiowide" <?php selected($RISP_Font_Style, 'Audiowide' ); ?>>Audiowide</option>
						<option value="Average" <?php selected($RISP_Font_Style, 'Average' ); ?>>Average</option>
						<option value="Averia Gruesa Libre" <?php selected($RISP_Font_Style, 'Averia Gruesa Libre' ); ?>>Averia Gruesa Libre</option>
						<option value="Averia Libre" <?php selected($RISP_Font_Style, 'Averia Libre' ); ?>>Averia Libre</option>
						<option value="Averia Sans Libre" <?php selected($RISP_Font_Style, 'Averia Sans Libre' ); ?>>Averia Sans Libre</option>
						<option value="Averia Serif Libre" <?php selected($RISP_Font_Style, 'Averia Serif Libre' ); ?>>Averia Serif Libre</option>
						<option value="Bad Script" <?php selected($RISP_Font_Style, 'Bad Script' ); ?>>Bad Script</option>
						<option value="Balthazar" <?php selected($RISP_Font_Style, 'Balthazar' ); ?>>Balthazar</option>
						<option value="Bangers" <?php selected($RISP_Font_Style, 'Bangers' ); ?>>Bangers</option>
						<option value="Basic" <?php selected($RISP_Font_Style, 'Basic' ); ?>>Basic</option>
						<option value="Battambang" <?php selected($RISP_Font_Style, 'Battambang' ); ?>>Battambang</option>
						<option value="Baumans" <?php selected($RISP_Font_Style, 'Baumans' ); ?>>Baumans</option>
						<option value="Bayon" <?php selected($RISP_Font_Style, 'Bayon' ); ?>>Bayon</option>
						<option value="Belgrano"<?php selected($RISP_Font_Style, 'Belgrano' ); ?>>Belgrano</option>
						<option value="Belleza" <?php selected($RISP_Font_Style, 'Belleza' ); ?>>Belleza</option>
						<option value="Bentham" <?php selected($RISP_Font_Style, 'Bentham' ); ?>>Bentham</option>
						<option value="Berkshire Swash"<?php selected($RISP_Font_Style, 'Berkshire Swash' ); ?>>Berkshire Swash</option>
						<option value="Bevan"  <?php selected($RISP_Font_Style, 'Bevan' ); ?>>Bevan</option>
						<option value="Bigshot One"<?php selected($RISP_Font_Style, 'Bigshot One' ); ?>>Bigshot One</option>
						<option value="Bilbo" <?php selected($RISP_Font_Style, 'Bilbo' ); ?>>Bilbo</option>
						<option value="Bilbo Swash Caps" <?php selected($RISP_Font_Style, 'Bilbo Swash Caps' ); ?>>Bilbo Swash Caps</option>
						<option value="Bitter" <?php selected($RISP_Font_Style, 'Bitter' ); ?>>Bitter</option>
						<option value="Black Ops One" <?php selected($RISP_Font_Style, 'Black Ops One' ); ?>>Black Ops One</option>
						<option value="Bokor" <?php selected($RISP_Font_Style, 'Bokor' ); ?>>Bokor</option>
						<option value="Bonbon" <?php selected($RISP_Font_Style, 'Bonbon' ); ?>>Bonbon</option>
						<option value="Boogaloo" <?php selected($RISP_Font_Style, 'Boogaloo' ); ?>>Boogaloo</option>
						<option value="Bowlby One" <?php selected($RISP_Font_Style, 'Bowlby One' ); ?>>Bowlby One</option>
						<option value="Bowlby One SC" <?php selected($RISP_Font_Style, 'Bowlby One SC' ); ?>>Bowlby One SC</option>
						<option value="Brawler" <?php selected($RISP_Font_Style, 'Brawler' ); ?>>Brawler</option>
						<option value="Bree Serif" <?php selected($RISP_Font_Style, 'Bree Serif' ); ?>>Bree Serif</option>
						<option value="Bubblegum Sans"  <?php selected($RISP_Font_Style, 'Bubblegum Sans' ); ?>>Bubblegum Sans</option>
						<option value="Buda"  <?php selected($RISP_Font_Style, 'Buda' ); ?>>Buda</option>
						<option value="Buenard"  <?php selected($RISP_Font_Style, 'Buenard' ); ?>>Buenard</option>
						<option value="Butcherman"  <?php selected($RISP_Font_Style, 'Butcherman' ); ?>>Butcherman</option>
						<option value="Butterfly Kids" <?php selected($RISP_Font_Style, 'Butterfly Kids' ); ?>>Butterfly Kids</option>
						<option value="Cabin"  <?php selected($RISP_Font_Style, 'Cabin' ); ?>>Cabin</option>
						<option value="Cabin Condensed"  <?php selected($RISP_Font_Style, 'Cabin Condensed' ); ?>>Cabin Condensed</option>
						<option value="Cabin Sketch"  <?php selected($RISP_Font_Style, 'Cabin Sketch' ); ?>>Cabin Sketch</option>
						<option value="Caesar Dressing"  <?php selected($RISP_Font_Style, 'Caesar Dressing' ); ?>>Caesar Dressing</option>
						<option value="Cagliostro"  <?php selected($RISP_Font_Style, 'Cagliostro' ); ?>>Cagliostro</option>
						<option value="Calligraffitti"  <?php selected($RISP_Font_Style, 'Calligraffitti' ); ?>>Calligraffitti</option>
						<option value="Cambo"  <?php selected($RISP_Font_Style, 'Cambo' ); ?>>Cambo</option>
						<option value="Candal"  <?php selected($RISP_Font_Style, 'Candal' ); ?>>Candal</option>
						<option value="Cantarell"  <?php selected($RISP_Font_Style, 'Cantarell' ); ?>>Cantarell</option>
						<option value="Cantata One"  <?php selected($RISP_Font_Style, 'Cantata One' ); ?>>Cantata One</option>
						<option value="Cardo"  <?php selected($RISP_Font_Style, 'Cardo' ); ?>>Cardo</option>
						<option value="Carme"  <?php selected($RISP_Font_Style, 'Carme' ); ?>>Carme</option>
						<option value="Carter One"  <?php selected($RISP_Font_Style, 'Carter One' ); ?>>Carter One</option>
						<option value="Caudex"  <?php selected($RISP_Font_Style, 'Caudex' ); ?>>Caudex</option>
						<option value="Cedarville Cursive"  <?php selected($RISP_Font_Style, 'Cedarville Cursive' ); ?>>Cedarville Cursive</option>
						<option value="Ceviche One"  <?php selected($RISP_Font_Style, 'Ceviche One' ); ?>>Ceviche One</option>
						<option value="Changa One"  <?php selected($RISP_Font_Style, 'Changa One' ); ?>>Changa One</option>
						<option value="Chango"  <?php selected($RISP_Font_Style, 'Chango' ); ?>>Chango</option>
						<option value="Chau Philomene One"  <?php selected($RISP_Font_Style, 'Chau Philomene One' ); ?>>Chau Philomene One</option>
						<option value="Chelsea Market"  <?php selected($RISP_Font_Style, 'Chelsea Market' ); ?>>Chelsea Market</option>
						<option value="Chenla"  <?php selected($RISP_Font_Style, 'Chenla' ); ?>>Chenla</option>
						<option value="Cherry Cream Soda"  <?php selected($RISP_Font_Style, 'Cherry Cream Soda' ); ?>>Cherry Cream Soda</option>
						<option value="Chewy"  <?php selected($RISP_Font_Style, 'Chewy' ); ?>>Chewy</option>
						<option value="Chicle"  <?php selected($RISP_Font_Style, 'Chicle' ); ?>>Chicle</option>
						<option value="Chivo"  <?php selected($RISP_Font_Style, 'Chivo' ); ?>>Chivo</option>
						<option value="Coda"  <?php selected($RISP_Font_Style, 'Coda' ); ?>>Coda</option>
						<option value="Coda Caption"  <?php selected($RISP_Font_Style, 'Coda Caption' ); ?>>Coda Caption</option>
						<option value="Codystar"  <?php selected($RISP_Font_Style, 'Codystar' ); ?>>Codystar</option>
						<option value="Comfortaa"  <?php selected($RISP_Font_Style, 'Comfortaa' ); ?>>Comfortaa</option>
						<option value="Coming Soon"  <?php selected($RISP_Font_Style, 'Coming Soon' ); ?>>Coming Soon</option>
						<option value="Concert One"  <?php selected($RISP_Font_Style, 'Concert One' ); ?>>Concert One</option>
						<option value="Condiment"  <?php selected($RISP_Font_Style, 'Condiment' ); ?>>Condiment</option>
						<option value="Content"  <?php selected($RISP_Font_Style, 'Content' ); ?>>Content</option>
						<option value="Contrail One"  <?php selected($RISP_Font_Style, 'Contrail One' ); ?>>Contrail One</option>
						<option value="Convergence"  <?php selected($RISP_Font_Style, 'Convergence' ); ?>>Convergence</option>
						<option value="Cookie"  <?php selected($RISP_Font_Style, 'Cookie' ); ?>>Cookie</option>
						<option value="Copse"  <?php selected($RISP_Font_Style, 'Copse' ); ?>>Copse</option>
						<option value="Corben"  <?php selected($RISP_Font_Style, 'Corben' ); ?>>Corben</option>
						<option value="Courgette"  <?php selected($RISP_Font_Style, 'Courgette' ); ?>>Courgette</option>
						<option value="Cousine"  <?php selected($RISP_Font_Style, 'Cousine' ); ?>>Cousine</option>
						<option value="Coustard"  <?php selected($RISP_Font_Style, 'Coustard' ); ?>>Coustard</option>
						<option value="Covered By Your Grace"  <?php selected($RISP_Font_Style, 'Covered By Your Grace' ); ?>>Covered By Your Grace</option>
						<option value="Crafty Girls"  <?php selected($RISP_Font_Style, 'Crafty Girls' ); ?>>Crafty Girls</option>
						<option value="Creepster"  <?php selected($RISP_Font_Style, 'Creepster' ); ?>>Creepster</option>
						<option value="Crete Round"  <?php selected($RISP_Font_Style, 'Crete Round' ); ?>>Crete Round</option>
						<option value="Crimson Text"  <?php selected($RISP_Font_Style, 'Crimson Text' ); ?>>Crimson Text</option>
						<option value="Crushed"  <?php selected($RISP_Font_Style, 'Crushed' ); ?>>Crushed</option>
						<option value="Cuprum"  <?php selected($RISP_Font_Style, 'Cuprum' ); ?>>Cuprum</option>
						<option value="Cutive"  <?php selected($RISP_Font_Style, 'Cutive' ); ?>>Cutive</option>
						<option value="Damion"  <?php selected($RISP_Font_Style, 'Damion' ); ?>>Damion</option>
						<option value="Dancing Script"  <?php selected($RISP_Font_Style, 'Dancing Script' ); ?>>Dancing Script</option>
						<option value="Dangrek"  <?php selected($RISP_Font_Style, 'Dangrek' ); ?>>Dangrek</option>
						<option value="Dawning of a New Day"  <?php selected($RISP_Font_Style, 'Dawning of a New Day' ); ?>>Dawning of a New Day</option>
						<option value="Days One"  <?php selected($RISP_Font_Style, 'Days One' ); ?>>Days One</option>
						<option value="Delius"  <?php selected($RISP_Font_Style, 'Delius' ); ?>>Delius</option>
						<option value="Delius Swash Caps"  <?php selected($RISP_Font_Style, 'Delius Swash Caps' ); ?>>Delius Swash Caps</option>
						<option value="Delius Unicase"  <?php selected($RISP_Font_Style, 'Delius Unicase' ); ?>>Delius Unicase</option>
						<option value="Della Respira"  <?php selected($RISP_Font_Style, 'Della Respira' ); ?>>Della Respira</option>
						<option value="Devonshire"  <?php selected($RISP_Font_Style, 'Devonshire' ); ?>>Devonshire</option>
						<option value="Didact Gothic"  <?php selected($RISP_Font_Style, 'Didact Gothic' ); ?>>Didact Gothic</option>
						<option value="Diplomata"  <?php selected($RISP_Font_Style, 'Diplomata' ); ?>>Diplomata</option>
						<option value="Diplomata SC"  <?php selected($RISP_Font_Style, 'Diplomata SC' ); ?>>Diplomata SC</option>
						<option value="Doppio One"  <?php selected($RISP_Font_Style, 'Doppio One' ); ?>>Doppio One</option>
						<option value="Dorsa"  <?php selected($RISP_Font_Style, 'Dorsa' ); ?>>Dorsa</option>
						<option value="Dosis"  <?php selected($RISP_Font_Style, 'Dosis' ); ?>>Dosis</option>
						<option value="Dr Sugiyama"  <?php selected($RISP_Font_Style, 'Dr Sugiyama' ); ?>>Dr Sugiyama</option>
						<option value="Droid Sans"  <?php selected($RISP_Font_Style, 'Droid Sans' ); ?>>Droid Sans</option>
						<option value="Droid Sans Mono"  <?php selected($RISP_Font_Style, 'Droid Sans Mono' ); ?>>Droid Sans Mono</option>
						<option value="Droid Serif" <?php selected($RISP_Font_Style, 'Droid Serif' ); ?>>Droid Serif</option>
						<option value="Duru Sans" <?php selected($RISP_Font_Style, 'Duru Sans' ); ?>>Duru Sans</option>
						<option value="Dynalight" <?php selected($RISP_Font_Style, 'Dynalight' ); ?>>Dynalight</option>
						<option value="EB Garamond" <?php selected($RISP_Font_Style, 'EB Garamond' ); ?>>EB Garamond</option>
						<option value="Eater" <?php selected($RISP_Font_Style, 'Eater' ); ?>>Eater</option>
						<option value="Economica" <?php selected($RISP_Font_Style, 'Economica' ); ?>>Economica</option>
						<option value="Electrolize" <?php selected($RISP_Font_Style, 'Electrolize' ); ?>>Electrolize</option>
						<option value="Emblema One" <?php selected($RISP_Font_Style, 'Emblema One' ); ?>>Emblema One</option>
						<option value="Emilys Candy" <?php selected($RISP_Font_Style, 'Emilys Candy' ); ?>>Emilys Candy</option>
						<option value="Engagement" <?php selected($RISP_Font_Style, 'Engagement' ); ?>>Engagement</option>
						<option value="Enriqueta" <?php selected($RISP_Font_Style, 'Enriqueta' ); ?>>Enriqueta</option>
						<option value="Erica One" <?php selected($RISP_Font_Style, 'Erica One' ); ?>>Erica One</option>
						<option value="Esteban" <?php selected($RISP_Font_Style, 'Esteban' ); ?>>Esteban</option>
						<option value="Euphoria Script">Euphoria Script</option>
						<option value="Ewert" <?php selected($RISP_Font_Style, 'Ewert' ); ?>>Ewert</option>
						<option value="Exo" <?php selected($RISP_Font_Style, 'Exo' ); ?>>Exo</option>
						<option value="Expletus Sans" <?php selected($RISP_Font_Style, 'Expletus Sans' ); ?>>Expletus Sans</option>
						<option value="Fanwood Text" <?php selected($RISP_Font_Style, 'Fanwood Text' ); ?>>Fanwood Text</option>
						<option value="Fascinate" <?php selected($RISP_Font_Style, 'Fascinate' ); ?>>Fascinate</option>
						<option value="Fascinate Inline" <?php selected($RISP_Font_Style, 'Fascinate Inline' ); ?>>Fascinate Inline</option>
						<option value="Federant" <?php selected($RISP_Font_Style, 'Federant' ); ?>>Federant</option>
						<option value="Federo" <?php selected($RISP_Font_Style, 'Federo' ); ?>>Federo</option>
						<option value="Felipa" <?php selected($RISP_Font_Style, 'Felipa' ); ?>>Felipa</option>
						<option value="Fjord One" <?php selected($RISP_Font_Style, 'Fjord One' ); ?>>Fjord One</option>
						<option value="Flamenco" <?php selected($RISP_Font_Style, 'Flamenco' ); ?>>Flamenco</option>
						<option value="Flavors" <?php selected($RISP_Font_Style, 'Flavors' ); ?>>Flavors</option>
						<option value="Fondamento" <?php selected($RISP_Font_Style, 'Fondamento' ); ?>>Fondamento</option>
						<option value="Fontdiner Swanky" <?php selected($RISP_Font_Style, 'Fontdiner Swanky' ); ?>>Fontdiner Swanky</option>
						<option value="Forum" <?php selected($RISP_Font_Style, 'Forum' ); ?>>Forum</option>
						<option value="Francois One" <?php selected($RISP_Font_Style, 'Francois One' ); ?>>Francois One</option>
						<option value="Fredericka the Great" <?php selected($RISP_Font_Style, 'Fredericka the Great' ); ?>>Fredericka the Great</option>
						<option value="Fredoka One" <?php selected($RISP_Font_Style, 'Fredoka One' ); ?>>Fredoka One</option>
						<option value="Freehand" <?php selected($RISP_Font_Style, 'Freehand' ); ?>>Freehand</option>
						<option value="Fresca" <?php selected($RISP_Font_Style, 'Fresca' ); ?>>Fresca</option>
						<option value="Frijole" <?php selected($RISP_Font_Style, 'Frijole' ); ?>>Frijole</option>
						<option value="Fugaz One" <?php selected($RISP_Font_Style, 'Fugaz One' ); ?>>Fugaz One</option>
						<option value="GFS Didot" <?php selected($RISP_Font_Style, 'GFS Didot' ); ?>>GFS Didot</option>
						<option value="GFS Neohellenic" <?php selected($RISP_Font_Style, 'GFS Neohellenic' ); ?>>GFS Neohellenic</option>
						<option value="Galdeano" <?php selected($RISP_Font_Style, 'Galdeano' ); ?>>Galdeano</option>
						<option value="Gentium Basic" <?php selected($RISP_Font_Style, 'Gentium Basic' ); ?>>Gentium Basic</option>
						<option value="Gentium Book Basic" <?php selected($RISP_Font_Style, 'Gentium Book Basic' ); ?>>Gentium Book Basic</option>
						<option value="Geo" <?php selected($RISP_Font_Style, 'Geo' ); ?>>Geo</option>
						<option value="Geostar" <?php selected($RISP_Font_Style, 'Geostar' ); ?>>Geostar</option>
						<option value="Geostar Fill" <?php selected($RISP_Font_Style, 'Geostar Fill' ); ?>>Geostar Fill</option>
						<option value="Germania One" <?php selected($RISP_Font_Style, 'Germania One' ); ?>>Germania One</option>
						<option value="Give You Glory" <?php selected($RISP_Font_Style, 'Give You Glory' ); ?>>Give You Glory</option>
						<option value="Glass Antiqua" <?php selected($RISP_Font_Style, 'Glass Antiqua' ); ?>>Glass Antiqua</option>
						<option value="Glegoo" <?php selected($RISP_Font_Style, 'Glegoo' ); ?>>Glegoo</option>
						<option value="Gloria Hallelujah" <?php selected($RISP_Font_Style, 'Gloria Hallelujah' ); ?>>Gloria Hallelujah</option>
						<option value="Goblin One" <?php selected($RISP_Font_Style, 'Goblin One' ); ?>>Goblin One</option>
						<option value="Gochi Hand" <?php selected($RISP_Font_Style, 'Gochi Hand' ); ?>>Gochi Hand</option>
						<option value="Gorditas" <?php selected($RISP_Font_Style, 'Gorditas' ); ?>>Gorditas</option>
						<option value="Goudy Bookletter 1911" <?php selected($RISP_Font_Style, 'Goudy Bookletter 191' ); ?>>Goudy Bookletter 1911</option>
						<option value="Graduate" <?php selected($RISP_Font_Style, 'Graduate' ); ?>>Graduate</option>
						<option value="Gravitas One" <?php selected($RISP_Font_Style, 'Gravitas One' ); ?>>Gravitas One</option>
						<option value="Great Vibes" <?php selected($RISP_Font_Style, 'Great Vibes' ); ?>>Great Vibes</option>
						<option value="Gruppo" <?php selected($RISP_Font_Style, 'Gruppo' ); ?>>Gruppo</option>
						<option value="Gudea" <?php selected($RISP_Font_Style, 'Gudea' ); ?>>Gudea</option>
						<option value="Habibi" <?php selected($RISP_Font_Style, 'Habibi' ); ?>>Habibi</option>
						<option value="Hammersmith One" <?php selected($RISP_Font_Style, 'Hammersmith One' ); ?>>Hammersmith One</option>
						<option value="Handlee" <?php selected($RISP_Font_Style, 'Handlee' ); ?>>Handlee</option>
						<option value="Hanuman" <?php selected($RISP_Font_Style, 'Hanuman' ); ?>>Hanuman</option>
						<option value="Happy Monkey" <?php selected($RISP_Font_Style, 'Happy Monkey' ); ?>>Happy Monkey</option>
						<option value="Henny Penny" <?php selected($RISP_Font_Style, 'Henny Penny' ); ?>>Henny Penny</option>
						<option value="Herr Von Muellerhoff" <?php selected($RISP_Font_Style, 'Herr Von Muellerhoff' ); ?>>Herr Von Muellerhoff</option>
						<option value="Holtwood One SC" <?php selected($RISP_Font_Style, 'Holtwood One SC' ); ?>>Holtwood One SC</option>
						<option value="Homemade Apple" <?php selected($RISP_Font_Style, 'Homemade Apple' ); ?>>Homemade Apple</option>
						<option value="Homenaje" <?php selected($RISP_Font_Style, 'Homenaje' ); ?>>Homenaje</option>
						<option value="IM Fell DW Pica" <?php selected($RISP_Font_Style, 'IM Fell DW Pica' ); ?>>IM Fell DW Pica</option>
						<option value="IM Fell DW Pica SC" <?php selected($RISP_Font_Style, 'IM Fell DW Pica SC' ); ?>>IM Fell DW Pica SC</option>
						<option value="IM Fell Double Pica" <?php selected($RISP_Font_Style, 'IM Fell Double Pica' ); ?>>IM Fell Double Pica</option>
						<option value="IM Fell Double Pica SC" <?php selected($RISP_Font_Style, 'IM Fell Double Pica SC' ); ?>>IM Fell Double Pica SC</option>
						<option value="IM Fell English" <?php selected($RISP_Font_Style, 'IM Fell English' ); ?>>IM Fell English</option>
						<option value="IM Fell English SC" <?php selected($RISP_Font_Style, 'IM Fell English SC' ); ?>>IM Fell English SC</option>
						<option value="IM Fell French Canon" <?php selected($RISP_Font_Style, 'IM Fell French Canon' ); ?>>IM Fell French Canon</option>
						<option value="IM Fell French Canon SC" <?php selected($RISP_Font_Style, 'IM Fell French Canon SC' ); ?>>IM Fell French Canon SC</option>
						<option value="IM Fell Great Primer" <?php selected($RISP_Font_Style, 'IM Fell Great Primer' ); ?>>IM Fell Great Primer</option>
						<option value="IM Fell Great Primer SC" <?php selected($RISP_Font_Style, 'IM Fell Great Primer SC' ); ?>>IM Fell Great Primer SC</option>
						<option value="Iceberg" <?php selected($RISP_Font_Style, 'Iceberg' ); ?>>Iceberg</option>
						<option value="Iceland" <?php selected($RISP_Font_Style, 'Iceland' ); ?>>Iceland</option>
						<option value="Imprima" <?php selected($RISP_Font_Style, 'Imprima' ); ?>>Imprima</option>
						<option value="Inconsolata" <?php selected($RISP_Font_Style, 'Inconsolata' ); ?>>Inconsolata</option>
						<option value="Inder" <?php selected($RISP_Font_Style, 'Inder' ); ?>>Inder</option>
						<option value="Indie Flower" <?php selected($RISP_Font_Style, 'Indie Flower' ); ?>>Indie Flower</option>
						<option value="Inika" <?php selected($RISP_Font_Style, 'Inika' ); ?>>Inika</option>
						<option value="Irish Grover" <?php selected($RISP_Font_Style, 'Irish Grover' ); ?>>Irish Grover</option>
						<option value="Istok Web" <?php selected($RISP_Font_Style, 'Istok Web' ); ?>>Istok Web</option>
						<option value="Italiana" <?php selected($RISP_Font_Style, 'Italiana' ); ?>>Italiana</option>
						<option value="Italianno" <?php selected($RISP_Font_Style, 'Italianno' ); ?>>Italianno</option>
						<option value="Jim Nightshade" <?php selected($RISP_Font_Style, 'Jim Nightshade' ); ?>>Jim Nightshade</option>
						<option value="Jockey One" <?php selected($RISP_Font_Style, 'Jockey One' ); ?>>Jockey One</option>
						<option value="Jolly Lodger" <?php selected($RISP_Font_Style, 'Jolly Lodger' ); ?>>Jolly Lodger</option>
						<option value="Josefin Sans" <?php selected($RISP_Font_Style, 'Josefin Sans' ); ?>>Josefin Sans</option>
						<option value="Josefin Slab" <?php selected($RISP_Font_Style, 'Josefin Slab' ); ?>>Josefin Slab</option>
						<option value="Judson" <?php selected($RISP_Font_Style, 'Judson' ); ?>>Judson</option>
						<option value="Julee" <?php selected($RISP_Font_Style, 'Julee' ); ?>>Julee</option>
						<option value="Junge" <?php selected($RISP_Font_Style, 'Junge' ); ?>>Junge</option>
						<option value="Jura" <?php selected($RISP_Font_Style, 'Jura' ); ?>>Jura</option>
						<option value="Just Another Hand" <?php selected($RISP_Font_Style, 'Just Another Hand' ); ?>>Just Another Hand</option>
						<option value="Just Me Again Down Here" <?php selected($RISP_Font_Style, 'Just Me Again Down Here' ); ?>>Just Me Again Down Here</option>
						<option value="Kameron" <?php selected($RISP_Font_Style, 'Kameron' ); ?>>Kameron</option>
						<option value="Karla" <?php selected($RISP_Font_Style, 'Karla' ); ?>>Karla</option>
						<option value="Kaushan Script" <?php selected($RISP_Font_Style, 'Kaushan Script' ); ?>>Kaushan Script</option>
						<option value="Kelly Slab" <?php selected($RISP_Font_Style, 'Kelly Slab' ); ?>>Kelly Slab</option>
						<option value="Kenia" <?php selected($RISP_Font_Style, 'Kenia' ); ?>>Kenia</option>
						<option value="Khmer" <?php selected($RISP_Font_Style, 'Khmer' ); ?>>Khmer</option>
						<option value="Knewave" <?php selected($RISP_Font_Style, 'Knewave' ); ?>>Knewave</option>
						<option value="Kotta One" <?php selected($RISP_Font_Style, 'Kotta One' ); ?>>Kotta One</option>
						<option value="Koulen" <?php selected($RISP_Font_Style, 'Koulen' ); ?>>Koulen</option>
						<option value="Kranky" <?php selected($RISP_Font_Style, 'Kranky' ); ?>>Kranky</option>
						<option value="Kreon" <?php selected($RISP_Font_Style, 'Kreon' ); ?>>Kreon</option>
						<option value="Kristi" <?php selected($RISP_Font_Style, 'Kristi' ); ?>>Kristi</option>
						<option value="Krona One" <?php selected($RISP_Font_Style, 'Krona One' ); ?>>Krona One</option>
						<option value="La Belle Aurore" <?php selected($RISP_Font_Style, 'La Belle Aurore' ); ?>>La Belle Aurore</option>
						<option value="Lancelot" <?php selected($RISP_Font_Style, 'Lancelot' ); ?>>Lancelot</option>
						<option value="Lato" <?php selected($RISP_Font_Style, 'Lato' ); ?>>Lato</option>
						<option value="League Script" <?php selected($RISP_Font_Style, 'League Script' ); ?>>League Script</option>
						<option value="Leckerli One" <?php selected($RISP_Font_Style, 'Leckerli One' ); ?>>Leckerli One</option>
						<option value="Ledger" <?php selected($RISP_Font_Style, 'Ledger' ); ?>>Ledger</option>
						<option value="Lekton" <?php selected($RISP_Font_Style, 'Lekton' ); ?>>Lekton</option>
						<option value="Lemon" <?php selected($RISP_Font_Style, 'Lemon' ); ?>>Lemon</option>
						<option value="Lilita One" <?php selected($RISP_Font_Style, 'Lilita One' ); ?>>Lilita One</option>
						<option value="Limelight" <?php selected($RISP_Font_Style, 'Limelight' ); ?>>Limelight</option>
						<option value="Linden Hill" <?php selected($RISP_Font_Style, 'Linden Hill' ); ?>>Linden Hill</option>
						<option value="Lobster" <?php selected($RISP_Font_Style, 'Lobster' ); ?>>Lobster</option>
						<option value="Lobster Two" <?php selected($RISP_Font_Style, 'Lobster Two' ); ?>>Lobster Two</option>
						<option value="Londrina Outline" <?php selected($RISP_Font_Style, 'Londrina Outline' ); ?>>Londrina Outline</option>
						<option value="Londrina Shadow" <?php selected($RISP_Font_Style, 'Londrina Shadow' ); ?>>Londrina Shadow</option>
						<option value="Londrina Sketch" <?php selected($RISP_Font_Style, 'Londrina Sketch' ); ?>>Londrina Sketch</option>
						<option value="Londrina Solid" <?php selected($RISP_Font_Style, 'Londrina Solid' ); ?>>Londrina Solid</option>
						<option value="Lora" <?php selected($RISP_Font_Style, 'Lora' ); ?>>Lora</option>
						<option value="Love Ya Like A Sister" <?php selected($RISP_Font_Style, 'Love Ya Like A Sister' ); ?>>Love Ya Like A Sister</option>
						<option value="Loved by the King" <?php selected($RISP_Font_Style, 'Loved by the King' ); ?>>Loved by the King</option>
						<option value="Lovers Quarrel" <?php selected($RISP_Font_Style, 'Lovers Quarrel' ); ?>>Lovers Quarrel</option>
						<option value="Luckiest Guy" <?php selected($RISP_Font_Style, 'Luckiest Guy' ); ?>>Luckiest Guy</option>
						<option value="Lusitana" <?php selected($RISP_Font_Style, 'Lusitana' ); ?>>Lusitana</option>
						<option value="Lustria" <?php selected($RISP_Font_Style, 'Lustria' ); ?>>Lustria</option>
						<option value="Macondo" <?php selected($RISP_Font_Style, 'Macondo' ); ?>>Macondo</option>
						<option value="Macondo Swash Caps" <?php selected($RISP_Font_Style, 'Macondo Swash Caps' ); ?>>Macondo Swash Caps</option>
						<option value="Magra" <?php selected($RISP_Font_Style, 'Magra' ); ?>>Magra</option>
						<option value="Maiden Orange" <?php selected($RISP_Font_Style, 'Maiden Orange' ); ?>>Maiden Orange</option>
						<option value="Mako" <?php selected($RISP_Font_Style, 'Mako' ); ?>>Mako</option>
						<option value="Marck Script" <?php selected($RISP_Font_Style, 'Marck Script' ); ?>>Marck Script</option>
						<option value="Marko One" <?php selected($RISP_Font_Style, 'Marko One' ); ?>>Marko One</option>
						<option value="Marmelad" <?php selected($RISP_Font_Style, 'Marmelad' ); ?>>Marmelad</option>
						<option value="Marvel" <?php selected($RISP_Font_Style, 'Marvel' ); ?>>Marvel</option>
						<option value="Mate" <?php selected($RISP_Font_Style, 'Mate' ); ?>>Mate</option>
						<option value="Mate SC" <?php selected($RISP_Font_Style, 'Mate SC' ); ?>>Mate SC</option>
						<option value="Maven Pro" <?php selected($RISP_Font_Style, 'Maven Pro' ); ?>>Maven Pro</option>
						<option value="Meddon" <?php selected($RISP_Font_Style, 'Meddon' ); ?>>Meddon</option>
						<option value="MedievalSharp" <?php selected($RISP_Font_Style, 'MedievalSharp' ); ?>>MedievalSharp</option>
						<option value="Medula One" <?php selected($RISP_Font_Style, 'Medula One' ); ?>>Medula One</option>
						<option value="Megrim" <?php selected($RISP_Font_Style, 'Megrim' ); ?>>Megrim</option>
						<option value="Merienda One" <?php selected($RISP_Font_Style, 'Merienda One' ); ?>>Merienda One</option>
						<option value="Merriweather" <?php selected($RISP_Font_Style, 'Merriweather' ); ?>>Merriweather</option>
						<option value="Metal" <?php selected($RISP_Font_Style, 'Metal' ); ?>>Metal</option>
						<option value="Metamorphous"<?php selected($RISP_Font_Style, 'Metamorphous' ); ?>>Metamorphous</option>
						<option value="Metrophobic" <?php selected($RISP_Font_Style, 'Metrophobic' ); ?>>Metrophobic</option>
						<option value="Michroma" <?php selected($RISP_Font_Style, 'Michroma' ); ?>>Michroma</option>
						<option value="Miltonian" <?php selected($RISP_Font_Style, 'Miltonian' ); ?>>Miltonian</option>
						<option value="Miltonian Tattoo" <?php selected($RISP_Font_Style, 'Miltonian Tattoo' ); ?>>Miltonian Tattoo</option>
						<option value="Miniver" <?php selected($RISP_Font_Style, 'Miniver' ); ?>>Miniver</option>
						<option value="Miss Fajardose" <?php selected($RISP_Font_Style, 'Miss Fajardose' ); ?>>Miss Fajardose</option>
						<option value="Modern Antiqua" <?php selected($RISP_Font_Style, 'Modern Antiqua' ); ?>>Modern Antiqua</option>
						<option value="Molengo" <?php selected($RISP_Font_Style, 'Molengo' ); ?>>Molengo</option>
						<option value="Monofett" <?php selected($RISP_Font_Style, 'Monofett' ); ?>>Monofett</option>
						<option value="Monoton" <?php selected($RISP_Font_Style, 'Monoton' ); ?>>Monoton</option>
						<option value="Monsieur La Doulaise" <?php selected($RISP_Font_Style, 'Monsieur La Doulaise' ); ?>>Monsieur La Doulaise</option>
						<option value="Montaga" <?php selected($RISP_Font_Style, 'Montaga' ); ?>>Montaga</option>
						<option value="Montez" <?php selected($RISP_Font_Style, 'Montez' ); ?>>Montez</option>
						<option value="Montserrat" <?php selected($RISP_Font_Style, 'Montserrat' ); ?>>Montserrat</option>
						<option value="Moul" <?php selected($RISP_Font_Style, 'Moul' ); ?>>Moul</option>
						<option value="Moulpali" <?php selected($RISP_Font_Style, 'Moulpali' ); ?>>Moulpali</option>
						<option value="Mountains of Christmas" <?php selected($RISP_Font_Style, 'Mountains of Christmas' ); ?>>Mountains of Christmas</option>
						<option value="Mr Bedfort" <?php selected($RISP_Font_Style, 'Mr Bedfort' ); ?>>Mr Bedfort</option>
						<option value="Mr Dafoe" <?php selected($RISP_Font_Style, 'Mr Dafoe' ); ?>>Mr Dafoe</option>
						<option value="Mr De Haviland" <?php selected($RISP_Font_Style, 'Mr De Haviland' ); ?>>Mr De Haviland</option>
						<option value="Mrs Saint Delafield" <?php selected($RISP_Font_Style, 'Mrs Saint Delafield' ); ?>>Mrs Saint Delafield</option>
						<option value="Mrs Sheppards" <?php selected($RISP_Font_Style, 'Mrs Sheppards' ); ?>>Mrs Sheppards</option>
						<option value="Muli" <?php selected($RISP_Font_Style, 'Muli' ); ?>>Muli</option>
						<option value="Mystery Quest" <?php selected($RISP_Font_Style, 'Mystery Quest' ); ?>>Mystery Quest</option>
						<option value="Neucha" <?php selected($RISP_Font_Style, 'Neucha' ); ?>>Neucha</option>
						<option value="Neuton" <?php selected($RISP_Font_Style, 'Neuton' ); ?>>Neuton</option>
						<option value="News Cycle" <?php selected($RISP_Font_Style, 'News Cycle' ); ?>>News Cycle</option>
						<option value="Niconne" <?php selected($RISP_Font_Style, 'Niconne' ); ?>>Niconne</option>
						<option value="Nixie One" <?php selected($RISP_Font_Style, 'Nixie One' ); ?>>Nixie One</option>
						<option value="Nobile" <?php selected($RISP_Font_Style, 'Nobile' ); ?>>Nobile</option>
						<option value="Nokora" <?php selected($RISP_Font_Style, 'Nokora' ); ?>>Nokora</option>
						<option value="Norican" <?php selected($RISP_Font_Style, 'Norican' ); ?>>Norican</option>
						<option value="Nosifer" <?php selected($RISP_Font_Style, 'Nosifer' ); ?>>Nosifer</option>
						<option value="Nothing You Could Do" <?php selected($RISP_Font_Style, 'Nothing You Could Do' ); ?>>Nothing You Could Do</option>
						<option value="Noticia Text" <?php selected($RISP_Font_Style, 'Noticia Text' ); ?>>Noticia Text</option>
						<option value="Nova Cut" <?php selected($RISP_Font_Style, 'Nova Cut' ); ?>>Nova Cut</option>
						<option value="Nova Flat" <?php selected($RISP_Font_Style, 'Nova Flat' ); ?>>Nova Flat</option>
						<option value="Nova Mono" <?php selected($RISP_Font_Style, 'Nova Mono' ); ?>>Nova Mono</option>
						<option value="Nova Oval" <?php selected($RISP_Font_Style, 'Nova Oval' ); ?>>Nova Oval</option>
						<option value="Nova Round" <?php selected($RISP_Font_Style, 'Nova Round' ); ?>>Nova Round</option>
						<option value="Nova Script" <?php selected($RISP_Font_Style, 'Nova Script' ); ?>>Nova Script</option>
						<option value="Nova Slim" <?php selected($RISP_Font_Style, 'Nova Slim' ); ?>>Nova Slim</option>
						<option value="Nova Square" <?php selected($RISP_Font_Style, 'Nova Square' ); ?>>Nova Square</option>
						<option value="Numans" <?php selected($RISP_Font_Style, 'Numans' ); ?>>Numans</option>

						<option value="Nunito" <?php selected($RISP_Font_Style, 'Nunito' ); ?>>Nunito</option>
						<option value="Odor Mean Chey" <?php selected($RISP_Font_Style, 'Odor Mean Chey' ); ?>>Odor Mean Chey</option>
						<option value="Old Standard TT" <?php selected($RISP_Font_Style, 'Old Standard TT' ); ?>>Old Standard TT</option>
						<option value="Oldenburg" <?php selected($RISP_Font_Style, 'Oldenburg' ); ?>>Oldenburg</option>
						<option value="Oleo Script" <?php selected($RISP_Font_Style, 'Oleo Script' ); ?>>Oleo Script</option>
						<option value="Open Sans" <?php selected($RISP_Font_Style, 'Open Sans' ); ?>>Open Sans</option>
						<option value="Open Sans Condensed" <?php selected($RISP_Font_Style, 'Open Sans Condensed' ); ?>>Open Sans Condensed</option>
						<option value="Orbitron" <?php selected($RISP_Font_Style, 'Orbitron' ); ?>>Orbitron</option>
						<option value="Original Surfer" <?php selected($RISP_Font_Style, 'Original Surfer' ); ?>>Original Surfer</option>
						<option value="Oswald" <?php selected($RISP_Font_Style, 'Oswald' ); ?>>Oswald</option>
						<option value="Over the Rainbow" <?php selected($RISP_Font_Style, 'Over the Rainbow' ); ?>>Over the Rainbow</option>
						<option value="Overlock" <?php selected($RISP_Font_Style, 'Overlock' ); ?>>Overlock</option>
						<option value="Overlock SC" <?php selected($RISP_Font_Style, 'Overlock SC' ); ?>>Overlock SC</option>
						<option value="Ovo" <?php selected($RISP_Font_Style, 'Ovo' ); ?>>Ovo</option>
						<option value="Oxygen" <?php selected($RISP_Font_Style, 'Oxygen' ); ?>>Oxygen</option>
						<option value="PT Mono" <?php selected($RISP_Font_Style, 'PT Mono' ); ?>>PT Mono</option>
						<option value="PT Sans" <?php selected($RISP_Font_Style, 'PT Sans' ); ?>>PT Sans</option>
						<option value="PT Sans Caption" <?php selected($RISP_Font_Style, 'PT Sans Caption' ); ?>>PT Sans Caption</option>
						<option value="PT Sans Narrow" <?php selected($RISP_Font_Style, 'PT Sans Narrow' ); ?>>PT Sans Narrow</option>
						<option value="PT Serif" <?php selected($RISP_Font_Style, 'PT Serif' ); ?>>PT Serif</option>
						<option value="PT Serif Caption" <?php selected($RISP_Font_Style, 'PT Serif Caption' ); ?>>PT Serif Caption</option>
						<option value="Pacifico" <?php selected($RISP_Font_Style, 'Pacifico' ); ?>>Pacifico</option>
						<option value="Parisienne" <?php selected($RISP_Font_Style, 'Parisienne' ); ?>>Parisienne</option>
						<option value="Passero One" <?php selected($RISP_Font_Style, 'Passero One' ); ?>>Passero One</option>
						<option value="Passion One" <?php selected($RISP_Font_Style, 'Passion One' ); ?>>Passion One</option>
						<option value="Patrick Hand" <?php selected($RISP_Font_Style, 'Patrick Hand' ); ?>>Patrick Hand</option>
						<option value="Patua One" <?php selected($RISP_Font_Style, 'Patua One' ); ?>>Patua One</option>
						<option value="Paytone One" <?php selected($RISP_Font_Style, 'Paytone One' ); ?>>Paytone One</option>
						<option value="Permanent Marker" <?php selected($RISP_Font_Style, 'Permanent Marker' ); ?>>Permanent Marker</option>
						<option value="Petrona" <?php selected($RISP_Font_Style, 'Petrona' ); ?>>Petrona</option>
						<option value="Philosopher" <?php selected($RISP_Font_Style, 'Philosopher' ); ?>>Philosopher</option>
						<option value="Piedra" <?php selected($RISP_Font_Style, 'Piedra' ); ?>>Piedra</option>
						<option value="Pinyon Script" <?php selected($RISP_Font_Style, 'Pinyon Script' ); ?>>Pinyon Script</option>
						<option value="Plaster" <?php selected($RISP_Font_Style, 'Plaster' ); ?>>Plaster</option>
						<option value="Play" <?php selected($RISP_Font_Style, 'Play' ); ?>>Play</option>
						<option value="Playball" <?php selected($RISP_Font_Style, 'Playball' ); ?>>Playball</option>
						<option value="Playfair Display" <?php selected($RISP_Font_Style, 'Playfair Display' ); ?>>Playfair Display</option>
						<option value="Podkova" <?php selected($RISP_Font_Style, 'Podkova' ); ?>>Podkova</option>
						<option value="Poiret One" <?php selected($RISP_Font_Style, 'Poiret One' ); ?>>Poiret One</option>
						<option value="Poller One" <?php selected($RISP_Font_Style, 'Poller One' ); ?>>Poller One</option>
						<option value="Poly" <?php selected($RISP_Font_Style, 'Poly' ); ?>>Poly</option>
						<option value="Pompiere" <?php selected($RISP_Font_Style, 'Pompiere' ); ?>>Pompiere</option>
						<option value="Pontano Sans" <?php selected($RISP_Font_Style, 'Pontano Sans' ); ?>>Pontano Sans</option>
						<option value="Port Lligat Sans" <?php selected($RISP_Font_Style, 'Port Lligat Sans' ); ?>>Port Lligat Sans</option>
						<option value="Port Lligat Slab" <?php selected($RISP_Font_Style, 'Port Lligat Slab' ); ?>>Port Lligat Slab</option>
						<option value="Prata" <?php selected($RISP_Font_Style, 'Prata' ); ?>>Prata</option>
						<option value="Preahvihear" <?php selected($RISP_Font_Style, 'Preahvihear' ); ?>>Preahvihear</option>
						<option value="Press Start 2P" <?php selected($RISP_Font_Style, 'Press Start 2P' ); ?>>Press Start 2P</option>
						<option value="Princess Sofia" <?php selected($RISP_Font_Style, 'Princess Sofia' ); ?>>Princess Sofia</option>
						<option value="Prociono" <?php selected($RISP_Font_Style, 'Prociono' ); ?>>Prociono</option>
						<option value="Prosto One" <?php selected($RISP_Font_Style, 'Prosto One' ); ?>>Prosto One</option>
						<option value="Puritan" <?php selected($RISP_Font_Style, 'Puritan' ); ?>>Puritan</option>
						<option value="Quantico" <?php selected($RISP_Font_Style, 'Quantico' ); ?>>Quantico</option>
						<option value="Quattrocento" <?php selected($RISP_Font_Style, 'Quattrocento' ); ?>>Quattrocento</option>
						<option value="Quattrocento Sans" <?php selected($RISP_Font_Style, 'Quattrocento Sans' ); ?>>Quattrocento Sans</option>
						<option value="Questrial" <?php selected($RISP_Font_Style, 'Questrial' ); ?>>Questrial</option>
						<option value="Quicksand" <?php selected($RISP_Font_Style, 'Quicksand' ); ?>>Quicksand</option>
						<option value="Qwigley" <?php selected($RISP_Font_Style, 'Qwigley' ); ?>>Qwigley</option>
						<option value="Radley" <?php selected($RISP_Font_Style, 'Radley' ); ?>>Radley</option>
						<option value="Raleway" <?php selected($RISP_Font_Style, 'Raleway' ); ?>>Raleway</option>
						<option value="Rammetto One" <?php selected($RISP_Font_Style, 'Rammetto One' ); ?>>Rammetto One</option>
						<option value="Rancho" <?php selected($RISP_Font_Style, 'Rancho' ); ?>>Rancho</option>
						<option value="Rationale" <?php selected($RISP_Font_Style, 'Rationale' ); ?>>Rationale</option>
						<option value="Redressed" <?php selected($RISP_Font_Style, 'Redressed' ); ?>>Redressed</option>
						<option value="Reenie Beanie" <?php selected($RISP_Font_Style, 'Reenie Beanie' ); ?>>Reenie Beanie</option>
						<option value="Revalia" <?php selected($RISP_Font_Style, 'Revalia' ); ?>>Revalia</option>
						<option value="Ribeye" <?php selected($RISP_Font_Style, 'Ribeye' ); ?>>Ribeye</option>
						<option value="Ribeye Marrow" <?php selected($RISP_Font_Style, 'Ribeye Marrow' ); ?>>Ribeye Marrow</option>
						<option value="Righteous" <?php selected($RISP_Font_Style, 'Righteous' ); ?>>Righteous</option>
						<option value="Rochester" <?php selected($RISP_Font_Style, 'Rochester' ); ?>>Rochester</option>
						<option value="Rock Salt" <?php selected($RISP_Font_Style, 'Rock Salt' ); ?>>Rock Salt</option>
						<option value="Rokkitt" <?php selected($RISP_Font_Style, 'Rokkitt' ); ?>>Rokkitt</option>
						<option value="Ropa Sans" <?php selected($RISP_Font_Style, 'Ropa Sans' ); ?>>Ropa Sans</option>
						<option value="Rosario" <?php selected($RISP_Font_Style, 'Rosario' ); ?>>Rosario</option>
						<option value="Rosarivo" <?php selected($RISP_Font_Style, 'Rosarivo' ); ?>>Rosarivo</option>
						<option value="Rouge Script" <?php selected($RISP_Font_Style, 'Rouge Script' ); ?>>Rouge Script</option>
						<option value="Ruda" <?php selected($RISP_Font_Style, 'Ruda' ); ?>>Ruda</option>
						<option value="Ruge Boogie" <?php selected($RISP_Font_Style, 'Ruge Boogie' ); ?>>Ruge Boogie</option>
						<option value="Ruluko" <?php selected($RISP_Font_Style, 'Ruluko' ); ?>>Ruluko</option>
						<option value="Ruslan Display" <?php selected($RISP_Font_Style, 'Ruslan Display' ); ?>>Ruslan Display</option>
						<option value="Russo One" <?php selected($RISP_Font_Style, 'Russo One' ); ?>>Russo One</option>
						<option value="Ruthie" <?php selected($RISP_Font_Style, 'Ruthie' ); ?>>Ruthie</option>
						<option value="Sail" <?php selected($RISP_Font_Style, 'Sail' ); ?>>Sail</option>
						<option value="Salsa" <?php selected($RISP_Font_Style, 'Salsa' ); ?>>Salsa</option>
						<option value="Sancreek" <?php selected($RISP_Font_Style, 'Sancreek' ); ?>>Sancreek</option>
						<option value="Sansita One" <?php selected($RISP_Font_Style, 'Sansita One' ); ?>>Sansita One</option>
						<option value="Sarina" <?php selected($RISP_Font_Style, 'Sarina' ); ?>>Sarina</option>
						<option value="Satisfy" <?php selected($RISP_Font_Style, 'Satisfy' ); ?>>Satisfy</option>
						<option value="Schoolbell" <?php selected($RISP_Font_Style, 'Schoolbell' ); ?>>Schoolbell</option>
						<option value="Seaweed Script" <?php selected($RISP_Font_Style, 'Seaweed Script' ); ?>>Seaweed Script</option>
						<option value="Sevillana" <?php selected($RISP_Font_Style, 'Sevillana' ); ?>>Sevillana</option>
						<option value="Shadows Into Light" <?php selected($RISP_Font_Style, 'hadows Into Light' ); ?>>Shadows Into Light</option>
						<option value="Shadows Into Light Two" <?php selected($RISP_Font_Style, 'Shadows Into Light Two' ); ?>>Shadows Into Light Two</option>
						<option value="Shanti" <?php selected($RISP_Font_Style, 'Shanti' ); ?>>Shanti</option>
						<option value="Share">Share</option>
						<option value="Shojumaru" <?php selected($RISP_Font_Style, 'Shojumaru' ); ?>>Shojumaru</option>
						<option value="Short Stack" <?php selected($RISP_Font_Style, 'Short Stack' ); ?>>Short Stack</option>
						<option value="Siemreap"<?php selected($RISP_Font_Style, 'Siemreap' ); ?>>Siemreap</option>
						<option value="Sigmar One" <?php selected($RISP_Font_Style, 'Sigmar One' ); ?>>Sigmar One</option>
						<option value="Signika"<?php selected($RISP_Font_Style, 'Signika' ); ?>>Signika</option>
						<option value="Signika Negative" <?php selected($RISP_Font_Style, 'Signika Negative' ); ?>>Signika Negative</option>
						<option value="Simonetta" <?php selected($RISP_Font_Style, 'Simonetta' ); ?>>Simonetta</option>
						<option value="Sirin Stencil" <?php selected($RISP_Font_Style, 'Sirin Stencil' ); ?>>Sirin Stencil</option>
						<option value="Six Caps" <?php selected($RISP_Font_Style, 'Six Caps' ); ?>>Six Caps</option>
						<option value="Slackey" <?php selected($RISP_Font_Style, 'Slackey' ); ?>>Slackey</option>
						<option value="Smokum" <?php selected($RISP_Font_Style, 'Smokum' ); ?>>Smokum</option>
						<option value="Smythe" <?php selected($RISP_Font_Style, 'Smythe' ); ?>>Smythe</option>
						<option value="Sniglet" <?php selected($RISP_Font_Style, 'Sniglet' ); ?>>Sniglet</option>
						<option value="Snippet" <?php selected($RISP_Font_Style, 'Snippet' ); ?>>Snippet</option>
						<option value="Sofia" <?php selected($RISP_Font_Style, 'Sofia' ); ?>>Sofia</option>
						<option value="Sonsie One" <?php selected($RISP_Font_Style, 'Sonsie One' ); ?>>Sonsie One</option>
						<option value="Sorts Mill Goudy" <?php selected($RISP_Font_Style, 'Sorts Mill Goudy' ); ?>>Sorts Mill Goudy</option>
						<option value="Special Elite" <?php selected($RISP_Font_Style, 'Special Elite' ); ?>>Special Elite</option>
						<option value="Spicy Rice" <?php selected($RISP_Font_Style, 'Spicy Rice' ); ?>>Spicy Rice</option>
						<option value="Spinnaker" <?php selected($RISP_Font_Style, 'Spinnaker' ); ?>>Spinnaker</option>
						<option value="Spirax" <?php selected($RISP_Font_Style, 'Spirax' ); ?>>Spirax</option>
						<option value="Squada One" <?php selected($RISP_Font_Style, 'Squada One' ); ?>>Squada One</option>
						<option value="Stardos Stencil" <?php selected($RISP_Font_Style, 'Stardos Stencil' ); ?>>Stardos Stencil</option>
						<option value="Stint Ultra Condensed" <?php selected($RISP_Font_Style, 'Stint Ultra Condensed' ); ?>>Stint Ultra Condensed</option>
						<option value="Stint Ultra Expanded" <?php selected($RISP_Font_Style, 'Stint Ultra Expanded' ); ?>>Stint Ultra Expanded</option>
						<option value="Stoke" <?php selected($RISP_Font_Style, 'Stoke' ); ?>>Stoke</option>
						<option value="Sue Ellen Francisco" <?php selected($RISP_Font_Style, 'Sue Ellen Francisco' ); ?>>Sue Ellen Francisco</option>
						<option value="Sunshiney" <?php selected($RISP_Font_Style, 'Sunshiney' ); ?>>Sunshiney</option>
						<option value="Supermercado One" <?php selected($RISP_Font_Style, 'Supermercado One' ); ?>>Supermercado One</option>
						<option value="Suwannaphum" <?php selected($RISP_Font_Style, 'Suwannaphum' ); ?>>Suwannaphum</option>
						<option value="Swanky and Moo Moo" <?php selected($RISP_Font_Style, 'Swanky and Moo Moo' ); ?>>Swanky and Moo Moo</option>
						<option value="Syncopate" <?php selected($RISP_Font_Style, 'Syncopate' ); ?>>Syncopate</option>
						<option value="Tangerine" <?php selected($RISP_Font_Style, 'Tangerine' ); ?>>Tangerine</option>
						<option value="Taprom" <?php selected($RISP_Font_Style, 'Taprom' ); ?>>Taprom</option>
						<option value="Telex" <?php selected($RISP_Font_Style, 'Telex' ); ?>>Telex</option>
						<option value="Tenor Sans" <?php selected($RISP_Font_Style, 'Tenor Sans' ); ?>>Tenor Sans</option>
						<option value="The Girl Next Door" <?php selected($RISP_Font_Style, 'The Girl Next Door' ); ?>>The Girl Next Door</option>
						<option value="Tienne" <?php selected($RISP_Font_Style, 'Tienne' ); ?>>Tienne</option>
						<option value="Tinos" <?php selected($RISP_Font_Style, 'Tinos' ); ?>>Tinos</option>
						<option value="Titan One" <?php selected($RISP_Font_Style, 'Titan One' ); ?>>Titan One</option>
						<option value="Trade Winds" <?php selected($RISP_Font_Style, 'Trade Winds' ); ?> >Trade Winds</option>
						<option value="Trocchi" <?php selected($RISP_Font_Style, 'Trocchi' ); ?>>Trocchi</option>
						<option value="Trochut" <?php selected($RISP_Font_Style, 'Trochut' ); ?>>Trochut</option>
						<option value="Trykker" <?php selected($RISP_Font_Style, 'Trykker' ); ?>>Trykker</option>
						<option value="Tulpen One" <?php selected($RISP_Font_Style, 'Tulpen One' ); ?>>Tulpen One</option>
						<option value="Ubuntu" <?php selected($RISP_Font_Style, 'Ubuntu' ); ?>>Ubuntu</option>
						<option value="Ubuntu Condensed" <?php selected($RISP_Font_Style, 'Ubuntu Condensed' ); ?>>Ubuntu Condensed</option>
						<option value="Ubuntu Mono" <?php selected($RISP_Font_Style, 'Ubuntu Mono' ); ?>>Ubuntu Mono</option>
						<option value="Ultra" <?php selected($RISP_Font_Style, 'Ultra' ); ?>>Ultra</option>
						<option value="Uncial Antiqua" <?php selected($RISP_Font_Style, 'Uncial Antiqua' ); ?>>Uncial Antiqua</option>
						<option value="UnifrakturCook" <?php selected($RISP_Font_Style, 'UnifrakturCook' ); ?>>UnifrakturCook</option>
						<option value="UnifrakturMaguntia" <?php selected($RISP_Font_Style, 'UnifrakturMaguntia' ); ?>>UnifrakturMaguntia</option>
						<option value="Unkempt" <?php selected($RISP_Font_Style, 'Unkempt' ); ?>>Unkempt</option>
						<option value="Unlock" <?php selected($RISP_Font_Style, 'Unlock' ); ?>>Unlock</option>
						<option value="Unna" <?php selected($RISP_Font_Style, 'Unna' ); ?>>Unna</option>
						<option value="VT323" <?php selected($RISP_Font_Style, 'VT323' ); ?>>VT323</option>
						<option value="Varela" <?php selected($RISP_Font_Style, 'Varela' ); ?>>Varela</option>
						<option value="Varela Round" <?php selected($RISP_Font_Style, 'Varela Round' ); ?>>Varela Round</option>
						<option value="Vast Shadow" <?php selected($RISP_Font_Style, 'Vast Shadow' ); ?>>Vast Shadow</option>
						<option value="Vibur" <?php selected($RISP_Font_Style, 'Vibur' ); ?>>Vibur</option>
						<option value="Vidaloka" <?php selected($RISP_Font_Style, 'Vidaloka' ); ?>>Vidaloka</option>
						<option value="Viga" <?php selected($RISP_Font_Style, 'Viga' ); ?>>Viga</option>
						<option value="Voces" <?php selected($RISP_Font_Style, 'Voces' ); ?>>Voces</option>
						<option value="Volkhov" <?php selected($RISP_Font_Style, 'Volkhov' ); ?>>Volkhov</option>
						<option value="Vollkorn" <?php selected($RISP_Font_Style, 'Vollkorn' ); ?>>Vollkorn</option>
						<option value="Voltaire" <?php selected($RISP_Font_Style, 'Voltaire' ); ?>>Voltaire</option>
						<option value="Waiting for the Sunrise" <?php selected($RISP_Font_Style, 'Waiting for the Sunrise' ); ?>>Waiting for the Sunrise</option>
						<option value="Wallpoet" <?php selected($RISP_Font_Style, 'Wallpoet' ); ?>>Wallpoet</option>
						<option value="Walter Turncoat" <?php selected($RISP_Font_Style, 'Walter Turncoat' ); ?>>Walter Turncoat</option>
						<option value="Wellfleet" <?php selected($RISP_Font_Style, 'Wellfleet' ); ?>>Wellfleet</option>
						<option value="Wire One" <?php selected($RISP_Font_Style, 'Wire One' ); ?>>Wire One</option>
						<option value="Yanone Kaffeesatz" <?php selected($RISP_Font_Style, 'Yanone Kaffeesatz' ); ?>>Yanone Kaffeesatz</option>
						<option value="Yellowtail" <?php selected($RISP_Font_Style, 'Yellowtail' ); ?>>Yellowtail</option>
						<option value="Yeseva One" <?php selected($RISP_Font_Style, 'Yeseva One' ); ?>>Yeseva One</option>
						<option value="Yesteryear" <?php selected($RISP_Font_Style, 'Yesteryear' ); ?>>Yesteryear</option>
						<option value="Zeyada" <?php selected($RISP_Font_Style, 'Zeyada' ); ?>>Zeyada</option>
					</optgroup>
				</select>
				<p class="description">
					<?php _e('Choose a caption font style to apply on slide title & description', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="CCS">
			<th scope="row"><label><?php _e('Custom CSS Style', RISP_TEXT_DOMAIN); ?></label></th>
			<td>
				<?php 
					if(!isset($RISP_Custom_CSS ))  $RISP_Custom_CSS = "" ;?>
				<textarea id="wl-custom-css-style" name="wl-custom-css-style" rows="5" cols="75"><?php echo $RISP_Custom_CSS; ?></textarea>
				<p class="description">
					<?php _e('Enter any custom css into textarea field you want to apply on this slider', RISP_TEXT_DOMAIN); ?>.<br>
					<strong><?php _e('Note:', RISP_TEXT_DOMAIN); ?></strong> <?php _e('Please Do Not Use', RISP_TEXT_DOMAIN); ?> <strong>&lt;style&gt;...&lt;/style&gt;</strong> <?php _e('Tag With Custom CSS', RISP_TEXT_DOMAIN); ?>.
				</p>
			</td>
		</tr>
		<!----------------------------- Slider Common Settings End -------------------->
	</tbody>
</table>
<script>
/**
 * Layout Selection JS
 */
// on load saved layout
var Layout = jQuery('input[name=wl-slider-layout]:checked').val();
if(Layout == 1 ) {
	jQuery("tr#L1").show();
	jQuery("tr#L2").hide();
	jQuery("tr#L3").hide();
	jQuery("tr#L4").hide();
	jQuery("tr#L5").hide();
	
	//show or hide common settings
	jQuery("tr#TC").show();
	jQuery("tr#TBC").show();
	jQuery("tr#DC").show();
	jQuery("tr#DBC").show();
	jQuery("tr#ThBC").show();
	jQuery("tr#ThTC").show();
	jQuery("tr#ThDC").show();
	jQuery("tr#BCO").show();	
	jQuery("tr#RMLT").show();
	jQuery("tr#RMLC").show();
	jQuery("tr#RMLO").show();
	jQuery("tr#NBuC").show();
	jQuery("tr#NBuS").show();
	jQuery("tr#NAC").show();
	jQuery("tr#FSS").show();
	jQuery("tr#FSTY").show();
	jQuery("tr#CCS").show();	
}

if(Layout == 2 ) {
	jQuery("tr#L1").hide();
	jQuery("tr#L2").show();
	jQuery("tr#L3").hide();
	jQuery("tr#L4").hide();
	jQuery("tr#L5").hide();
	
	//show or hide common settings
	jQuery("tr#TC").show();
	jQuery("tr#TBC").hide();
	jQuery("tr#DC").show();
	jQuery("tr#DBC").hide();
	jQuery("tr#ThBC").hide();
	jQuery("tr#ThTC").hide();
	jQuery("tr#ThDC").hide();
	jQuery("tr#BCO").hide();	
	jQuery("tr#RMLT").show();
	jQuery("tr#RMLC").show();
	jQuery("tr#RMLO").show();
	jQuery("tr#NBuC").show();
	jQuery("tr#NBuS").show();
	jQuery("tr#NAC").show();
	jQuery("tr#FSS").show();
	jQuery("tr#FSTY").show();
	jQuery("tr#CCS").show();
}

if(Layout == 3 ) {
	jQuery("tr#L1").hide();
	jQuery("tr#L2").hide();
	jQuery("tr#L3").show();
	jQuery("tr#L4").hide();
	jQuery("tr#L5").hide();
	
	//show or hide common settings
	jQuery("tr#TC").show();
	jQuery("tr#TBC").show();
	jQuery("tr#DC").show();
	jQuery("tr#DBC").show();
	jQuery("tr#ThBC").show();
	jQuery("tr#ThTC").hide();
	jQuery("tr#ThDC").hide();
	jQuery("tr#BCO").show();	
	jQuery("tr#RMLT").show();
	jQuery("tr#RMLC").show();
	jQuery("tr#RMLO").show();
	jQuery("tr#NBuC").show();
	jQuery("tr#NBuS").show();
	jQuery("tr#NAC").show();
	jQuery("tr#FSS").show();
	jQuery("tr#FSTY").show();
	jQuery("tr#CCS").show();
}

if(Layout == 4 ) {
	jQuery("tr#L1").hide();
	jQuery("tr#L2").hide();
	jQuery("tr#L3").hide();
	jQuery("tr#L4").show();
	jQuery("tr#L5").hide();
	
	//show or hide common settings
	jQuery("tr#TC").show();
	jQuery("tr#TBC").show();
	jQuery("tr#DC").show();
	jQuery("tr#DBC").hide();
	jQuery("tr#ThBC").hide();
	jQuery("tr#ThTC").hide();
	jQuery("tr#ThDC").hide();
	jQuery("tr#BCO").show();	
	jQuery("tr#RMLT").show();
	jQuery("tr#RMLC").show();
	jQuery("tr#RMLO").show();
	jQuery("tr#NBuC").show();
	jQuery("tr#NBuS").show();
	jQuery("tr#NAC").show();
	jQuery("tr#FSS").show();
	jQuery("tr#FSTY").show();
	jQuery("tr#CCS").show();
}

if(Layout == 5 ) {
	jQuery("tr#L1").hide();
	jQuery("tr#L2").hide();
	jQuery("tr#L3").hide();
	jQuery("tr#L4").hide();
	jQuery("tr#L5").show();
	
	//show or hide common settings
	jQuery("tr#TC").show();
	jQuery("tr#TBC").show();
	jQuery("tr#DC").show();
	jQuery("tr#DBC").show();
	jQuery("tr#ThBC").show();
	jQuery("tr#ThTC").show();
	jQuery("tr#ThDC").show();
	jQuery("tr#BCO").show();	
	jQuery("tr#RMLT").show();
	jQuery("tr#RMLC").show();
	jQuery("tr#RMLO").show();
	jQuery("tr#NBuC").show();
	jQuery("tr#NBuS").show();
	jQuery("tr#NAC").show();
	jQuery("tr#FSS").show();
	jQuery("tr#FSTY").show();
	jQuery("tr#CCS").show();
}

// on change slider layout
function LayoutChecked() {
	var Layout = jQuery('input[name=wl-slider-layout]:checked').val();
	if(Layout == 1 ) {
		jQuery("tr#L1").show();
		jQuery("tr#L2").hide();
		jQuery("tr#L3").hide();
		jQuery("tr#L4").hide();
		jQuery("tr#L5").hide();
		
		//show or hide common settings
		jQuery("tr#TC").show();
		jQuery("tr#TBC").show();
		jQuery("tr#DC").show();
		jQuery("tr#DBC").show();
		jQuery("tr#ThBC").show();
		jQuery("tr#ThTC").show();
		jQuery("tr#ThDC").show();
		jQuery("tr#BCO").show();	
		jQuery("tr#RMLT").show();
		jQuery("tr#RMLC").show();
		jQuery("tr#RMLO").show();
		jQuery("tr#NBuC").show();
		jQuery("tr#NBuS").show();
		jQuery("tr#NAC").show();
		jQuery("tr#FSS").show();
		jQuery("tr#FSTY").show();
		jQuery("tr#CCS").show();
	}

	if(Layout == 2 ) {
		jQuery("tr#L1").hide();
		jQuery("tr#L2").show();
		jQuery("tr#L3").hide();
		jQuery("tr#L4").hide();
		jQuery("tr#L5").hide();
		
		//show or hide common settings
		jQuery("tr#TC").show();
		jQuery("tr#TBC").hide();
		jQuery("tr#DC").show();
		jQuery("tr#DBC").hide();
		jQuery("tr#ThBC").hide();
		jQuery("tr#ThTC").hide();
		jQuery("tr#ThDC").hide();
		jQuery("tr#BCO").hide();	
		jQuery("tr#RMLT").show();
		jQuery("tr#RMLC").show();
		jQuery("tr#RMLO").show();
		jQuery("tr#NBuC").show();
		jQuery("tr#NBuS").show();
		jQuery("tr#NAC").show();
		jQuery("tr#FSS").show();
		jQuery("tr#FSTY").show();
		jQuery("tr#CCS").show();
	}

	if(Layout == 3 ) {
		jQuery("tr#L1").hide();
		jQuery("tr#L2").hide();
		jQuery("tr#L3").show();
		jQuery("tr#L4").hide();
		jQuery("tr#L5").hide();
		
		//show or hide common settings
		jQuery("tr#TC").show();
		jQuery("tr#TBC").show();
		jQuery("tr#DC").show();
		jQuery("tr#DBC").show();
		jQuery("tr#ThBC").show();
		jQuery("tr#ThTC").hide();
		jQuery("tr#ThDC").hide();
		jQuery("tr#BCO").show();	
		jQuery("tr#RMLT").show();
		jQuery("tr#RMLC").show();
		jQuery("tr#RMLO").show();
		jQuery("tr#NBuC").show();
		jQuery("tr#NBuS").show();
		jQuery("tr#NAC").show();
		jQuery("tr#FSS").show();
		jQuery("tr#FSTY").show();
		jQuery("tr#CCS").show();
	}

	if(Layout == 4 ) {
		jQuery("tr#L1").hide();
		jQuery("tr#L2").hide();
		jQuery("tr#L3").hide();
		jQuery("tr#L4").show();
		jQuery("tr#L5").hide();
		
		//show or hide common settings
		jQuery("tr#TC").show();
		jQuery("tr#TBC").show();
		jQuery("tr#DC").show();
		jQuery("tr#DBC").hide();
		jQuery("tr#ThBC").hide();
		jQuery("tr#ThTC").hide();
		jQuery("tr#ThDC").hide();
		jQuery("tr#BCO").show();	
		jQuery("tr#RMLT").show();
		jQuery("tr#RMLC").show();
		jQuery("tr#RMLO").show();
		jQuery("tr#NBuC").show();
		jQuery("tr#NBuS").show();
		jQuery("tr#NAC").show();
		jQuery("tr#FSS").show();
		jQuery("tr#FSTY").show();
		jQuery("tr#CCS").show();
	}

	if(Layout == 5 ) {
		jQuery("tr#L1").hide();
		jQuery("tr#L2").hide();
		jQuery("tr#L3").hide();
		jQuery("tr#L4").hide();
		jQuery("tr#L5").show();
		
		//show or hide common settings
		jQuery("tr#TC").show();
		jQuery("tr#TBC").show();
		jQuery("tr#DC").show();
		jQuery("tr#DBC").show();
		jQuery("tr#ThBC").show();
		jQuery("tr#ThTC").show();
		jQuery("tr#ThDC").show();
		jQuery("tr#BCO").show();	
		jQuery("tr#RMLT").show();
		jQuery("tr#RMLC").show();
		jQuery("tr#RMLO").show();
		jQuery("tr#NBuC").show();
		jQuery("tr#NBuS").show();
		jQuery("tr#NAC").show();
		jQuery("tr#FSS").show();
		jQuery("tr#FSTY").show();
		jQuery("tr#CCS").show();
	}
}
</script>