function setActiveNav(){
	var sPath = window.location.pathname;

	var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
	var href;
	sPage = sPage.split(".");
	sPage = sPage[0];
	
   $('.nav li').each(function() {
   	$(this).removeClass('active');
    	href = $(this).find('a').attr('href');
    	href = (typeof href === 'undefined') ? "" : href.split("/");
    	href = href[href.length - 1];
    	href = (typeof href === 'undefined') ? "" : href.split(".")[0];
    	if (href === sPage) {
      	$(this).addClass('active');
    	}
	});
}

$(function(){
	setActiveNav();

	$('.flexslider').flexslider({
    	animation: "fade",
    	controlNav: false,
    	directionNav: false,
  	});

   var $container = $('#photoswipe');

$container.imagesLoaded(function(){
  $container.masonry({
    itemSelector: '.box',
    columnWidth: function( containerWidth ) {
    return containerWidth / 4;
  },
    isAnimated: false
  });
});

$container.infinitescroll({
  navSelector : '#page-nav', // selector for the paged navigation
  nextSelector : '#page-nav a', // selector for the NEXT link (to page 2)
  itemSelector : '.box', // selector for all items you'll retrieve
  bufferPx     : 600,
  loading: {
    finishedMsg: 'No more photos to show.',
    img: "http://www.infinite-scroll.com/loading.gif",
  }
},
// trigger Masonry as a callback
function( newElements ) {
// hide new items while they are loading
  var $newElems = $( newElements ).css({ opacity: 0 });
// ensure that images load before adding to masonry layout
  $newElems.imagesLoaded(function(){
// show elems now they're ready
    $newElems.animate({ opacity: 1 });
    $container.masonry( 'appended', $newElems, true );
  });
});


  $('#videogallery').masonry({ columnWidth: 1,});
	$('#homewall').masonry({ columnWidth: function( containerWidth ) {
    return containerWidth / 6;
  },});
	var myPhotoSwipe = $("#photoswipe a").photoSwipe({ enableMouseWheel: true , enableKeyboard: true });
	
});