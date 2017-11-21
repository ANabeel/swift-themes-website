<?php get_header(); ?>


    
    <div class="main-container center">
			<div class="card intro">
				<p align="center"><a href="#"><img src="http://swift-themes.com/wp-content/uploads/2017/08/logo.png" alt="Swift Themes" style="width:120px;height:120px;border-radius:50%;padding:0;margin:0;"></a></p>
				<p align="center"><?php echo bloginfo("description"); echo wp_title(" - ");?></p>
			</div>
			
			<div class="search"><?php get_search_form(); ?></div>
			
			<ul class="navigation">
				<a href="http://swift-themes.com/faq"><li>Frequently asked questions</li></a>
				<a href="http://swift-themes.com/support"><li>Support</li></a>
				<a href="http://swift-themes.com/news"><li>News</li></a>
				<a href="http://swift-themes.com/work"><li>Our Work</li></a>
				<a href="#"><div class="theme">
					<div id='darktheme'><li>Dark theme</li></div>
					<div id='lighttheme' class="hide"><li>Light theme</li></div>
				</div></a>
			</ul>
	</div>
    
<?php get_footer(); ?>