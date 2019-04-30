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