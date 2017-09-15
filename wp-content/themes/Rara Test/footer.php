<!-- Sidebar -->
<div id="secondary" class="widget-area" role="complementary">
    <section class="widget widget_search">
        <h3 class="widget-title">Search</h3>
        <form role="search" method="get" class="search-form" action="">
             <?php get_search_form(); ?>
        </form>
    </section>
    <section class="widget widget_social_networks">
        <?php if(is_active_sidebar('stayintouch')) : ?>
            <?php dynamic_sidebar('stayintouch'); ?>
        <?php endif; ?>
    </section>
    <section class="widget widget_text">
        <?php if(is_active_sidebar('aboutauthor')) : ?>
            <?php dynamic_sidebar('aboutauthor'); ?>
        <?php endif; ?>
    </section>
    <section class="widget widget_newsletter">
        <?php if(is_active_sidebar('newsletter')) : ?>
            <?php dynamic_sidebar('newsletter'); ?>
        <?php endif; ?>
    </section>
    <section class="widget widget_advertise">
        <?php if(is_active_sidebar('advertisement')) : ?>
            <?php dynamic_sidebar('advertisement'); ?>
        <?php endif; ?>
    </section>
    <section class="widget widget_instagram">
        <?php if(is_active_sidebar('instagram')) : ?>
            <?php dynamic_sidebar('instagram'); ?>
        <?php endif; ?>
    </section>
    <?php if(is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
</div>
<!-- End Sidebar -->
</div><!-- End Row -->
</div><!-- End Container -->
</div><!-- End Site-Content -->

<!-- Call To Action -->
<div class="call-to-action">
    <div class="container">
        <div class="content">
            <h2>Call To Action Section</h2>
            <a href="#" class="view-details">View Details</a>
        </div>
    </div>
</div>
<!-- End Call To Action -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-t">
        <div class="container">
            <div class="row">
                <div class="col">
                    <section class="widget widget_text">
                      <?php if(is_active_sidebar('footer1')) : ?>
                            <?php dynamic_sidebar('footer1'); ?>
                        <?php endif; ?>
                    </section>
                </div>
                <div class="col">
                    <section class="widget widget_recent_post">
                        <?php if(is_active_sidebar('footer2')) : ?>
                            <?php dynamic_sidebar('footer2'); ?>
                        <?php endif; ?>
                    </section>
                </div>
                <div class="col">
                    <section class="widget widget_newsletter">
                        <?php if(is_active_sidebar('newsletter')) : ?>
                            <?php dynamic_sidebar('newsletter'); ?>
                        <?php endif; ?>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-b">
        <div class="container">
            <div class="site-info">
                <span><?php bloginfo('name'); ?> &copy; <?php echo Date('Y'); ?>  All Rights Reserved   |  Designed by <a href="#">Rara Theme</a>  |  Powered by <a href="#">WordPress</a></span>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

<!-- Back To Top -->
<div id="back-top">
    <a href="#top">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
</div>
<!-- End Back To Top -->

</div><!-- End Main -->
</body>
</html>