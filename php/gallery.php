<?php
function makeGallery($path, $directory){
	$dir = $path . "/" . $directory;
	$handle = opendir($dir);
	while ($file = readdir($handle)){
		if($file == '.' OR $file == '..' or $file == 'thumbs')
			continue;
		else
			$result_array[]=$file;
	}

	$filecount = count(glob("" . $dir . "*.jpg"));

	closedir($handle);
	array_multisort($result_array, SORT_DESC);
	$rows = 3;
	$cols = 3;

	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = 0;
	}

	$num_pics = count($result_array);
	$cells = $rows * $cols;
	$pages = ceil($num_pics / $cells);
	$num_pages = $pages - 1;
	$output = array();
	$slices = array();
	$push = 0;
	$showpage = $page + 1;

	for($k=0;$k<$pages;$k++){
		array_push($slices, $push);
		$push = $push + $cells;
	}

	for($k=0;$k<$pages;$k++){
		if($page == key($slices)){
			$output = array_slice($result_array, current($slices), $cells);
		}
		next($slices);
	}

	reset($output);

	print "<ul id='photoswipe'  class='thumbnails'>";

	for($i=0;$i<$rows;$i++){
		for($j=0;$j<$cols;$j++){
			if(current($output) != false){
				$value = current($output);
				print "<li class='span3 box'><a class='thumbnail' href='$dir/$value'><img width='$width' height='inherrit' src='$dir/thumbs/$value' /></a></li>";
				next($output);
			}else{
				print "</ul>";
			}
		}
	}


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
	</nav>";
}
?>
