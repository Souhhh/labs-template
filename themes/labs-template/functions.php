<?php

function ajout_css_js()
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

add_action('wp_enqueue_scripts', 'ajout_css_js');

/**
 * Fonction qui ajoute un menu au thème
 */

 function register_main_menu()
 {
     register_nav_menu('main-menu', 'Menu principal dans le header.');
 }

 add_action('after_setup_theme', 'register_main_menu');

/**
 * Fonction qui ajoute des attributes au balise a des nav_menu
 */

 function ajout_menu_a_class($atts, $item, $args)
 {
     $class = '';
     $atts['class'] = $class;
     return $atts;
 }

 add_filter('nav_menu_link_attributes', 'ajout_menu_a_class', 10, 3);

//  hook pour li = nav_menu_css_class, paramètres pour li : $classes, $item, $args, $depth

/** Ajout d'image pour les posts */

function ajout_image_article()
{
    add_theme_support('post-thumbnails');
    $test = 0;
}

add_action('init', 'ajout_image_article');

function ajout_personnalisation_services($wp_customize)
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
add_action('customize_register', 'ajout_personnalisation_services');

function ajout_personnalisation_home($wp_customize)
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
add_action('customize_register', 'ajout_personnalisation_home');
?>