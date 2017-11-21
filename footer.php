		<div class=footer>
		
			<div class="footer-left">
				<p><a href="http://swift-themes.com/contact">Contact us</a></p>
			</div>
			<div class="footer-right">
				<p>Designed by <a href="https://anabeel.github.io/">Nabeel</a></p>
			</div>
			
		</div>
	</body>
		
		<script>
			//dark mode stuff
			var themeButton = '#lighttheme, #darktheme';
			var darkthemeButton = '#darktheme';
			var lightthemeButton = '#lighttheme';
			var darkMode = 'body, .navigation li';
			var cards = '.card, .featured';
			var header = 'header';
			var panel = '.faq .panel';
			var searchForm = '.search-form';
			var themeButton = '#lighttheme, #darktheme';
			var darkMode = 'body, .navigation li';
			
			//dark mode function
			function darkmodeOn() {
				$(themeButton).toggleClass('hide');
				$(darkMode).addClass('darkmode');
				$(cards).addClass("dark-cards");
				$(header).addClass("darkmodeborder");
				$(panel).css("background-color","#212121").css("color","#fff");
				$(searchForm).addClass("dark-search-form");
			}
			
			// light mode function
			function lightmodeOn() {
				$(themeButton).toggleClass("hide");
				$(darkMode).removeClass("darkmode");
				$(cards).removeClass("dark-cards");
				$(header).removeClass("darkmodeborder");
				$(searchForm).removeClass("dark-search-form");
			}
			
			//set dark theme if darkmode cookie is found
				if (Cookies.get("darkmode")) {
					darkmodeOn();
				};
			
			// dark theme
				$(darkthemeButton).click(function() {
					Cookies.set('darkmode', '1', { expires: 360 });
					darkmodeOn();
					return false;
				});
				
			// light theme
				$(lightthemeButton).click(function() {
					Cookies.remove('darkmode');
					lightmodeOn();
					return false;
				});
		</script>
		
		<script>
			//faq slide cards
			var title = '.main-container .noflex p';
			var panel = '.main-container .noflex .panel';
			var dropnavButton = "header .right";
			var dropNav = '.dropnav'
			var paginationCard = '#paginate-container';
			var reverseImg ='.reverse-featured-img';
			var hideme = '#hideme';
			
				$(title).click(function(){
					$(this).next(panel).slideToggle('linear');
				});
				
			//dropnav menu
			$(dropnavButton).click(function(){
				$(dropNav).slideToggle('linear');
			});
		
			<!-- if on home page hide dropnav button else show it -->
			<?php if ( !is_front_page() )  :?>
					$(dropnavButton).removeClass('hide');
			<?php endif; ?>
			
			if ($(window).width() < 850) {
				$(reverseImg).addClass('hide');
				$(hideme).removeClass('hide');
			};
			
			if ($('#paginate-container span').hasClass('page-numbers')) {
				$('#paginate-container').css('display', 'flex');
			};
	</script>
		
</html>