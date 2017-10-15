<?php
/**
 * Load All RISP Custom Post Type
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
$j = 1;
//navigation button/bullets size
?>
<script type="text/javascript">
jQuery( document ).ready(function( jQuery ) {
	jQuery( '#example1_<?php echo $post_id; ?>' ).sliderPro({
		//autoplay
		<?php if($RISP_L1_Auto_Slideshow == 1) { ?>
		autoplay:  true,
		autoplayOnHover: 'none',
		<?php } ?>
		<?php if($RISP_L1_Auto_Slideshow == 2) { ?>
		autoplay: true,
		autoplayOnHover: 'pause',
		<?php } ?>
		<?php if($RISP_L1_Auto_Slideshow == 3) { ?>
		autoplay:  false,
		<?php } ?>
		autoplayDelay: <?php if($RISP_L1_Slider_Transition_Speed != "") echo $RISP_L1_Slider_Transition_Speed; else echo "5000"; ?>,
		
		//width
		<?php if($RISP_L1_Width == "100%") { ?>
		width: "100%",
		<?php } else if($RISP_L1_Width == "custom") { ?>
		width: <?php if($RISP_L1_Slider_Width != "") echo $RISP_L1_Slider_Width; else echo "1000"; ?>,
		<?php } else if($RISP_L1_Width == "fullWidth") { ?>
		forceSize: 'fullWidth',
		<?php } ?>
		
		//height
		<?php if($RISP_L1_Height == "custom") { ?>
		height: <?php if($RISP_L1_Slider_Height != "") echo $RISP_L1_Slider_Height; else echo "500"; ?>,
		<?php } ?>
		<?php if($RISP_L1_Height == "auto") { ?>
		autoHeight: true,
		<?php } ?>
		imageScaleMode: 'cover',
		
		arrows: <?php if($RISP_L1_Sliding_Arrow == 1) echo "true"; else echo "false"; ?>,
		buttons: <?php if($RISP_L1_Navigation_Button == 1) echo "true"; else echo "false"; ?>,			
		waitForLayers: true,
		fade: <?php if($RISP_L1_Slider_Transition_Effect == 1) echo "true"; else echo "false"; ?>,			
		
		thumbnailPointer: true,
		autoScaleLayers: true,
		//thumbnail
		thumbnailArrows: true,
		thumbnailWidth: 140,
		thumbnailHeight: 120,
		breakpoints: {
			500: {
				thumbnailWidth: 120,
				thumbnailHeight: 100
			}
		},
		startSlide: 0,
		loop: true,
		autoplayDirection: 'normal',
		touchSwipe: true,
		<?php if($RISP_L1_Slide_Order == "shuffle") { ?>
		shuffle: true,
		<?php } ?>
		slideDistance: <?php if(isset($RISP_L1_Slide_Distance)) echo $RISP_L1_Slide_Distance; else echo "5"; ?>,
		fullScreen: <?php if($RISP_Fullscreeen == 1) echo "true"; else echo "false"; ?>,
	});
	
	// instantiate fancybox when a link is clicked
	<?php if($RISP_Lightbox_Preview == 1 && $RISP_Read_More_Link_ON == "text") { ?>
	jQuery( '#example1_<?php echo $post_id; ?> .sp-image' ).parent( 'a' ).on( 'click', function( event ) {
		event.preventDefault();
		// lightbox index
		if ( jQuery( '#example1_<?php echo $post_id; ?>' ).hasClass( 'sp-swiping' ) === false ) {
			jQuery.fancybox.open( jQuery( '#example1_<?php echo $post_id; ?> .sp-image' ).parent( 'a' ), { index: jQuery( this ).parents( '.sp-slide' ).index() } );
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
#example1_<?php echo $post_id; ?> .title-in {
	color: <?php echo $RISP_Slide_In_Title_Color; ?> !important;
	font-family: <?php echo $RISP_Font_Style; ?> !important;
	font-weight: bold;
	font-size: 16px !important;
	text-align: center;
}

#example1_<?php echo $post_id; ?> .title-in-bg {
	background: rgba(<?php echo $RISP_Slide_In_Title_BG_Color; ?>, <?php echo $RISP_BG_Color_Opacity; ?>) !important;
	max-width: 90%;
	min-width: 30%;	
	transform: initial !important;
}

#example1_<?php echo $post_id; ?> .desc-in {
	color: <?php echo $RISP_Slide_In_Desc_Color; ?> !important;
	font-family: <?php echo $RISP_Font_Style; ?> !important;
	font-size: 14px !important;
	text-align: center;
}
#example1_<?php echo $post_id; ?> .desc-in-bg {
	background: rgba(<?php echo $RISP_Slide_In_Desc_BG_Color; ?>, <?php echo $RISP_BG_Color_Opacity; ?>) !important;
	max-width: 90%;
	min-width: 30%;
	transform: initial !important;
}

#example1_<?php echo $post_id; ?> .sp-thumbnail {
	color: <?php echo $RISP_Thumbnail_BG_Color; ?> !important;
}

#example1_<?php echo $post_id; ?> .thumb-title {
	color: <?php echo $RISP_Thumbnail_Title_Color; ?> !important;
	font-family: <?php echo $RISP_Font_Style; ?> !important;
	font-weight: bolder;
}

#example1_<?php echo $post_id; ?> .thumb-desc {
	color: <?php echo $RISP_Thumbnail_Desc_Color; ?> !important;
	font-family: <?php echo $RISP_Font_Style; ?> !important;
}

#example1_<?php echo $post_id; ?> .read-more-color {
	color: <?php echo $RISP_Read_More_Link_Color; ?> !important;
	font-family: <?php echo $RISP_Font_Style; ?> !important;
	-webkit-box-shadow: none;
	box-shadow: none;
}

.slider-pro a:hover {
	-webkit-box-shadow: none;
	box-shadow: none;
}

/* navigation button/bullets color */
#example1_<?php echo $post_id; ?> .sp-button {
	border: 2px solid <?php echo $RISP_Naviagtion_Button_Color; ?> !important;
	width: <?php echo $RISP_Naviagtion_Button_Size; ?>px;
	height: <?php echo $RISP_Naviagtion_Button_Size; ?>px;
	<?php if($RISP_L1_Navigation_Button_Style == 0) { ?>
	border-radius: 0% !important;
	<?php } ?>
}
#example1_<?php echo $post_id; ?> .sp-selected-button {
	background-color: <?php echo $RISP_Naviagtion_Button_Color; ?> !important;
	<?php if($RISP_L1_Navigation_Button_Style == 0) { ?>
	border-radius: 0% !important;
	<?php } ?>
}

