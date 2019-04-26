<?php

namespace App\Features\MetaBoxes;

use App\Features\PostTypes\TestimonialsPostType;

class TestimonialsDetailsMetabox
{
    public static $slug = 'testimonials_details_metabox';

    /**
     * Ajout d'une méta box au type de contenu qui sont passer dans le tableau $screens
     */

     public static function add_meta_box()
     {
         $screens = [TestimonialsPostType::$slug];
         foreach ($screens as $screen) {
             add_meta_box(
                 self::$slug, // unique ID
                 __("Détails des avis"), // Box title
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
        view('metaboxes/testimonials-detail');
      }

      /**
       * sauvegarde des données de la métabox
       */

       public static function save($post_id)
       {
           // On vérifie que $_POST ne soit pas vite pour effectuer l'action uniquement à la sauvegarde du post Type

        //    if (count($_POST) != 0) {
        //        $icon_choix = $_POST['labs_icon_services'];

        //        update_post_meta($post_id, 'labs_icon_services', $icon_choix);
        //    }
       }
}