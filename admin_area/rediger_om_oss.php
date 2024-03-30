<?php
// Sjekk om en administrator er logget inn
if (!isset($_SESSION['admin_epost'])) {
    // Hvis ikke, omdiriger til innloggingssiden
    echo "<script>window.open('login.php','_self')</script>";
    exit; // Avslutt skriptet etter omdirigering
} else {
    // Hvis administrator er logget inn, fortsett med resten av skriptet
?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'#om_beskrivelse' });</script>
<?php
    // Henter informasjon om "Om Oss" siden fra databasen
    $get_om_oss = "SELECT * FROM om_oss";
    $run_om_oss = mysqli_query($con, $get_om_oss);
    $row_om_oss = mysqli_fetch_array($run_om_oss);
    $om_overskrift = $row_om_oss['om_overskrift'];
    $om_kort_beskrivelse = $row_om_oss['om_kort_beskrivelse'];
    $om_beskrivelse = $row_om_oss['om_beskrivelse'];
?> 
<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts --> 
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Rediger Om Oss
            </li>
        </ol><!-- breadcrumb Ends -->
    </div><!-- col-lg-12 Ends --> 
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <div class="panel panel-default"><!-- panel panel-default Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Rediger Om Oss
                </h3>
            </div><!-- panel-heading Ends -->
            <div class="panel-body"><!-- panel-body Starts -->
                <form method="post" class="form-horizontal"><!-- form-horizontal Starts -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">Om Oss Overskrift:</label>
                        <div class="col-md-8">
                            <input type="text" name="om_overskrift" class="form-control" value="<?php echo $om_overskrift; ?>">
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">Om Oss Kort Beskrivelse:</label>
                        <div class="col-md-8">
                            <textarea name="om_kort_beskrivelse" class="form-control" rows="5"><?php echo $om_kort_beskrivelse; ?></textarea>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label">Om Oss Beskrivelse:</label>
                        <div class="col-md-8">
                            <textarea name="om_beskrivelse" id="om_beskrivelse" class="form-control" rows="10"><?php echo $om_beskrivelse; ?></textarea>
                        </div>
                    </div><!-- form-group Ends -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" name="submit" value="Oppdater om oss side" class="btn btn-primary form-control">
                        </div>
                    </div><!-- form-group Ends -->
                </form><!-- form-horizontal Ends -->
            </div><!-- panel-body Ends -->
        </div><!-- panel panel-default Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<?php
    
    if(isset($_POST['submit'])) {
        // Hent data fra skjemaet
        $om_overskrift = $_POST['om_overskrift'];
        $om_kort_beskrivelse = $_POST['om_kort_beskrivelse'];
        $om_beskrivelse = $_POST['om_beskrivelse'];
        
        $oppdater_om_oss = "UPDATE om_oss SET om_overskrift='$om_overskrift', om_kort_beskrivelse='$om_kort_beskrivelse', om_beskrivelse='$om_beskrivelse'";
        $run_om_oss = mysqli_query($con, $oppdater_om_oss);
        
        if($run_om_oss) {
            echo "<script>alert('Om oss siden er blitt oppdatert')</script>";
            echo "<script>window.open('index.php?dashboard','_self')</script>";
        } else {
            
            echo "<script>alert('Feil ved oppdatering av Om oss siden')</script>";
        }
    }
?>
<?php } ?>
