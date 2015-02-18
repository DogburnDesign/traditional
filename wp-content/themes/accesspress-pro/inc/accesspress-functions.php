<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Accesspress Pro
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */
function accesspress_pro_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'accesspress_pro_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function accesspress_pro_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'accesspress_pro_body_classes' );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function accesspress_pro_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}

	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', 'accesspress_pro' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'accesspress_pro_wp_title', 10, 2 );

/**
 * Sets the authordata global when viewing an author archive.
 *
 * This provides backwards compatibility with
 * http://core.trac.wordpress.org/changeset/25574
 *
 * It removes the need to call the_post() and rewind_posts() in an author
 * template to print information about the author.
 *
 * @global WP_Query $wp_query WordPress Query object.
 * @return void
 */
function accesspress_pro_setup_author() {
	global $wp_query;

	if ( $wp_query->is_author() && isset( $wp_query->post ) ) {
		$GLOBALS['authordata'] = get_userdata( $wp_query->post->post_author );
	}
}
add_action( 'wp', 'accesspress_pro_setup_author' );


/**
 * Register widgetized area and update sidebar with default widgets.
 */
function accesspress_pro_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Left Sidebar', 'accesspress_pro' ),
		'id'            => 'left-sidebar',
		'description'   => 'Display items in the Left Sidebar of the inner pages',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '<span></h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'accesspress_pro' ),
		'id'            => 'right-sidebar',
		'description'   => 'Display items in the Right Sidebar of the inner pages',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '<span></h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Event Sidebar', 'accesspress_pro' ),
		'id'            => 'event-sidebar',
		'description'   => 'Display items in the home page inplace of Event Listing',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title"><span>',
		'after_title'   => '<span></h1>',
	) );
    
    register_sidebar( array(
		'name'          => __( 'Home Page Text Bar', 'accesspress_pro' ),
		'id'            => 'text-bar',
		'description'   => 'Display items in the Home page Above Footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '<span></h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Featured Bar Column One', 'accesspress_pro' ),
		'id'            => 'textblock-1',
		'description'   => 'Display items in the left just above the footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => __( 'Featured Bar Column Two', 'accesspress_pro' ),
		'id'            => 'textblock-2',
		'description'   => 'Display items in the middle just above the footer and replaces defaul gallery',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Featured Bar Column Three', 'accesspress_pro' ),
		'id'            => 'textblock-3',
		'description'   => 'Display items in the right just above the footer and replaces testimonial',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Area Column One', 'accesspress_pro' ),
		'id'            => 'footer-1',
		'description'   => 'Display items in First Footer Area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Area Column Two', 'accesspress_pro' ),
		'id'            => 'footer-2',
		'description'   => 'Display items in Second Footer Area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Area Column Three', 'accesspress_pro' ),
		'id'            => 'footer-3',
		'description'   => 'Display items in Third Footer Area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Area Column Four', 'accesspress_pro' ),
		'id'            => 'footer-4',
		'description'   => 'Display items in Fourth Footer Area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => __( 'Widget Block one', 'accesspress_pro' ),
		'id'            => 'widgetblock-1',
		'description'   => 'Display items to assign the sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => __( 'Widget Block Two', 'accesspress_pro' ),
		'id'            => 'widgetblock-2',
		'description'   => 'Display items to assign the sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Widget Block Three', 'accesspress_pro' ),
		'id'            => 'widgetblock-3',
		'description'   => 'Display items to assign the sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'accesspress_pro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function accesspress_pro_scripts() {
	global $accesspress_pro_options;
	$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
	$accesspress_pro_skin_style = $accesspress_pro_settings['skins'];
	
	wp_enqueue_style( 'googleFonts', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,700|Open+Sans+Condensed:300,300italic,700' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/css/nivo-lightbox.css' );
	wp_enqueue_style( 'bx-slider-style', get_template_directory_uri() . '/css/jquery.bxslider.css' );
	wp_enqueue_style( 'sequence-slider-style', get_template_directory_uri() . '/css/sequence-slider.css' );
	wp_enqueue_style( 'superfish-style', get_template_directory_uri() . '/css/superfish.css' );
	wp_enqueue_style( 'timecircle-style', get_template_directory_uri() . '/css/TimeCircles.css' );
	wp_enqueue_style( 'accesspress_pro-style', get_stylesheet_uri() );

	/* Loads up responsive css if it is not disabled */

	if ( $accesspress_pro_settings[ 'responsive_design' ] == 0 ) {	
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	}

	wp_enqueue_script( 'jquery'); 
	wp_enqueue_script( 'accesspress-plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'Time-plugins', get_template_directory_uri() . '/js/TimeCircles.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true );
 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'accesspress_pro_scripts' );

