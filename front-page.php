<?php get_header(); ?>

<section class="latest-posts">
    <div class="container">
        <?php
        // Query pour récupérer les 3 derniers articles
        $latest_posts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_status' => 'publish'
        ));
        if ($latest_posts->have_posts()) :
            while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                <article class="post-column">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-categories">
                        <?php echo get_the_category_list(', '); ?>
                    </div>
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p><?php esc_html_e('No posts found.', 'text-domain'); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>


