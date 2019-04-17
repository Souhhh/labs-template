<?php 

class MgCustomizerHome {


public static function ajout_personnalisation_home($wp_customize)
{
    // Ajout d'un panel avec des options

    $wp_customize->add_panel('home-panel', [
        'title' => __('Page Home'),
        'description' => __('Personnalisation de la page Home')
    ]);
// Section banner
    $wp_customize->add_section( 'banner-images' , [
        'panel' => 'home-panel',
        'title'      => __('Section Banner : Personnalisation'),
        'description'   => __('Personnalisation des images')
    ]);

// Section about
    $wp_customize->add_section( 'about-text' , [
        'panel' => 'home-panel',
        'title'      => __('Section About : Personnalisation'),
        'description'   => __('Personnalisation du texte')
    ]);

// Section services
    $wp_customize->add_section( 'services-text' , [
        'panel' => 'home-panel',
        'title'      => __('Section Services : Personnalisation'),
        'description'   => __('Personnalisation du texte')
    ]);

// Setting banner
$wp_customize->add_setting('banner-logo', [
    'type' => 'theme_mod',
]);

$wp_customize->add_setting('banner-centre', [
    'type' => 'theme_mod', 
]);

$wp_customize->add_setting('banner-image1-background', [
    'type' => 'theme_mod', 
]);

$wp_customize->add_setting('banner-image2-background', [
    'type' => 'theme_mod', 
]);

// Setting about
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

    $wp_customize->add_setting('services-text-left', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    $wp_customize->add_setting('services-text-right', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);

// Control banner

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'logo',
        array(
            'label'      => __( 'Upload a logo', 'theme_name' ),
            'section'    => 'banner-images',
            'settings'   => 'banner-logo',
            'context'    => 'your_setting_context' 
        )
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'center',
        array(
            'label'      => __( 'Upload a image in the banner', 'theme_name' ),
            'section'    => 'banner-images',
            'settings'   => 'banner-centre',
            'context'    => 'your_setting_context' 
        )
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'image1',
        array(
            'label'      => __( 'Upload a image in the background', 'theme_name' ),
            'section'    => 'banner-images',
            'settings'   => 'banner-image1-background',
            'context'    => 'your_setting_context' 
        )
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'image2',
        array(
            'label'      => __( 'Upload a second image in the background', 'theme_name' ),
            'section'    => 'banner-images',
            'settings'   => 'banner-image2-background',
            'context'    => 'your_setting_context' 
        )
    )
);

// Control about
    $wp_customize->add_control('services-text-top-left-control',
    [
        'section' => 'services-text',
        'settings' => 'services-text-top-left',
        'label' => __('Titre de la section à gauche'),
        'description' => __('Personnalisez le titre'),
        'type' => 'textarea'
    ]);
    $wp_customize->add_control('services-text-top-middle-control',
    [
        'section' => 'services-text',
        'settings' => 'services-text-top-middle',
        'label' => __('Titre de la section en vert'),
        'description' => __('Personnalisez le titre'),
        'type' => 'textarea'
    ]);
    $wp_customize->add_control('services-text-top- right-control',
    [
        'section' => 'services-text',
        'settings' => 'services-text-top-right',
        'label' => __('Titre de la section à droite'),
        'description' => __('Personnalisez le titre'),
        'type' => 'textarea'
    ]);

    $wp_customize->add_control('services-text-left-control',
    [
        'section' => 'services-text',
        'settings' => 'services-text-left',
        'label' => __('Texte colonne gauche'),
        'description' => __('Personnalisez le texte de la colonne gauche'),
        'type' => 'textarea'
    ]);

    $wp_customize->add_control('services-text-right-control',
    [
        'section' => 'services-text',
        'settings' => 'services-text-right',
        'label' => __('Texte colonne droite'),
        'description' => __('Personnalisez le texte de la colonne droite'),
        'type' => 'textarea'
    ]);

    }

}
add_action('customize_register', [MgCustomizerHome::class, 'ajout_personnalisation_home'] );
?>