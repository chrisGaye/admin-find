

<?php include '../../database/db_rc2s.php' ; 
    //  Delete evaluation project
      $num_cat = $_GET["id"];
      $query1 = $bdd -> query("DELETE FROM documents WHERE id_doc =$num_cat");    
      $query1->execute();
?>
  
</html> 

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
  <style>
      body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
  </style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> 

        <script type="text/javascript"> 
            
            Swal.fire({
            title: 'Voulez-vous supprimer ce document ?',
            // text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, Supprimer !'
            }
              
            ).then((result) => {
            if (result.value) {
                // include('./confirm.php');
                Swal.fire(
                'Catégorie supprimée',
                'success',
                window.location = "./document.php"
                )
            }else{
                window.location = "./document.php"
            }
            })
            // setTimeout(function() {window.location = "./categorie.php";},000);
      </script>
<?php

    // $query1 = $bdd -> query("DELETE FROM categories WHERE id_cat =$num_cat");    
    // $query1->execute();
?>