<?php

namespace App\Features\MetaBoxes;

use App\Features\PostTypes\ProjetsPostType;

class ProjetsDetailsMetabox
{
    public static $slug = 'projets_details_metabox';

    /**
     * Ajout d'une méta box au type de contenu qui sont passer dans le tableau $screens
     */

     public static function add_meta_box()
     {
         $screens = [ProjetsPostType::$slug];
         foreach ($screens as $screen) {
             add_meta_box(
                 self::$slug, // unique ID
                 __("Détails des projets - Choix d'icône"), // Box title
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
          $projet = get_post_meta(get_the_ID(), 'labs_icon_projets', true);

          view('metaboxes/projects-detail', compact ('projet'));
      }

      public static function save($post_id)
      {
          if (count($_POST) !=0) {
              $data = [
                  'labs_icon_projets' => post_data('labs_icon_projets', $_POST),
              ];

              update_post_metas($post_id, $data);
          }
      }
}