function accesspress_dynamic_styles() {
	wp_enqueue_style( 'accesspress_parallax-dynamic-style', get_template_directory_uri() . '/css/style.php' );
}
add_action( 'wp_enqueue_scripts', 'accesspress_dynamic_styles', 15 );

/**
* Loads up favicon
*/
	function accesspress_pro_add_favicon(){
		global $accesspress_pro_options;
		$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
		
		if( !empty($accesspress_pro_settings[ 'media_upload' ])){
		echo '<link rel="shortcut icon" type="image/png" href="'. $accesspress_pro_settings[ 'media_upload' ].'"/>';
		}
	}
	add_action('wp_head', 'accesspress_pro_add_favicon');

	function accesspress_pro_social_cb(){ 
		global $accesspress_pro_options;
		$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
		?>
		<div class="socials">
		<?php if(!empty($accesspress_pro_settings['facebook'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['facebook']); ?>" class="facebook" data-title="Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['twitter'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['twitter']); ?>" class="twitter" data-title="Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['gplus'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['gplus']); ?>" class="gplus" data-title="Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['youtube'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['youtube']); ?>" class="youtube" data-title="Youtube" target="_blank"><span class="font-icon-social-youtube"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['pinterest'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['pinterest']); ?>" class="pinterest" data-title="Pinterest" target="_blank"><span class="font-icon-social-pinterest"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['linkedin'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['linkedin']); ?>" class="linkedin" data-title="Linkedin" target="_blank"><span class="font-icon-social-linkedin"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['flickr'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['flickr']); ?>" class="flickr" data-title="Flickr" target="_blank"><span class="font-icon-social-flickr"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['vimeo'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['vimeo']); ?>" class="vimeo" data-title="Vimeo" target="_blank"><span class="font-icon-social-vimeo"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['stumbleupon'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['stumbleupon']); ?>" class="stumbleupon" data-title="Stumbleupon" target="_blank"><span class="font-icon-social-stumbleupon"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['dribble'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['dribble']); ?>" class="dribble" data-title="dribble" target="_blank"><span class="fa fa-dribbble"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['stumbleupon'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['tumblr']); ?>" class="tumblr" data-title="Tumblr" target="_blank"><span class="font-icon-social-tumblr"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['instagram'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['instagram']); ?>" class="instagram" data-title="instagram" target="_blank"><span class="fa fa-instagram"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['sound_cloud'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['sound_cloud']); ?>" class="sound-cloud" data-title="sound-cloud" target="_blank"><span class="font-icon-social-soundcloud"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['skype'])){ ?>
		<a href="<?php echo esc_attr($accesspress_pro_settings['skype']); ?>" class="skype" data-title="Skype" target="_blank"><span class="font-icon-social-skype"></span></a>
		<?php } ?>

		<?php if(!empty($accesspress_pro_settings['rss'])){ ?>
		<a href="<?php echo esc_url($accesspress_pro_settings['rss']); ?>" class="rss" data-title="RSS" target="_blank"><span class="font-icon-rss"></span></a>
		<?php } ?>
		</div>
	<?php } 

	add_action( 'accesspress_pro_social_links', 'accesspress_pro_social_cb');	

	function accesspress_pro_header_text_cb(){
		global $accesspress_pro_options;
		$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
		if(!empty($accesspress_pro_settings['header_text'])){
		echo '<div class="header-text">'.$accesspress_pro_settings['header_text'].'</div>';
		}
	}
	add_action('accesspress_pro_header_text','accesspress_pro_header_text_cb');

	function accesspress_pro_excerpt( $accesspress_pro_content , $accesspress_pro_letter_count){
		$accesspress_pro_letter_count = !empty($accesspress_pro_letter_count) ? $accesspress_pro_letter_count : 100 ;
		$accesspress_pro_striped_content = strip_tags($accesspress_pro_content);
		$accesspress_pro_excerpt = mb_substr($accesspress_pro_striped_content, 0 , $accesspress_pro_letter_count);
		if(strlen($accesspress_pro_striped_content) > strlen($accesspress_pro_excerpt)){
			$accesspress_pro_excerpt.= "...";
		}
		return $accesspress_pro_excerpt;
	}

	function accesspress_pro_slidercb(){
		if(is_home() || is_front_page() ){
			global $accesspress_pro_options, $post; 
			$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
			
			if($accesspress_pro_settings['show_slider'] == 'yes' && isset($accesspress_pro_settings['slider']) ){ 
			
			$slider_images = $accesspress_pro_settings['slider'];
			$slider_show_pager = $accesspress_pro_settings['slider_show_pager'] == 'yes1' ? 'true' : 'false';
			$slider_show_controls = $accesspress_pro_settings['slider_show_controls'] == 'yes2' ? 'true' : 'false';
			$slider_auto = $accesspress_pro_settings['slider_auto'] == 'yes3' ? 'true' : 'false';
			
			$count = count($slider_images);
			$total = 0;
			?>
			<section id="slider-banner">

			<?php
			if($accesspress_pro_settings['lite_slider'] == 1){ ?>

			<script type="text/javascript">
            jQuery(function(){
				jQuery('.bx-slider').bxSlider({
					adaptiveHeight : true,
					pager:<?php echo $slider_show_pager; ?>,
					controls:<?php echo $slider_show_controls; ?>,
					mode:'fade',
					auto :<?php echo $slider_auto; ?>,
					pause: '<?php echo $accesspress_pro_settings['slider_speed']; ?>',
					speed: 1000,
				});
			});
       		</script>

				<div class="bx-slider">
				<?php 
					if(!empty($slider_images )){
						foreach ($slider_images as $slider_image) { 
						$total++;				
					?>
						<div class="slides">
							
								<img src="<?php echo $slider_image['banner']; ?>">
								
								<?php if($accesspress_pro_settings['slider_caption']=='yes4'): ?>
								<div class="slider-caption">
									<div class="ak-container">
										<h1 class="caption-title"><?php echo $slider_image['caption_header']; ?></h1>
										<h2 class="caption-description"><?php echo $slider_image['caption_desc']; ?></h2>
										<?php if(!empty($slider_image['slider_read_more'])) :?>
										<a class="more-link" href="<?php echo $slider_image['slider_read_more_link']; ?>"><?php echo $slider_image['slider_read_more']; ?></a>
										<?php endif; ?>
									</div>
								</div>
								<?php  endif; ?>
				
			            </div>
						<?php 
						}
					} ?>
				    </div>
            	<?php
            	}else {?>

			<script type="text/javascript"> 
			    jQuery(document).ready(function(){
				    var options = {
				        nextButton: <?php echo $slider_show_controls; ?>,
				        prevButton: <?php echo $slider_show_controls; ?>,
				        pagination: <?php echo $slider_show_pager; ?>,
				        animateStartingFrameIn: true,
				        autoPlay: <?php echo $slider_auto; ?>,
				        autoPlayDelay: <?php echo $accesspress_pro_settings['slider_speed']; ?>,
                        pauseOnHover: false,
                        hidePreloaderDelay: 500,
                        preloader: true,
                        preventDelayWhenReversingAnimations: true,
                        hidePreloaderUsingCSS: false,
				    };
				    
				    var mySequence = jQuery("#sequence").sequence(options).data("sequence");
				});
			</script>
			<div class="sequence-theme <?php echo $accesspress_pro_settings['slider_mode']; ?>">
			<div id="sequence">

				<?php if($accesspress_pro_settings['slider_show_controls']=='yes2'):?>
				<div class="sequence-prev"><span></span></div>
				<div class="sequence-next"><span></span></div>
                <?php endif; ?>

				<ul class="sequence-canvas">
					<?php
					if(!empty($slider_images )){
						
						foreach ($slider_images as $slider_image) { 
						$total++;				
							 ?>

						<li class="<?php if($total == 1) echo 'animate-in' ?>">
                            <div class="li-wrap">
							<div class="big-banner" style="background-image:url(<?php echo $slider_image['banner']; ?>);"></div>

							<div class="mid-content">
								<?php if($accesspress_pro_settings['slider_mode']=='slider_type1'):?>
								<div class="model"> 
                                    <img alt="slider-image" src="<?php echo $slider_image['image']; ?>">
                                </div> 
								<?php endif; ?>
								
								<?php if($accesspress_pro_settings['slider_caption']=='yes4'):?>
									<div class="title"><?php echo $slider_image['caption_header']; ?></div>
									<div class="subtitle"><?php echo $slider_image['caption_desc']; ?></div>
									<?php if(!empty($slider_image['slider_read_more'])) :?>
									<a class="more-link" href="<?php echo $slider_image['slider_read_more_link']; ?>"><?php echo $slider_image['slider_read_more']; ?></a>
									<?php 
								endif;
								endif; ?>
							</div>
                            </div>
						</li>

						<?php } ?>
					
					<?php } ?>	
				</ul>

				<ul class="sequence-pagination">
					<?php 
					if(!empty($slider_images )){
						if($accesspress_pro_settings['slider_show_pager_image'] == 'yes'){
							foreach ($slider_images as $slider_image) { 
							$extension_pos = strrpos($slider_image['banner'], '.'); // find position of the last dot, so where the extension starts
							$thumb = substr($slider_image['banner'], 0, $extension_pos) . '-150x150' . substr($slider_image['banner'], $extension_pos);	
							?>
							<li><img alt="slider-image" src="<?php echo $thumb; ?>"></li>
							<?php } 
						}else{
							for ($i=1; $i <= $count ; $i++) { ?>
								<li class="dots"><a href="javascript:void(0)"><?php echo $i ?></a></li>
						<?php	
							}
						}
					}?>
				</ul>
			</div>
			</div>
			<?php } ?>
			</section><!-- #slider-banner -->
			<?php }
		}
	}	

   add_action('accesspress_pro_slider','accesspress_pro_slidercb');

   function accesspress_pro_layout_class($classes){
   	global $post;
		if( is_404()){
		$classes[] = ' ';
		}elseif(is_singular()){
		$post_class = get_post_meta( $post -> ID, 'accesspress_pro_sidebar_layout', true );
		$classes[] = $post_class;
		}else{
		$classes[] = 'right-sidebar';	
		}
		return $classes;
	}

	add_filter( 'body_class', 'accesspress_pro_layout_class' );

	function accesspress_pro_web_layout($classes){
	    global $accesspress_pro_options, $post;
		$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
	    $accesspress_pro_weblayout = $accesspress_pro_settings['webpage_layout'];
	    if($accesspress_pro_weblayout == 'Boxed'){
	        $classes[]= 'boxed-layout';
	    }
	    return $classes;
   }
   
   add_filter( 'body_class', 'accesspress_pro_web_layout' );

   function accesspress_pro_logo_metabox(){
   remove_meta_box( 'postimagediv', 'logo', 'side' );
   add_meta_box('postimagediv', __('Upload Logo', 'accesspress_pro'), 'post_thumbnail_meta_box', 'logo', 'normal', 'high');
   }
   add_action('do_meta_boxes', 'accesspress_pro_logo_metabox' );

   function accesspress_pro_testimonial_metabox(){
   remove_meta_box( 'postimagediv', 'testimonial', 'side' );
   add_meta_box('postimagediv', __('Upload Clients Image' , 'accesspress_pro'), 'post_thumbnail_meta_box', 'testimonial', 'side', 'low');
   }
   add_action('do_meta_boxes', 'accesspress_pro_testimonial_metabox' );

   /*BreadCrumb*/
	function accesspress_pro_breadcrumbs() {
	  global $accesspress_pro_options, $post;
	  $accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );

	  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show

	  if(isset($accesspress_pro_settings['breadcrumb_seperator'])){
	  	$delimiter = $accesspress_pro_settings['breadcrumb_seperator'];
	  }else{
	  $delimiter = '&raquo;'; // delimiter between crumbs
		}

	  if(isset($accesspress_pro_settings['breadcrumb_home_text'])){
	  $home = $accesspress_pro_settings['breadcrumb_home_text'];
		}else{
		$home = 'Home'; // text for the 'Home' link
		}

	  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
	  $before = '<span class="current">'; // tag before the current crumb
	  $after = '</span>'; // tag after the current crumb
	  
	  $homeLink = get_bloginfo('url');
	  
	  if (is_home() || is_front_page()) {
	  
	    if ($showOnHome == 1) echo '<div id="accesspreslite-breadcrumbs"><div class="ak-container"><a href="' . $homeLink . '">' . $home . '</a></div></div>';
	  
	  } else {
	  
	    echo '<div id="accesspreslite-breadcrumbs"><div class="ak-container"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
	  
	    if ( is_category() ) {
	      $thisCat = get_category(get_query_var('cat'), false);
	      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
	      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
	  
	    } elseif ( is_search() ) {
	      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
	  
	    } elseif ( is_day() ) {
	      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
	      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
	      echo $before . get_the_time('d') . $after;
	  
	    } elseif ( is_month() ) {
	      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
	      echo $before . get_the_time('F') . $after;
	  
	    } elseif ( is_year() ) {
	      echo $before . get_the_time('Y') . $after;
	  
	    } elseif ( is_single() && !is_attachment() ) {
	      if ( get_post_type() != 'post' ) {
	        $post_type = get_post_type_object(get_post_type());
	        $slug = $post_type->rewrite;
	        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
	        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
	      } else {
	        $cat = get_the_category(); $cat = $cat[0];
	        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
	        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
	        echo $cats;
	        if ($showCurrent == 1) echo $before . get_the_title() . $after;
	      }
	  
	    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
	      $post_type = get_post_type_object(get_post_type());
	      echo $before . $post_type->labels->singular_name . $after;
	  
	    } elseif ( is_attachment() ) {
	      $parent = get_post($post->post_parent);
	      $cat = get_the_category($parent->ID); $cat = $cat[0];
	      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
	      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
	      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
	  
	    } elseif ( is_page() && !$post->post_parent ) {
	      if ($showCurrent == 1) echo $before . get_the_title() . $after;
	  
	    } elseif ( is_page() && $post->post_parent ) {
	      $parent_id  = $post->post_parent;
	      $breadcrumbs = array();
	      while ($parent_id) {
	        $page = get_page($parent_id);
	        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
	        $parent_id  = $page->post_parent;
	      }
	      $breadcrumbs = array_reverse($breadcrumbs);
	      for ($i = 0; $i < count($breadcrumbs); $i++) {
	        echo $breadcrumbs[$i];
	        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
	      }
	      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
	  
	    } elseif ( is_tag() ) {
	      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
	  
	    } elseif ( is_author() ) {
	       global $author;
	      $userdata = get_userdata($author);
	      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
	  
	    } elseif ( is_404() ) {
	      echo $before . 'Error 404' . $after;
	    }
	  
	    if ( get_query_var('paged') ) {
	      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
	      echo __('Page' , 'accesspress_pro') . ' ' . get_query_var('paged');
	      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
	    }
	  
	    echo '</div></div>';
	  
	  }
	} 

	function accesspress_pro_footercolumn(){
		$footer_column = 0;
		if(is_active_sidebar('footer-1'))
		$footer_column++;
		if(is_active_sidebar('footer-2'))
		$footer_column++;
		if(is_active_sidebar('footer-3'))
		$footer_column++;
		if(is_active_sidebar('footer-4'))
		$footer_column++;	
		return 'column-'.$footer_column;
	}

	function accesspress_pro_featuredcolumn(){
		$footer_column = 0;
		if(is_active_sidebar('textblock-1'))
		$footer_column++;
		if(is_active_sidebar('textblock-2'))
		$footer_column++;
		if(is_active_sidebar('textblock-3'))
		$footer_column++;
		return 'column-'.$footer_column;
	}

	function kriesi_pagination($pages = '', $range = 1){  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='accesspress_pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
	}

	function accesspress_pro_custom_css(){
		global $accesspress_pro_options;
		$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
		echo '<style type="text/css">';
			echo $accesspress_pro_settings['custom_css'];
		echo '</style>';
	}

	add_action('wp_head','accesspress_pro_custom_css');

	function accesspress_pro_custom_code(){
		global $accesspress_pro_options;
		$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
		echo '<script type="text/javascript">';
			echo $accesspress_pro_settings['custom_code'];
		echo '</script>';
	}

	add_action('wp_footer','accesspress_pro_custom_code');

	function accesspress_share_script(){
	global $accesspress_pro_options;
	$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
	$share_publisher_id = (!empty($accesspress_pro_settings['share_publisher_id']) ? $accesspress_pro_settings['share_publisher_id'] : 'ra-536530f652c04fc6');
		echo '<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid='.$share_publisher_id.'"></script>';
	}

	add_action('wp_footer','accesspress_share_script');

	function colourBrightness($hex, $percent) {
    // Work out if hash given
    $hash = '';
    if (stristr($hex, '#')) {
        $hex = str_replace('#', '', $hex);
        $hash = '#';
    }
    /// HEX TO RGB
    $rgb = array(hexdec(substr($hex, 0, 2)), hexdec(substr($hex, 2, 2)), hexdec(substr($hex, 4, 2)));
    //// CALCULATE 
    for ($i = 0; $i < 3; $i++) {
        // See if brighter or darker
        if ($percent > 0) {
            // Lighter
            $rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1 - $percent));
        } else {
            // Darker
            $positivePercent = $percent - ($percent * 2);
            $rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1 - $positivePercent));
        }
        // In case rounding up causes us to go to 256
        if ($rgb[$i] > 255) {
            $rgb[$i] = 255;
        }
    }
    //// RBG to Hex
    $hex = '';
    for ($i = 0; $i < 3; $i++) {
        // Convert the decimal digit to hex
        $hexDigit = dechex($rgb[$i]);
        // Add a leading zero if necessary
        if (strlen($hexDigit) == 1) {
            $hexDigit = "0" . $hexDigit;
        }
        // Append to the hex string
        $hex .= $hexDigit;
    }
    return $hash . $hex;
}

function accesspress_get_attachment_id_from_url( $attachment_url = '' ) {
 
    global $wpdb;
    $attachment_id = false;
 
    // If there is no url, return.
    if ( '' == $attachment_url )
        return;
 
    // Get the upload directory paths
    $upload_dir_paths = wp_upload_dir();
 
    // Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
    if ( false !== strpos( $attachment_url, $upload_dir_paths['baseurl'] ) ) {
 
        // If this is the URL of an auto-generated thumbnail, get the URL of the original image
        $attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );
 
        // Remove the upload path base directory from the attachment URL
        $attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );
 
        // Finally, run a custom database query to get the attachment ID from the modified attachment URL
        $attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url ) );
 
    }
 
    return $attachment_id;
}