<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<?php

$admin_session = $_SESSION['admin_epost'];

$get_admin = "select * from administratorer  where admin_epost='$admin_session'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['admin_id'];

$admin_navn = $row_admin['admin_navn'];

$admin_epost = $row_admin['admin_epost'];

$admin_bilde = $row_admin['admin_bilde'];

$admin_land = $row_admin['admin_land'];

$admin_jobb = $row_admin['admin_jobb'];

$admin_kontakt = $row_admin['admin_kontakt'];

$admin_om = $row_admin['admin_om'];


$get_produkter = "SELECT * FROM produkter";
$run_produkter = mysqli_query($con,$get_produkter);
$count_produkter = mysqli_num_rows($run_produkter);

$get_kunder = "SELECT * FROM kunder";
$run_kunder = mysqli_query($con,$get_kunder);
$count_kunder = mysqli_num_rows($run_kunder);

$get_p_kategorier = "SELECT * FROM produkt_kategorier";
$run_p_kategorier = mysqli_query($con,$get_p_kategorier);
$count_p_kategorier = mysqli_num_rows($run_p_kategorier);


$get_totale_bestillinger = "SELECT * FROM kunde_bestillinger";
$run_totale_bestillinger = mysqli_query($con,$get_totale_bestillinger);
$count_totale_bestillinger = mysqli_num_rows($run_totale_bestillinger);


$get_ventende_bestillinger = "SELECT * FROM kunde_bestillinger WHERE bestillings_status='avventer'";
$run_ventende_bestillinger = mysqli_query($con,$get_ventende_bestillinger);
$count_ventende_bestillinger = mysqli_num_rows($run_ventende_bestillinger);

$get_ferdige_bestillinger = "SELECT * FROM kunde_bestillinger WHERE bestillings_status='Ferdig'";
$run_ferdige_bestillinger = mysqli_query($con,$get_ferdige_bestillinger);
$count_ferdige_bestillinger = mysqli_num_rows($run_ferdige_bestillinger);


$get_totale_inntjeninger = "SELECT SUM( skyldig_belop) as Total FROM kunde_bestillinger WHERE bestillings_status = 'Ferdig'";
$run_totale_inntjeninger = mysqli_query($con, $get_totale_inntjeninger);
$row = mysqli_fetch_assoc($run_totale_inntjeninger);                       
$count_totale_inntjeninger = $row['Total'];


$get_coupons = "SELECT * FROM coupons";
$run_coupons = mysqli_query($con,$get_coupons);
$count_coupons = mysqli_num_rows($run_coupons);


?>


<!DOCTYPE html>
<html>

<head>

<title>Admin Panel</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
<link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/2484/9148/files/SDQSDSQ_32x32.png?v=1511436147" type="bilde/png">

</head>

<body>

<div id="wrapper">

<?php include("includes/sidebar.php");  ?>

<div id="page-wrapper">

<div class="container-fluid">

<?php

if(isset($_GET['dashboard'])){

include("dashboard.php");

}

if(isset($_GET['legg_til_produkt'])){

include("legg_til_produkt.php");

}

if(isset($_GET['se_produkter'])){

include("se_produkter.php");

}

if(isset($_GET['slett_produkt'])){

include("slett_produkt.php");

}

if(isset($_GET['rediger_produkt'])){

include("rediger_produkt.php");

}

if(isset($_GET['legg_til_p_kat'])){

include("legg_til_p_kat.php");

}

if(isset($_GET['se_p_kategorier'])){

include("se_p_kategorier.php");

}

if(isset($_GET['slett_p_kat'])){

include("slett_p_kat");

}

if(isset($_GET['rediger_p_kat'])){

include("rediger_p_kat.php");

}

if(isset($_GET['legg_til_kat'])){

include("legg_til_kat.php");

}

if(isset($_GET['se_kategorier'])){

include("se_kategorier.php");

}

if(isset($_GET['slett_kat'])){

include("slett_kat.php");

}

if(isset($_GET['rediger_kat'])){

include("rediger_kat.php");

}

if(isset($_GET['legg_til_slide'])){

include("legg_til_slide.php");

}


if(isset($_GET['se_slides'])){

include("se_slides.php");

}

if(isset($_GET['slett_slide'])){

include("slett_slide.php");

}


