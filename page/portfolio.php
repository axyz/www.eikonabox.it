<?php include("header.php"); ?>

<section>
	<div class="container">
		<div class="row">
			<div class="span12">
				<div id="gallery" class="tabbable">
				<?php 
					$path = ("../photo");
					$dirs = scandir($path);
					echo ' <!-- Only required for left/right tabs -->';
					echo '<ul class="nav nav-pills">';
					foreach($dirs as $dir){
	    				if($dir=='.' or $dir=='..' ){
	        				continue;
	    				}else if(is_dir($path . '/' . $dir)){
	            		echo '<li><a href="#' . $dir .'"  data-toggle="tab">' . $dir . '</a></li>';
						}
					}
					echo '</ul>';
				?>	
				
				<div class="tab-content">
					<?php 
					$path = ("../photo");
					$dirs = scandir($path);
					foreach($dirs as $dir){
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
						echo '<div class="tab-pane" id="' . $dir . '"><table><tr>';
						/* stampa gli elementi di $files */
						foreach($files as $el){
							$parts = Explode('.', $el);
    						$name = $parts[count($parts) - 2];
    						$parts = Explode('-', $name);
    						$name = $parts[1];
							echo '<td><img src="' . $path . '/' . $dir . '/' . $el . '" alt="' . $name . '"/></td>';
						}
						echo '</tr></table>';
						echo '</div>';
					}
					?>
				</div>
				
			</div>
		</div>
	</div>
</div>
</section>

<?php include("footer.php"); ?>