<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
<?php
$adminid=$_SESSION['ccmsaid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adminid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?>
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button> 
                <a class="navbar-brand" href="dashboard.php">B4B</a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="active-menu" href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Paneli </a>
                    </li>

<!--
<li class="menu-item-has-children dropdown">
                        <a href="add-computer.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Slideri</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="add-computer.php">Shto Slider</a><i class="menu-icon fa fa-file-o"></i></li>
                            <li><a href="manage-computer.php">Menaxho Slider</a><i class="menu-icon fa fa-file-o"></i></li>
                        </ul>
                    </li>


    -->

 <li class="menu-item-has-children dropdown">
                        <a href="add-users.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Bizneset</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="add-users.php">Shto Biznes</a><i class="fa fa-user"></i></li>
                            <li><a href="add-category.php">Shto Kategori</a><i class="fa fa-user"></i></li>
                            <li><a href="add-city.php">Shto Qytet</a><i class="fa fa-user"></i></li>
                            <li><a href="manage-newusers.php">Menaxho Bizneset</a><i class="fa fa-user"></i></li>
                            <li><a href="manage-category.php">Menaxho Kategori</a><i class="fa fa-user"></i></li>
                            <li><a href="manage-city.php">Menaxho Qytetin</a><i class="fa fa-user"></i></li>
                           
                            
                          
                        </ul>
                    </li>
                    
    
<li class="active">
                        <a href="search.php"> <i class="menu-icon fa fa-search"></i>Kerko </a>
                    </li>

                   <li class="active"> 
                    <a href="logout.php"><i class="fa fa-power-off "></i>Çkyqu</a>
                </li>
                    <!--
  <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Raportet</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="bwdates-report-ds.php">Raportet ne mes datave</a><i class="menu-icon fa fa-file-o"></i></li>
                           
                        </ul>
                    </li>

            -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>