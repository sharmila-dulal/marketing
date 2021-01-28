<?php
/**
 * Related Posts.
 *
 * @package Marketing
 */
$related_posts_text = mega_magazine_options('related_posts_text');
$enable_related_carousel = mega_magazine_options('enable_related_carousel');
$related_posts_number = mega_magazine_options('related_posts_number');

if (1 === absint($enable_related_carousel)) {

    $wrap_class = 'carousel-enabled ';
} else {

    $wrap_class = '';
}
?>


<div class="additional-posts">
    
    <?php
    $post_id = get_the_ID();

    $categories = get_the_category($post_id);

    if ($categories) {

        $category_ids = array();

        foreach ($categories as $category) {

            $category_ids[] = $category->term_id;
        }

        $args = array(
            'category__in' => $category_ids,
            'post__not_in' => array($post_id),
            'posts_per_page' => absint($related_posts_number),
        );

        $related_query = new WP_Query($args);

        if ($related_query->have_posts()) {
            ?>  
    
    
    <h3 class="title">
        Recommended Articles
    </h3>               
    <div class="block-wrap">
        <?php
        while ($related_query->have_posts()) {

        $related_query->the_post();
        ?>  
        
        <div class="block clearfix">
            <div class="entry-meta">
                <span class="posted-on" itemprop="datePublished">
                    <a href="<?php the_permalink(); ?>">
                        <time datetime="2017-12-21"><?php echo get_the_date( 'M d,Y' ); ?></time>
                    </a>
                </span>
            </div>
            <header class="entry-header">
                <h3 class="entry-title">
                    <a href="<?php the_permalink(); ?>">This Start-Up Will Actually Downsize Your Closet</a>
                </h3>                        
            </header><!-- .entry-header -->
            <figure class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>                  
                </a>
            </figure><!-- .post-thumbnail -->
        </div>
                            <?php
                    }

                    wp_reset_postdata();
                    ?>  
        
        
    </div><!-- .block-wrap -->
                <?php
        }
    }
    ?>
</div>


