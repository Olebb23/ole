<?php

if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['rediger_kat'])){

$rediger_id = $_GET['rediger_kat'];

$rediger_kat = "select * from kategorier where kat_id='$rediger_id'";

$run_rediger = mysqli_query($con,$rediger_kat);

$row_rediger = mysqli_fetch_array($run_rediger);

$k_id = $row_rediger['kat_id'];

$k_tittel = $row_rediger['kat_tittel'];

$k_top = $row_rediger['kat_top'];

$k_bilde = $row_rediger['kat_bilde'];

$new_k_bilde = $row_rediger['kat_bilde'];

}

?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i> Dashboard / Rediger Kategorier

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-tittel Starts -->

<i class="fa fa-money fa-fw"></i> Rediger Kategorier

</h3><!-- panel-tittel Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Kategori Navn</label>

<div class="col-md-6">

<input type="text" name="kat_tittel" class="form-control" value="<?php echo $k_tittel; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Vis Kategori Øverst</label>

<div class="col-md-6">

<input type="radio" name="kat_top" value="yes" 
<?php if($k_top == 'no'){}else{ echo "checked='checked'"; } ?>>

<label>Yes</label>

<input type="radio" name="kat_top" value="no" 
<?php if($k_top == 'no'){ echo "checked='checked'"; }else{} ?>>

<label>No</label>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Velg Et Kategori Bilde</label>

<div class="col-md-6">

<input type="file" name="kat_bilde" class="form-control">

<br>

<img src="andre_bilder/<?php echo $k_bilde; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="oppdater" value="Oppdater kategori" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['oppdater'])){

$kat_tittel = $_POST['kat_tittel'];

$kat_top = $_POST['kat_top'];

$kat_bilde = $_FILES['kat_bilde']['name'];

$temp_name = $_FILES['kat_bilde']['tmp_name'];

move_uploaded_file($temp_name,"andre_bilder/$kat_bilde");

if(empty($kat_bilde)){

$kat_bilde= $new_k_bilde;

}

$oppdater_kat = "update kategorier set kat_tittel='$kat_tittel',kat_top='$kat_top',kat_bilde='$kat_bilde' where kat_id='$k_id'";

$run_kat = mysqli_query($con,$oppdater_kat);

if($run_kat){

echo "<script>alert('En kategori er blitt lagt til')</script>";

echo "<script>window.open('index.php?se_kategorier','_self')</script>";

}

}



?>

<?php } ?>