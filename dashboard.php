<?php
session_start() ?>

<?php require_once('connection.php')  ;?>
<?php
if (!isset($_SESSION['userid'])){
  header('location:login.php');
}

?>

<?php

$query="select * from applied ORDER BY id";
$result=mysqli_query($connection,$query);



?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="images/logo.png" width="50" height="50">
                      </a>
                      <div class="name">Sabaragamuwa University of Sri Lnaka</div>

                </div>


              
                 <span class="logout-spn" >
                  <a href="logout.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li class="active-link">
                        <a href="dashboard.php" ><i class="fa fa-desktop "></i>Faculty Of Applied Sciencess<span class="badge">Details</span></a>
                    </li>
                   

                    <li>
                        <a href="agridashboard.php"><i class="fa fa-table "></i>Faculty of Agri Scienes<span class="badge">Details</span></a>
                    </li>
                    <li>
                        <a href="geodashboard.php"><i class="fa fa-edit "></i>Faculty Of Geomatics<span class="badge">Details</span></a>
                    </li>


                    

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Details</h2> 




    <table class="table table-bordered">
     <thead>
      <tr>
       <th>ID</th>
       <th> Name</th>
       <th> email</th>
       <th>phone</th>
       <th>Package</th>
        <th>Arrival Date</th>
         <th>Depature Date</th>
         <th>Delete</th>
         

      </tr>
     </thead>
     <tbody>
     <?php while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
         <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['Package']; ?></td>
          <td><?php echo $row['adate']; ?></td>
          <td><?php echo $row['ddate']; ?></td>
      

      <td>
        <a href="delete.php?del=<?php echo $row['id']; ?>" class="del_btn btn-danger">Delete</a>
      </td>

    </tr>

  <?php } ?>
</table>

                   </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2018 All Rights Received
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
