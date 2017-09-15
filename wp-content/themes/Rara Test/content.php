 <article class="post">
    <header class="entry-header">
        <h2 class="entry-title">
        <?php if(is_single()) : ?>
            <?php the_title(); ?>
        <?php else : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        <?php endif; ?></h2>

        <div class="entry-meta">
            <span> <i class="fa fa-user" aria-hidden="true"></i> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a></span>
            <span><i class="fa fa-calendar" aria-hidden="true"></i> <a href="#"><?php the_date(); ?></a></span>
            <span><i class="fa fa-bookmark" aria-hidden="true"></i> <a href="#"><?php the_category(); ?></a></span>
            <!-- <span><i class="fa fa-comments" aria-hidden="true"></i> <a href="#"><?php the_comment(); ?></a></span> -->
        </div>
    </header>
    <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
    <?php endif; ?>
    
    <?php if(is_single()) : ?>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    <?php else:  ?>
        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div>
    <?php endif; ?>

    <?php if(is_single()) : ?>
        <div class="entry-footer">
            
        </div>
    <?php else: ?>
        <div class="entry-footer">
            <a href="<?php the_permalink(); ?>" class="read-more">Read More...</a>
        </div>
    <?php endif; ?>

    <?php if(is_single()) : ?>
        <?php comments_template(); ?>
    <?php endif; ?>

</article>