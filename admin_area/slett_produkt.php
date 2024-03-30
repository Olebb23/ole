<?php



if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['slett_produkt'])){

$slett_id = $_GET['slett_produkt'];

$slett_pro = "delete from produkter where produkt_id='$slett_id'";

$run_slett = mysqli_query($con,$slett_pro);r

if($run_slett){

echo "<script>alert('Et produkt har blitt slettet')</script>";

echo "<script>window.open('index.php?se_produkter','_self')</script>";

}

}

?>

<?php } ?>