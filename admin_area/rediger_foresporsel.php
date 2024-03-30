<?php


if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['rediger_foresporsel'])){

$rediger_id = $_GET['rediger_foresporsel'];

$get_foresporselstype = "select * from foresporselstyper where foresporsel_id='$rediger_id'";

$run_foresporselstype = mysqli_query($con,$get_foresporselstype);

$row_foresporselstype = mysqli_fetch_array($run_foresporselstype);

$foresporsel_id = $row_foresporselstype['foresporsel_id'];

$foresporsel_tittel = $row_foresporselstype['foresporsel_tittel'];

}


?>

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Dashboard / Rediger Forespørselstype

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Rediger Forespørselstype

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" ><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Forespørsel Navn </label>

<div class="col-md-6">

<input type="text" name="foresporsel_tittel" class="form-control" value="<?php echo $foresporsel_tittel; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">  </label>

<div class="col-md-6">

<input type="submit" name="oppdater" class="btn btn-primary form-control" value="Oppdater forespørselstype">

</div>

</div>


</form>

</div>

</div>

</div>

</div>

<?php

if(isset($_POST['oppdater'])){

$foresporsel_tittel = $_POST['foresporsel_tittel'];

$oppdater_foresporsel = "update foresporselstyper set foresporsel_tittel='$foresporsel_tittel' where foresporsel_id='$foresporsel_id'";

$run_foresporsel = mysqli_query($con,$oppdater_foresporsel);

if($run_foresporsel){

echo "<script>alert('En forespørselstype er blitt lagt til')</script>";

echo "<script>window.open('index.php?se_foresporsel','_self')</script>";

}

}


?>


<?php } ?>