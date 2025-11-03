<?php
require_once __DIR__ . '/db.php';
?>
<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista Film</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #121212;
      color: #f5f5f5;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex-grow: 1;
    }

    .card {
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: scale(1.03);
      box-shadow: 0 0 20px rgba(255, 193, 7, 0.3);
    }

    footer {
      border-top: 2px solid #ffc107;
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100 bg-dark text-light">

  <header class="bg-black py-4 mb-4">
    <div class="container text-center">
      <h1 class="display-5 fw-bold text-warning">🎬 Lista dei Film</h1>
    </div>
  </header>

  <main class="container flex-grow-1">
    <div class="row g-4">
      <?php foreach ($movies as $movie) : ?>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card h-100 shadow-lg border-warning border-2 bg-secondary text-light">
            <div class="card-body">
              <h3 class="card-title text-warning"><?= $movie->getTitle(); ?></h3>
              <p class="card-text mb-1"><strong>Autore:</strong> <?= $movie->autore; ?></p>
              <p class="card-text mb-1"><strong>Anno:</strong> <?= $movie->anno; ?></p>
              <p class="card-text mb-1"><strong>Generi:</strong> <?= $movie->getGeneri(); ?></p>
              <p class="card-text mb-0"><strong>Rating:</strong> ⭐ <?= $movie->getRating(); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </main>

  <footer class="bg-black text-center py-3 mt-auto border-top border-warning">
    <p class="mb-0">© <?= date('Y'); ?> - Movie Database</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>