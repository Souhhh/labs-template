<?php

namespace App\Database\Migrations;

class CreateNewsTable
{
    /**
     * Création de la table
     */
    public static function up()
    {
        // nous récupérons l'objet $wpdb qui est global afin de pouvoir intéragir avec la base de donnée
        global $wpdb;
        $table_name = $wpdb->prefix . 'news_letter';

        // nous utilisons la méthode query qui nous permet d'écrire une requette en SGL pure
        // nous verrons plus tard l'écriture mysql en profondeur
        // vous pouvez avoir une preview sur comme construire cette requête
        $wpdb->query("CREATE TABLE IF NOT EXISTS  $table_name  (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            email VARCHAR(255) NOT NULL,
            created_at TIMESTAMP
          )
          COLLATE utf8mb4_unicode_520_ci
          ;");
    }
}