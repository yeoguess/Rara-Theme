<?php get_header(); ?>

<div class="container">

<?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <h1 class="page-heading"><?php the_title(); ?></h1>
<?php the_content(); ?>

<?php endwhile; ?>
                <?php else : ?>
                    <p><?php __('No Posts Found'); ?></p>
                <?php endif; ?>
      
                
<?php get_footer(); ?>