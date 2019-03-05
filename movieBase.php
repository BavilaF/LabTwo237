<?php

//requires both my FileMovieManager and movie
require("FileMovieManager.php");
require("Movie.php");

//The alert that tells the user wether the sumbmission was successful or not
$alert = '<div class="alert alert-%s" role="alert">%s</div>';

//The funtion array
function printArray(array $array) {
  echo '<pre>' . print_r($array, true) . '</pre>';
}

?>
