<?php
/**
 * Set up the chart shortcode
 *
 * @param Array $atts Shortcode attributes
 */
function apex_shortcode( $atts ) {
	$chart_id = absint( $atts['id'] );

	// Check that id is set and it belongs to a correct post type
	if ( ! ( $chart_id && 'apex-chart' === get_post_type( $chart_id ) ) ) {
		return;
	}

	// Enqueue the scripts and styles
	wp_enqueue_script( 'apex-chart' );

	// Localize chart settings
	wp_localize_script(
		'apex-chart',
		'avidlyApexChart_' . $chart_id,
		[
			'data'  => get_post_meta( $chart_id, 'chart-settings' ),
			'title' => esc_html( get_the_title( $chart_id ) ),
		]
	);

	// Get the chart fallback image for legacy browsers
	$html  = '<div class="avidly-apex-chart" data-apex-id="' . $chart_id . '">';
	$html .= get_the_post_thumbnail( $chart_id ) ? '<div class="avidly-apex-chart-fallback" hidden>' . get_the_post_thumbnail( $chart_id, 'large' ) . '</div>' : '';
	$html .= '</div>';

	return $html;
}
