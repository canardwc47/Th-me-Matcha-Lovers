<?php get_header(); ?>

<div class="container">
    <article class="custom-article">
        <h1 class="custom-post-title"><?php the_title(); ?></h1>
        
        <?php if (has_post_thumbnail()) : ?>
            <div class="custom-post-image">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>
        
        <div class="custom-post-content">
            <?php the_content(); ?>
        </div>
    </article>
</div>

<?php get_footer(); ?>

