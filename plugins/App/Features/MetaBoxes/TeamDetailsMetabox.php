<?php

namespace App\Features\MetaBoxes;

use App\Features\PostTypes\TeamPostType;

class TeamDetailsMetabox
{
    public static $slug = 'team_details_metabox';

    /**
     * Ajout d'une méta box au type de contenu qui sont passer dans le tableau $screens
     */

     public static function add_meta_box()
     {
         $screens = [TeamPostType::$slug];
         foreach ($screens as $screen) {
             add_meta_box(
                 self::$slug, // unique ID
                 __("Détails des membres"), // Box title
                 [self::class, 'render'], // content callback, must be of type callable 
                 $screen // post type
             );
         }
     }

     /**
      * Fonction pour rendre le code html dans la metabox
      */

      public static function render()
      {
          echo "<h3>hello</h3>";
      }
}