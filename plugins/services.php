<?php

use App\Features\PostTypes\RecipePostTypeServices;
use App\Features\PostTypes\RecipePostTypeProjets;
use App\Features\PostTypes\RecipePostTypeTestimonials;
use App\Features\PostTypes\RecipePostTypeTeam;

use App\Features\Taxonomies\RecipeTaxonomy;

// use App\Features\PostTypes\;

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

 add_action('init', [RecipePostTypeServices::class,'register']);

 add_action('init', [RecipePostTypeProjets::class,'register']);

 add_action('init', [RecipePostTypeTestimonials::class,'register']);

 add_action('init', [RecipePostTypeTeam::class,'register']);

 add_action('init', [RecipeTaxonomy::class, 'register']);