<?php
require('db.php');
include("auth.php");




 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-dashboard.css?v=1.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
    
  <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
      
        
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
            <li>
            <a href="index.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Home</p>
            </a>
          </li>
          <li>
           <a href="NewFile.php">
              <i class="now-ui-icons design_app"></i>
           <p>Create New File</p>
            </a>
            </li>
          

       
          <li>
            <a href="notifications.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          
          <li>
            <a href="previousfiles.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Previous Files</p>
            </a>
          </li>
          
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
             <a href="logout.php">Logout</a>
            </a>
          </li>
        </ul>
      </div>
    </div>
<div class="main-panel">
    
    </div>
    




<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>