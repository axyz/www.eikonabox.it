<?php include("header.php"); ?>

<?php

// $imgid = 6271487;

// $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));

// echo $hash[0]['thumbnail_medium'];

function vimeo_thumbs($id, $dim) {
	$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/" . $id . ".php"));
	echo $hash[0]['thumbnail_' . $dim];
}

?>

<div class="container">
	<div class="row-fluid">
		<div class="span12">
			<ul id="videogallery" class="thumbnails">
				<li class="span4">
				<a class="thumbnail" href="http://vimeo.com/24524624">
					<img id="vimeo-24524624" src="<?php vimeo_thumbs('24524624', 'large');?>" alt="" />
					<span id="title-25243135" style="position: relative; display: block; background-color: rgba(200, 200, 200, 0.7);"><h2>Guido Fuà Backstage Studio</h2></span>
				</a>
				</li>
				<li class="span4">		
				<a class="thumbnail" href="http://vimeo.com/25243135">
					<img id="vimeo-25243135" src="<?php vimeo_thumbs('25243135', 'large');?>" alt="" />
				</a>
				</li>
				<li class="span4">
				<a class="thumbnail" href="http://vimeo.com/24425133">
					<img id="vimeo-24425133" src="<?php vimeo_thumbs('24425133', 'large');?>" alt="" />
				</a>
				</li>
				<li class="span4">	
				<a class="thumbnail" href="http://vimeo.com/25396681">
					<img id="vimeo-25396681" src="<?php vimeo_thumbs('25396681', 'large');?>" alt="" />
				</a>
				</li>
				<li class="span4">	
				<a class="thumbnail" href="http://vimeo.com/25503542">
					<img id="vimeo-25503542" src="<?php vimeo_thumbs('25503542', 'large');?>" alt="" />
				</a>
				</li>
				<li class="span4">	
				<a class="thumbnail" href="http://vimeo.com/25507778">
					<img id="vimeo-25507778" src="<?php vimeo_thumbs('25507778', 'large');?>" alt="" />
				</a>
				</li>
				<li class="span4">	
				<a class="thumbnail" href="http://vimeo.com/25505016">
					<img id="vimeo-25505016" src="<?php vimeo_thumbs('25505016', 'large');?>" alt="" />
				</a>
				</li>
				<li class="span4">	
				<a class="thumbnail" href="http://vimeo.com/25506856">
					<img id="vimeo-25506856" src="<?php vimeo_thumbs('25506856', 'large');?>" alt="" />
				</a>
				</li>
				<li class="span4">	
				<a class="thumbnail" href="http://vimeo.com/25506054">
					<img id="vimeo-25506054" src="<?php vimeo_thumbs('25506054', 'large');?>" alt="" />
				</a>
				</li>

			</ul>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>
