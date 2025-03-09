<?php
/**
 * Plugin Name: WP-WhiteBoard PDF Annotator
 * Plugin URI:  https://secondmedia.co.uk/wp-whiteboard-pdf-annotator
 * Description: Integrates Excalidraw whiteboard tools to annotate PDFs within WordPress.
 * Version:     1.0.1
 * Author:     Hakan Dag
 * Author URI:  https://secondmedia.co.uk
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-whiteboard-pdf-annotator
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue scripts and styles.
 */
function wp_whiteboard_pdf_annotator_scripts() {
	wp_enqueue_style( 'excalidraw-style', 'https://unpkg.com/excalidraw/dist/excalidraw.css' );
	wp_enqueue_script( 'excalidraw-script', 'https://unpkg.com/excalidraw/dist/excalidraw.production.min.js', array(), null, true );
	wp_enqueue_script( 'wp-whiteboard-pdf-annotator-script', plugin_dir_url( __FILE__ ) . 'js/wp-whiteboard-pdf-annotator.js', array( 'excalidraw-script' ), '1.0.1', true ); // Updated JS file name
	wp_enqueue_style( 'wp-whiteboard-pdf-annotator-style', plugin_dir_url( __FILE__ ) . 'css/wp-whiteboard-pdf-annotator.css', array(), '1.0.1' ); // Updated CSS file name
}
add_action( 'wp_enqueue_scripts', 'wp_whiteboard_pdf_annotator_scripts' );

/**
 * Shortcode to display PDF and Excalidraw.
 *
 * @param array $atts Shortcode attributes.
 * @return string HTML output.
 */
function wp_whiteboard_pdf_annotator_shortcode( $atts ) {
	$atts = shortcode_atts(
		array(
			'pdf_url' => '', // URL of the PDF file.
			'width'   => '800px', // Width of the PDF viewer and Excalidraw area.
			'height'  => '600px', // Height of the PDF viewer and Excalidraw area.
		),
		$atts,
		'wp_whiteboard_pdf'
	);

	if ( empty( $atts['pdf_url'] ) ) {
		return '<p>Please provide a PDF URL using the <code>pdf_url</code> attribute.</p>';
	}

	$pdf_url = esc_url( $atts['pdf_url'] );
	$width   = esc_attr( $atts['width'] );
	$height  = esc_attr( $height );

	$output = '<div class="excalidraw-pdf-container" style="width: ' . $width . '; height: ' . $height . ';">';
	$output .= '<iframe src="' . $pdf_url . '" style="width: 100%; height: 100%; border: none;"></iframe>';
	$output .= '<div id="excalidraw-container" style="width: 100%; height: 100%; position: absolute; top: 0; left: 0;"></div>';
	$output .= '</div>';

	return $output;
}
add_shortcode( 'wp_whiteboard_pdf', 'wp_whiteboard_pdf_annotator_shortcode' );