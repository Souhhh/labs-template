<?php

namespace App\Features\Taxonomies;

use App\Features\PostTypes\TeamPostType;

class TeamTaxonomy

{
    public static $slug = 'team_taxonomy';
    /**
     * Enregistrement de la Taxonomie
     */

     public static function register()
     {
         $labels = [// les labels pour la taxonomie
            'name' => __('Type de membre'),
            'singular_name' => __('Type de membre'),
            'search_items' => __('Search Type de membre'),
            'all_items' => __('All Type de membre'), 
            'parent_item' => __('Parent Type de membre'),
            'parent_item_colon' => __('Parent Type de membre:'),
            'edit_item' => __('Edit Type de membre'),
            'update_item' => __('Update Type de membre'),
            'add_new_item' => __('Add New Type de membre'),
            'new_item_name' => __('New Type de membre Name'),
            'menu_name' => __('Type de membre'),

         ];

         $args = [
             'hierarchical' => true, // make it hierarchical like categories
             'labels' => $labels,
             'show_ui' => true,
             'show_admin_column' => true,
             'query_var' => true,
             'rewrite' => ['slug' => 'team'],
         ];

         // ajout de la taxonomie pour le type de contenu services
         register_taxonomy(self::$slug, [TeamPostType::$slug], $args);
     }
}