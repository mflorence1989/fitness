<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
   
</head>
<body>
<header class="site-header">
    <div class="container header-grid"> 
        <div class="navigation-bar"> 
            <div class="logo">
             <a href="<?php home_url(); ?>">
                <img src="<?php echo get_template_directory_uri() . "/img/logo.svg" ?> " alt="">
            </a>
            </div> <!-- end of logo -->

<!-- add menu -->
                <?php 
                $args = array(
                    'theme_location' => 'main-menu',
                    'container' => 'nav',
                    'container_class' => 'main-menu'
                );
                wp_nav_menu($args);
                ?>
        </div><!-- end of navbar -->

    </div><!-- end of container -->

</header>