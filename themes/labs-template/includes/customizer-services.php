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
// Section services items
    $wp_customize->add_section( 'items-text' , [
        'panel' => 'services-panel',
        'title'      => __('Section Services : Personnalisation'),
        'description'   => __('Personnalisation du texte')
    ]);

// Section services projets
    $wp_customize->add_section( 'projets-text' , [
        'panel' => 'services-panel',
        'title'      => __('Section Projets : Personnalisation'),
        'description'   => __('Personnalisation du texte')
    ]);

// Setting services items
$wp_customize->add_setting('services-text-top-right', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);
$wp_customize->add_setting('services-text-top-middle', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);

$wp_customize->add_setting('services-text-top-left', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);

// Setting services projets
$wp_customize->add_setting('projets-text-top-right', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);
$wp_customize->add_setting('projets-text-top-middle', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);

$wp_customize->add_setting('projets-text-top-left', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);

// Control services items

    $wp_customize->add_control('services-text-top-left-control',
    [
        'section' => 'items-text',
        'settings' => 'services-text-top-left',
        'label' => __('Titre de la section à gauche'),
        'description' => __('Personnalisez le titre'),
        'type' => 'textarea'
    ]);
    $wp_customize->add_control('services-text-top-middle-control',
    [
        'section' => 'items-text',
        'settings' => 'services-text-top-middle',
        'label' => __('Titre de la section en vert'),
        'description' => __('Personnalisez le titre'),
        'type' => 'textarea'
    ]);
    $wp_customize->add_control('services-text-top- right-control',
    [
        'section' => 'items-text',
        'settings' => 'services-text-top-right',
        'label' => __('Titre de la section à droite'),
        'description' => __('Personnalisez le titre'),
        'type' => 'textarea'
    ]);

    // Control services projets

    $wp_customize->add_control('projets-text-top-left-control',
    [
        'section' => 'projets-text',
        'settings' => 'projets-text-top-left',
        'label' => __('Titre de la section à gauche'),
        'description' => __('Personnalisez le titre'),
        'type' => 'textarea'
    ]);
    $wp_customize->add_control('projets-text-top-middle-control',
    [
        'section' => 'projets-text',
        'settings' => 'projets-text-top-middle',
        'label' => __('Titre de la section en vert'),
        'description' => __('Personnalisez le titre'),
        'type' => 'textarea'
    ]);
    $wp_customize->add_control('projets-text-top- right-control',
    [
        'section' => 'projets-text',
        'settings' => 'projets-text-top-right',
        'label' => __('Titre de la section à droite'),
        'description' => __('Personnalisez le titre'),
        'type' => 'textarea'
    ]);

    }

}

add_action('customize_register', [MgCustomizerServices::class,'ajout_personnalisation_services']);
