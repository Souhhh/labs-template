<?php

namespace App\Features\Taxonomies;

use App\Features\PostTypes\ServicesPostType;

class ServicesTaxonomy

{
    public static $slug = 'services_taxonomy';
    /**
     * Enregistrement de la Taxonomie
     */

     public static function register()
     {
         $labels = [// les labels pour la taxonomie
            'name' => __('Type de services'),
            'singular_name' => __('Type de services'),
            'search_items' => __('Search Type de services'),
            'all_items' => __('All Type de services'), 
            'parent_item' => __('Parent Type de services'),
            'parent_item_colon' => __('Parent Type de services:'),
            'edit_item' => __('Edit Type de services'),
            'update_item' => __('Update Type de services'),
            'add_new_item' => __('Add New Type de services'),
            'new_item_name' => __('New Type de services Name'),
            'menu_name' => __('Type de services'),

         ];

         $args = [
             'hierarchical' => true, // make it hierarchical like categories
             'labels' => $labels,
             'show_ui' => true,
             'show_admin_column' => true,
             'query_var' => true,
             'rewrite' => ['slug' => 'services'],
         ];

         // ajout de la taxonomie pour le type de contenu services
         register_taxonomy(self::$slug, [ServicesPostType::$slug], $args);
     }
}