<?php

if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['bruker_slett'])){

$slett_id = $_GET['bruker_slett'];

$slett_bruker = "delete from administratorer where admin_id='$slett_id'";

$run_slett = mysqli_query($con,$slett_bruker);

if($run_slett){

echo "<script>alert('En bruker har blitt slettet')</script>";

echo "<script>window.open('index.php?se_brukere','_self')</script>";

}


}


?>

<?php } ?>