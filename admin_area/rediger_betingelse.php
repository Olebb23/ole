<?php

if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php


if(isset($_GET['rediger_betingelse'])){

$rediger_id = $_GET['rediger_betingelse'];

$get_betingelse = "select * from betingelser where betingelse_id='$rediger_id'";

$run_betingelse = mysqli_query($con,$get_betingelse);

$row_betingelse = mysqli_fetch_array($run_betingelse);

$betingelse_id = $row_betingelse['betingelse_id'];

$betingelse_tittel = $row_betingelse['betingelse_tittel'];

$betingelse_link = $row_betingelse['betingelse_link'];

$betingelse_beskrivelse = $row_betingelse['betingelse_beskrivelse'];

}

?>

 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Rediger Betingelse

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->



<div class="row"><!-- 2 row Starts -->


<div class="col-lg-12"><!-- col-lg-12 Starts -->


<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-tittel Starts -->

<i class="fa fa-money fa-fw"></i> Rediger Betingelse

</h3><!-- panel-tittel Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Betingelse Navn </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="betingelse_tittel" class="form-control" value="<?php echo $betingelse_tittel; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Betingelse Beskrivelse </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<textarea name="betingelse_beskrivelse" class="form-control" rows="6" cols="19" >
<?php echo $betingelse_beskrivelse; ?>
</textarea>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Betingelse Link </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="betingelse_link" class="form-control" value="<?php echo $betingelse_link; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" name="oppdater" value="Oppdater betingelse" class="btn btn-primary form-control" >

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php

if(isset($_POST['oppdater'])){

$betingelse_tittel = $_POST['betingelse_tittel'];

$betingelse_beskrivelse = $_POST['betingelse_beskrivelse'];

$betingelse_link = $_POST['betingelse_link'];

$oppdater_betingelse = "update betingelser set betingelse_tittel='$betingelse_tittel',betingelse_link='$betingelse_link',betingelse_beskrivelse='$betingelse_beskrivelse' where betingelse_id='$betingelse_id'";

$run_betingelse = mysqli_query($con,$oppdater_betingelse);

if($run_betingelse){

echo "<script>alert('En betingelse boks er blitt oppdatert ')</script>";

echo "<script>window.open('index.php?se_betalinger','_self')</script>";

}

}


?>


<?php } ?>