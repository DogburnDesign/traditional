<?php 
	global $accesspress_pro_options;
	$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
	if(!empty($accesspress_pro_settings['sticky_header']) && $accesspress_pro_settings['sticky_header'] == 1){
		$accesspress_pro_sticky_header = " sticky-header";
	}else{
		$accesspress_pro_sticky_header = "";
	}
?>
    <div id="top-header">
		<div class="ak-container">
			<div class="site-branding">
				
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php if ( get_header_image() ) { ?>
					<img src="<?php header_image(); ?>" alt="<?php bloginfo('name') ?>">
				<?php } ?>
				</a>
				
			</div><!-- .site-branding -->
        

			<div class="right-header clearfix">
				<?php 
				do_action( 'accesspress_pro_header_text' ); 
                ?>
                <div class="clear"></div>
<!-- CUSTOM SOCIAL LINKS -->
                
        <div class="socials">
				<a href="http://facebook.com/llumcstudents" class="facebook" data-title="Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a>
                <a href="https://twitter.com/llumcstudents" class="twitter" data-title="Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a>
                <a href="http://instagram.com/llumcstudents" class="instagram" data-title="instagram" target="_blank"><span class="fa fa-instagram"></span></a>
		
		</div>
                
<!-- CUSTOME SOCIAL LINKS -->
                <?php
				if($accesspress_pro_settings['show_search'] == 1){ ?>
				<div class="ak-search">
					<?php get_search_form(); ?>
				</div>
				<?php } ?>
			</div><!-- .right-header -->
		</div><!-- .ak-container -->
 	</div><!-- #top-header -->

  	<nav id="site-navigation" class="main-navigation <?php echo $accesspress_pro_sticky_header; ?>">
		<div class="ak-container">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'accesspress_pro' ); ?></h1>
			<?php wp_nav_menu( array( 
					'theme_location' => 'primary',
					'container'      => 'div',
					'container_class'=> 'menu',
					'items_wrap'      => '<ul>%3$s</ul>',
					 ) ); ?>
		</div>
	</nav><!-- #site-navigation -->