var searchButton = 'header #search';
var SearchBar = '#dropsearch';
var menu = 'header #menu';
var dropMenu = '#dropnav'
var faqTitle = '.main-container .noflex p';
var faqPanel = '.main-container .noflex .panel';
var pagSpan= '#paginate-container span';
var pageContainer = '#paginate-container';
var themeButton = '#lighttheme, #darktheme';
var darkthemeButton = '#darktheme';
var lightthemeButton = '#lighttheme';
var header = 'header, .card h3, .rightside-card a';
var mainDark = 'body, .faq .panel';
var darkCards = '.card, .featured, .navigation li, .search-form input, .mainDark .navigation li, .page-numbers';

//Drop search in the header
jQuery(searchButton).click(function(){
	jQuery(SearchBar).slideToggle();
});

//Drop menu in header
jQuery(menu).click(function(){
	jQuery(dropMenu).slideToggle();
});

//expand and collapse faq questions
jQuery(faqTitle).click(function(){
	jQuery(this).next(faqPanel).slideToggle();
});

//display pagination card if pages exist
if (jQuery(pagSpan).hasClass('page-numbers')) {
		jQuery(pageContainer).css('display', 'flex');
};


//theming function
	function darkmodeOn() {
		jQuery(themeButton).toggleClass('hide');
		jQuery(header).addClass('darkmodeborder');
		jQuery(mainDark).addClass('mainDark');
		jQuery(darkCards).addClass('darkCards');

	};
			
// light mode function
	function lightmodeOn() {
		jQuery(themeButton).toggleClass("hide");
		jQuery(header).removeClass('darkmodeborder');
		jQuery(mainDark).removeClass('mainDark');
		jQuery(darkCards).removeClass('darkCards');
	};
			
//set dark theme if darkmode cookie is found
	if (Cookies.get("darkmode")) {
		darkmodeOn();
	};
			
// dark theme
	jQuery(darkthemeButton).click(function() {
		Cookies.set('darkmode', '1', { expires: 360 });
			darkmodeOn();
		alert('We\'ll use cookies to remember your theme choice. If you don\'t want that then click on light theme and the cookie created for the dark theme will be removed.');
				return false;
		});
				
// light theme
	jQuery(lightthemeButton).click(function() {
		Cookies.remove('darkmode');
			lightmodeOn();
				return false;
	});
