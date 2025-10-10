<?php
// ----------------------------------------
// Custom Post Types
// ----------------------------------------
function schoolsite_register_custom_post_types() {

    // Student CPT ------------------------
    
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
        'query_var'          => true, // enables use of WP_Query
        'rewrite'            => array( 'slug' => 'students' ),
        'capability_type'    => 'post',
        'has_archive'        => true, // enables archive page at /works, must be set to true
        'hierarchical'       => false,
        'menu_position'      => 5,

        // Go to https://developer.wordpress.org/resource/dashicons to select a dashicon to use. When you find one you like, click on it, and it will tell you what value to enter here. Example: Here I am using the graduation cap icon, which it tells me is 'dashicons-welcome-learn-more'
        'menu_icon'          => 'dashicons-welcome-learn-more',

        'supports'           => array( 'title', 'editor', 'featured image' ),
    );
    register_post_type( 'school-student', $args );

    // Staff CPT --------------------------

}

// ----------------------------------------
// Taxonomies
// ----------------------------------------