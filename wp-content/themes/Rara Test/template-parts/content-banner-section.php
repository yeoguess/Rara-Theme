<section class="banner">
    <div class="container">
        <div class="content">
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('showcase_image')) ?>">
            <div class="text">
                <div class="top-text">
                    <h2><?php echo get_theme_mod('showcase_heading', 'Believe It, Persue It!'); ?></h2>
                    <p><?php echo get_theme_mod('showcase_text', ' Life is 10% of what happens to you and 90% of how you react to it. Lorem ipsum dolor sit amet Lorem ipsum.'); ?></p>
                    <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="learn-btn""><?php echo get_theme_mod('btn_text', 'Learn More'); ?></a>
                </div>
                <div class="sponser">
                    <h3>As Featured On:</h3>
                    <ul>
                        <li><img src="<?php echo wp_get_attachment_url(get_theme_mod('showcase_featured1')) ?>"></li>
                        <li><img src="<?php echo wp_get_attachment_url(get_theme_mod('showcase_featured2')) ?>"></li>
                        <li><img src="<?php echo wp_get_attachment_url(get_theme_mod('showcase_featured3')) ?>"></li>
                        <li><img src="<?php echo wp_get_attachment_url(get_theme_mod('showcase_featured4')) ?>"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>