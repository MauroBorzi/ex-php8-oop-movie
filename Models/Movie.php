<?php
require_once __DIR__ . '/RatingTrait.php';

class Movie
{
  use RatingTrait;

  public $titolo;
  public $autore;
  public $anno;
  public $generi = [];

  function __construct($titolo, $autore, $anno, array $generi)
  {
    $this->titolo = $titolo;
    $this->autore = $autore;
    $this->anno = $anno;
    $this->generi = $generi;
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
