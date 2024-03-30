<?php



if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<?php

if(isset($_GET['kunde_slett'])){

$slett_id = $_GET['kunde_slett'];

$slett_kunde = "delete from kunder where kunde_id='$slett_id'";

$run_slett = mysqli_query($con,$slett_kunde);


if($run_slett){

echo "<script>alert('kunde har blitt slettet')</script>";

echo "<script>window.open('index.php?se_kunder','_self')</script>";


}

}


?>




<?php } ?>