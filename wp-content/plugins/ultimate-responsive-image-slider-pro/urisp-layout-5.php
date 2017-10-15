<?php
/**
 * Layout 5 - Load All RISP Custom Post Type
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
?>
<script type="text/javascript">
jQuery( document ).ready(function( jQuery ) {
	jQuery( '#example5_<?php echo $post_id; ?>' ).sliderPro({
		//autoplay
		<?php if($RISP_L5_Auto_Slideshow == 1) { ?>
		autoplay:  true,
		autoplayOnHover: 'none',
		<?php } ?>
		<?php if($RISP_L5_Auto_Slideshow == 2) { ?>
		autoplay: true,
		autoplayOnHover: 'pause',
		<?php } ?>
		<?php if($RISP_L5_Auto_Slideshow == 3) { ?>
		autoplay:  false,
		<?php } ?>
		autoplayDelay: <?php if($RISP_L5_Slider_Transition_Speed != "") echo $RISP_L5_Slider_Transition_Speed; else echo "5000"; ?>,
		
		//width
		<?php if($RISP_L5_Width == "100%") { ?>
		width: "100%",
		<?php } else if($RISP_L5_Width == "custom") { ?>
		width: <?php if($RISP_L5_Slider_Width != "") echo $RISP_L5_Slider_Width; else echo "1000"; ?>,
		<?php } else if($RISP_L5_Width == "fullWidth") { ?>
		forceSize: 'fullWidth',
		<?php } ?>
		
		//height
		<?php if($RISP_L5_Height == "custom") { ?>
		height: <?php if($RISP_L5_Slider_Height != "") echo $RISP_L5_Slider_Height; else echo "500"; ?>,
		<?php } else { ?>
		autoHeight: true,
		<?php } ?>
		imageScaleMode: 'cover',
		
		arrows: <?php if($RISP_L5_Sliding_Arrow == 1) echo "true"; else echo "false"; ?>,
		buttons: <?php if($RISP_L5_Navigation_Button == 1) echo "true"; else echo "false"; ?>,
		orientation: '<?php if($RISP_L5_Sliding_Direction != "") echo $RISP_L5_Sliding_Direction; else echo "horizontal"; ?>', // vertical - horizontal
		thumbnailsPosition: '<?php if($RISP_L5_Slider_Navigation_Position != "") echo $RISP_L5_Slider_Navigation_Position; else echo "right"; ?>', //left - right 
		thumbnailPointer: true,
		fade: <?php if($RISP_L5_Slider_Transition_Effect == 1) echo "true"; else echo "false"; ?>,
		<?php if($RISP_L5_Slider_Navigation_Content == "both") { ?>
		thumbnailWidth: 290,
		breakpoints: {
			800: {
				thumbnailsPosition: 'bottom',
				thumbnailWidth: 270,
				thumbnailHeight: 100,
			},
			500: {
				thumbnailsPosition: 'bottom',
				thumbnailWidth: 120,
				thumbnailHeight: 50,
			}
		},
		<?php } else { ?>
		thumbnailWidth: 290,
		<?php } ?>
		startSlide: 0,
		loop: true,
		autoplayDirection: 'normal',
		touchSwipe: true,
		<?php if($RISP_L5_Slide_Order == "shuffle") { ?>
		shuffle: true,
		<?php } ?>
		slideDistance: <?php if(isset($RISP_L5_Slide_Distance)) echo $RISP_L5_Slide_Distance; else echo "5"; ?>,
		fullScreen: <?php if($RISP_Fullscreeen == 1) echo "true"; else echo "false"; ?>,
	});
	
	<?php if($RISP_Lightbox_Preview == 1 && $RISP_Read_More_Link_ON == "text") { ?>
	// instantiate fancybox when a link is clicked
	jQuery( '#example5_<?php echo $post_id; ?> .sp-image' ).parent( 'a' ).on( 'click', function( event ) {
		event.preventDefault();
		// lightbox index
		if ( jQuery( '#example5_<?php echo $post_id; ?>' ).hasClass( 'sp-swiping' ) === false ) {
			jQuery.fancybox.open( jQuery( '#example5_<?php echo $post_id; ?> .sp-image' ).parent( 'a' ), { index: jQuery( this ).parents( '.sp-slide' ).index() } );
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
#example5_<?php echo $post_id; ?> .title-in {
	color: <?php echo $RISP_Slide_In_Title_Color; ?> !important;
	font-family: <?php echo $RISP_Font_Style; ?> !important;
	font-weight: bolder;
	background-color : rgb(<?php echo $RISP_Slide_In_Title_BG_Color; ?>) !important;
}

#example5_<?php echo $post_id; ?> .desc-in {
	color: <?php echo $RISP_Slide_In_Desc_Color; ?> !important;
	font-family: <?php echo $RISP_Font_Style; ?> !important;
    background-color : rgb(<?php echo $RISP_Slide_In_Desc_BG_Color; ?>) !important;
}

#example5_<?php echo $post_id; ?> .sp-thumbnail-container .sp-thumbnail-text {
	background-color: <?php echo $RISP_Thumbnail_BG_Color; ?> !important;
}

#example5_<?php echo $post_id; ?> .thumb-title {
	color: <?php echo $RISP_Thumbnail_Title_Color; ?> !important;
	font-family: <?php echo $RISP_Font_Style; ?> !important;
	font-weight: bolder;
}

#example5_<?php echo $post_id; ?> .thumb-desc {
	color: <?php echo $RISP_Thumbnail_Desc_Color; ?> !important;
	font-family: <?php echo $RISP_Font_Style; ?> !important;
}

#example5_<?php echo $post_id; ?> .read-more-color {
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
#example5_<?php echo $post_id; ?> .sp-button {
	border: 2px solid <?php echo $RISP_Naviagtion_Button_Color; ?> !important;
	width: <?php echo $RISP_Naviagtion_Button_Size; ?>px;
	height: <?php echo $RISP_Naviagtion_Button_Size; ?>px;
	<?php if($RISP_L5_Navigation_Button_Style == 0) { ?>
	border-radius: 0% !important;
	<?php } ?>
}
#example5_<?php echo $post_id; ?> .sp-selected-button {
	background-color: <?php echo $RISP_Naviagtion_Button_Color; ?> !important;
	<?php if($RISP_L5_Navigation_Button_Style == 0) { ?>
	border-radius: 0% !important;
	<?php } ?>
}

/* navigation arrow color */
#example5_<?php echo $post_id; ?> .sp-next-arrow::after, #example5_<?php echo $post_id; ?> .sp-next-arrow::before, #example5_<?php echo $post_id; ?> .sp-previous-arrow::after, #example5_<?php echo $post_id; ?> .sp-previous-arrow::before {
    background-color: <?php echo $RISP_Naviagtion_Arrow_Color; ?>!important;
}

