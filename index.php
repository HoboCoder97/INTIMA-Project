<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta charset="utf-8" />
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
<body class="">

<div class="form">

    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
       <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
        
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
             
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
          <li>
            <a href="completedfiles.php">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Completed Files</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="logout.php">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
             <a href="logout.php">Logout</a>
            </a>
          </li>
        </ul>
      </div>
    </div>
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Home</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
        <img src="./images/INTIlogo.jpg" style="width: 100%;" >
      </div>
      <div class="content">
    <h5>Use toolbar on the left to access the functions</h5>
          
          <h6>Contact INTIMA Admin for any inquiries</h6>
    </div>
      <footer class="footer">
        <div class="container">
          <nav>
            <ul>
              <li>
                <a href="https://www.facebook.com/groups/INTIMAofg/">
                  INTIMA Official Page
                </a>
              </li>
              
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>,
            Coded by
            <a href="https://www.facebook.com/byron.isusingafakeusername" target="_blank">Byron Kweh</a>.
          </div>
        </div>
      </footer>
    </div>
    
</div>
</body>
</html>