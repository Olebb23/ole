<?php


if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>


<?php

$get_kontakt_oss = "select * from kontakt_oss";

$run_kontakt_oss = mysqli_query($con,$get_kontakt_oss);

$row_kontakt_oss = mysqli_fetch_array($run_kontakt_oss);

$kontakt_epost = $row_kontakt_oss['kontakt_epost'];

$kontakt_overskrift = $row_kontakt_oss['kontakt_overskrift'];

$kontakt_beskrivelse = $row_kontakt_oss['kontakt_beskrivelse'];



?>



<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Dashboard / Rediger Kontakt Oss

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-overskrift Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Rediger Kontakt Oss 

</h3>

</div><!-- panel-overskrift Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Kontakt Epost: </label>

<div class="col-md-6">

<input type="text" name="kontakt_epost" class="form-control" value="<?php echo $kontakt_epost; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Kontakt Overskrift: </label>

<div class="col-md-6">

<input type="text" name="kontakt_overskrift" class="form-control" value="<?php echo $kontakt_overskrift; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Kontakt Beskrivelse: </label>

<div class="col-md-6">

<textarea name="kontakt_beskrivelse" class="form-control" rows="6" cols="19">
<?php echo $kontakt_beskrivelse; ?>
</textarea>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" class="btn btn-primary form-control" value=" Oppdater kontakt oss ">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php

if(isset($_POST['submit'])){

$kontakt_epost = $_POST['kontakt_epost'];

$kontakt_overskrift = $_POST['kontakt_overskrift'];

$kontakt_beskrivelse = $_POST['kontakt_beskrivelse'];


$oppdater_kontakt_oss = "update kontakt_oss set kontakt_epost='$kontakt_epost',kontakt_overskrift='$kontakt_overskrift',kontakt_beskrivelse='$kontakt_beskrivelse'";

$run_kontakt_oss = mysqli_query($con,$oppdater_kontakt_oss);

if($run_kontakt_oss){

echo "<script>alert('Kontakt oss side er blitt oppdatert')</script>";

echo "<script>window.open('index.php?dashboard','_self')</script>";

}

}

?>


<?php } ?>