<?php

get_header();

get_template_part('templates/blog/archivebanner');

?>

<div class="container single-post-container ">
    <h1 class="mb-5 mt-5">
        <?php the_archive_title(); ?>
    </h1>

    <ul class="list-group mt-5">
        <!-- dans cette boucle nous allons récuprérer tout les post qui correspondent à la recherche -->
        <?php while (have_posts()): the_post(); ?>
        <li class="list-group-item">
            <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
        </li>
<?php endwhile; ?>
</ul>
</div>
<?php

get_footer();

?>

