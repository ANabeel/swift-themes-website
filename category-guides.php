<?php get_header(); ?>

        <div class="main-container">
			<div class="card info">
				<p align="center">How to install Swift themes</p>
			</div>

			<div class="noflex">
				<?php
					if( have_posts() ):
						while( have_posts() ): the_post(); ?>
						<div class="card faq">
							<p><?php the_title(); ?></p>
							<div class="panel hide">
								<?php the_content(); ?>
							</div>
						</div>
						<?php endwhile;
					endif;
				?>
			</div>
			<div class="card" id="paginate-container">
				<?php echo paginate_links( $args ); ?>
			</div>
		</div>
<?php get_footer(); ?>
