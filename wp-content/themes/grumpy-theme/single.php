<?php get_header(); ?>

<main role="main" aria-label="Content">
    <h1>SINGLE</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>