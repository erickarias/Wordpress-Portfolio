<?php get_header(); ?>
<section id="content" role="main">
	<div class="section no-border">
		<header class="header">
		<h1 class="entry-title"><?php _e( '', 'blankslate' ); ?><?php single_cat_title(); ?></h1>
		<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
		</header>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="block col-8 shift-2">
				<?php get_template_part( 'entry' ); ?>
			</div>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
	</div>
</section>
<?php get_footer(); ?>