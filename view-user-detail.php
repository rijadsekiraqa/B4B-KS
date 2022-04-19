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
$image = $_FILES['image']['name'];
$target = "images/".basename($image);
$kategoria=$_POST['kategoria'];
$link=$_POST['link'];
$telefoni=$_POST['telefoni'];
$email=$_POST['email'];
$pershkrimi=$_POST['pershkrimi'];
$city=$_POST['city'];
//Nese nuk ndryshohet fotoja e merr foton e vjeter
if ((!($_FILES['image']['name']))) {
$query=mysqli_query($con,"update tbl_customer set Emri='$emri',Kategoria='$kategoria',Link='$link',Telefoni='$telefoni',Email='$email',Pershkrimi='$pershkrimi',Qyteti='$city' where  ID='$eid'");

}

//Nese fotoja ndryshohet e merr foton e re
else {
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
$query=mysqli_query($con,"update tbl_customer set Emri='$emri',image='$image',Kategoria='$kategoria',Link='$link',Telefoni='$telefoni',Email='$email',Pershkrimi='$pershkrimi',Qyteti='$city' where  ID='$eid'");
}
}
echo '<script>alert("Te dhenat u perditesuan me sukese")</script>';
echo "<script>window.location.href ='manage-newusers.php'</script>";

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
    <!-- Header-->
    <?php include_once('includes/header.php');?>
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Bizneset </h1>
                </div>
            </div>
            <script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                            <!-- .card -->
<div class="panel panel-primary">
    <div class="panel-heading">
    Perditesimi i Biznesit</div>
    <form action="" method="post" id="signupForm1" class="form-horizontal" enctype="multipart/form-data">
        <div class="panel-body">
            
            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
                echo $msg;
            }  ?> </p>
            
            <?php
            $cid=$_GET['editid'];
            $ret=mysqli_query($con,"select * from  tbl_customer where ID='$cid'");
            $cnt=1;
            while ($row=mysqli_fetch_array($ret)) {
            ?>
            
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="Old">Emri i Biznesit</label>
                <div class="col-sm-10">
                    <input type="text" name="emri" value="<?php  echo $row['Emri'];?>" id="emri" class="form-control" required="true"
                    data-validation="required length"
                    data-validation-length="min3"
                    data-validation-error-msg="Ju lutem shkruani emrin e biznesit(min 3 shkronja)">
                </div>
            </div>
                                        
                                        
                                        
<div class="form-group">
    <label class="col-sm-2 control-label" for="city">Foto</label>
    <div class="col-sm-10">
        <input type="file" class="form-control" name="image" id="image" value="<?php  echo $row['image'];?>"
        data-validation="required length"
        data-validation-length="max1"
        data-validation-error-msg="Ju lutem ngarkoni nje foto">
        <img src="images/<?php echo $row['image']; ?>" width="150px" height="100px"
        >
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="city">Kategoria</label>
    <div class="col-sm-10">
        <select name="kategoria" class="form-control" id="kategoria"
            data-validation="required length"
            data-validation-length="min5"
            data-validation-error-msg="Ju lutem zgjidheni nje kategori">
            <option value="<?php echo $row['Kategoria']; ?>"><?php echo $row['Kategoria']; ?></option>
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
        <input type="text" name="link" value="<?php  echo $row['Link'];?>" id="link" class="form-control" required="true">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="city">Telefoni</label>
    <div class="col-sm-10">
        <input type="text" name="telefoni" id="telefoni" value="<?php  echo $row['Telefoni'];?>" class="form-control"   data-validation="required length"
        data-validation-length="min5"
        data-validation-error-msg="Ju lutem shkruani numrin e telefonit(min 5 shkronja)">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="city">Email</label>
    <div class="col-sm-10">
        <input type="text" name="email" id="email" value="<?php  echo $row['Email'];?>" class="form-control" data-validation="required email"
        data-validation-length="min5"
        data-validation-error-msg="Ju lutem shkruani email">
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label" for="city">Pershkrimi</label>
    <div class="col-sm-10">
        <input type="text" name="pershkrimi" id="pershkrimi" value="<?php  echo $row['Pershkrimi'];?>" class="form-control"
        data-validation="required length"
        data-validation-length="min5"
        data-validation-error-msg="Ju lutem shkruani nje pershkrim">
    </div>
</div>
                                        
<div class="form-group">
    <label class="col-sm-2 control-label" for="city">Qyteti</label>
    <div class="col-sm-10">
        <select name="city"  class="form-control" id="city" data-validation="required length"
            data-validation-length="min5"
            data-validation-error-msg="Ju lutem zgjidheni nje qytet">
            <option value="<?php echo $row['Qyteti']; ?>"><?php echo $row['Qyteti']; ?></option>
            <?php
            session_start();
            error_reporting(0);
            include('includes/dbconnection.php');
            $query2 = "SELECT * FROM tblcity";
            $result2 = mysqli_query($con, $query2);
            ?>
            <?php while($row2 = mysqli_fetch_array($result2)):;?>
            <option value="<?php echo $row2['Qyteti'];?>"><?php echo $row2['Qyteti'];?></option>
            <?php endwhile;?>
        </select>
        
    </div>
</div>
<div class="form-group">
    <div class="col-sm-8 col-sm-offset-2">
        <button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
        <i class="fa fa-dot-circle-o"></i> Perditeso
        </button>
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
                    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
                    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
                    <script>
                    $.validate({
                    errorMessageClass: "error",
                    });
                    </script>
                </body>
            </html>
            <?php }  ?>