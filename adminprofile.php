<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ccmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $adminid=$_SESSION['ccmsaid'];
    $emri=$_POST['emri'];
    $telefoni=$_POST['telefoni'];
    $email=$_POST['email'];
  
     $query=mysqli_query($con, "update tbladmin set Emri='$emri', Telefoni ='$telefoni', Email= '$email' where ID='$adminid'");
    if ($query) {
    $msg="Admin profile has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }
  ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    
    <title>B4B-KS</title>
   

    <link rel="apple-touch-icon" href="apple-icon.png">
   

    <link rel="icon" href="images/b4b.png"> 
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
     <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <?php include_once('includes/sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include_once('includes/header.php');?>

       <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">  Profili i Adminit

                                            </h1>
                     
                    </div>
                </div>  

         <script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
                <div class="row">

          <div class="col-sm-10 col-sm-offset-1">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                       <!-- .card -->

                   Profili i Adminit</div>
                            <form name="profile" method="post" action=""  class="form-horizontal">
                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                            <div class="card-body card-block" id="card-body1">
 <?php
$adminid=$_SESSION['ccmsaid'];
$ret=mysqli_query($con,"select * from tbladmin where ID='$adminid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                             <div class="panel-body">
                        <fieldset class="scheduler-border">

                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Emri
                                    </label>
                                    <input type="text" name="emri" value="<?php  echo $row['Emri'];?>" class="form-control" required='true'>
                                </div>

                                 <div class="form-group">
                                    <label for="vat" class=" form-control-label">Perdoruesi</label>
                                    <input type="text" name="useri" value="<?php  echo $row['Useri'];?>" class="form-control" readonly="">
                                 </div>

                                <div class="form-group">
                                    <label for="street" class=" form-control-label">Telefoni
                                    </label>
                                    <input type="text" name="telefoni" value="<?php  echo $row['Telefoni'];?>"  class="form-control" maxlength='10' required='true'>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="city" class=" form-control-label">Email
                                            </label>
                                            <input type="email" name="email" value="<?php  echo $row['Email'];?>" class="form-control" required='true'></div>
                                            </div>
                                                    <div class="col-12">
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Data e regjistrimit te Adminit</label><input type="text" name="" value="<?php  echo $row['AdminRegdate'];?>" readonly="" class="form-control"></div>
                                                        </div>
                                                    </div>
                                                    
                                                    </div>
                                                    <?php } ?>
                                                     <div class="card-footer">
                                                       <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                                                            <i class="fa fa-dot-circle-o"></i> Perditeso
                                                        </button></p>
                                                        
                                                    </div>
                                                </div>
                                                </form>
                                            </div>



                                           
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
<?php }  ?>