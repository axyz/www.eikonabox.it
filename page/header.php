<!DOCTYPE html>
<?php include(dirname(__FILE__) . "/basedir.php"); ?> 

<html lang="en" itemscope itemtype="http://schema.org/LocalBusiness">
  <head>
    <meta charset="utf-8">
    <meta itemprop="name" content="
    <?php 
        $file = basename($_SERVER['PHP_SELF']);
        switch ($file) {
          case "portrait.php":
            echo "Italian Portrait Photographer";
            break;
          case "reportage.php":
            echo "Italian Reportage Photographer";
            break;
          case "corporate.php":
            echo "Italian Advertising Photographer";
            break;
          case "food.php":
            echo "Italian Food Photographer - Food Stylist";
            break;
          case "publication.php":
            echo "Italian Editorial Photographer";
            break;
          case "projects.php":
            echo "Guido Fu&agrave - Photography Projects";
            break;
          case "video.php":
            echo "Italian Video Production";
            break;
          case "about.php":
            echo "Guido Fu&agrave; Italian Photographer - Fotografo Roma";
            break;
          case "contact.php":
            echo "Eikona - Studio Fotografico Roma";
            break;
          case "mozambico.php":
            echo "Mozambico Photography Reportage by Guido Fu&agrave;";
            break;
          case "booghienights.php":
            echo "Nightlife Photography Reportage by Guido Fu&agrave;";
            break;
          case "immigrati.php":
            echo "Immigration in Italy Photography Reportage by Guido Fu&agrave;";
            break;
          case "giappone.php":
            echo "Japan Photography Reportage by Guido Fu&agrave;";
            break;
          case "diamanti.php":
            echo "Diamonds Trail Photography Reportage by Guido Fu&agrave;";
            break;
          case "newyork.php":
            echo "New York Photography Reportage by Guido Fu&agrave;";
            break;
          case "cuba.php":
            echo "Cuba Photography Reportage by Guido Fu&agrave;";
            break;
          case "panama.php":
            echo "Panama Photography Reportage by Guido Fu&agrave;";
            break;
          default:
            echo "Eikona digital imaging - Italian Photography Studio - Italian Photographer - Digital Imaging - Multimedia Production - Web Engineering";
        }

      ?>

    ">
    <meta itemprop="description" content="

    <?php 
        $file = basename($_SERVER['PHP_SELF']);
        switch ($file) {
          case "portrait.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in portrait photography.";
            break;
          case "about.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in portrait, commercial and reportage photography. Web Design and Multimedia Production.";
            break;
          case "reportage.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in reportage photography.";
            break;
          case "corporate.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in advertising photography";
            break;
          case "food.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in food photography.";
            break;
          case "publication.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in editorial photography.";
            break;
          case "projects.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in portrait, commercial and reportage photography. Web Design and Multimedia Production.";
            break;
          case "video.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in Video and Multimedia Production.";
            break;
          case "contact.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, Studio fotografico a Roma, Noleggio sala Posa";
            break;
          case "mozambico.php":
            echo "Photography Reportage about Mozambico by the Italian Photographer Guido Fu&agrave;";
            break;
          case "booghienights.php":
            echo "Photography Reportage about the nightlife by the Italian Photographer Guido Fu&agrave;";
            break;
          case "immigrati.php":
            echo "Photography Reportage about Italian Immigrates conditions by the Italian Photographer Guido Fu&agrave;";
            break;
          case "giappone.php":
            echo "Photography Reportage about Japan by the Italian Photographer Guido Fu&agrave;";
            break;
          case "diamanti.php":
            echo "Photography Reportage about the diamonds industries in Africa by the Italian Photographer Guido Fu&agrave;";
            break;
          case "newyork.php":
            echo "Photography Reportage about New York by the Italian Photographer Guido Fu&agrave;";
            break;
          case "cuba.php":
            echo "Photography Reportage about Cuba by the Italian Photographer Guido Fu&agrave;";
            break;
          case "panama.php":
            echo "Photography Reportage about Panama by the Italian Photographer Guido Fu&agrave;";
            break;
          default:
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in portrait, commercial and reportage photography. Web Design and Multimedia Production.";
        }

      ?>

    ">
    <meta itemprop="URL" content="http://www.eikona.eu">
    <div itemprop='aggregateRating' itemscope itemtype='http://schema.org/AggregateRating'>
          <meta itemprop='ratingValue' content='5' /> 
          <meta itemprop='ratingCount' content='1235' />
    </div>
    <title>

      <?php 
        $file = basename($_SERVER['PHP_SELF']);
        switch ($file) {
          case "portrait.php":
            echo "Italian Portrait Photographer";
            break;
          case "reportage.php":
            echo "Italian Reportage Photographer";
            break;
          case "corporate.php":
            echo "Italian Advertising Photographer";
            break;
          case "food.php":
            echo "Italian Food Photographer - Food Stylist";
            break;
          case "publication.php":
            echo "Italian Editorial Photographer";
            break;
          case "projects.php":
            echo "Guido Fu&agrave - Photography Projects";
            break;
          case "video.php":
            echo "Italian Video Production";
            break;
          case "about.php":
            echo "Guido Fu&agrave; Italian Photographer - Fotografo Roma";
            break;
          case "contact.php":
            echo "Eikona - Studio Fotografico Roma";
            break;
          case "mozambico.php":
            echo "Mozambico Photography Reportage by Guido Fu&agrave;";
            break;
          case "booghienights.php":
            echo "Nightlife Photography Reportage by Guido Fu&agrave;";
            break;
          case "immigrati.php":
            echo "Immigration in Italy Photography Reportage by Guido Fu&agrave;";
            break;
          case "giappone.php":
            echo "Japan Photography Reportage by Guido Fu&agrave;";
            break;
          case "diamanti.php":
            echo "Diamonds Trail Photography Reportage by Guido Fu&agrave;";
            break;
          case "newyork.php":
            echo "New York Photography Reportage by Guido Fu&agrave;";
            break;
          case "cuba.php":
            echo "Cuba Photography Reportage by Guido Fu&agrave;";
            break;
          case "panama.php":
            echo "Panama Photography Reportage by Guido Fu&agrave;";
            break;
          default:
            echo "Eikona digital imaging - Italian Photography Studio - Italian Photographer - Digital Imaging - Multimedia Production - Web Engineering";
        }

      ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="

    <?php 
        $file = basename($_SERVER['PHP_SELF']);
        switch ($file) {
          case "portrait.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in portrait photography.";
            break;
          case "about.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in portrait, commercial and reportage photography. Web Design and Multimedia Production.";
            break;
          case "reportage.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in reportage photography.";
            break;
          case "corporate.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in advertising photography";
            break;
          case "food.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in food photography.";
            break;
          case "publication.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in editorial photography.";
            break;
          case "projects.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in portrait, commercial and reportage photography. Web Design and Multimedia Production.";
            break;
          case "video.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in Video and Multimedia Production.";
            break;
          case "contact.php":
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, Studio fotografico a Roma, Noleggio sala Posa";
            break;
          case "mozambico.php":
            echo "Photography Reportage about Mozambico by the Italian Photographer Guido Fu&agrave;";
            break;
          case "booghienights.php":
            echo "Photography Reportage about the nightlife by the Italian Photographer Guido Fu&agrave;";
            break;
          case "immigrati.php":
            echo "Photography Reportage about Italian Immigrates conditions by the Italian Photographer Guido Fu&agrave;";
            break;
          case "giappone.php":
            echo "Photography Reportage about Japan by the Italian Photographer Guido Fu&agrave;";
            break;
          case "diamanti.php":
            echo "Photography Reportage about the diamonds industries in Africa by the Italian Photographer Guido Fu&agrave;";
            break;
          case "newyork.php":
            echo "Photography Reportage about New York by the Italian Photographer Guido Fu&agrave;";
            break;
          case "cuba.php":
            echo "Photography Reportage about Cuba by the Italian Photographer Guido Fu&agrave;";
            break;
          case "panama.php":
            echo "Photography Reportage about Panama by the Italian Photographer Guido Fu&agrave;";
            break;
          default:
            echo "Eikona Photography and Digital Imaging, Professional Studio based in Italy, specialized in portrait, commercial and reportage photography. Web Design and Multimedia Production.";
        }

      ?>

    ">
    <meta name="author" content="axyzxp@gmail.com" >
    <meta name="keywords" content="

    <?php 
        $file = basename($_SERVER['PHP_SELF']);
        switch ($file) {
          case "portrait.php":
            echo "Italian, Portrait, Photographer, fotografo, ritratti, roma";
            break;
          case "reportage.php":
            echo "Italian, Reportage, Photographer, fotografo, reportage, roma";
            break;
          case "corporate.php":
            echo "Italian, Advertising, Photographer, corporate, industrial, photography, fotografo, industriale, pubblicità, roma, italia";
            break;
          case "food.php":
            echo "Italian, Food, Photographer, Food Stylist, fotografo, cibo, gastronomico, roma, chef";
            break;
          case "publication.php":
            echo "Italian, Editorial, Photographer, fotografo, editoriale, roma, national, geographic, venerdì, xl, repubblica, espresso";
            break;
          case "projects.php":
            echo "Guido, Fu&agrave, Photography, Projects, fotografo, roma, creativo, fine-art";
            break;
          case "video.php":
            echo "Italian, Video, Production, montaggio, video, realizzazione, ripresa, motion design, effetti speciali, 3d artist";
            break;
          case "about.php":
            echo "Guido Fu&agrave;, Italian, Photographer, Fotografo, Roma, italiano, insegnate, fotografia";
            break;
          case "contact.php":
            echo "Eikona, Studio Fotografico, Roma, noleggio sala posa, affitto, set, attrezzatura";
            break;
          case "mozambico.php":
            echo "Mozambico, Photography, Reportage, photo, africa, children, foto";
            break;
          case "booghienights.php":
            echo "Nightlife, boogie, nights, Reportage, photo, foto, sex, transexual, provocatory";
            break;
          case "immigrati.php":
            echo "Immigration, Italy, Photography, Reportage, immigrates, condizioni, immigrati, italia, roma, foto";
            break;
          case "giappone.php":
            echo "Japan, Photography, Reportage, tokio, geisha";
            break;
          case "diamanti.php":
            echo "Diamonds, Trail, traffic, Photography, Reportage, botswana, traffico, diamanti, operai, miniera";
            break;
          case "newyork.php":
            echo "New York, Photography, Reportage, big apple, foto, usa, america";
            break;
          case "cuba.php":
            echo "Cuba, Photography, Reportage, foto";
            break;
          case "panama.php":
            echo "Panama, Photography, Reportage, foto";
            break;
          default:
            echo "Photographer, Italian Photography, Fotografo, Commercial, Editorial, Portrait, Advertising, Rome, Roma, Italy, Fashion, Pubblicità, Web Design, Multimedia Production, Italia";
        }

      ?>

    " />

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
    <link href="<?php echo $basedir;?>css/jquery.fancybox.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href="<?php echo $basedir;?>css/styles.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
