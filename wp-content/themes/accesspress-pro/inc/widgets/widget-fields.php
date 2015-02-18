<?php
/**
 * @package Accesspress Pro
 */

function accesspress_pro_widgets_show_widget_field( $instance = '', $widget_field = '', $athm_field_value = '' ) {
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

	extract( $widget_field );
	
	switch( $accesspress_pro_widgets_field_type ) {
	
		// Standard text field
		case 'text' : ?>
			<p>
				<label for="<?php echo $instance->get_field_id( $accesspress_pro_widgets_name ); ?>"><?php echo $accesspress_pro_widgets_title; ?>:</label>
				<input class="widefat" id="<?php echo $instance->get_field_id( $accesspress_pro_widgets_name ); ?>" name="<?php echo $instance->get_field_name( $accesspress_pro_widgets_name ); ?>" type="text" value="<?php echo $athm_field_value; ?>" />
				
				<?php if( isset( $accesspress_pro_widgets_description ) ) { ?>
				<br />
				<small><?php echo $accesspress_pro_widgets_description; ?></small>
				<?php } ?>
			</p>
			<?php
			break;

		// Textarea field
		case 'textarea' : ?>
			<p>
				<label for="<?php echo $instance->get_field_id( $accesspress_pro_widgets_name ); ?>"><?php echo $accesspress_pro_widgets_title; ?>:</label>
				<textarea class="widefat" rows="6" id="<?php echo $instance->get_field_id( $accesspress_pro_widgets_name ); ?>" name="<?php echo $instance->get_field_name( $accesspress_pro_widgets_name ); ?>"><?php echo $athm_field_value; ?></textarea>
			</p>
			<?php
			break;
			
		// Checkbox field
		case 'checkbox' : ?>
			<p>
				<input id="<?php echo $instance->get_field_id( $accesspress_pro_widgets_name ); ?>" name="<?php echo $instance->get_field_name( $accesspress_pro_widgets_name ); ?>" type="checkbox" value="1" <?php checked( '1', $athm_field_value ); ?>/>
				<label for="<?php echo $instance->get_field_id( $accesspress_pro_widgets_name ); ?>"><?php echo $accesspress_pro_widgets_title; ?></label>

				<?php if( isset( $accesspress_pro_widgets_description ) ) { ?>
				<br />
				<small><?php echo $accesspress_pro_widgets_description; ?></small>
				<?php } ?>
			</p>
			<?php
			break;
			
		// Radio fields
		case 'radio' : ?>
			<p>
				<?php
				echo $accesspress_pro_widgets_title; 
				echo '<br />';
				foreach( $accesspress_pro_widgets_field_options as $athm_option_name => $athm_option_title ) { ?>
					<input id="<?php echo $instance->get_field_id( $athm_option_name ); ?>" name="<?php echo $instance->get_field_name( $accesspress_pro_widgets_name ); ?>" type="radio" value="<?php echo $athm_option_name; ?>" <?php checked( $athm_option_name, $athm_field_value ); ?> />
					<label for="<?php echo $instance->get_field_id( $athm_option_name ); ?>"><?php echo $athm_option_title; ?></label>
					<br />
				<?php } ?>
				
				<?php if( isset( $accesspress_pro_widgets_description ) ) { ?>
				<small><?php echo $accesspress_pro_widgets_description; ?></small>
				<?php } ?>
			</p>
			<?php
			break;
			
		// Select field
		case 'select' : ?>
			<p>
				<label for="<?php echo $instance->get_field_id( $accesspress_pro_widgets_name ); ?>"><?php echo $accesspress_pro_widgets_title; ?>:</label>
				<select name="<?php echo $instance->get_field_name( $accesspress_pro_widgets_name ); ?>" id="<?php echo $instance->get_field_id( $accesspress_pro_widgets_name ); ?>" class="widefat">
					<?php
					foreach ( $accesspress_pro_widgets_field_options as $athm_option_name => $athm_option_title ) { ?>
						<option value="<?php echo $athm_option_name; ?>" id="<?php echo $instance->get_field_id( $athm_option_name ); ?>" <?php selected( $athm_option_name, $athm_field_value ); ?>><?php echo $athm_option_title; ?></option>
					<?php } ?>
				</select>

				<?php if( isset( $accesspress_pro_widgets_description ) ) { ?>
				<br />
				<small><?php echo $accesspress_pro_widgets_description; ?></small>
				<?php } ?>
			</p>
			<?php
			break;
			
		case 'number' : ?>
			<p>
				<label for="<?php echo $instance->get_field_id( $accesspress_pro_widgets_name ); ?>"><?php echo $accesspress_pro_widgets_title; ?>:</label><br />
				<input name="<?php echo $instance->get_field_name( $accesspress_pro_widgets_name ); ?>" type="number" step="1" min="1" id="<?php echo $instance->get_field_id( $accesspress_pro_widgets_name ); ?>" value="<?php echo $athm_field_value; ?>" class="small-text" />
				
				<?php if( isset( $accesspress_pro_widgets_description ) ) { ?>
				<br />
				<small><?php echo $accesspress_pro_widgets_description; ?></small>
				<?php } ?>
			</p>
			<?php
			break;

		// Select field
		case 'selectpost' : ?>
			<p>
				<label for="<?php echo $instance->get_field_id( $accesspress_pro_widgets_name ); ?>"><?php echo $accesspress_pro_widgets_title; ?>:</label>
				<select name="<?php echo $instance->get_field_name( $accesspress_pro_widgets_name ); ?>" id="<?php echo $instance->get_field_id( $accesspress_pro_widgets_name ); ?>" class="widefat">
					<?php
					foreach ( $accesspress_pro_postlist as $accesspress_pro_single_post ) { ?>
						<option value="<?php echo $accesspress_pro_single_post['value']; ?>" id="<?php echo $instance->get_field_id( $accesspress_pro_single_post['label'] ); ?>" <?php selected( $accesspress_pro_single_post['value'], $athm_field_value ); ?>><?php echo $accesspress_pro_single_post['label']; ?></option>
					<?php } ?>
				</select>

				<?php if( isset( $accesspress_pro_widgets_description ) ) { ?>
				<br />
				<small><?php echo $accesspress_pro_widgets_description; ?></small>
				<?php } ?>
			</p>
			<?php
			break;
		
	}
	
}