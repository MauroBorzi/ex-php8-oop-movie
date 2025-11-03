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

trait RatingTrait
{
  public $rating;

  public function setRating($valore)
  {
    if ($valore < 0 || $valore > 10) {
      throw new Exception("Il voto deve essere compreso tra 0 e 10");
    }
    $this->rating = $valore;
  }

  public function getRating()
  {
    return $this->rating ?? "Nessun voto assegnato";
  }
}

class Movie
{
  use RatingTrait;

  public $titolo;
  public $autore;
  public $anno;
  public $generi = [];

  function __construct($_titolo, $_autore, $_anno, array $_generi)
  {
    $this->titolo = $_titolo;
    $this->autore = $_autore;
    $this->anno = $_anno;
    $this->generi = $_generi;
  }

  public function getTitle()
  {
    return $this->titolo;
  }

  public function getGeneri()
  {
    $nomiGeneri = [];
    foreach ($this->generi as $genere) {
      $nomiGeneri[] = "{$genere->genere} ({$genere->sottogenere})";
    }
    return implode(", ", $nomiGeneri);
  }
}

$genre1 = new Genre("Azione", "Sparatorie");
$genre2 = new Genre("Thriller", "Vendetta");

$movie1 = new Movie("John Wick", "Chad Stahelski", 2014, [$genre1, $genre2]);
$movie2 = new Movie("John Wick 2", "Chad Stahelski", 2017, [$genre1]);

$movie1->setRating(9);
$movie2->setRating(8.5);

echo "<strong>{$movie1->getTitle()}</strong> - Generi: {$movie1->getGeneri()} - Rating: {$movie1->getRating()}<br>";
echo "<strong>{$movie2->getTitle()}</strong> - Generi: {$movie2->getGeneri()} - Rating: {$movie2->getRating()}<br>";
