<?php
/**
* This gets the file and all the contents of fileLog showing  all the input
*in a new page.
*/
require("movieBase.php");

$list = $fileMovieManager->read();

/*This sorts and explodes the input array in a table
*It also makes an edit button.
*/
$movie = explode("\n", $list);
$table_body = '';
foreach($movie as $key => $entry) {
  $log = explode(',', $entry);
  $table_body .='<tr>';
  $table_body .= '<td>' . $log[0] . '</td>';
  $table_body .= '<td>' . $log[1] . '</td>';
  $table_body .= '<td>' . $log[2] . '</td>';
  $table_body .= '<td>' . $log[3] . '</td>';
  $table_body .= '<td>' . $log[4] . '</td>';
  $table_body .= '<td><a href="edit.php?id=' . $key .'" class="btn btn-info btn-sm">Edit</a></td>';
  $table_body .= '</tr>';
}

?>

<!DOCTYPE html>

<html>

  <?php require("movieHead.php"); ?>

  <body>
    <?php require("movieNav.php"); ?>

    <div class="container">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Movie Name</th>
              <th>Director's Name</th>
              <th>Artists</th>
              <th>Genre</th>
              <th>Rating</th>
            </tr>
          </thead>
          <tbody>
            <?php echo $table_body; ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
