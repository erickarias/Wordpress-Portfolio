<?php get_header(); ?>
<section id="content" role="main">
	<div class="section no-border">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'entry' ); ?>
	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>
	<footer class="footer">
	<a href='/blog'><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back to Articles</a>
	<!-- <?php get_template_part( 'nav', 'below-single' ); ?> -->
	</footer>
	</div>
</section>
<?php get_footer(); ?>