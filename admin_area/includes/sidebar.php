<?php


if(!isset($_SESSION['admin_epost'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<nav class="navbar navbar-inverse navbar-fixed-top" >

<div class="navbar-header" >

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" >


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button>

<a class="navbar-brand" href="index.php?dashboard" >Admin Panel</a>


</div>

<ul class="nav navbar-right top-nav" >

<li class="dropdown" >

<a href="#" class="dropdown-toggle" data-toggle="dropdown" >

<i class="fa fa-user" ></i>

<?php echo $admin_navn; ?> <b class="caret" ></b>


</a>

<ul class="dropdown-menu" >

<li>

<a href="index.php?bruker_profil=<?php echo $admin_id; ?>" >

<i class="fa fa-fw fa-user" ></i> Profil


</a>

</li>

<li>

<a href="index.php?se_produkter" >

<i class="fa fa-fw fa-envelope" ></i> Produkter

<span class="badge" ><?php echo $count_produkter; ?></span>


</a>

</li>

<li>

<a href="index.php?se_kunder" >

<i class="fa fa-fw fa-gear" ></i> Kunder

<span class="badge" ><?php echo $count_kunder; ?></span>


</a>

</li>

<li>



</a>

</li>

<li class="divider"></li>

<li>

<a href="logout.php">

<i class="fa fa-fw fa-power-off"> </i> Logg ut

</a>

</li>

</ul>




</li>


</ul>

<div class="collapse navbar-collapse navbar-ex1-collapse">

<ul class="nav navbar-nav side-nav">
<li>

<a href="index.php?dashboard">

<i class="fa fa-fw fa-dashboard"></i> Dashboard

</a>

</li>

<li>

<a href="#" data-toggle="collapse" data-target="#produkter">

<i class="fa fa-fw fa-table"></i> Produkter
<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="produkter" class="collapse">

<li>
<a href="index.php?legg_til_produkt"> Legg Til Produkter </a>
</li>

<li>
<a href="index.php?se_produkter"> Se Produkter </a>
</li>


</ul>

</li>


<li>

<a href="#" data-toggle="collapse" data-target="#produsenter">

<i class="fa fa-fw fa-briefcase"></i> Produsenter

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="produsenter" class="collapse">

<li>
<a href="index.php?legg_til_produsent"> Legg Til Produsent </a>
</li>

<li>
<a href="index.php?se_produsenter"> Se Produsenter </a>
</li>

</ul>


</li>




<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#kat">

<i class="fa fa-fw fa-arrows-v"></i> Kategorier

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="kat" class="collapse">

<li>
<a href="index.php?legg_til_kat"> Legg Til Kategorier </a>
</li>

<li>
<a href="index.php?se_kategorier"> Se Kategorier </a>
</li>


</ul>

</li>






<li>

<a href="#" data-toggle="collapse" data-target="#kontakt_oss">

<i class="fa fa-fw fa-pencil"> </i> Kontakt Oss

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="kontakt_oss" class="collapse">

<li>

<a href="index.php?rediger_kontakt_oss"> Rediger Kontakt Oss </a>

</li>

<li>

<a href="index.php?legg_til_foresporsel"> Legg Til Forespørsel Type </a>

</li>

<li>

<a href="index.php?se_foresporsel"> Se Forespørsel Typer </a>

</li>

</ul>

</li>

<li>

<a href="index.php?rediger_om_oss">

<i class="fa fa-fw fa-edit"></i> Rediger Om Oss

</a>

</li>



<li>

<a href="#" data-toggle="collapse" data-target="#betingelse" >

<i class="fa fa-fw fa-table"></i> Betingelser

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="betingelse" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?legg_til_betingelse"> Legg Til Betingelser </a> 
</li>

<li>
<a href="index.php?se_betingelser"> Se Betingelse </a> 
</li>

</ul><!-- ul collapse Ends -->


</li><!-- betingelser li Ends -->



<li>

<a href="index.php?se_kunder">

<i class="fa fa-fw fa-edit"></i> Se Kunder

</a>

</li>

<li>

<a href="index.php?se_bestillinger">

<i class="fa fa-fw fa-list"></i> Se Bestillinger

</a>

</li>

<li>

<a href="index.php?se_betalinger">

<i class="fa fa-fw fa-pencil"></i> Se Betalinger

</a>

</li>

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#brukere">

<i class="fa fa-fw fa-gear"></i> Brukere

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="brukere" class="collapse">

<li>
<a href="index.php?legg_til_bruker"> Legg Til Bruker </a>
</li>

<li>
<a href="index.php?se_brukere"> Se Brukere </a>
</li>

<li>
<a href="index.php?bruker_profil=<?php echo $admin_id; ?>"> Rediger Profil </a>
</li>

</ul>

</li>

<li>

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Logg ut

</a>

</li>

</ul>

</div>

</nav>

<?php } ?>