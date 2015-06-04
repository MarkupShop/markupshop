<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>

	<h2 class="article-header" style="background-image: url(<?php echo $url; ?>)"><div class="header-wrapper"><span class="section-name">Case Studies</span><?php the_title(); ?></div></h2>

	<section>

		<article>

			<?php the_content(); ?>

		</article>

	</section>

<?php endwhile; else : ?>
	<section>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	</section>
<?php endif; ?>


<?php get_footer(); ?>