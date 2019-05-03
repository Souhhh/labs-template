<?php

namespace App\Http\Requests;

class Request
{
    private static $errors = array();
    /**
     * vérification des data du formulaire
     */

     public static function validation (array $data)
     {
         //Pour chaque entrée on vérifie que la vérification (qui est une méthode) est appliqué
         foreach ($data as $input => $verification) {
             call_user_func([self::class, $verification], $input);

            //  On prépare un tableau pour pouvoir renvoyer les valeurs précédentes afin de ne pas devoir les réécrire.
            $_SESSION['old'][$input] = $_POST[$input];
         }
         if (count(self::$errors) !=0) {
             $message = "";
             foreach (self::$errors as $key => $value) {
                 $message .= $value . '<br>';
             }
             $_SESSION['notice'] = [
                 'status' => 'error',
                 'message' => $message
             ];
             
             wp_safe_redirect(wp_get_referer());
             exit;
         }
     }

    //  public static function validation2 (array $data)
    //  {
    //      //Pour chaque entrée on vérifie que la vérification (qui est une méthode) est appliqué
    //      foreach ($data as $input => $verification) {
    //          call_user_func([self::class, $verification], $input);

    //         //  On prépare un tableau pour pouvoir renvoyer les valeurs précédentes afin de ne pas devoir les réécrire.
    //         $_SESSION['old'][$input] = $_POST[$input];
    //      }
    //      if (count(self::$errors) !=0) {
    //          $message = "";
    //          foreach (self::$errors as $key => $value) {
    //              $message .= $value . '<br>';
    //          }
    //          $_SESSION['notice'] = [
    //              'status' => 'error',
    //              'message' => $message
    //          ];
             
    //          wp_safe_redirect(wp_get_referer());
    //          exit;
    //      }
    //  }

     /**
      * Vérification que l'input est bien défini
      */
      public static function required(string $input)
      {
          if ($_POST[$input] == "") {
              self::$errors[$input] = sprintf(__('Le champ %s est obligatoire'), $input);
          }
      }

      /**
       * vérification que l'input est bien du format email
       */
      public static function email(string $input)
      {
          if(!is_email($_POST[$input])) {
              self::$errors[$input] = sprintf(__('Le champ %s doit être un format email'), $input);
          }
      }
}