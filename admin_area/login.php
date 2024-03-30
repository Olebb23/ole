<?php

session_start();

include("includes/db.php");

?>
<!DOCTYPE HTML>
<html>

<head>

<title>Admin Login</title>

<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="stylesheet" href="css/login.css" >

</head>

<body>

<div class="container" ><!-- container Starts -->

<form class="form-login" action="" method="post" ><!-- form-login Starts -->

<h2 class="form-login-heading" >Admin Login</h2>

<input type="text" class="form-control" name="admin_epost" placeholder="Email Address" required >

<input type="passord" class="form-control" name="admin_passord" placeholder="passord" required >

<button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login" >

Log in

</button>


</form><!-- form-login Ends -->

</div><!-- container Ends -->



</body>

</html>

<?php

if(isset($_POST['admin_login'])){

$admin_epost = mysqli_real_escape_string($con,$_POST['admin_epost']);

$admin_passord = mysqli_real_escape_string($con,$_POST['admin_passord']);

$get_admin = "select * from administratorer where admin_epost='$admin_epost' AND admin_passord='$admin_passord'";

$run_admin = mysqli_query($con,$get_admin);

$count = mysqli_num_rows($run_admin);

if($count==1){

$_SESSION['admin_epost']=$admin_epost;

echo "<script>alert('Du er logget inn')</script>";

echo "<script>window.open('index.php?dashboard','_self')</script>";

}
else {

echo "<script>alert('Epost eller passord er feil')</script>";

}

}

?>