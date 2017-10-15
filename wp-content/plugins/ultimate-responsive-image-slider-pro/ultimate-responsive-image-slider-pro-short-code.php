<?php
add_shortcode( 'URIS', 'ResponsiveRISPProShortCode' );
add_shortcode( 'URISP', 'ResponsiveRISPProShortCode' );
function ResponsiveRISPProShortCode( $Id ) {

    ob_start();

	/**
     * Load Saved Ultimate Responsive Image Slider Pro Settings
     */
    if(!isset($Id['id'])) {
		echo _e("Shortcode not added properly, ID is missing into shortcode.", RISP_TEXT_DOMAIN);
    } else {
		$RISP_Id = $Id['id'];
		$RISP_Gallery_Settings_Key = "WRIS_Gallery_Settings_".$RISP_Id;
		$RISP_Gallery_Settings = unserialize(get_post_meta( $RISP_Id, $RISP_Gallery_Settings_Key, true)); 
	
		/* Load common settings from free version */
		if(isset($RISP_Gallery_Settings['RISP_Slide_In_Title_Color']))
			$RISP_Slide_In_Title_Color= $RISP_Gallery_Settings['RISP_Slide_In_Title_Color'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Title_Color']))
			$RISP_Slide_In_Title_Color   			= $RISP_Gallery_Settings['WRIS_L3_Title_Color'];
		else
			$RISP_Slide_In_Title_Color   			= "#31A3DD" ;
		
		if(isset($RISP_Gallery_Settings['RISP_Slide_In_Title_BG_Color']))
			$RISP_Slide_In_Title_BG_Color= $RISP_Gallery_Settings['RISP_Slide_In_Title_BG_Color'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Title_BgColor']))
			$RISP_Slide_In_Title_BG_Color   		= $RISP_Gallery_Settings['WRIS_L3_Title_BgColor'];
		else
			$RISP_Slide_In_Title_BG_Color   	= "#ffffff" ;
			
		if(isset($RISP_Gallery_Settings['RISP_Slide_In_Desc_Color']))
			$RISP_Slide_In_Desc_Color= $RISP_Gallery_Settings['RISP_Slide_In_Desc_Color'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Desc_Color']))
			$RISP_Slide_In_Desc_Color   			= $RISP_Gallery_Settings['WRIS_L3_Desc_Color'];
		else
			$RISP_Slide_In_Desc_Color   			= "#31A3DD" ;
		
		if(isset($RISP_Gallery_Settings['RISP_Slide_In_Desc_BG_Color']))
			$RISP_Slide_In_Desc_BG_Color= $RISP_Gallery_Settings['RISP_Slide_In_Desc_BG_Color'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Desc_BgColor']))
			$RISP_Slide_In_Desc_BG_Color   			= $RISP_Gallery_Settings['WRIS_L3_Desc_BgColor'];
		else
			$RISP_Slide_In_Desc_BG_Color   			= "#ffffff" ;
		
		if(isset($RISP_Gallery_Settings['RISP_Thumbnail_Desc_Color']))
			$RISP_Thumbnail_Desc_Color  			= $RISP_Gallery_Settings['RISP_Thumbnail_Desc_Color'];
		else 
			$RISP_Thumbnail_Desc_Color  			= "#ffffff";
		
		if(isset($RISP_Gallery_Settings['RISP_Naviagtion_Button_Color']))
			$RISP_Naviagtion_Button_Color= $RISP_Gallery_Settings['RISP_Naviagtion_Button_Color'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Navigation_Bullets_Color']))
			$RISP_Naviagtion_Button_Color   		= $RISP_Gallery_Settings['WRIS_L3_Navigation_Bullets_Color'];
		else
			$RISP_Naviagtion_Button_Color   		= "#31A3DD" ;
		
		if(isset($RISP_Gallery_Settings['RISP_Naviagtion_Arrow_Color']))
			$RISP_Naviagtion_Arrow_Color= $RISP_Gallery_Settings['RISP_Naviagtion_Arrow_Color'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Navigation_Color']))
			$RISP_Naviagtion_Arrow_Color   			= $RISP_Gallery_Settings['WRIS_L3_Navigation_Color'];
		else
			$RISP_Naviagtion_Arrow_Color   			= "#31a3dd" ;
		
		if(isset($RISP_Gallery_Settings['RISP_Font_Style']))
			$RISP_Font_Style= $RISP_Gallery_Settings['RISP_Font_Style'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Font_Style']))
			$RISP_Font_Style   						= $RISP_Gallery_Settings['WRIS_L3_Font_Style'];
		else
			$RISP_Font_Style   						= "Courgette";
		
		if(isset($RISP_Gallery_Settings['RISP_Custom_CSS']))
			$RISP_Custom_CSS						= $RISP_Gallery_Settings['RISP_Custom_CSS'];
		else if(isset($RISP_Gallery_Settings['WRIS_L3_Custom_CSS']))
			$RISP_Custom_CSS   						= $RISP_Gallery_Settings['WRIS_L3_Custom_CSS'];
		else
			$RISP_Custom_CSS   						= "";
			
			
		/* Default Settings for Pro Version	*/	
		if(isset($RISP_Gallery_Settings['RISP_Slider_Layout'])){
			$RISP_Slider_Layout  					= $RISP_Gallery_Settings['RISP_Slider_Layout'];
		}else{
			$RISP_Slider_Layout  					= 3;							//set default layout for migration 
		}
		if(isset($RISP_Gallery_Settings['RISP_Thumbnail_BG_Color'])){
			$RISP_Thumbnail_BG_Color  				= $RISP_Gallery_Settings['RISP_Thumbnail_BG_Color'];
		}else{
			$RISP_Thumbnail_BG_Color  				= 	"#31a3dd";
		}
		if(isset($RISP_Gallery_Settings['RISP_Thumbnail_Title_Color'])){
			$RISP_Thumbnail_Title_Color  			= $RISP_Gallery_Settings['RISP_Thumbnail_Title_Color'];
		} else {
			$RISP_Thumbnail_Title_Color  			= 	"#ffffff";
		}
		if(isset($RISP_Gallery_Settings['RISP_BG_Color_Opacity'])){
			//$RISP_Thumbnail_Desc_Color  			= $RISP_Gallery_Settings['RISP_BG_Color_Opacity'];
			$RISP_BG_Color_Opacity  			= $RISP_Gallery_Settings['RISP_BG_Color_Opacity'];
		} else {
			$RISP_BG_Color_Opacity  				= 	"0.5";
		}	
		if(isset($RISP_Gallery_Settings['RISP_Read_More_Link_ON'])){
			$RISP_Read_More_Link_ON					= $RISP_Gallery_Settings['RISP_Read_More_Link_ON'];
		} else {
			$RISP_Read_More_Link_ON					= "text";
		}
		if(isset($RISP_Gallery_Settings['RISP_Read_More_Link_Text'])){
			$RISP_Read_More_Link_Text				= $RISP_Gallery_Settings['RISP_Read_More_Link_Text'];
		} else {
			$RISP_Read_More_Link_Text				= "Read More";
		}
		if(isset($RISP_Gallery_Settings['RISP_Read_More_Link_Color'])){
			$RISP_Read_More_Link_Color				= $RISP_Gallery_Settings['RISP_Read_More_Link_Color'];
		} else {
			$RISP_Read_More_Link_Color				= "#7B85F4";
		}
		if(isset($RISP_Gallery_Settings['RISP_Read_More_Link_Open'])){
			$RISP_Read_More_Link_Open				= $RISP_Gallery_Settings['RISP_Read_More_Link_Open'];
		} else {
			$RISP_Read_More_Link_Open				= "_new";
		}
		
		if(isset($RISP_Gallery_Settings['RISP_Naviagtion_Button_Size'])){
			$RISP_Naviagtion_Button_Size			= $RISP_Gallery_Settings['RISP_Naviagtion_Button_Size'];
		} else{
			$RISP_Naviagtion_Button_Size			=  10;
		}
		
		if(isset($RISP_Gallery_Settings['RISP_Lightbox_Preview'])){
			$RISP_Lightbox_Preview					= $RISP_Gallery_Settings['RISP_Lightbox_Preview'];
		} else{
			$RISP_Lightbox_Preview					=  1;
		}
		if(isset($RISP_Gallery_Settings['RISP_Fullscreeen'])){
			$RISP_Fullscreeen						= $RISP_Gallery_Settings['RISP_Fullscreeen'];
		} else {
			$RISP_Fullscreeen						= 1;		
		}
		
		//layout 1 settings
		if($RISP_Slider_Layout == 1) {
			$RISP_L1_Text_Alignment  				= $RISP_Gallery_Settings['RISP_L1_Text_Alignment'];
			$RISP_L1_Title_Transition   			= $RISP_Gallery_Settings['RISP_L1_Title_Transition'];
			$RISP_L1_Description_Transition 		= $RISP_Gallery_Settings['RISP_L1_Description_Transition'];
			$RISP_L1_Auto_Slideshow   				= $RISP_Gallery_Settings['RISP_L1_Auto_Slideshow'];
			if(isset($RISP_Gallery_Settings['RISP_L1_Slide_Order']))
				$RISP_L1_Slide_Order   				= $RISP_Gallery_Settings['RISP_L1_Slide_Order'];
			else
				$RISP_L1_Slide_Order   				= "ASC";
			if(isset($RISP_Gallery_Settings['RISP_L1_Slide_Distance']))
				$RISP_L1_Slide_Distance   			= $RISP_Gallery_Settings['RISP_L1_Slide_Distance'];
			else
				$RISP_L1_Slide_Distance   			= 5;
			if(isset($RISP_Gallery_Settings['RISP_L1_Thumbnail_Style_Color']))
				$RISP_L1_Thumbnail_Style_Color  	= $RISP_Gallery_Settings['RISP_L1_Thumbnail_Style_Color'];
			else
				$RISP_L1_Thumbnail_Style_Color  	= "#31A3DD";
				$RISP_L1_Sliding_Arrow   			= $RISP_Gallery_Settings['RISP_L1_Sliding_Arrow'];
				$RISP_L1_Slider_Navigation   		= $RISP_Gallery_Settings['RISP_L1_Slider_Navigation'];
				$RISP_L1_Navigation_Button   		= $RISP_Gallery_Settings['RISP_L1_Navigation_Button'];
			if(isset($RISP_Gallery_Settings['RISP_L1_Navigation_Button_Style']))
				$RISP_L1_Navigation_Button_Style	= $RISP_Gallery_Settings['RISP_L1_Navigation_Button_Style'];
			else
				$RISP_L1_Navigation_Button_Style	= 1;
				$RISP_L1_Slider_Transition_Speed	= $RISP_Gallery_Settings['RISP_L1_Slider_Transition_Speed'];
				$RISP_L1_Slider_Transition_Effect	= $RISP_Gallery_Settings['RISP_L1_Slider_Transition_Effect'];
				$RISP_L1_Slider_Width   			= $RISP_Gallery_Settings['RISP_L1_Slider_Width'];
			if(isset($RISP_Gallery_Settings['RISP_L1_Width']))
				$RISP_L1_Width   					= $RISP_Gallery_Settings['RISP_L1_Width'];
			else
				$RISP_L1_Width						= "custom";		
				$RISP_L1_Slider_Height   			= $RISP_Gallery_Settings['RISP_L1_Slider_Height'];
			if(isset($RISP_Gallery_Settings['RISP_L1_Height']))
				$RISP_L1_Height   					= $RISP_Gallery_Settings['RISP_L1_Height'];
			else
				$RISP_L1_Height						= "custom";
		}
		
		//layout 2 settings
		if($RISP_Slider_Layout == 2) {
			$RISP_L2_Auto_Slideshow   				= $RISP_Gallery_Settings['RISP_L2_Auto_Slideshow'];
			if(isset($RISP_Gallery_Settings['RISP_L2_Slide_Order']))
				$RISP_L2_Slide_Order   				= $RISP_Gallery_Settings['RISP_L2_Slide_Order'];
			else
				$RISP_L2_Slide_Order   				= "ASC";
			if(isset($RISP_Gallery_Settings['RISP_L2_Slide_Distance']))
				$RISP_L2_Slide_Distance   			= $RISP_Gallery_Settings['RISP_L2_Slide_Distance'];
			else
				$RISP_L2_Slide_Distance   			= 5;
			$RISP_L2_Sliding_Arrow   				= $RISP_Gallery_Settings['RISP_L2_Sliding_Arrow'];
			$RISP_L2_Navigation_Button   			= $RISP_Gallery_Settings['RISP_L2_Navigation_Button'];
			if(isset($RISP_Gallery_Settings['RISP_L2_Navigation_Button_Style']))
				$RISP_L2_Navigation_Button_Style	= $RISP_Gallery_Settings['RISP_L2_Navigation_Button_Style'];
			else
				$RISP_L2_Navigation_Button_Style	= 1;
			$RISP_L2_Slider_Transition_Speed		= $RISP_Gallery_Settings['RISP_L2_Slider_Transition_Speed'];
			$RISP_L2_Slider_Transition_Effect		= $RISP_Gallery_Settings['RISP_L2_Slider_Transition_Effect'];
			$RISP_L2_Slider_Width   				= $RISP_Gallery_Settings['RISP_L2_Slider_Width'];
			if(isset($RISP_Gallery_Settings['RISP_L2_Width']))
				$RISP_L2_Width   					= $RISP_Gallery_Settings['RISP_L2_Width'];
			else
				$RISP_L2_Width						= "custom";



			if(isset($RISP_Gallery_Settings['RISP_L2_Slider_Height']))
				$RISP_L2_Slider_Height   			= $RISP_Gallery_Settings['RISP_L2_Slider_Height'];
			else if(isset($RISP_Gallery_Settings['RISP_L2_Slider_Height']))
				$RISP_L2_Slider_Height   			= $RISP_Gallery_Settings['RISP_L2_Slider_Height'];
			else
				$RISP_L2_Slider_Height   			= 500;

			if(isset($RISP_Gallery_Settings['RISP_L2_Height'])){
				$RISP_L2_Height= $RISP_Gallery_Settings['RISP_L2_Height'];}
			else if(isset($RISP_Gallery_Settings['RISP_L2_Height']))
				$RISP_L2_Height   					= $RISP_Gallery_Settings['RISP_L2_Height'];
			else
				$RISP_L2_Height   					= "custom";
		}
		
		//layout 3 settings
		if($RISP_Slider_Layout == 3) {
			/*  	 Load  settings from free version	 */
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
				$RISP_L3_Slide_Order   					= $RISP_Gallery_Settings['RISP_L3_Slide_Order'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Transition']))
				$RISP_L3_Slide_Order   					= $RISP_Gallery_Settings['WRIS_L3_Slide_Order'];
			else
				$RISP_L3_Slide_Order   					= "ASC";
			if(isset($RISP_Gallery_Settings['RISP_L3_Slide_Distance']))
				$RISP_L3_Slide_Distance   				= $RISP_Gallery_Settings['RISP_L3_Slide_Distance'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Slide_Distance']))
				$RISP_L3_Slide_Distance   				= $RISP_Gallery_Settings['WRIS_L3_Slide_Distance'];
			else
				$RISP_L3_Slide_Distance   				= 5;
			if(isset($RISP_Gallery_Settings['RISP_L3_Navigation_Position']))
				$RISP_L3_Navigation_Position   			= $RISP_Gallery_Settings['RISP_L3_Navigation_Position'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Navigation_Position']))
				$RISP_L3_Navigation_Position   			= $RISP_Gallery_Settings['WRIS_L3_Navigation_Position'];
			else
				$RISP_L3_Navigation_Position   			= "bottom";
			if(isset($RISP_Gallery_Settings['RISP_L3_Thumbnail_Style']))
				$RISP_L3_Thumbnail_Style   				= $RISP_Gallery_Settings['RISP_L3_Thumbnail_Style'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Thumbnail_Style']))
				$RISP_L3_Thumbnail_Style   				= $RISP_Gallery_Settings['WRIS_L3_Thumbnail_Style'];
			else
				$RISP_L3_Thumbnail_Style   				= "border";
			if(isset($RISP_Gallery_Settings['RISP_L3_Thumbnail_Style_Color']))
				$RISP_L3_Thumbnail_Style_Color   		= $RISP_Gallery_Settings['RISP_L3_Thumbnail_Style_Color'];
			else
				$RISP_L3_Thumbnail_Style_Color   		= "#31A3DD";
			
			if(isset($RISP_Gallery_Settings['RISP_L3_Thumbnail_Width']))
				$RISP_L3_Thumbnail_Width   	= $RISP_Gallery_Settings['RISP_L3_Thumbnail_Width'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Thumbnail_Width']))
				$RISP_L3_Thumbnail_Width   				= $RISP_Gallery_Settings['WRIS_L3_Thumbnail_Width'];
			else
				$RISP_L3_Thumbnail_Width   				= 120;
			if(isset($RISP_Gallery_Settings['RISP_L3_Thumbnail_Height']))
				$RISP_L3_Thumbnail_Height   			= $RISP_Gallery_Settings['RISP_L3_Thumbnail_Height'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Thumbnail_Height']))
				$RISP_L3_Thumbnail_Height   			= $RISP_Gallery_Settings['WRIS_L3_Thumbnail_Height'];
			else
				$RISP_L3_Thumbnail_Height   			= 100;
			if(isset($RISP_Gallery_Settings['RISP_L3_Sliding_Arrow']))
				$RISP_L3_Sliding_Arrow   				= $RISP_Gallery_Settings['RISP_L3_Sliding_Arrow'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Sliding_Arrow']))
				$RISP_L3_Sliding_Arrow   				= $RISP_Gallery_Settings['WRIS_L3_Sliding_Arrow'];
			else
				$RISP_L3_Sliding_Arrow   				= 1;
			if(isset($RISP_Gallery_Settings['RISP_L3_Slider_Navigation']))
				$RISP_L3_Slider_Navigation   			= $RISP_Gallery_Settings['RISP_L3_Slider_Navigation'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Slider_Navigation']))
				$RISP_L3_Slider_Navigation   			= $RISP_Gallery_Settings['WRIS_L3_Slider_Navigation'];
			else
				$RISP_L3_Slider_Navigation   			= 1;
			if(isset($RISP_Gallery_Settings['RISP_L3_Navigation_Button']))
				$RISP_L3_Navigation_Button   			= $RISP_Gallery_Settings['RISP_L3_Navigation_Button'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Navigation_Button']))
				$RISP_L3_Navigation_Button   			= $RISP_Gallery_Settings['WRIS_L3_Navigation_Button'];
			else
				$RISP_L3_Navigation_Button   			= 1;
			if(isset($RISP_Gallery_Settings['RISP_L3_Navigation_Button_Style']))
				$RISP_L3_Navigation_Button_Style= $RISP_Gallery_Settings['RISP_L3_Navigation_Button_Style'];
			else
				$RISP_L3_Navigation_Button_Style		= 1;
			
			if(isset($RISP_Gallery_Settings['RISP_L3_Slider_Transition_Speed']))
				$RISP_L3_Slider_Transition_Speed= $RISP_Gallery_Settings['RISP_L3_Slider_Transition_Speed'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Transition']))
				$RISP_L3_Slider_Transition_Speed   		= $RISP_Gallery_Settings['WRIS_L3_Transition_Speed'];
			else
				$RISP_L3_Slider_Transition_Speed   		= 5000;
			
			if(isset($RISP_Gallery_Settings['RISP_L3_Slider_Transition_Effect']))
				$RISP_L3_Slider_Transition_Effect= $RISP_Gallery_Settings['RISP_L3_Slider_Transition_Effect'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Transition']))
				$RISP_L3_Slider_Transition_Effect   	= $RISP_Gallery_Settings['WRIS_L3_Transition'];
			else
				$RISP_L3_Slider_Transition_Effect   	= 1;
			if(isset($RISP_Gallery_Settings['RISP_L3_Slider_Width']))
				$RISP_L3_Slider_Width   				= $RISP_Gallery_Settings['RISP_L3_Slider_Width'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Slider_Width']))
				$RISP_L3_Slider_Width   				= $RISP_Gallery_Settings['WRIS_L3_Slider_Width'];
			else
				$RISP_L3_Slider_Width   				= 1000;
			
			if(isset($RISP_Gallery_Settings['RISP_L3_Slider_Height']))
				$RISP_L3_Slider_Height   				= $RISP_Gallery_Settings['RISP_L3_Slider_Height'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Slider_Height']))
				$RISP_L3_Slider_Height   				= $RISP_Gallery_Settings['WRIS_L3_Slider_Height'];
			else
				$RISP_L3_Slider_Height   				= 500;
			
			if(isset($RISP_Gallery_Settings['RISP_L3_Width']))
				$RISP_L3_Width= $RISP_Gallery_Settings['RISP_L3_Width'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Width']))
				$RISP_L3_Width   						= $RISP_Gallery_Settings['WRIS_L3_Width'];
			else
				$RISP_L3_Width   						= "custom";

			if(isset($RISP_Gallery_Settings['RISP_L3_Height']))
				$RISP_L3_Height= $RISP_Gallery_Settings['RISP_L3_Height'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Height']))
				$RISP_L3_Height   						= $RISP_Gallery_Settings['WRIS_L3_Height'];
			else
				$RISP_L3_Height   						= "custom";
			if(isset($RISP_Gallery_Settings['RISP_Slide_In_Desc_Color']))
				$RISP_Slide_In_Desc_Color= $RISP_Gallery_Settings['RISP_Slide_In_Desc_Color'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Desc_Color']))
				$RISP_Slide_In_Desc_Color   			= $RISP_Gallery_Settings['WRIS_L3_Desc_Color'];
			else
				$RISP_Slide_In_Desc_Color   			= "#31A3DD" ;
			if(isset($RISP_Gallery_Settings['RISP_Slide_In_Desc_BG_Color']))
				$RISP_Slide_In_Desc_BG_Color= $RISP_Gallery_Settings['RISP_Slide_In_Desc_BG_Color'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Desc_BgColor']))
				$RISP_Slide_In_Desc_BG_Color   			= $RISP_Gallery_Settings['WRIS_L3_Desc_BgColor'];
			else
				$RISP_Slide_In_Desc_BG_Color   			= "#ffffff" ;	
			if(isset($RISP_Gallery_Settings['RISP_Naviagtion_Arrow_Color']))
				$RISP_Naviagtion_Arrow_Color= $RISP_Gallery_Settings['RISP_Naviagtion_Arrow_Color'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Navigation_Color']))
				$RISP_Naviagtion_Arrow_Color   			= $RISP_Gallery_Settings['WRIS_L3_Navigation_Color'];
			else
				$RISP_Naviagtion_Arrow_Color   			= "#31a3dd" ;

			if(isset($RISP_Gallery_Settings['RISP_Naviagtion_Button_Color']))
				$RISP_Naviagtion_Button_Color= $RISP_Gallery_Settings['RISP_Naviagtion_Button_Color'];
			else if(isset($RISP_Gallery_Settings['WRIS_L3_Navigation_Bullets_Color']))
				$RISP_Naviagtion_Button_Color   		= $RISP_Gallery_Settings['WRIS_L3_Navigation_Bullets_Color'];
			else
				$RISP_Naviagtion_Button_Color   		= "#31A3DD" ;	
			
			/*  	 Load  pro details	 */
			if(isset($RISP_Gallery_Settings['RISP_L3_Text_Alignment']))
				$RISP_L3_Text_Alignment   				= $RISP_Gallery_Settings['RISP_L3_Text_Alignment'];
			else
				$RISP_L3_Text_Alignment   				= "centerCenter";
			if(isset($RISP_Gallery_Settings['RISP_L3_Title_Transition']))
				$RISP_L3_Title_Transition   			= $RISP_Gallery_Settings['RISP_L3_Title_Transition'];
			else
				$RISP_L3_Title_Transition   			= "up";
			if(isset($RISP_Gallery_Settings['RISP_L3_Description_Transition']))
				$RISP_L3_Description_Transition   		= $RISP_Gallery_Settings['RISP_L3_Description_Transition'];
			else
				$RISP_L3_Description_Transition   		= "down";
			if(isset($RISP_Gallery_Settings['RISP_L3_Thumbnail_Style_Color']))
				$RISP_L3_Thumbnail_Style_Color   		= $RISP_Gallery_Settings['RISP_L3_Thumbnail_Style_Color'];
			else
				$RISP_L3_Thumbnail_Style_Color   		= "#31A3DD";
			if(isset($RISP_Gallery_Settings['RISP_L3_Navigation_Button_Style']))
				$RISP_L3_Navigation_Button_Style		= $RISP_Gallery_Settings['RISP_L3_Navigation_Button_Style'];
			else
				$RISP_L3_Navigation_Button_Style= 1;
		}
		
		//layout 4 settings
		if($RISP_Slider_Layout == 4) {
			$RISP_L4_Auto_Slideshow   				= $RISP_Gallery_Settings['RISP_L4_Auto_Slideshow'];
			if(isset($RISP_Gallery_Settings['RISP_L4_Slide_Order']))
				$RISP_L4_Slide_Order   				= $RISP_Gallery_Settings['RISP_L4_Slide_Order'];
			else
				$RISP_L4_Slide_Order   				= "ASC";
			if(isset($RISP_Gallery_Settings['RISP_L4_Slide_Distance']))
				$RISP_L4_Slide_Distance   			= $RISP_Gallery_Settings['RISP_L4_Slide_Distance'];
			else
				$RISP_L4_Slide_Distance   			= 5;
			$RISP_L4_Sliding_Arrow   				= $RISP_Gallery_Settings['RISP_L4_Sliding_Arrow'];
			$RISP_L4_Navigation_Button   			= $RISP_Gallery_Settings['RISP_L4_Navigation_Button'];
			if(isset($RISP_Gallery_Settings['RISP_L4_Navigation_Button_Style']))
				$RISP_L4_Navigation_Button_Style	= $RISP_Gallery_Settings['RISP_L4_Navigation_Button_Style'];
			else
				$RISP_L4_Navigation_Button_Style	= 1;
			$RISP_L4_Slider_Transition_Speed		= $RISP_Gallery_Settings['RISP_L4_Slider_Transition_Speed'];
			$RISP_L4_Slider_Transition_Effect		= $RISP_Gallery_Settings['RISP_L4_Slider_Transition_Effect'];
			$RISP_L4_Slider_Width   				= $RISP_Gallery_Settings['RISP_L4_Slider_Width'];
			if(isset($RISP_Gallery_Settings['RISP_L4_Width']))
				$RISP_L4_Width   					= $RISP_Gallery_Settings['RISP_L4_Width'];
			else
				$RISP_L4_Width						= "custom";
			$RISP_L4_Slider_Height   				= $RISP_Gallery_Settings['RISP_L4_Slider_Height'];
			if(isset($RISP_Gallery_Settings['RISP_L4_Height']))
				$RISP_L4_Height   					= $RISP_Gallery_Settings['RISP_L4_Height'];
			else
				$RISP_L4_Height						= "custom";
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
				$RISP_L5_Thumbnail_Style_Color  = "#000000";
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
		
	$RISP_Slide_In_Title_BG_Color = URISPhex2rgb($RISP_Slide_In_Title_BG_Color);
	$RISP_Slide_In_Title_BG_Color = implode(", ", $RISP_Slide_In_Title_BG_Color);

	$RISP_Slide_In_Desc_BG_Color = URISPhex2rgb($RISP_Slide_In_Desc_BG_Color);
	$RISP_Slide_In_Desc_BG_Color = implode(", ", $RISP_Slide_In_Desc_BG_Color);
	
	/**
	 * Layout 1 Output
	 */
	if($RISP_Slider_Layout == 1) {
		require("urisp-layout-1.php");
	}
	
	/**
	 * Layout 2 Output
	 */
	if($RISP_Slider_Layout == 2) {
		require("urisp-layout-2.php");
	}
	
	/**
	 * Layout 3 Output
	 */
	if($RISP_Slider_Layout == 3) {
		require("urisp-layout-3.php");
	}
	
	/**
	 * Layout 4 Output
	 */
	if($RISP_Slider_Layout == 4) {
		require("urisp-layout-4.php");
	}
	
	/**
	 * Layout 5 Output
	 */
	if($RISP_Slider_Layout == 5) {
		require("urisp-layout-5.php");
	}
	
	wp_reset_query();
	return ob_get_clean();
}
?>