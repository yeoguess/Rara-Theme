<?php get_header(); ?>
<!-- page-header start-->
<div class="page-header">
    <div class="container">
        <div id="crumbs">
             <a href="#">Home</a> /
             <span class="current">Single Page</span>
        </div>
    </div>
</div>
<!-- page-header start-->
        
<!-- site-content starts -->
<div id="content" class="site-content">
    <div class="container">
        <div class="row">
            <!-- site main starts -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                      <?php get_template_part('content', get_post_format()); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php __('No Posts Found'); ?></p>
                <?php endif; ?>
                </main>
            </div>
            <!-- site main ends -->
          
    <?php get_footer(); ?>