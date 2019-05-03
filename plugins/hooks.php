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


use App\Setup;
use App\Features\Pages\Page;
use App\Features\Pages\SendMail;
use App\Features\Pages\NewsLetter;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsController;
use App\Database\Database;
use App\Features\Roles\Role;

add_action('init', [ServicesPostType::class,'register']);

add_action('init', [ProjetsPostType::class,'register']);

add_action('init', [TestimonialsPostType::class,'register']);
add_action('init', [TeamPostType::class,'register']);


add_action('init', [ServicesTaxonomy::class, 'register']);

add_action('init', [ProjetsTaxonomy::class, 'register']);

add_action('init', [TestimonialsTaxonomy::class, 'register']);
add_action('init', [TeamTaxonomy::class, 'register']);


add_action('add_meta_boxes_team', [TeamDetailsMetabox::class, 'add_meta_box']);

add_action('add_meta_boxes_testimonials', [TestimonialsDetailsMetabox::class, 'add_meta_box']);

add_action('add_meta_boxes_services', [ServicesDetailsMetabox::class, 'add_meta_box']);

add_action('add_meta_boxes_projets', [ProjetsDetailsMetabox::class, 'add_meta_box']);


add_action('save_post_' . ServicesPostType::$slug, [ServicesDetailsMetabox::class, 'save']);

add_action('save_post_' . ProjetsPostType::$slug, [ProjetsDetailsMetabox::class, 'save']);

add_action('delete_post', 'delete_post_metas');

add_action('admin_enqueue_scripts', [Setup::class, 'enqueue_scripts']);

add_action('admin_menu', [Page::class, 'init']);

// Ajout d'un action pour envoi de mail depuis l'admin
add_action('admin_action_send-mail', [MailController::class, 'send']);

// Ajout d'un action  pour suppression d'un mail depuis l'admin
add_action('admin_action_mail-delete', [MailController::class, 'delete']);

// Ajout d'un action pour éditer un mail
add_action('admin_action_mail-update', [MailController::class, 'update']);

// Ajout d'un action pour envoi de mail depuis l'admin
add_action('admin_action_send-news', [NewsController::class, 'send']);

// Ajout d'un action  pour suppression d'un mail depuis l'admin
add_action('admin_action_news-delete', [NewsController::class, 'delete']);

// Ajout d'un action pour éditer un mail
add_action('admin_action_news-update', [NewsController::class, 'update']);

// On ajoute une session afin de pouvoir utiliser la varaible $_SESSION;
add_action('admin_init', [Setup::class, 'start_session']);

// On ajoute la méthode qui va s'executer lors de l'activation du plugin
// Cette fonction ne s'active que lors de l'activation du plugin
register_activation_hook(__DIR__ . '/services.php', [Database::class, 'init']);

register_activation_hook(__DIR__ . '/services.php', [Role::class, 'init']);