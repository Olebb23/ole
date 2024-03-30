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

<i class="fa fa-dashboard"></i> Dashboard / Se Kunder

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> Se Kunder

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->


<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Navn</th>
<th>epost</th>
<th>Bilde</th>
<th>Land</th>
<th>By</th>
<th>Mobilnr</th>
<th>Slett</th>


</tr>

</thead><!-- thead Ends -->


<tbody><!-- tbody Starts -->

<?php

$i=0;

$get_k = "select * from kunder";

$run_k = mysqli_query($con,$get_k);

while($row_k=mysqli_fetch_array($run_k)){

$k_id = $row_k['kunde_id'];

$k_navn = $row_k['kunde_navn'];

$k_epost = $row_k['kunde_epost'];

$k_bilde = $row_k['kunde_bilde'];

$k_land = $row_k['kunde_land'];

$k_by = $row_k['kunde_by'];

$k_kontakt = $row_k['kunde_kontakt'];

$i++;




?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $k_navn; ?></td>

<td><?php echo $k_epost; ?></td>

<td><img src="../kunde/kunde_bilder/<?php echo $k_bilde; ?>" width="60" height="60" ></td>

<td><?php echo $k_land; ?></td>

<td><?php echo $k_by; ?></td>

<td><?php echo $k_kontakt; ?></td>

<td>

<a href="index.php?customer_delete=<?php echo $k_id; ?>" >

<i class="fa fa-trash-o" ></i> Slett

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