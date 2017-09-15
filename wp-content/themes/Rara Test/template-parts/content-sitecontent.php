<div id="content" class="site-content">
    <div class="container">
        <div class="row">
            <!-- Site Main -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('content', get_post_format()); ?>
                    <?php endwhile; ?>

                    <?php echo paginate_links(); ?>

                    <?php else : ?>
                        <p><?php __('No Posts Found'); ?></p>
                    <?php endif; ?>
                </main>
            </div>