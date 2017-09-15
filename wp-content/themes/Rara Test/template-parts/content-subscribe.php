<section class="subscribe">
    <div class="container">
      <?php $subscribe = new WP_Query(array
                (
                  'post_type' => 'Subscribe',
                  'posts_per_page' => '4'
                ));
        if ($subscribe->have_posts() ) : while ($subscribe->have_posts() ) : $subscribe->the_post();

        $img = get_field('thumbnail_image');?>

        <div class="content">
            <img src="<?php echo $img['url']; ?>" alt="">
            <div class="text">
                <h2><?php the_title(); ?></h2>
                <p>
                    <?php echo get_field('info'); ?>
                </p>
                <form role="search" method="get" class="search-form" action="">
                    <input type="text" placeholder="Your Email Address">
                    <input type="submit" value="Get The Ebook">
                </form>
            </div>
        </div>
        
        <?php endwhile; endif; wp_reset_query(); ?>
    </div>
</section>