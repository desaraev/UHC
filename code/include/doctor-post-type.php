<?php
/* Create Custom Post Type : Doctor */
function create_doctor_post_type() 
{
	$labels = array(
		'name' => __( 'Doctors','framework'),
		'singular_name' => __( 'Doctor','framework' ),
		'add_new' => __('Add New','framework'),
		'add_new_item' => __('Add New Doctor','framework'),
		'edit_item' => __('Edit Doctor','framework'),
		'new_item' => __('New Doctor','framework'),
		'view_item' => __('View Doctor','framework'),
		'search_items' => __('Search Doctor','framework'),
		'not_found' =>  __('No Doctor found','framework'),
		'not_found_in_trash' => __('No Doctor found in Trash','framework'), 
		'parent_item_colon' => ''
	  );
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'menu_icon' => get_template_directory_uri() . '/images/doctors-icon.png',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail'),
		'rewrite' => array( 'slug' => __('doctor', 'framework') )
	  ); 
	  
	  register_post_type('doctor',$args);
}

add_action( 'init', 'create_doctor_post_type' );



/* Create Doctor Taxonomies */
function doctor_taxonomies(){
    	
	$department_labels = array(
        'name' => __( 'Department', 'framework' ),
        'singular_name' => __( 'Department', 'framework' ),
        'search_items' =>  __( 'Search Departments', 'framework' ),
        'popular_items' => __( 'Popular Departments', 'framework' ),
        'all_items' => __( 'All Departments', 'framework' ),
        'parent_item' => __( 'Parent Department', 'framework' ),
        'parent_item_colon' => __( 'Parent Department:', 'framework' ),
        'edit_item' => __( 'Edit Department', 'framework' ), 
        'update_item' => __( 'Update Department', 'framework' ),
        'add_new_item' => __( 'Add New Department', 'framework' ),
        'new_item_name' => __( 'New Department Name', 'framework' ),
        'separate_items_with_commas' => __( 'Separate Departments with commas', 'framework' ),
        'add_or_remove_items' => __( 'Add or remove Departments', 'framework' ),
        'choose_from_most_used' => __( 'Choose from the most used Departments', 'framework' ),
        'menu_name' => __( 'Departments', 'framework' )
    );
	
	register_taxonomy(
	    'department', 
	    array( 'doctor' ), 
	    array(
	        'hierarchical' => true, 
	        'labels' => $department_labels,
	        'show_ui' => true,
	        'query_var' => true,
			'rewrite' => array('slug' => __('department', 'framework'))
	    )
	);
	
	 
}
add_action( 'init', 'doctor_taxonomies', 0 );


/* Add Custom Columns */
function doctor_edit_columns($columns)
{

	$columns = array(
		  "cb" => '<input type="checkbox" >',
		  "title" => __( 'Doctor Name','framework' ),		  
		  "doc_thumb" => __( 'Thumbnail','framework' ),		  		 
		  "education" => __('Education','framework'),
		  "date" => __( 'Date','framework' )
	);
	
	return $columns;
}
add_filter("manage_edit-doctor_columns", "doctor_edit_columns");


function doctor_custom_columns($column){
	global $post;
	switch ($column)
	{
		case 'doc_thumb':
			if(has_post_thumbnail($post->ID))
			{
				the_post_thumbnail('thumbnail');
			}
			else
			{
				_e('No Image','framework');
			}
			break;		
		case 'education':
			$education = get_post_meta($post->ID,'doctor_education',true);
			if(!empty($education))
			{
				echo $education;
			}
			else
			{
				_e('NA','framework');
			}			
			break;
	}
}
add_action("manage_posts_custom_column", "doctor_custom_columns");

?>
