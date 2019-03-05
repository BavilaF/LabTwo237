<?php
//requires the MovieManagerInterface
require ("MovieManagerInterface.php");

//class implements the other
class FileMovieManager implements MovieManagerInterface {

  private $file = '';

  function __construct(string $file) {
    $this->file = $file;
  }

/**
* This is the file in going to write the movie information. It will also open
* my Logs.txt file and will append. It will also have a boolean function which
* will tell true or false.
*/
  function create(Movie $movie) : bool {
    $fp = fopen($this->$file, 'ab');
        if (!$fp) {
          return false;
        }
        $content = "$movie->movie_name,$movie->directors_name,$movie->artists,$movie->genre,$movie->rating\n";
        if (!fwrite($fp, $content)) {
          return false;
        }
        if (!fclose($fp)) {
          return false;
        }
        return true;
  }

  function read()  : string {
    return file_get_contents($this->file);
  }

  function readOneById(int $id) : Movie {

  }

  function update(int $id, Movie $movie) : bool {

  }
}

$file = "Logs.txt";
$fileMovieManager = new FileMovieManager($file);

  ?>
