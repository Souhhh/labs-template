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

// Section testimonial
$wp_customize->add_section( 'testimonial-text' , [
    'panel' => 'home-panel',
    'title'      => __('Section Avis : Personnalisation'),
    'description'   => __('Personnalisation du texte')
]);
// Section services
    $wp_customize->add_section( 'services-text' , [
        'panel' => 'home-panel',
        'title'      => __('Section Services : Personnalisation'),
        'description'   => __('Personnalisation du texte')
    ]);
// Section team
    $wp_customize->add_section( 'team-text' , [
        'panel' => 'home-panel',
        'title'      => __('Section Team : Personnalisation'),
        'description'   => __('Personnalisation du texte')
    ]);
// Section promotion
$wp_customize->add_section( 'promotion-text' , [
    'panel' => 'home-panel',
    'title'      => __('Section Promotion : Personnalisation'),
    'description'   => __('Personnalisation du texte')
]);

// Section contact
$wp_customize->add_section( 'contact-text' , [
    'panel' => 'home-panel',
    'title'      => __('Section Contact : Personnalisation'),
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
    $wp_customize->add_setting('about-text-top-right', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('about-text-top-middle', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    $wp_customize->add_setting('about-text-top-left', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    $wp_customize->add_setting('about-text-left', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    $wp_customize->add_setting('about-text-right', [
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    $wp_customize->add_setting('image-video', [
        'type' => 'theme_mod', 
    ]);

    $wp_customize->add_setting('about-url', [
        'type' => 'theme_mod',
    ]);

// settings services

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

// settings team

$wp_customize->add_setting('team-text-top-right', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);
$wp_customize->add_setting('team-text-top-middle', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);

$wp_customize->add_setting('team-text-top-left', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);
$wp_customize->add_setting('team-image-center', [
    'type' => 'theme_mod', 
]);
$wp_customize->add_setting('team-text-name', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);

$wp_customize->add_setting('team-text-title', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);

// settings testimonials
$wp_customize->add_setting('testimonials-text-top', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);

// settings promotion
$wp_customize->add_setting('promotion-text-title', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);
$wp_customize->add_setting('promotion-text-subtitle', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);

// settings contact
$wp_customize->add_setting('contact-text-title', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);
$wp_customize->add_setting('contact-text-subtitle', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);
$wp_customize->add_setting('contact-text-titre-vert', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
]);
$wp_customize->add_setting('contact-text-info', [
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
    $wp_customize->add_control('about-text-top-left-control',
    [
        'section' => 'about-text',
        'settings' => 'about-text-top-left',
        'label' => __('Titre de la section à gauche'),
        'description' => __('Personnalisez le titre'),
        'type' => 'textarea'
    ]);
    $wp_customize->add_control('about-text-top-middle-control',
    [
        'section' => 'about-text',
        'settings' => 'about-text-top-middle',
        'label' => __('Titre de la section en vert'),
        'description' => __('Personnalisez le titre'),
        'type' => 'textarea'
    ]);
    $wp_customize->add_control('about-text-top- right-control',
    [
        'section' => 'about-text',
        'settings' => 'about-text-top-right',
        'label' => __('Titre de la section à droite'),
        'description' => __('Personnalisez le titre'),
        'type' => 'textarea'
    ]);

    $wp_customize->add_control('about-text-left-control',
    [
        'section' => 'about-text',
        'settings' => 'about-text-left',
        'label' => __('Texte colonne gauche'),
        'description' => __('Personnalisez le texte de la colonne gauche'),
        'type' => 'textarea'
    ]);

    $wp_customize->add_control('about-text-right-control',
    [
        'section' => 'about-text',
        'settings' => 'about-text-right',
        'label' => __('Texte colonne droite'),
        'description' => __('Personnalisez le texte de la colonne droite'),
        'type' => 'textarea'
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'video',
            array(
                'label'      => __( 'Upload a image for your video', 'theme_name' ),
                'section'    => 'about-text',
                'settings'   => 'image-video',
            )
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'about-url',
            array(
                'label'          => __( 'Url de la video', 'theme_name' ),
                'section'        => 'about-text',
                'settings'       => 'about-url',
                'type'           => 'url',
                'choices'        => array(
                )
            )
        )
    );
// Control services
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


// Control team
$wp_customize->add_control('team-text-top-left-control',
[
    'section' => 'team-text',
    'settings' => 'team-text-top-left',
    'label' => __('Titre de la section à gauche'),
    'description' => __('Personnalisez le titre'),
    'type' => 'textarea'
]);
$wp_customize->add_control('team-text-top-middle-control',
[
    'section' => 'team-text',
    'settings' => 'team-text-top-middle',
    'label' => __('Titre de la section en vert'),
    'description' => __('Personnalisez le titre'),
    'type' => 'textarea'
]);
$wp_customize->add_control('team-text-top-right-control',
[
    'section' => 'team-text',
    'settings' => 'team-text-top-right',
    'label' => __('Titre de la section à droite'),
    'description' => __('Personnalisez le titre'),
    'type' => 'textarea'
]);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'team-image',
        array(
            'label'      => __( 'Upload your profil picture', 'theme_name' ),
            'section'    => 'team-text',
            'settings'   => 'team-image-center',
        )
    )
);
$wp_customize->add_control('team-text-name-control',
[
    'section' => 'team-text',
    'settings' => 'team-text-name',
    'label' => __('Name & Lastname'),
    'description' => __('Personnalisez le titre'),
    'type' => 'textarea'
]);
$wp_customize->add_control('team-text-title-control',
[
    'section' => 'team-text',
    'settings' => 'team-text-title',
    'label' => __('Titre de Profession'),
    'description' => __('Personnalisez le titre'),
    'type' => 'textarea'
]);

// Control testimonials
$wp_customize->add_control('testimonials-text-title-control',
[
    'section' => 'testimonial-text',
    'settings' => 'testimonials-text-top',
    'label' => __('Titre de testimonials'),
    'description' => __('Personnalisez le titre'),
    'type' => 'textarea'
]);

// Control promotion
$wp_customize->add_control('promotion-text-title-control',
[
    'section' => 'promotion-text',
    'settings' => 'promotion-text-title',
    'label' => __('Titre de promotion'),
    'description' => __('Personnalisez le titre'),
    'type' => 'textarea'
]);
$wp_customize->add_control('promotion-text-subtitle-control',
[
    'section' => 'promotion-text',
    'settings' => 'promotion-text-subtitle',
    'label' => __('Sous-titre de promotion'),
    'description' => __('Personnalisez le titre'),
    'type' => 'textarea'
]);

// Control contact
$wp_customize->add_control('contact-text-title-control',
[
    'section' => 'contact-text',
    'settings' => 'contact-text-title',
    'label' => __('Titre de contact'),
    'description' => __('Personnalisez le titre'),
    'type' => 'textarea'
]);
$wp_customize->add_control('contact-text-subtitle-control',
[
    'section' => 'contact-text',
    'settings' => 'contact-text-subtitle',
    'label' => __('Sous-titre de contact'),
    'description' => __('Personnalisez le titre'),
    'type' => 'textarea'
]);
$wp_customize->add_control('contact-text-titre-vert-control',
[
    'section' => 'contact-text',
    'settings' => 'contact-text-titre-vert',
    'label' => __('Titre en vert'),
    'description' => __('Personnalisez le titre'),
    'type' => 'textarea'
]);
$wp_customize->add_control('contact-text-info-control',
[
    'section' => 'contact-text',
    'settings' => 'contact-text-info',
    'label' => __('Les informations'),
    'description' => __('Personnalisez le titre avec |br| pour passer à la ligne'),
    'type' => 'textarea'
]);
    }

}
add_action('customize_register', [MgCustomizerHome::class, 'ajout_personnalisation_home'] );
?>