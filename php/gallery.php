<?php
function makeGallery($path, $directory, $seo){

	$dir = $path . "/" . $directory;

	$filearray = array(); 
	if ($fil = opendir($dir)) {
		while (($file = readdir($fil)) !== false) {
			if ($file != "." && $file != ".." && $file != "thumbs" && $file != ".DS_Store") { 
				$filearray[] = $file;
				$page = empty($_GET['page']) ? 1 : $_GET['page'];
				$num_per_page = 25;
				$total_pages = ceil(count($filearray)/$num_per_page);
			}
		}

	array_multisort($filearray, SORT_ASC);

	print '<div class="container-fluid">
		<div class="row">';
	print "<ul id='photoswipe'  class='thumbnails'>";

	for($i = ($page - 1) * $num_per_page; $i < $page * $num_per_page; $i++){
				$value = basename($filearray[$i]);
				$parts = Explode('.', $value);
    		$title = $parts[count($parts) - 2];
    		$parts = Explode('-', $title);
    		$title = $parts[1];
    		if ($title == "") $title = $value;
    		if($value != "")
					print "<li class='box' itemscope itemtype='http://schema.org/Photograph'><a title='$title' rel='group' class='thumbnails' href='$dir/$value'>
				<meta itemprop='name' content='$title'>
				<meta itemprop='creator' content='Guido Fu&agrave;'>
				<meta itemprop='URL' content='$dir/$value'>
				<div itemprop='aggregateRating' itemscope itemtype='http://schema.org/AggregateRating'>
					<meta itemprop='ratingValue' content='5' /> 
    			<meta itemprop='ratingCount' content='196' />
    		</div>
    		<img itemprop='image' width='$width' height='inherrit' src='$dir/thumbs/$seo-$value' /></a></li>";
	}
	closedir($fil);
	}

	print "</ul>";

	$ref = $_SERVER['PHP_SELF'];

	if($num_pages == '0'){
		print " ";
		print " ";
	}elseif(($page == '0')||($page == '')){
		$next = $page + 1;
		print " ";
		print "<a id='next' href='$ref?page=$next'> </a>";
	}elseif($page == $num_pages){
		$prev = $page - 1;
		print "<a id='prev' href='$ref?page=$prev'> </a>";
		print " ";
	}else{
		$next = $page + 1;
		$prev = $page - 1;
		print "<a id='prev' href='$ref?page=$prev'> </a>";
		print "<a id='next' href='$ref?page=$next'> </a>";
	}

	echo "<nav id='page-nav'>
	<a href='$ref?page=$next'></a>
	</nav></div></div>";
}
?>
