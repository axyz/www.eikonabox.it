<?php include("page/header.php"); ?> 
<style>
.home .span4, .home .span12 {
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
			<a href="<?php echo $basedir;?>page/projects.php">
				<div class="home-section large" style="background:url(photo/portrait/040.jpg) no-repeat 0px 12%;background-size:100%;" >
					<div class="home-section-title">projects</div>
				</div>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="span4 shadow">
			<a href="<?php echo $basedir;?>page/portrait.php">
				<div class="home-section" style="background:url(photo/portrait/024.jpg) no-repeat 0px 35%;background-size:100%;" >
					<div class="home-section-title">portrait</div>
				</div>
			</a>
		</div>
		<div class="span4 shadow">
			<a href="#">
				<div class="home-section" style="background:url(photo/portrait/025.jpg) no-repeat 0px 60%;background-size:100%;" >
					<div class="home-section-title">reportage</div>
				</div>
			</a>
		</div>
		<div class="span4 shadow">
			<a href="#">
				<div class="home-section" style="background:url(photo/portrait/026.jpg) no-repeat 0px 9%;background-size:100%;" >
					<div class="home-section-title">corporate</div>
				</div>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="span4 shadow">
			<a href="#">
				<div class="home-section" style="background:url(photo/portrait/032.jpg) no-repeat 0px 9%;background-size:100%;" >
					<div class="home-section-title">publication</div>
				</div>
			</a>
		</div>
		<div class="span4 shadow">
			<a href="#">
				<div class="home-section" style="background:url(photo/portrait/033.jpg) no-repeat 0px 32%;background-size:100%;" >
					<div class="home-section-title">food</div>
				</div>
			</a>
		</div>
		<div class="span4 shadow">
			<a href="#">
				<div class="home-section" style="background:url(photo/portrait/034.jpg) no-repeat 0px 7%;background-size:100%;" >
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
	$('#header-container').removeClass('container-fluid').addClass('container');
	$('#footer-container').removeClass('container-fluid').addClass('container');
	$('.navbar-inner .brand').addClass('brand-fix');
});
</script>
