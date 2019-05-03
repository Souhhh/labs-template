<?php

namespace App;

use App\Database\Database;
use App\Features\Roles\Role;

class Setup
{
    
    /**
         * Fonction pour ajouter des scripts et css pour l'admin
         */
    public static function enqueue_scripts($page)
        {
        wp_enqueue_style('flaticon', SER_PLUGIN_URL . "resources/assets/css/flaticon.css");
        wp_enqueue_style('icons', SER_PLUGIN_URL . "resources/assets/css/icones.css");

        wp_enqueue_script('icones', SER_PLUGIN_URL . "resources/assets/scripts/icone.js", [], '', true);

        // cette css a été créer à partir des fichiers scss de bootstrap en n'utilisant que la partie grid. Si vous essayez de reproduire cette action, sachez que j'ai du rajouter ceci manuellement *{box-sizing:border-box};
        wp_enqueue_style('admin-bootstrap-grid', SER_PLUGIN_URL . "/resources/assets/css/bootstrap-grid.css");
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

        
/**
   * Configuration du phpmailer pour rediriger les mails vers mailTrap
   *
   * @param [type] $phpmailer
   * @return void
   */
  public static function mailtrap($phpmailer)
  {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '9f36aa3a3fa949';
    $phpmailer->Password = '23fb6f19d3a28d';
  }
         
}