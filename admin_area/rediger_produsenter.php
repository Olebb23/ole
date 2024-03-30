<?php


if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['rediger_produsent'])){

$rediger_produsent = $_GET['rediger_produsent'];

$get_produsent = "select * from produsenter where produsent_id='$rediger_produsent'";

$run_produsent = mysqli_query($con,$get_produsent);

$row_produsent = mysqli_fetch_array($run_produsent);

$m_id = $row_produsent['produsent_id'];

$m_tittel = $row_produsent['produsent_tittel'];

$m_topp = $row_produsent['produsent_topp'];

$m_bilde = $row_produsent['produsent_bilde'];

$ny_m_bilde = $row_produsent['produsent_bilde'];


}


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / rediger produsent

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-tittel Starts -->

<i class="fa fa-money fa-fw"> </i> Rediger Produsent

</h3><!-- panel-tittel Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Produsent Navn </label>

<div class="col-md-6">

<input type="text" name="produsent_navn" class="form-control" value="<?php echo $m_tittel; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Vis Produsent På Toppen </label>

<div class="col-md-6">

<input type="radio" name="produsent_topp" value="yes" 
<?php if($m_topp == 'no'){}else{ echo "checked='checked'"; } ?> >

<label> Yes </label>

<input type="radio" name="produsent_topp" value="no" 
<?php if($m_topp == 'no'){ echo "checked='checked'"; }else{} ?> >

<label> No </label>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Select produsent bilde </label>

<div class="col-md-6">

<input type="file" name="produsent_bilde" class="form-control" >

<br>

<img src="andre_bilder/<?php echo $m_bilde; ?>" width="70" height="70">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="oppdater" class="form-control btn btn-primary" value=" oppdater produsent " >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['oppdater'])){

$produsent_name = $_POST['produsent_name'];

$produsent_topp = $_POST['produsent_topp'];

$produsent_bilde = $_FILES['produsent_bilde']['name'];

$tmp_name = $_FILES['produsent_bilde']['tmp_name'];

move_uploaded_file($tmp_name,"andre_bilder/$produsent_bilde");

if(empty($produsent_bilde)){

$produsent_bilde = $new_m_bilde;

}

$oppdater_produsent = "update produsenter set produsent_tittel='$produsent_name',produsent_topp='$produsent_topp',produsent_bilde='$produsent_bilde' where produsent_id='$m_id'";

$run_produsent = mysqli_query($con,$oppdater_produsent);

if($run_produsent){

echo "<script>alert('produsenten er oppdatert')</script>";

echo "<script>window.open('index.php?se_produsenter','_self')</script>";

}

}

?>

<?php } ?>