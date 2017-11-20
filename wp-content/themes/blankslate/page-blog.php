<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>

	<div class="section no-border">
		<h2 class="page-title">Blog</h2>

		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div class="block">
			<a href="<?php the_permalink(); ?>" title="Read more">
				<div class="block-img">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="block-text">
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
				</div>
			</a>
		</div>
		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>


		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</div>
	<nav id="nav-posts">
		<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
	</nav>

<?php get_footer(); ?>