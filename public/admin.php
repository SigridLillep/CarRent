<?php
session_start();

if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-4">

<?php
$teade = "";

if (isset($_GET['updated']) && $_GET['updated'] == 1) {
    $teade = "Muudetud!";
}

if (isset($_GET['deleted']) && $_GET['deleted'] == 1) {
    $teade = "Kustutatud!";
}

if (isset($_GET['added']) && $_GET['added'] == 1) {
    $teade = "Lisatud!";
}
?>

<?php if (!empty($teade)) { ?>
    <div id="teaderiba" style="
        background-color: #fff3cd;
        color: #856404;
        border: 1px solid #ffeeba;DD
        padding: 12px 18px;
        margin: 15px 0;
        border-radius: 6px;
        width: fit-content;
        font-family: Arial, sans-serif;
    ">
        <?php echo $teade; ?>
    </div>
<?php } ?>

<script>
setTimeout(function() {
    var teade = document.getElementById("teaderiba");
    if (teade) {
        teade.style.display = "none";
    }
}, 3000);
</script>

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="mb-1">Admin</h1>
        <p class="text-muted mb-0">Autode haldamine</p>
    </div>

    <div>
        <a href="index.php" class="btn btn-outline-secondary me-2">
            Avaleht
        </a>

        <a href="logout.php" class="btn btn-danger">
            Logi välja
        </a>
    </div>

</div>

<h1>Admin</h1>
<a href="lisa.php" class="btn btn-success mb-3">
    + Lisa auto
</a>

<table class="table table-striped table-hover table-bordered shadow bg-white">
    <tr>
        <td><strong>ID</td>
        <td><strong>Mark</td>
        <td><strong>Model</td>
        <td><strong>Engin</td>
        <td><strong>Fuel</td>
        <td><strong>Price</td>
        <td><strong>Image</td>
        <td><strong>Kustuta</td>
        <td><strong>Muuda</td>
    </tr>


<?php

include("config.php"); 

$paring = "SELECT * FROM cars ORDER BY id DESC";
$valjund = mysqli_query($yhendus, $paring); // mysql käsu saatmine andmebaasile

while($rida = mysqli_fetch_assoc($valjund)){
    //var_dump($rida);
    echo "<tr>
    <td>".$rida['id']."</td>
    <td>".$rida['mark']."</td>
    <td>".$rida['model']."</td>
    <td>".$rida['engin']."</td>
    <td>".$rida['fuel']."</td>
    <td>".$rida['price']."</td>
    <td>".$rida['image']."</td>
    <td><a href='kustuta.php?id=".$rida['id']."' onclick=\"return confirm('KINDEL, ET TAHAD KUSTUTADA??')\">Kustuta</a></td>
    <td><a href='muuda.php?id=".$rida['id']."'>Muuda</a></td>



    </tr>";
}

?>

</table>
</div>
</body>
</html>