if(isset($_GET['rediger_slide'])){

include("rediger_slide.php");

}


if(isset($_GET['se_kunder'])){

include("se_kunder.php");

}

if(isset($_GET['kunde_slett'])){

include("kunde_slett.php");

}


if(isset($_GET['se_bestillinger'])){

include("se_bestillinger.php");

}

if(isset($_GET['bestilling_slett'])){

include("bestilling_slett.php");

}


if(isset($_GET['se_betalinger'])){

include("se_betalinger.php");

}

if(isset($_GET['betaling_slett'])){

include("betaling_slett.php");

}

if(isset($_GET['legg_til_bruker'])){

include("legg_til_bruker.php");

}

if(isset($_GET['se_brukere'])){

include("se_brukere.php");

}


if(isset($_GET['bruker_slett'])){

include("bruker_slett.php");

}



if(isset($_GET['bruker_profil'])){

include("bruker_profil.php");

}

if(isset($_GET['insert_box'])){

include("insert_box.php");

}

if(isset($_GET['view_boxes'])){

include("view_boxes.php");

}

if(isset($_GET['delete_box'])){

include("delete_box.php");

}

if(isset($_GET['edit_box'])){

include("edit_box.php");

}

if(isset($_GET['legg_til_betingelse'])){

include("legg_til_betingelse.php");

}

if(isset($_GET['se_betingelser'])){

include("se_betingelser.php");

}

if(isset($_GET['slett_betingelse'])){

include("slett_betingelse.php");

}

if(isset($_GET['rediger_betingelse'])){

include("rediger_betingelse.php");

}

if(isset($_GET['edit_css'])){

include("edit_css.php");

}

if(isset($_GET['legg_til_produsent'])){

include("legg_til_produsent.php");

}

if(isset($_GET['se_produsenter'])){

include("se_produsenter.php");

}

if(isset($_GET['slett_produsent'])){

include("slett_produsent.php");

}

if(isset($_GET['rediger_produsent'])){

include("rediger_produsent.php");

}


if(isset($_GET['insert_coupon'])){

include("insert_coupon.php");

}

if(isset($_GET['se_coupons'])){

include("view_coupons.php");

}

if(isset($_GET['delete_coupon'])){

include("delete_coupon.php");

}


if(isset($_GET['edit_coupon'])){

include("edit_coupon.php");

}


if(isset($_GET['insert_icon'])){

include("insert_icon.php");

}


if(isset($_GET['view_icons'])){

include("view_icons.php");

}

if(isset($_GET['delete_icon'])){

include("delete_icon.php");

}

if(isset($_GET['edit_icon'])){

include("edit_icon.php");

}

if(isset($_GET['insert_bundle'])){

include("insert_bundle.php");

}

if(isset($_GET['view_bundles'])){

include("view_bundles.php");

}

if(isset($_GET['delete_bundle'])){

include("delete_bundle.php");

}


if(isset($_GET['edit_bundle'])){

include("edit_bundle.php");

}


if(isset($_GET['insert_rel'])){

include("insert_rel.php");

}

if(isset($_GET['view_rel'])){

include("view_rel.php");

}

if(isset($_GET['delete_rel'])){

include("delete_rel.php");

}


if(isset($_GET['edit_rel'])){

include("edit_rel.php");

}


if(isset($_GET['rediger_kontakt_oss'])){

include("rediger_kontakt_oss.php");

}

if(isset($_GET['legg_til_foresporsel'])){

include("legg_til_foresporsel.php");

}


if(isset($_GET['se_foresporsel'])){

include("se_foresporsel.php");

}

if(isset($_GET['slett_foresporsel'])){

include("slett_foresporsel.php");

}

if(isset($_GET['rediger_foresporsel'])){

include("rediger_foresporsel.php");

}


if(isset($_GET['rediger_om_oss'])){

include("rediger_om_oss.php");

}


if(isset($_GET['legg_til_butikk'])){

include("legg_til_butikk.php");

}

if(isset($_GET['se_butikk'])){

include("se_butikk.php");

}

if(isset($_GET['slett_butikk'])){

include("slett_butikk.php");

}

if(isset($_GET['rediger_butikk'])){

include("rediger_butikk.php");

}

?>

</div>

</div>

</div>

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>


</body>


</html>

<?php } ?>