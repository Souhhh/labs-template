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
          $membre = get_post_meta(get_the_ID(), 'membre_title', true);

        view('metaboxes/team-detail', compact ('membre'));
      }

      public static function save($post_id)
      {
          if (count($_POST) !=0){
              $data = [
                  'membre_title' => post_data('membre_title', $_POST),
              ];

              update_post_metas($post_id, $data);
          }
      }
}