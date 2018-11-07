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
                    'menu_class'     => 'nav-menu',
                    'theme_location' => 'primary',
                ) );
            ?>
        </nav>
        <h1> <?php bloginfo( 'name' ); ?> </h1>
        <h2> <?php bloginfo( 'description' ); ?> </h2>
    </header>
