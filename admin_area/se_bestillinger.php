<?php


if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starter -->

<div class="col-lg-12"><!-- col-lg-12 Starter -->

<ol class="breadcrumb"><!-- breadcrumb Starter  --->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Se Bestillinger

</li>

</ol><!-- breadcrumb Slutter  --->

</div><!-- col-lg-12 Slutter -->

</div><!-- 1 row Slutter -->


<div class="row"><!-- 2 row Starter -->

<div class="col-lg-12"><!-- col-lg-12 Starter -->

<div class="panel panel-default"><!-- panel panel-default Starter -->

<div class="panel-heading"><!-- panel-heading Starter -->

<h3 class="panel-title"><!-- panel-title Starter -->

<i class="fa fa-money fa-fw"></i> Se Bestillinger

</h3><!-- panel-title Slutter -->

</div><!-- panel-heading Slutter -->

<div class="panel-body"><!-- panel-body Starter -->

<div class="table-responsive"><!-- table-responsive Starter -->

<table class="table table-bbestillinged table-hover table-striped"><!-- table table-bbestillinged table-hover table-striped Starter -->

<thead><!-- thead Starter -->

<tr>

<th>#</th>
<th>Kunde</th>
<th>Fakturanr</th>
<th>Produkt</th>
<th>Antall</th>
<th>Bestillingsdato</th>
<th>Total Sum</th>
<th>Status</th>
<th>Slett</th>


</tr>

</thead><!-- thead Slutter -->


<tbody><!-- tbody Starter -->

<?php

$i = 0;

$get_bestillinger = "select * from ventende_bestillinger";

$run_bestillinger = mysqli_query($con,$get_bestillinger);

while ($row_bestillinger = mysqli_fetch_array($run_bestillinger)) {

$bestillings_id = $row_bestillinger['bestillings_id'];

$k_id = $row_bestillinger['kunde_id'];

$faktura_nr = $row_bestillinger['faktura_nr'];

$produkt_id = $row_bestillinger['produkt_id'];

$antall = $row_bestillinger['antall'];

$bestillings_status = $row_bestillinger['bestillings_status'];

$get_produkter = "select * from produkter where produkt_id='$produkt_id'";

$run_produkter = mysqli_query($con,$get_produkter);

$row_produkter = mysqli_fetch_array($run_produkter);

$produkt_tittel = $row_produkter['produkt_tittel'];

$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td>
<?php 

$get_kunde = "select * from kunder where kunde_id='$k_id'";

$run_kunde = mysqli_query($con,$get_kunde);

$row_kunde = mysqli_fetch_array($run_kunde);

$kunde_epost = $row_kunde['kunde_epost'];

echo $kunde_epost;

 ?>
 </td>

<td bgcolor="orange" ><?php echo $faktura_nr; ?></td>

<td><?php echo $produkt_tittel; ?></td>

<td><?php echo $antall; ?></td>

<td>
<?php

$get_kunde_bestilling = "select * from kunde_bestillinger where bestillings_id='$bestillings_id'";

$run_kunde_bestilling = mysqli_query($con,$get_kunde_bestilling);

$row_kunde_bestilling = mysqli_fetch_array($run_kunde_bestilling);

$bestillings_dato = $row_kunde_bestilling['bestillings_dato'];

$skyldig_belop = $row_kunde_bestilling['skyldig_belop'];

echo $bestillings_dato;

?>
</td>

<td>$<?php echo $skyldig_belop; ?></td>

<td>
<?php

if($bestillings_status=='avventer'){

echo $bestillings_status='<div style="color:red;">avventer</div>';

}
else{

echo $bestillings_status='Gjennomført';

}


?>
</td>

<td>

<a href="index.php?bestilling_slett=<?php echo $bestillings_id; ?>" >

<i class="fa fa-trash-o" ></i> Slett

</a>

</td>


</tr>

<?php } ?>

</tbody><!-- tbody Slutter -->

</table><!-- table table-bbestillinged table-hover table-striped Slutter -->

</div><!-- table-responsive Slutter -->

</div><!-- panel-body Slutter -->

</div><!-- panel panel-default Slutter -->

</div><!-- col-lg-12 Slutter -->

</div><!-- 2 row Slutter -->


<?php } ?>