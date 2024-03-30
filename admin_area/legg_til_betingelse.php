<?php

if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<div class="row">

<div class="col-lg-12">

<ol class="breadcrumb">

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Legg Til Betingelse

</li>

</ol><!-- breadcrumb Ends -->

</div>

</div><!-- 1 row Ends -->



<div class="row"><!-- 2 row Starts -->


<div class="col-lg-12"><!-- col-lg-12 Starts -->


<div class="panel panel-default">

<div class="panel-heading">

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Legg Til Betingelse

</h3>

</div>

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Betingelse Navn </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="betingelse_tittel" class="form-control" >

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Betingelse Beskrivelse </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<textarea name="betingelse_beskrivelse" class="form-control" rows="6" cols="19" ></textarea>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Betingelse Link </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="betingelse_lenke" class="form-control" >

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" name="submit" value="Legg til betingelse" class="btn btn-primary form-control" >

</div>

</div>

</form>

</div>

</div>


</div>

</div>


<?php

if(isset($_POST['submit'])){

$betingelse_tittel = $_POST['betingelse_tittel'];

$betingelse_beskrivelse = $_POST['betingelse_beskrivelse'];

$betingelse_lenke = $_POST['betingelse_lenke'];

$legg_til_betingelse = "insert into betingelser (betingelse_tittel,betingelse_lenke,betingelse_beskrivelse) values ('$betingelse_tittel','$betingelse_lenke','$betingelse_beskrivelse')";

$run_betingelse = mysqli_query($con,$legg_til_betingelse);

if($run_betingelse){

echo "<script>alert('Ny betingelse er blitt lagt til')</script>";

echo "<script>window.open('index.php?se_betingelser','_self')</script>";

}

}


?>


<?php } ?>