<?php

if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i> Dashboard / Legg Til Kategori

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-tittel Starts -->

<i class="fa fa-money fa-fw"></i> Legg Til Kategori

</h3><!-- panel-tittel Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Kategori Navn</label>

<div class="col-md-6">

<input type="text" name="kat_tittel" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Vis Kategori Øverst</label>

<div class="col-md-6">

<input type="radio" name="kat_top" value="yes">

<label>Ja</label>

<input type="radio" name="kat_top" value="no">

<label>Nei</label>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Velg Kategori Bilde</label>

<div class="col-md-6">

<input type="file" name="kat_bilde" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="submit" value="Legg til kategori" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$kat_tittel = $_POST['kat_tittel'];

$kat_top = $_POST['kat_top'];

$kat_bilde = $_FILES['kat_bilde']['name'];

$temp_name = $_FILES['kat_bilde']['tmp_name'];

move_uploaded_file($temp_name,"andre_bilder/$kat_bilde");

$legg_til_kat = "insert into kategorier (kat_tittel,kat_top,kat_bilde) values ('$kat_tittel','$kat_top','$kat_bilde')";

$run_kat = mysqli_query($con,$legg_til_kat);

if($run_kat){

echo "<script> alert('En ny kategori er blitt lagt til')</script>";

echo "<script> window.open('index.php?se_kategorier','_self') </script>";

}

}



?>

<?php } ?>