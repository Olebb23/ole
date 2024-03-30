<?php


if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['slett_foresporsel'])){

$slett_id = $_GET['slett_foresporsel'];

$slett_foresporsel = "delete from foresporselstyper where foresporsel_id='$slett_id'";

$run_slett = mysqli_query($con,$slett_foresporsel);

if($run_slett){

echo "<script>alert('En forespørselstype er slettet')</script>";

echo "<script>window.open('index.php?se_foresporsel','_self')</script>";

}

}


?>



<?php } ?>