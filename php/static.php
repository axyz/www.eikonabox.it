<?php 

$value = basename($_GET["img"]);
$parts = Explode('.', $value);
$title = $parts[count($parts) - 2];
$parts = Explode('-', $title);
$title = $parts[1];

echo "

<html itemscope itemtype='http://schema.org/Photograph'>
<head>
<meta itemprop='name' content='" . $title . "'>
<meta itemprop='author' content='Guido Fu&agrave;'>
<title> " . $title . " - by Guido Fu&agrave; - Eikona photography and digital imaging.</title>
<meta itemprop='description' content='photo by Guido Fu&agrave; - Eikona photography and digital imaging.'>
<link rel='image_src' href='" . urldecode($_GET["img"]) . "' />
<meta property='og:image' content='" . urldecode($_GET["img"]) . "'/>
<meta property='og:title' content='" . $title . "'/>
<meta property='og:site_name' content='eikona.eu'/>
<meta property='og:description' content='photo by Guido Fu&agrave; - Eikona photography and digital imaging.'/>
</head>

<body>

	<div style='text-align:center;'>
		<a href='http://www.eikona.eu'><img src='http://www.eikona.eu/img/eikona_guido.png' /></a>
		<div style='text-align:center;margin-top:10px;'>
			<img itemprop='image' style='height:100%;' src='" . urldecode($_GET["img"]) . "' />
			<div itemprop='aggregateRating' itemscope itemtype='http://schema.org/AggregateRating'>
					<meta itemprop='ratingValue' content='5' /> 
    			<meta itemprop='ratingCount' content='196' />
    	</div>
		</div>
	</div>

</body>
</html>

 ";
?>