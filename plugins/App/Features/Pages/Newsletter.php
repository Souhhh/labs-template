<?php

namespace App\Features\Pages;

use App\Http\Controllers\NewsController;

class NewsLetter

{
    public static function init()
     {
         add_menu_page(
             __('Formulaire pour contacter les abonnés'), // le titre qui s'affichera sur la page
             __('Newsletter'), // le texte dans le menu
             'edit_private_pages', // la capacité qu'il faut posséder en tant qu'utilisateur pour avoir accès à cette page (les roles et capacité seront vue plus tard)
             'news-letter', // le slug du menu
             [self::class, 'render'], // la méthode qui va afficher la page
             'dashicons-email-alt', // l'icon dans le menu
             26 // la position dans le menu(à comparer avec la valeur deposition des autres liens menu que l'on retrouve dans la doc)
         );
     }

     /**
      * Fonction qui redirige vers la bonne méthode
      */
      public static function render()
      {
          /**
           * On fait un refactoring afin que la méthode render renvoi vers la bonne méthode en fonction de l'action
           */
          // on défini une valeur par défaut pour $action qui est index et qui correspondra à la méthode à utiliser
          $action = isset($_GET["action"]) ? $_GET["action"] : "index";
          call_user_func([NewsController::class, $action]);
      }

}