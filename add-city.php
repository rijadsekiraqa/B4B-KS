<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ccmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$cmsaid=$_SESSION['ccmsaid'];
$city=$_POST['city'];
 $query=mysqli_query($con,"insert into tblcity(Qyteti) value('$city')");

    if ($query) {
    echo '<script>alert("Qyteti u regjistrua me sukses")</script>';
echo "<script>window.location.href ='manage-city.php'</script>";
  }
  else
    {
         echo '<script>alert("Diqka shkoj gabim.Ju lutem provoni perseri")</script>';
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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <?php include_once('includes/sidebar.php');?>
	<div id="right-panel" class="right-panel">

        <?php include_once('includes/header.php');?>
    
        <!-- /. NAV SIDE  -->        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Qytetet  
                        	<!--
						 <a href="manage-city.php" class="btn btn-primary btn-sm pull-right">Back <i class="glyphicon glyphicon-arrow-right"></i></a>						</h1>
						 	-->
                     
                    </div>
                </div>
				
				
				
        		
			<script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
                <div class="row">
				
                    <div class="col-sm-10 col-sm-offset-1">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Shto Qytet                      </div>
						<form action="" method="post" id="signupForm1" class="form-horizontal">
                        <div class="panel-body">
						<fieldset class="scheduler-border" >
						
						<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Qyteti</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="city" 
									value="" 
									name="city"
									data-validation="required length" 
									data-validation-length="min4"
									data-validation-error-msg="Ju lutem shkruani nje qytet(min 4 shkronja)"/>
								</div>
							</div>
							
					
						
						<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
									<button type="submit" name="submit" class="btn btn-primary">Ruaj </button>
								 
								   
								   
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
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
		$.validate({
			errorMessageClass: "error",
		});
	</script>
            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
	School Fees Payment System | Brought To You By : <a href="http://code-projects.org/" target="_blank">Code-Projects</a>
    </div>
   
</html>
<?php }  ?>