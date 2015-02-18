<?php
/**
 * AccessPress Pro Custom Widgets
 *
 * @package Accesspress Pro
 */

function accesspress_pro_widgets_updated_field_value( $widget_field, $new_field_value ) {

	extract( $widget_field );
	
	// Allow only integers in number fields
	if( $accesspress_pro_widgets_field_type == 'number' ) {
		return absint( $new_field_value );
		
	// Allow some tags in textareas
	} elseif( $accesspress_pro_widgets_field_type == 'textarea' ) {
		// Check if field array specifed allowed tags
		if( !isset( $accesspress_pro_widgets_allowed_tags ) ) {
			// If not, fallback to default tags
			$accesspress_pro_widgets_allowed_tags = '<p><strong><em><a>';
		}
		return strip_tags( $new_field_value, $accesspress_pro_widgets_allowed_tags );
		
	// No allowed tags for all other fields
	} else {
		return strip_tags( $new_field_value );
	}

}

/**
 * Include helper functions that display widget fields in the dashboard
 *
 * @since Accesspress Widget Pack 1.0
 */
require get_template_directory() . '/inc/widgets/widget-fields.php';

/**
 * Register Post Preview Widget
 *
 * @since accesspress Widget Pack 1.0
 */
require get_template_directory() . '/inc/widgets/widget-preview-post.php';

/**
 * Register Social Icons Widget
 *
 * @since accesspress Widget Pack 1.0
 */
require get_template_directory() . '/inc/widgets/widget-social-icons.php';

/**
 * Media Embed Widget
 *
 * @since accesspress Widget Pack 1.0
 */
require get_template_directory() . '/inc/widgets/widget-media-embed.php';

/**
 * Flickr Stream Widget
 *
 * @since accesspress Widget Pack 1.0
 */
require get_template_directory() . '/inc/widgets/widget-flickr-stream.php';