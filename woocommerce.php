<?php
get_header(); ?>

<main>
    <nav role="navigation">
        <?php
            // wp_nav_menu( array(
            //     'menu_class'     => 'categorymenu',
            //     'theme_location' => 'categorymenu',
            // ) );

            $categories = get_categories('taxonomy=product_cat&&exclude=16');
              foreach($categories as $category){
                  echo $category->name;
              }



        ?>
    </nav>
    <?php woocommerce_content() ?>
    <input type="button" name="more" value="Show All" id="more">
</main>

<?php get_footer();
