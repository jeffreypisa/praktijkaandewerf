<?php // Our custom post type function
  
  
function create_posttype() {
	
	register_post_type( 'projects',
	// CPT Options
		array(
			'labels' => array(
				'name'                  => __( 'Projecten' ),
				'singular_name'         => __( 'Project' ),
				'all_items'             => __( 'Alle projecten' ),
				'add_new_item'          => __( 'Nieuw project toevoegen' ),
				'new_item'              => __( 'Nieuw project' ),
				'add_new'               => __( 'Nieuw project' ),
				'edit_item'             => __( 'Bewerk project' ),
				'update_item'           => __( 'Update project' ),
				'view_item'             => __( 'Bekijk project' ),
				'search_items'          => __( 'Zoek project' ),
			),
			'menu_icon'           		=> 'dashicons-megaphone',
			'public' 					=> true,
			'show_in_rest' 				=> true,
			'has_archive'             	=> true,
			'supports'               	=> array( 'title', 'thumbnail' ),
			'rewrite' 					=> array( 'slug' => 'projects')
		)
	);
	
	register_post_type( 'agenda',
	// CPT Options
		array(
			'labels' => array(
				'name'                  => __( 'Agenda' ),
				'singular_name'         => __( 'Evenement' ),
				'all_items'             => __( 'Alle evenementen' ),
				'add_new_item'          => __( 'Nieuw evenement toevoegen' ),
				'new_item'              => __( 'Nieuw evenement' ),
				'add_new'               => __( 'Nieuw evenement' ),
				'edit_item'             => __( 'Bewerk evenement' ),
				'update_item'           => __( 'Update evenement' ),
				'view_item'             => __( 'Bekijk evenement' ),
				'search_items'          => __( 'Zoek evenement' ),
			),
			'menu_icon'           		=> 'dashicons-admin-post',
			'public' 					=> true,
			'show_in_rest' 				=> true,
			'has_archive'             	=> true,
			'supports'                	=> array( 'title' ),
			'rewrite' 					=> array( 'slug' => 'agenda')
		)
	);
	
	register_post_type( 'news',
	// CPT Options
		array(
			'labels' => array(
				'name'                  => __( 'Nieuws' ),
				'singular_name'         => __( 'Artikel' ),
				'all_items'             => __( 'Alle artikelen' ),
				'add_new_item'          => __( 'Nieuw artikel toevoegen' ),
				'new_item'              => __( 'Nieuw artikel' ),
				'add_new'               => __( 'Nieuw artikel' ),
				'edit_item'             => __( 'Bewerk artikel' ),
				'update_item'           => __( 'Update artikel' ),
				'view_item'             => __( 'Bekijk artikel' ),
				'search_items'          => __( 'Zoek artikel' ),
			),
			'menu_icon'           		=> 'dashicons-admin-site',
			'public' 					=> true,
			'show_in_rest' 				=> true,
			'has_archive'             	=> true,
			'supports'                	=> array( 'title', 'thumbnail' ),
			'rewrite' 					=> array( 'slug' => 'news')
		)
	);
	
	register_post_type( 'words',
	// CPT Options
		array(
			'labels' => array(
				'name'                  => __( 'Words' ),
				'singular_name'         => __( 'Artikel' ),
				'all_items'             => __( 'Alle artikelen' ),
				'add_new_item'          => __( 'Nieuw artikel toevoegen' ),
				'new_item'              => __( 'Nieuw artikel' ),
				'add_new'               => __( 'Nieuw artikel' ),
				'edit_item'             => __( 'Bewerk artikel' ),
				'update_item'           => __( 'Update artikel' ),
				'view_item'             => __( 'Bekijk artikel' ),
				'search_items'          => __( 'Zoek artikel' ),
			),
			'menu_icon'           		=> 'dashicons-admin-site',
			'public' 					=> true,
			'show_in_rest' 				=> true,
			'has_archive'             	=> true,
			'supports'                	=> array( 'title' ),
			'rewrite' 					=> array( 'slug' => 'words')
		)
	);
				
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' ); 

?>