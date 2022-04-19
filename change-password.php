<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['ccmsaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
{
$adminid=$_SESSION['ccmsaid'];
$cpassword=md5($_POST['currentpassword']);
$newpassword=md5($_POST['newpassword']);
$query=mysqli_query($con,"select ID from tbladmin where ID='$adminid' and   Fjalekalimi='$cpassword'");
$row=mysqli_fetch_array($query);
if($row>0){
$ret=mysqli_query($con,"update tbladmin set Fjalekalimi='$newpassword' where ID='$adminid'");
$msg= '<div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Fjalëkalimi i juaj eshte ndryshuar me sukses
</div>';
} else {

$msg= '<div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Fjalëkalimi i vjeter eshte gabim
</div>';
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

<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('Passwordi i ri dhe Passwordi i konfirumuar nuk perputhen');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
}   

</script>

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
                        <h1 class="page-head-line">Ndryshimi i Fjalekalimit  
                            <!--  Back Button
                         <a href="dashboard.php" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-arrow-left"></i>&nbsp;Back </a>     
                            -->
                                            </h1>
                     
                    </div>
                </div>

       <script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
         <?php if($msg){
    echo $msg;
  }  ?>
                <div class="row">
                

                
                 
                    <div class="col-sm-8 col-sm-offset-2">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                                 Ndrysho Fjalekalimin </div>
                                 <form name="changepassword" method="post" onsubmit="return checkpass();" action="" class="form-horizontal">
                                 </p>
                            <div class="card-body card-block">
 <?php
$adminid=$_SESSION['ccmsaid'];
$ret=mysqli_query($con,"select * from tbladmin where ID='$adminid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                             <div class="panel-body">
                        <fieldset class="scheduler-border">
                            
                                <div class="form-group">
                                    <label for="company" class="col-sm-4 control-label">Fjalekalimi i vjeter
                                    </label>
                                    <div class="col-sm-5">
                                    <input type="password" name="currentpassword" id="currentpassword" class="form-control" required="">
                                </div>
                                </div>
                                    <div class="form-group">
                                        <label for="vat" class="col-sm-4 control-label">Fjalekalimi i ri</label>
                                         <div class="col-sm-5">
                                        <input type="password" name="newpassword"  class="form-control" required="">
                                    </div>
                                </div>
                                        <div class="form-group">
                                            <label for="street" class="col-sm-4 control-label">Konfirmo Fjalekalimin
                                            </label>
                                             <div class="col-sm-5">
                                            <input type="password" name="confirmpassword" id="confirmpassword" value=""  class="form-control">
                                        </div>
                                    </div>
                                                                                                
                                                   
                                                    <?php } ?>
                                                 <div class="form-group">
                                                    <div class="col-sm-9 col-sm-offset-4">
                                                    <button type="submit" class="btn btn-primary" name="submit" id="submit">Ndrysho</button>
                                                        
                                                    </div>
                                                </div>
                                             </div>
                            </form>


                                            
                        </div>
                            </div>
            
            
                </div>
               

                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>

                             </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
</body>
</html>
<?php }  ?>