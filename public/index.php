<?php include("config.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CarRent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
<body style="background-color: #343a40;">
    <!-- menüü -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">
            CarRent
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">
                        Avaleht
                    </a>
                </li>
            </ul>

            <a href="admin.php" class="btn btn-outline-light">
                Admin
            </a>

        </div>

    </div>
</nav>
    <!-- /menüü -->

    <!-- sisu -->
<div class="container mt-4">
      <div class="row row-cols-1 row-cols-md-4 g-4">
<?php
$paring = "SELECT * FROM cars LIMIT 8";
$valjund = mysqli_query($yhendus, $paring); // mysql käsu saatmine andmebaasile

while($rida = mysqli_fetch_assoc($valjund)){
    //var_dump($rida);

  ?>



    <div class="col">
<div class="card shadow-sm border-0 h-100">
      <img src="https://loremflickr.com/400/250/<?php echo $rida['mark']; ?>" class="card-img-top" alt="audi">
      <div class="card-body">
        <h5 class="card-title"><?php echo $rida['mark']." ".$rida['model']; ?></h5>
        <p>Aasta: <?php echo $rida['year']; ?></p>
        <p>Mootor: <?php echo $rida['engin']; ?></p>
        <p>Kütus: <?php echo $rida['fuel']; ?></p>
        <p>Hind: <?php echo $rida['price']; ?></p>
        <a href="single_car.php" class="btn btn-dark w-100">Rendi</a>
      </div>
    </div>
  </div>
<?php
}
  ?>
</div>
    </div>
    <!-- /sisu -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>