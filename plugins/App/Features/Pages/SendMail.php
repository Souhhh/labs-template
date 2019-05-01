<?php

namespace App\Features\Pages;

use App\Http\Requests\Request;

class SendMail 
{
    /**
     * Initialisation de la page
     */

     public static function init()
     {
         add_menu_page(
             __('Formulaire pour contacter les clients'), // le titre qui s'affichera sur la page
             __('Mail Client'), // le texte dans le menu
             'edit_private_pages', // la capacité qu'il faut posséder en tant qu'utilisateur pour avoir accès à cette page (les roles et capacité seront vue plus tard)
             'mail-client', // le slug du menu
             [self::class, 'render'], // la méthode qui va afficher la page
             'dashicons-email-alt', // l'icon dans le menu
             26 // la position dans le menu(à comparer avec la valeur deposition des autres liens menu que l'on retrouve dans la doc)
         );
     }

     /**
      * Affichage de la page
      */

      public static function render()
      {
          if (isset($_SESSION['old'])) {
              $old = $_SESSION['old'];
              unset($_SESSION['old']);
          }
          view('pages/send-mail', compact('old'));
      }


    }
