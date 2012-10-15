<?php include("page/header.php"); ?> 
<style>
.home .span4, .home .span12 {
	margin-bottom:20px;
}
.home-section {
	height:200px;
  
}

.span4,.span12{
	-webkit-transition: all 0.3s ease-out;  /* Safari 3.2+, Chrome */
     -moz-transition: all 0.3s ease-out;  /* Firefox 4-15 */
       -o-transition: all 0.3s ease-out;  /* Opera 10.5–12.00 */
          transition: all 0.3s ease-out;  /* Firefox 16+, Opera 12.50+ */
}

.span4:hover,.span12:hover {
	-webkit-transform:scale(1.1);
	-moz-transform:scale(1.1);
	-ms-transform:scale(1.1);
	-o-transform:scale(1.1);
	transform:scale(1.1);
}
.home-section-title {
	position: relative;
	background-color: rgba(245,245,245,0.7);
	bottom:-80%;
	font-family: 'Carrois Gothic SC', sans-serif;
  font-size: 42px;
  text-align: center;
  height:20%;
  padding-top: 10px;
}
.home a{
	text-decoration: none;
	color: #111;
}
</style>

<section><br>
	<div class="home container">

	<div class="row">
		<div class="span12 shadow">
			<a href="<?php echo $basedir;?>page/portrait.php">
				<div class="home-section" style="background:url(photo/portrait/040.jpg) no-repeat 0px 12%;background-size:100%;" >
					<div class="home-section-title">portrait</div>
				</div>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="span4 shadow">
			<a href="#">
				<div class="home-section" style="background:url(photo/portrait/024.jpg) no-repeat 0px 35%;background-size:100%;" >
					<div class="home-section-title">reportage</div>
				</div>
			</a>
		</div>
		<div class="span4 shadow">
			<a href="#">
				<div class="home-section" style="background:url(photo/portrait/025.jpg) no-repeat 0px 60%;background-size:100%;" >
					<div class="home-section-title">projects</div>
				</div>
			</a>
		</div>
		<div class="span4 shadow">
			<a href="#">
				<div class="home-section" style="background:url(photo/portrait/026.jpg) no-repeat 0px 9%;background-size:100%;" >
					<div class="home-section-title">publication</div>
				</div>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="span4 shadow">
			<a href="#">
				<div class="home-section" style="background:url(photo/portrait/032.jpg) no-repeat 0px 9%;background-size:100%;" >
					<div class="home-section-title">corporate</div>
				</div>
			</a>
		</div>
		<div class="span4 shadow">
			<a href="#">
				<div class="home-section" style="background:url(photo/portrait/033.jpg) no-repeat 0px 32%;background-size:100%;" >
					<div class="home-section-title">video</div>
				</div>
			</a>
		</div>
		<div class="span4 shadow">
			<a href="#">
				<div class="home-section" style="background:url(photo/portrait/034.jpg) no-repeat 0px 7%;background-size:100%;" >
					<div class="home-section-title">food</div>
				</div>
			</a>
		</div>
	</div>

</div>
</section>

<?php include("page/footer.php"); ?> 
