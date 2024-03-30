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

<i class="fa fa-dashboard"></i> Dashboard / Se Betalinger

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"> </i> Se Betalinger
</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-hover table-bordered table-striped"><!-- table table-hover table-bordered table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Fakturanr</th>
<th>Sum Betalt</th>
<th>Betalingsmetode</th>
<th>Referanse #</th>
<th>Betalingskode</th>
<th>Betalingsdato</th>
<th>Slett</th>

</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_betalinger = "select * from betalinger";

$run_betalinger = mysqli_query($con,$get_betalinger);

while($row_betalinger = mysqli_fetch_array($run_betalinger)){

$betalings_id = $row_betalinger['betalings_id'];

$faktura_nr = $row_betalinger['faktura_nr'];

$belop = $row_betalinger['belop'];

$betalings_mate = $row_betalinger['betalings_mate'];

$ref_no = $row_betalinger['ref_no'];

$kode = $row_betalinger['kode'];

$betalings_dato = $row_betalinger['betalings_dato'];

$i++;


?>


<tr>

<td><?php echo $i; ?></td>

<td bgcolor="yellow" ><?php echo $faktura_nr; ?></td>

<td>$<?php echo $belop; ?></td>

<td><?php echo $betalings_mate; ?></td>

<td><?php echo $ref_no; ?></td>

<td><?php echo $kode; ?></td>

<td><?php echo $betalings_dato; ?></td>

<td>

<a href="index.php?betaling_slett=<?php echo $betalings_id; ?>" >

<i class="fa fa-trash-o" ></i> Slett

</a>

</td>


</tr>


<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-hover table-bordered table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php } ?>