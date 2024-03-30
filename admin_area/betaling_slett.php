<?php



if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<?php

if(isset($_GET['betaling_slett'])){

$slett_id = $_GET['betaling_slett'];

$slett_betaling = "delete from betalinger where betaling_id='$slett_id'";


$run_slett = mysqli_query($con,$slett_betaling);


if($run_slett){

echo "<script>alert('betaling har blitt slettet')</script>";

echo "<script>window.open('index.php?se_betalinger','_self')</script>";


}



}



?>




<?php } ?>