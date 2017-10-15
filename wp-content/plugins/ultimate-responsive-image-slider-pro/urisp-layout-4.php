<?php
/**
 * Layout 4 - Load All RISP Custom Post Type
 */
$IG_CPT_Name = "ris_gallery";
$AllSlides = array(  'p' => $Id['id'], 'post_type' => $IG_CPT_Name, 'orderby' => 'ASC');
$loop = new WP_Query( $AllSlides );

while ( $loop->have_posts() ) : $loop->the_post();
//get the post id
$post_id = get_the_ID();
	
/**
 * Get All Slides Details Post Meta
 */
$RPGP_AllPhotosDetails = unserialize(base64_decode(get_post_meta( get_the_ID(), 'ris_all_photos_details', true)));
$TotalImages =  get_post_meta( get_the_ID(), 'ris_total_images_count', true );
$i = 1;
?>
<script type="text/javascript">
jQuery( document ).ready(function( jQuery ) {
	jQuery( '#example4_<?php echo $post_id; ?>' ).sliderPro({
		//autoplay
		<?php if($RISP_L4_Auto_Slideshow == 1) { ?>
		autoplay:  true,
		autoplayOnHover: 'none',
		<?php } ?>
		<?php if($RISP_L4_Auto_Slideshow == 2) { ?>
		autoplay: true,
		autoplayOnHover: 'pause',
		<?php } ?>
		<?php if($RISP_L4_Auto_Slideshow == 3) { ?>
		autoplay:  false,
		<?php } ?>
		
		//width
		<?php if($RISP_L4_Width == "100%") { ?>
		width: "100%",
		<?php } else if($RISP_L4_Width == "custom") { ?>
		width: <?php if($RISP_L4_Slider_Width != "") echo $RISP_L4_Slider_Width; else echo "1000"; ?>,
		<?php } else if($RISP_L4_Width == "fullWidth") { ?>
		forceSize: 'fullWidth',
		<?php } ?>
		
		//height
		<?php if($RISP_L4_Height == "custom") { ?>
		height: <?php if($RISP_L4_Slider_Height) echo $RISP_L4_Slider_Height; else echo "500"; ?>,
		<?php } ?>
		<?php if($RISP_L4_Height == "auto") { ?>
		autoHeight: true,
		<?php } ?>
		imageScaleMode: 'cover',
		
		autoplayDelay: <?php if($RISP_L4_Slider_Transition_Speed != "") echo $RISP_L4_Slider_Transition_Speed; else echo "5000"; ?>,
		arrows: <?php if($RISP_L4_Sliding_Arrow == 1) echo "true"; else echo "false"; ?>,
		buttons: <?php if($RISP_L4_Navigation_Button == 1) echo "true"; else echo "false"; ?>,
		fade: <?php if($RISP_L4_Slider_Transition_Effect == 1) echo "true"; else echo "false"; ?>,
		updateHash: false,
		startSlide: 0,
		loop: true,
		autoplayDirection: 'normal',
		touchSwipe: true,
		<?php if($RISP_L4_Slide_Order == "shuffle") { ?>
		shuffle: true,
		<?php } ?>
		slideDistance: <?php if(isset($RISP_L4_Slide_Distance)) echo $RISP_L4_Slide_Distance; else echo "5"; ?>,
		fullScreen: <?php if($RISP_Fullscreeen == 1) echo "true"; else echo "false"; ?>,
	});
	
	<?php if($RISP_Lightbox_Preview == 1 && $RISP_Read_More_Link_ON == "text") { ?>
	// instantiate fancybox when a link is clicked
	jQuery( '#example4_<?php echo $post_id; ?> .sp-image' ).parent( 'a' ).on( 'click', function( event ) {
		event.preventDefault();
		// lightbox index
		if ( jQuery( '#example4_<?php echo $post_id; ?>' ).hasClass( 'sp-swiping' ) === false ) {
			jQuery.fancybox.open( jQuery( '#example4_<?php echo $post_id; ?> .sp-image' ).parent( 'a' ), { index: jQuery( this ).parents( '.sp-slide' ).index() } );
		}
	});
	<?php } ?>
});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
<script type="text/javascript">
WebFont.load({
	google: {
		families: ['<?php echo $RISP_Font_Style; ?>'] // saved value
	}
});
</script>
<style>
#example4_<?php echo $post_id; ?> .title-in {
	color: <?php echo $RISP_Slide_In_Title_Color; ?> !important;
	font-family: <?php echo $RISP_Font_Style; ?> !important;
	font-weight: bolder;
}

#example4_<?php echo $post_id; ?> .desc-in {
	color: <?php echo $RISP_Slide_In_Desc_Color; ?> !important;
	font-family: <?php echo $RISP_Font_Style; ?> !important;
}

#example4_<?php echo $post_id; ?> .read-more-color {
	color: <?php echo $RISP_Read_More_Link_Color; ?> !important;
	display: block;
	-webkit-box-shadow: none;
	box-shadow: none;
}

.slider-pro a:hover {
	-webkit-box-shadow: none;
	box-shadow: none;
}

/* navigation button/bullets color */
#example4_<?php echo $post_id; ?> .sp-button {
	border: 2px solid <?php echo $RISP_Naviagtion_Button_Color; ?> !important;
	width: <?php echo $RISP_Naviagtion_Button_Size; ?>px;
	height: <?php echo $RISP_Naviagtion_Button_Size; ?>px;
	<?php if($RISP_L4_Navigation_Button_Style == 0) { ?>
	border-radius: 0% !important;
	<?php } ?>
}
#example4_<?php echo $post_id; ?> .sp-selected-button {
	background-color: <?php echo $RISP_Naviagtion_Button_Color; ?> !important;
	<?php if($RISP_L4_Navigation_Button_Style == 0) { ?>
	border-radius: 0% !important;
	<?php } ?>
}

