<?php

function makeGallery($api, $user, $folder, $thumb_width)
{
  $images = $api->resources(array("type" => "upload", "prefix" => "$folder/"));
  echo "
      <div class='container-fluid'>
      <div class='row'>
      <ul id='photoswipe' class='thumbnails'>
  ";

  forEach ($images["resources"] as $image) {
    $name = $image["public_id"];
    $ext = $image["format"];
    $version = $image["version"];
    $type = $image["type"];

    if(strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ||
       strpos( $_SERVER['HTTP_USER_AGENT'], ' Chrome/' ) !== false ) {
      $ext = 'webp';
    }

    $url = "http://res.cloudinary.com/$user/image/$type/fl_keep_iptc/v$version/$name.$ext";
    $thumb_url = "http://res.cloudinary.com/$user/image/$type/c_thumb,e_unsharp_mask:50,fl_keep_iptc,q_92,w_$thumb_width/v$version/$name.$ext";

    echo "
        <li class='box'>
          <a href='$url' class='thumbnails'><img src='$thumb_url' /></a>
        </li>
    ";
  }
  echo "
    </ul>
    </div>
    </div>
  ";
};

