<?php get_header(); ?>

<section class="page-content">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<h2 class="page-title"><?php the_title(); ?></h2>
		<?php the_content(); ?>

		
		<?php

			$members = get_field('staff_member');


			foreach( $members as $member){

				echo '<div class="staff-member">';
				echo '<img class="photo" src="'.$member['photo'].'" />';
				echo '<div class="staff-info">';

				echo '<h3 class="staff-name"><dl><dt class="name">'.$member['name'].'</dt><dd class="title">'.$member['title'].'</h3>';
				
				echo '<div class="bio">'.$member['bio'].'</div>';
				echo '<dl class="skills"><dt><h4>Skills</h4></dt>';
				foreach( $member['skills'] as $skill ){
					echo '<dd>'.$skill['skill_name'].'</dd>';
				}
				echo '</dl>';
				echo '<h4>Contact</h4>';

				echo '</div>';
				echo '</div>';

			}

?>

	<?php endwhile; else : ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	<?php endif; ?>
	
</section>
<?php get_footer(); ?>