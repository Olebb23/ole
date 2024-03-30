<?php



if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['slett_betingelse'])){

$slett_id = $_GET['slett_betingelse'];

$slett_betingelse = "delete from betingelser where betingelse_id='$slett_id'";

$run_betingelse = mysqli_query($con,$slett_betingelse);

if($run_betingelse){

echo "<script>alert(' En betingelse er blitt slettet ')</script>";

echo "<script>window.open('index.php?se_betingelser','_self')</script>";

}


}


?>


<?php } ?>