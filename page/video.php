<?php include("header.php"); ?>

<style type="text/css">
.video-container {
  position: relative;
  padding-bottom: 56.25%;
  padding-top: 30px;
  height: 0;
  overflow: hidden;
}

.video-container iframe,  
.video-container object,  
.video-container embed {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>


<section>
	<div class="container inner-page">
		<div class="page-header">
    	<h1>Video</h1>
    </div>
    <!--div style="text-align:center;margin-top: -100px;"><img src="<?php echo $basedir;?>img/comingsoon.png" /></div-->
      <div class="video-container">
        <iframe src="http://player.vimeo.com/video/50775240" width="400" height="500" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
      </div>
      <br>
      <div class="video-container">
        <iframe src="http://player.vimeo.com/video/25507778" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
      </div>
      <br>
      <div class="video-container">
        <iframe src="http://player.vimeo.com/video/25506856" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>      
      </div>
      <br>
      <div class="video-container">
        <iframe src="http://player.vimeo.com/video/25505016" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>      
      </div>
  </div>
</div>

<?php include("footer.php"); ?>
<script type="text/javascript">
$(function(){

	$.getJSON('../php/image_preloading.php', function(data) {
    Core.preloader.queue(data).preload();
  });

  $('#header-container').removeClass('container-fluid').addClass('container');
  $('#footer-container').removeClass('container-fluid').addClass('container');
  $('.navbar-inner .brand').addClass('brand-fix');
});
</script>
