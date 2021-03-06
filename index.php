<?php include("page/header.php"); ?>
<style>
 body{visibility:hidden;}
 .home .span4,
 .home .span6,
 .home .span12 {
   margin-bottom:20px;
 }
 .home-section {
   height:200px;
 }

 .home-section.large {
   height: 300px;
 }

 .span4:hover,.span12:hover {
   -webkit-box-shadow: 8px 8px 25px rgba(34, 25, 25, 0.7);
   -moz-box-shadow: 8px 8px 25px rgba(34, 25, 25, 0.7);
   -ms-box-shadow: 8px 8px 25px rgba(34, 25, 25, 0.7);
   -o-box-shadow: 8px 8px 25px rgba(34, 25, 25, 0.7);
   box-shadow: 8px 8px 25px rgba(34, 25, 25, 0.7);
 }
 .home-section-title {
   position: relative;
   background-color: rgba(245,245,245,0.6);
   bottom:-79%;
   font-family: 'Carrois Gothic SC', sans-serif;
   font-size: 28px;
   text-align: center;
   height:16%;
   padding-top: 2%;
 }

 .home-section:hover .home-section-title{
   color: #fff;
   background-color: rgba(1,1,1,.7);
 }
 .home a{
   text-decoration: none;
   color: #111;
 }

 @media handheld, only screen and (max-width: 767px) {
   .home-section.large {
     height: 200px;
   }
 }
</style>

<section><br>
  <div class="home container">

    <div class="row">
      <div class="span12 shadow">
        <a href="<?= $basedir ?>page/portrait.php" title="italian portrait photographer">
          <div class="home-section large" style="background:url(img/home/fotografo-ritratti-roma.jpg) no-repeat 0px 75%;background-size:100%;" >
            <div class="home-section-title">portrait</div>
          </div>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="span4 shadow">
        <a href="<?= $basedir ?>page/reportage.php" title="italian reportage photographer">
          <div class="home-section" style="background:url(img/home/fotografo-reportage-roma.jpg) no-repeat 0px 50%;background-size:100%;" >
            <div class="home-section-title">reportage</div>
          </div>
        </a>
      </div>
      <div class="span4 shadow">
        <a href="<?= $basedir ?>page/corporate.php" title="italian corporate photographer">
          <div class="home-section" style="background:url(img/home/fotografo-corporate-roma.jpg) no-repeat 0px 70%;background-size:100%;" >
            <div class="home-section-title">corporate</div>
          </div>
        </a>
      </div>
      <div class="span4 shadow">
        <a href="<?= $basedir ?>page/fashion.php" title="italian fashion photographer">
          <div class="home-section" style="background:url(img/home/fotografo-fashion-roma.jpg) no-repeat 0px 20%;background-size:100%;" >
            <div class="home-section-title">fashion</div>
          </div>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="span6 shadow">
        <a href="<?= $basedir ?>page/interiors.php" title="italian interiors photographer">
          <div class="home-section large" style="background:url(img/home/fotografo-roma.jpg) no-repeat 0px 78%;background-size:100%;" >
            <div class="home-section-title">interiors</div>
          </div>
        </a>
      </div>

      <div class="span6 shadow">
        <a href="<?= $basedir ?>page/still.php" title="italian still-life photographer">
          <div class="home-section large" style="background:url(img/home/fotografo-roma.jpg) no-repeat 0px 78%;background-size:100%;" >
            <div class="home-section-title">still</div>
          </div>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="span4 shadow">
        <a href="<?= $basedir ?>page/publication.php" title="italian editorial photographer">
          <div class="home-section" style="background:url(img/home/fotografo-editoriale-roma.jpg) no-repeat 0px 18%;background-size:100%;" >
            <div class="home-section-title">publications</div>
          </div>
        </a>
      </div>
      <div class="span4 shadow">
        <a href="<?= $basedir ?>page/projects.php" title="italian advertising photographer">
          <div class="home-section" style="background:url(img/home/videomaker-produzioni-video-roma.jpg) no-repeat 0px 40%;background-size:100%;" >
            <div class="home-section-title">advertising</div>
          </div>
        </a>
      </div>
      <div class="span4 shadow">
        <a href="<?= $basedir ?>page/video.php" title="italian video production">
          <div class="home-section" style="background:url(img/home/video-production-roma.jpg) no-repeat 0px 38%;background-size:100%;" >
            <div class="home-section-title">video</div>
          </div>
        </a>
      </div>
    </div>

  </div>
</section>

<?php include("page/footer.php"); ?>
<script type="text/javascript">
 $(function(){

   $.getJSON('php/image_preloading.php', function(data) {
     Core.preloader.queue(data).preload();
   });

   $('#header-container').removeClass('container-fluid').addClass('container');
   $('#footer-container').removeClass('container-fluid').addClass('container');
   $('.navbar-inner .brand').addClass('brand-fix');
 });
</script>
