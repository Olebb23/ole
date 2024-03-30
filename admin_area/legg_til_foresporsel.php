<?php


if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Dashboard / Legg Til Forespørsel Type

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Legg Til Forespørsel Type 

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" ><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Forespørsel Navn </label>

<div class="col-md-6">

<input type="text" name="foresporsel_id" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">  </label>

<div class="col-md-6">

<input type="submit" name="submit" class="btn btn-primary form-control" value="Legg Til Forespørsel">

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends-->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$foresporsel_id = $_POST['foresporsel_id'];

$legg_til_foresporsel =  "insert into foresporselstyper(foresporsel_id) values ('$foresporsel_id')";

$run_foresporsel = mysqli_query($con,$legg_til_foresporsel);

if($run_foresporsel){

echo "<script> alert('Ny forespørsel er blitt lagt til') </script>";
echo "<script>window.open('index.php?se_foresporsel','_self')</script>";

}



}


?>


<?php } ?>