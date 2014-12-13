/* ------------------ MENU BUTTON BEHAVIOR ------------------ */

// Clicking the menu button toggles its active behavior
$('.menu-button').click(function() 
{
	$(this).toggleClass('active');
	$('.nav-col').toggle(); 
});


/* ------------------- NAV ITEM BEHAVIOR ------------------- */

// Clicking on a nav item button activates it and scrolls page
$('.nav-col li').click(function() 
{
	// Set animation speed in ms
	var animationSpeed     = 300;

	// Capture data
	var currentNavIndex    = getcurrentNavIndex();
	var newNavIndex        = $(this).index();
	var difference         = Math.abs(currentNavIndex - newNavIndex);
	var animationDuration  = animationSpeed * difference;
	var startHeights       = getSectionStartHeights();

	// Adjust active nav
	$('.nav-col li').removeClass('active');
	$(this).addClass('active');

	// Scroll to the correct height 
	$(window.opera ? 'html' : 'html, body').animate({
		scrollTop: startHeights[newNavIndex]
	},animationDuration);

	// Close menu if it is open
	if ($('.menu-button').hasClass('active')) 
	{
		$('.menu-button').removeClass('active'); 
		$('.nav-col').hide(); 
	} 

});

// TODO: Scrolling adjust nav-item

$(window).scroll(function() {
	var startHeights = getSectionStartHeights();
	windowHeight = $(window).scrollTop();

	// when user scrolls deactivate all nav items
	$('.nav-col li').removeClass('active');

	// depending on the users location activate the right nav item
	for (var i = startHeights.length -1; i >= 0; i-- ) {
		if ( windowHeight >= startHeights[i] ) {
			$('.nav-col li').eq(i).addClass('active');
			break;
		}
	}

});


/* --------------------- HELPER FUNCTIONS -------------------- */

function getcurrentNavIndex() 
{
	return $('.nav-col li.active').index();
}

function getSectionStartHeights() 
{

	var howStartHeight = $('.home-row').height() + 50;
	var workStartHeight = howStartHeight + $('.how-row').height();
	var packagesStartHeight = workStartHeight + $('.work-row').height();
	var contactStartHeight = packagesStartHeight + $('.packages-row').height();

	var startHeights = [0, howStartHeight, workStartHeight, packagesStartHeight, contactStartHeight];
	
	return startHeights;
	
}