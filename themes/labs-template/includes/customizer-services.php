<?php 

class MgCustomizerServices
{


public static function ajout_personnalisation_services($wp_customize)
{
    // Ajout d'un panel avec des options

    $wp_customize->add_panel('services-panel', [
        'title' => __('Page Services'),
        'description' => __('Personnalisation de la page Services')
    ]);
// Section
    $wp_customize->add_section( 'banner-panel-images' , [
        'panel' => 'banner-panel',
        'title'      => __('Logo'),
        'description'   => __('Personnalisation du logo')
    ]);
// Setting
    $wp_customize->add_setting('logo-nav', [
        'type' => 'theme_mod',
    ]); 
// Control
}

}

add_action('customize_register', [MgCustomizerServices::class,'ajout_personnalisation_services']);
