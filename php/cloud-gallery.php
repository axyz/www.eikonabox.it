<?php

function makeGallery($api, $user, $folder, $thumb_width)
{
    $images = $api->resources(array("type" => "upload", "prefix" => "$folder/", "max_results" => 500));

    $page = empty($_GET['page']) ? 1 : $_GET['page'];
    $num_per_page = 25;
    $total_pages = ceil(count($images["resources"])/$num_per_page);

    echo "
        <div class='container-fluid'>
        <div class='row'>
        <ul id='photoswipe' class='thumbnails'>";

    for ($i = ($page - 1) * $num_per_page; $i < $page * $num_per_page; $i++) {
        $image = $images["resources"][$i];
        $name = $image["public_id"];
        $ext = $image["format"];
        $version = $image["version"];
        $type = $image["type"];
        $alt = str_replace('_', ' ', implode('-', array_splice(explode('-', basename($name)), 1)));

        if (strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ||
            strpos( $_SERVER['HTTP_USER_AGENT'], ' Chrome/' ) !== false ) {
            $ext = 'webp';
        }

        $url = "http://res.cloudinary.com/$user/image/$type/fl_keep_iptc/v$version/$name.$ext";
        $thumb_url = "http://res.cloudinary.com/$user/image/$type/c_thumb,e_unsharp_mask:50,fl_keep_iptc,q_92,w_$thumb_width/v$version/$name.$ext";

        if ($name != "") {
            echo "
                <li class='box' itemscope itemtype='http://schema.org/Photograph'>
                  <a href='$url' class='thumbnails' rel='group' title='$alt'>
                    <meta itemprop='name' content='$alt'>
                    <meta itemprop='creator' content='Guido Fu&agrave;'>
                    <meta itemprop='URL' content='$url'>
                    <div itemprop='aggregateRating' itemscope itemtype='http://schema.org/AggregateRating'>
                      <meta itemprop='ratingValue' content='5' />
                      <meta itemprop='ratingCount' content='196' />
                    </div>
                    <img itemprop='image' alt='$alt' src='$thumb_url' />
                  </a>
                </li>";
        }
    }
    echo "
        </ul>
        </div>
        </div>";

    $ref = $_SERVER['PHP_SELF'];

    if ($num_pages == '0') {
        print " ";
        print " ";
    } elseif (($page == '0') || ($page == '')) {
        $next = $page + 1;
        print " ";
        print "<a id='next' href='$ref?page=$next'> </a>";
    } elseif ($page == $num_pages) {
        $prev = $page - 1;
        print "<a id='prev' href='$ref?page=$prev'> </a>";
        print " ";
    } else {
        $next = $page + 1;
        $prev = $page - 1;
        print "<a id='prev' href='$ref?page=$prev'> </a>";
        print "<a id='next' href='$ref?page=$next'> </a>";
    }

    echo "<nav id='page-nav'>
        <a href='$ref?page=$next'></a>
        </nav></div></div>";
};

