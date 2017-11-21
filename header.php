<?php
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Swift-Themes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <meta name="theme-color" content="#212121">
        <link rel="shortcut icon" href="http://swift-themes.com/wp-content/uploads/2017/08/logo.jpg">
		<script src="http://swift-themes.com/wp-content/uploads/2017/08/js.cookie.js"></script>

		<?php wp_head(); ?>
    </head>
	
		<div id="dropnav" class="hide">
			<ul>
				<a href="http://swift-themes.com/faq"><li>FAQ</li></a>
				<a href="http://swift-themes.com/support"><li>Submit a bug report</li></a>
				<a href="http://swift-themes.com/news"><li>News</li></a>
				<a href="http://swift-themes.com/work"><li>Our Work</li></a>
			</ul>
		</div>
		<div id="dropsearch" class="hide">			
			<div class="search"><?php get_search_form(); ?></div>
		</div>
	
	<header>
		<div class="left">
			<a href="http://swift-themes.com"><div class="swiftlogo">Home</div></a>
		</div>

		<div class="right">
			<div id="search">
				<a href="#"><img src="http://swift-themes.com/wp-content/uploads/2017/10/search-icon-white-one-hi.png" alt="Search" style="width:15px;height:15px;"></a>
			</div>
			<div id="menu">
				<a href="#"><img src="http://swift-themes.com/wp-content/uploads/2017/08/menu.png" alt="Menu" style="width:15px;height:15px;"></a>
			</div>
		</div>

		 <script>
			<?php if ( !is_front_page() )  :?>
				jQuery('#menu').css('display', 'inline-block');
			<?php endif; ?>
        </script>
	</header>
	<body>