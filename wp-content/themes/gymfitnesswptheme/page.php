<?php get_header(); ?>
<main class="container page section no-sidebars">
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
</main>

<section class="testimonials">
    <h2 class="text-center text-blanco">Testimoniales</h2>

    <div class="container">
            <ul class="testimonials-list">
                    <?php 
                        $args = array(
                            'post_type' => 'testimonials',
                            'posts_per_page' => 10
                        );
                        $testimonials = new WP_Query($args);
                        while($testimonials->have_posts()): $testimonials->the_post();
                    ?>
                    <li class="testimonial text-center">
                        <blockquote>
                            <?php the_content(); ?>
                        </blockquote>

                        <footer class="testimonial-footer">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <p><?php the_title(); ?></p>
                        </footer>

                    </li>
                    <?php endwhile; wp_reset_postdata(); ?>
            </ul>
    </div>
</section>
<?php get_footer(); ?>