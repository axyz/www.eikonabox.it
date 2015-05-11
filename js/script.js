    this.href : 'http%3A%2F%2Feikona.eu%2Fpage%2F' + this.href;
        var img = this.href.indexOf('http') === 0 ?
              this.href : 'http://eikona.eu/page/' + escape(this.href);

        // Add FaceBook like button
        this.title += '<a href="http://www.facebook.com/sharer.php?u=http://eikona.eu/php/static.php?img=' +
          img +
          '" class="social-icon"><i style="font-size: 22px;" class="icon-facebook-sign icon-large"></i></a>&nbsp;&nbsp;&nbsp;';

        this.title += '<a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Feikona.eu&media=' +
          media +
          '" class="social-icon"><i style="font-size: 22px;" class="icon-pinterest icon-large"></i></a>&nbsp;&nbsp;&nbsp;';

        this.title += '<a href="https://plus.google.com/share?url=http://eikona.eu/php/static.php?img=' +
          encodeURI(img) +
          '" class="social-icon"><i style="font-size: 22px;" class="icon-google-plus-sign icon-large"></i></a>&nbsp;&nbsp;&nbsp;';
        // Add tweet button
        this.title += '<a href="https://twitter.com/share" class="social-icon twitter-share-button" data-related="guidofua" data-hashtags="photography"><i style="font-size: 25px;" class="icon-twitter icon-large"></i></a>';

      }

    },
    afterShow: function () {
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

  $("body").css({"visibility" : "visible"});

});
