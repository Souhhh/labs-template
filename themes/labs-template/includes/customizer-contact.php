<?php

function aLaLigne($settingKey)
        {
            $titre = get_theme_mod($settingKey);
            $titre = str_replace("|br|", "</br>", $titre);

            return $titre;
        } 

class MgCustomizerContact {

    public static function ajout_personnalisation_contact($wp_customize)
    {
            //Ajout d'un panel avec des options

            $wp_customize->add_panel('contact-panel', [
                'title' => __('Page Contact'),
                'description' => __('Personnalisation de la page Contact')
            ]);

// Section contact map
$wp_customize->add_section( 'maps-url' , [
    'panel' => 'contact-panel',
    'title'      => __('Section Maps : Personnalisation'),
    'description'   => __('Personnalisation de la map')
]);

// Section contact map
$wp_customize->add_setting('map-url', [
    'type' => 'theme_mod',
]);

// control map url
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'map-url',
        array(
            'label'          => __( 'Url de la map', 'theme_name' ),
            'section'        => 'maps-url',
            'settings'       => 'map-url',
            'type'           => 'url',
            'choices'        => array(
            )
        )
    )
);


    }
}

add_action('customize_register', [MgCustomizerContact::class, 'ajout_personnalisation_contact'] );
      
?>