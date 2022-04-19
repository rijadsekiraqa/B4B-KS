<?php
include('includes/dbconnection.php');

  


if(isset($_GET['aid'])){
    $aid=$_GET['aid'];
    global $con;
    $sql="DELETE FROM tbl_customer WHERE ID=$aid";
    $res=mysqli_query($con,$sql);
    if($res){
        header("Location: ./manage-newusers.php");
        $_SESSION['mesazhi'] ="Anetarri u fshi me sukses";
    }
    else{
        die("Gabim" . mysqli_error($con));
    }
}
?>



