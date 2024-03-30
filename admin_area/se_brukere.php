<?php



if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard" ></i> Dashboard / Se Brukere

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Se Brukere

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Brukernavn</th>

<th>epost</th>

<th>Bilde</th>

<th>Land</th>

<th>jobbb</th>

<th>Slett</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$get_admin = "select * from administratorer";

$run_admin = mysqli_query($con,$get_admin);

while($row_admin = mysqli_fetch_array($run_admin)){

$admin_id = $row_admin['admin_id'];

$admin_navn = $row_admin['admin_navn'];

$admin_epost = $row_admin['admin_epost'];

$admin_bilde = $row_admin['admin_bilde'];

$admin_land = $row_admin['admin_land'];

$admin_jobb = $row_admin['admin_jobb'];





?>

<tr>

<td><?php echo $admin_navn; ?></td>

<td><?php echo $admin_epost; ?></td>

<td><img src="admin_bilder/<?php echo $admin_bilde; ?>" width="60" height="60" ></td>

<td><?php echo $admin_land; ?></td>

<td><?php echo $admin_jobb; ?></td>

<td>

<a href="index.php?bruker_slett=<?php echo $admin_id; ?>" >

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





<?php }  ?>