/* navigation arrow color */
#example1_<?php echo $post_id; ?> .sp-next-arrow::after, #example1_<?php echo $post_id; ?> .sp-next-arrow::before, #example1_<?php echo $post_id; ?> .sp-previous-arrow::after, #example1_<?php echo $post_id; ?> .sp-previous-arrow::before {
    background-color: <?php echo $RISP_Naviagtion_Arrow_Color; ?>!important;
}

#example1_<?php echo $post_id; ?> .sp-full-screen-button {
    font-weight: bolder;
	color: <?php echo $RISP_Naviagtion_Arrow_Color; ?>!important;
}

/* pointer */
#example1_<?php echo $post_id; ?> .sp-bottom-thumbnails.sp-has-pointer .sp-selected-thumbnail::before {
    border-bottom: 5px solid <?php echo $RISP_L1_Thumbnail_Style_Color; ?> !important;
}

#example1_<?php echo $post_id; ?> .sp-bottom-thumbnails.sp-has-pointer .sp-selected-thumbnail::after {
    border-bottom: 13px solid <?php echo $RISP_L1_Thumbnail_Style_Color; ?> !important;
}

.slider-pro {
    font-family: 'Open Sans', Arial;
}

/* Example 1 */

#example1_<?php echo $post_id; ?> .sp-thumbnail {
	width: 100%;
	padding: 8px;
	background-color: <?php echo $RISP_Thumbnail_BG_Color; ?>;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

#example1_<?php echo $post_id; ?> .sp-thumbnail-title {
	margin-bottom: 5px;
	color: #333;
}

#example1_<?php echo $post_id; ?> .sp-thumbnail-description {
	font-size: 14px;
	color: #333;
}

@media (max-width: 860px) {
	#example1_<?php echo $post_id; ?> .sp-layer {
		font-size: 18px;
	}
	
	#example1_<?php echo $post_id; ?> .hide-medium-screen {
		display: none;
	}
}

