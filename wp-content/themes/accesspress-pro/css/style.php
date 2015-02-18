<?php 

$root = '../../../..';
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
} else {
	die('/* Error */');
}

header("Content-type: text/css"); 
global $accesspress_pro_options;
$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
$accesspress_themecolor = $accesspress_pro_settings['theme_color'];
$accesspress_themecolor_hover = colourBrightness($accesspress_themecolor, '-0.9')
?>
<?php if(!empty($accesspress_themecolor)):?>
.site-header.style1 .main-navigation, 
.site-header.style1 .main-navigation,
.socials a:hover,
#action-bar,
.bttn:after,
.event-button li.no-link,
.site-header.style2 .top-header,
.site-header.style3 .top-header,
.site-header.style4 #main-header,
.featured-post .featured-overlay,
.bttn,
button,
input[type="button"],
input[type="reset"],
input[type="submit"],
#sequence .more-link,
.bx-wrapper .slider-caption .more-link,
#slider-banner .bx-wrapper .bx-pager.bx-default-pager a:after,
#slider-banner .bx-wrapper .bx-controls-direction a{
    background-color:<?php echo $accesspress_themecolor; ?>;
}

.site-header.style1 .main-navigation .current_page_item a, 
.site-header.style1 .main-navigation .current-menu-item a, 
.site-header.style1 .main-navigation li:hover > a,
.event-thumbnail .event-date,
.portfolio-listing.portfolio_grid .portfolios-bg,
.site-header.style2 .socials a:hover,
.site-header.style3 .socials a:hover,
.site-header.style3 .main-navigation .menu > ul > li.current_page_item > a, 
.site-header.style3 .main-navigation .menu > ul > li.current-menu-item > a, 
.site-header.style3 .main-navigation .menu > ul > li.current-menu-ancestor > a,
.site-header.style3 .main-navigation .menu > ul > li:hover > a,
.site-header.style4 .top-header,
.site-header.style4 .main-navigation .menu > ul > .current_page_item a, 
.site-header.style4 .main-navigation .menu > ul > .current-menu-item a, 
.site-header.style4 .main-navigation .menu > ul > li.current-menu-ancestor > a,
.site-header.style4 .main-navigation .menu > ul > li:hover > a,
.bttn:hover,
button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover{
    background-color: <?php echo $accesspress_themecolor_hover; ?>;
}

a,
.header-text,
.socials a,
.featured-post.big-icon h2.has-icon .fa,
ul.button-group li.is-checked,
.event-button li.is-checked,
.site-header.style2 .main-navigation li:hover > a, 
.site-header.style3 .main-navigation li:hover > a,
.site-header.style2 .main-navigation ul ul li:hover > a, 
.site-header.style3 .main-navigation ul ul li.current-menu-item > a,
.vertical .ap_tab_group .tab-title.active, 
.vertical .ap_tab_group .tab-title.hover,
.horizontal .ap_tab_group .tab-title.active, 
.horizontal .ap_tab_group .tab-title.hover,
.entry-footer a:hover{
    color:<?php echo $accesspress_themecolor; ?>;
}

.sidebar .widget_recent_comments .url:hover,
.sidebar ul li a:hover{
    color: <?php echo $accesspress_themecolor_hover; ?>;
}

.searchform,
.socials a,
.featured-post.big-icon h2.has-icon .fa,
.sidebar h3.widget-title span:after,
.site-header.style4 .search-icon,
.event-listing.event_list .event-short-desc,
#clients-logo h2:after,
.vertical .ap_tab_group .tab-title.active:after, 
.vertical .ap_tab_group .tab-title:hover:after,
.vertical .tab-title,
.horizontal .ap_tab_group .tab-title.active:after, 
.horizontal .ap_tab_group .tab-title:hover:after{
    border-color:<?php echo $accesspress_themecolor; ?>;
}

#sequence .more-link,
.bx-wrapper .slider-caption .more-link{
border-color:<?php echo $accesspress_themecolor_hover; ?>;
}

.event-listing.event_list .event-short-desc:after{
    border-color:transparent <?php echo $accesspress_themecolor; ?> transparent transparent;
}

.vertical .ap_tab_group .tab-title.active:before, 
.vertical .ap_tab_group .tab-title:hover:before{
    border-color:transparent transparent transparent <?php echo $accesspress_themecolor; ?>
}

.horizontal .ap_tab_group .tab-title.active:before, 
.horizontal .ap_tab_group .tab-title:hover:before{
    border-color:<?php echo $accesspress_themecolor; ?> transparent transparent
}

#slider-banner .bx-wrapper .bx-pager.bx-default-pager a{
    box-shadow: 0 0 0 2px <?php echo $accesspress_themecolor; ?> inset;
}
<?php endif; ?>