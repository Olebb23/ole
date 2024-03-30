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

<i class="fa fa-dashboard" ></i> Dashboard / Se Kategorier

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-tittel" >

<i class="fa fa-money fa-fw"></i> Se Kategorier

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Kategori Navn</th>
<th>Slett</th>
<th>Rediger</th>



</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php 

$i=0;

$get_kategorier = "select * from kategorier";

$run_kategorier = mysqli_query($con,$get_kategorier);

while($row_kategorier = mysqli_fetch_array($run_kategorier)){

$kat_id = $row_kategorier['kat_id'];

$kat_tittel = $row_kategorier['kat_tittel'];


$i++;



?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $kat_tittel; ?></td>


<td>

<a href="index.php?slett_kat=<?php echo $kat_id; ?>" >

<i class="fa fa-trash-o" ></i> Slett

</a>

</td>

<td>

<a href="index.php?rediger_kat=<?php echo $kat_id; ?>" >

<i class="fa fa-pencil" ></i> Rediger

</a>

</td>

</tr>


<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table-bordered table-hover table-striped Ends -->


</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php } ?><?php



