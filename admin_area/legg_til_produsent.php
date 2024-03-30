<?php


if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>


<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Legg Til Produsent

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"> </i> Legg Til Produsent
</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Produsent Navn </label>

<div class="col-md-6">

<input type="text" name="produsent_navn" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Vis På Toppen </label>

<div class="col-md-6">

<input type="radio" name="produsent_topp" value="yes" >

<label> Ja </label>

<input type="radio" name="produsent_topp" value="no" >

<label> Nei </label>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Velg Produsent Bilde </label>

<div class="col-md-6">

<input type="file" name="produsent_bilde" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" class="form-control btn btn-primary" value=" Legg til produsent " >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$produsent_navn = $_POST['produsent_navn'];

$produsent_topp = $_POST['produsent_topp'];

$produsent_bilde = $_FILES['produsent_bilde']['navn'];

$tmp_navn = $_FILES['produsent_bilde']['tmp_navn'];

move_uploaded_file($tmp_navn,"andre_bilder/$produsent_bilde");

$legg_til_produsent = "insert into produsenter (produsent_tittel,produsent_topp,produsent_bilde) values ('$produsent_navn','$produsent_topp','$produsent_bilde')";

$run_produsent = mysqli_query($con,$legg_til_produsent);

if($run_produsent){

echo "<script>alert('Ny produsent er lagt til')</script>";

echo "<script>window.open('index.php?se_produsenter','_self')</script>";

}

}

?>

<?php } ?>