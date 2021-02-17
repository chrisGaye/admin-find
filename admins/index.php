<?php
      // Liste des Administrateurs
$curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "http://146.59.236.239:7000/esp/memberservice/members/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    ));

    $response = curl_exec($curl);

    curl_close($curl);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="keywords" content="wollogo">
  <meta name="author" content="ninjamer">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
</head>
<body>
<?php include '../bd.php'; ?>
	<div class="container">
		<br>
		<div class="row d-flex justify-content-center">
			   <div class="col-auto" style="font-weight: bold;">
			   		 <i class="fas fa-user"></i>&nbsp;&nbsp;Gestion des Administrateurs de la plateforme
			   </div>
		</div>
		<br>
		<div class="row">
			  <div class="col-12 d-flex justify-content-start">
			  		<a href="./addAdmin.php"><button type="button" class="btn btn-outline-secondary waves-effect rounded-pill">Ajouter un admin</button></a>
			  </div>
		
			  <div class="col-12 d-flex justify-content-end">
			  		<div class="md-form">
			  			  <input type="text" id="search" class="form-control">
			  			  <label for="search">Rechercher ...</label>
			  		</div>
			  </div>
		</div>
        
    <div class="row">
       <table class="table table-condensed">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Prénom </th>
                    <th>Nom</th>
                    <th>email</th>
                    <th>Role</th>
  
                </tr>
                </thead>
                <tbody>
                <?php  
                     session_start();
                     include('./../bd.php');
                     $req=$bdd->query("SELECT * FROM admins");
                     $cpt = 1;
                    // API Postmanan
                    $admins = json_decode($response, true);   
                  
                    foreach ($admins as $index => $admin) {
                      

                    }
  
                    while($rep=$req->fetch()){
                   ?>
                <tr>
                   <td><?php echo $cpt;    
                          ?>
                     </td>
                    <td><?php echo $rep['prenom'];    
                          ?>
                     </td>
                    <td><?php echo $rep['nom'];
                                                  ?>
                  </td>
                    <td><?php echo $rep['email']; ?></td> 
                    <td><?php echo $rep['role']; ?></td>
                    <td>       
                     <a href="./displayAdmin.php?id=<?php echo $rep['id']; ?>" style="color: white"><button type="submit" class="">Voir profil</button></a>                      
                    </td> 
                    <td>       
                     <a href="updateAdmin.php?id=<?php echo $rep['id']; ?>" style="color: white"><button type="submit" class="">modifier</button></a>                      
                    </td>
                    <td>
                    <!-- <a href="/delete" class="delete" data-confirm="Are you sure to delete this item?">Delete</a> -->
                    <a href="deleteAdmin.php?id=<?php echo $rep['id']; ?>" style="color: white" ><button type="submit" class="text-danger">supprimer</button></a>
                     </td>
                </tr><?php   $cpt++; } ?>
                </tbody>
        </table>
    </div>
		</div>
	</div>
  
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>