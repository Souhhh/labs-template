<?php

class MgCustomizerContact {


    public static function ajout_personnalisation_contact($wp_customize)
    {
        function aLaLigne($settingKey)
        {
            $titre = get_theme_mod($settingKey);
            $titre = str_replace("|br|", "</br>", $titre);

            return $titre;
        }       
    }

}
add_action('customize_register', [MgCustomizerContact::class, 'ajout_personnalisation_contact'] );
?>