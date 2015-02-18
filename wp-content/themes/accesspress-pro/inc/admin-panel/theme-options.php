<?php
/**
 * AccessPress Pro Theme Options
 *
 * @package Accesspress Pro
 */

if ( is_admin() ) : // Load only if we are viewing an admin page

function accesspress_pro_admin_scripts() {
	wp_enqueue_media();
	wp_enqueue_script( 'accesspress_pro_custom_js', get_template_directory_uri().'/inc/admin-panel/js/custom.js', array( 'jquery', 'wp-color-picker' ) );
	wp_enqueue_script( 'accesspress_pro-media-uploader', get_template_directory_uri().'/inc/admin-panel/js/media-uploader.js', array( 'jquery' ) );
	
	
	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_style( 'accesspress_pro_admin_style',get_template_directory_uri().'/inc/admin-panel/css/admin.css' );
	wp_enqueue_style( 'fontawesome_style',get_template_directory_uri().'/css/font-awesome.min.css');

}
add_action('admin_enqueue_scripts', 'accesspress_pro_admin_scripts');



$accesspress_pro_options = array(
  'skins' => 'default',
  'responsive_design' => false,
  'show_comments' => false,
  'show_posted_date' => false,
  'enable_prev_next' => false,
  'media_upload' => '',
  'webpage_layout' => 'Fullwidth',
  'background_pattern' => 'pattern0',
  'read_more_text' => 'Read More',
  'archive_char' => '400',
  'header_style' => 'style1',
  'sticky_header' => false, 
  'show_search' => true,
  'logo_pading_top' => '0',
  'logo_pading_bottom' => '0',
  'logo_pading_left' => '0',
  'logo_pading_right' => '0',
  'nav_pading_top' => '10',
  'header_text' => 'Email:email@gmail.com',
  'google_map' => '',
  'footer_copyright' => get_bloginfo('name'),
  'right_footer_text' => 'Powered By <a href="http://accesspressthemes.com/">Accesspress Themes</a>',
  'h1_font_size' => '26',
  'h1_text_transform' => 'none',
  'h1_color' => '#333333',
  'h2_font_size' => '24',
  'h2_text_transform' => 'none',
  'h2_color' => '#333333',
  'h3_font_size' => '22',
  'h3_text_transform' => 'none',
  'h3_color' => '#333333',
  'h4_font_size' => '20',
  'h4_text_transform' => 'none',
  'h4_color' => '#333333',
  'h5_font_size' => '18',
  'h5_text_transform' => 'none',
  'h5_color' => '#333333',
  'h6_font_size' => '16',
  'h6_text_transform' => 'none',
  'h6_color' => '#333333',
  'heading_font' => 'Open Sans Condensed',
  'heading_font_weight' => '300',
  'body_font' => 'Open Sans',
  'body_font_weight' => '400',
  'body_font_size' => '14',
  'body_color' => '#666666',
  'show_breadcrumb' => false,
  'breadcrumb_seperator' => '/',
  'breadcrumb_home_text' => 'Home',
  'home_page_layout' => 'Default',
  'show_clients_logo' => true,
  'welcome_post' => '',
  'welcome_post_char' => '650',
  'welcome_post_readmore' => 'Read More',
  'event_page_title' => 'Latest Event',
  'no_of_event' => '3',
  'show_fontawesome' => false,
  'big_icons' => false,
  'featured_post_count' => '3',
  'featured_post1' => '',
  'featured_post1_icon' => '',
  'featured_post2' => '',
  'featured_post2_icon' => '',
  'featured_post3' => '',
  'featured_post3_icon' => '',
  'featured_post4' => '',
  'featured_post4_icon' => '',
  'featured_post_char' => '260',
  'featured_post_readmore' => 'Read More',
  'blog_cat' => '',
  'featured_bar' => false,
  'slider_mode' => 'slider_type2',
  'show_slider' => 'yes',
  'slider_show_controls' => 'yes2',
  'slider_show_pager' => 'yes1',
  'slider_show_pager_image' => 'no',
  'slider_auto' => 'yes3',
  'slider_speed' => '3000',
  'slider_caption' => 'yes4',
  'portfolio_fullwidth' => false,
  'portfolio_sidebar' => 'right-sidebar',
  'portfolio_layout' => 'portfolio_grid',
  'portfolio_grid_columns' => '3',
  'portfolio_grid_char' => '180',
  'portfolio_post_per_page' => '10',
  'portfolio_singlepage_left_sidebar' => 'left-sidebar',
  'portfolio_singlepage_right_sidebar' => 'right-sidebar',
  'portfolio_show_socials' => false,
  'portfolio_enable_prev_next' => false,
  'portfolio_show_featured_image' => false,
  'event_fullwidth' => false,
  'event_sidebar' => 'right-sidebar',
  'event_layout' => 'event_grid',
  'event_grid_columns' => '3',
  'event_char' => '180',
  'event_post_per_page' => '10',
  'event_singlepage_left_sidebar' => 'left-sidebar',
  'event_singlepage_right_sidebar' => 'right-sidebar',
  'event_show_socials' => false,
  'event_enable_prev_next' => false,
  'event_show_date' => false,
  'event_show_featured_image' => false,
  'faq_fullwidth' => false,
  'faq_answer_toggle' => 'faq_hide',
  'faq_right_sidebar' => 'right-sidebar',
  'calltoaction_bg_color' => '',
  'calltoaction_text_color' => '#FFFFFF',
  'calltoaction_font_size' => '26',
  'calltoaction_text' => 'Call To action Text',
  'calltoaction_text_align' => 'center',
  'calltoaction_read_more_text' => 'Read More',
  'calltoaction_read_more_link' => '',
  'client_slider_heading' => 'Our Clients',
  'disable_client_slider' => false,
  'show_social_header' => false,
  'facebook' => '',
  'twitter' => '',
  'gplus' => '',
  'youtube' => '',
  'pinterest' => '',
  'flickr' => '',
  'vimeo' => '',
  'stumbleupon' => '',
  'dribble' => '',
  'tumblr' => '',
  'linkedin' => '',
  'sound_cloud' => '',
  'skype' => '',
  'rss' => '',
  'custom_css' => '',
  'custom_code' => '',
  'share_publisher_id' => 'ra-536530f652c04fc6',
  'tc_activate' => '',
  'tc_text' => 'New website coming soon!',
  'tc_social_text' => 'Get in touch through our social networks.',
  'tc_bg_image' => '',
  'tc_bg_color' => '#DDDDDD',
  'tc_animation' => 'ticks',
  'tc_year' => date('Y'),
  'tc_month' => date('n'),
  'tc_day' => date('j'),
  'tc_hour' => date('G'),
  'tc_day_text' => 'Days',
  'tc_hours_text' => 'Hours',
  'tc_minutes_text' =>'Minutes',
  'tc_seconds_text' => 'Seconds',
  'tc_day_color' => '#666666',
  'tc_hours_color' => '#666666',
  'tc_minutes_color' =>'#666666',
  'tc_seconds_color' => '#666666',
  'tc_circle_color' => '#000000',
  'tc_show_social_icon' => true,
  'tc_text_color' => '#333333',
  'tc_background_repeat'=>'repeat',
  'welcome_post_content' => false,
  'lite_slider' => 'false'

);


add_action( 'admin_init', 'accesspress_pro_register_settings' );
add_action( 'admin_menu', 'accesspress_pro_theme_options' );

function accesspress_pro_register_settings() {
	register_setting( 'accesspress_pro_theme_options', 'accesspress_pro_options', 'accesspress_pro_validate_options' );
}

function accesspress_pro_theme_options() {
	// Add theme options page to the admin menu
	add_theme_page( __( 'Theme Options','accesspress_pro'), __( 'Theme Options','accesspress_pro'), 'edit_theme_options', 'theme_options', 'accesspress_pro_theme_options_page' );
}



// Store Posts in array
$accesspress_pro_postlist[0] = array(
	'value' => 0,
	'label' => '--choose--'
);
$arg = array('posts_per_page'   => -1);
$accesspress_pro_posts = get_posts($arg); $i = 1;
foreach( $accesspress_pro_posts as $accesspress_pro_post ) :
	$accesspress_pro_postlist[$accesspress_pro_post->ID] = array(
		'value' => $accesspress_pro_post->ID,
		'label' => $accesspress_pro_post->post_title
	);
	$i++;
endforeach;

$accesspress_pro_pagelist1 = array();
$arg = array('posts_per_page'   => -1);
$accesspress_pro_pages = get_pages($arg);
foreach( $accesspress_pro_pages as $accesspress_pro_page ) :
  $accesspress_pro_pagelist1[$accesspress_pro_page->ID] = array(
    'value' => $accesspress_pro_page->ID,
    'label' => $accesspress_pro_page->post_title
  );
endforeach;


$accesspress_pro_postpagelist = array_merge($accesspress_pro_postlist, $accesspress_pro_pagelist1);


// Store categories in array
$accesspress_pro_catlist[0] = array(
	'value' => 0,
	'label' => '--choose--'
);
$arg1 = array(
	'hide_empty' => 0,
	'orderby' => 'name',
  	'parent' => 0,
  	);
$accesspress_pro_cats = get_categories($arg1); $i = 1;

foreach( $accesspress_pro_cats as $accesspress_pro_cat ) :
	$accesspress_pro_catlist[$accesspress_pro_cat->cat_ID] = array(
		'value' => $accesspress_pro_cat->cat_ID,
		'label' => $accesspress_pro_cat->cat_name
	);
	$i++;
endforeach;

// Store slider setting in array
$accesspress_pro_slider = array(
	'yes' => array(
		'value' => 'yes',
		'label' => 'show'
	),
	'no' => array(
		'value' => 'no',
		'label' => 'hide'
	),
);

$accesspress_pro_slider_show_pager = array(
	'yes1' => array(
		'value' => 'yes1',
		'label' => 'yes'
	),
	'no1' => array(
		'value' => 'no1',
		'label' => 'no'
	),
);

$accesspress_pro_slider_show_controls = array(
	'yes2' => array(
		'value' => 'yes2',
		'label' => 'yes'
	),
	'no2' => array(
		'value' => 'no2',
		'label' => 'no'
	),
);

$accesspress_pro_slider_auto = array(
	'yes3' => array(
		'value' => 'yes3',
		'label' => 'yes'
	),
	'no3' => array(
		'value' => 'no3',
		'label' => 'no'
	),
);

$accesspress_pro_slider_caption = array(
	'yes4' => array(
		'value' => 'yes4',
		'label' => 'show'
	),
	'no4' => array(
		'value' => 'no4',
		'label' => 'hide'
	),
);


