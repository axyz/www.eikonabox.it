<?php

/* set out document type to text/javascript instead of text/html */
header("Content-type: text/javascript");

/* our multidimentional php array to pass back to javascript via ajax */
$arr = array();
$base = "eikonanew/";
$dirs = array("photo/portrait/thumbs",
              "img/reportage",
              "img/projects",
              "img/bio",
              "photo/publication/thumbs",
              "photo/corporate/thumbs",
              "photo/food/thumbs",
              "photo/projects/collateral/thumbs",
              "photo/projects/creoli/thumbs",
              "photo/projects/darkladies/thumbs",
              "photo/reportage/mozambico/thumbs",
              "photo/reportage/boogienights/thumbs",
              "photo/reportage/immigrati/thumbs",
              "photo/reportage/giappone/thumbs",
              "photo/reportage/diamanti/thumbs",
              "photo/reportage/newyork/thumbs",
              "photo/reportage/cuba/thumbs",
              "photo/reportage/panama/thumbs",);

foreach ($dirs as $el){
        if ($fil = opendir($base . $el)) {
                while (($file = readdir($fil)) !== false) {
                        if ($file != "." && $file != ".." && $file != "thumbs" && $file != ".DS_Store") { 
                                $arr[] = $base . $el . "/" . $file;
                        }
                }
        }
}

/* encode the array as json. this will output [{"first_name":"Darian","last_name":"Brown","age":"28","email":"darianbr@example.com"},{"first_name":"John","last_name":"Doe","age":"47","email":"john_doe@example.com"}] */
echo json_encode($arr);

?>