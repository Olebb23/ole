<?php

if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<!DOCTYPE html>

<html>

<head>

<title> Legg til Produkter </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#produkt_beskrivelse,#produkt_egenskaper' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Legg til Produkter

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Legg til Produkter

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Produkt Navn </label>

<div class="col-md-6" >

<input type="text" name="produkt_tittel" class="form-control" required >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Produkt Link </label>

<div class="col-md-6" >

<input type="text" name="produkt_link" class="form-control" required >

<br>

<p style="font-size:15px; font-weight:bold;">

produkt link eksempel : Yokohama-Sport-komfort-sommerdekk

</p>

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Velg En Produsent </label>

<div class="col-md-6" >

<select class="form-control" name="produsent"><!-- select produsent Starts -->

<option> Velg En Produsent </option>

<?php

$get_produsent = "select * from produsenter";
$run_produsent = mysqli_query($con,$get_produsent);
while($row_produsent= mysqli_fetch_array($run_produsent)){
$produsent_id = $row_produsent['produsent_id'];
$produsent_tittel = $row_produsent['produsent_tittel'];

echo "<option value='$produsent_id'>
$produsent_tittel
</option>";

}

?>

</select><!-- select produsent Ends -->

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Kategori </label>

<div class="col-md-6" >


<select name="kat" class="form-control" >

<option> Velg en kategori </option>

<?php

$get_kat = "select * from kategorier ";

$run_kat = mysqli_query($con,$get_kat);

while ($row_kat=mysqli_fetch_array($run_kat)) {

$kat_id = $row_kat['kat_id'];

$kat_tittel = $row_kat['kat_tittel'];

echo "<option value='$kat_id'>$kat_tittel</option>";

}

?>


</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Produktbilde </label>

<div class="col-md-6" >

<input type="file" name="produkt_img1" class="form-control" required >

</div>

</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Produkt Pris </label>

<div class="col-md-6" >

<input type="text" name="produkt_pris" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Produkt Salg Pris </label>

<div class="col-md-6" >

<input type="text" name="psp_pris" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Produkt Nøkkelord </label>

<div class="col-md-6" >

<input type="text" name="produkt_nokkelord" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Produkt Tabs </label>

<div class="col-md-6" >

<ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

<li class="active">

<a data-toggle="tab" href="#beskrivelse"> Produkt Beskrivelse </a>

</li>

<li>

<a data-toggle="tab" href="#egenskaper"> Produkt Egenskaper </a>

</li>

<li>

<a data-toggle="tab" href="#video"> lyd og bilder </a>

</li>

</ul><!-- nav nav-tabs Ends -->

<div class="tab-content"><!-- tab-content Starts -->

<div id="beskrivelse" class="tab-pane fade in active"><!-- beskrivelse tab-pane fade in active Starts -->

<br>

<textarea name="produkt_beskrivelse" class="form-control" rows="15" id="produkt_beskrivelse">


</textarea>

</div><!-- beskrivelse tab-pane fade in active Ends -->


<div id="egenskaper" class="tab-pane fade in"><!-- egenskaper tab-pane fade in Starts -->

<br>

<textarea name="produkt_egenskaper" class="form-control" rows="15" id="produkt_egenskaper">


</textarea>

</div><!-- egenskaper tab-pane fade in Ends -->


<div id="video" class="tab-pane fade in"><!-- video tab-pane fade in Starts -->

<br>

<textarea name="produkt_video" class="form-control" rows="15">


</textarea>

</div><!-- video tab-pane fade in Ends -->


</div><!-- tab-content Ends -->

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Produkt merke </label>

<div class="col-md-6" >

<input type="text" name="produkt_label" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Legg Til Produkt" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['submit'])){
include("includes/db.php");
$produkt_tittel = $_POST['produkt_tittel'];
$produkt_kat = $_POST['produkt_kat'];
$kat = $_POST['kat'];
$produsent_id = $_POST['produsent_id'];
$produkt_pris = $_POST['produkt_pris'];
$produkt_beskrivelse = $_POST['produkt_beskrivelse'];
$produkt_nokkelord = $_POST['produkt_nokkelord'];

$psp_pris = $_POST['psp_pris'];

$produkt_label = $_POST['produkt_label'];

$produkt_link = $_POST['produkt_link'];

$produkt_egenskaper = $_POST['produkt_egenskaper'];

$produkt_video = $_POST['produkt_video'];

$status = "produkt";

$produkt_img1 = $_FILES['produkt_img1']['name'];
$produkt_img2 = $_FILES['produkt_img2']['name'];
$produkt_img3 = $_FILES['produkt_img3']['name'];

$temp_name1 = $_FILES['produkt_img1']['tmp_name'];
$temp_name2 = $_FILES['produkt_img2']['tmp_name'];
$temp_name3 = $_FILES['produkt_img3']['tmp_name'];

move_uploaded_file($temp_name1,"produkt_bilder/$produkt_img1");
move_uploaded_file($temp_name2,"produkt_bilder/$produkt_img2");
move_uploaded_file($temp_name3,"produkt_bilder/$produkt_img3");

$legg_til_produkt = "insert into produkter (p_kat_id,kat_id,produsent_id,dato,produkt_tittel,produkt_link,produkt_img1,produkt_img2,produkt_img3,produkt_pris,produkt_psp_pris,produkt_beskrivelse,produkt_egenskaper,produkt_video,produkt_nokkelord,produkt_label,status) values ('$produkt_kat','$kat','$produsent_id',NOW(),'$produkt_tittel','$produkt_link','$produkt_img1','$produkt_img2','$produkt_img3','$produkt_pris','$psp_pris','$produkt_beskrivelse','$produkt_egenskaper','$produkt_video','$produkt_nokkelord','$produkt_label','$status')";

$run_produkt = mysqli_query($con,$legg_til_produkt);

if($run_produkt){

echo "<script>alert('produktet har blitt lagt til')</script>";

echo "<script>window.open('index.php?se_produkter','_self')</script>";

}

}

?>

<?php } ?>
