<?php



if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Se Produsenter
</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Se Produsenter

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts --->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Produsent</th>
<th>Slett</th>
<th>Rediger</th>

</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_produsenter = "select * from produsenter";

$run_produsenter = mysqli_query($con,$get_produsenter);

while($row_produsenter = mysqli_fetch_array($run_produsenter)){

$produsent_id = $row_produsenter['produsent_id'];

$produsent_tittel = $row_produsenter['produsent_tittel'];

$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $produsent_tittel; ?></td>

<td>

<a href="index.php?slett_produsent=<?php echo $produsent_id; ?>">

<i class="fa fa-trash-o"></i> Slett
</a>

</td>

<td>

<a href="index.php?rediger_produsent=<?php echo $produsent_id; ?>">

<i class="fa fa-pencil"></i> Rediger

</a>

</td>

</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table>

</div><!-- table-responsive Ends --->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php } ?>