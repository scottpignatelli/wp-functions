<?php
//wp-EnqueFontAwesome
// Add FontAwesome
function startwordpress_fontawesome() {
				wp_register_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
				wp_enqueue_style( 'font-awesome');
		}

add_action('wp_print_styles', 'startwordpress_fontawesome');
?>