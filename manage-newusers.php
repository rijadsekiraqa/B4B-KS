<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ccmsaid']==0)) {
  header('location:logout.php');
  } else{



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
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Menaxhimi i Bizneseve</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Menaxho</li>
                            <li><a href="add-users.php">Shto Biznes</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Menaxhimi i Bizneseve</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <tr>
                  <th>#</th>
                  <th>FOTO</th>
                  <th style="width:303px;">EMRI I BIZNESIT</th>
                  <th style="width:277px;">KATEGORIA</th>  
                  <th style="width:100px;">Link</th>  
                  <th>QYTETI</th>
                  <th>EMAIL</th>    
                  <th>TELEFONI</th>   
                  <th>PERSHKRIMI</th>         
                  <th style="width:100px;">VEPRO</th>
                </tr>
                                        </tr>
                                        </thead>
                                    <?php
$ret=mysqli_query($con,"select * from tbl_customer");
$cnt=1;
$foto = $_GET['images'];
while ($row=mysqli_fetch_array($ret)) {
   
?>
   
                <tr>
                  <td><?php  echo $cnt;?></td>
                  <td><img src="images/<?php echo $row['image'];?>"  onclick="onClick(this)" class="modal-hover-opacity" width="60px" height="60px">
                      <div id="modal01" class="modal" onclick="this.style.display='none'">
  <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  <div class="modal-content">
    <img id="img01" style="max-width:100%">
  </div>
</div>
                  <td style="width:150px; word-break: break-all;"><?php  echo $row['Emri'];?></td>
                  <td><?php  echo $row['Kategoria'];?></td>
                  <td style="width:200px; word-break: break-all;"><?php  echo $row['Link'];?></td>
                  <td><?php  echo $row['Qyteti'];?></td>
                  <td><?php  echo $row['Email'];?></td>   
                  <td><?php  echo $row['Telefoni'];?></td>
                  <td style="width:200px; word-break: break-all;"><?php  echo $row['Pershkrimi'];?></td>            
                  <td><a href="view-user-detail.php?editid=<?php echo $row['ID'];?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span></a>  <a href="javascript:confirmDelete('delete_user.php?aid=<?php echo $row['ID']; ?>')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a></td>
                  
                </tr>
                <?php $cnt=$cnt+1;
            }?>

                                </table>
                            </div>
                        </div>
                    </div>



                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
function confirmDelete(delUrl) {
    if (confirm("Are you sure you want to delete")) {
    document.location = delUrl;
    }
}
</script>

 <script>

  function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
    

  </script>
</body>

</html>
<?php }  ?>