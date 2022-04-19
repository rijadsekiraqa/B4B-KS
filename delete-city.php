<?php
include('includes/dbconnection.php');
  


if(isset($_GET['aid'])){
    $aid=$_GET['aid'];
    global $con;
    $sql="DELETE FROM tblcity WHERE ID=$aid";
    $res=mysqli_query($con,$sql);
    if($res){
        header("Location: ./manage-city.php");
        $_SESSION['mesazhi'] ="Qyteti u fshi me sukses";
    }
    else{
        die("Gabim" . mysqli_error($con));
    }
}
?>



