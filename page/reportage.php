<?php include("header.php"); ?>
<?php include("../php/innerSection.php"); ?>

<section>
	<div class="container inner-page">
		<div class="page-header">
    	<h1>Reportage</h1>
    </div>


    <?php innerSection("$basedir/page/mozambico.php",
    									 "background:url($basedir/img/reportage/mozambico.jpg) no-repeat 0px 38%;background-size:100%;",
    									 "mozambico",
    									 "sub",
    									 "", 
    									 "reportage");?>

		<br>

    <?php innerSection("$basedir/page/boogienights.php",
    									 "background:url($basedir/img/reportage/boogienights.jpg) no-repeat 0px 28%;background-size:100%;",
    									 "boogie nights",
    									 "sub",
    									 "", 
    									 "reportage");?>

    <br>

    <?php innerSection("$basedir/page/immigrati.php",
    									 "background:url($basedir/img/reportage/immigrati.jpg) no-repeat 0px 45%;background-size:100%;",
    									 "multiethinc italy",
    									 "sub",
    									 "", 
    									 "reportage");?>

    <br>

    <?php innerSection("$basedir/page/giappone.php",
    									 "background:url($basedir/img/reportage/giappone.jpg) no-repeat 0px 53%;background-size:100%;",
    									 "japan",
    									 "sub",
    									 "", 
    									 "reportage");?>

    <br>

    <?php innerSection("$basedir/page/diamanti.php",
    								   "background:url($basedir/img/reportage/diamanti.jpg) no-repeat 0px 28%;background-size:100%;",
    								   "diamonds",
    								   "The diamonds trail",
    								   "", 
    								   "reportage");?>

    <br>

    <?php innerSection("$basedir/page/newyork.php",
    								   "background:url($basedir/img/reportage/newyork.jpg) no-repeat 0px 24%;background-size:100%;",
    								   "new york",
    								   "sub",
    								   "", 
    								   "reportage");?>

    <br>

    <?php innerSection("$basedir/page/cuba.php",
    									 "background:url($basedir/img/reportage/cuba.jpg) no-repeat 0px 12%;background-size:100%;",
    									 "cuba",
    									 "sub",
    									 "", 
    									 "reportage");?>

    <br>

    <?php innerSection("$basedir/page/panama.php",
    									 "background:url($basedir/img/reportage/panama.jpg) no-repeat 0px 16%;background-size:100%;",
    									 "panama",
    									 "sub",
    									 "", 
    									 "reportage");?>

    <br>

  </div>
</section>

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