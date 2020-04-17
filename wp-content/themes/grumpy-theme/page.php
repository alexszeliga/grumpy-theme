<?php get_header(); ?>

<main role="main" aria-label="Content">
    <!-- PAGE CONTENT -->
    <?php if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>