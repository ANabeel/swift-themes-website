<?php get_header(); ?>
	<div class="main-container center">
			<?php 
				if( have_posts() ):
					while( have_posts() ): the_post(); ?>	
						<div class="card content-search">
							<h3 class="title">
							<a href="<?php the_permalink() ?>"rel="bookmark">
							<?php the_title(); ?></h3></a>
							<?php the_excerpt(); ?>
						</div>
				
					<?php endwhile;
				endif;?>
		</div>
		<div class="card" id="paginate-container">
			<?php echo paginate_links( $args ); ?>
		</div>
<?php get_footer(); ?>