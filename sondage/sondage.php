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
<?php include '../../database/db_rc2s.php'; ?>
	<div class="container">
		<br>
		<div class="row d-flex justify-content-center">
			   <div class="col-auto" style="font-weight: bold;">
			   		 <i class="fas fa-database"></i>&nbsp;&nbsp;Création, Modification et Suppression des sondages
			   </div>
		</div>
		<br>
		<div class="row">
			  <div class="col-12 d-flex justify-content-start">
			  		<a href="./addSondage.php"><button type="button" class="btn btn-outline-secondary waves-effect rounded-pill">Ajouter un Sondage</button></a>
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
                    <th>Sondage</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php  
                     session_start();
                     include('../../database/db_rc2s.php');
                     $req=$bdd->query("SELECT * FROM sondages");
                     $cpt = 1;
                    while($rep=$req->fetch()){
                   ?>
                <tr>
                   <td><?php echo $cpt;    
                          ?>
                     </td>
                    <td><?php echo $rep['titre_sondage'];    
                          ?>
                     </td>
                    <td><?php echo $rep['description'];
                                                  ?>
                  </td>
                    <td><?php echo $rep['date_creation']; ?></td> 
                    <td> 
            
                     <a href="updateSondage.php?id=<?php echo $rep['id_cat']; ?>" style="color: white"><button type="submit" class="btn btn-primary">modifier</button></a>      
                    
                    </td>
                    <td>
                    <!-- <a href="/delete" class="delete" data-confirm="Are you sure to delete this item?">Delete</a> -->
                    <a href="deleteSondage.php?id=<?php echo $rep['id_cat']; ?>" style="color: white" ><button type="submit" class="btn btn-danger">supprimer</button></a>
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