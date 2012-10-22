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

function obclose(){
    $('li').click(function(){
      $(document).orangeBox('destroy');
    });
  }

$(function(){

  $('.home [title]').removeAttr('title');
  $('.navbar [title]').removeAttr('title');

  $.support.transition = undefined;

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
    columnWidth: 1,
    isAnimated: false
  });
  $('#photoswipe').css('visibility', 'visible');
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
	//var myPhotoSwipe = $("#photoswipe a").photoSwipe({ enableMouseWheel: true , enableKeyboard: true });

  $('#photoswipe a').fancybox({
        padding : 0,
        beforeShow: function () {
            $('.fancybox-wrap').hide();
            if (this.title) {
                // New line
                this.title += '<br /><br />';

                // Add FaceBook like button
                this.title += '<a href="http://www.facebook.com/sharer.php?u=http://eikonabox.com/page/' + this.href + '" class="social-icon"><i style="font-size: 22px;" class="icon-facebook-sign icon-large"></i></a>&nbsp;&nbsp;&nbsp;';
                
                this.title += '<a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Feikonabox.com&media=http%3A%2F%2Feikonabox.com%2Fpage%2F' + this.href + '" class="social-icon"><i style="font-size: 22px;" class="icon-pinterest icon-large"></i></a>&nbsp;&nbsp;&nbsp;';

                this.title += '<a href="https://plusone.google.com/_/+1/confirm?hl=en&url=http://eikonabox.com/" class="social-icon"><i style="font-size: 22px;" class="icon-google-plus-sign icon-large"></i></a>&nbsp;&nbsp;&nbsp;';
                // Add tweet button
                this.title += '<a href="https://twitter.com/share" class="social-icon twitter-share-button" data-related="guidofua" data-hashtags="photography"><i style="font-size: 25px;" class="icon-twitter icon-large"></i></a>';
            }
            
        },
        afterShow: function() {
            $('.fancybox-wrap').hide();
            $.fancybox.update();
            $('.fancybox-opened .fancybox-title').css('margin-top', '-65px');
            $('.fancybox-wrap').show();
        },
        helpers : {
            title : {
                type: 'inside'
            }
        }  
    });

});