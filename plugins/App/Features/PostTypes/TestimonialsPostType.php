<?php

namespace App\Features\PostTypes;

class TestimonialsPostType

{
    public static $slug = 'testimonials';
    public static function register()
    {
        $labels = array(// la key labels contient un tableau avec des labels pour les différents endroits où il y a le type de contenu services)
               'name' => __('Avis'),
               'singular_name' => __('Avis'),
               'add_new' => __('Ajouter un nouvel avis'),
                // 'add_new_item' => array(__('Add New Post'), __('Add New Page')),
                // 'edit_item' => array(__('Edit Post'), __('Edit Page')),
                // 'new_item' => array(__('New Post'), __('New Page')),
                // 'view_item' => array(__('View Post'), __('View Page')),
                // 'view_items' => array(__('View Posts'), __('View Pages')),
                // 'search_items' => array(__('Search Posts'), __('Search Pages')),
                // 'not_found' => array(__('No posts found.'), __('No pages found.')),
                // 'not_found_in_trash' => array(__('No posts found in Trash.'), __('No pages found in Trash.')),
                // 'parent_item_colon' => array(null, __('Parent Page:')),
                // 'all_items' => array(__('All Posts'), __('All Pages')),
                // 'archives' => array(__('Post Archives'), __('Page Archives')),
                // 'attributes' => array(__('Post Attributes'), __('Page Attributes')),
                // 'insert_into_item' => array(__('Insert into post'), __('Insert into page')),
                // 'uploaded_to_this_item' => array(__('Uploaded to this post'), __('Uploaded to this page')),
                // 'featured_image' => array(_x('Featured Image', 'post'), _x('Featured Image', 'page')),
                // 'set_featured_image' => array(_x('Set featured image', 'post'), _x('Set featured image', 'page')),
                // 'remove_featured_image' => array(_x('Remove featured image', 'post'), _x('Remove featured image', 'page')),
                // 'use_featured_image' => array(_x('Use as featured image', 'post'), _x('Use as featured image', 'page')),
                // 'filter_items_list' => array(__('Filter posts list'), __('Filter pages list')),
                // 'items_list_navigation' => array(__('Posts list navigation'), __('Pages list navigation')),
                // 'items_list' => array(__('Posts list'), __('Pages list')),
                // 'item_published' => array(__('Post published.'), __('Page published.')),
                // 'item_published_privately' => array(__('Post published privately.'), __('Page published privately.')),
                // 'item_reverted_to_draft' => array(__('Post reverted to draft.'), __('Page reverted to draft.')),
                // 'item_scheduled' => array(__('Post scheduled.'), __('Page scheduled.')),
                // 'item_updated' => array(__('Post updated.'), __('Page updated.')),
        );

            $options = array(
                'labels' => $labels,
                'description' => '',
                'public' => true, // affichage public dans le menu 
                'hierarchical' => false,
                'exclude_from_search' => null,
                'publicly_queryable' => null,
                'show_ui' => null,
                'show_in_menu' => null,
                'show_in_nav_menus' => null,
                'show_in_admin_bar' => null,
                'menu_position' => null,
                'menu_icon' => 'dashicons-format-status',
                'capability_type' => 'post',
                'capabilities' => array(
                    'edit_post' => 'edit_testimonials',
                    'edit_posts' => 'edit_testimonials',
                    'edit_others_posts' => 'edit_other_testimonials',
                    'publish_posts' => 'publish_testimonials',
                    'read_post' => 'read_testimonial',
                    'read_private_posts' => 'read_private_testimonials',
                    'delete_post' => 'delete_testimonial',
                ),
                'map_meta_cap' => null,
                'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
                'register_meta_box_cb' => null,
                'taxonomies' => array('post_tag'),
                'has_archive' => false,
                'rewrite' => true,
                'query_var' => true,
                'can_export' => true,
                'delete_with_user' => null,
                'show_in_rest' => true,
                'rest_base' => false,
                'rest_controller_class' => false,
                '_builtin' => false,
                '_edit_link' => 'post.php?post=%d',
   
            );
            
        register_post_type(
            self::$slug , // le slug du type de contenu
            $options 
            
               );
    }
}