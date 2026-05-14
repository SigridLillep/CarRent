<?php
    include("config.php");

    if (!empty($_GET)) {
        $mark = $_GET['mark'];
        $model = $_GET['model'];
        $engin = $_GET['engin'];
        $fuel = $_GET['fuel'];
        $price = $_GET['price'];
        $image = $_GET['image'];

        $paring = "INSERT INTO cars (mark, model, engin, fuel, price, image) VALUES ('".$mark."', '".$model."', '".$engin."', '".$fuel."', '".$price."', '".$image."')";

        $valjund = mysqli_query($yhendus, $paring);
        $tulemus = mysqli_affected_rows($yhendus);

        if ($tulemus == 1) {
            header("Location: admin.php?added=1");
            exit();
        }


    }
?>

<form action="lisa.php" method="get">
    Mark <input type="text" name="mark" value="ford"><br>
    Model <input type="text" name="model" value="focus"><br>
    Engin <input type="text" name="engin" value="v8"><br>
    Fuel <input type="text" name="fuel" value="bensiin"><br>
    Price <input type="number" name="price" value="100"><br>
    Image <input type="text" name="image" value="ford.jpg"><br>
    <input type="submit" value="Lisa auto"><br>

</form>