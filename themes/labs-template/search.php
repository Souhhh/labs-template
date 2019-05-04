<?php

get_header();

get_template_part('templates/blog/searchbanner.php');

?>

<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <h1 >Résultat de la recherche pour
                    <span class="mt-4">
                        "<?php echo get_search_query(); ?>"
                    </span>
                </h1>
                <ul class="list-group mb-5">
                    <!-- dans cette boucle nous allons récupérer tout les posts qui correspondent à la recherche -->
                    <?php while (have_posts()): the_post(); ?>
                    <li class="list-group-item articles">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                        </a>
                    </li>
<?php endwhile; ?>
                </ul>          
            </div>
        </div>

    </div>

</div>

<?php 

get_template_part('templates/blog/articles');

get_template_part('templates/blog/widget');

get_template_part('templates/services/newsletter');

get_footer();

?>