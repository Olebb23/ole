<?php



if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / Se betingelser
</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Se betingelser

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<?php

$get_betingelser = "select * from betingelser";

$run_betingelser = mysqli_query($con,$get_betingelser);

while($row_betingelser = mysqli_fetch_array($run_betingelser)){

$betingelse_id = $row_betingelser['betingelse_id'];

$betingelse_tittel = $row_betingelser['betingelse_tittel'];

$betingelse_beskrivelse = substr($row_betingelser['betingelse_beskrivelse'],0,400);

?>

<div class="col-lg-4 col-md-4"><!-- col-lg-4 col-md-4 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title" align="center"><!-- panel-tittel Starts -->

<?php echo $betingelse_tittel; ?>

</h3><!-- panel-tittel Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<?php echo $betingelse_beskrivelse; ?>

</div><!-- panel-body Ends -->

<div class="panel-footer"><!-- panel-footer Starts -->

<a href="index.php?slett_betingelse=<?php echo $betingelse_id; ?>" class="pull-left">

<i class="fa fa-trash-o"></i> Slett

</a>


<a href="index.php?rediger_betingelse=<?php echo $betingelse_id; ?>" class="pull-right">

<i class="fa fa-pencil"></i> Rediger

</a>


<div class="clearfix"> </div>

</div><!-- panel-footer Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-4 col-md-4 Ends -->

<?php } ?>

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php } ?>