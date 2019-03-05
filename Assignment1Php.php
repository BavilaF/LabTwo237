<?php
//links the movieBase file
require("movieBase.php");

//Extracts using the $_GET variable
extract($_GET);

/**
*This will strip and remove any extra space from input.
*It uses an if statement to requires 3 contents in order to writeToFile.
*/
if (!empty($movie_name) && !empty($directors_name) && !empty($rating)) {
  $movie = new Movie($movie_name, $directors_name, $artists, $genre, $rating);

  if (!$fileMovieManager->create($movie)) {
    $message = sprinttf("$alert", 'danger', 'Failed to write the file.');
  } else {
    $message = sprinttf("$alert", 'success', 'Success! Information saved.');
  }
  } else {
  $message = sprinttf("$alert", 'danger', 'ERROR! Movie name, Directors name, and rating are required!');
}

?>

<!DOCTYPE html>

<html>

  <?php require("movieHead.php"); ?>

  <body>
    <?php require("movieNav.php"); ?>

    <div class="container">
      <div class="row">
        <?php echo $message; ?>
      </div>
    </div>
  </body>
</html>
