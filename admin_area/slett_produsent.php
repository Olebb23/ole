<?php


if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['slett_produsent'])){

$slett_id = $_GET['slett_produsent'];

$slett_produsent = "delete from produsenter where produsent_id='$slett_id'";

$run_produsent = mysqli_query($con,$slett_produsent);

if($run_produsent){

echo "<script>alert('En produsent er blitt slettet')</script>";
echo "<script>window.open('index.php?se_produsenter','_self')</script>";

}

}


?>


<?php } ?>