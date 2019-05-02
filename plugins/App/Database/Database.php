<?php

namespace App\Database;

use App\Database\Migrations\CreateMailTable;
use App\Database\Migrations\CreateNewsTable;

class Database
{
    /**
     * Initialisation de la base de donnée. Cette méthode est déclanché lorsque l'on active le plugin.
     */

     public static function init()
     {
         //Création des tables dans la base de donnée.
         self::migration();
     }

     /**
      * Méthode qui lance les migrations afin que chacune créé sa table dans la base de donnée. 
      */
      public static function migration()
      {
          CreateMailTable::up();
          CreateNewsTable::up();
      }
}