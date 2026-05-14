<?php

include("config.php"); 
$paring = "DELETE FROM cars WHERE ID = ".$_GET['id']."";
$valjund = mysqli_query($yhendus, $paring);
if ($valjund) {
    header("Location: admin.php?deleted=1");
    exit();
}

?>