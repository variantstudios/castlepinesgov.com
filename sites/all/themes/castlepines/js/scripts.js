 (function ($) {
	$(document).ready(function() {
	
//$('body.node-type-public-works div#tabs ul.tabs').append('<li><a href="/public-works-service-request/">Public Works Dashboard</a></li>');
	
$('body.page-node-422.logged-in #main').append('<div class="dashboard"><span class="back"><a href="/public-works-service-request/">Public Works Dashboard</a></span> <span class="logout"><a href="/user/logout">Logout</span></div>');
$('body.logged-in.node-type-public-works #main').append('<div class="dashboard"><span class="back"><a href="/public-works-service-request/">Public Works Dashboard</a></span> <span class="logout"><a href="/user/logout">Logout</span></div>');

$('#edit-field-public-works-category-und option:contains("Select a value")').text('Select One');


$( "nav ul li" ).click(function() {
  $(this).addClass('open');
});

/* -------------- I Want To script ---------- */
  $('ul.dropdown.second li').click(function (e) {
    var value = $(this).data('value');
    $('.button').attr('href', value);
    $('.button').addClass('on');
  });

  $('ul.dropdown.first li').click(function () {
    $('ul.dropdown.first li').not(this).removeClass('active');    
    $(this).toggleClass('active');
    var activeCategory = $('ul.dropdown.first li.active').attr('id');
        $('ul.dropdown.second li').not(activeCategory).removeClass('show');  
        $('ul.dropdown.second li#' + activeCategory).toggleClass('show');
  });
  
  
  $('ul.dropdown.second li').click(function () {
    $('ul.dropdown.second li').not(this).removeClass('active');    
    $(this).toggleClass('active'); 
   }); 

/* ---------- End I Want To script --------- */

var $menu = $("nav#menu").clone();
$menu.attr( "id", "mobile-menu" );
$menu.mmenu({
     "slidingSubmenus": false
  });
  
  $("#mobile-toggle").click(function() {
     $("#mobile-menu").trigger("open.mm");
  });
 


	if(Modernizr.mq('only all')) {
		$('html').addClass('mq');
	} else {
        $('html').addClass('no-mq');
    };

 var $grid = $('.photo-grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
  });
  // layout Isotope after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.masonry();
  });  
  

  $("form#public-works-node-form input#edit-submit").attr('value', 'Save Request');
  $("form#public-works-node-form input#edit-submit--2").attr('value', 'Submit Your Request');
  
  });
})(jQuery);