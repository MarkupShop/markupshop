<?php get_header(); ?>

<section class="loop-list">

	<h2 class="list-title"><?php echo get_post_type_object( get_post_type() )->labels->name; ?></h2>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<a class="tile" href="<?php the_permalink(); ?>">
		<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail(); ?>
	</a>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</section>

<?php get_footer(); ?>