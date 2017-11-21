<?php get_header(); ?>

        <div class="main-container center">
			<?php 
				if( have_posts() ):
					while( have_posts() ): the_post(); ?>	
						<div class="card content-search">
							<h3 class="title">
							<?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>
				
					<?php endwhile;
				endif;?>
		</div>
		
<?php get_footer(); ?>