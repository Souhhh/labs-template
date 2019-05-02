<?php

namespace App\Http\Models;

use App\Database\Migrations\CreateMailTable;

class Mail

{
    // les propriétés de l'objet model. Les propriétés de l'objet qui sont représentative de la structure de la table dans la base de donnée. 

    public $id;
    public $userid;
    public $lastname;
    public $firstname;
    public $email;
    public $content;
    public $created_at;

    protected static $table = "mg_labs_mail";

    /**
     * Fonction qui est appelé lors de l'instance d'un objet.
     */
    public function __construct()
    {
        // on rempli déjà la date de création
        $this->created_at = current_time('mysql');
    }

    /**
     * fonction qui prend en charge la sauvegarde du mail dans la base de donnée
     */

     public function save()
     {
         global $wpdb;
          // Nous utilisons une fonction pour insérer dans la db.
          $wpdb->insert(
              $wpdb->prefix . 'labs_mail',  //premier argument est le nom de la table. C'est la deuxième fois qu'on l'on écrit ce nom. Il serait bon de faire un refactoring et d'utiliser une constance à la place. Nous le ferons plus tard. 
            //   [ // Deuxième paramètre est un tableau dans la clé est le nom de la colonne dans la table et la valeur est la valeur à mettre dans la colonne 
                //ici nous affichons toutes les colonnes avec leur valeur sous forme d'objet.
            //     'id' => $this->id,
            //     'userid' => $this->userid,
            //     'lastname' => $this->lastname,
            //     'firstname' => $this->firstname,
            //     'email' => $this->email,
            //     'content' => $this->content, 
            //     'created_at' => $this->created_at
            //   ]
            get_object_vars($this)
        );
     }

     /**
      * Fonction qui va chercher toutes les entrées de la table
      */

     public static function all()
     {
         global $wpdb;
         $table = self::$table; 
         $query = "SELECT * FROM $table";
         return $wpdb->get_results($query);
     }

     /**
      * fonction qui va chercher l'entrée de la table qui à l'id corresponndant
      */

      public static function find($id)
      {
          global $wpdb;
          $table = self::$table;
          $query = "SELECT * FROM $table WHERE id = $id";
        //   nous ajoutons ces lignes afin de ne pas renvoyer un simple objet mais bien un objet   Mail
        
        $objet = $wpdb->get_row($query);
        $mail = new Mail();
        foreach ($objet as $key => $value) {
            $mail->$key = $value;
        }

        return $mail;
      }

      /**
       * fonction qui va mettre à jour l'entrée dans la base de donnée
       */

       public function update()
       {
           global $wpdb;
           return $wpdb->update(
               self::$table,
               get_object_vars($this),
               ['id' => $this->id]
           );
       }

      public static function delete($id)
      {
          global $wpdb;
          return $wpdb->delete(
              self::$table,
              [
                  'id' => $id
              ]
            );
      }
}
