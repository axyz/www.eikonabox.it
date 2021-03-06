<?php include("header.php"); ?>
<?php include("../php/innerSection.php"); ?>
<style>body{visibility:hidden;}</style>
<section>
	<div class="container inner-page">
		<div class="page-header">
    	<h1>Reportage</h1>
    </div>



    <?php innerSection("$basedir/page/sierra-leone.php",
                                         "background:url($basedir/img/reportage/sierra-leone.jpg) no-repeat 0px 12%;background-size:100%;",
                                         "sierra leone",
                                         "© 2012 Guido Fuà for THE WORLD BANK - All rights reserved",
                                         "", 
                                         "reportage");?>

        <br>

    <?php innerSection("$basedir/page/mozambico.php",
    									 "background:url($basedir/img/reportage/mozambico.jpg) no-repeat 0px 38%;background-size:100%;",
    									 "mozambico",
    									 "Curandeiros - Makua people",
    									 "", 
    									 "reportage");?>

		<br>

    <?php innerSection("$basedir/page/boogienights.php",
    									 "background:url($basedir/img/reportage/boogienights.jpg) no-repeat 0px 28%;background-size:100%;",
    									 "boogie nights",
    									 "Nightlife trends and style",
    									 "", 
    									 "reportage");?>

    <br>

    <?php innerSection("$basedir/page/immigrati.php",
    									 "background:url($basedir/img/reportage/immigrati.jpg) no-repeat 0px 45%;background-size:100%;",
    									 "multiethnic italy",
    									 "",
    									 "", 
    									 "reportage");?>

    <br>

    <?php innerSection("$basedir/page/giappone.php",
    									 "background:url($basedir/img/reportage/giappone.jpg) no-repeat 0px 53%;background-size:100%;",
    									 "japan",
    									 "",
    									 "", 
    									 "reportage");?>

    <br>

    <?php innerSection("$basedir/page/diamanti.php",
    								   "background:url($basedir/img/reportage/diamanti.jpg) no-repeat 0px 28%;background-size:100%;",
    								   "africa",
    								   "The diamonds trail",
    								   "", 
    								   "reportage");?>

    <br>

    <?php innerSection("$basedir/page/us.php",
    								   "background:url($basedir/img/reportage/newyork.jpg) no-repeat 0px 24%;background-size:100%;",
    								   "United States",
    								   "",
    								   "", 
    								   "reportage");?>

    <br>

    <?php innerSection("$basedir/page/cuba.php",
    									 "background:url($basedir/img/reportage/cuba.jpg) no-repeat 0px 12%;background-size:100%;",
    									 "cuba all stars",
    									 "",
    									 "", 
    									 "reportage");?>

    <br>

    <?php innerSection("$basedir/page/panama.php",
    									 "background:url($basedir/img/reportage/panama.jpg) no-repeat 0px 16%;background-size:100%;",
    									 "panama",
    									 "",
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