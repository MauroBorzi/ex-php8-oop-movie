<?php
class Movie
{
  public $titolo;
  public $autore;
  public $anno;

  function __construct($_titolo, $_autore, $_anno)
  {
    $this->titolo = $_titolo;
    $this->autore = $_autore;
    $this->anno = $_anno;
  }

  public function getTitle()
  {
    return $this->titolo;
  }
}
$movie1 = new Movie("John Wick", "ken'n so", 2014);
$movie2 = new Movie("John Wick 2", "ken'n so2", 2017);
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