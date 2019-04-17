<?php

class EnqueueScript
{


public static function ajout_css_js()
{
    // <!-- Favicon -->
    wp_enqueue_style('favicon', get_template_directory_uri() . "/img/favicon.ico" );
    // <link href="<?php echo get_template_directory_uri(); /img/favicon.ico" rel="shortcut icon"
  
    // <!-- Google Fonts -->
    wp_enqueue_style('font-Oswald', "https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700");
  
    // <!-- Stylesheets -->
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    wp_enqueue_style('fontawesome', get_template_directory_uri() . "/css/font-awesome.min.css");

    wp_enqueue_style('flaticon', get_template_directory_uri() . "/css/flaticon.css");

    wp_enqueue_style('magnific-popup', get_template_directory_uri() . "/css/magnific-popup.css");

    wp_enqueue_style('carousel', get_template_directory_uri() . "/css/owl.carousel.css");

    wp_enqueue_style('style', get_template_directory_uri() . "/css/style.css");

// Scripts
wp_enqueue_script('jquery-perso',  get_template_directory_uri() . '/js/jquery-2.1.4.min.js', null, true);

wp_enqueue_script('bootstrap', get_template_directory_uri() .'/js/bootstrap.min.js', ['jquery-perso'], null, true);

wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/magnific-popup.min.js', ['jquery-perso'], null, true);

wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', ['jquery-perso'], null, true);

wp_enqueue_script('circle', get_template_directory_uri() . '/js/circle-progress.min.js', ['jquery-perso'], null, true);

wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', ['jquery-perso'], null, true);

    }

}

add_action('wp_enqueue_scripts', [EnqueueScript::class, 'ajout_css_js']);