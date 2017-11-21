<?php get_header(); ?>

        <div class="main-container">
			<div class="side">
				<?php 
					if( have_posts() ):
						while( have_posts() ): the_post(); ?>	
							<div class="card leftside-card">
								<h3 class="title">
								<?php the_title(); ?></h3>
								<?php the_content(); ?>
							</div>
				
						<?php endwhile;
					endif;?>
				<div class="card leftside-card" id="paginate-container">
					<?php echo paginate_links( $args ); ?>
				</div>
			</div>
			<div class="card rightside-card">
				<a href="https://www.google.com/url?q=https://goo.gl/tpPji0&sa=D&ust=1502645014586000&usg=AFQjCNFGGmI6JL-LY2915szQId4hsue5YQ"><p>Telegram</p></a>
				<a href="https://www.google.com/url?q=https://pastebin.com/&sa=D&ust=1502645014586000&usg=AFQjCNF1gQ-KeVS1w2PHVgrQMQVqBf5yUw"><p>PasteBin</p></a>
				<a href="https://plus.google.com/communities/110736417839203494291"><p>G+ Community</p></a>
			</div>
		</div>
		
<?php get_footer(); ?>