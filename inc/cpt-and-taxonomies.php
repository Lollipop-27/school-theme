<?php
// -----------------------------------------------------------
// CUSTOM POST TYPES
// -----------------------------------------------------------
function schoolsite_register_custom_post_types() {

    // ************************************
    // 1. Student CPT
    // ************************************
    
    $labels = array(
        'name'                     => _x( 'Students', 'post type general name', 'school-site' ),
        'singular_name'            => _x( 'Student', 'post type singular name', 'school-site' ),
        'add_new'                  => _x( 'Add New', 'student', 'school-site' ),
        'add_new_item'             => __( 'Add New Student', 'school-site' ),
        'edit_item'                => __( 'Edit Student', 'school-site' ),
        'new_item'                 => __( 'New Student', 'school-site' ),
        'view_item'                => __( 'View Student', 'school-site' ),
        'view_items'               => __( 'View Students', 'school-site' ),
        'search_items'             => __( 'Search Students', 'school-site' ),
        'not_found'                => __( 'No students found.', 'school-site' ),
        'not_found_in_trash'       => __( 'No students found in Trash.', 'school-site' ),
        'parent_item_colon'        => __( 'Parent Students:', 'school-site' ),
        'all_items'                => __( 'All Students', 'school-site' ),
        'archives'                 => __( 'Student Archives', 'school-site' ),
        'attributes'               => __( 'Student Attributes', 'school-site' ),
        'insert_into_item'         => __( 'Insert into student', 'school-site' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this student', 'school-site' ),
        'featured_image'           => __( 'Student featured image', 'school-site' ),
        'set_featured_image'       => __( 'Set student featured image', 'school-site' ),
        'remove_featured_image'    => __( 'Remove student featured image', 'school-site' ),
        'use_featured_image'       => __( 'Use as featured image', 'school-site' ),
        'menu_name'                => _x( 'Students', 'admin menu', 'school-site' ),
        'filter_items_list'        => __( 'Filter students list', 'school-site' ),
        'items_list_navigation'    => __( 'Students list navigation', 'school-site' ),
        'items_list'               => __( 'Students list', 'school-site' ),
        'item_published'           => __( 'Student published.', 'school-site' ),
        'item_published_privately' => __( 'Student published privately.', 'school-site' ),
        'item_revereted_to_draft'  => __( 'Student reverted to draft.', 'school-site' ),
        'item_trashed'             => __( 'Student trashed.', 'school-site' ),
        'item_scheduled'           => __( 'Student scheduled.', 'school-site' ),
        'item_updated'             => __( 'Student updated.', 'school-site' ),
        'item_link'                => __( 'Student link.', 'school-site' ),
        'item_link_description'    => __( 'A link to a student.', 'school-site' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true, 
        'rewrite'            => array( 'slug' => 'students' ),
        'capability_type'    => 'post',
        'has_archive'        => true, 
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-welcome-learn-more', // Go to https://developer.wordpress.org/resource/dashicons to select a menu icon to use. When you find one you like, click on it, and it will tell you what value to enter here. 
        'supports'           => array( 'title', 'editor', 'featured image' ),

        // Block Editor Template ----------------------------------------------
        'template'           => array(
            array( 'core/paragraph', array( 'placeholder' => 'Write a short biography' ) ),
            array( 'core/button', array( 'text' => 'View Portfolio', 'url' => '#' ) ),
        ),
        'template_lock'      => 'insert',
    );
    register_post_type( 'school-student', $args );
}
    add_action( 'init', 'schoolsite_register_custom_post_types' );

    // Change Placeholder -------------------------------------------------
    if( is_admin() ) {
        add_filter( 'enter_title_here', function( $input ) {
            if( 'school-student' === get_post_type() ) {
                return __( 'Add Student Name', 'school-site' );
	} else {
        return $input;
    }
	    } );
    }

    // ************************************
    // 2. Staff CPT
    // ************************************



// -----------------------------------------------------------
// TAXONOMIES
// -----------------------------------------------------------

    // ************************************
    // 1. Student Taxonomies
    // ************************************

	function schoolsite_register_taxonomies() {
    $labels = array(
        'name'                  => _x( 'Specialties', 'taxonomy general name', 'school-site' ),
        'singular_name'         => _x( 'Specialty', 'taxonomy singular name', 'school-site' ),
        'search_items'          => __( 'Search Specialties', 'school-site' ),
        'all_items'             => __( 'All Specialty', 'school-site' ),
        'parent_item'           => __( 'Parent Specialty', 'school-site' ),
        'parent_item_colon'     => __( 'Parent Specialty:', 'school-site' ),
        'edit_item'             => __( 'Edit Specialty', 'school-site' ),
        'view_item'             => __( 'View Specialty', 'school-site' ),
        'update_item'           => __( 'Update Specialty', 'school-site' ),
        'add_new_item'          => __( 'Add New Specialty', 'school-site' ),
        'new_item_name'         => __( 'New Specialty Name', 'school-site' ),
        'template_name'         => __( 'Specialty Archives', 'school-site' ),
        'menu_name'             => __( 'Specialty', 'school-site' ),
        'not_found'             => __( 'No specialties found.', 'school-site' ),
        'no_terms'              => __( 'No specialties', 'school-site' ),
        'items_list_navigation' => __( 'Specialties list navigation', 'school-site' ),
        'items_list'            => __( 'Specialties list', 'school-site' ),
        'item_link'             => __( 'Specialty Link', 'school-site' ),
        'item_link_description' => __( 'A link to a specialty.', 'school-site' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'specialties' ),
    );
    
    register_taxonomy( 'student-specialty', array( 'school-student' ), $args );
    }

add_action( 'init', 'schoolsite_register_taxonomies' );


// Flush rewrite rules when activating the theme
function schoolsite_rewrite_flush() {
    schoolsite_register_custom_post_types();
    schoolsite_register_taxonomies();
    flush_rewrite_rules();
}

?>