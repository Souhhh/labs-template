<?php

namespace App;

class Setup
{
    public static function enqueue_scripts()
        {
        wp_enqueue_style('flaticon', SER_PLUGIN_URL . "resources/assets/css/flaticon.css");
        wp_enqueue_style('icons', SER_PLUGIN_URL . "resources/assets/css/icones.css");

        wp_enqueue_script('icones', SER_PLUGIN_URL . "resources/assets/scripts/icone.js", [], '', true);
        }

        /**
         * fonction pour démarrer une session afin de pouvoir utiliser la variable $_SESSION
         */
        public static function start_session()
        {
            //on vérifie si une session n'existe pas déjà. Si non on en commence une
            if(!session_id()) {
                session_start();
            }
        }
}