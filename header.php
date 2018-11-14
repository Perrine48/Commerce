<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Sunday</title>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <?php wp_head() ?>
</head>
<body>
    <header>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php
                wp_nav_menu( array(
                    'menu_class'     => 'headermenu',
                    'theme_location' => 'headermenu',
                ) );
            ?>
        </nav>
        <h1> <?php bloginfo( 'name' ); ?> </h1>
        <ul class="navbis">
            <li><a href="commerce/my-account/"><i class="far fa-user"></i></a></li>
            <li><a href="commerce/cart/"><i class="fas fa-shopping-cart"></i></a></li>
            <li><button id="search" type="button" title="Rechercher sur le site"><i class="fa fa-search"></i></button></li>
            <li>
                <div class="srch clearfix">
                    <form method="GET" action="<?php echo get_site_url();?>" id="formsearch">
                        <input max-length="120" autocomplete="off" placeholder="Rechercher..." value="<?php the_search_query(); ?>" name="s" id="q">
                        <button id="search2" type="submit" title="Rechercher sur le site"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </li>
        </ul>

        <div class="slider">
            <?php
            $entete = new WP_Query( array('post_type' => 'product', 'product_cat' => 'entete' ));
                if ( $entete->have_posts() ) :

                while ( $entete->have_posts() ) : $entete->the_post();?>

                <div class="inslider">
                    <?php the_post_thumbnail()?>

                    <div class="slideinfo">
                        <h2><?php the_title()?></h2>
                        <p><?php the_content()?></p>
                    </div>
                </div>

            <?php
                endwhile;
            endif;
            ?>
        </div>
    </header>
