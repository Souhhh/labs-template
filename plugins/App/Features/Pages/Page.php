<?php 

namespace App\Features\Pages;

class Page
{
    /**
     * Initialisation des pages 
     */

     public static function init ()
     {
         SendMail::init();
         NewsLetter::init();
        
     }
}