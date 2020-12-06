<?php

session_start()  ;

include '../../database/db_rc2s.php' ;
   
   $id          = $_SESSION['id']   ; 
   $prenom   = $_POST['prenom']    ;
   $nom= $_POST['nom']   ;
   $email = $_POST['email']  ;
//    $pwd   = $_POST['password']    ;
   $niveau= $_POST['role'] ;
 
   $up = $bdd->prepare("UPDATE users SET prenom=?, nom  =? ,email =?, role =?  WHERE id_user='".$id."'");
   $up->execute(array($prenom,$nom,$email,$niveau));
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
                        title: 'Admin mis à jour',
                        showConfirmButton: false,
                        timer: 5000,
                        background: '#fff url()',
                      })
        })
            setTimeout(function() {window.location = "./";},5000) ;
        </script>
<?php 
    session_destroy();
?>