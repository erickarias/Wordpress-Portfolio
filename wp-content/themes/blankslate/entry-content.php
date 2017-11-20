<section class="entry-content">
<section class="featured-img">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php if ( $caption = get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
    <p class="caption"><?php echo $caption; ?></p>
<?php endif; ?>
</section>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>