<?php

if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['rediger_produkt'])){

$rediger_id = $_GET['rediger_produkt'];

$get_p = "select * from produkter where produkt_id='$rediger_id'";

$run_rediger = mysqli_query($con,$get_p);

$row_rediger = mysqli_fetch_array($run_rediger);

$p_id = $row_rediger['produkt_id'];

$p_tittel = $row_rediger['produkt_tittel'];

$p_kat = $row_rediger['p_kat_id'];

$kat = $row_rediger['kat_id'];

$m_id = $row_rediger['produsent_id'];

$p_image1 = $row_rediger['produkt_img1'];

$p_image2 = $row_rediger['produkt_img2'];

$p_image3 = $row_rediger['produkt_img3'];

$ny_p_image1 = $row_rediger['produkt_img1'];

$ny_p_image2 = $row_rediger['produkt_img2'];

$ny_p_image3 = $row_rediger['produkt_img3'];

$p_pris = $row_rediger['produkt_pris'];

$p_beskrivelse = $row_rediger['produkt_beskrivelse'];

$p_nokkelord = $row_rediger['produkt_nokkelord'];

$psp_pris = $row_rediger['produkt_psp_pris'];

$p_label = $row_rediger['produkt_label'];

$p_link = $row_rediger['produkt_link'];

$p_egenskaper = $row_rediger['produkt_egenskaper'];

$p_video = $row_rediger['produkt_video'];

}

$get_produsent = "select * from produsenter where produsent_id='$m_id'";

$run_produsent = mysqli_query($con,$get_produsent);

$row_produsent = mysqli_fetch_array($run_produsent);

$produsent_id = $row_produsent['produsent_id'];

$produsent_tittel = $row_produsent['produsent_tittel'];


$get_p_kat = "select * from produkt_kategorier where p_kat_id='$p_kat'";

$run_p_kat = mysqli_query($con,$get_p_kat);

$row_p_kat = mysqli_fetch_array($run_p_kat);

$p_kat_tittel = $row_p_kat['p_kat_tittel'];

$get_kat = "select * from kategorier where kat_id='$kat'";

$run_kat = mysqli_query($con,$get_kat);

$row_kat = mysqli_fetch_array($run_kat);

$kat_tittel = $row_kat['kat_tittel'];

?>


<!DOCTYPE html>

<html>

<head>

<tittel> rediger produkter </tittel>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#produkt_beskrivelse,#produkt_egenskaper' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / rediger produkter

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> rediger produkter

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > produkt tittel </label>

<div class="col-md-6" >

<input type="text" name="produkt_tittel" class="form-control" required value="<?php echo $p_tittel; ?>">

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > produkt link </label>

<div class="col-md-6" >

<input type="text" name="produkt_link" class="form-control" required value="<?php echo $p_link; ?>" >

<br>

<p style="font-size:15px; font-weight:bold;">

produkt link eksempel : vinterdekk-produsent-typedekk

</p>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Velg en produsent </label>

<div class="col-md-6" >

<select name="produsent" class="form-control">

<option value="<?php echo $produsent_id; ?>">
<?php echo $produsent_tittel; ?>
</option>

<?php

$get_produsent = "select * from produsenter";

$run_produsent = mysqli_query($con,$get_produsent);

while($row_produsent = mysqli_fetch_array($run_produsent)){

$produsent_id = $row_produsent['produsent_id'];

$produsent_tittel = $row_produsent['produsent_tittel'];

echo "
<option value='$produsent_id'>
$produsent_tittel
</option>
";

}

?>

</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > produkt kategory </label>

<div class="col-md-6" >

<select name="produkt_kat" class="form-control" >

<option value="<?php echo $p_kat; ?>" > <?php echo $p_kat_tittel; ?> </option>


<?php

$get_p_kats = "select * from produkt_kategorier";

$run_p_kats = mysqli_query($con,$get_p_kats);

while ($row_p_kats=mysqli_fetch_array($run_p_kats)) {

$p_kat_id = $row_p_kats['p_kat_id'];

$p_kat_tittel = $row_p_kats['p_kat_tittel'];

echo "<option value='$p_kat_id' >$p_kat_tittel</option>";

}


?>


</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > kategory </label>

<div class="col-md-6" >


<select name="kat" class="form-control" >

<option value="<?php echo $kat; ?>" > <?php echo $kat_tittel; ?> </option>

<?php

$get_kat = "select * from kategorier ";

$run_kat = mysqli_query($con,$get_kat);

while ($row_kat=mysqli_fetch_array($run_kat)) {

$kat_id = $row_kat['kat_id'];

$kat_tittel = $row_kat['kat_tittel'];

echo "<option value='$kat_id'>$kat_tittel</option>";

}

?>


</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > produkt Image 1 </label>

<div class="col-md-6" >

<input type="file" name="produkt_img1" class="form-control" >
<br><img src="produkt_bilder/<?php echo $p_image1; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > produkt Image 2 </label>

<div class="col-md-6" >

