<?php



if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['bestilling_slett'])){

$slett_id = $_GET['bestilling_slett'];

$slett_bestilling = "delete from ventende_bestillinger where bestilling_id='$slett_id'";

$run_slett = mysqli_query($con,$slett_bestilling);

if($run_slett){

echo "<script>alert('bestilling har blitt slettet')</script>";

echo "<script>window.open('index.php?se_bestillinger','_self')</script>";


}


}



?>



<?php }  ?>