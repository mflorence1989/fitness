<?php
/*
* Template Name: Page with sidebar
*/
 get_header(); ?>
<main class="container page section with-sidebar">
    <div class="page-content">
    <?php while (have_posts() ): the_post() ?>

<h1 class="text-center text-primary"> <?php the_title();?></h1>
<div class="text-center">
        <?php 
        if(has_post_thumbnail() ):
            the_post_thumbnail('blog', array('class' => 'featured-image'));
        endif;
        
        
        ?>

    
    <h1> <?php the_content();?></h1>
    </div>
<?php endwhile; ?>
</div>
    <aside class="sidebar">
            <h1>sidebar</h1>
    </aside>
</main>
<?php get_footer(); ?>