<?php get_header(); ?>

    <div class="main-container center">

	<div class='home-logo'><p align="center"><a href="#"><img src="http://swift-themes.com/wp-content/uploads/2017/08/logo.png" alt="Swift Themes" style="width:120px;height:120px;border-radius:50%;padding:0;margin:0;"></a></p>
	</div>

	<ul class="navigation">
		<a href="http://swift-themes.com/faq"><li>Frequently asked questions</li></a>
		<a href="http://swift-themes.com/support"><li>Submit a bug report</li></a>
		<a href="http://swift-themes.com/news"><li>News</li></a>
		<a href="http://swift-themes.com/guides"><li>Installation Guide</li></a>
		<a href="http://swift-themes.com/work"><li>Our Work</li></a>
		<a href="#">
			<div class="theme">
				<div id='darktheme'><li>Dark theme</li></div>
				<div id='lighttheme' class="hide"><li>Light theme</li></div>
			</div>
		</a>
	</ul>

<?php query_posts('cat=10' . '&showposts=1'.'&paged='.$paged); ?>
	<?php 
		if( have_posts() ):
			while( have_posts() ): the_post(); ?>	
				<div class="card news-card">
					<h3 class="title">
					<a href="<?php the_permalink() ?>"rel="bookmark">
					<?php the_title(); ?></h3></a>
					<?php the_excerpt(); ?>
				</div>
			<?php endwhile;
		endif
	;?>
			<div class="card" id="subcats">
			<p> Choose the topic you need help with or check our full faq down below</p>
				<?php wp_list_categories( array(
       				'child_of'           => 2,
					'style'               => 'paragraph',
        			'title_li'            => ( '' ),
        			'separator'           => ''
    			) ); ?>
			</div>
	</div>
    
<?php get_footer(); ?>
