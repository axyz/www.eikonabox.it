<!DOCTYPE html>
<?php include(dirname(__FILE__) . "/basedir.php"); ?> 

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Eikona digital imaging</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Unknown" >

    <!-- Le styles -->
    <link href="<?php echo $basedir;?>css/bootstrap.css" rel="stylesheet">
    <!--<link href="/eikonanew/css/bootstrap.less" rel="stylesheet/less">-->
    <!--<link href="/eikonanew/css/styles.less" rel="stylesheet/less">-->
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="<?php echo $basedir;?>css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo $basedir;?>css/photoswipe.css" rel="stylesheet">
    <link href="<?php echo $basedir;?>css/styles.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
<header>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a style="margin-top:10px;" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo $basedir;?>"><img src="<?php echo $basedir;?>img/eikona_guido.png" alt="" ></a>
          <div class="nav-collapse">
            <ul class="nav" style="margin-top:13px;">
              <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-camera"></i>&nbsp;Portfolio
							<i class="icon-caret-down"></i>
						</a>
					<ul class="dropdown-menu">
						<li id="collateral"><a href="<?php echo $basedir;?>page/collateral.php"><i class="icon-caret-right"></i>Collateral</a></li>
						<li id="cover"><a href="<?php echo $basedir;?>page/cover.php"><i class="icon-caret-right"></i>Cover</a></li>
						<li id="figure"><a href="<?php echo $basedir;?>page/pages.php"><i class="icon-caret-right"></i>Publications</a></li>
						<li id="industrial"><a href="<?php echo $basedir;?>page/industrial.php"><i class="icon-caret-right"></i>Industrial</a></li>
						<li id="interiors"><a href="<?php echo $basedir;?>page/interiors.php"><i class="icon-caret-right"></i>Interiors</a></li>
						<li id="portrait"><a href="<?php echo $basedir;?>page/portrait.php"><i class="icon-caret-right"></i>Portrait</a></li>
						<li id="still"><a href="<?php echo $basedir;?>page/still.php"><i class="icon-caret-right"></i>Still</a></li>
          </ul>
				  </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="icon-globe"></i>&nbsp;Reportage
              <i class="icon-caret-down"></i>
            </a>
          <ul class="dropdown-menu">
              <li id="boogie"><a href="<?php echo $basedir;?>page/boogie.php">&nbsp;&nbsp;<i class="icon-caret-right"></i>Boogie Nights</a></li>
              <li id="travel"><a href="<?php echo $basedir;?>page/travel.php">&nbsp;&nbsp;<i class="icon-caret-right"></i>Travel</a></li>
              <li id="multi"><a href="<?php echo $basedir;?>page/multi.php">&nbsp;&nbsp;<i class="icon-caret-right"></i>Multiethnic Italy</a></li>
          </ul>
          </li>
              <li id="about"><a href="<?php echo $basedir;?>page/about.php"><i class="icon-info-sign icon-white"></i>&nbsp;About</a></li>
              <li id="contact"><a href="<?php echo $basedir;?>page/contact.php"><i class="icon-envelope icon-white"></i>&nbsp;Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
</header>

<body>

	
