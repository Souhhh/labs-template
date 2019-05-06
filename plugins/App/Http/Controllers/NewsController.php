<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Http\Models\News;

class NewsController
{
    /**
       * Envoi d'un email
       */

      public static function send()
      {
          // on vérifie la sécurité pour voir si le formulaire est bien authentique
          if (!wp_verify_nonce($_POST['_wpnonce'], 'send-news')) {
              return;
          };
          Request::validation2([
              
              'email' => 'email',
              
          ]);

          //Nous récupérons les données envoyées par le formulaire qui se retrouve dans la variable $_POST

          //Nous allons également sauvegarder en base de donnée les mails que nous allons envoyer.

          //Refactoring pour apprendre et utiliser les models. Seul les models peuvent intéragir avec la base de donnée. 
          // on instance la class Mail et on rempli les valeurs dans les propriétés. 

          $news = new News();

         
          $news->email = sanitize_email($_POST['email']);
          
          //$isSave = $news->save();

       // la fonction wordpress pour envoyer des mails 
       if (wp_mail($news->email ,'.', 'L') && $news->save()) {
            $_SESSION['notice2'] = [
                'status' => 'error',
                'message' => 'Une erreur est survenu, veuillez réessayer plus tard '
            ];
       } else {
           $_SESSION['notice2'] = [
            'status' => 'success',
            'message' => 'Félicitation vous êtes bien inscrit à la Newsletter'
        ];
       
    }
       

       //la fonction wp_safe_redirect redirige vers une url. la fonction wp_get_referer renvoi vers la page d'ou la requête a été envoyé. 

       wp_safe_redirect(wp_get_referer());
   }

   /**
       * Affiche la page principal
       */

      public static function index()
      {
          $mails = array_reverse(News::all());
          $old = [];

          if (isset($_SESSION['old']) && ($_SESSION['notice2']['status'] == 'error')) { //correction pour afficher valeur que quand error
              $old = $_SESSION['old'];
              unset($_SESSION['old']);
          }
          view('pages/send-news', compact('old', 'mails'));
      }

      /**
       * Affiche une entrée en particulier
       */

       public static function show()
       {
           $id = $_GET['id'];
           $news = News::find($id);

           view('pages/show-news', compact('news'));
       }
    /**
     * Affiche un formulaire pour éditer le mail
     */
    public static function edit()
    {
        $id = $_GET['id'];
        $news = News::find($id);

        view('pages/edit-news', compact('news'));
    }

    public static function update()
    {
        // on vérifie la sécurité pour voir si le formulaire est bien authentique
        if (!wp_verify_nonce($_POST['_wpnonce'], 'edit-news')) {
            return;
        };
        // on vérifie les valeurs
        Request::validation2([
            'email' => 'email',
        ]);

        // on récupère le mail original de la base de donnée
        $news = News::find($_POST['id']);

        // on met à jour les nouvelles valeurs
        $news->email = sanitize_email($_POST['email']);

        // on met à jour dans la base de donnée et on renvoi une notification

        if ($news->update()){
            $_SESSION['notice2'] = [
                'status' => 'success',
                'message' => 'Félicitation vous êtes bien inscrit à la Newsletter'
            ];
        } else {
            $_SESSION['notice2'] = [
                'status' => 'error',
                'message' => 'une erreur est survenu, veuillez réessayer plus tard'
            ];
        }

        wp_safe_redirect(wp_get_referer());
    }

}