#example5_<?php echo $post_id; ?> .sp-full-screen-button {
    font-weight: bolder;
	right: 10px;
	color: <?php echo $RISP_Naviagtion_Arrow_Color; ?> !important;
}

/* pointer */
#example5_<?php echo $post_id; ?> .sp-right-thumbnails.sp-has-pointer .sp-selected-thumbnail::before {
    border-left: 5px solid <?php echo $RISP_L5_Thumbnail_Style_Color; ?>;
}
#example5_<?php echo $post_id; ?> .sp-right-thumbnails.sp-has-pointer .sp-selected-thumbnail::after {
    border-right: 13px solid <?php echo $RISP_L5_Thumbnail_Style_Color; ?>;
}

#example5_<?php echo $post_id; ?> .sp-left-thumbnails.sp-has-pointer .sp-selected-thumbnail:before {
	border-left: 5px solid <?php echo $RISP_L5_Thumbnail_Style_Color; ?>;
}
#example5_<?php echo $post_id; ?> .sp-left-thumbnails.sp-has-pointer .sp-selected-thumbnail:after {
	border-left: 13px solid <?php echo $RISP_L5_Thumbnail_Style_Color; ?>;
}

.slider-pro {
    font-family: 'Open Sans', Arial;
}

/* Example 5 */

#example5_<?php echo $post_id; ?> .sp-thumbnail-image-container {
	width: 100px;
	height: 80px;
	overflow: hidden;
	float: left;
}

#example5_<?php echo $post_id; ?> .sp-thumbnail-image {
	height: auto;
}

#example5_<?php echo $post_id; ?> .sp-thumbnail-text {
	width: 170px;
    float: right;
    padding: 8px !important;
    background-color: #F0F0F0;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

#example5_<?php echo $post_id; ?> .sp-thumbnail-title {
	margin-bottom: 5px;
	color: #333;
}

#example5_<?php echo $post_id; ?> .sp-thumbnail-description {
	font-size: 14px;
	color:  <?php echo $RISP_Thumbnail_Desc_Color; ?> !impotant;
	line-height: 1.3 !important;
}

