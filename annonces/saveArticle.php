<?php
$dbb= new PDO('mysql:host=localhost; dbname=db_rc2s', 'root', 'passer'); 

    $titre=$_POST['titre'];
    $categorie=$_POST['cat'];
    
    $contenu=$_POST['contain'];
    $date = date('d-m-y');
   
    //Uploader les images ou videos
   
    $filename = $_FILES['image_article']['name']   ;
    var_dump($filename);
    $tmpName = $_FILES["image_article"]["tmp_name"]   ;
    $location = "./../uploads/";
    move_uploaded_file ($tmpName ,$location.$filename) ;

    $im=$filename;
    // if ($filename) 
    // {
        // $destination = $_SESSION['admin_on_air']->login.basename($_FILES["imagevideo"]["name"]   );
        

        
        // $path = $_SESSION['admin_on_air']->login.basename($_FILES["imagevideo"]["name"]   );
    // }
    // else
    // {
    //   $path = '';
    // }

    $sql=$dbb->prepare("INSERT into articles (titre, contenu,imagevideo,id_cat, date_article) VALUES (?,?,?,?,?)");
    $sql->execute(array($titre,$contenu, $im,$categorie,$date));
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
                        title: 'Ajouté avec succès',
                        showConfirmButton: false,
                        timer: 5000,
                        background: '#fff url(send.gif)',
                        heightAuto:true
                      })
        })
            setTimeout(function() {window.location = "./article.php?val=att";},5000) ;
        </script>