<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / Se Produkter

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-tittel" ><!-- panel-tittel Starts -->

<i class="fa fa-money fa-fw" ></i> Se Produkter

</h3><!-- panel-tittel Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>#</th>
<th>Navn</th>
<th>Bilde</th>
<th>Pris</th>
<th>Solgt</th>
<th>nokkelord</th>
<th>Dato</th>
<th>Slett</th>
<th>Endre</th>



</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_pro = "select * from produkter where status='produkt'";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['produkt_id'];

$pro_tittel = $row_pro['produkt_tittel'];

$pro_bilde = $row_pro['produkt_img1'];

$pro_pris = $row_pro['produkt_pris'];

$pro_nokkelord = $row_pro['produkt_nokkelord'];

$pro_dato = $row_pro['dato'];

$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $pro_tittel; ?></td>

<td><img src="produkt_bilder/<?php echo $pro_bilde; ?>" width="60" height="60"></td>

<td>$ <?php echo $pro_pris; ?></td>

<td>
<?php

$get_solgt = "select * from ventende_bestillinger where produkt_id='$pro_id'";
$run_solgt = mysqli_query($con,$get_solgt);
$count = mysqli_num_rows($run_solgt);
echo $count;
?>
</td>

<td> <?php echo $pro_nokkelord; ?> </td>

<td><?php echo $pro_dato; ?></td>

<td>

<a href="index.php?slett_produkt=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Slett

</a>

</td>

<td>

<a href="index.php?rediger_produkt=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Endre

</a>

</td>

</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->




<?php } ?>