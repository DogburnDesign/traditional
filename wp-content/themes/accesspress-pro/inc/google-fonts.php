<?php
/*Google font listing in to database*/
	function accesspress_pro_get_google_webfonts_list($key='AIzaSyBmPRa5TGlBRbUUV-pVPU3GxXRkD4lBtUU', $sort='alpha') {
			$http = (!empty($_SERVER['HTTPS'])) ? "https" : "http";

			$google_api_url = 'https://www.googleapis.com/webfonts/v1/webfonts?key=' . $key . '&sort=' . $sort;
			//lets fetch it
			$google_api_url = wp_remote_get($google_api_url, array('sslverify' => false,'timeout' => 30));
			$response = wp_remote_retrieve_body($google_api_url);
			if( is_wp_error( $response ) ) {

			} else {
				$data = json_decode($response, true);
					$items = $data['items'];
					$font_list = array();
					foreach ($items as $item) {
					$font_list[] .= $item['family'];
					}
			}
			update_option('accesspress_pro_google_fonts',$font_list);
	}
	
	$accesspress_pro_font_list = get_option('accesspress_pro_google_fonts');
	if(empty($accesspress_pro_font_list)){
		accesspress_pro_get_google_webfonts_list();
	}

	/* get google web font for homepage */

	function accesspress_pro_googlefont_cb(){
		global $accesspress_pro_options;
		$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );

		$http = (!empty($_SERVER['HTTPS'])) ? "https" : "http";
		$un_bodytype = $accesspress_pro_settings['body_font'];
		$un_headtype = $accesspress_pro_settings['heading_font'];
		$bodytype = str_replace(' ' , '+', $un_bodytype);
		$headtype = str_replace(' ' , '+', $un_headtype);
		$font_var = '300,400,600,700,900,300italic,400italic,600italic,700italic,900italic';
		$heading_font_weight = $accesspress_pro_settings['heading_font_weight'];
		$body_font_weight = $accesspress_pro_settings['body_font_weight'];
		$h1_font_size = $accesspress_pro_settings['h1_font_size'];
		$h1_text_transform = $accesspress_pro_settings['h1_text_transform'];
		$h1_font_color = $accesspress_pro_settings['h1_color'];
		$h2_font_size = $accesspress_pro_settings['h2_font_size'];
		$h2_text_transform = $accesspress_pro_settings['h2_text_transform'];
		$h2_font_color = $accesspress_pro_settings['h2_color'];
		$h3_font_size = $accesspress_pro_settings['h3_font_size'];
		$h3_text_transform = $accesspress_pro_settings['h3_text_transform'];
		$h3_font_color = $accesspress_pro_settings['h3_color'];
		$h4_font_size = $accesspress_pro_settings['h4_font_size'];
		$h4_text_transform = $accesspress_pro_settings['h4_text_transform'];
		$h4_font_color = $accesspress_pro_settings['h4_color'];
		$h5_font_size = $accesspress_pro_settings['h5_font_size'];
		$h5_text_transform = $accesspress_pro_settings['h5_text_transform'];
		$h5_font_color = $accesspress_pro_settings['h5_color'];
		$h6_font_size = $accesspress_pro_settings['h6_font_size'];
		$h6_text_transform = $accesspress_pro_settings['h6_text_transform'];
		$h6_font_color = $accesspress_pro_settings['h6_color'];
		$body_font_size = $accesspress_pro_settings['body_font_size'];
		$body_font_color = $accesspress_pro_settings['body_color'];
		$background_pattern = $accesspress_pro_settings['background_pattern'];
		$logo_pading_top = $accesspress_pro_settings['logo_pading_top'];
		$logo_pading_bottom = $accesspress_pro_settings['logo_pading_bottom'];
		$logo_pading_left = $accesspress_pro_settings['logo_pading_left'];
		$logo_pading_right = $accesspress_pro_settings['logo_pading_right'];
		$nav_pading_top = $accesspress_pro_settings['nav_pading_top'];
		$calltoaction_bg_color = $accesspress_pro_settings['calltoaction_bg_color'];
		$calltoaction_text_color = $accesspress_pro_settings['calltoaction_text_color'];
		$calltoaction_font_size = $accesspress_pro_settings['calltoaction_font_size'];
		$calltoaction_text_align = $accesspress_pro_settings['calltoaction_text_align'];

		if ( $bodytype != "" ){
		echo "<link href='" . $http . "://fonts.googleapis.com/css?family=" . $bodytype . ":" . $font_var . "' rel='stylesheet' type='text/css'>";
		}

		if ($headtype != ""){
		echo "<link href='" . $http . "://fonts.googleapis.com/css?family=" . $headtype . ":" . $font_var . "' rel='stylesheet' type='text/css'>";
		}

		if($background_pattern == "pattern0"){
			$background_pattern ="";
		}else{
			$background_pattern ="background-image:url(".get_template_directory_uri()."/images/patterns/".$background_pattern.".png)";
		}
		?>

		<?php echo "<style type='text/css' media='all'>"; ?>
		body { font-family: <?php echo $un_bodytype; ?> !important; font-weight:<?php echo $body_font_weight; ?> !important; }
		h1,h2,h3,h4,h5,h6 { font-family: <?php echo $un_headtype; ?> !important; font-weight:<?php echo $heading_font_weight; ?> !important; }
		h1, h1 a{font-size:<?php echo $h1_font_size; ?>px !important;text-transform:<?php echo $h1_text_transform; ?> !important;color:<?php echo $h1_font_color; ?> !important;}
		h2, h2 a{font-size:<?php echo $h2_font_size; ?>px !important;text-transform:<?php echo $h2_text_transform; ?> !important;color:<?php echo $h2_font_color; ?> !important;}
		h3, h3 a{font-size:<?php echo $h3_font_size; ?>px !important;text-transform:<?php echo $h3_text_transform; ?> !important;color:<?php echo $h3_font_color; ?> !important;}
		h4, h4 a{font-size:<?php echo $h4_font_size; ?>px !important;text-transform:<?php echo $h4_text_transform; ?> !important;color:<?php echo $h4_font_color; ?> !important;}
		h5, h5 a{font-size:<?php echo $h5_font_size; ?>px !important;text-transform:<?php echo $h5_text_transform; ?> !important;color:<?php echo $h5_font_color; ?> !important;}
		h6, h6 a{font-size:<?php echo $h6_font_size; ?>px !important;text-transform:<?php echo $h6_text_transform; ?> !important;color:<?php echo $h6_font_color; ?> !important;}
		body{font-size:<?php echo $body_font_size; ?>px !important;color:<?php echo $body_font_color; ?> !important; <?php echo $background_pattern;?> !important}
		#site-navigation{padding-top:<?php echo $nav_pading_top;?>px !important;}
		.site-branding{padding-top:<?php echo $logo_pading_top; ?>px !important;padding-bottom:<?php echo $logo_pading_bottom; ?>px !important;padding-left:<?php echo $logo_pading_left; ?>px !important;padding-right:<?php echo $logo_pading_right; ?>px !important;}
		#action-bar{font-size:<?php echo $calltoaction_font_size; ?>px !important;font-family: <?php echo $un_headtype; ?> !important;background-color:<?php echo $calltoaction_bg_color; ?> !important; color:<?php echo $calltoaction_text_color; ?> !important; text-align:<?php echo $calltoaction_text_align; ?>; font-weight:<?php echo $heading_font_weight; ?> !important; }
		<?php echo $background_pattern; ?>
		<?php echo "</style>"; ?>
		
	<?php }

	add_action('wp_head','accesspress_pro_googlefont_cb');

	if( !function_exists( 'wp_gwf_admin_header_init' ) ):
	function wp_gwf_admin_header_init() {
	global $accesspress_pro_options;
	$accesspress_pro_settings = get_option( 'accesspress_pro_options', $accesspress_pro_options );
	?>
	<script src="//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery("select#body_font, select#heading_font").change(function(){
		var val = jQuery("select#body_font").val();
		var val2 = jQuery("select#heading_font").val();
		
		jQuery("#cFontStyleWColor11").text('#testtext_body_font { font-size: 16px; font-family: "'+ val +'" !important; }');
		jQuery("#cFontStyleWColor12").text('#testtext_heading_font { font-size: 16px; font-family: "'+ val2 +'" !important; }');

			WebFont.load({
			    google: {
			      families: [val, val2]
			    }
			});
		});
	});
	</script>

	<style id="cFontStyleWColor11" type="text/css"></style>
	<style id="cFontStyleWColor12" type="text/css"></style>

	<?php
	$http = (!empty($_SERVER['HTTPS'])) ? "https" : "http";
	$un_bodytype = $accesspress_pro_settings['body_font'];
	$un_headtype = $accesspress_pro_settings['heading_font'];
	$bodytype = str_replace(' ' , '+', $un_bodytype);
	$headtype = str_replace(' ' , '+', $un_headtype);
	$font_var = '300,400,600,700,900,300italic,400italic,600italic,700italic,900italic';

	if ( $bodytype != "" ){
	echo "<link href='" . $http . "://fonts.googleapis.com/css?family=" . $bodytype . ":" . $font_var . "' rel='stylesheet' type='text/css'>";
	}

	if ($headtype != ""){
	echo "<link href='" . $http . "://fonts.googleapis.com/css?family=" . $headtype . ":" . $font_var . "' rel='stylesheet' type='text/css'>";
	}
	?>

	<?php echo "<style type='text/css' media='all'>"; ?>
	<?php if( $accesspress_pro_settings['body_font'] ): ?>
	#testtext_body_font{
	font-size: 16px; font-family: <?php echo $accesspress_pro_settings['body_font']; ?>;
	}
	<?php endif; ?>

	<?php if( $accesspress_pro_settings['heading_font'] ): ?>
	#testtext_heading_font{
	font-size: 16px; font-family: <?php echo $accesspress_pro_settings['heading_font']; ?>;
	}
	<?php endif; ?>
	<?php echo "</style>"; ?>

	<?php  }

	endif;

	add_action('admin_head','wp_gwf_admin_header_init');