/* navigation arrow color */
#example4_<?php echo $post_id; ?> .sp-next-arrow::after, #example4_<?php echo $post_id; ?> .sp-next-arrow::before, #example4_<?php echo $post_id; ?> .sp-previous-arrow::after, #example4_<?php echo $post_id; ?> .sp-previous-arrow::before {
    background-color: <?php echo $RISP_Naviagtion_Arrow_Color; ?>!important;
}

#example4_<?php echo $post_id; ?> .sp-full-screen-button {
    font-weight: bolder;
	color: <?php echo $RISP_Naviagtion_Arrow_Color; ?>!important;
}

.slider-pro {
    font-family: 'Open Sans', Arial;
}

/* Example 4 */

#example4_<?php echo $post_id; ?> .sp-slides-container {
	background-color: #F4F4F4;
}

#example4_<?php echo $post_id; ?> h3 {
	margin: 0 0 10px 0;
}

#example4_<?php echo $post_id; ?> p {
	margin: 0 0 30px 0;
}

#example4_<?php echo $post_id; ?> img {
	display: block;
}

#example4_<?php echo $post_id; ?> .sp-thumbnail-container {
	width: 200px;
	height: 130px;
	overflow: hidden;
	margin-bottom: 10px;
}

#example4_<?php echo $post_id; ?> .sp-image-text {
	background: rgba(<?php echo $RISP_Slide_In_Title_BG_Color; ?>, <?php echo $RISP_BG_Color_Opacity; ?>) !important;
	color: #FFF;
	padding: 20px;
	transform: initial !important;
}

.links {
	text-align: center;
	margin-top: 10px;
}

@media (max-width: 860px) {
	#example4_<?php echo $post_id; ?> .hide-medium-screen {
		display: none;
	}
}
<?php if(isset($RISP_Custom_CSS)) echo $RISP_Custom_CSS; ?>
</style>
<div id="example4_<?php echo $post_id; ?>" class="slider-pro">
	<!---- slides div start ---->
	<div class="sp-slides">
		<?php
		if($RISP_L4_Slide_Order == "DESC" ) { $RPGP_AllPhotosDetails = array_reverse($RPGP_AllPhotosDetails); }
		foreach($RPGP_AllPhotosDetails as $RPGP_SinglePhotoDetails) {
			$Title = $RPGP_SinglePhotoDetails['rpgp_image_label'];
			$Desc = $RPGP_SinglePhotoDetails['rpgp_image_desc'];
			$Url = $RPGP_SinglePhotoDetails['rpgp_image_url'];
			$Slide_Url = $RPGP_SinglePhotoDetails['rpgp_image_url'];
			$Link = $RPGP_SinglePhotoDetails['rpgp_external_link'];
			$i++;
			if($RISP_Read_More_Link_ON == "slide") {
				$Slide_Url = $Link;
				$target = $RISP_Read_More_Link_Open;
			}
			if($Title == "") {
				// if slide title blank then
				global $wpdb;
				$post_table_prefix = $wpdb->prefix. "posts";
				if(count($attachment = $wpdb->get_col($wpdb->prepare("SELECT `post_title` FROM `$post_table_prefix` WHERE `guid` LIKE '%s'", $Url)))) { 
					// attachment title as alt
					$slide_alt = $attachment[0];
					if(empty($attachment[0])) {
						// post title as alt
						$slide_alt = get_the_title( $post_id );
					}  
				}
			} else {
				// slide title as alt
				$slide_alt = $Title;
			}
		?>
		<div class="sp-slide">
			<?php if($RISP_Lightbox_Preview == 1) { ?>
			<a href="<?php echo $Slide_Url; ?>" <?php if($RISP_Read_More_Link_ON == "slide") { ?> target="<?php echo $target; ?>" <?php } ?>>
				<img class="sp-image" alt="<?php echo esc_attr($slide_alt); ?>" src="<?php echo RISP_PLUGIN_URL; ?>img/loading.gif"
					data-src="<?php echo $Url; ?>"
					data-retina="<?php echo $Url; ?>"/>
			</a>
			<?php } else { ?>
			<img class="sp-image" alt="<?php echo esc_attr($slide_alt); ?>" src="<?php echo RISP_PLUGIN_URL; ?>img/loading.gif"
					data-src="<?php echo $Url; ?>"
					data-retina="<?php echo $Url; ?>"/>
			<?php } ?>
			
			<?php if($Title != "" || $Desc != "" || $Link != "") { ?>
			<div class="sp-layer sp-static sp-image-text hide-medium-screen" data-horizontal="30" data-vertical="30" data-width="350">
				<?php if($Title != "") { ?>
				<h3 class="title-in"><?php echo $Title; ?></h3>
				<?php } ?>
				
				<?php if($Desc != "") { ?>
				<p class="desc-in"><?php echo $Desc; ?></p>
				<?php } ?>
				
				<?php if($Link != "" && $RISP_Read_More_Link_ON == "text") { ?>
				<a class="read-more-color" target="<?php echo $RISP_Read_More_Link_Open; ?>" href="<?php echo $Link; ?>"><?php _e($RISP_Read_More_Link_Text, RISP_TEXT_DOMAIN); ?></a>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
		<?php } ?>		
	</div>
	<!---- slides div end ---->
</div>
<?php endwhile; ?>