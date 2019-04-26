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
                 __("Détails des services - Choix d'icône"), // Box title
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
          // récupération de toutes les meta du post

          $data = get_post_meta(get_the_ID());

          // récupération et attribution des valeurs à utiliser pour la view
          $service = extract_data_attr('labs_icon_services', $data);
        view('metaboxes/services-detail', compact('service'));
      }

      public static function save($post_id)
       {
           // On vérifie que $_POST ne soit pas vite pour effectuer l'action uniquement à la sauvegarde du post Type

           if (count($_POST) != 0) {

            $data = [

                'labs_icon_services' => post_data('labs_icon_services',$_POST),
            ];

            // enregistrement de toutes les valeurs grâce au helper

               update_post_metas($post_id, $data);
           }
       }

}