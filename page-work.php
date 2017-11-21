<?php get_header(); ?>
  
	<div class="main-container">
		<div class="featured">
			<?php
					if( have_posts() ):
						while( have_posts() ): the_post(); ?>

								<?php the_content(); ?>

						<?php endwhile;
					endif;
				?>
		</div>
	</div>
  
<?php get_footer(); ?>