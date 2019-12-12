<?php get_header(); ?>
<main class="container page section">
<?php while (have_posts() ): the_post() ?>

<h1 class="text-center text-primary"> <?php the_title();?></h1>
        <?php 
        if(has_post_thumbnail() ):
            the_post_thumbnail();
        endif;
        
        
        ?>

    <div class="text-center">
    <h1> <?php the_content();?></h1>
    </div>
<?php endwhile; ?>
</main>
<?php get_footer(); ?>