<header>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div id="header-container" class="container-fluid">
          <a style="margin-top:18px;" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo $basedir;?>"><h1 style="font-size:30px;line-height:30px;"><img itemprop="image" src="<?php echo $basedir;?>img/eikona_guido.png" alt="Italian Photographer" ></h1></a>
          <div class="nav-collapse">
            <ul class="nav" style="margin-top:31px;">
              <li id="about"><a href="<?php echo $basedir;?>page/portrait.php" title="italian portrait photographer">&nbsp;portrait&nbsp;</a></li>
              <li id="about"><span class="hidden-tablet hidden-phone">/&nbsp;</span><a href="<?php echo $basedir;?>page/reportage.php" title="italian reportage photographer">&nbsp;reportage&nbsp;</a></li>
              <li id="about"><span class="hidden-tablet hidden-phone">/&nbsp;</span><a href="<?php echo $basedir;?>page/corporate.php" title="italian corporate photographer">&nbsp;advertising&nbsp;</a></li>
              <li id="about"><span class="hidden-tablet hidden-phone">/&nbsp;</span><a href="<?php echo $basedir;?>page/food.php" title="italian food photographer">&nbsp;food&nbsp;</a></li>
              <li id="about"><span class="hidden-tablet hidden-phone">/&nbsp;</span><a href="<?php echo $basedir;?>page/publication.php" title="italian publication photographer">&nbsp;publication&nbsp;</a></li>
              <li id="about"><span class="hidden-tablet hidden-phone">/&nbsp;</span><a href="<?php echo $basedir;?>page/projects.php" title="italian photographer">&nbsp;projects&nbsp;</a></li>
              <li id="about"><span class="hidden-tablet hidden-phone">/&nbsp;</span><a href="<?php echo $basedir;?>page/video.php" title="italian video production">&nbsp;video&nbsp;</a></li>
        
              <li id="about"><span class="hidden-tablet hidden-phone">/&nbsp;</span><a style="color:#d60;" href="<?php echo $basedir;?>page/about.php" title="about us" alt="about us">&nbsp;about&nbsp;</a></li>
              <li id="contact"><span class="hidden-tablet hidden-phone">/&nbsp;</span><a style="color:#d60;" href="<?php echo $basedir;?>page/contact.php" title="contact us" alt="contact us">&nbsp;contact&nbsp;</a></li>
              <li id="contact"><span class="hidden-tablet hidden-phone">/&nbsp;</span><a style="color:#d60;" href="http://guidofua.com/blog" title="Guido FU&agrave; Photography blog" alt="Guido FU&agrave; Photography blog">&nbsp;blog&nbsp;</a></li>
              <li><span class="hidden-tablet hidden-phone">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <a class="social" href="https://www.facebook.com/guido.fua" target="_blank"><i class="icon-facebook-sign"></i></a>
                <a class="social" href="https://twitter.com/guidofua" target="_blank"><i class="icon-twitter-sign"></i></a>
                <a class="social" href="http://pinterest.com/guidofua/" target="_blank"><i class="icon-pinterest-sign"></i></a>
                <a class="social" href="http://www.linkedin.com/in/eikona" target="_blank"><i class="icon-linkedin-sign"></i></a>
                <a class="social" href="https://plus.google.com/u/0/110372748342070641271" target="_blank"><i class="icon-google-plus-sign"></i></a>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
</header>

<body>

	
