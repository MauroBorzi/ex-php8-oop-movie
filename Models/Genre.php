<?php
class Genre
{
  public $genere;
  public $sottogenere;

  function __construct($genere, $sottogenere)
  {
    $this->genere = $genere;
    $this->sottogenere = $sottogenere;
  }
}
