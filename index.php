<?php include("page/header.php"); ?> 


<!-- <section>
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="flexslider">
				  <ul class="slides">
				    <li>
				      <img src="photo/collateral/01.jpg" />
				    </li>
				    <li>
				      <img src="photo/collateral/02.jpg" />
				    </li>
				    <li>
				      <img src="photo/collateral/03.jpg" />
				    </li>
				    <li>
				      <img src="photo/collateral/04.jpg" />
				    </li>
				    <li>
				      <img src="photo/collateral/05.jpg" />
				    </li>
				    <li>
				      <img src="photo/collateral/06.jpg" />
				    </li>
				    <li>
				      <img src="photo/collateral/07.jpg" />
				    </li>
				  </ul>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section>
	<?php
	$path = "photo";
	$dir = "cover";

	echo '<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<ul id="homewall" class="thumbnails">';
						$files = array();
							if($dir=='.' or $dir=='..' ){
		        				continue;
		        			}else if(is_dir($path . '/' . $dir)){
								if ($dh = opendir($path . '/' . $dir)) {
	        						while (($file = readdir($dh)) !== false) {
	        							$ext = substr(strrchr($file, '.'), 1);
	        							if($ext == "jpg"){
	         							$files[] = $file;
	         						}
	        						}
	        					}
	        					closedir($dh);
	        				}
	        				/* sorting */
							natsort($files);
							/* stampa gli elementi di $files */
							foreach($files as $el){
								$parts = Explode('.', $el);
	    						$name = $parts[count($parts) - 2];
	    						$parts = Explode('-', $name);
	    						$name = $parts[1];
								echo '<li class="span2"><img src="' . $path . '/' . $dir . '/thumbs/' . $el . '" alt="' . $name . '"/></li>';
							}
		echo '	</ul>
				</div>
			</div>
		</div>';
	?>
</section>

<?php include("page/footer.php"); ?> 