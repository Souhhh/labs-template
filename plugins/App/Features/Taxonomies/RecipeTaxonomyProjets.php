<?php

namespace App\Features\Taxonomies;

use App\Features\PostTypes\RecipePostTypeProjets;

class RecipeTaxonomy 

{
    public static $slug = 'projets_taxonomy';
    /**
     * Enregistrement de la Taxonomie
     */

     public static function register()
     {
         $labels = [// les labels pour la taxonomie
            'name' => __('Type de projets'),
            'singular_name' => __('Type de projet'),
            'search_items' => __('Search Type de projets'),
            'all_items' => __('All Type de projets'), 
            'parent_item' => __('Parent Type de projets'),
            'parent_item_colon' => __('Parent Type de projets:'),
            'edit_item' => __('Edit Type de projets'),
            'update_item' => __('Update Type de projets'),
            'add_new_item' => __('Add New Type de projets'),
            'new_item_name' => __('New Type de projets Name'),
            'menu_name' => __('Type de projets'),

         ];

         $args = [
             'hierarchical' => true, // make it hierarchical like categories
             'labels' => $labels,
             'show_ui' => true,
             'show_admin_column' => true,
             'query_var' => true,
             'rewrite' => ['slug' => 'projets'],
         ];

         // ajout de la taxonomie pour le type de contenu services
         register_taxonomy(self::$slug, [RecipePostTypeProjets::$slug], $args);
     }
}