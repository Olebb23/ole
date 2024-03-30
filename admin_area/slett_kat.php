<?php

if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['slett_kat'])){

$slett_id = $_GET['slett_kat'];

$slett_kat = "delete from kategorier where kat_id='$slett_id'";

$run_slett = mysqli_query($con,$slett_kat);

if($run_slett){

echo "<script> alert('En kategori er blitt slettet') </script>";

echo "<script>window.open('index.php?se_kategorier','_self')</script>";

}

}

?>

<?php } ?>