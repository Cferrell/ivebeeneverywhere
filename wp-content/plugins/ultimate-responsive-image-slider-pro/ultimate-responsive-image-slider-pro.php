<?php
/**
 * Plugin Name: Ultimate Responsive Image Slider Pro
 * Version: 5.5.6
 * Description: Ultimate Responsive Image Slider Pro comes with 5 different slider layout.
 * Author: Weblizar
 * Author URI: http://weblizar.com/plugins/ultimate-responsive-image-slider-pro/
 * Plugin URI: http://weblizar.com/plugins/ultimate-responsive-image-slider-pro/
 */
 
/**
 * Constant Variable
 */
define("RISP_TEXT_DOMAIN", "W_R_I_S" );
define("RISP_PLUGIN_URL", plugin_dir_url(__FILE__));

// Apply default settings on activation
register_activation_hook( __FILE__, 'RISP_DefaultSettingsPro' );
function RISP_DefaultSettingsPro(){
    $DefaultSettingsProArray = serialize( array(
		"RISP_Slider_Layout"  			=> 3,
		//layout 1 settings
		"RISP_L1_Text_Alignment"  			=> "centerCenter",
		"RISP_L1_Title_Transition"   		=> "up",
		"RISP_L1_Description_Transition" 	=> "down",
		"RISP_L1_Auto_Slideshow"   			=> 1,
		"RISP_L1_Slide_Order"				=> "ASC",
		"RISP_L1_Slide_Distance"			=> 5,
		"RISP_L1_Thumbnail_Style_Color"		=> "#31A3DD",
		"RISP_L1_Sliding_Arrow"   			=> 1,
		"RISP_L1_Slider_Navigation"   		=> 1,
		"RISP_L1_Navigation_Button"   		=> 1,
		"RISP_L1_Navigation_Button_Style"	=> 1,
		"RISP_L1_Slider_Transition_Speed"	=> "5000",
		"RISP_L1_Slider_Transition_Effect"	=> 1,
		"RISP_L1_Slider_Width" 	 			=> "1000",
		"RISP_L1_Width" 	 				=> "custom",
		"RISP_L1_Slider_Height"   			=> "500",
		"RISP_L1_Height"   					=> "custom",		
		
		//layout 2 settings
		"RISP_L2_Auto_Slideshow"   			=> 1,
		"RISP_L2_Slide_Order"				=> "ASC",
		"RISP_L2_Slide_Distance"			=> 5,
		"RISP_L2_Sliding_Arrow"   			=> 1,
		"RISP_L2_Navigation_Button"   		=> 1,
		"RISP_L2_Navigation_Button_Style"   => 1,
		"RISP_L2_Slider_Transition_Speed"	=> "5000",
		"RISP_L2_Slider_Transition_Effect"	=> 1,
		"RISP_L2_Slider_Width"   			=> "50%",
		"RISP_L2_Width"   					=> "percentage",
		"RISP_L2_Slider_Height"   			=> "600",
		"RISP_L2_Height"   					=> "custom",		
		
		//layout 3 settings
		"RISP_L3_Text_Alignment"  			=> "centerCenter",
		"RISP_L3_Title_Transition"   		=> "up",
		"RISP_L3_Description_Transition"	=> "down",
		"RISP_L3_Auto_Slideshow"   			=> 1,
		"RISP_L3_Slide_Order"				=> "ASC",
		"RISP_L3_Slide_Distance"			=> 5,
		"RISP_L3_Navigation_Position"		=> "bottom",
		"RISP_L3_Thumbnail_Style"			=> "border",
		"RISP_L3_Thumbnail_Style_Color"		=> "#31A3DD",
		"RISP_L3_Thumbnail_Width"			=> 120,
		"RISP_L3_Thumbnail_Height"			=> 100,
		"RISP_L3_Sliding_Arrow"   			=> 1,
		"RISP_L3_Slider_Navigation"   		=> 1,
		"RISP_L3_Navigation_Button"   		=> 1,
		"RISP_L3_Navigation_Button_Style"	=> 1,
		"RISP_L3_Slider_Transition_Speed"	=> "5000",
		"RISP_L3_Slider_Transition_Effect"	=> 1,
		"RISP_L3_Slider_Width"   			=> "1000",
		"RISP_L3_Width"   					=> "custom",
		"RISP_L3_Slider_Height"   			=> "500",
		"RISP_L3_Height"   					=> "custom",		
		
		//layout 4 settings
		"RISP_L4_Auto_Slideshow"   			=> 1,
		"RISP_L4_Slide_Order"				=> "ASC",
		"RISP_L4_Slide_Distance"			=> 5,
		"RISP_L4_Sliding_Arrow"   			=> 1,
		"RISP_L4_Navigation_Button"   		=> 1,
		"RISP_L4_Navigation_Button_Style"   => 1,
		"RISP_L4_Slider_Transition_Speed"	=> "5000",
		"RISP_L4_Slider_Transition_Effect"	=> 1,
		"RISP_L4_Slider_Width"   			=> "1000",
		"RISP_L4_Width"   					=> "custom",
		"RISP_L4_Slider_Height"   			=> "500",
		"RISP_L4_Height"   					=> "custom",		
	
		//layout 5 settings
		"RISP_L5_Auto_Slideshow"   			=> 1,
		"RISP_L5_Slide_Order"				=> "ASC",
		"RISP_L5_Slide_Distance"			=> 5,
		"RISP_L5_Thumbnail_Style_Color"		=> "#31A3DD",
		"RISP_L5_Sliding_Arrow"   			=> 1,
		"RISP_L5_Sliding_Direction"   		=> "vertical",
		"RISP_L5_Navigation_Button"   		=> 1,
		"RISP_L5_Navigation_Button_Style"   => 1,
		"RISP_L5_Slider_Navigation"   		=> 1,
		"RISP_L5_Slider_Navigation_Content" => "both",
		"RISP_L5_Slider_Navigation_Position"=> "right",
		"RISP_L5_Slider_Transition_Speed"	=> "5000",
		"RISP_L5_Slider_Transition_Effect"	=> 1,
		"RISP_L5_Slider_Width"   			=> "670",
		"RISP_L5_Width"   					=> "custom",
		"RISP_L5_Slider_Height"   			=> "500",
		"RISP_L5_Height"   					=> "custom",
    ));
    add_option("RISP_Settings", $DefaultSettingsProArray);
}


// Image Crop Size Function 
add_image_size( 'rpggallery_admin_thumb', 300, 300, true );

/**
 * Support and Our Products Page
 */
add_action('admin_menu' , 'RISP_SettingsPage');
function RISP_SettingsPage() {
	add_submenu_page('edit.php?post_type=risp_gallery', __('Help and Support', RISP_TEXT_DOMAIN), __('Help and Support', RISP_TEXT_DOMAIN), 'administrator', 'RISP-help-page', 'RISP_Help_and_Support_page');
	add_submenu_page('edit.php?post_type=risp_gallery', __('Our Products', RISP_TEXT_DOMAIN), __('Our Products', RISP_TEXT_DOMAIN), 'administrator', 'RISP-Our-Products-page', 'RISP_Our_Products_page');
}

