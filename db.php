<?php
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';

$genre1 = new Genre("Azione", "Sparatorie");
$genre2 = new Genre("Thriller", "Vendetta");
$genre3 = new Genre("Fantascienza", "Cyberpunk");
$genre4 = new Genre("Avventura", "Epico");

$movie1 = new Movie("John Wick", "Chad Stahelski", 2014, [$genre1, $genre2]);
$movie1->setRating(9);

$movie2 = new Movie("The Matrix", "Wachowski Sisters", 1999, [$genre3, $genre1]);
$movie2->setRating(10);

$movie3 = new Movie("Gladiator", "Ridley Scott", 2000, [$genre4]);
$movie3->setRating(8.5);

$movie4 = new Movie("Mad Max: Fury Road", "George Miller", 2015, [$genre1, $genre4]);
$movie4->setRating(9.2);

$movies = [$movie1, $movie2, $movie3, $movie4];
