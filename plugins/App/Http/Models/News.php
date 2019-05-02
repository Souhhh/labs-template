<?php

namespace App\Http\Models;

class News

{
    public $id;
    public $email;
    public $created_at;

    protected static $table = "mg_news_letter";

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
             $wpdb->prefix . 'news_letter',  //premier argument est le nom de la table. C'est la deuxième fois qu'on l'on écrit ce nom. Il serait bon de faire un refactoring et d'utiliser une constance à la place. Nous le ferons plus tard. 
           
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
       $news = new News();
       foreach ($objet as $key => $value) {
           $news->$key = $value;
       }

       return $news;
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