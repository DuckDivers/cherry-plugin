<?php
// Columns
function cherry_grid_column( $atts, $content = null, $shortcodename = '' ) {
	//remove wrong nested <p>
	$content = remove_invalid_tags( $content, array('p') );
	$shortcodename = str_replace("span","col-sm-", $shortcodename);
	extract(shortcode_atts(array(
		'custom_class'  => ''
	), $atts));
	// add divs to the content
	$return = '<div class="' . $shortcodename . ' ' . $custom_class . '">';
	$return .= do_shortcode( $content );
	$return .= '</div>';

	return $return;
}
add_shortcode( 'span1', 'cherry_grid_column' );
add_shortcode( 'span2', 'cherry_grid_column' );
add_shortcode( 'span3', 'cherry_grid_column' );
add_shortcode( 'span4', 'cherry_grid_column' );
add_shortcode( 'span5', 'cherry_grid_column' );
add_shortcode( 'span6', 'cherry_grid_column' );
add_shortcode( 'span7', 'cherry_grid_column' );
add_shortcode( 'span8', 'cherry_grid_column' );
add_shortcode( 'span9', 'cherry_grid_column' );
add_shortcode( 'span10', 'cherry_grid_column' );
add_shortcode( 'span11', 'cherry_grid_column' );
add_shortcode( 'span12', 'cherry_grid_column' );

function cherry_container_shortcode($atts, $content = null, $shortcodename = ''){
	$a = shortcode_atts(array(
			'custom_class' => ''
		),$atts);
	$content = remove_invalid_tags( $content, array('p') );

	$return = '<div class="' . $shortcodename . ' ' . $a['custom_class'] . '">';
	$return .= do_shortcode( $content );
	$return .= '</div>';

	return $return;
}
add_shortcode( 'container', 'cherry_container_shortcode');
add_shortcode( 'container-fluid', 'cherry_container_shortcode');


// Fluid Columns
// one_half
function one_half_column($atts, $content = null) {
	//remove wrong nested <p>
	$content = remove_invalid_tags( $content, array('p') );

	// add divs to the content
	$return = '<div class="col-sm-6">';
	$return .= do_shortcode( $content );
	$return .= '</div>';

	return $return;
}
add_shortcode( 'one_half', 'one_half_column' );

// one_third
function one_third_column( $atts, $content = null ) {
	//remove wrong nested <p>
	$content = remove_invalid_tags( $content, array('p') );

	// add divs to the content
	$return = '<div class="col-sm-4">';
	$return .= do_shortcode( $content );
	$return .= '</div>';

	return $return;
}
add_shortcode( 'one_third', 'one_third_column' );

// two_third
function two_third_column( $atts, $content = null ) {
	//remove wrong nested <p>
	$content = remove_invalid_tags( $content, array('p') );

	// add divs to the content
	$return = '<div class="col-sm-8">';
	$return .= do_shortcode( $content );
	$return .= '</div>';

	return $return;
}
add_shortcode( 'two_third', 'two_third_column' );

// one_fourth
function one_fourth_column( $atts, $content = null ) {
	//remove wrong nested <p>
	$content = remove_invalid_tags( $content, array('p') );

	// add divs to the content
	$return = '<div class="col-sm-3">';
	$return .= do_shortcode( $content );
	$return .= '</div>';

	return $return;
}
add_shortcode( 'one_fourth', 'one_fourth_column' );

// three_fourth
function three_fourth_column( $atts, $content = null) {
	//remove wrong nested <p>
	$content = remove_invalid_tags( $content, array('p') );

	// add divs to the content
	$return = '<div class="col-sm-9">';
	$return .= do_shortcode( $content );
	$return .= '</div>';

	return $return;
}
add_shortcode( 'three_fourth', 'three_fourth_column' );

// one_sixth
function one_sixth_column( $atts, $content = null ) {
	//remove wrong nested <p>
	$content = remove_invalid_tags( $content, array('p') );

	// add divs to the content
	$return = '<div class="col-sm-2">';
	$return .= do_shortcode( $content );
	$return .= '</div>';

	return $return;
}
add_shortcode( 'one_sixth', 'one_sixth_column' );

// five_sixth
function five_sixth_column( $atts, $content = null ) {
	//remove wrong nested <p>
	$content = remove_invalid_tags( $content, array('p') );

	// add divs to the content
	$return = '<div class="col-sm-10">';
	$return .= do_shortcode( $content );
	$return .= '</div>';

	return $return;
}
add_shortcode( 'five_sixth', 'five_sixth_column' );
?>
