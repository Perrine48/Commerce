<?php
get_header(); ?>

<main>
    <nav role="navigation" class="categorymenu">
        <ul>

        <?php

            $categories = get_categories('taxonomy=product_cat&&exclude=16,15');
              foreach($categories as $category){
        ?>
                <li><a href=<?php echo "commerce/product-category/".$category->slug ?>> <?php echo $category->name ?> </a></li>
        <?php
              }
        ?>

        </ul>
            <p class="all">
                <a href="commerce/uncategorized"> All Products >> </a>
            </p>
    </nav>
    <?php woocommerce_content() ?>
    <input type="button" name="more" value="Show All" id="more">
</main>

<?php get_footer();
