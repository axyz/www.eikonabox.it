<?php

function innerSection($href, $bg, $title, $subtitle, $text, $type){

	if($type == "project"){
		echo "
			<div class='row'>
					<a href='$href'><div class='span5 shadow inner-section-thumb' style='$bg' >
						<div class='inner-section-title'><h1>$title</h1></div>
					</div></a>
					<div class='span7 inner-section-caption-container'>
						<div class='inner-section-caption longtext shadow'>
							$text
						</div>
					</div>
				</div>";
	}else if($type == "reportage"){
		echo "
			<div class='row'>
					<a href='$href'><div class='span12 shadow inner-section-thumb' style='$bg' >
						<div class='inner-section-title-reportage'><h1>$title</h1><h2>$subtitle</h2></div>
					</div></a>
				</div>";
	}

}

?>