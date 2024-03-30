<?php



if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['bruker_profil'])){

$rediger_id = $_GET['bruker_profil'];

$get_admin = "select * from administratorer where admin_id='$rediger_id'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['admin_id'];

$admin_navn = $row_admin['admin_navn'];

$admin_epost = $row_admin['admin_epost'];

$admin_passord = $row_admin['admin_passord'];

$admin_bilde = $row_admin['admin_bilde'];

$new_admin_bilde = $row_admin['admin_bilde'];

$admin_land = $row_admin['admin_land'];

$admin_jobb = $row_admin['admin_jobb'];

$admin_kontakt = $row_admin['admin_kontakt'];

$admin_om = $row_admin['admin_om'];



}



?>


<div class="row" >

<div class="col-lg-12" >

<ol class="breadcrumb" >

<li class="active" >

<i class="fa fa-dashboard" ></i> Dashboard / Rediger Profil

</li>



</ol>

</div>

</div>

<div class="row" >

<div class="col-lg-12" >

<div class="panel panel-default" >

<div class="panel-heading" >

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Rediger Profil

</h3>


</div>


<div class="panel-body">

<form class="form-horizontal" method="post" enctype="multipart/form-data">

<div class="form-group">

<label class="col-md-3 control-label">Bruker Navn: </label>

<div class="col-md-6">

<input type="text" name="admin_navn" class="form-control" required value="<?php echo $admin_navn; ?>">

</div>

</div>


<div class="form-group">

<label class="col-md-3 control-label">Bruker epost: </label>

<div class="col-md-6">

<input type="text" name="admin_epost" class="form-control" required value="<?php echo $admin_epost; ?>">

</div>

</div>


<div class="form-group">

<label class="col-md-3 control-label">Bruker passord: </label>

<div class="col-md-6">

<input type="text" name="admin_passord" class="form-control" required value="<?php echo $admin_passord; ?>">

</div>

</div>

<div class="form-group">

<label class="col-md-3 control-label">Bruker Land: </label>

<div class="col-md-6">

<input type="text" name="admin_land" class="form-control" required value="<?php echo $admin_land; ?>">

</div>

</div>


<div class="form-group">

<label class="col-md-3 control-label">Bruker jobbb: </label>

<div class="col-md-6">

<input type="text" name="admin_jobb" class="form-control" required value="<?php echo $admin_jobb; ?>">

</div>

</div>


<div class="form-group">

<label class="col-md-3 control-label">Bruker Mobilnr: </label>

<div class="col-md-6">

<input type="text" name="admin_kontakt" class="form-control" required value="<?php echo $admin_kontakt; ?>">

</div>

</div>


<div class="form-group">

<label class="col-md-3 control-label">Om Bruker: </label>

<div class="col-md-6">

<textarea name="admin_om" class="form-control" rows="3"> <?php echo $admin_om; ?> </textarea>

</div>

</div>

<div class="form-group">

<label class="col-md-3 control-label">Bruker Bilde: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="file" name="admin_bilde" class="form-control" >
<br>
<img src="admin_bilder/<?Php echo $admin_bilde; ?>" width="70" height="70" >

</div>

</div>


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" navn="update" value="Oppdater bruker" class="btn btn-primary form-control">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$admin_navn = $_POST['admin_navn'];

$admin_epost = $_POST['admin_epost'];

$admin_passord = $_POST['admin_passord'];

$admin_land = $_POST['admin_land'];

$admin_jobb = $_POST['admin_jobb'];

$admin_kontakt = $_POST['admin_kontakt'];

$admin_om = $_POST['admin_om'];


$admin_bilde = $_FILES['admin_bilde']['navn'];

$temp_admin_bilde = $_FILES['admin_bilde']['tmp_navn'];

move_uploaded_file($temp_admin_bilde,"admin_bilder/$admin_bilde");

if(empty($admin_bilde)){

$admin_bilde = $new_admin_bilde;

}

$oppdater_admin = "update administratorer set admin_navn='$admin_navn',admin_epost='$admin_epost',admin_passord='$admin_passord',admin_bilde='$admin_bilde',admin_kontakt='$admin_kontakt',admin_land='$admin_land',admin_jobb='$admin_jobb',admin_om='$admin_om' where admin_id='$admin_id'";

$run_admin = mysqli_query($con,$oppdater_admin);

if($run_admin){

echo "<script>alert('bruker har blitt oppdatert. logg inn igjen')</script>";

echo "<script>window.open('login.php','_self')</script>";

session_destroy();

}

}


?>



<?php }  ?>