// Function to generate options page
function accesspress_pro_theme_options_page() {
	global $accesspress_pro_options, $accesspress_pro_postlist, $accesspress_pro_slider, $accesspress_pro_slider_show_pager, $accesspress_pro_slider_show_controls, $accesspress_pro_slider_auto, $accesspress_pro_slider_caption, $accesspress_pro_catlist,$wp_registered_sidebars, $accesspress_pro_postpagelist;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false; // This checks whether the form has just been submitted. ?>

	<div class="wrap" id="optionsframework-wrap">

	<div class="accesspress_pro-header">
		<div class="accesspress_pro-logo">
		<img src="<?php echo get_template_directory_uri();?>/inc/admin-panel/images/logo.png" alt="AccessPress Lite" />
		</div>

		<div class="ak-socials">
		<p><?php _e('Like/Follow our Page for New Updates','accesspress_pro'); ?></p>
			<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FAccessPress-Themes%2F1396595907277967&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;appId=1411139805828592" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:20px; width:50px " allowTransparency="true"></iframe>
			&nbsp;&nbsp;
			<a href="https://twitter.com/apthemes" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @apthemes</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	    </div>

		<div class="accesspress_pro_title"><?php echo wp_get_theme();  _e( ' Theme Options', 'accesspress_pro' ); ?></div>
	</div>

	<div class="clear"></div>

	<?php 	if ( false !== $_REQUEST['settings-updated'] ) : ?>
	<div class="updated fade"><p><strong><?php _e( 'Options saved' , 'accesspress_pro' ); ?></strong></p></div>
	<?php endif; // If the form has just been submitted, this shows the notification ?>

	<?php // Shows all the tabs of the theme options ?>
	<div class="wrapper-bg">
	<div class="nav-tab-wrapper">
	<a id="options-group-1-tab" class="options-nav-tab" href="#options-group-1"><i class="fa fa-cog"></i><?php _e('Basic Settings','accesspress_pro'); ?></a>
    <a id="options-group-2-tab" class="options-nav-tab" href="#options-group-2"><i class="fa fa-header"></i><?php _e('Header Settings','accesspress_pro'); ?></a>
    <a id="options-group-3-tab" class="options-nav-tab" href="#options-group-3"><i class="fa fa-code"></i><?php _e('Footer Settings','accesspress_pro'); ?></a>
    <a id="options-group-4-tab" class="options-nav-tab" href="#options-group-4"><i class="fa fa-language"></i><?php _e('Typography','accesspress_pro'); ?></a>
    <a id="options-group-5-tab" class="options-nav-tab" href="#options-group-5"><i class="fa fa fa-ellipsis-h"></i><?php _e('Breadcrumb Settings','accesspress_pro'); ?></a>
    <a id="options-group-6-tab" class="options-nav-tab" href="#options-group-6"><i class="fa fa-desktop"></i><?php _e('Home Page Settings','accesspress_pro'); ?></a>
	<a id="options-group-7-tab" class="options-nav-tab" href="#options-group-7"><i class="fa fa-film"></i><?php _e('Slider Image','accesspress_pro'); ?></a>
	<a id="options-group-8-tab" class="options-nav-tab" href="#options-group-8"><i class="fa fa-sliders"></i><?php _e('Slider Settings','accesspress_pro'); ?></a>
	<a id="options-group-9-tab" class="options-nav-tab" href="#options-group-9"><i class="fa fa-quote-left"></i><?php _e('Portfolio Settings','accesspress_pro'); ?></a>
	<a id="options-group-10-tab" class="options-nav-tab" href="#options-group-10"><i class="fa fa-calendar-o"></i><?php _e('Events Settings','accesspress_pro'); ?></a>
	<a id="options-group-11-tab" class="options-nav-tab" href="#options-group-11"><i class="fa fa-clock-o"></i><?php _e('Faq Settings','accesspress_pro'); ?></a>
	<a id="options-group-12-tab" class="options-nav-tab" href="#options-group-12"><i class="fa fa-paper-plane"></i><?php _e('Call To Action','accesspress_pro'); ?></a>
	<a id="options-group-13-tab" class="options-nav-tab" href="#options-group-13"><i class="fa fa-file-image-o"></i><?php _e('Client/Partner Logo','accesspress_pro'); ?></a>
	<a id="options-group-14-tab" class="options-nav-tab" href="#options-group-14"><i class="fa fa-share-alt"></i><?php _e('Social Links','accesspress_pro'); ?></a>
	<a id="options-group-15-tab" class="options-nav-tab" href="#options-group-15"><i class="fa fa-magic"></i><?php _e('Tools','accesspress_pro'); ?></a>
	<a id="options-group-16-tab" class="options-nav-tab" href="#options-group-16"><i class="fa fa-magic"></i><?php _e('Website Launch Countdown','accesspress_pro'); ?></a>
	<a id="options-group-17-tab" class="options-nav-tab" href="#options-group-17"><i class="fa fa-wordpress"></i><?php _e('About AccessPress Pro','accesspress_pro'); ?></a>
	</div>

	<div id="optionsframework-metabox">
		<div id="optionsframework" class="postbox">
			<form method="post" action="options.php">

			<?php $settings = get_option( 'accesspress_pro_options', $accesspress_pro_options ); ?>
			
			<?php settings_fields( 'accesspress_pro_theme_options' );
			/* This function outputs some hidden fields required by the form,
			including a nonce, a unique number used to ensure the form has been submitted from the admin page
			and not somewhere else, very important for security */ ?>

			<!-- Basic Settings -->
			<div id="options-group-1" class="group">
      <input id="tab_id" type="hidden" name="accesspress_pro_options[active_tab]" value="<?php echo $settings['active_tab']; ?>">
			<h3><?php _e('Basic Settings','accesspress_pro'); ?></h3>
					<div class="form-row">
          <?php 
          $accesspress_pro_skins = array(
            "default" => "#01AEFD",
            "skin1" => "#335567",
            "skin2" => "#07AD87",
            "skin3" => "#483274",
            "skin4" => "#05CAC2",
            "skin5" => "#3C90BE",
            "skin6" => "#EB583C",
            "skin7" => "#F88C00",
            "skin8" => "#0569B3",
            "skin9" => "#F1C40F"
            )
          ?>
          <label class="block"><?php _e('Select the Template color','accesspress_pro'); ?></label>
          <?php foreach ($accesspress_pro_skins as $accesspress_pro_skin => $value) { ?>
            <div class="skin-select layout-img hide-radio">
            <input id="<?php echo esc_attr($accesspress_pro_skin); ?>" type="radio" value="<?php echo esc_attr($value); ?>" name="accesspress_pro_options[skins]" <?php checked(esc_attr($accesspress_pro_skin) ,$settings['skins']) ?>>
            <label class="<?php echo esc_attr($accesspress_pro_skin);?>" for="<?php echo esc_attr($accesspress_pro_skin); ?>">
              <?php echo esc_attr($accesspress_pro_skin);?>
            </label>
            </div>
          <?php }?>
          <div class="theme-color-or"><span>or</span></div>
          <div class="theme_color">
          <label class="block"><?php _e('Select your own Template color','accesspress_pro'); ?></label>
          <input id="ap_theme_color" type="text" class="accesspress_pro-color" name="accesspress_pro_options[theme_color]" value="<?php echo $settings['theme_color']; ?>" />
          </div>
          </div>

					<div class="form-row">
						<label class="block" for="footer_copyright"><?php _e('Disable Responsive Design?','accesspress_pro'); ?></label>
						
						<div class="checkbox">
							<label for="responsive_design">
							<input type="checkbox" id="responsive_design" name="accesspress_pro_options[responsive_design]" value="1" <?php checked( true, $settings['responsive_design'] ); ?> />
							<?php _e('Check to disable','accesspress_pro'); ?></label>
						</div>
					</div>

					<div class="form-row">
						<label class="block" for="show_comments"><?php _e('Enable Comments in Pages?','accesspress_pro'); ?></label>
						
						<div class="checkbox">
							<label for="show_comments">
							<input type="checkbox" id="show_comments" name="accesspress_pro_options[show_comments]" value="1" <?php checked( true, $settings['show_comments'] ); ?> />
							<?php _e('Check to Enable','accesspress_pro'); ?></label>
						</div>
					</div>

					<div class="form-row">
						<label class="block" for="show_posted_date"><?php _e('Show Posted date in Posts?','accesspress_pro'); ?></label>
						
						<div class="checkbox">
							<label for="show_posted_date">
							<input type="checkbox" id="show_posted_date" name="accesspress_pro_options[show_posted_date]" value="1" <?php checked( true, $settings['show_posted_date'] ); ?> />
							<?php _e('Check to Enable','accesspress_pro'); ?></label>
						</div>
					</div>

					<div class="form-row">
						<label class="block" for="enable_prev_next"><?php _e('Enable Previous/Next Pagination in Posts?','accesspress_pro'); ?></label>
						
						<div class="checkbox">
							<label for="enable_prev_next">
							<input type="checkbox" id="enable_prev_next" name="accesspress_pro_options[enable_prev_next]" value="1" <?php checked( true, $settings['enable_prev_next'] ); ?> />
							<?php _e('Check to Enable','accesspress_pro'); ?></label>
						</div>
					</div>

					<div class="form-row">
					<label class="block" for="favicon"><?php _e('Upload Favicon','accesspress_pro'); ?></label>
							<div class="accesspress_pro_fav_icon">
							  <input type="text" name="accesspress_pro_options[media_upload]" id="accesspress_pro_media_upload" value="<?php if(!empty($settings['media_upload'])){ echo $settings['media_upload']; }?>" />
							  <input class="button" name="media_upload_button" id="accesspress_pro_media_upload_button" value="<?php _e('Upload','accesspress_pro'); ?>" type="button" />
							  <em class="f13">&nbsp;&nbsp;<?php _e('Upload favicon(.png) with size of 16px X 16px','accesspress_pro'); ?></em>

							  <?php if(!empty($settings['media_upload'])){ ?>
							  <div id="accesspress_pro_media_image">
							  <img src="<?php echo $settings['media_upload'] ?>" id="accesspress_pro_show_image">
							  <div id="accesspress_pro_fav_icon_remove"><?php _e('Remove','accesspress_pro'); ?></div>
							  </div>
							  <?php }else{ ?>
							  <div id="accesspress_pro_media_image" style="display:none">
							  <img src="<?php if(isset($settings['media_upload'])) { echo $settings['media_upload']; } ?>" id="accesspress_pro_show_image">
							  <a href="javascript:void(0)" id="accesspress_pro_fav_icon_remove" title="<?php _e('remove','accesspress_pro'); ?>"><?php _e('Remove','accesspress_pro'); ?></a>
							  </div>
							  <?php	} ?>
							</div>
					</div>

					<div class="form-row">
                    <label class="block"><?php _e('Web Page Layout','accesspress_pro'); ?></label>
					<?php $webpage_layouts = array('Fullwidth','Boxed'); ?>
					<?php
					foreach ( $webpage_layouts as $webpage_layout ) : ?>
						<div class="checkbox">
						<label for="<?php echo $webpage_layout; ?>">
						<input type="radio" id="<?php echo esc_attr($webpage_layout); ?>" name="accesspress_pro_options[webpage_layout]" value="<?php echo esc_attr($webpage_layout); ?>" <?php checked( $settings['webpage_layout'], esc_attr($webpage_layout) ); ?> />
						<?php echo esc_attr($webpage_layout); ?>
						</label>
						</div>
					<?php endforeach;
					?>
					</div>

					<div class="form-row background-patterns">
						<label class="block"><?php _e('Background patterns - Choose the pattern','accesspress_pro'); ?></label>
						<?php $accesspress_pro_background_patterns = array('pattern0' ,'pattern1', 'pattern2', 'pattern3', 'pattern4', 'pattern5', 'pattern6', 'pattern7', 'pattern8', 'pattern9') ?>
						<?php foreach ($accesspress_pro_background_patterns as $accesspress_pro_background_pattern) { ?>
							<div class="pattern-img hide-radio">
							<input id="<?php echo esc_attr($accesspress_pro_background_pattern); ?>" type="radio" name="accesspress_pro_options[background_pattern]" value="<?php echo esc_attr($accesspress_pro_background_pattern); ?>" <?php checked(esc_attr($accesspress_pro_background_pattern), $settings['background_pattern']);?>>
							<label class="inline-block" for="<?php echo $accesspress_pro_background_pattern; ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/inc/admin-panel/images/<?php echo esc_attr($accesspress_pro_background_pattern); ?>.png">
							</label>
							</div>
						<?php } ?>
					</div>

					<div class="form-row">
						<label class="block"><?php _e('Upload Custom Background Image | Note: ','accesspress_pro'); ?> (<em><?php _e('Set Background patterns to none to enable this feature','accesspress_pro'); ?></em>)</label>
						<a class="button" target="_blank" href="<?php echo admin_url(); ?>themes.php?page=custom-background"><?php _e('Upload','accesspress_pro'); ?></a>
					</div>

					<div class="form-row">
						<label class="block"><?php _e('Read More button text in Archive pages','accesspress_pro'); ?></label>
						<input type="text" name="accesspress_pro_options[read_more_text]" value="<?php echo esc_attr($settings['read_more_text']);?>">
					</div>

					<div class="form-row">
						<label class="block"><?php _e('No of Character to show in excerpt in Archive pages','accesspress_pro'); ?></label>
						<input type="text" name="accesspress_pro_options[archive_char]" value="<?php echo absint($settings['archive_char']);?>">
					</div>
			</div>

            <!-- Header settings -->
            <div id="options-group-2" class="group">
			<h3><?php _e('Header settings','accesspress_pro'); ?></h3>
					<div class="form-row header-style">
					<label class="block"><?php _e('Select header Style','accesspress_pro'); ?></label>
					<?php 
					$header_styles = array('style1','style2','style3','style4');
					foreach( $header_styles as $header_style ) : ?>
					<div class="hide-radio">
					<input type="radio" id="<?php echo esc_attr($header_style); ?>" name="accesspress_pro_options[header_style]" value="<?php echo esc_attr($header_style); ?>" <?php checked( esc_attr($settings['header_style']), $header_style ); ?> />
					<label class="inline-block" for="<?php echo esc_attr($header_style); ?>"><img src="<?php echo get_template_directory_uri().'/inc/admin-panel/images/'.$header_style.'.jpg'; ?>"/></label>
					</div>
					<?php endforeach; ?>
					</div>

					<div class="form-row">
						<label class="block"><?php _e('Enable Sticky Header?','accesspress_pro'); ?></label>
						<div class="checkbox">
							<label for="sticky_header">
							<input type="checkbox" id="sticky_header" name="accesspress_pro_options[sticky_header]" value="1" <?php checked( true, $settings['sticky_header']); ?> />
							<?php _e('Check to enable','accesspress_pro'); ?>
							</label>
						</div>
					</div>

                    <div class="form-row">
						<label class="block"><?php _e('Show Search in Header?','accesspress_pro'); ?></label>
						<div class="checkbox">
							<label for="show_search">
							<input type="checkbox" id="show_search" name="accesspress_pro_options[show_search]" value="1" <?php checked( true, $settings['show_search'] ); ?> />
							<?php _e('Check to enable','accesspress_pro'); ?>
							</label>
						</div>
					</div>

					<div class="form-row">
						<label class="block"><?php _e('Upload Logo','accesspress_pro'); ?></label>
						<a class="button" href="<?php echo admin_url('/themes.php?page=custom-header'); ?>"><?php _e('Upload','accesspress_pro'); ?></a>
					</div>

					<div class="form-row logo-padding">
						<label class="block"><?php _e('Logo Padding','accesspress_pro'); ?></label>
						<label class="inline-block"><?php _e('Padding Top','accesspress_pro'); ?></label> <input class="small-input" type="text" name="accesspress_pro_options[logo_pading_top]" value="<?php echo intval($settings['logo_pading_top']); ?>" /> px<br />
						<label class="inline-block"><?php _e('Padding Bottom','accesspress_pro'); ?></label> <input class="small-input" type="text" name="accesspress_pro_options[logo_pading_bottom]" value="<?php echo intval($settings['logo_pading_bottom']); ?>" /> px<br />
						<label class="inline-block"><?php _e('Padding Left','accesspress_pro'); ?></label> <input class="small-input" type="text" name="accesspress_pro_options[logo_pading_left]" value="<?php echo intval($settings['logo_pading_left']); ?>" /> px<br />
						<label class="inline-block"><?php _e('Padding Right','accesspress_pro'); ?></label> <input class="small-input" type="text" name="accesspress_pro_options[logo_pading_right]" value="<?php echo intval($settings['logo_pading_right']); ?>" /> px
					</div>

					<div class="form-row logo-padding">
					<label class="block"><?php _e('Navigation Padding','accesspress_pro'); ?></label>
					<label class="inline-block">Padding Top</label> <input name="accesspress_pro_options[nav_pading_top]" class="small-input" type="text" value="<?php echo intval($settings['nav_pading_top']); ?>"> px<br/>
                    </div>

                    <div class="form-row">
					<label class="block"><?php _e('Header Text (Email Id / Phone number / any other text)','accesspress_pro'); ?></label>
					<textarea id="header_text" name="accesspress_pro_options[header_text]" rows="5" cols="30"><?php echo esc_attr($settings['header_text']); ?></textarea><br />
                    <em class="f13"><?php _e('Html content allowed','accesspress_pro'); ?></em>
                    </div>
			</div>	

			<!-- Footer settings -->
			<div id="options-group-3" class="group">
			<h3><?php _e('Footer settings','accesspress_pro'); ?></h3>
				<div class="form-row">
				<label class="block"><?php _e('Google Map Iframe','accesspress_pro'); ?></label>
				<textarea id="google_map" name="accesspress_pro_options[google_map]" rows="6" cols="60"><?php echo esc_attr($settings['google_map']); ?></textarea>
				<p class="f13"><em><?php _e('Enter the Iframe of the google map to show above header(Toggle)','accesspress_pro'); ?><br /><?php _e('Leave Blank if you don\'t want to show','accesspress_pro'); ?></em></p>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Footer Copyright Text','accesspress_pro'); ?></label>
				<input id="footer_copyright" name="accesspress_pro_options[footer_copyright]" type="text" value="<?php echo esc_attr($settings['footer_copyright']); ?>" />
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Right Footer Text','accesspress_pro'); ?></label>
				<input id="right_footer_text" name="accesspress_pro_options[right_footer_text]" type="text" value="<?php echo esc_attr($settings['right_footer_text']); ?>" />
				</div>
			</div>	

			<!-- Typography settings -->
			<div id="options-group-4" class="group">
			<h3><?php _e('Typography settings','accesspress_pro'); ?></h3>
				<div class="form-row">
				<label class="block"><?php _e('Choose a font for the headline H1, H2, H3, H4, H5, H6 text','accesspress_pro'); ?></label>
				<?php 
				$accesspress_pro_font_list = get_option('accesspress_pro_google_fonts');
				?>
				<select id="heading_font" name="accesspress_pro_options[heading_font]">
				<?php foreach ($accesspress_pro_font_list as $font_name) { ?>
					<option value="<?php echo $font_name; ?>" <?php selected($font_name,$settings['heading_font']); ?>><?php echo $font_name; ?></option>
				<?php } ?>
				</select>

				<select name="accesspress_pro_options[heading_font_weight]">
					<option value="300" <?php selected('300',$settings['heading_font_weight']); ?>>300</option>
					<option value="400" <?php selected('400',$settings['heading_font_weight']); ?>>400</option>
					<option value="600" <?php selected('600',$settings['heading_font_weight']); ?>>600</option>
					<option value="700" <?php selected('700',$settings['heading_font_weight']); ?>>700</option>
				</select>
				<div class="testtextbox" id="testtext_heading_font">The Quick Brown Fox Jumps Over The Lazy Dog. 1234567890</div>
				</div>

				<div class="form-row">
				<label class="block">Choose a font for the Body text</label>
				<select id="body_font" name="accesspress_pro_options[body_font]">
				<?php foreach ($accesspress_pro_font_list as $font_name) { ?>
					<option value="<?php echo $font_name; ?>" <?php selected($font_name , $settings['body_font']); ?>><?php echo $font_name; ?></option>
				<?php } ?>
				</select>

				<select name="accesspress_pro_options[body_font_weight]">
					<option value="300" <?php selected('300',$settings['body_font_weight']); ?>>300</option>
					<option value="400" <?php selected('400',$settings['body_font_weight']); ?>>400</option>
				</select>
				<div class="testtextbox" id="testtext_body_font">The Quick Brown Fox Jumps Over The Lazy Dog. 1234567890</div>
				</div>
				
				<div class="form-row">
				<?php _e('Heading Tags Formating','accesspress_pro'); ?>
				</div>

				<div class="form-row header-formating">
				<label class="block">H1 <?php _e('Text','accesspress_pro'); ?></label>	
				<input type="text" name="accesspress_pro_options[h1_font_size]" value="<?php echo absint($settings['h1_font_size']); ?>" />  px
				<select name="accesspress_pro_options[h1_text_transform]">
					<option value="none" <?php selected('none', $settings['h1_text_transform']) ?>><?php esc_attr_e('Normal','accesspress_pro'); ?></option>
					<option value="uppercase" <?php selected('uppercase', $settings['h1_text_transform']) ?>><?php esc_attr_e('Uppercase','accesspress_pro'); ?></option>
					<option value="lowercase" <?php selected('lowercase', $settings['h1_text_transform']) ?>><?php esc_attr_e('Lowercase','accesspress_pro'); ?></option>
					<option value="capitalize" <?php selected('capitalize', $settings['h1_text_transform']) ?>><?php esc_attr_e('Capitalize','accesspress_pro'); ?></option>
				</select>
				<input type="text" class="accesspress_pro-color" name="accesspress_pro_options[h1_color]" value="<?php echo $settings['h1_color']; ?>" />
				</div>

				<div class="form-row header-formating">
				<label class="block">H2 <?php _e('Text','accesspress_pro'); ?></label>	
				<input type="text" name="accesspress_pro_options[h2_font_size]" value="<?php echo absint($settings['h2_font_size']); ?>"/>  px
				<select name="accesspress_pro_options[h2_text_transform]">
					<option value="none" <?php selected('none', $settings['h2_text_transform']) ?>><?php esc_attr_e('Normal','accesspress_pro'); ?></option>
					<option value="uppercase" <?php selected('uppercase', $settings['h2_text_transform']) ?>><?php esc_attr_e('Uppercase','accesspress_pro'); ?></option>
					<option value="lowercase" <?php selected('lowercase', $settings['h2_text_transform']) ?>><?php esc_attr_e('Lowercase','accesspress_pro'); ?></option>
					<option value="capitalize" <?php selected('capitalize', $settings['h2_text_transform']) ?>><?php esc_attr_e('Capitalize','accesspress_pro'); ?></option>
				</select>
				<input type="text" class="accesspress_pro-color" name="accesspress_pro_options[h2_color]" value="<?php echo $settings['h2_color']; ?>" />
				</div>

				<div class="form-row header-formating">
				<label class="block">H3 <?php _e('Text','accesspress_pro'); ?></label>	
				<input type="text" name="accesspress_pro_options[h3_font_size]" value="<?php echo absint($settings['h3_font_size']); ?>"/>  px
				<select name="accesspress_pro_options[h3_text_transform]">
					<option value="none" <?php selected('none', $settings['h2_text_transform']) ?>><?php esc_attr_e('Normal','accesspress_pro'); ?></option>
					<option value="uppercase" <?php selected('uppercase', $settings['h3_text_transform']) ?>><?php esc_attr_e('Uppercase','accesspress_pro'); ?></option>
					<option value="lowercase" <?php selected('lowercase', $settings['h3_text_transform']) ?>><?php esc_attr_e('Lowercase','accesspress_pro'); ?></option>
					<option value="capitalize" <?php selected('capitalize', $settings['h3_text_transform']) ?>><?php esc_attr_e('Capitalize','accesspress_pro'); ?></option>
				</select>
				<input type="text" class="accesspress_pro-color" name="accesspress_pro_options[h3_color]" value="<?php echo $settings['h3_color']; ?>" />
				</div>

				<div class="form-row header-formating">
				<label class="block">H4 <?php _e('Text','accesspress_pro'); ?></label>	
				<input type="text" name="accesspress_pro_options[h4_font_size]" value="<?php echo absint($settings['h4_font_size']); ?>"/>  px
				<select name="accesspress_pro_options[h4_text_transform]">
					<option value="none" <?php selected('none', $settings['h2_text_transform']) ?>><?php esc_attr_e('Normal','accesspress_pro'); ?></option>
					<option value="uppercase" <?php selected('uppercase', $settings['h4_text_transform']) ?>><?php esc_attr_e('Uppercase','accesspress_pro'); ?></option>
					<option value="lowercase" <?php selected('lowercase', $settings['h4_text_transform']) ?>><?php esc_attr_e('Lowercase','accesspress_pro'); ?></option>
					<option value="capitalize" <?php selected('capitalize', $settings['h4_text_transform']) ?>><?php esc_attr_e('Capitalize','accesspress_pro'); ?></option>
				</select>
				<input type="text" class="accesspress_pro-color" name="accesspress_pro_options[h4_color]" value="<?php echo $settings['h4_color']; ?>" />
				</div>

				<div class="form-row header-formating">
				<label class="block">H5 <?php _e('Text','accesspress_pro'); ?></label>	
				<input type="text" name="accesspress_pro_options[h5_font_size]" value="<?php echo absint($settings['h5_font_size']); ?>"/>  px
				<select name="accesspress_pro_options[h5_text_transform]">
					<option value="none" <?php selected('none', $settings['h2_text_transform']) ?>><?php esc_attr_e('Normal','accesspress_pro'); ?></option>
					<option value="uppercase" <?php selected('uppercase', $settings['h5_text_transform']) ?>><?php esc_attr_e('Uppercase','accesspress_pro'); ?></option>
					<option value="lowercase" <?php selected('lowercase', $settings['h5_text_transform']) ?>><?php esc_attr_e('Lowercase','accesspress_pro'); ?></option>
					<option value="capitalize" <?php selected('capitalize', $settings['h5_text_transform']) ?>><?php esc_attr_e('Capitalize','accesspress_pro'); ?></option>
				</select>
				<input type="text" class="accesspress_pro-color" name="accesspress_pro_options[h5_color]" value="<?php echo $settings['h5_color']; ?>" />
				</div>

				<div class="form-row header-formating">
				<label class="block">H6 <?php _e('Text','accesspress_pro'); ?></label>	
				<input type="text" name="accesspress_pro_options[h6_font_size]" value="<?php echo absint($settings['h6_font_size']); ?>"/>  px
				<select name="accesspress_pro_options[h6_text_transform]">
					<option value="none" <?php selected('none', $settings['h2_text_transform']) ?>><?php esc_attr_e('Normal','accesspress_pro'); ?></option>
					<option value="uppercase" <?php selected('uppercase', $settings['h6_text_transform']) ?>><?php esc_attr_e('Uppercase','accesspress_pro'); ?></option>
					<option value="lowercase" <?php selected('lowercase', $settings['h6_text_transform']) ?>><?php esc_attr_e('Lowercase','accesspress_pro'); ?></option>
					<option value="capitalize" <?php selected('capitalize', $settings['h6_text_transform']) ?>><?php esc_attr_e('Capitalize','accesspress_pro'); ?></option>
				</select>
				<input type="text" class="accesspress_pro-color" name="accesspress_pro_options[h6_color]" value="<?php echo $settings['h6_color']; ?>" />
				</div>

				<div class="form-row header-formating">
				<label class="block">Body <?php _e('Text','accesspress_pro'); ?></label>	
				<input type="text"  name="accesspress_pro_options[body_font_size]" value="<?php echo absint($settings['body_font_size']); ?>"/>  px
				<input type="text" class="accesspress_pro-color" name="accesspress_pro_options[body_color]" value="<?php echo $settings['body_color']; ?>" />
				</div>
			</div>

			<!-- Breadcrumb Settings -->
			<div id="options-group-5" class="group" style="display: none;">
			<h3><?php _e('Breadcrumb Settings','accesspress_pro'); ?></h3>
				<div class="form-row">
					<label class="block"><?php _e('Display Breadcrumbs','accesspress_pro'); ?></label>
							
					<div class="checkbox">
						<label for="show_breadcrumb">
						<input type="checkbox" id="show_breadcrumb" name="accesspress_pro_options[show_breadcrumb]" value="1" <?php checked( true, $settings['show_breadcrumb'] ); ?> />
						<?php _e('Check to disable','accesspress_pro'); ?></label>
					</div>
				</div>

				<div class="form-row">
					<label class="block"><?php _e('Breadcrumb seperator','accesspress_pro'); ?></label>
					<input type="text" id="breadcrumb_seperator" name="accesspress_pro_options[breadcrumb_seperator]" value="<?php echo $settings['breadcrumb_seperator']; ?>" />
					<span class="f13"><?php _e('example:','accesspress_pro'); ?> >> , / , - etc </span>
				</div>

				<div class="form-row">
					<label class="block"><?php _e('','accesspress_pro'); ?>Home <?php _e('Text','accesspress_pro'); ?></label>
					<input type="text" name="accesspress_pro_options[breadcrumb_home_text]" value="<?php echo esc_attr($settings['breadcrumb_home_text']); ?>" placeholder="Home" />
				</div>

			</div>

            <!-- Home Page Settings -->
			<div id="options-group-6" class="group" style="display: none;">
			<h3><?php _e('Home Page Settings','accesspress_pro'); ?></h3> 
                    <div class="form-row">
                    <label class="block"><?php _e('Home Page Layout','accesspress_pro'); ?></label>
					<?php $home_page_layouts = array('Default','Layout2'); ?>
					<?php
					foreach ( $home_page_layouts as $home_page_layout ) : ?>
                    <div class="layout-img hide-radio">
						<input type="radio" id="<?php echo $home_page_layout; ?>" name="accesspress_pro_options[home_page_layout]" value="<?php echo esc_attr($home_page_layout); ?>" <?php checked( esc_attr($settings['home_page_layout']), $home_page_layout ); ?> />
						<label for="<?php echo esc_attr($home_page_layout); ?>">
    					<img src="<?php echo get_template_directory_uri().'/inc/admin-panel/images/'.$home_page_layout.'.jpg'; ?>"/>
                        </label>
                    </div>
					<?php endforeach; ?>
					</div>

					<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Welcome Post','accesspress_pro'); ?></label>
					<select id="welcome_post" name="accesspress_pro_options[welcome_post]">
					<?php
					foreach ( $accesspress_pro_postpagelist as $single_post ) :
						$label = $single_post['label'];
						echo '<option value="' . $single_post['value'] . '" ' . selected( $single_post['value'], $settings['welcome_post'] ). '>' . $label . '</option>';
					endforeach;
					?>
					</select>
					</div>
                    <div class="form-row inline-label">
						<label class="inline-block"><?php _e('Show Full Content?','accesspress_pro'); ?></label>
						    <input type="checkbox" id="full_content" name="accesspress_pro_options[welcome_post_content]" value="1" <?php checked( true, $settings['welcome_post_content'] ); ?> />
							<label for="full_content"><?php _e('Check to enable','accesspress_pro'); ?></label>
                    </div>
					<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Welcome Post Character','accesspress_pro'); ?></label>
					<input id="featured_post2_icon" name="accesspress_pro_options[welcome_post_char]" type="text" value="<?php echo absint($settings['welcome_post_char']); ?>" />
					</div>

					<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Read More Button Text','accesspress_pro'); ?></label>
					<input name="accesspress_pro_options[welcome_post_readmore]" type="text" value="<?php echo esc_attr($settings['welcome_post_readmore']); ?>" /> <em class="f13"><?php _e('Leave blank to remove','accesspress_pro'); ?></em>
					</div>

					<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Event Section Title','accesspress_pro'); ?></label>
					<input type="text" name="accesspress_pro_options[event_page_title]" value="<?php echo esc_attr($settings['event_page_title']); ?>">
					</div>

					<div class="form-row inline-label">
					<label class="inline-block"><?php _e('No of Event Post to display','accesspress_pro'); ?></label>
					<input name="accesspress_pro_options[no_of_event]" type="text" value="<?php echo absint($settings['no_of_event']); ?>" />
					</div>

					<div class="form-row">
					<label for="show_fontawesome"><?php _e('Show Font Awesome icon for Featured Post?','accesspress_pro'); ?></label>
						<div class="checkbox">
							<label for="show_fontawesome">
							<input type="checkbox" id="show_fontawesome" name="accesspress_pro_options[show_fontawesome]" value="1" <?php checked( true, $settings['show_fontawesome'] ); ?> />
							<?php _e('Check to enable','accesspress_pro'); ?></label><br />
                            <em class="f13">(<?php _e('If enabled the featured image will be replaced by Font Awesome Icon. For lists of icons click','accesspress_pro'); ?> <a href="http://fontawesome.io/icons/" target="_blank"><?php _e('here','accesspress_pro'); ?></a>)</em>
						</div>
					</div>
                    
                    <div class="big_icon_option form-row">
						<label class="block"><?php _e('Show Big Font Awesome icon with center aligned','accesspress_pro'); ?></label>
						<div class="checkbox">
							<label for="big_icons">
							<input type="checkbox" id="big_icons" name="accesspress_pro_options[big_icons]" value="1" <?php checked( true, $settings['big_icons'] ); ?> />
							<?php _e('Check to enable','accesspress_pro'); ?></label>
						</div>
					</div>
                    
                    <div class="form-row inline-label">
                    <label class="inline-block"><?php _e('No of Featured post to show','accesspress_pro'); ?></label>
					<select id="featured_post_count" name="accesspress_pro_options[featured_post_count]">
					<?php
					$accesspress_pro_post_count = array('3','4');
					foreach ( $accesspress_pro_post_count as $single_post_count ) :
						echo '<option style="padding-right: 10px;" value="' . $single_post_count . '" ' . selected( $single_post_count , $settings['featured_post_count'] ). '>' . $single_post_count . '</option>';
					endforeach;
					?>
					</select>
					</div>

					<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Featured Post 1','accesspress_pro'); ?></label>
					<select id="featured_post1" name="accesspress_pro_options[featured_post1]">
					<?php
					foreach ( $accesspress_pro_postpagelist as $single_post ) :
						$label = $single_post['label'];
						echo '<option style="padding-right: 10px;" value="' . $single_post['value'] . '" ' . selected( $single_post['value'] , $settings['featured_post1'] ). '>' . $label . '</option>';
					endforeach;
					?>
					</select>
					<input id="featured_post1_icon" name="accesspress_pro_options[featured_post1_icon]" type="text" value="<?php echo $settings['featured_post1_icon']; ?>" placeholder="Font Awesome icon name" /><em class="f13">&nbsp;&nbsp;<?php _e('Example: ','accesspress_pro'); ?>fa-bell</em>
					</div>

					<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Featured Post 2','accesspress_pro'); ?></label>
					<select id="featured_post2" name="accesspress_pro_options[featured_post2]">
					<?php
					foreach ( $accesspress_pro_postpagelist as $single_post ) :
						$label = $single_post['label'];
						echo '<option style="padding-right: 10px;" value="' . $single_post['value']  . '" ' . selected( $single_post['value'] , $settings['featured_post2'] ) . '>' . $label . '</option>';
					endforeach;
					?>
					</select>
					<input id="featured_post2_icon" name="accesspress_pro_options[featured_post2_icon]" type="text" value="<?php echo $settings['featured_post2_icon']; ?>" placeholder="Font Awesome icon name" /><em class="f13">&nbsp;&nbsp;<?php _e('Example: ','accesspress_pro'); ?>fa-bell</em>
					</div>

					<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Featured Post 3','accesspress_pro'); ?></label>
					<select id="featured_post3" name="accesspress_pro_options[featured_post3]">
					<?php
					foreach ( $accesspress_pro_postpagelist as $single_post ) :
						$label = $single_post['label'];
						echo '<option style="padding-right: 10px;" value="' . $single_post['value']  . '" ' . selected( $single_post['value'] , $settings['featured_post3'] ) . '>' . $label . '</option>';
					endforeach;
					?>
					</select>
					<input id="featured_post3_icon" name="accesspress_pro_options[featured_post3_icon]" type="text" value="<?php  echo $settings['featured_post3_icon']; ?>" placeholder="Font Awesome icon name" /><em class="f13">&nbsp;&nbsp;<?php _e('Example: ','accesspress_pro'); ?>fa-bell</em>
					</div>

					<div class="form-row featured_post_4_option inline-label">
					<label class="inline-block"><?php _e('Featured Post 4','accesspress_pro'); ?></label>
					<select id="featured_post4" name="accesspress_pro_options[featured_post4]">
					<?php
					foreach ( $accesspress_pro_postpagelist as $single_post ) :
						$label = $single_post['label'];
						echo '<option style="padding-right: 10px;" value="' . $single_post['value']  . '" ' . selected( $single_post['value'] , $settings['featured_post4'] ) . '>' . $label . '</option>';
					endforeach;
					?>
					</select>
					<input id="featured_post3_icon" name="accesspress_pro_options[featured_post4_icon]" type="text" value="<?php  echo $settings['featured_post4_icon']; ?>" placeholder="Font Awesome icon name" /><em class="f13">&nbsp;&nbsp;<?php _e('Example: ','accesspress_pro'); ?>fa-bell</em>
					</div>

					<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Featured Post Character','accesspress_pro'); ?></label>
					<input name="accesspress_pro_options[featured_post_char]" type="text" value="<?php echo absint($settings['featured_post_char']); ?>" />
					</div>

					<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Read More Button Text','accesspress_pro'); ?></label>
					<input name="accesspress_pro_options[featured_post_readmore]" type="text" value="<?php echo $settings['featured_post_readmore']; ?>" /> <em class="f13"><?php _e('Leave blank to remove','accesspress_pro'); ?></em>
					</div>

					<div class="form-row">
					<label class="block"><?php _e('Select the category to display as Blog','accesspress_pro'); ?></label>
					<select id="blog_cat" name="accesspress_pro_options[blog_cat]">
					<?php
					foreach ( $accesspress_pro_catlist as $single_cat ) :
						$label = $single_cat['label'];
						echo '<option style="padding-right: 10px;" value="' . $single_cat['value'] . '" ' . selected( $single_cat['value'] , $settings['blog_cat'] ) . '>' . $label . '</option>';
					endforeach;
					?>
					</select>
					</div>

					<div class="form-row">
						<label class="block"><?php _e('Disable Featured Bar above footer','accesspress_pro'); ?></label>
						<div class="checkbox">
							<label for="featured-bar">
							<input type="checkbox" id="featured-bar" name="accesspress_pro_options[featured_bar]" value="1" <?php checked( true, $settings['featured_bar'] ); ?> />
							<?php _e('Check to disable','accesspress_pro'); ?></label>
						</div>
					</div>
            </div>

			<!-- Upload Slider Image -->
			<div id="options-group-7" class="group" style="display: none;">
			<h3><?php _e('Upload Slider Image','accesspress_pro'); ?></h3>
					<div class="form-row">
					<em class="f13"><?php _e('Select the Slider Images','accesspress_pro'); ?></em>
					</div>
					
					<div class="add-slider-wrap">
					<?php
					if(!empty($settings['slider'])){
						$slider_images = $settings['slider'];
						$total = 0;
						$count = count($slider_images); ?>
						<input type="hidden" value="<?php echo $count; ?>" id="slider_count"/>
						<?php foreach ($slider_images as $slider_image) { 	
						$total++;				
							 ?>
						<div class="form-row">	
						<label class="block"><strong><?php _e('Silder Image','accesspress_pro'); ?></strong></label>
						<div class="slider-image-wrap">
							<input class="hidden-input-banner" type="hidden" value="<?php echo $slider_image['banner']; ?>" name="accesspress_pro_options[slider][<?php echo $total; ?>][banner]">
                            <input class="hidden-input-image" type="hidden" value="<?php echo $slider_image['image']; ?>" name="accesspress_pro_options[slider][<?php echo $total; ?>][image]">
							<?php 
              $attachment_id = accesspress_get_attachment_id_from_url($slider_image['banner']);
              $image_array = wp_get_attachment_image_src( $attachment_id, 'medium'); 
              $attachment_id1 = accesspress_get_attachment_id_from_url($slider_image['image']);
              $image_array1 = wp_get_attachment_image_src( $attachment_id1, 'medium'); 
              ?>
              <img class="img-banner" alt="banner-image" src="<?php echo $image_array[0]; ?>">
              <img class="img-image" alt="slider-image" src="<?php echo $image_array1[0]; ?>">
							<div class="clearfx"></div>
                            <label class="block"><?php _e('Caption Header','accesspress_pro'); ?></label>
							<input type="text" value="<?php echo esc_attr($slider_image['caption_header']); ?>" name="accesspress_pro_options[slider][<?php echo $total; ?>][caption_header]" >
							<label class="block"><?php _e('Caption Description','accesspress_pro'); ?></label>
							<textarea name="accesspress_pro_options[slider][<?php echo $total; ?>][caption_desc]"><?php echo esc_attr($slider_image['caption_desc']); ?></textarea>
							<label class="block"><?php _e('Read More Text','accesspress_pro'); ?></label>
							<input type="text" value="<?php echo esc_attr($slider_image['slider_read_more']); ?>" name="accesspress_pro_options[slider][<?php echo $total; ?>][slider_read_more]" >
							<label class="block"><?php _e('Read More Link','accesspress_pro'); ?></label>
							<input type="text" value="<?php echo esc_attr($slider_image['slider_read_more_link']); ?>" name="accesspress_pro_options[slider][<?php echo $total; ?>][slider_read_more_link]" >
							<a class="upload-slider-banner button" href="javascript:void(0)"><?php _e('Upload Background Image','accesspress_pro'); ?></a>
                            <a class="upload-slider-image button" href="javascript:void(0)"><?php _e('Upload Foreground Image','accesspress_pro'); ?></a>
							<a class="remove-slider button" href="javascript:void(0)"><?php _e('Remove','accesspress_pro'); ?></a>
						</div>
						</div>
						<?php } ?>
					
					<?php } ?>					
					</div>
					<div class="form-row">
						<a href="javascript:void(0)" id="add-slider" class="button-primary"><?php _e('Add New Slider','accesspress_pro'); ?></a>
					</div>
					</div>

			<!-- Slider Settings -->
			<div id="options-group-8" class="group" style="display: none;">
				<h3>Slider Settings</h3>
					<div class="form-row">
					<label class="block"><strong><?php _e('AcessPress Lite Slider (Displays the slider used in Accesspress Lite)','accesspress_pro'); ?></strong></label>
							
					<div class="checkbox">
						<label for="lite_slider">
						<input type="checkbox" id="lite_slider" name="accesspress_pro_options[lite_slider]" value="1" <?php checked( true, $settings['lite_slider'] ); ?> />
						<?php _e('Check to enable','accesspress_pro'); ?></label>
					</div>
					</div>

					<div class="form-row slider-mode">
					<label class="block"><?php _e('Choose the Slider Mode','accesspress_pro'); ?></label>
					<?php 
					$accesspress_pro_slider_modes = array('slider_type1','slider_type2');
					foreach( $accesspress_pro_slider_modes as $slider_mode) : ?>
					<div class="hide-radio">
					<input type="radio" id="<?php echo $slider_mode; ?>" name="accesspress_pro_options[slider_mode]" value="<?php echo $slider_mode; ?>" <?php checked( $settings['slider_mode'], $slider_mode ); ?> />
					<label class="inline-block" for="<?php echo $slider_mode; ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/inc/admin-panel/images/<?php echo $slider_mode; ?>.jpg">
					</label>
					</div>
					<?php endforeach; ?>
					</div>

					<div class="form-row">
					<label class="block"><?php _e('Show Slider','accesspress_pro'); ?></label>
					
					<?php foreach( $accesspress_pro_slider as $slider ) : ?>
					<div class="checkbox">
					<label for="<?php echo $slider['value']; ?>">
					<input type="radio" id="<?php echo $slider['value']; ?>" name="accesspress_pro_options[show_slider]" value="<?php echo $slider['value']; ?>" <?php checked( $settings['show_slider'], $slider['value'] ); ?> />
					<?php echo $slider['label']; ?></label>
					</div>
					<?php endforeach; ?>
					</div>

					<div class="form-row">
					<label class="block"><?php _e('Show Slider Controls (Arrows)','accesspress_pro'); ?></label>
					<?php foreach( $accesspress_pro_slider_show_controls as $slider_controls ) : ?>
					<div class="checkbox">
					<label for="<?php echo $slider_controls['value']; ?>">
					<input type="radio" id="<?php echo $slider_controls['value']; ?>" name="accesspress_pro_options[slider_show_controls]" value="<?php echo $slider_controls['value']; ?>" <?php checked( $settings['slider_show_controls'], $slider_controls['value'] ); ?> />
					<?php echo $slider_controls['label']; ?>
					</label>
					</div>
					<?php endforeach; ?>
					</div>

					<div class="form-row">
					<label class="block"><?php _e('Show Slider Pager (Navigation dots/images)','accesspress_pro'); ?></label>
					<?php foreach( $accesspress_pro_slider_show_pager as $slider_pager ) : ?>
					<div class="checkbox">
					<label for="<?php echo $slider_pager['value']; ?>">
					<input type="radio" id="<?php echo $slider_pager['value']; ?>" name="accesspress_pro_options[slider_show_pager]" value="<?php echo $slider_pager['value']; ?>" <?php checked( $settings['slider_show_pager'], $slider_pager['value'] ); ?> />
					<?php echo $slider_pager['label']; ?>
					</label>
					</div>
					<?php endforeach; ?>
					</div>

					<div class="form-row">
					<label class="block"><?php _e('Show Image in Pager (Set Slider Pager Option to Yes)','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label for="slider_show_pager_image">
					<input type="radio" id="slider_show_pager_image" name="accesspress_pro_options[slider_show_pager_image]" value="yes" <?php checked( $settings['slider_show_pager_image'], 'yes' ); ?> />
					<?php esc_attr_e('yes','accesspress_pro'); ?>
					</label>
					</div>

					<div class="checkbox">
					<label for="slider_hide_pager_image">
					<input type="radio" id="slider_hide_pager_image" name="accesspress_pro_options[slider_show_pager_image]" value="no" <?php checked( $settings['slider_show_pager_image'], 'no' ); ?> />
					<?php esc_attr_e('no', 'accesspress_pro'); ?>
					</label>
					</div>
					</div>

					<div class="form-row">
					<label class="block"><?php _e('Slider auto Transition','accesspress_pro'); ?></label>
					<?php foreach( $accesspress_pro_slider_auto as $slider_autos) : ?>
					<div class="checkbox">
					<label for="<?php echo $slider_autos['value']; ?>">
					<input type="radio" id="<?php echo $slider_autos['value']; ?>" name="accesspress_pro_options[slider_auto]" value="<?php echo $slider_autos['value']; ?>" <?php checked( $settings['slider_auto'], $slider_autos['value'] ); ?> />
					<?php echo $slider_autos['label']; ?>
					</label>
					</div>
					<?php endforeach; ?>
					</div>

					<div class="form-row">
					<label class="block"><?php _e('Slider Speed','accesspress_pro'); ?></label>
					<input id="slider_speed" name="accesspress_pro_options[slider_speed]" type="text" value="<?php echo $settings['slider_speed']; ?>" />
					</div>

					<div class="form-row">
					<label class="block"><?php _e('Show Slider Captions','accesspress_pro'); ?></label>
					<?php foreach( $accesspress_pro_slider_caption as $slider_captions) : ?>
					<div class="checkbox">
					<label for="<?php echo $slider_captions['value']; ?>">
					<input type="radio" id="<?php echo $slider_captions['value']; ?>" name="accesspress_pro_options[slider_caption]" value="<?php echo $slider_captions['value']; ?>" <?php checked( $settings['slider_caption'], $slider_captions['value'] ); ?> />
					<?php echo $slider_captions['label']; ?>
					</label>
					</div>
					<?php endforeach; ?>
					</div>
			</div>

			<!-- Portfolio Settings -->
			<div id="options-group-9" class="group" style="display: none;">
			<h3><?php _e('Portfolio Settings','accesspress_pro'); ?></h3>
				<div class="form-row">
				<label class="block"><?php _e('Full Width Portfolio','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="checkbox" name="accesspress_pro_options[portfolio_fullwidth]" value="1" <?php checked( true, $settings['portfolio_fullwidth'] ); ?> />
					<?php _e('Check to enable ','accesspress_pro'); ?>
					</label>
					</div>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Select the Sidebar to display','accesspress_pro'); ?></label>
					<select name="accesspress_pro_options[portfolio_sidebar]">
					<?php 
					foreach ( $wp_registered_sidebars as  $wp_registered_sidebar) {
					?>
					<option value="<?php echo $wp_registered_sidebar['id']; ?>" <?php selected( $wp_registered_sidebar['id'] , $settings['portfolio_sidebar'] ); ?>><?php echo $wp_registered_sidebar['name']; ?></option>
					<?php }	?>
					</select>
				</div>

				<div class="form-row" id="portfolio-page-layout">
				<label class="block"><?php _e('Portfolio Archive Page Layout','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="radio" id="portfolio_grid" name="accesspress_pro_options[portfolio_layout]" value="portfolio_grid" <?php checked('portfolio_grid', $settings['portfolio_layout'] ); ?> >
					Grid 
					</label>
					</div>

					<div class="checkbox">
					<label>
					<input id="portfolio_list" type="radio" name="accesspress_pro_options[portfolio_layout]" value="portfolio_list" <?php checked('portfolio_list', $settings['portfolio_layout'] ); ?>>
					List
					</label>
					</div>
				</div>

				<div class="form-row" id="portfolio_grid_columns">
				<label class="block"><?php _e('No of columns in Grid Layout','accesspress_pro'); ?></label>
					<select name="accesspress_pro_options[portfolio_grid_columns]">
						<option value="2" <?php selected('2',$settings['portfolio_grid_columns']); ?>>2</option>
						<option value="3" <?php selected('3',$settings['portfolio_grid_columns']); ?>>3</option>
						<option value="4" <?php selected('4',$settings['portfolio_grid_columns']); ?>>4</option>
						<option value="5" <?php selected('5',$settings['portfolio_grid_columns']); ?>>5</option>
					</select>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('No of character to display in exercpt','accesspress_pro'); ?></label>
				<input type="text" name="accesspress_pro_options[portfolio_grid_char]" value="<?php echo absint($settings['portfolio_grid_char']); ?>">
				</div>

				<!-- <div class="form-row">
				<label class="block">No of Portfolio post to display per page</label>
					<input type="text" name="accesspress_pro_options[portfolio_post_per_page]" value="<?php echo $settings['portfolio_post_per_page'] ?>">
				</div> -->

				<div class="form-row sub-header">
				<strong><?php _e('Portfolio Single Page Options','accesspress_pro'); ?></strong>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Select the Left Sidebar to display','accesspress_pro'); ?></label>
					<select name="accesspress_pro_options[portfolio_singlepage_left_sidebar]">
					<?php 
					foreach ( $wp_registered_sidebars as  $wp_registered_sidebar) {
					?>
					<option value="<?php echo $wp_registered_sidebar['id']; ?>" <?php selected( $wp_registered_sidebar['id'] , $settings['portfolio_singlepage_left_sidebar'] ); ?>><?php echo $wp_registered_sidebar['name']; ?></option>
					<?php }	?>
					</select>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Select the Right Sidebar to display','accesspress_pro'); ?></label>
					<select name="accesspress_pro_options[portfolio_singlepage_right_sidebar]">
					<?php 
					foreach ( $wp_registered_sidebars as  $wp_registered_sidebar) {
					?>
					<option value="<?php echo $wp_registered_sidebar['id']; ?>" <?php selected( $wp_registered_sidebar['id'] , $settings['portfolio_singlepage_right_sidebar'] ); ?>><?php echo $wp_registered_sidebar['name']; ?></option>
					<?php }	?>
					</select>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Show Social sharing button','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="checkbox" name="accesspress_pro_options[portfolio_show_socials]" value="1" <?php checked(true, $settings['portfolio_show_socials']); ?>>
					<?php _e('Check to enable','accesspress_pro'); ?> 
					</label>
					</div>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Enable Previous/Next Pagination','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="checkbox" name="accesspress_pro_options[portfolio_enable_prev_next]" value="1" <?php checked(true, $settings['portfolio_enable_prev_next']); ?>>
					<?php _e('Check to enable','accesspress_pro'); ?>
					</label>
					</div>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Show featured image','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="checkbox" name="accesspress_pro_options[portfolio_show_featured_image]" value="1" <?php checked(true, $settings['portfolio_show_featured_image']); ?>>
					<?php _e('Check to enable','accesspress_pro'); ?> 
					</label>
					</div>
				</div>

			</div>

			<!-- Events Settings -->
			<div id="options-group-10" class="group" style="display: none;">
			<h3><?php _e('Events Settings','accesspress_pro'); ?></h3>
				<div class="form-row full-width-option">
				<label class="block"><?php _e('Full Width Event','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="checkbox" name="accesspress_pro_options[event_fullwidth]" value="1" <?php checked( true, $settings['event_fullwidth'] ); ?> />
					<?php _e('Check to enable','accesspress_pro'); ?> 
					</label>
					</div>
				</div>

				<!-- <div class="form-row full-width-option">
				<label class="block">Show Event Date</label>
					<div class="checkbox">
					<label>
					<input type="checkbox" name="accesspress_pro_options[event_show_date]" value="1" <?php checked( true, $settings['event_show_date'] ); ?> />
					Check to Disable 
					</label>
					</div>
				</div> -->

				<div class="form-row sidebar-select">
				<label class="block"><?php _e('Select the Sidebar to display','accesspress_pro'); ?></label>
					<select name="accesspress_pro_options[event_sidebar]">
					<?php 
					foreach ( $wp_registered_sidebars as  $wp_registered_sidebar) {
					?>
					<option value="<?php echo $wp_registered_sidebar['id']; ?>" <?php selected( $wp_registered_sidebar['id'] , $settings['event_sidebar'] ); ?>><?php echo $wp_registered_sidebar['name']; ?></option>
					<?php }	?>
					</select>
				</div>

				<div class="form-row" id="event-page-layout">
				<label class="block"><?php _e('Event Archive Page Layout','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="radio" id="event_grid" name="accesspress_pro_options[event_layout]" value="event_grid" <?php checked('event_grid', $settings['event_layout'] ); ?> >
					<?php esc_attr_e('Grid','accesspress_pro'); ?> 
					</label>
					</div>

					<div class="checkbox">
					<label>
					<input id="event_list" type="radio" name="accesspress_pro_options[event_layout]" value="event_list" <?php checked('event_list', $settings['event_layout'] ); ?>>
					<?php esc_attr_e('List','accesspress_pro'); ?>
					</label>
					</div>
				</div>

				<div class="form-row" id="event_grid_columns">
				<label class="block"><?php _e('No of columns in Grid Layout','accesspress_pro'); ?></label>
					<select name="accesspress_pro_options[event_grid_columns]">
						<option value="2" <?php selected('2',$settings['event_grid_columns']); ?>>2</option>
						<option value="3" <?php selected('3',$settings['event_grid_columns']); ?>>3</option>
						<option value="4" <?php selected('4',$settings['event_grid_columns']); ?>>4</option>
						<option value="5" <?php selected('5',$settings['event_grid_columns']); ?>>5</option>
					</select>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('No of character to display in exercpt','accesspress_pro'); ?></label>
				<input type="text" name="accesspress_pro_options[event_char]" value="<?php echo absint($settings['event_char']); ?>">
				</div>

				<!-- <div class="form-row">
				<label class="block">No of event post to display per page</label>
					<input type="text" name="accesspress_pro_options[event_post_per_page]" value="<?php echo $settings['event_post_per_page'] ?>">
				</div> -->

				<div class="form-row sub-header">
				<strong><?php _e('Event Single Page Options','accesspress_pro'); ?></strong>
				</div>

				<div class="form-row sidebar-select">
				<label class="block"><?php _e('Select the Left Sidebar to display','accesspress_pro'); ?></label>
					<select name="accesspress_pro_options[event_singlepage_left_sidebar]">
					<?php 
					foreach ( $wp_registered_sidebars as  $wp_registered_sidebar) {
					?>
					<option value="<?php echo $wp_registered_sidebar['id']; ?>" <?php selected( $wp_registered_sidebar['id'] , $settings['event_singlepage_left_sidebar'] ); ?>><?php echo $wp_registered_sidebar['name']; ?></option>
					<?php }	?>
					</select>
				</div>

				<div class="form-row sidebar-select">
				<label class="block"><?php _e('Select the Right Sidebar to display','accesspress_pro'); ?></label>
					<select name="accesspress_pro_options[event_singlepage_right_sidebar]">
					<?php 
					foreach ( $wp_registered_sidebars as  $wp_registered_sidebar) {
					?>
					<option value="<?php echo $wp_registered_sidebar['id']; ?>" <?php selected( $wp_registered_sidebar['id'] , $settings['event_singlepage_right_sidebar'] ); ?>><?php echo $wp_registered_sidebar['name']; ?></option>
					<?php }	?>
					</select>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Show Social sharing button','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="checkbox" name="accesspress_pro_options[event_show_socials]" value="1" <?php checked(true, $settings['event_show_socials']); ?>>
					<?php _e('Check to enable','accesspress_pro'); ?> 
					</label>
					</div>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Enable Previous/Next Pagination','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="checkbox" name="accesspress_pro_options[event_enable_prev_next]" value="1" <?php checked(true, $settings['event_enable_prev_next']); ?>>
					<?php _e('Check to enable','accesspress_pro'); ?> 
					</label>
					</div>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Show featured image','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="checkbox" name="accesspress_pro_options[event_show_featured_image]" value="1" <?php checked(true, $settings['event_show_featured_image']); ?>>
					<?php _e('Check to enable','accesspress_pro'); ?> 
					</label>
					</div>
				</div>
			</div>

			<!-- Faqs Settings -->
			<div id="options-group-11" class="group" style="display: none;">
			<h3><?php _e('Faqs Settings','accesspress_pro'); ?></h3>
				<div class="form-row full-width-option">
				<label class="block"><?php _e('Full Width Faq','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="checkbox" name="accesspress_pro_options[faq_fullwidth]" value="1" <?php checked( true, $settings['faq_fullwidth'] ); ?> />
					<?php _e('Check to enable','accesspress_pro'); ?> 
					</label>
					</div>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('','accesspress_pro'); ?>Show Answer</label>
					<div class="checkbox">
					<label>
					<input type="radio" name="accesspress_pro_options[faq_answer_toggle]" value="faq_show" <?php checked('faq_show', $settings['faq_answer_toggle']); ?>>
					<?php _e('Always Show','accesspress_pro'); ?>
					</label>
					</div>

					<div class="checkbox">
					<label>
					<input type="radio" name="accesspress_pro_options[faq_answer_toggle]" value="faq_hide" <?php checked('faq_hide', $settings['faq_answer_toggle']); ?>>
					<?php _e('Onclick to Question','accesspress_pro'); ?>
					</label>
					</div>
				</div>

				<div class="form-row sidebar-select">
				<label class="block"><?php _e('Select the Right Sidebar to display','accesspress_pro'); ?></label>
					<select name="accesspress_pro_options[faq_right_sidebar]">
					<?php 
					foreach ( $wp_registered_sidebars as  $wp_registered_sidebar) {
					?>
					<option value="<?php echo $wp_registered_sidebar['id']; ?>" <?php selected( $wp_registered_sidebar['id'] , $settings['faq_right_sidebar'] ); ?>><?php echo $wp_registered_sidebar['name']; ?></option>
					<?php }	?>
					</select>
				</div>
			</div>

			<!-- Call to Action Settings-->
			<div id="options-group-12" class="group call-to-action-wrap" style="display: none;">
			<h3><?php _e('Call To Action Text','accesspress_pro'); ?></h3>
				<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Background color','accesspress_pro'); ?></label>
					<input type="text" class="accesspress_pro-color" name="accesspress_pro_options[calltoaction_bg_color]" value="<?php echo $settings['calltoaction_bg_color']; ?>" />
				</div>	

				<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Text color','accesspress_pro'); ?></label>
					<input type="text" class="accesspress_pro-color" name="accesspress_pro_options[calltoaction_text_color]" value="<?php echo $settings['calltoaction_text_color']; ?>" />
				</div>

				<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Font Size','accesspress_pro'); ?></label>	
					<input class="small-input" type="text" name="accesspress_pro_options[calltoaction_font_size]" value="<?php echo absint($settings['calltoaction_font_size']); ?>"/>  px
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Text','accesspress_pro'); ?></label>	
					<textarea style="width:80%; height:100px;" name="accesspress_pro_options[calltoaction_text]" class=""><?php echo esc_attr($settings['calltoaction_text']); ?></textarea>
				</div>

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Text Align','accesspress_pro'); ?></label>
					<select name="accesspress_pro_options[calltoaction_text_align]">
						<option value="left" <?php selected($settings['calltoaction_text_align'],'left'); ?>><?php _e('Left','accesspress_pro'); ?></option>
						<option value="center" <?php selected($settings['calltoaction_text_align'],'center'); ?>><?php _e('Center','accesspress_pro'); ?></option>
						<option value="right" <?php selected($settings['calltoaction_text_align'],'right'); ?>><?php _e('Right','accesspress_pro'); ?></option>
					</select>
				</div>

				<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Read More Text','accesspress_pro'); ?></label>	
					<input type="text" name="accesspress_pro_options[calltoaction_read_more_text]" value="<?php echo esc_attr($settings['calltoaction_read_more_text']); ?>"/> <em class="f13"><?php _e('Leave blank to remove','accesspress_pro'); ?></em>
				</div>

				<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Read More Link','accesspress_pro'); ?></label>
					<input style="width:484px" type="text" name="accesspress_pro_options[calltoaction_read_more_link]" value="<?php echo esc_url($settings['calltoaction_read_more_link']); ?>"/>
				</div>
			</div>

			<!-- Client logo Settings-->
			<div id="options-group-13" class="group call-to-action-wrap" style="display: none;">
			<h3><?php _e('Client/Partner logo Setting','accesspress_pro'); ?></h3>
				<div class="form-row">
					<label class="block"><?php _e('Client/Partner Logo Heading','accesspress_pro'); ?></label>
					<input type="text" name="accesspress_pro_options[client_slider_heading]" value="<?php echo esc_attr($settings['client_slider_heading']);?>">
				</div>

				<div class="form-row">
					<label class="block"><?php _e('Show Clients/Parters logo Slider','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="checkbox" id="show_clients_logo" name="accesspress_pro_options[show_clients_logo]" value="1" <?php checked( true, $settings['show_clients_logo'] ); ?> />
					<?php _e('Check to enable','accesspress_pro'); ?> 
					</label><br />
					<em class="f13"><?php _e('To upload Clients/Parters Logo click','accesspress_pro'); ?> <a href="<?php echo admin_url('edit.php?post_type=logo');?>"><?php _e('here','accesspress_pro'); ?></a></em>
					</div>
				</div>
				
			</div>

			<!-- Social Settings-->
			<div id="options-group-14" class="group" style="display: none;">
			<h3><?php _e('Social links - Put your social url','accesspress_pro'); ?></h3>
					<div class="form-row">
					<em class="f13"><?php _e('Put your social url below.. Leave blank if you don\'t want to show it.','accesspress_pro'); ?></em>
					</div>

					<div class="form-row">
					<label class="block"><?php _e('Disable Social icons in header?','accesspress_pro'); ?></label>
						<div class="checkbox">
							<label for="show_social_header">
							<input type="checkbox" id="show_social_header" name="accesspress_pro_options[show_social_header]" value="1" <?php checked( true, $settings['show_social_header'] ); ?> />
							<?php _e('Check to disable','accesspress_pro'); ?>
							</label>
						</div>
					</div>

					<table class="social-urls">
					<tr><td scope="row"><label for="facebook"><?php _e('Facebook','accesspress_pro'); ?></label></td>
					<td>
					<input id="facebook" name="accesspress_pro_options[facebook]" type="text" value="<?php echo $settings['facebook']; ?>" />
					</td>
					</tr>

					<tr><td scope="row"><label for="twitter"><?php _e('Twitter','accesspress_pro'); ?></label></td>
					<td>
					<input id="twitter" name="accesspress_pro_options[twitter]" type="text" value="<?php echo esc_url($settings['twitter']); ?>" />
					</td>
					</tr>

					<tr><td scope="row"><label for="gplus"><?php _e('Google plus','accesspress_pro'); ?></label></td>
					<td>
					<input id="gplus" name="accesspress_pro_options[gplus]" type="text" value="<?php echo esc_url($settings['gplus']); ?>" />
					</td>
					</tr>

					<tr><td scope="row"><label for="youtube"><?php _e('Youtube','accesspress_pro'); ?></label></td>
					<td>
					<input id="youtube" name="accesspress_pro_options[youtube]" type="text" value="<?php echo esc_url($settings['youtube']); ?>" />
					</td>
					</tr>

					<tr><td scope="row"><label for="pinterest"><?php _e('Pinterest','accesspress_pro'); ?></label></td>
					<td>
					<input id="pinterest" name="accesspress_pro_options[pinterest]" type="text" value="<?php echo esc_url($settings['pinterest']); ?>" />
					</td>
					</tr>

					<tr><td scope="row"><label for="flickr"><?php _e('Flickr','accesspress_pro'); ?></label></td>
					<td>
					<input id="flickr" name="accesspress_pro_options[flickr]" type="text" value="<?php echo esc_url($settings['flickr']); ?>" />
					</td>
					</tr>

					<tr><td scope="row"><label for="vimeo"><?php _e('Vimeo','accesspress_pro'); ?></label></td>
					<td>
					<input id="vimeo" name="accesspress_pro_options[vimeo]" type="text" value="<?php echo esc_url($settings['vimeo']); ?>" />
					</td>
					</tr>

					<tr><td scope="row"><label for="stumbleupon"><?php _e('Stumbleupon','accesspress_pro'); ?></label></td>
					<td>
					<input id="stumbleupon" name="accesspress_pro_options[stumbleupon]" type="text" value="<?php echo esc_url($settings['stumbleupon']); ?>" />
					</td>
					</tr>

					<tr><td scope="row"><label for="dribble"><?php _e('Dribble','accesspress_pro'); ?></label></td>
					<td>
					<input id="dribble" name="accesspress_pro_options[dribble]" type="text" value="<?php echo esc_url($settings['dribble']); ?>" />
					</td>
					</tr>

					<tr><td scope="row"><label for="accesspress_pro_tumblr"><?php _e('Tumblr','accesspress_pro'); ?></label></td>
					<td>
					<input id="tumblr" name="accesspress_pro_options[tumblr]" type="text" value="<?php echo esc_url($settings['tumblr']); ?>" />
					</td>
					</tr>

					<tr><td scope="row"><label for="linkedin"><?php _e('Linkedin','accesspress_pro'); ?></label></td>
					<td>
					<input id="linkedin" name="accesspress_pro_options[linkedin]" type="text" value="<?php echo esc_url($settings['linkedin']); ?>" />
					</td>
					</tr>

          <tr><td scope="row"><label for="instagram"><?php _e('Instagram','accesspress_pro'); ?></label></td>
          <td>
          <input id="instagram" name="accesspress_pro_options[instagram]" type="text" value="<?php echo esc_url($settings['instagram']); ?>" />
          </td>
          </tr>

					<tr><td scope="row"><label for="sound_cloud"><?php _e('Sound Cloud','accesspress_pro'); ?></label></td>
					<td>
					<input id="sound_cloud" name="accesspress_pro_options[sound_cloud]" type="text" value="<?php echo esc_url($settings['sound_cloud']); ?>" />
					</td>
					</tr>

					<tr><td scope="row"><label for="skype"><?php _e('Skype','accesspress_pro'); ?></label></td>
					<td>
					<input id="skype" name="accesspress_pro_options[skype]" type="text" value="<?php echo esc_attr($settings['skype']); ?>" />
					</td>
					</tr>

					<tr><td scope="row"><label for="rss"><?php _e('RSS','accesspress_pro'); ?></label></td>
					<td>
					<input id="rss" name="accesspress_pro_options[rss]" type="text" value="<?php echo esc_url($settings['rss']); ?>" />
					</td>
					</tr>
				</table>
			</div>

			<!-- Tools -->
			<div id="options-group-15" class="group" style="display: none;">
			<h3><?php _e('Tools','accesspress_pro'); ?></h3>
			<div class="form-row">
				<label class="block"><?php _e('Custom CSS','accesspress_pro'); ?></label>
				<textarea id="custom_css" name="accesspress_pro_options[custom_css]" rows="6" cols="60"><?php echo $settings['custom_css']; ?></textarea>
				<p class="f13"><em><?php _e('Enter the custom css here','accesspress_pro'); ?></em></p>
			</div>

			<div class="form-row">
				<label class="block"><?php _e('Analytics Code','accesspress_pro'); ?></label>
				<textarea id="custom_code" name="accesspress_pro_options[custom_code]" rows="6" cols="60"><?php echo $settings['custom_code']; ?></textarea>
				<p class="f13"><em><?php _e('Enter the code from Facebook, Google or any other media here.','accesspress_pro'); ?></em></p>
			</div>
			<div class="form-row">
					<label class="block"><?php _e('AddThis Publisher ID','accesspress_pro'); ?></label>
					<input type="text" name="accesspress_pro_options[share_publisher_id]" value="<?php echo esc_attr($settings['share_publisher_id']);?>">
					<br /><br />
					<em>Go to <a href="https://www.addthis.com/" target="_blank">Addthis</a> website, register and enter the publisher id to keep the track fo your website.</em>
			</div>
			</div>

			<!-- Website launch Count Down -->
			<div id="options-group-16" class="group" style="display: none;">
			<h3><?php _e('Website Launch CountDown','accesspress_pro'); ?></h3>
				<div class="form-row">
				<label class="block"><?php _e('Activate CountDown Page','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="checkbox" name="accesspress_pro_options[tc_activate]" value="1" <?php checked(true, $settings['tc_activate']); ?>>
					<?php _e('Check to enable','accesspress_pro'); ?> 
					</label>
					</div>
				</div>

				<div class="form-row inline-label">
					<label class="inline-block"><?php _e('Website Launch Date','accesspress_pro'); ?></label>	
					<select name="accesspress_pro_options[tc_year]" >
					<option>Year</option>
					<?php for ($tc_year=2014; $tc_year < 2031; $tc_year++) { ?>
						<option value="<?php echo $tc_year; ?>" <?php selected( $tc_year , $settings['tc_year'] ); ?>><?php echo $tc_year;?></option>
					<?php } ?>
					</select>
					<select name="accesspress_pro_options[tc_month]">
					<option>Month</option>
					<?php for ($tc_month=1; $tc_month < 13; $tc_month++) { ?>
						<option value="<?php echo $tc_month; ?>" <?php selected( $tc_month , $settings['tc_month'] ); ?>><?php echo $tc_month;?></option>
					<?php } ?>
					</select>
					<select name="accesspress_pro_options[tc_day]">
					<option>Day</option>
					<?php for ($tc_day=1; $tc_day < 32; $tc_day++) { ?>
						<option value="<?php echo $tc_day; ?>" <?php selected( $tc_day , $settings['tc_day'] ); ?>><?php echo $tc_day;?></option>
					<?php } ?>
					</select>
					<select name="accesspress_pro_options[tc_hour]">
					<option>Hours</option>
					<?php for ($tc_hour=0; $tc_hour < 24; $tc_hour++) { ?>
						<option value="<?php echo $tc_hour; ?>" <?php selected( $tc_hour , $settings['tc_hour'] ); ?>><?php echo $tc_hour;?></option>
					<?php } ?>
					</select>
				</div>	

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Animation','accesspress_pro'); ?></label>
				<select name="accesspress_pro_options[tc_animation]">
					<option value="ticks" <?php selected( 'ticks' , $settings['tc_animation'] ); ?>>ticks</option>
					<option value="smooth" <?php selected( 'smooth' , $settings['tc_animation'] ); ?>>smooth</option>
				</select>
				</div>

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Circle Color','accesspress_pro'); ?></label>
				<input class="accesspress_pro-color wp-color-picker" type="text" name="accesspress_pro_options[tc_circle_color]" value="<?php echo esc_attr($settings['tc_circle_color']);?>">
				</div>

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Day Text','accesspress_pro'); ?></label>
				<input type="text" name="accesspress_pro_options[tc_day_text]" value="<?php echo esc_attr($settings['tc_day_text']);?>">
				</div>

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Hours Text','accesspress_pro'); ?></label>
				<input type="text" name="accesspress_pro_options[tc_hours_text]" value="<?php echo esc_attr($settings['tc_hours_text']);?>">
				</div>

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Minutes Text','accesspress_pro'); ?></label>
				<input type="text" name="accesspress_pro_options[tc_minutes_text]" value="<?php echo esc_attr($settings['tc_minutes_text']);?>">
				</div>

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Seconds Text','accesspress_pro'); ?></label>
				<input type="text" name="accesspress_pro_options[tc_seconds_text]" value="<?php echo esc_attr($settings['tc_seconds_text']);?>">
				</div>

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Day Circle color','accesspress_pro'); ?></label>
				<input class="accesspress_pro-color wp-color-picker" type="text" name="accesspress_pro_options[tc_day_color]" value="<?php echo esc_attr($settings['tc_day_color']);?>">
				</div>

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Hours Circle color','accesspress_pro'); ?></label>
				<input class="accesspress_pro-color wp-color-picker" type="text" name="accesspress_pro_options[tc_hours_color]" value="<?php echo esc_attr($settings['tc_hours_color']);?>">
				</div>

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Minutes Circle color','accesspress_pro'); ?></label>
				<input class="accesspress_pro-color wp-color-picker" type="text" name="accesspress_pro_options[tc_minutes_color]" value="<?php echo esc_attr($settings['tc_minutes_color']);?>">
				</div>

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Seconds Circle color','accesspress_pro'); ?></label>
				<input class="accesspress_pro-color wp-color-picker" type="text" name="accesspress_pro_options[tc_seconds_color]" value="<?php echo esc_attr($settings['tc_seconds_color']);?>">
				</div>

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Text color','accesspress_pro'); ?></label>
				<input class="accesspress_pro-color wp-color-picker" type="text" name="accesspress_pro_options[tc_text_color]" value="<?php echo esc_attr($settings['tc_text_color']);?>">
				</div>

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Page Background color','accesspress_pro'); ?></label>
				<input class="accesspress_pro-color wp-color-picker" type="text" name="accesspress_pro_options[tc_bg_color]" value="<?php echo esc_attr($settings['tc_bg_color']);?>">
				</div>

				<div class="form-row  inline-label">
					<label class="inline-block"><?php _e('Upload Logo','accesspress_pro'); ?></label>
					<a class="button" href="<?php echo admin_url('/themes.php?page=custom-header'); ?>"><?php _e('Upload','accesspress_pro'); ?></a>
				</div>

				<div class="form-row inline-label">
					<label class="block"><?php _e('Page Background Image','accesspress_pro'); ?></label>
							<div class="accesspress_pro_tc block">
							  <input type="text" name="accesspress_pro_options[tc_bg_image]" id="accesspress_pro_tc_upload" value="<?php if(!empty($settings['tc_bg_image'])){ echo $settings['tc_bg_image']; }?>" />
							  <input class="button" name="tc_upload_button" id="accesspress_pro_tc_upload_button" value="<?php _e('Upload','accesspress_pro'); ?>" type="button" />

							  <?php if(!empty($settings['tc_bg_image'])){ ?>
							  <div id="accesspress_pro_tc_image">
							  <img src="<?php echo $settings['tc_bg_image'] ?>" id="accesspress_pro_show_image">
							  <div id="accesspress_pro_tc_remove"><?php _e('Remove','accesspress_pro'); ?></div>
							  </div>
							  <?php }else{ ?>
							  <div id="accesspress_pro_tc_image" style="display:none">
							  <img src="<?php if(isset($settings['tc_bg_image'])) { echo $settings['media_upload']; } ?>" id="accesspress_pro_tc_show_image">
							  <a href="javascript:void(0)" id="accesspress_pro_tc_remove" title="<?php _e('remove','accesspress_pro'); ?>"><?php _e('Remove','accesspress_pro'); ?></a>
							  </div>
							  <?php	} ?>
							</div>
				</div>

				<div class="form-row inline-label">
				<label class="inline-block"><?php _e('Background Repeat','accesspress_pro'); ?></label>
					<select name="accesspress_pro_options[tc_background_repeat]">
						<option value="repeat" <?php selected($settings['tc_background_repeat'],'repeat'); ?>><?php _e('Repeat','accesspress_pro'); ?></option>
						<option value="no-repeat" <?php selected($settings['tc_background_repeat'],'no-repeat'); ?>><?php _e('No Repeat','accesspress_pro'); ?></option>
					</select>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Header Text','accesspress_pro'); ?></label>
				<textarea cols="60" rows="3" name="accesspress_pro_options[tc_text]"><?php echo esc_attr($settings['tc_text']);?></textarea>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Show Social Icon','accesspress_pro'); ?></label>
					<div class="checkbox">
					<label>
					<input type="checkbox" name="accesspress_pro_options[tc_show_social_icon]" value="1" <?php checked(true, $settings['tc_show_social_icon']); ?>>
					<?php _e('Check to enable','accesspress_pro'); ?> 
					</label>
					</div>
					<div style="height:10px"></div>
					<em>CLick on Social Links tab to enter your social Url.</em>
				</div>

				<div class="form-row">
				<label class="block"><?php _e('Social Text','accesspress_pro'); ?></label>
				<textarea cols="60" rows="3" name="accesspress_pro_options[tc_social_text]"><?php echo esc_attr($settings['tc_social_text']);?></textarea>
				</div>

			</div>

			<!-- About Accesspress Lite -->
			<div id="options-group-17" class="group" style="display: none;">
			<h3><?php _e('Know more about AccessPress Themes','accesspress_pro'); ?></h3>
				<div class="form-row">
				<p><?php _e('AccessPress Pro is premium version of AccessPress Lite developed by','accesspress_pro'); ?> <a href="http://accesspressthemes.com/" target="_blank">AccessPress Themes</a> <?php _e('(a WordPress division of Access Keys)','accesspress_pro'); ?></p>
				<p><?php _e('For documentation, click','accesspress_pro'); ?> <a target="_blank" href="<?php echo esc_url('https://accesspressthemes.com/documentation/theme-instruction-accesspress-pro/'); ?>"><?php _e('here','accesspress_pro'); ?></a></p>
            <p><?php _e('Check Demo Website, click','accesspress_pro'); ?> <a target="_blank" href="<?php echo esc_url('https://accesspressthemes.com/accesspress_pro-pro/'); ?>"><?php _e('here','accesspress_pro'); ?></a></p>
            <hr />
            <h4><?php _e('Get in touch','accesspress_pro'); ?></h4>
            <p>
            <?php _e('If you have any question feedback, please get in touch:','accesspress_pro'); ?><br/>
            <?php _e('General enquiries:','accesspress_pro'); ?> <a href="mailto:<?php echo esc_url('info@accesspressthemes.com'); ?>">info@accesspressthemes.com</a><br/>
            <?php _e('Support:','accesspress_pro'); ?> <a href="mailto:<?php echo esc_url('support@accesspressthemes.com'); ?>">support@accesspressthemes.com</a><br/>
            <?php _e('Sales:','accesspress_pro'); ?> <a href="mailto:<?php echo esc_url('sales@accesspressthemes.com'); ?>">sales@accesspressthemes.com</a><br/>
            </p>

            <hr />

            <h4><?php _e('Get social','accesspress_pro'); ?></h4>

            <p><?php _e('Get connected with us on social media. Facebook is the best place to find updates on our themes and plugins:','accesspress_pro'); ?></p>

            <p><?php _e('Like us on facebook:','accesspress_pro'); ?></p>
            <iframe style="border: none; overflow: hidden; width: 780px; height: 230px;" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FAccessPress-Themes%2F1396595907277967&amp;width=780&amp;height=230&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true&amp;appId=1411139805828592" width="780" height="230" frameborder="0" scrolling="no"></iframe>
        </div>				
			</div>

			<div id="optionsframework-submit">
			<input type="submit" class="button-primary" value="<?php esc_attr_e('Save Options','accesspress_pro'); ?>" />
			</div>

			</form>
		</div><!-- #optionsframework -->
	</div><!-- #optionsframework-metabox -->
	<div class="clear"></div>
	</div><!-- .wrapper-bg -->
	</div>
<?php
}


function accesspress_pro_validate_options( $input ) {
	global $accesspress_pro_options, $accesspress_pro_postlist, $accesspress_pro_slider, $accesspress_pro_slider_show_pager, $accesspress_pro_slider_show_controls, $accesspress_pro_slider_auto, $accesspress_pro_slider_caption;

	$settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
	
	// We strip all tags from the text field, to avoid vulnerablilties.
	$input['active_tab'] = sanitize_text_field( $input['active_tab'] );
  $input['skins'] = sanitize_text_field( $input['skins'] );
	$input['webpage_layout'] = sanitize_text_field( $input['webpage_layout'] );
	$input['background_pattern'] = sanitize_text_field( $input['background_pattern'] );
	$input['read_more_text'] = wp_filter_nohtml_kses( $input['read_more_text'] );
	$input['header_style'] = sanitize_text_field( $input['header_style'] );
	$input['footer_copyright'] = wp_filter_nohtml_kses( $input['footer_copyright'] );
	$input['right_footer_text'] = wp_kses_post( $input['right_footer_text'] );
	$input['h1_text_transform'] = sanitize_text_field( $input['h1_text_transform'] );
	$input['h2_text_transform'] = sanitize_text_field( $input['h2_text_transform'] );
	$input['h3_text_transform'] = sanitize_text_field( $input['h3_text_transform'] );
	$input['h4_text_transform'] = sanitize_text_field( $input['h4_text_transform'] );
	$input['h5_text_transform'] = sanitize_text_field( $input['h5_text_transform'] );
	$input['h6_text_transform'] = sanitize_text_field( $input['h6_text_transform'] );
	$input['heading_font'] = sanitize_text_field( $input['heading_font'] );
	$input['heading_font_weight'] = sanitize_text_field( $input['heading_font_weight'] );
	$input['body_font'] = sanitize_text_field( $input['body_font'] );
	$input['body_font_weight'] = sanitize_text_field( $input['body_font_weight'] );
	$input['breadcrumb_seperator'] = sanitize_text_field( $input['breadcrumb_seperator'] );
    $input['breadcrumb_home_text'] = sanitize_text_field( $input['breadcrumb_home_text'] );
    $input['home_page_layout'] = sanitize_text_field( $input['home_page_layout'] );
    $input['welcome_post'] = wp_filter_nohtml_kses( $input['welcome_post'] );
    $input['featured_post1'] = wp_filter_nohtml_kses( $input['featured_post1'] );
    $input['featured_post2'] = wp_filter_nohtml_kses( $input['featured_post2'] );
    $input['featured_post3'] = wp_filter_nohtml_kses( $input['featured_post3'] );
    $input['featured_post4'] = wp_filter_nohtml_kses( $input['featured_post4'] );
    $input['featured_post1_icon'] = sanitize_text_field( $input['featured_post1_icon'] );
    $input['featured_post2_icon'] = sanitize_text_field( $input['featured_post2_icon'] );
    $input['featured_post3_icon'] = sanitize_text_field( $input['featured_post3_icon'] );
    $input['featured_post4_icon'] = sanitize_text_field( $input['featured_post4_icon'] );
    $input['blog_cat'] = wp_filter_nohtml_kses( $input['blog_cat'] );
    $input['welcome_post_readmore'] = wp_filter_nohtml_kses( $input['welcome_post_readmore'] );
    $input['event_page_title'] = wp_filter_nohtml_kses( $input['event_page_title'] );
    $input['featured_post_readmore'] = wp_filter_nohtml_kses( $input['featured_post_readmore'] );
    $input['blog_cat'] = sanitize_text_field( $input['blog_cat'] );
    $input['slider_mode'] = sanitize_text_field( $input['slider_mode'] );
    $input['show_slider'] = sanitize_text_field( $input['show_slider'] );
    $input['slider_show_controls'] = sanitize_text_field( $input['slider_show_controls'] );
    $input['slider_show_pager'] = sanitize_text_field( $input['slider_show_pager'] );
    $input['slider_show_pager_image'] = sanitize_text_field( $input['slider_show_pager_image'] );
    $input['slider_auto'] = sanitize_text_field( $input['slider_auto'] );
    $input['slider_caption'] = sanitize_text_field( $input['slider_caption'] );
    $input['portfolio_sidebar'] = sanitize_text_field( $input['portfolio_sidebar'] );
    $input['portfolio_layout'] = sanitize_text_field( $input['portfolio_layout'] );
    $input['portfolio_grid_columns'] = sanitize_text_field( $input['portfolio_grid_columns'] );
    $input['portfolio_singlepage_left_sidebar'] = sanitize_text_field( $input['portfolio_singlepage_left_sidebar'] );
    $input['portfolio_singlepage_right_sidebar'] = sanitize_text_field( $input['portfolio_singlepage_right_sidebar'] );
    $input['faq_answer_toggle'] = sanitize_text_field( $input['faq_answer_toggle'] );
    $input['faq_right_sidebar'] = sanitize_text_field( $input['faq_right_sidebar'] );
    $input['calltoaction_text_align'] = sanitize_text_field( $input['calltoaction_text_align'] );
    $input['calltoaction_read_more_text'] = wp_filter_nohtml_kses( $input['calltoaction_read_more_text'] );
    $input['calltoaction_read_more_link'] = esc_url_raw( $input['calltoaction_read_more_link'] );
    $input['client_slider_heading'] = wp_filter_nohtml_kses( $input['client_slider_heading'] );
    $input['share_publisher_id'] = sanitize_text_field( $input['share_publisher_id'] );
    $input['tc_year'] = sanitize_text_field( $input['tc_year'] );
    $input['tc_month'] = sanitize_text_field( $input['tc_month'] );
    $input['tc_hour'] = sanitize_text_field( $input['tc_hour'] );
    $input['tc_day'] = sanitize_text_field( $input['tc_day'] );
    $input['tc_day_text'] = sanitize_text_field( $input['tc_day_text'] );
    $input['tc_hours_text'] = sanitize_text_field( $input['tc_hours_text'] );
    $input['tc_minutes_text'] = sanitize_text_field( $input['tc_minutes_text'] );
    $input['tc_seconds_text'] = sanitize_text_field( $input['tc_seconds_text'] );
    $input['tc_text'] = wp_kses_post( $input['tc_text'] );
    $input['tc_social_text'] = wp_kses_post( $input['tc_social_text'] );

	// If the checkbox has not been checked, we void it
	if ( ! isset( $input['responsive_design'] ) )
		$input['responsive_design'] = null;
	// We verify if the input is a boolean value
	$input['responsive_design'] = ( $input['responsive_design'] == 1 ? 1 : 0 );

	if ( ! isset( $input['show_comments'] ) )
		$input['show_comments'] = null;
	$input['show_comments'] = ( $input['show_comments'] == 1 ? 1 : 0 );

	if ( ! isset( $input['show_posted_date'] ) )
		$input['show_posted_date'] = null;
	$input['show_posted_date'] = ( $input['show_posted_date'] == 1 ? 1 : 0 );

	if ( ! isset( $input['enable_prev_next'] ) )
		$input['enable_prev_next'] = null;
	$input['enable_prev_next'] = ( $input['enable_prev_next'] == 1 ? 1 : 0 );

	if ( ! isset( $input['sticky_header'] ) )
		$input['sticky_header'] = null;
	$input['sticky_header'] = ( $input['sticky_header'] == 1 ? 1 : 0 );

	if ( ! isset( $input['show_search'] ) )
		$input['show_search'] = null;
	$input['show_search'] = ( $input['show_search'] == 1 ? 1 : 0 );

	if ( ! isset( $input['show_breadcrumb'] ) )
		$input['show_breadcrumb'] = null;
	$input['show_breadcrumb'] = ( $input['show_breadcrumb'] == 1 ? 1 : 0 );

	if ( ! isset( $input['show_clients_logo'] ) )
		$input['show_clients_logo'] = null;
	$input['show_clients_logo'] = ( $input['show_clients_logo'] == 1 ? 1 : 0 );

	if ( ! isset( $input['show_fontawesome'] ) )
		$input['show_fontawesome'] = null;
	$input['show_fontawesome'] = ( $input['show_fontawesome'] == 1 ? 1 : 0 );
    
    if ( ! isset( $input['big_icons'] ) )
		$input['big_icons'] = null;
	$input['big_icons'] = ( $input['big_icons'] == 1 ? 1 : 0 );

	if ( ! isset( $input['featured_bar'] ) )
		$input['featured_bar'] = null;
	$input['featured_bar'] = ( $input['featured_bar'] == 1 ? 1 : 0 );

	if ( ! isset( $input['portfolio_fullwidth'] ) )
		$input['portfolio_fullwidth'] = null;
	$input['portfolio_fullwidth'] = ( $input['portfolio_fullwidth'] == 1 ? 1 : 0 );

	if ( ! isset( $input['portfolio_show_socials'] ) )
		$input['portfolio_show_socials'] = null;
	$input['portfolio_show_socials'] = ( $input['portfolio_show_socials'] == 1 ? 1 : 0 );

	if ( ! isset( $input['portfolio_enable_prev_next'] ) )
		$input['portfolio_enable_prev_next'] = null;
	$input['portfolio_enable_prev_next'] = ( $input['portfolio_enable_prev_next'] == 1 ? 1 : 0 );

	if ( ! isset( $input['event_fullwidth'] ) )
		$input['event_fullwidth'] = null;
	$input['event_fullwidth'] = ( $input['event_fullwidth'] == 1 ? 1 : 0 );

	if ( ! isset( $input['event_show_socials'] ) )
		$input['event_show_socials'] = null;
	$input['event_show_socials'] = ( $input['event_show_socials'] == 1 ? 1 : 0 );

	if ( ! isset( $input['event_enable_prev_next'] ) )
		$input['event_enable_prev_next'] = null;
	$input['event_enable_prev_next'] = ( $input['event_enable_prev_next'] == 1 ? 1 : 0 );

	if ( ! isset( $input['portfolio_show_featured_image'] ) )
		$input['portfolio_show_featured_image'] = null;
	$input['portfolio_show_featured_image'] = ( $input['portfolio_show_featured_image'] == 1 ? 1 : 0 );

	if ( ! isset( $input['event_show_featured_image'] ) )
		$input['event_show_featured_image'] = null;
	$input['event_show_featured_image'] = ( $input['event_show_featured_image'] == 1 ? 1 : 0 );

	if ( ! isset( $input['faq_fullwidth'] ) )
		$input['faq_fullwidth'] = null;
	$input['faq_fullwidth'] = ( $input['faq_fullwidth'] == 1 ? 1 : 0 );

	if ( ! isset( $input['disable_client_slider'] ) )
		$input['disable_client_slider'] = null;
	$input['disable_client_slider'] = ( $input['disable_client_slider'] == 1 ? 1 : 0 );

	
	if ( ! isset( $input['event_show_date'] ) )
		$input['event_show_date'] = null;
	$input['event_show_date'] = ( $input['event_show_date'] == 1 ? 1 : 0 );

	if ( ! isset( $input['tc_activate'] ) )
		$input['tc_activate'] = null;
	$input['tc_activate'] = ( $input['tc_activate'] == 1 ? 1 : 0 );

	if ( ! isset( $input['tc_show_social_icon'] ) )
		$input['tc_show_social_icon'] = null;
	$input['tc_show_social_icon'] = ( $input['tc_show_social_icon'] == 1 ? 1 : 0 );

	if ( ! isset( $input['lite_slider'] ) )
		$input['lite_slider'] = null;
	$input['lite_slider'] = ( $input['lite_slider'] == 1 ? 1 : 0 );
    
    if ( ! isset( $input['welcome_post_content'] ) )
		$input['welcome_post_content'] = null;
	$input['welcome_post_content'] = ( $input['welcome_post_content'] == 1 ? 1 : 0 );



	if (isset( $input['archive_char'] ) ){
        if(is_numeric($input['archive_char'])){
            $input['archive_char'] = absint($input['archive_char']);
        }else{
        	 $input['archive_char'] = '200' ;
        }
    }

    if (isset( $input['logo_pading_top'] ) ){
        if(is_numeric($input['logo_pading_top'])){
            $input['logo_pading_top'] = intval($input['logo_pading_top']);
        }else{
        	 $input['logo_pading_top'] = '0' ;
        }
    }

    if (isset( $input['logo_pading_bottom'] ) ){
        if(is_numeric($input['logo_pading_bottom'])){
            $input['logo_pading_bottom'] = intval($input['logo_pading_bottom']);
        }else{
        	 $input['logo_pading_bottom'] = '0' ;
        }
    }

    if (isset( $input['logo_pading_left'] ) ){
        if(is_numeric($input['logo_pading_left'])){
            $input['logo_pading_left'] = intval($input['logo_pading_left']);
        }else{
        	 $input['logo_pading_left'] = '0' ;
        }
    }

    if (isset( $input['logo_pading_right'] ) ){
        if(is_numeric($input['logo_pading_right'])){
            $input['logo_pading_right'] = intval($input['logo_pading_right']);
        }else{
        	 $input['logo_pading_right'] = '0' ;
        }
    }

    if (isset( $input['nav_pading_top'] ) ){
        if(is_numeric($input['nav_pading_top'])){
            $input['nav_pading_top'] = intval($input['nav_pading_top']);
        }else{
        	 $input['nav_pading_top'] = '0' ;
        }
    }

    if (isset( $input['h1_font_size'] ) ){
        if(is_numeric($input['h1_font_size'])){
            $input['h1_font_size'] = absint($input['h1_font_size']);
        }else{
        	 $input['h1_font_size'] = '' ;
        }
    }

    if (isset( $input['h2_font_size'] ) ){
        if(is_numeric($input['h3_font_size'])){
            $input['h2_font_size'] = absint($input['h2_font_size']);
        }else{
        	 $input['h2_font_size'] = '' ;
        }
    }

    if (isset( $input['h3_font_size'] ) ){
        if(is_numeric($input['h3_font_size'])){
            $input['h3_font_size'] = absint($input['h3_font_size']);
        }else{
        	 $input['h3_font_size'] = '' ;
        }
    }

    if (isset( $input['h4_font_size'] ) ){
        if(is_numeric($input['h4_font_size'])){
            $input['h4_font_size'] = absint($input['h4_font_size']);
        }else{
        	 $input['h4_font_size'] = '' ;
        }
    }

    if (isset( $input['h5_font_size'] ) ){
        if(is_numeric($input['h5_font_size'])){
            $input['h5_font_size'] = absint($input['h5_font_size']);
        }else{
        	 $input['h5_font_size'] = '' ;
        }
    }

    if (isset( $input['h6_font_size'] ) ){
        if(is_numeric($input['h6_font_size'])){
            $input['h6_font_size'] = absint($input['h6_font_size']);
        }else{
        	 $input['h6_font_size'] = '' ;
        }
    }

    if (isset( $input['body_font_size'] ) ){
        if(is_numeric($input['body_font_size'])){
            $input['body_font_size'] = absint($input['body_font_size']);
        }else{
        	 $input['body_font_size'] = '' ;
        }
    }

    if (isset( $input['welcome_post_char'] ) ){
        if(is_numeric($input['welcome_post_char'])){
            $input['welcome_post_char'] = absint($input['welcome_post_char']);
        }else{
        	 $input['welcome_post_char'] = '650' ;
        }
    }

    if (isset( $input['no_of_event'] ) ){
        if(is_numeric($input['no_of_event'])){
            $input['no_of_event'] = absint($input['no_of_event']);
        }else{
        	 $input['no_of_event'] = '3' ;
        }
    }

    if (isset( $input['featured_post_char'] ) ){
        if(is_numeric($input['featured_post_char'])){
            $input['featured_post_char'] = absint($input['featured_post_char']);
        }else{
        	 $input['featured_post_char'] = '180' ;
        }
    }

    if (isset( $input['slider_speed'] ) ){
        if(is_numeric($input['slider_speed'])){
            $input['slider_speed'] = absint($input['slider_speed']);
        }else{
        	 $input['slider_speed'] = '3000' ;
        }
    }

    if (isset( $input['portfolio_grid_char'] ) ){
        if(is_numeric($input['portfolio_grid_char'])){
            $input['portfolio_grid_char'] = absint($input['portfolio_grid_char']);
        }else{
        	 $input['portfolio_grid_char'] = '180' ;
        }
    }

    if (isset( $input['event_char'] ) ){
        if(is_numeric($input['event_char'])){
            $input['event_char'] = absint($input['event_char']);
        }else{
        	 $input['event_char'] = '180' ;
        }
    }

    if (isset( $input['calltoaction_font_size'] ) ){
        if(is_numeric($input['calltoaction_font_size'])){
            $input['calltoaction_font_size'] = absint($input['calltoaction_font_size']);
        }else{
        	 $input['calltoaction_font_size'] = '' ;
        }
    }

    if( isset( $input[ 'calltoaction_text' ] ) ) {
	   $input[ 'calltoaction_text' ] = wp_kses_post( $input[ 'calltoaction_text' ] );
    }

    if( isset( $input[ 'header_text' ] ) ) {
	   $input[ 'header_text' ] = wp_kses_post( $input[ 'header_text' ] );
    }

    if( isset( $input[ 'google_map' ] ) ) {
    	$allowed_tags=array(
    		'iframe' => array(
    			'src' => array(),
                'height' => array(),
                'width' => array(),
                'frameborder' => array(),
                'style' => array()
    			)
    		);
	   $input[ 'google_map' ] = wp_kses( $input[ 'google_map' ],$allowed_tags );
    }


	if ( ! isset( $input['show_social_header'] ) )
		$input['show_social_header'] = null;
	$input['show_social_header'] = ( $input['show_social_header'] == 1 ? 1 : 0 );

	 // data validation for Social Icons
	if( isset( $input[ 'facebook' ] ) ) {
		$input[ 'facebook' ] = esc_url_raw( $input[ 'facebook' ] );
	};
	if( isset( $input[ 'twitter' ] ) ) {
		$input[ 'twitter' ] = esc_url_raw( $input[ 'twitter' ] );
	};
	if( isset( $input[ 'gplus' ] ) ) {
		$input[ 'gplus' ] = esc_url_raw( $input[ 'gplus' ] );
	};
	if( isset( $input[ 'youtube' ] ) ) {
		$input[ 'youtube' ] = esc_url_raw( $input[ 'youtube' ] );
	};
	if( isset( $input[ 'pinterest' ] ) ) {
		$input[ 'pinterest' ] = esc_url_raw( $input[ 'pinterest' ] );
	};
	if( isset( $input[ 'linkedin' ] ) ) {
		$input[ 'linkedin' ] = esc_url_raw( $input[ 'linkedin' ] );
	};
  if( isset( $input[ 'instagram' ] ) ) {
    $input[ 'instagram' ] = esc_url_raw( $input[ 'instagram' ] );
  };
	if( isset( $input[ 'flickr' ] ) ) {
		$input[ 'flickr' ] = esc_url_raw( $input[ 'flickr' ] );
	};
	if( isset( $input[ 'vimeo' ] ) ) {
		$input[ 'vimeo' ] = esc_url_raw( $input[ 'vimeo' ] );
	};
	if( isset( $input[ 'stumbleupon' ] ) ) {
		$input[ 'stumbleupon' ] = esc_url_raw( $input[ 'stumbleupon' ] );
	};
	if( isset( $input[ 'dribble' ] ) ) {
		$input[ 'dribble' ] = esc_url_raw( $input[ 'dribble' ] );
	};
	if( isset( $input[ 'accesspress_pro_tumblr' ] ) ) {
		$input[ 'tumblr' ] = esc_url_raw( $input[ 'atumblr' ] );
	};
	if( isset( $input[ 'skype' ] ) ) {
		$input[ 'skype' ] = esc_attr($input[ 'skype' ]) ;
	};
	if( isset( $input[ 'rss' ] ) ) {
		$input[ 'rss' ] = esc_url_raw( $input[ 'rss' ] );
	};
	if( isset( $input[ 'tc_bg_image' ] ) ) {
		$input[ 'tc_bg_image' ] = esc_url_raw( $input[ 'tc_bg_image' ] );
	};
	return $input;
}

endif;  // EndIf is_admin()
?>