#example5_<?php echo $post_id; ?> .hide-section {
	display: none;
}

@media (max-width: 500px) {
	#example5_<?php echo $post_id; ?> .sp-full-screen-button {
		right: 10px;
	}
	#example5_<?php echo $post_id; ?> .sp-thumbnail {
		text-align: center;
	}

	#example5_<?php echo $post_id; ?> .sp-thumbnail-image-container {
		display: none;
	}

	#example5_<?php echo $post_id; ?> .sp-thumbnail-text {
		width: 120px;
	}

	#example5_<?php echo $post_id; ?> .sp-thumbnail-title {
		font-size: 12px;
		text-transform: uppercase;
	}

	#example5_<?php echo $post_id; ?> .sp-thumbnail-description {
		display: none;
	}
}
<?php if(isset($RISP_Custom_CSS)) echo $RISP_Custom_CSS; ?>
</style>
	<div id="example5_<?php echo $post_id; ?>" class="slider-pro">
		<!---- slides div start ---->
		<div class="sp-slides">
			<?php
			if($RISP_L5_Slide_Order == "DESC" ) { $RPGP_AllPhotosDetails = array_reverse($RPGP_AllPhotosDetails); }
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
				
				<div class="sp-caption">
					<?php if($Title != "") { ?>
					<div class="title-in"><?php echo $Title; ?></div>
					<?php } ?>
					<?php if($Desc != "") { ?>
					<div class="desc-in"><?php echo $Desc; ?></div>
					<?php } ?>
				<?php if($Link != "" && $RISP_Read_More_Link_ON == "text") { ?>
					<a class="read-more-color" target="<?php echo $RISP_Read_More_Link_Open; ?>" href="<?php echo $Link; ?>"><?php _e($RISP_Read_More_Link_Text, RISP_TEXT_DOMAIN); ?></a>
				<?php } ?>
				</div>
			</div>
			<?php } ?>		
		</div>
		<!---- slides div end ---->
		
		<!-- slides thumbnails div start -->
		<div class="sp-thumbnails <?php if($RISP_L5_Slider_Navigation == 0) { echo "hide-section"; } ?>">
			<?php 
			foreach($RPGP_AllPhotosDetails as $RPGP_SinglePhotoDetails) {
			$Title = $RPGP_SinglePhotoDetails['rpgp_image_label'];
			$Desc = $RPGP_SinglePhotoDetails['rpgp_image_desc'];
			$ThumbUrl = $RPGP_SinglePhotoDetails['rpggallery_admin_thumb'];
			$j++;
			?>
			<div class="sp-thumbnail">
				<!--only thumbnail-->
				<div class="sp-thumbnail-image-container <?php if($RISP_L5_Slider_Navigation_Content != "thumbnail") { echo "hide-section";  } ?>">
					<?php if($ThumbUrl != "") { ?>
					<img class="sp-thumbnail-image" src="<?php echo $ThumbUrl; ?>"/>
					<?php } ?>
				</div>
				
				<!--Both thumbnail & detail-->
				<?php if($RISP_L5_Slider_Navigation_Content == "both") { ?>
				<?php if($ThumbUrl != "") { ?>
				<div class="sp-thumbnail-image-container">
					<img class="sp-thumbnail-image" src="<?php echo RISP_PLUGIN_URL; ?>img/loading.gif" data-src="<?php echo $ThumbUrl; ?>"/>
				</div>
				<?php } ?>
				<?php if($Title != "" || $Desc != "") { ?>
				<div class="sp-thumbnail-text">
					<div class="sp-thumbnail-title thumb-title"><?php echo $Title; ?></div>
					<div class="sp-thumbnail-description thumb-desc"><?php echo $Desc; ?></div>
				</div>
				<?php } } ?>
				
				<!--only detail-->
				<?php if($Title != "" || $Desc != "") { ?>
				<div class="sp-thumbnail-text <?php if($RISP_L5_Slider_Navigation_Content != "detail") { echo "hide-section"; } ?>" style="width: 100% !important;">
					<div class="sp-thumbnail-title thumb-title"><?php if(strlen($Title) > 21 ) echo substr($Title,0,21); else echo $Title; ?></div>
					<div class="sp-thumbnail-description thumb-desc"><?php if(strlen($Desc) > 35 ) echo substr($Desc,0,35)."..."; else echo $Desc; ?></div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
		<!-- slides thumbnails div end -->
	</div>
<?php endwhile; ?>