<?php

use App\Features\PostTypes\ServicesPostType;
use App\Features\PostTypes\ProjetsPostType;
use App\Features\PostTypes\TestimonialsPostType;
use App\Features\PostTypes\TeamPostType;

use App\Features\Taxonomies\ServicesTaxonomy;
use App\Features\Taxonomies\ProjetsTaxonomy;
use App\Features\Taxonomies\TestimonialsTaxonomy;
use App\Features\Taxonomies\TeamTaxonomy;

use App\Features\MetaBoxes\TeamDetailsMetabox;
use App\Features\MetaBoxes\TestimonialsDetailsMetabox;
use App\Features\MetaBoxes\ServicesDetailsMetabox;
use App\Features\MetaBoxes\ProjetsDetailsMetabox;

/**
 * Plugin Name:     Services
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          Inès 
 * Author URI:      YOUR SITE HERE
 * Text Domain:     services
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         services
 */

//Import du autoload.php pour récupérer les class automatiquement sans devoir un require

require_once('autoload.php');
// ajout du fichier env.php pour les constantes global
require_once('env.php');

 add_action('init', [ServicesPostType::class,'register']);

 add_action('init', [ProjetsPostType::class,'register']);

 add_action('init', [TestimonialsPostType::class,'register']);
 add_action('init', [TeamPostType::class,'register']);


 add_action('init', [ServicesTaxonomy::class, 'register']);

 add_action('init', [ProjetsTaxonomy::class, 'register']);

 add_action('init', [TestimonialsTaxonomy::class, 'register']);
 add_action('init', [TeamTaxonomy::class, 'register']);

 add_action('add_meta_boxes_recipe', [TeamDetailsMetabox::class, 'add_meta_box']);

 add_action('add_meta_boxes_recipe', [TestimonialsDetailsMetabox::class, 'add_meta_box']);

 add_action('add_meta_boxes_recipe', [ServicesDetailsMetabox::class, 'add_meta_box']);

 add_action('add_meta_boxes_recipe', [ProjetsDetailsMetabox::class, 'add_meta_box']);