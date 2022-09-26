<?php 

/* Registers the Peoples post type. */
add_action( 'init', 'register_tmm_type' );
function register_tmm_type() {
	
  /* Defines labels. */
  $labels = array(
		'name'               => __( 'People', TMM_TXTDM ),
		'singular_name'      => __( 'People', TMM_TXTDM ),
		'menu_name'          => __( 'People', TMM_TXTDM ),
		'name_admin_bar'     => __( 'People', TMM_TXTDM ),
		'add_new'            => __( 'Add New', TMM_TXTDM ),
		'add_new_item'       => __( 'Add New People', TMM_TXTDM ),
		'new_item'           => __( 'New People', TMM_TXTDM ),
		'edit_item'          => __( 'Edit People', TMM_TXTDM ),
		'view_item'          => __( 'View People', TMM_TXTDM ),
		'all_items'          => __( 'All Peoples', TMM_TXTDM ),
		'search_items'       => __( 'Search Peoples', TMM_TXTDM ),
		'not_found'          => __( 'No Peoples found.', TMM_TXTDM ),
		'not_found_in_trash' => __( 'No Peoples found in Trash.', TMM_TXTDM )
	);

  /* Defines permissions. */
	$args = array(
		'labels'             => $labels,
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
    'show_in_admin_bar'  => false,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'supports'           => array( 'title' ),
    'menu_icon'          => 'dashicons-plus'
	);

  /* Registers post type. */
	register_post_type( 'tmm', $args );  

}


/* Customizes Peoples update messages. */
add_filter( 'post_updated_messages', 'tmm_updated_messages' );
function tmm_updated_messages( $messages ) {
	$post             = get_post();
	$post_type        = get_post_type( $post );
  $post_type_object = get_post_type_object( $post_type );
  
  /* Defines update messages. */
	$messages['tmm'] = array(
		1  => __( 'People updated.', TMM_TXTDM ),
		4  => __( 'People updated.', TMM_TXTDM ),
		6  => __( 'People published.', TMM_TXTDM ),
		7  => __( 'People saved.', TMM_TXTDM ),
		10 => __( 'People draft updated.', TMM_TXTDM )
	);

	return $messages;

}

?>