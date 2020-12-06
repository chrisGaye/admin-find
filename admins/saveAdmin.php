<?php 
	session_start();
	include '../../database/db_rc2s.php' ;

	// $nom   = $_POST['nom']    ;
	// $prenom= $_POST['prenom']   ;
	$email = $_POST['email']  ;
	$pwd   = $_POST['role']    ;
  $password= $_POST['password'] ;
  $pass = password_hash($password, PASSWORD_DEFAULT);
  $req = $bdd->prepare("INSERT INTO users( email, role, password) VALUES (?,?,?)");
  $req -> execute(array($email, $pwd, $pass));


?>	
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="jep">
  <meta name="author" content="ninjamer">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript">
        $(function() 
        {
            Swal.fire({
                        icon: 'success',
                        title: 'Admin Disponible ! <br>',
                        showConfirmButton: false,
                        timer: 5000,
                        background: '#fff url(new-user.gif)'
                      })
        })
            setTimeout(function() {window.location = "./";},5000) ;
        </script>