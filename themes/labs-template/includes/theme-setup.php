<?php 

/** Ajout d'image pour les posts */

class MgThemeSetup
{


    public static function ajout_image_article()
    {
        add_theme_support('post-thumbnails');
    }
}

add_action('init', [MgThemeSetup::class, 'ajout_image_article']);