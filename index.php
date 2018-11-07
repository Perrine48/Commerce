<?php get_header(); ?>

<main>
<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) :

        while ( have_posts() ) : the_post();?>

            <?php the_title() ?>
            <?php the_content() ?>

    <?php
        endwhile;

    else :
        get_template_part( 'content', 'none' );

    endif;
    ?>

    </main><!-- .site-main -->

</div><!-- .content-area -->
</main>

<?php get_footer();
