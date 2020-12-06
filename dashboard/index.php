<?php
// Initialiser la session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ./../auth/login.php");
    exit;
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard RC2S</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav" >
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Réseau des Clubs Scientifiques du Sénégal</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell" style="font-size: 30px;"></i>
                <span class="badge badge-warning navbar-badge">15</span>
              </a>
      </li>
      <li class="nav-item dropdown">
        <ul class="navbar-nav ml-auto" style="padding-top: 5px;padding-left: -120px;">
            <li width="40px" height="40px"><p style="color:#323a40">@</p></li>
            <li class="nav-item d-sm-inline-block"><img src="./images/logo_rc2s.jpeg" class="img-circle elevation-2" alt="User Image" width="40px" height="40px"></li>
            <li width="40px" height="40px"><p style="color:#323a40">@</p></li>
            <li class="nnav-item d-sm-inline-block" style="color: white">
			<div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
            <b><?php 
                include('../../database/db_rc2s.php');
                $info=$bdd->query("SELECT prenom,nom FROM users WHERE email = '".htmlspecialchars($_SESSION['username'])."'");
                //  echo htmlspecialchars($_SESSION["username"]); 
              $val =  $info->fetch();
              echo $val[0]." ".$val[1]." ";  
            ?></b>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Voir profil</a>
              <a href="./../auth/logout.php" class="dropdown-item" style="color:red">Se déconnecter</a>
            </div>
        </div>
			</li>
        </ul>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link" style="align-content:center;">
       <div class="d-flex justify-content-center">
          <img src="./images/logo_rc2s.jpeg" class="rounded-circle" alt="logo RC2S" width="90px" height="85px">
       </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item" onclick="AlterPage('./pages/dashboard.php')" style="font-size:25px;padding-bottom:30px">
            <a href="#"  class="nav-link" id="element">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>

          <li class="nav-item" onclick="AlterPage('../categories/categorie.php')" style="font-size:25px;padding-bottom:30px">
            <a href="#" class="nav-link" id="element">
              <i class="nav-icon fas fa-th"></i>
              <p>
                CATEGORIES
              </p>
            </a>
          </li>
         
          <li class="nav-item has-treeview" onclick="AlterPage('../articles/article.php?val=att')" style="font-size:25px;padding-bottom:30px">
            <a href="#" class="nav-link" id="element">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                ARTICLES        
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview" onclick="AlterPage('../users/admin.php')" style="font-size:25px;padding-bottom:30px">
             <a href="#" class="nav-link" id="element">
              <i class="fas fa-users"></i>
                <p>
                   UTILISATEURS
                </p>
             </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     
    <!-- Main content -->
    <section class="content" style="
-moz-border-radius: 20px;
border-radius: 15px;
overflow: hidden;">
       <iframe src="./pages/home.php" id="framespec" style="width: 100%;border: unset;height: 580px"></iframe>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<style type="text/css">
	.element
	{
		background-color: orange;
		color: white;	
	}
</style>
<script>

      latest ='';
		  function Focu(arg) 
		  {
		  	if (latest!="") 
		 	{
		  		document.getElementById(latest).classList.remove('element');
		 	}
		  	document.getElementById(arg).classList.add('element');
		  	latest = arg ;
		  }

// document.getElementById("element").addEventListener("click", mouseOver);
// document.getElementById("element").addEventListener("mouseout", mouseOut);

//   function mouseOver() {
//     // document.getElementById("element").style.color = "orange";
//     document.getElementById("element").style.background-color = "orange";
//   }

//   function mouseOut() {
//     document.getElementById("element").style.color = "";
//   }
  

  function AlterPage(argument) 
			 {
			 	document.getElementById('framespec').src = argument ;
			 }

</script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