function RISP_Help_and_Support_page() {
	wp_enqueue_style('bootstrap-admin.css', RISP_PLUGIN_URL.'css/bootstrap-admin.css');
    require_once("help_and_support.php");
}

function RISP_Our_Products_page() {
	wp_enqueue_style('bootstrap-admin.css', RISP_PLUGIN_URL.'css/bootstrap-admin.css');
    require_once("our_product.php");
}
/**
 * Weblizar URISP Shortcode Detect Function
 */
function WeblizarURISPShortCodeDetect() {
	/**
	 * js scripts
	 */
	wp_enqueue_script('risp-jquery-sliderPro-min-js', RISP_PLUGIN_URL.'js/jquery.sliderPro.min.js', array('jquery'), '', true);
	wp_enqueue_style('risp-fancybox-css', RISP_PLUGIN_URL.'fancybox/jquery.fancybox.css');
	wp_enqueue_script('risp-fancybox-pack-js', RISP_PLUGIN_URL.'fancybox/jquery.fancybox.pack.js', array('jquery'), '', true);
	

	/**   
	 * css scripts
	 */
	wp_enqueue_style('risp', RISP_PLUGIN_URL.'css/risp.css');
	wp_enqueue_style('risp-slider-pro-min-css', RISP_PLUGIN_URL.'css/slider-pro.min.css');			
}
add_action( 'wp', 'WeblizarURISPShortCodeDetect' );

class URISP {

    private static $instance;
    private $admin_thumbnail_size = 150;
    private $thumbnail_size_w = 150;
    private $thumbnail_size_h = 150;
	var $counter;

