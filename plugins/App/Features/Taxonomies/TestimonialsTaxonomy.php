<?php

namespace App\Features\Taxonomies;

use App\Features\PostTypes\TestimonialsPostType;

class TestimonialsTaxonomy 

{
    public static $slug = 'testimonials_taxonomy';
    /**
     * Enregistrement de la Taxonomie
     */

     public static function register()
     {
         $labels = [// les labels pour la taxonomie
            'name' => __('Type de testimonials'),
            'singular_name' => __('Type de testimonials'),
            'search_items' => __('Search Type de testimonials'),
            'all_items' => __('All Type de testimonials'), 
            'parent_item' => __('Parent Type de testimonials'),
            'parent_item_colon' => __('Parent Type de testimonials:'),
            'edit_item' => __('Edit Type de testimonials'),
            'update_item' => __('Update Type de testimonials'),
            'add_new_item' => __('Add New Type de testimonials'),
            'new_item_name' => __('New Type de testimonials Name'),
            'menu_name' => __('Type de testimonials'),

         ];

         $args = [
             'hierarchical' => true, // make it hierarchical like categories
             'labels' => $labels,
             'show_ui' => true,
             'show_admin_column' => true,
             'query_var' => true,
             'rewrite' => ['slug' => 'testimonials'],
         ];

         // ajout de la taxonomie pour le type de contenu services
         register_taxonomy(self::$slug, [TestimonialsPostType::$slug], $args);
     }
}