<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ccmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
$eid=$_GET['editid'];
$cmsaid=$_SESSION['ccmsaid'];
$emri=$_POST['emri'];
$mbiemri=$_POST['mbiemri'];
 $query=mysqli_query($con,"update tblcomputers set Emri='$emri',Mbiemri='$mbiemri' where  ID='$eid'");

    if ($query) {
    $msg="Te dhenat u perditesuan me sukses";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>Zeqa's Caffee</title>
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="icon" href="images/b4b.png"> 
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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
                        <h1 class="page-head-line">Produktet </h1>
                    </div>
                </div>
           
            
        


        <script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
            <div class="row">			
                <div class="col-sm-10 col-sm-offset-1">
                       <!-- .card -->

                       <div class="panel panel-primary">
                        <div class="panel-heading">
                        Shto Produkt</div>
                        <form action="" method="post" id="signupForm1" class="form-horizontal">
                        <div class="panel-body">
						
                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                            
 <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  tblcomputers where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <div class="form-group">
                                <label class="col-sm-2 control-label" for="Old">Emri</label>
                                <div class="col-sm-10">
                                <input type="text" name="emri" value="<?php  echo $row['Emri'];?>" class="form-control" id="compname" required="true">
                                </div>
                                    </div>
                              
                                        <div class="form-group">
                                        <label class="col-sm-2 control-label" for="Old">Qmimi</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="mbiemri" value="<?php  echo $row['Mbiemri'];?>" id="mbiemri" class="form-control" required="true">
                                        </div>  
                                          </div>
                                        <div class="form-group">      
                                             <div class="col-sm-8 col-sm-offset-2">  

                                             <button type="submit" name="submit" id="submit" class="btn btn-primary">Save </button>

                                             </div>
                                        </div>


                                        </div>
                                            </form>
                                            </div>
                                                    </div>
                                                    
                                                    </div>
                                                    <?php } ?>
                                                     
                                                
                               
    
                                              




                                   
                                     
                              


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
<?php }  ?>