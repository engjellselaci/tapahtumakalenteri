<?php add_action('init', 'events_init');
function events_init() {
	$args = array(
		'labels' => array(
			'name' => __('Events'),
			'singular_name' => __('Event'),
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array("slug" => "events"), 
		'supports' => array('thumbnail','editor','title','custom-fields')
	);
	register_post_type( 'events' , $args );
} 

?>