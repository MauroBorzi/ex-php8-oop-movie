<?php
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