@media (max-width: 640px) {
	#example1_<?php echo $post_id; ?> .hide-small-screen {
		display: none;
	}
}
<?php if(isset($RISP_Custom_CSS)) echo $RISP_Custom_CSS; ?>
</style>
<div id="example1_<?php echo $post_id; ?>" class="slider-pro">
	<!---- slides div start ---->
	<div class="sp-slides">
		<?php
		if($RISP_L1_Slide_Order == "DESC" ) { $RPGP_AllPhotosDetails = array_reverse($RPGP_AllPhotosDetails); }
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
			<?php if($RISP_Lightbox_Preview == 1 || $RISP_Read_More_Link_ON == "slide") { ?>
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

			<!--title-->
			<?php if($Title != "") { ?>
			<p class="title-in title-in-bg sp-layer sp-white sp-padding hide-small-screen" 
				data-position="<?php echo $RISP_L1_Text_Alignment; ?>"
				
				<?php if($RISP_L1_Text_Alignment == "topLeft" || $RISP_L1_Text_Alignment == "topCenter" || $RISP_L1_Text_Alignment == "topRight"){ ?>
				<?php if($RISP_L1_Text_Alignment != "topCenter") { ?> data-horizontal="40" <?php } ?> data-vertical="10%"
				<?php } ?>
				
				<?php if($RISP_L1_Text_Alignment == "centerLeft" || $RISP_L1_Text_Alignment == "centerCenter" || $RISP_L1_Text_Alignment == "centerRight"){ ?>
				<?php if($RISP_L1_Text_Alignment != "centerCenter") { ?> data-horizontal="70" <?php } ?> data-vertical="-15%"
				<?php } ?>
				
				<?php if($RISP_L1_Text_Alignment == "bottomLeft" || $RISP_L1_Text_Alignment == "bottomCenter" || $RISP_L1_Text_Alignment == "bottomRight"){ ?>
				<?php if($RISP_L1_Text_Alignment != "bottomCenter") { ?> data-horizontal="50" <?php } ?> data-vertical="28%"
				<?php } ?>
				
				data-show-transition="<?php echo $RISP_L1_Description_Transition; ?>" data-show-delay="400" data-hide-transition="<?php echo $RISP_L1_Title_Transition; ?>" data-hide-delay="500">
				<?php echo $Title; ?>
			</p>
			<?php } ?>
			
			<!--description-->
			<?php if($Desc != "" || $Link != "") { ?>
			<p class="desc-in desc-in-bg sp-layer sp-black sp-padding hide-medium-screen" 
				data-position="<?php echo $RISP_L1_Text_Alignment; ?>" 
				
				<?php if($RISP_L1_Text_Alignment == "topLeft" || $RISP_L1_Text_Alignment == "topCenter" || $RISP_L1_Text_Alignment == "topRight"){ ?>
				<?php if($RISP_L1_Text_Alignment != "topCenter") { ?> data-horizontal="40" <?php } ?> data-vertical="25%"
				<?php } ?>
				
				<?php if($RISP_L1_Text_Alignment == "centerLeft" || $RISP_L1_Text_Alignment == "centerCenter" || $RISP_L1_Text_Alignment == "centerRight"){ ?>
				<?php if($RISP_L1_Text_Alignment != "centerCenter") { ?> data-horizontal="70" <?php } ?> data-vertical="15%"
				<?php } ?>
				
				<?php if($RISP_L1_Text_Alignment == "bottomLeft" || $RISP_L1_Text_Alignment == "bottomCenter" || $RISP_L1_Text_Alignment == "bottomRight"){ ?>
				<?php if($RISP_L1_Text_Alignment != "bottomCenter") { ?> data-horizontal="50" <?php } ?> data-vertical="10%"
				<?php } ?>			
				
				data-show-transition="<?php echo $RISP_L1_Title_Transition; ?>" data-show-delay="200" data-hide-transition="<?php echo $RISP_L1_Description_Transition; ?>" data-hide-delay="200">
				<?php echo $Desc; ?>
				<?php if($Link != "" && $RISP_Read_More_Link_ON == "text") { echo "<br>"; ?>
				<a class="read-more-color" target="<?php echo $RISP_Read_More_Link_Open; ?>" href="<?php echo $Link; ?>"><?php _e($RISP_Read_More_Link_Text, RISP_TEXT_DOMAIN); ?></a>
				<?php } ?>
			</p>
			<?php } ?>
		</div>
		<?php } ?>		
	</div>
	<!---- slides div end ---->
	<?php 
	if($RISP_L1_Slider_Navigation == 1) {
	?>
	<!-- slides thumbnails div start -->
	<div class="sp-thumbnails">
		<?php
		foreach($RPGP_AllPhotosDetails as $RPGP_SinglePhotoDetails) {
		$Title = $RPGP_SinglePhotoDetails['rpgp_image_label'];
		$Desc = $RPGP_SinglePhotoDetails['rpgp_image_desc'];
		$j++;
			if($Title != "" || $Desc != "") {
			?>
			<div class="sp-thumbnail">
				<div class="sp-thumbnail-title thumb-title"><?php if(strlen($Title) > 21 ) echo substr($Title,0,21); else echo $Title; ?></div>
				<div class="sp-thumbnail-description thumb-desc"><?php if(strlen($Desc) > 21 ) echo substr($Desc,0,30)."..."; else echo $Desc; ?></div>
			</div>
			<?php } ?>
		<?php } ?>
	</div>
	<?php } ?>
	<!-- slides thumbnails div end -->
</div>

<?php endwhile; ?>