<?php
    include("config.php");

    if (!empty($_GET['muuda_id'])) {
         $id = $_GET['muuda_id'];
        $mark = $_GET['mark'];
        $model = $_GET['model'];
        $engin = $_GET['engin'];
        $fuel = $_GET['fuel'];
        $price = $_GET['price'];
        $image = $_GET['image'];
        
        $paring = "UPDATE cars 
        SET mark = '".$mark."', 
        model = '".$model."', 
        engin = '".$engin."', 
        fuel = '".$fuel."', 
        price = '".$price."', 
        image = '".$image."' 
        WHERE cars.id = ".$id."";

   
        $valjund = mysqli_query($yhendus, $paring);
        $tulemus = mysqli_affected_rows($yhendus);
        if ($tulemus == 1) {
            header("Location: admin.php?updated=1");
            exit();
        }
        }

        $paring = "SELECT * FROM cars WHERE id=".$_GET['id']."";
        $valjund = mysqli_query($yhendus, $paring);
        $rida = mysqli_fetch_assoc($valjund);

?>
       
<form action="muuda.php" method="get">
    <input type="hidden" name="muuda_id" value="<?php echo $rida['id']; ?>"><br>
    Mark <input type="text" name="mark" value="<?php echo $rida['mark']; ?>"><br>
    Model <input type="text" name="model" value="<?php echo $rida['model']; ?>"><br>
    Engin <input type="text" name="engin" value="<?php echo $rida['engin']; ?>"><br>
    Fuel <input type="text" name="fuel" value="<?php echo $rida['fuel']; ?>"><br>
    Price <input type="number" name="price" value="<?php echo $rida['price']; ?>"><br>
    Image <input type="text" name="image" value="<?php echo $rida['image']; ?>"><br>
    <input type="submit" value="Muuda"><br>
</form> 