<?php



if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<div class="row" ><!-- 1  row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard" ></i> Dashboard / Legg Til Bruker

</li>



</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1  row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Legg Til Bruker

</h3>


</div>


<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Bruker Navn: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" navn="admin_navn" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Bruker epost: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" navn="admin_epost" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Bruker Passord: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="password" navn="admin_passord" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Bruker Land: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" navn="admin_land" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Bruker Jobb: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" navn="admin_jobb" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Bruker Mobilnr: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" navn="admin_kontakt" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Om Bruker: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<textarea navn="admin_om" class="form-control" rows="3"> </textarea>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Bruker Bilde: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="file" navn="admin_bilde" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" navn="submit" value="Legg Til Bruker" class="btn btn-primary form-control">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$admin_navn = $_POST['admin_navn'];

$admin_epost = $_POST['admin_epost'];

$admin_pass = $_POST['admin_pass'];

$admin_land = $_POST['admin_land'];

$admin_jobb = $_POST['admin_jobb'];

$admin_kontakt = $_POST['admin_kontakt'];

$admin_om = $_POST['admin_om'];


$admin_bilde = $_FILES['admin_bilde']['navn'];

$temp_admin_bilde = $_FILES['admin_bilde']['tmp_navn'];

move_uploaded_file($temp_admin_bilde,"admin_bilder/$admin_bilde");

$legg_til_admin = "insert into administratorer (admin_navn,admin_epost,admin_pass,admin_bilde,admin_kontakt,admin_land,admin_jobb,admin_om) values ('$admin_navn','$admin_epost','$admin_pass','$admin_bilde','$admin_kontakt','$admin_land','$admin_jobb','$admin_om')";

$run_admin = mysqli_query($con,$legg_til_admin);


if($run_admin){

echo "<script>alert('En bruker har blitt lagt til')</script>";

echo "<script>window.open('index.php?se_brukere','_self')</script>";

}


}


?>



<?php }  ?>