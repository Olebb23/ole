<?php



if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<!-- <h1 class="page-header">Dashboard</h1> -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-tasks fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_produkter; ?> </div>

<div>Produkter</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?se_produkter">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> Se Detaljer </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-green"><!-- panel panel-green Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-comments fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_kunder; ?> </div>

<div>Kunder</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?se_kunder">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> Se Detaljer </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-green Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-shopping-cart fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_p_kategorier; ?> </div>

<div>Kategorier</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?se_kategorier">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> Se Detaljer </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-yellow Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-red"> 

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-support fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_totale_bestillinger; ?> </div>

<div>Bestillinger</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?se_bestillinger">

<div class="panel-footer">

<span class="pull-left"> Se Detaljer </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div>

</a>

</div>

</div>


</div>

<div class="row">
    <div class="col-lg-3 col-md-6">

        <div class="panel panel-success"> 
        
        <div class="panel-heading">
        
        <div class="row">
        
        <div class="col-xs-3">
        
        <i class="fa fa-dollar fa-5x"> </i>
        
        </div>
        
        <div class="col-xs-9 text-right">
        
        <div class="huge"> <?php echo $count_totale_inntjeninger ?> </div>
        
        <div>Inntjening</div>
        
        </div>
        
        </div>
        
        </div>
        
        <a href="index.php?se_bestillinger">
        
        <div class="panel-footer">
        
        <span class="pull-left"> Se Detaljer </span>
        
        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
        
        <div class="clearfix"></div>
        
        </div>
        
        </a>
        
        </div>
        
        </div>


        <div class="col-lg-3 col-md-6">

            <div class="panel panel-warning"> 
            
            <div class="panel-heading">
            
            <div class="row">
            
            <div class="col-xs-3">
            
            <i class="fa fa-spinner fa-5x"> </i>
            
            </div>
            
            <div class="col-xs-9 text-right">
            
            <div class="huge"> <?php echo $count_ventende_bestillinger ?> </div>
            
            <div>Ventende Bestillinger</div>
            
            </div>
            
            </div>
            
            </div>
            
            <a href="index.php?se_bestillinger">
            
            <div class="panel-footer">
            
            <span class="pull-left"> Se Detaljer </span>
            
            <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
            
            <div class="clearfix"></div>
            
            </div>
            
            </a>
            
            </div>
            
            </div>



            <div class="col-lg-3 col-md-6">

                <div class="panel panel-info"> 
                
                <div class="panel-heading">
                
                <div class="row">
                
                <div class="col-xs-3">
                
                <i class="fa fa-check fa-5x"> </i>
                
                </div>
                
                <div class="col-xs-9 text-right">
                
                <div class="huge"> <?php echo $count_ferdige_bestillinger ?> </div>
                
                <div>Ferdige Bestillinger</div>
                
                </div>
                
                </div>
                
                </div>
                
                <a href="index.php?se_bestillinger">
                
                <div class="panel-footer">
                
                <span class="pull-left"> Se Detaljer </span>
                
                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                
                <div class="clearfix"></div>
                
                </div>
                
                </a>
                
                </div>
                
                </div>



                <div class="col-lg-3 col-md-6">

                    <div class="panel panel-danger">
                    
                    <div class="panel-heading">
                    
                    <div class="row">
                    
                    <div class="col-xs-3">
                    
                    <i class="fa fa-percent fa-5x"> </i>
                    
                    </div>
                    
                    <div class="col-xs-9 text-right">
                    
                    <div class="huge"> <?php echo $count_coupons; ?> </div>
                    
                    <div>Dekk Kalkulator</div>
                    
                    </div>
                    
                    </div>
                    
                    </div>
                    
                    <a href="index.php?se_bestillinger">
                    
                    <div class="panel-footer">
                    
                    <span class="pull-left"> Se Detaljer </span>
                    
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    
                    <div class="clearfix"></div>
                    
                    </div>
                    
                    </a>
                    
                    </div>
                    
                    </div>
</div>

<div class="row" >

<div class="col-lg-12" >

<div class="panel panel-primary" >

<div class="panel-heading" >

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Nye Bestillinger

</h3>

</div>

<div class="panel-body" >

<div class="table-responsive" >

<table class="table table-bbestillinged table-hover table-striped" >

<thead>

<tr>
<th>Bestilling #</th>
<th>Kunde</th>
<th>Faktura nr</th>
<th>Produkt ID</th>
<th>Antall</th>
<th>Type</th>
<th>Status</th>


</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_bestilling = "select * from ventende_bestillinger order by 1 DESC LIMIT 0,5";
$run_bestilling = mysqli_query($con,$get_bestilling);

while($row_bestilling=mysqli_fetch_array($run_bestilling)){


$bestillings_id = $row_bestilling['bestillings_id'];

$k_id = $row_bestilling['kunde_id'];

$faktura_nr = $row_bestilling['faktura_nr'];

$produkt_id = $row_bestilling['produkt_id'];

$antall = $row_bestilling['antall'];


$bestillings_status = $row_bestilling['bestillings_status'];


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

<td><?php echo $faktura_nr; ?></td>
<td><?php echo $produkt_id; ?></td>
<td><?php echo $antall; ?></td>
<td>
<?php
if($bestillings_status=='avventer'){

echo $bestillings_status='avventer';

}
else {

echo $bestillings_status='Ferdig';

}

?>
</td>

</tr>

<?php } ?>

</tbody>


</table>

</div>

<div class="text-right" >

<a href="index.php?se_bestillinger" >

Se Alle bestillinge <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->


</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-8 Ends -->

<div class="col-md-4"><!-- col-md-4 Starts -->

<div class="panel">



</div>

</div>

</div>

<?php } ?>