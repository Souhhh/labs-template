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
            
    }


}

add_action('customize_register', [MgCustomizerContact::class, 'ajout_personnalisation_contact'] );
      
?>