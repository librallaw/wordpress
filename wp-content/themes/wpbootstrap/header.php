<?php require_once ("wp_bootstrap_navlist_walker.php")?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description')?>">
    <meta name="author" content="<?php bloginfo('author')?>">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/blog/">

    <title><?php bloginfo('name')?> || <?php is_front_page() ?  bloginfo('description') : wp_title(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo("template_url")?>/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


    <!-- Custom styles for this template -->
    <link href="<?php bloginfo("stylesheet_url") ?>" rel="stylesheet">

    <?php wp_head() ?>


</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <?php
            wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'false',
                    'menu_class'        => 'nav nav-list',
                    'fallback_cb'       => 'wp_bootstrap_navlist_walker::fallback',
                    'walker'			=> new wp_bootstrap_navlist_walker())
            );
            ?>
        </nav>
    </div>
</div>