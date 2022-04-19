<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ccmsaid']==0)) {
  header('location:logout.php');
  } 
     ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    
    <title>B4B</title>
   

    <link rel="apple-touch-icon" href="apple-icon.png">
   
    <link rel="icon" href="images/b4b.png"> 
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style>
        
    </style>

</head>

<body>


    <?php include_once('includes/sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <?php include_once('includes/header.php');?>
        <!-- Header-->

        <div class="breadcrumbs">
            
            
        </div>

        <div class="row">

                <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <h2 style="text-align:center; font-size:20px;"> Miresevini ne Sistemin e Menaxhimit te Bizneseve-<strong>B4B</strong> </h2>

                    </div>

            </div>

        <div class="row">
                
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="manage-newusers.php">
                                <i class="fa fa-file-text fa-5x"></i>
                                <h5>Menaxho Biznes</h5>
                            </a>
                        </div>
                    </div>


                     <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="manage-category.php">
                                <i class="fa fa-file-text fa-5x"></i>
                                <h5>Menaxho Kategori</h5>
                            </a>
                        </div>
                    </div>

                  <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="manage-city.php">
                                <i class="fa fa-file-text fa-5x"></i>
                                <h5>Menaxho Qytet</h5>
                            </a>
                        </div>
                    </div>

                   
                
                
                   
                    
                    
                  

                </div>
    </div><!-- /#right-panel -->

   

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