<input type="file" name="produkt_img2" class="form-control" >
<br><img src="produkt_bilder/<?php echo $p_image2; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > produkt Image 3 </label>

<div class="col-md-6" >

<input type="file" name="produkt_img3" class="form-control" >
<br><img src="produkt_bilder/<?php echo $p_image3; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > produkt pris </label>

<div class="col-md-6" >

<input type="text" name="produkt_pris" class="form-control" required value="<?php echo $p_pris; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > produkt Sale pris </label>

<div class="col-md-6" >

<input type="text" name="psp_pris" class="form-control" required value="<?php echo $psp_pris; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > produkt nokkelord </label>

<div class="col-md-6" >

<input type="text" name="produkt_nokkelord" class="form-control" required value="<?php echo $p_nokkelord; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > produkt Tabs </label>

<div class="col-md-6" >

<ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

<li class="active">

<a data-toggle="tab" href="#beskrivelse"> produkt beskrivelse </a>

</li>

<li>

<a data-toggle="tab" href="#egenskaper"> produkt egenskaper </a>

</li>

<li>

<a data-toggle="tab" href="#video"> Sounds And Videos </a>

</li>

</ul><!-- nav nav-tabs Ends -->

<div class="tab-content"><!-- tab-content Starts -->

<div id="beskrivelseription" class="tab-pane fade in active"><!-- beskrivelseription tab-pane fade in active Starts -->

<br>

<textarea name="produkt_beskrivelse" class="form-control" rows="15" id="produkt_beskrivelse">

<?php echo $p_beskrivelse; ?>

</textarea>

</div><!-- beskrivelseription tab-pane fade in active Ends -->


<div id="egenskaper" class="tab-pane fade in"><!-- egenskaper tab-pane fade in Starts -->

<br>

<textarea name="produkt_egenskaper" class="form-control" rows="15" id="produkt_egenskaper">

<?php echo $p_egenskaper; ?>

</textarea>

</div><!-- egenskaper tab-pane fade in Ends -->


<div id="video" class="tab-pane fade in"><!-- video tab-pane fade in Starts -->

<br>

<textarea name="produkt_video" class="form-control" rows="15">

<?php echo $p_video; ?>

</textarea>

</div><!-- video tab-pane fade in Ends -->


</div><!-- tab-content Ends -->

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > produkt Label </label>

<div class="col-md-6" >

<input type="text" name="produkt_label" class="form-control" required value="<?php echo $p_label; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="oppdater" value="oppdater produkt" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['oppdater'])){

$produkt_tittel = $_POST['produkt_tittel'];
$produkt_kat = $_POST['produkt_kat'];
$kat = $_POST['kat'];
$produsent_id = $_POST['produsent'];
$produkt_pris = $_POST['produkt_pris'];
$produkt_beskrivelse = $_POST['produkt_beskrivelse'];
$produkt_nokkelord = $_POST['produkt_nokkelord'];

$psp_pris = $_POST['psp_pris'];

$produkt_label = $_POST['produkt_label'];

$produkt_link = $_POST['produkt_link'];

$produkt_egenskaper = $_POST['produkt_egenskaper'];

$produkt_video = $_POST['produkt_video'];

$status = "produkt";

$produkt_img1 = $_FILES['produkt_img1']['name'];
$produkt_img2 = $_FILES['produkt_img2']['name'];
$produkt_img3 = $_FILES['produkt_img3']['name'];

$temp_name1 = $_FILES['produkt_img1']['tmp_name'];
$temp_name2 = $_FILES['produkt_img2']['tmp_name'];
$temp_name3 = $_FILES['produkt_img3']['tmp_name'];

if(empty($produkt_img1)){

$produkt_img1 = $ny_p_image1;

}


if(empty($produkt_img2)){

$produkt_img2 = $ny_p_image2;

}

if(empty($produkt_img3)){

$produkt_img3 = $ny_p_image3;

}


move_uploaded_file($temp_name1,"produkt_bilder/$produkt_img1");
move_uploaded_file($temp_name2,"produkt_bilder/$produkt_img2");
move_uploaded_file($temp_name3,"produkt_bilder/$produkt_img3");

$oppdater_produkt = "update produkter set p_kat_id='$produkt_kat',kat_id='$kat',produsent_id='$produsent_id',date=NOW(),produkt_tittel='$produkt_tittel',produkt_link='$produkt_link',produkt_img1='$produkt_img1',produkt_img2='$produkt_img2',produkt_img3='$produkt_img3',produkt_pris='$produkt_pris',produkt_psp_pris='$psp_pris',produkt_beskrivelse='$produkt_beskrivelse',produkt_egenskaper='$produkt_egenskaper',produkt_video='$produkt_video',produkt_nokkelord='$produkt_nokkelord',produkt_label='$produkt_label',status='$status' where produkt_id='$p_id'";

$run_produkt = mysqli_query($con,$oppdater_produkt);

if($run_produkt){

echo "<script> alert('produkt er oppdatert') </script>";

echo "<script>window.open('index.php?se_produkter','_self')</script>";

}

}

?>

<?php } ?>
