<?php

namespace App\Features\MetaBoxes;

use App\Features\PostTypes\ServicesPostType;

class ServicesDetailsMetabox
{
    public static $slug = 'services_details_metabox';

    /**
     * Ajout d'une méta box au type de contenu qui sont passer dans le tableau $screens
     */

     public static function add_meta_box()
     {
         $screens = [ServicesPostType::$slug];
         foreach ($screens as $screen) {
             add_meta_box(
                 self::$slug, // unique ID
                 __("Détails des services"), // Box title
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