    public static function forge() {
        if (!isset(self::$instance)) {
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }
	
	private function __construct() {
		$this->counter = 0;
        add_action('admin_print_scripts-post.php', array(&$this, 'risp_admin_print_scripts'));
        add_action('admin_print_scripts-post-new.php', array(&$this, 'risp_admin_print_scripts'));
        add_image_size('rpg_gallery_admin_thumb', $this->admin_thumbnail_size, $this->admin_thumbnail_size, true);
        add_image_size('rpg_gallery_thumb', $this->thumbnail_size_w, $this->thumbnail_size_h, true);
        add_shortcode('rpggallery', array(&$this, 'shortcode'));
		add_filter('widget_text','do_shortcode'); // text widget support
        if (is_admin()) {
			add_action('plugins_loaded', array(&$this, 'URISP_Translate'), 1);
			add_action('init', array(&$this, 'ResponsiveImageSliderPro'), 1);
			add_action('add_meta_boxes', array(&$this, 'risp_add_all_meta_boxes'));
			add_action('admin_init', array(&$this, 'risp_add_all_meta_boxes'), 1);
			add_action('save_post', array(&$this, 'risp_add_image_meta_box_save'), 9, 1);
			add_action('save_post', array(&$this, 'risp_settings_meta_save'), 9, 1);
			add_action('wp_ajax_ris_get_thumbnail', array(&$this, 'risp_ajax_get_thumbnail'));
		}
    }
	
	/**
	 * Translate Plugin
	 */
	public function URISP_Translate() {
		load_plugin_textdomain('W_R_I_S', FALSE, dirname( plugin_basename(__FILE__)).'/languages/' );
	}
	
	//Required JS & CSS
	public function risp_admin_print_scripts() {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('urisp-media-uploader-js', RISP_PLUGIN_URL . 'js/urisp-multiple-media-uploader.js', array('jquery'));
		wp_enqueue_media();
		
		//custom add image box css
		wp_enqueue_style('risp-meta-css', RISP_PLUGIN_URL.'css/risp-meta.css');
		
		//font awesome css
		wp_enqueue_style('risp-font-awesome-4', RISP_PLUGIN_URL.'css/font-awesome/css/font-awesome.min.css');

		//tool-tip js & css
		wp_enqueue_script('risp-tool-tip-js',RISP_PLUGIN_URL.'tooltip/jquery.darktooltip.min.js', array('jquery'));
		wp_enqueue_style('risp-tool-tip-css', RISP_PLUGIN_URL.'tooltip/darktooltip.min.css');
		
		//color-picker css n js
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'risp-color-picker-script', plugins_url('js/wl-color-picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
	}
	
	// Register Custom Post Type
	public function ResponsiveImageSliderPro() {
		$labels = array(
			'name' => _x( 'Ultimate Responsive Image Slider Pro', RISP_TEXT_DOMAIN ),
			'singular_name' => _x( 'Ultimate Responsive Image Slider Pro', RISP_TEXT_DOMAIN ),
			'add_new' => __( 'Add New Image Slider', RISP_TEXT_DOMAIN ),
			'add_new_item' => __( 'Add New Image Slider', RISP_TEXT_DOMAIN ),
			'edit_item' => __( 'Edit Image Slider', RISP_TEXT_DOMAIN ),
			'new_item' => __( 'New Image Slider', RISP_TEXT_DOMAIN ),
			'view_item' => __( 'View Image Slider', RISP_TEXT_DOMAIN ),
			'search_items' => __( 'Search Image Slider', RISP_TEXT_DOMAIN ),
			'not_found' => __( 'No Image Slider found', RISP_TEXT_DOMAIN ),
			'not_found_in_trash' => __( 'No Image Slider found in Trash', RISP_TEXT_DOMAIN ),
			'parent_item_colon' => __( 'Parent Image Slider:', RISP_TEXT_DOMAIN ),
			'all_items' => __( 'All Image Sliders', RISP_TEXT_DOMAIN ),
			'menu_name' => _x( 'UR Image Slider Pro', RISP_TEXT_DOMAIN ),
		);

		$args = array(
			'labels' => $labels,
			'hierarchical' => false,
			'supports' => array( 'title' ),
			'public' => false,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 10,
			'menu_icon' => 'dashicons-format-gallery',
			'show_in_nav_menus' => false,
			'publicly_queryable' => false,
			'exclude_from_search' => true,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => false,
			'capability_type' => 'post'
		);

        register_post_type( 'ris_gallery', $args );
        add_filter( 'manage_edit-risp_gallery_columns', array(&$this, 'risp_gallery_columns' )) ;
        add_action( 'manage_risp_gallery_posts_custom_column', array(&$this, 'risp_gallery_manage_columns' ), 10, 2 );
	}
	
	function risp_gallery_columns( $columns ){
        $columns = array(
            'cb' => '<input type="checkbox" />',
            'title' => __( 'Slider Title', RISP_TEXT_DOMAIN ),
            'shortcode' => __( 'Copy Slider Shortcode', RISP_TEXT_DOMAIN ),
            'date' => __( 'Date', RISP_TEXT_DOMAIN )
        );
        return $columns;
    }

    function risp_gallery_manage_columns( $column, $post_id ){
        global $post;
        switch( $column ) {
          case 'shortcode' :
            echo '<input type="text" value="[URISP id='.$post_id.']" readonly="readonly" />';
            break;
          default :
            break;
        }
    }
	
	public function risp_add_all_meta_boxes() {
		add_meta_box( __('Add Images', RISP_TEXT_DOMAIN), __('Add Images', RISP_TEXT_DOMAIN), array(&$this, 'risp_generate_add_image_meta_box_function'), 'ris_gallery', 'normal', 'low' );
		add_meta_box( __('Apply Setting On Ultimate Responsive Image Slider', RISP_TEXT_DOMAIN), __('Apply Setting On Ultimate Responsive Image Slider', RISP_TEXT_DOMAIN), array(&$this, 'risp_settings_meta_box_function'), 'ris_gallery', 'normal', 'low');
		add_meta_box ( __('Copy Image Slider Shortcode', RISP_TEXT_DOMAIN), __('Copy Image Slider Shortcode', RISP_TEXT_DOMAIN), array(&$this, 'risp_shotcode_meta_box_function'), 'ris_gallery', 'side', 'low');
	}

	/**
	 * This function display Add New Image interface
	 * Also loads all saved gallery photos into photo gallery
	 */
    public function risp_generate_add_image_meta_box_function($post) { ?>
		<div id="rpggallery_container">
			<input id="risp_delete_all_button" class="button" type="button" value="<?php _e('Delete All', RISP_TEXT_DOMAIN); ?>" rel="">
			<input type="hidden" id="risp_wl_action" name="risp_wl_action" value="wl-save-settings">
            <ul id="risp_gallery_thumbs" class="clearfix">
				<?php
				/* load saved photos into risp */
				$RISP_AllPhotosDetails = unserialize(base64_decode(get_post_meta( $post->ID, 'ris_all_photos_details', true)));
				
				$TotalImages =  get_post_meta( $post->ID, 'ris_total_images_count', true );
				if($TotalImages) {
					foreach($RISP_AllPhotosDetails as $RISP_SinglePhotoDetails) {
						$name = $RISP_SinglePhotoDetails['rpgp_image_label'];
						$desc = $RISP_SinglePhotoDetails['rpgp_image_desc'];						
						$UniqueString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
						$url = $RISP_SinglePhotoDetails['rpgp_image_url'];
						$url1 = $RISP_SinglePhotoDetails['rpggallery_admin_thumb'];
						//$link = $RISP_SinglePhotoDetails['rpgp_external_link'];
							// if(isset($RISP_Gallery_Settings['rpgp_external_link'])){
							// 		$link = $RISP_SinglePhotoDetails['rpgp_external_link'];
							// }else{
							// 	$link = "";
							// }
						if(!empty($RISP_SinglePhotoDetails['rpgp_external_link'])){
									$link = $RISP_SinglePhotoDetails['rpgp_external_link'];
							}else{
								$link = "";
							}
						
						?>						
						<li class="risp-image-entry" id="rpg_img">
							<a class="gallery_remove rpggallery_remove" href="#gallery_remove" id="rpg_remove_bt" ><img src="<?php echo  RISP_PLUGIN_URL.'img/Close-icon.png'; ?>" /></a>
							<div class="" >
								<img src="<?php echo $url1; ?>" class="risp-meta-image" alt=""  style="">
								<input type="hidden" id="unique_string[]" name="unique_string[]" value="<?php echo $UniqueString; ?>" />
							</div>
							<div class="" >
								<input type="text" id="urisp_image_url[]" name="urisp_image_url[]" class="rpg_label_text"  value="<?php echo $url; ?>"  readonly="readonly" style="display:none;" />
								<input type="text" id="rpggallery_admin_thumb[]" name="rpggallery_admin_thumb[]" class="rpg_label_text"  value="<?php echo $url1; ?>"  readonly="readonly" style="display:none;" />
								<p>
									<label><?php _e('Slide Title', RISP_TEXT_DOMAIN); ?></label>
									<input type="text" id="rpgp_image_label[]" name="rpgp_image_label[]" value="<?php echo htmlentities($name); ?>" placeholder="<?php _e('Enter Slide Title', RISP_TEXT_DOMAIN); ?>" class="rpg_label_text">
								</p>
								<p>
									<label><?php _e('Slide Descriptions', RISP_TEXT_DOMAIN); ?></label>
									<textarea rows="4" cols="50" id="rpgp_image_desc[]" name="rpgp_image_desc[]" placeholder="<?php _e('Enter Slide Descriptions', RISP_TEXT_DOMAIN); ?>" class="rpg_label_text"><?php echo htmlentities($desc); ?></textarea>
								</p>
								<p>
									<label><?php _e('Slide Link URL', RISP_TEXT_DOMAIN); ?></label>
									<input type="text" id="rpgp_external_link[]" name="rpgp_external_link[]" value="<?php echo $link; ?>" placeholder="<?php _e('Enter Slide Link URL', RISP_TEXT_DOMAIN); ?>" class="rpg_label_text">
								</p>
							</div>
						</li>
						<?php
					} // end of foreach
				} else {
					$TotalImages = 0;
				}
				?>
            </ul>
        </div>
		
		<!--Add New Image Button-->
		<div class="risp-image-entry add_rpg_new_image" id="risp_gallery_upload_button" data-uploader_title="Upload Image" data-uploader_button_text="Select" >
			<div class="dashicons dashicons-plus"></div>
			<p>
				<?php _e('Add New Images', RISP_TEXT_DOMAIN); ?>
			</p>
		</div>
		<div style="clear:left;"></div>
        <?php
    }
	
	/**
	 * This function display Add New Image interface
	 * Also loads all saved slide iamge into slider
	 */
    public function risp_settings_meta_box_function($post) { 
		require_once('ultimate-responsive-image-slider-pro-settings-meta-box.php');
	}
	
	public function risp_shotcode_meta_box_function() { ?>
		<p><?php _e("Copy below shortcode in any Page/Post to publish your slider", RISP_TEXT_DOMAIN);?></p>
		<input readonly="readonly" type="text" value="<?php echo "[URISP id=".get_the_ID()."]"; ?>">
		<?php 
	}	

	public function risp_admin_thumb($id) {
		$image  = wp_get_attachment_image_src($id, 'rpggallery_admin_original', true);
        $image1 = wp_get_attachment_image_src($id, 'rpggallery_admin_thumb', true);
		$UniqueString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
        ?>
		<li class="risp-image-entry" id="rpg_img">
			<a class="gallery_remove rpggallery_remove" href="#gallery_remove" id="rpg_remove_bt" ><img src="<?php echo  RISP_PLUGIN_URL.'img/Close-icon.png'; ?>" /></a>
			<div class="" >
				<img src="<?php echo $image1[0]; ?>" class="risp-meta-image" alt=""  style="">
			</div>
			<div class="" >
				<input type="text" id="urisp_image_url[]" name="urisp_image_url[]" class="rpg_label_text"  value="<?php echo $image[0]; ?>"  readonly="readonly" style="display:none;" />
				<input type="text" id="rpggallery_admin_thumb[]" name="rpggallery_admin_thumb[]" class="rpg_label_text"  value="<?php echo $image1[0]; ?>"  readonly="readonly" style="display:none;" />
				<p>
					<label><?php _e('Slide Title', RISP_TEXT_DOMAIN); ?></label>
					<input type="text" id="rpgp_image_label[]" name="rpgp_image_label[]" placeholder="<?php _e('Enter Slide Title Her', RISP_TEXT_DOMAIN); ?>e" class="rpg_label_text">
				</p>
				<p>
					<label><?php _e('Slide Description', RISP_TEXT_DOMAIN); ?></label>
					<textarea rows="4" cols="50" id="rpgp_image_desc[]" name="rpgp_image_desc[]" placeholder="<?php _e('Enter Slide Description Here', RISP_TEXT_DOMAIN); ?>" class="rpg_label_text"></textarea>
				</p>
				<p>
					<label><?php _e('Slide Link URL', RISP_TEXT_DOMAIN); ?></label>
					<input type="text" id="rpgp_external_link[]" name="rpgp_external_link[]" placeholder="<?php _e('Enter Slide Link URL', RISP_TEXT_DOMAIN); ?>" class="rpg_label_text">
				</p>
			</div>
		</li>
        <?php
    }
	
	
    public function risp_ajax_get_thumbnail() {
        echo $this->risp_admin_thumb($_POST['imageid']);
        die;
    }

    public function risp_add_image_meta_box_save($PostID) {
		if(isset($PostID) && isset($_POST['risp_wl_action'])) {
			$TotalImages = count($_POST['urisp_image_url']);
			$ImagesArray = array();
			if($TotalImages) {
				for($i=0; $i < $TotalImages; $i++) {
					$image_label = stripslashes($_POST['rpgp_image_label'][$i]);
					$image_desc = stripslashes($_POST['rpgp_image_desc'][$i]);
					$url = $_POST['urisp_image_url'][$i];
					$url1 = $_POST['rpggallery_admin_thumb'][$i];
					$link = $_POST['rpgp_external_link'][$i];
					$ImagesArray[] = array(
						'rpgp_image_label' => $image_label,
						'rpgp_image_desc' => $image_desc,
						'rpgp_image_url' => $url,
						'rpggallery_admin_thumb' => $url1,
						'rpgp_external_link' => $link
					);
				}
				update_post_meta($PostID, 'ris_all_photos_details', base64_encode(serialize($ImagesArray)));
				update_post_meta($PostID, 'ris_total_images_count', $TotalImages);
			} else {
				$TotalImages = 0;
				update_post_meta($PostID, 'ris_total_images_count', $TotalImages);
				$ImagesArray = array();
				update_post_meta($PostID, 'ris_all_photos_details', base64_encode(serialize($ImagesArray)));
			}
		}
    }
	
	//save settings meta box values
	public function risp_settings_meta_save($PostID) {
		if(isset($PostID) && isset($_POST['wl-slider-layout'])) {
			$RISP_Slider_Layout				= $_POST['wl-slider-layout'];
			$RISP_Slide_In_Title_Color     	= $_POST['wl-slide-in-title-color'];
			$RISP_Slide_In_Title_BG_Color   = $_POST['wl-slide-in-title-bg-color'];
			$RISP_Slide_In_Desc_Color      	= $_POST['wl-slide-in-desc-color'];
			$RISP_Slide_In_Desc_BG_Color    = $_POST['wl-slide-in-desc-bg-color'];
			$RISP_Thumbnail_BG_Color		= $_POST['wl-thumb-bg-color'];
			$RISP_Thumbnail_Title_Color     = $_POST['wl-thumb-title-color'];
			$RISP_Thumbnail_Desc_Color		= $_POST['wl-thumb-desc-color'];
			$RISP_BG_Color_Opacity			= $_POST['wl-bg-color-opacity'];
			$RISP_Read_More_Link_ON			= $_POST['wl-read-more-link-on'];
			$RISP_Read_More_Link_Text		= $_POST['wl-read-more-link-text'];
			$RISP_Read_More_Link_Color		= $_POST['wl-read-more-link-color'];
			$RISP_Read_More_Link_Open		= $_POST['wl-read-more-link-open'];
			$RISP_Naviagtion_Button_Color	= $_POST['wl-navigation-button-color'];
			$RISP_Naviagtion_Button_Size	= $_POST['wl-navigation-button-size'];
			$RISP_Naviagtion_Arrow_Color	= $_POST['wl-navigation-arrow-color'];
			$RISP_Lightbox_Preview			= $_POST['wl-light-box-preview'];
			$RISP_Fullscreeen				= $_POST['wl-fullscreen'];
			$RISP_Font_Style				= $_POST['wl-font-style'];
			$RISP_Custom_CSS				= $_POST['wl-custom-css-style'];
			
			//Layout 1
			if($RISP_Slider_Layout == 1) {
				$RISP_L1_Text_Alignment				=	$_POST['wl-l1-text-alignment'];
				$RISP_L1_Title_Transition			=	$_POST['wl-l1-title-transition'];
				$RISP_L1_Description_Transition		=	$_POST['wl-l1-description-transition'];
				$RISP_L1_Auto_Slideshow				=	$_POST['wl-l1-auto-slide'];
				$RISP_L1_Slide_Order				= 	$_POST['wl-l1-slide-order'];
				$RISP_L1_Slide_Distance				=	$_POST['wl-l1-slide-distance'];
				$RISP_L1_Thumbnail_Style_Color		=	$_POST['wl-l1-thumbnail-style-color'];
				$RISP_L1_Sliding_Arrow				=	$_POST['wl-l1-sliding-arrow'];
				$RISP_L1_Slider_Navigation			=	$_POST['wl-l1-navigation'];
				$RISP_L1_Navigation_Button			=	$_POST['wl-l1-navigation-button'];
				$RISP_L1_Navigation_Button_Style	=	$_POST['wl-l1-navigation-style'];
				$RISP_L1_Slider_Transition_Speed	= 	$_POST['wl-l1-slider-transition-speed'];
				$RISP_L1_Slider_Transition_Effect	= 	$_POST['wl-l1-slider-transition-effect'];
				$RISP_L1_Slider_Width				=	$_POST['wl-l1-slider-width'];
				$RISP_L1_Width						=	$_POST['wl-l1-width'];
				$RISP_L1_Slider_Height				=	$_POST['wl-l1-slider-height'];
				$RISP_L1_Height						=	$_POST['wl-l1-height'];
				
				$RISP_Settings_Array = serialize( array(
					'RISP_L1_Text_Alignment'  			=> $RISP_L1_Text_Alignment,
					'RISP_L1_Title_Transition'  		=> $RISP_L1_Title_Transition,
					'RISP_L1_Description_Transition'	=> $RISP_L1_Description_Transition,
					'RISP_L1_Auto_Slideshow'  			=> $RISP_L1_Auto_Slideshow,
					'RISP_L1_Slide_Order'  				=> $RISP_L1_Slide_Order,
					'RISP_L1_Slide_Distance'  			=> $RISP_L1_Slide_Distance,
					'RISP_L1_Thumbnail_Style_Color'		=> $RISP_L1_Thumbnail_Style_Color,
					'RISP_L1_Sliding_Arrow'  			=> $RISP_L1_Sliding_Arrow,
					'RISP_L1_Slider_Navigation'  		=> $RISP_L1_Slider_Navigation,
					'RISP_L1_Navigation_Button'  		=> $RISP_L1_Navigation_Button,
					'RISP_L1_Navigation_Button_Style'  	=> $RISP_L1_Navigation_Button_Style,
					'RISP_L1_Slider_Transition_Speed'	=> $RISP_L1_Slider_Transition_Speed,
					'RISP_L1_Slider_Transition_Effect'	=> $RISP_L1_Slider_Transition_Effect,
					'RISP_L1_Slider_Width'  			=> $RISP_L1_Slider_Width,
					'RISP_L1_Width'  					=> $RISP_L1_Width,
					'RISP_L1_Slider_Height'  			=> $RISP_L1_Slider_Height,
					'RISP_L1_Height'  					=> $RISP_L1_Height,
					
					'RISP_Slider_Layout'  				=> $RISP_Slider_Layout,
					'RISP_Slide_In_Title_Color'     	=> $RISP_Slide_In_Title_Color,
					'RISP_Slide_In_Title_BG_Color'   	=> $RISP_Slide_In_Title_BG_Color,
					'RISP_Slide_In_Desc_Color'      	=> $RISP_Slide_In_Desc_Color,
					'RISP_Slide_In_Desc_BG_Color'    	=> $RISP_Slide_In_Desc_BG_Color,
					'RISP_Thumbnail_BG_Color'			=> $RISP_Thumbnail_BG_Color,
					'RISP_Thumbnail_Title_Color'     	=> $RISP_Thumbnail_Title_Color,
					'RISP_Thumbnail_Desc_Color'			=> $RISP_Thumbnail_Desc_Color,
					'RISP_BG_Color_Opacity'				=> $RISP_BG_Color_Opacity,
					'RISP_Read_More_Link_ON'			=> $RISP_Read_More_Link_ON,
					'RISP_Read_More_Link_Text'			=> $RISP_Read_More_Link_Text,
					'RISP_Read_More_Link_Color'			=> $RISP_Read_More_Link_Color,
					'RISP_Read_More_Link_Open'			=> $RISP_Read_More_Link_Open,
					'RISP_Naviagtion_Button_Color'		=> $RISP_Naviagtion_Button_Color,
					'RISP_Naviagtion_Button_Size'		=> $RISP_Naviagtion_Button_Size,
					'RISP_Naviagtion_Arrow_Color'		=> $RISP_Naviagtion_Arrow_Color,
					'RISP_Lightbox_Preview'  			=> $RISP_Lightbox_Preview,
					'RISP_Fullscreeen'  				=> $RISP_Fullscreeen,
					'RISP_Font_Style'  					=> $RISP_Font_Style,
					'RISP_Custom_CSS'  					=> $RISP_Custom_CSS,
				) );
			}
			
			//Layout 2
			if($RISP_Slider_Layout == 2) {
				$RISP_L2_Auto_Slideshow				=	$_POST['wl-l2-auto-slide'];
				$RISP_L2_Slide_Order				= 	$_POST['wl-l2-slide-order'];
				$RISP_L2_Slide_Distance				=	$_POST['wl-l2-slide-distance'];
				$RISP_L2_Sliding_Arrow				=	$_POST['wl-l2-sliding-arrow'];
				$RISP_L2_Navigation_Button			=	$_POST['wl-l2-navigation-button'];
				$RISP_L2_Navigation_Button_Style	=	$_POST['wl-l2-navigation-style'];
				$RISP_L2_Slider_Transition_Speed	= 	$_POST['wl-l2-slider-transition-speed'];
				$RISP_L2_Slider_Transition_Effect	= 	$_POST['wl-l2-slider-transition-effect'];
				$RISP_L2_Slider_Width				=	$_POST['wl-l2-slider-width'];
				$RISP_L2_Width						=	$_POST['wl-l2-width'];
				$RISP_L2_Slider_Height				=	$_POST['wl-l2-slider-height'];
				$RISP_L2_Height						=	$_POST['wl-l2-height'];
				
				$RISP_Settings_Array = serialize( array(
					'RISP_L2_Auto_Slideshow'  			=> $RISP_L2_Auto_Slideshow,
					'RISP_L2_Slide_Order'  				=> $RISP_L2_Slide_Order,
					'RISP_L2_Slide_Distance'  			=> $RISP_L2_Slide_Distance,
					'RISP_L2_Sliding_Arrow'  			=> $RISP_L2_Sliding_Arrow,
					'RISP_L2_Navigation_Button'			=> $RISP_L2_Navigation_Button,
					'RISP_L2_Navigation_Button_Style'	=> $RISP_L2_Navigation_Button_Style,
					'RISP_L2_Slider_Transition_Speed'	=> $RISP_L2_Slider_Transition_Speed,
					'RISP_L2_Slider_Transition_Effect'	=> $RISP_L2_Slider_Transition_Effect,
					'RISP_L2_Slider_Width'  			=> $RISP_L2_Slider_Width,
					'RISP_L2_Width'  					=> $RISP_L2_Width,
					'RISP_L2_Slider_Height'  			=> $RISP_L2_Slider_Height,
					'RISP_L2_Height'		  			=> $RISP_L2_Height,
					// 'RISP_L2_Height'		  			=> '200',
					
					'RISP_Slider_Layout'  				=> $RISP_Slider_Layout,
					'RISP_Slide_In_Title_Color'     	=> $RISP_Slide_In_Title_Color,
					'RISP_Slide_In_Title_BG_Color'   	=> $RISP_Slide_In_Title_BG_Color,
					'RISP_Slide_In_Desc_Color'      	=> $RISP_Slide_In_Desc_Color,
					'RISP_Slide_In_Desc_BG_Color'    	=> $RISP_Slide_In_Desc_BG_Color,
					'RISP_Thumbnail_BG_Color'			=> $RISP_Thumbnail_BG_Color,
					'RISP_Thumbnail_Title_Color'     	=> $RISP_Thumbnail_Title_Color,
					'RISP_Thumbnail_Desc_Color'			=> $RISP_Thumbnail_Desc_Color,
					'RISP_BG_Color_Opacity'				=> $RISP_BG_Color_Opacity,
					'RISP_Read_More_Link_ON'			=> $RISP_Read_More_Link_ON,
					'RISP_Read_More_Link_Text'			=> $RISP_Read_More_Link_Text,
					'RISP_Read_More_Link_Color'			=> $RISP_Read_More_Link_Color,
					'RISP_Read_More_Link_Open'			=> $RISP_Read_More_Link_Open,
					'RISP_Naviagtion_Button_Color'		=> $RISP_Naviagtion_Button_Color,
					'RISP_Naviagtion_Button_Size'		=> $RISP_Naviagtion_Button_Size,
					'RISP_Naviagtion_Arrow_Color'		=> $RISP_Naviagtion_Arrow_Color,
					'RISP_Lightbox_Preview'  			=> $RISP_Lightbox_Preview,
					'RISP_Fullscreeen'  				=> $RISP_Fullscreeen,
					'RISP_Font_Style'  					=> $RISP_Font_Style,
					'RISP_Custom_CSS'  					=> $RISP_Custom_CSS,
				) );
			}
			
			//Layout 3
			if($RISP_Slider_Layout == 3) {
				$RISP_L3_Text_Alignment				=	$_POST['wl-l3-text-alignment'];
				$RISP_L3_Title_Transition			=	$_POST['wl-l3-title-transition'];
				$RISP_L3_Description_Transition		=	$_POST['wl-l3-desc-transition'];
				$RISP_L3_Auto_Slideshow				=	$_POST['wl-l3-auto-slide'];
				$RISP_L3_Slide_Order				= 	$_POST['wl-l3-slide-order'];
				$RISP_L3_Slide_Distance				=	$_POST['wl-l3-slide-distance'];
				$RISP_L3_Navigation_Position		=	$_POST['wl-l3-navigation-position'];
				$RISP_L3_Thumbnail_Style			=	$_POST['wl-l3-thumbnail-style'];
				$RISP_L3_Thumbnail_Style_Color		=	$_POST['wl-l3-thumbnail-style-color'];
				$RISP_L3_Thumbnail_Width			=	$_POST['wl-l3-thumbnail-width'];
				$RISP_L3_Thumbnail_Height			=	$_POST['wl-l3-thumbnail-height'];
				$RISP_L3_Sliding_Arrow				=	$_POST['wl-l3-sliding-arrow'];
				$RISP_L3_Slider_Navigation			=	$_POST['wl-l3-navigation'];
				$RISP_L3_Navigation_Button			=	$_POST['wl-l3-navigation-button'];
				$RISP_L3_Navigation_Button_Style	=	$_POST['wl-l3-navigation-style'];
				$RISP_L3_Slider_Transition_Speed	= 	$_POST['wl-l3-slider-transition-speed'];
				$RISP_L3_Slider_Transition_Effect	= 	$_POST['wl-l3-slider-transition-effect'];
				$RISP_L3_Slider_Width				=	$_POST['wl-l3-slider-width'];
				$RISP_L3_Width						=	$_POST['wl-l3-width'];
				$RISP_L3_Slider_Height				=	$_POST['wl-l3-slider-height'];
				$RISP_L3_Height						=	$_POST['wl-l3-height'];
				
				$RISP_Settings_Array = serialize( array(
					'RISP_L3_Text_Alignment'  			=> $RISP_L3_Text_Alignment,
					'RISP_L3_Title_Transition'  		=> $RISP_L3_Title_Transition,
					'RISP_L3_Description_Transition'	=> $RISP_L3_Description_Transition,
					'RISP_L3_Auto_Slideshow'  			=> $RISP_L3_Auto_Slideshow,
					'RISP_L3_Slide_Order'  				=> $RISP_L3_Slide_Order,
					'RISP_L3_Slide_Distance'  			=> $RISP_L3_Slide_Distance,
					'RISP_L3_Navigation_Position'		=> $RISP_L3_Navigation_Position,
					'RISP_L3_Thumbnail_Style'			=> $RISP_L3_Thumbnail_Style,
					'RISP_L3_Thumbnail_Style_Color'		=> $RISP_L3_Thumbnail_Style_Color,
					'RISP_L3_Thumbnail_Width'			=> $RISP_L3_Thumbnail_Width,
					'RISP_L3_Thumbnail_Height'			=> $RISP_L3_Thumbnail_Height,
					'RISP_L3_Sliding_Arrow'  			=> $RISP_L3_Sliding_Arrow,
					'RISP_L3_Slider_Navigation'  		=> $RISP_L3_Slider_Navigation,
					'RISP_L3_Navigation_Button'  		=> $RISP_L3_Navigation_Button,
					'RISP_L3_Navigation_Button_Style'  	=> $RISP_L3_Navigation_Button_Style,
					'RISP_L3_Slider_Transition_Speed'	=> $RISP_L3_Slider_Transition_Speed,
					'RISP_L3_Slider_Transition_Effect'	=> $RISP_L3_Slider_Transition_Effect,
					'RISP_L3_Slider_Width'  			=> $RISP_L3_Slider_Width,
					'RISP_L3_Width'  					=> $RISP_L3_Width,
					'RISP_L3_Slider_Height'  			=> $RISP_L3_Slider_Height,
					'RISP_L3_Height'  					=> $RISP_L3_Height,
					
					'RISP_Slider_Layout'  				=> $RISP_Slider_Layout,					
					'RISP_Slide_In_Title_Color'     	=> $RISP_Slide_In_Title_Color,
					'RISP_Slide_In_Title_BG_Color'   	=> $RISP_Slide_In_Title_BG_Color,
					'RISP_Slide_In_Desc_Color'      	=> $RISP_Slide_In_Desc_Color,
					'RISP_Slide_In_Desc_BG_Color'    	=> $RISP_Slide_In_Desc_BG_Color,
					'RISP_Thumbnail_BG_Color'			=> $RISP_Thumbnail_BG_Color,
					'RISP_Thumbnail_Title_Color'     	=> $RISP_Thumbnail_Title_Color,
					'RISP_Thumbnail_Desc_Color'			=> $RISP_Thumbnail_Desc_Color,
					'RISP_BG_Color_Opacity'				=> $RISP_BG_Color_Opacity,
					'RISP_Read_More_Link_ON'			=> $RISP_Read_More_Link_ON,
					'RISP_Read_More_Link_Text'			=> $RISP_Read_More_Link_Text,
					'RISP_Read_More_Link_Color'			=> $RISP_Read_More_Link_Color,
					'RISP_Read_More_Link_Open'			=> $RISP_Read_More_Link_Open,
					'RISP_Naviagtion_Button_Color'		=> $RISP_Naviagtion_Button_Color,
					'RISP_Naviagtion_Button_Size'		=> $RISP_Naviagtion_Button_Size,
					'RISP_Naviagtion_Arrow_Color'		=> $RISP_Naviagtion_Arrow_Color,
					'RISP_Lightbox_Preview'  			=> $RISP_Lightbox_Preview,
					'RISP_Fullscreeen'  				=> $RISP_Fullscreeen,
					'RISP_Font_Style'  					=> $RISP_Font_Style,
					'RISP_Custom_CSS'  					=> $RISP_Custom_CSS,
				) );
			}
			
			//Layout 4
			if($RISP_Slider_Layout == 4) {				
				$RISP_L4_Auto_Slideshow				=	$_POST['wl-l4-auto-slide'];
				$RISP_L4_Slide_Order				= 	$_POST['wl-l4-slide-order'];
				$RISP_L4_Slide_Distance				=	$_POST['wl-l4-slide-distance'];
				$RISP_L4_Sliding_Arrow				=	$_POST['wl-l4-sliding-arrow'];
				$RISP_L4_Navigation_Button			=	$_POST['wl-l4-navigation-button'];
				$RISP_L4_Navigation_Button_Style	=	$_POST['wl-l4-navigation-style'];
				$RISP_L4_Slider_Transition_Speed	= 	$_POST['wl-l4-slider-transition-speed'];
				$RISP_L4_Slider_Transition_Effect	= 	$_POST['wl-l4-slider-transition-effect'];
				$RISP_L4_Slider_Width				=	$_POST['wl-l4-slider-width'];
				$RISP_L4_Width						=	$_POST['wl-l4-width'];
				$RISP_L4_Slider_Height				=	$_POST['wl-l4-slider-height'];
				$RISP_L4_Height						=	$_POST['wl-l4-height'];
				
				$RISP_Settings_Array = serialize( array(
					'RISP_L4_Auto_Slideshow'  		=> $RISP_L4_Auto_Slideshow,
					'RISP_L4_Slide_Order'  			=> $RISP_L4_Slide_Order,
					'RISP_L4_Slide_Distance'  		=> $RISP_L4_Slide_Distance,
					'RISP_L4_Sliding_Arrow'  		=> $RISP_L4_Sliding_Arrow,
					'RISP_L4_Navigation_Button'		=> $RISP_L4_Navigation_Button,
					'RISP_L4_Navigation_Button_Style'=> $RISP_L4_Navigation_Button_Style,
					'RISP_L4_Slider_Transition_Speed'=> $RISP_L4_Slider_Transition_Speed,
					'RISP_L4_Slider_Transition_Effect'=> $RISP_L4_Slider_Transition_Effect,
					'RISP_L4_Slider_Width'  		=> $RISP_L4_Slider_Width,
					'RISP_L4_Width'  				=> $RISP_L4_Width,
					'RISP_L4_Slider_Height'  		=> $RISP_L4_Slider_Height,
					'RISP_L4_Height'  				=> $RISP_L4_Height,

					'RISP_Slider_Layout'  			=> $RISP_Slider_Layout,
					'RISP_Slide_In_Title_Color'     => $RISP_Slide_In_Title_Color,
					'RISP_Slide_In_Title_BG_Color'  => $RISP_Slide_In_Title_BG_Color,
					'RISP_Slide_In_Desc_Color'      => $RISP_Slide_In_Desc_Color,
					'RISP_Slide_In_Desc_BG_Color'   => $RISP_Slide_In_Desc_BG_Color,
					'RISP_Thumbnail_BG_Color'		=> $RISP_Thumbnail_BG_Color,
					'RISP_Thumbnail_Title_Color'    => $RISP_Thumbnail_Title_Color,
					'RISP_Thumbnail_Desc_Color'		=> $RISP_Thumbnail_Desc_Color,
					'RISP_BG_Color_Opacity'			=> $RISP_BG_Color_Opacity,
					'RISP_Read_More_Link_ON'		=> $RISP_Read_More_Link_ON,
					'RISP_Read_More_Link_Text'		=> $RISP_Read_More_Link_Text,
					'RISP_Read_More_Link_Color'		=> $RISP_Read_More_Link_Color,
					'RISP_Read_More_Link_Open'		=> $RISP_Read_More_Link_Open,
					'RISP_Naviagtion_Button_Color'	=> $RISP_Naviagtion_Button_Color,
					'RISP_Naviagtion_Button_Size'	=> $RISP_Naviagtion_Button_Size,
					'RISP_Naviagtion_Arrow_Color'	=> $RISP_Naviagtion_Arrow_Color,
					'RISP_Lightbox_Preview'  		=> $RISP_Lightbox_Preview,
					'RISP_Fullscreeen'  			=> $RISP_Fullscreeen,
					'RISP_Font_Style'  				=> $RISP_Font_Style,
					'RISP_Custom_CSS'  				=> $RISP_Custom_CSS,
				) );
			}
			
			//Layout 5
			if($RISP_Slider_Layout == 5) {				
				$RISP_L5_Auto_Slideshow				=	$_POST['wl-l5-auto-slide'];
				$RISP_L5_Slide_Order				= 	$_POST['wl-l5-slide-order'];
				$RISP_L5_Slide_Distance				=	$_POST['wl-l5-slide-distance'];
				$RISP_L5_Thumbnail_Style_Color		=	$_POST['wl-l5-thumbnail-style-color'];
				$RISP_L5_Sliding_Arrow				=	$_POST['wl-l5-sliding-arrow'];
				$RISP_L5_Sliding_Direction			=	$_POST['wl-l5-sliding-direction'];
				$RISP_L5_Navigation_Button			=	$_POST['wl-l5-navigation-button'];
				$RISP_L5_Navigation_Button_Style	=	$_POST['wl-l5-navigation-style'];
				$RISP_L5_Slider_Navigation			=	$_POST['wl-l5-navigation'];
				$RISP_L5_Slider_Navigation_Content	=	$_POST['wl-l5-navigation-content'];
				$RISP_L5_Slider_Navigation_Position	=	$_POST['wl-l5-navigation-position'];
				$RISP_L5_Slider_Transition_Speed	= 	$_POST['wl-l5-slider-transition-speed'];
				$RISP_L5_Slider_Transition_Effect	= 	$_POST['wl-l5-slider-transition-effect'];
				$RISP_L5_Slider_Width				=	$_POST['wl-l5-slider-width'];
				$RISP_L5_Width						=	$_POST['wl-l5-width'];
				$RISP_L5_Slider_Height				=	$_POST['wl-l5-slider-height'];
				$RISP_L5_Height						=	$_POST['wl-l5-height'];
				
				$RISP_Settings_Array = serialize( array(
					'RISP_L5_Auto_Slideshow'  				=> $RISP_L5_Auto_Slideshow,
					'RISP_L5_Slide_Order'  					=> $RISP_L5_Slide_Order,
					'RISP_L5_Slide_Distance'  				=> $RISP_L5_Slide_Distance,
					'RISP_L5_Thumbnail_Style_Color'			=> $RISP_L5_Thumbnail_Style_Color,
					'RISP_L5_Sliding_Arrow'  				=> $RISP_L5_Sliding_Arrow,
					'RISP_L5_Sliding_Direction'				=> $RISP_L5_Sliding_Direction,
					'RISP_L5_Navigation_Button'  			=> $RISP_L5_Navigation_Button,
					'RISP_L5_Navigation_Button_Style'  		=> $RISP_L5_Navigation_Button_Style,
					'RISP_L5_Slider_Navigation'  			=> $RISP_L5_Slider_Navigation,
					'RISP_L5_Slider_Navigation_Content'  	=> $RISP_L5_Slider_Navigation_Content,
					'RISP_L5_Slider_Navigation_Position'  	=> $RISP_L5_Slider_Navigation_Position,
					'RISP_L5_Slider_Transition_Speed'		=> $RISP_L5_Slider_Transition_Speed,
					'RISP_L5_Slider_Transition_Effect'		=> $RISP_L5_Slider_Transition_Effect,
					'RISP_L5_Slider_Width'  				=> $RISP_L5_Slider_Width,
					'RISP_L5_Width'  						=> $RISP_L5_Width,
					'RISP_L5_Slider_Height'  				=> $RISP_L5_Slider_Height,
					'RISP_L5_Height'  						=> $RISP_L5_Height,
					
					'RISP_Slider_Layout'  					=> $RISP_Slider_Layout,
					'RISP_Slide_In_Title_Color'     		=> $RISP_Slide_In_Title_Color,
					'RISP_Slide_In_Title_BG_Color'   		=> $RISP_Slide_In_Title_BG_Color,
					'RISP_Slide_In_Desc_Color'      		=> $RISP_Slide_In_Desc_Color,
					'RISP_Slide_In_Desc_BG_Color'    		=> $RISP_Slide_In_Desc_BG_Color,
					'RISP_Thumbnail_BG_Color'				=> $RISP_Thumbnail_BG_Color,
					'RISP_Thumbnail_Title_Color'     		=> $RISP_Thumbnail_Title_Color,
					'RISP_Thumbnail_Desc_Color'				=> $RISP_Thumbnail_Desc_Color,
					'RISP_BG_Color_Opacity'					=> $RISP_BG_Color_Opacity,
					'RISP_Read_More_Link_ON'				=> $RISP_Read_More_Link_ON,
					'RISP_Read_More_Link_Text'				=> $RISP_Read_More_Link_Text,
					'RISP_Read_More_Link_Color'				=> $RISP_Read_More_Link_Color,
					'RISP_Read_More_Link_Open'				=> $RISP_Read_More_Link_Open,
					'RISP_Naviagtion_Button_Color'			=> $RISP_Naviagtion_Button_Color,
					'RISP_Naviagtion_Button_Size'			=> $RISP_Naviagtion_Button_Size,
					'RISP_Naviagtion_Arrow_Color'			=> $RISP_Naviagtion_Arrow_Color,
					'RISP_Lightbox_Preview'  				=> $RISP_Lightbox_Preview,
					'RISP_Fullscreeen'  					=> $RISP_Fullscreeen,
					'RISP_Font_Style'  						=> $RISP_Font_Style,
					'RISP_Custom_CSS'  						=> $RISP_Custom_CSS,
				) );
			}
			
			$RISP_Gallery_Settings =  "WRIS_Gallery_Settings_".$PostID;
			update_post_meta($PostID, $RISP_Gallery_Settings, $RISP_Settings_Array);
		}
	}
}

global $URISP;
$URISP = URISP::forge();

/**
 * Hex Color code to RGB Color Code converter function
 */
if(!function_exists('URISPhex2rgb')) {
    function URISPhex2rgb($hex) {
       $hex = str_replace("#", "", $hex);
       if(strlen($hex) == 3) {
          $r = hexdec(substr($hex,0,1).substr($hex,0,1));
          $g = hexdec(substr($hex,1,1).substr($hex,1,1));
          $b = hexdec(substr($hex,2,1).substr($hex,2,1));
       } else {
          $r = hexdec(substr($hex,0,2));
          $g = hexdec(substr($hex,2,2));
          $b = hexdec(substr($hex,4,2));
       }
       $rgb = array($r, $g, $b);
       return $rgb; // returns an array with the rgb values
    }
}

/**
 * URISP Short Code [URISP]
 */
require_once("ultimate-responsive-image-slider-pro-short-code.php");

/**
 * URISP Shortcode Button On Page/Post
 */
add_action('media_buttons_context', 'add_urisp_custom_button');
function add_urisp_custom_button($context) {
  $img = plugins_url( '/img/slideshow_icon.png' , __FILE__ );
  $container_id = 'URISP';
  $title = __('Select Ultimate Responsive Image Slider Shortcode to insert into post', RISP_TEXT_DOMAIN);
  $context .= '<a class="button button-primary thickbox" title="$title" href="#TB_inline?width=400&inlineId='.$container_id.'">
		<span class="wp-media-buttons-icon" style="background: url('.$img.'); background-repeat: no-repeat; background-position: left bottom;"></span>
	Ultimate Responsive Image Slider Shortcode
	</a>';
  return $context;
}

add_action('admin_footer', 'add_urisp_inline_popup_content');
function add_urisp_inline_popup_content() { ?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#urisp-insert').on('click', function() {
			var id = jQuery('#urisp-select option:selected').val();
			window.send_to_editor('<p>[URISP id=' + id + ']</p>');
			tb_remove();
		})
	});
	</script>
	<div id="URISP" style="display:none;">
	  <h3><?php _e('Select Ultimate Responsive Image Slider Shortcode To Insert Into Content', RISP_TEXT_DOMAIN); ?></h3>
	  <?php 
		$all_posts = wp_count_posts( 'ris_gallery')->publish;
		$args = array('post_type' => 'ris_gallery', 'posts_per_page' =>$all_posts);
		global $URISP_Sliders;
		$URISP_Sliders = new WP_Query( $args );			
		if( $URISP_Sliders->have_posts() ) { ?>	
			<select id="urisp-select">
				<?php
				while ( $URISP_Sliders->have_posts() ) : $URISP_Sliders->the_post(); ?>
				<option value="<?php echo get_the_ID(); ?>"><?php the_title(); ?></option>
				<?php
				endwhile; 
				?>
			</select>
			<button class='button primary' id='urisp-insert'><?php _e('Insert Selected Shortcode', RISP_TEXT_DOMAIN); ?></button>
			<?php
		} else {
			_e('No Slider Found', R_I_S_P);
		}
		?>
	</div>
	<?php
}
?>