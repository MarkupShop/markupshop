<?php get_header(); ?>

<section class="page-content">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>

	<?php endwhile; else : ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	<?php endif; ?>
	
</section>
<?php get_footer(); ?>