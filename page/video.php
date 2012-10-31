<?php include("header.php"); ?>


<section>
	<div class="container inner-page">
		<div class="page-header">
    	<h1>Video</h1>
    </div>
    <div style="text-align:center;margin-top: -100px;"><img src="<?php echo $basedir;?>img/comingsoon.png" /></div>
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
