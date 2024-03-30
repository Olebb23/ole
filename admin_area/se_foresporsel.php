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

<i class="fa fa-dashboard" ></i> Dashboard / Se Forespørsels-Typer

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Se Forespørsels-Typer

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>

<th>#</th>

<th>Forespørsel Overskrift</th>

<th>Slett</th>

<th>Rediger</th>

</tr>

</thead>

<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_foresporselstyper = "select * from foresporselstyper";

$run_foresporselstyper = mysqli_query($con,$get_foresporselstyper);

while($row_foresporselstyper = mysqli_fetch_array($run_foresporselstyper)){

$foresporsel_id = $row_foresporselstyper['foresporsel_id'];

$foresporsel_overskrift = $row_foresporselstyper['foresporsel_overskrift'];

$i++;

?>

<tr>

<td> <?php echo $i; ?> </td>

<td> <?php echo $foresporsel_overskrift; ?> </td>

<td>

<a href="index.php?slett_foresporsel=<?php echo $foresporsel_id; ?>">

<i class="fa fa-trash-o"> </i> Slett

</a>

</td>


<td>

<a href="index.php?rediger_foresporsel=<?php echo $foresporsel_id; ?>">

<i class="fa fa-pencil"> </i> Rediger
</a>

</td>


</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->



<?php } ?>