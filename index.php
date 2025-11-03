<?php
class Genre
{
  public $genere;
  public $sottogenere;

  function __construct($_genere, $_sottogenere)
  {
    $this->genere = $_genere;
    $this->sottogenere = $_sottogenere;
  }
}

class Movie
{
  public $titolo;
  public $autore;
  public $anno;
  public $genere;

  function __construct($_titolo, $_autore, $_anno, Genre $_genere)
  {
    $this->titolo = $_titolo;
    $this->autore = $_autore;
    $this->anno = $_anno;
    $this->genere = $_genere;
  }

  public function getTitle()
  {
    return $this->titolo;
  }
}

$genre = new Genre("Azione", "Ammazzo tutti");

$movie1 = new Movie("John Wick", "ken'n so", 2014, $genre);
$movie2 = new Movie("John Wick 2", "ken'n so2", 2017, $genre);
var_dump($movie1);
echo "<br>";
echo $movie1->getTitle();
echo "<br>";
var_dump($movie2);
echo "<br>";
echo $movie2->getTitle();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ex-php8-oop-movie</title>
</head>

<body>

</body>

</html>