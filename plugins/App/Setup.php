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
}