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
$emri=$_POST['emri'];
$image = $_FILES['image']['name'];
$target = "images/".basename($image);
$kategoria=$_POST['kategoria'];
$link=$_POST['link'];
$telefoni=$_POST['telefoni'];
$email=$_POST['email'];
$pershkrimi=$_POST['pershkrimi'];
$qyteti=$_POST['qyteti'];
$entryid=mt_rand(100000000, 999999999);

 $query=mysqli_query($con,"insert into tbl_customer(Emri,image,Kategoria,Link,Telefoni,Email,Pershkrimi,Qyteti) value('$emri','$image','$kategoria','$link','$telefoni','$email','$pershkrimi','$qyteti')");

 if ($query) {
    echo '<script>alert("Biznesi u shtua me sukses")</script>';
    echo "<script>window.location.href ='manage-newusers.php'</script>";
    
      }

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
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
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Bizneset
                    <!--
                                                                    <a href="dashboard.php" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-arrow-left"></i>&nbsp;Back </a>                     </h1>
                    -->
                    
                </div>
            </div>
            <script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        Shto Biznes                      </div>
                        <form action="" method="post" id="signupForm1" class="form-horizontal" enctype='multipart/form-data'>
                            <div class="panel-body">
                                <fieldset class="scheduler-border">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="Old">Emri i Biznesit</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="emri" name="emri" value=""
                                            data-validation="required length"
                                            data-validation-length="min3"
                                            data-validation-error-msg="Ju lutem shkruani emrin e biznesit(min 3 shkronja)"/>
                                        </div>
                                    </div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="Old">Foto</label>
    <div class="col-sm-10">
        <input type="file" class="form-control" id="image" name="image" value=""
        data-validation="required length"
        data-validation-length="max1"
        data-validation-error-msg="Ju lutem ngarkoni nje foto "/>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="Old">Kategoria</label>
    <div class="col-sm-10">
        <select name="kategoria"  class="form-control" id="kategoria"
            data-validation="required length"
            data-validation-length="min5"
            data-validation-error-msg="Ju lutem zgjidheni nje kategori">
            <option value="">Selekto Kategorin</option>
            <?php
            session_start();
            error_reporting(0);
            include('includes/dbconnection.php');
            $query1 = "SELECT * FROM tblcategory";
            $result1 = mysqli_query($con, $query1);
            ?>
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <option value="<?php echo $row1['Kategoria'];?>"><?php echo $row1['Kategoria'];?></option>
            <?php endwhile;?>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label" for="Old">Link</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="link" name="link" value=""/>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="Old">Telefoni</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="telefoni" name="telefoni" value=""
        data-validation="required length"
        data-validation-length="min5"
        data-validation-error-msg="Ju lutem shkruani numrin e telefonit(min 5 shkronja)"
        />
    </div>
</div>


<div class="form-group">
    <label class="col-sm-2 control-label" for="Old">Email</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="email" value=""
        data-validation="required email"
        data-validation-length="min5"
        data-validation-error-msg="Ju lutem shkruani email" />
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label" for="Old">Pershkrimi</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="pershkrimi" name="pershkrimi" value=""
        data-validation="required length"
        data-validation-length="min5"
        data-validation-error-msg="Ju lutem shkruani nje pershkrim"/>
    </div>
</div>



<div class="form-group">
    <label class="col-sm-2 control-label" for="Old">Qyteti</label>
    <div class="col-sm-10">
        <select  class="form-control" id="qyteti" name="qyteti"
            data-validation="required length"
            data-validation-length="min5"
            data-validation-error-msg="Ju lutem zgjidheni nje qytet">
            <option value="">Selekto Qytetin</option>
            <?php
            session_start();
            error_reporting(0);
            include('includes/dbconnection.php');
            $query1 = "SELECT * FROM tblcity";
            $result1 = mysqli_query($con, $query1);
            ?>
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <option value="<?php echo $row1['Qyteti'];?>"><?php echo $row1['Qyteti'];?></option>
            <?php endwhile;?>
            
            
        </select>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-8 col-sm-offset-2">
        <button type="submit" name="submit" class="btn btn-primary">Shto </button>
        
        
        
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

  
   
</html>
<?php }  ?>