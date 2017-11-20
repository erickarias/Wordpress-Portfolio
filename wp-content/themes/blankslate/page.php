<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
// $( document ).ready(function() {
// 	$('.subscribe-link').on('click', function(e){
// 		$('.modal').toggleClass("visible");
// 		e.preventDefault();
// 	});

// 	$('.curtain').on('click', function(e){
// 		$('.modal').removeClass("visible");
// 		e.preventDefault();
// 	});
// });
$( document ).ready(function() {
	$('.grid').masonry({
	  // options
	  itemSelector: '.grid-item',
	  columnWidth: 428
	});
	
});
window.onload = function() {
	$('.grid').masonry('layout');
};
</script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<?php edit_post_link(); ?>
</header>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
