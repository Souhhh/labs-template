<?php

/**
 * fonction pour rendre une view
 * 
 * @param string $path chemin du fichier à partir du dossier views sans l'extention .html.php
 * @param array $data tableau de donner qui sont passer dans la view
 */

 function view($path, $data = array())
 {
     extract($data);
     include(RAT_VIEW_DIR . $path . '.html.php');
 }

 /**
  * extrait la valeur dans un tableau si la valeur existe dans ce tableau 
  * cela permet de ne pas avoir d'erreur lorsque l'on crée un nouveau post
  * $key la meta key dans la base de donnée
  * $data le tableau resultant de get_post_met
  */

  function extract_data_attr(string $key, array $data) 
  {
      // vérification que la clé existe bien dans le tableau
      if (array_key_exists($key, $data)) {
          // On renvoi la valeur et on en profite pour échapper la valeur pour la sécurité

          return esc_attr($data[$key][0]);
      }
      return '';
  }

  /**
   * fonction qui renvoi la data sécurisé si elle existe dans le tableau
   */
  function post_data($key, $data)
  {
      if (array_key_exists($key, $data))
      {
          return sanitize_text_field($data[$key]);
      }
      return '';
  }

  /**
   * enregistrement de toutes les valeurs du tableau en utilisant leur key comme meta key dans la base de donnée
   * $post_id id du post courant
   * $data tableau de valeurs de la metabox
   */

   function update_post_metas($post_id, $data)
   {
       foreach ($data as $key => $value)
       {
           update_post_meta($post_id, $key, $value);
       }
   }

   /**
    * suppression de toutes les meta d'un post
    * $post_id
    */

    function delete_post_metas($post_id)
    {
        $metas = get_post_meta($post_id);

        foreach ($metas as $key => $value) {
            delete_post_meta($post_id, $key);
        }
    }