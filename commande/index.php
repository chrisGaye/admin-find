<?php 
	session_start() ;
	include '../bd.php';

	// $rows = ''				 ;
	// $val  = $_REQUEST['val'] ;
	// var_dump($val);

	// if (!isset($_REQUEST['val'])) 
	// {
	// 	$thisok  = 'btn-warning' ;
	// 	$thisok2 = '' ; 
	// 	$query = $bdd->query("SELECT  id_article, titre, id_cat, date_article FROM articles");
	// 	$rows  = $query->fetchAll(PDO::FETCH_NUM);
	// }

	// if ($val == 'att') 
	// {
	// 	$thisok  = 'btn-warning' ;
	// 	$thisok2 = '' ; 
	// 	$query = $bdd->query("SELECT  id_article,titre, id_cat, date_article FROM articles WHERE statut_article = 'waiting'");
	// 	$rows  = $query->fetchAll(PDO::FETCH_NUM);
	// }

	// if ($val == 'online') 
	// {
	// 	$thisok  = '' ;
	// 	$thisok2 = 'btn-success' ; 
	// 	$query = $bdd->query("SELECT  id_article,titre, id_cat, date_article FROM articles WHERE statut_article = 'online'");
	// 	$rows    = $query->fetchAll(PDO::FETCH_NUM);
	// }

?>
<!DOCTYPE html>
<html>
<head>
	<title>COMMANDES</title>
  <link rel="icon" type="image/png" href="">
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
  <style type="text/css">
  	.typeart:hover
  	{
  		background: #642B73;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #C6426E, #642B73);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #C6426E, #642B73); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		color: white;
		font-weight: bold;
  	}
	#head_table{
		background-color: #a3b6ca;
		
	}
	#title_tab{
		color: black;
	}
  </style>
</head>
<body>
	
	 <?php include '../bd.php'; ?>
	<div class="container">
		<br>
		<div class="row d-flex justify-content-center">
			   <div class="col-auto" style="font-weight: bold;text-align: center;">
			   		 <i class="fas fa-pen-alt" ></i>&nbsp;&nbsp;GESTION DES COMMANDES 
			   </div>
		</div>
		<br>

		<!-- <div class="row">
			  <div class="col-12 d-flex justify-content-start">
			  		<a href="./article.php?val=att" style="color: black;font-weight: bold;"><button class="btn rounded-pill typeart <?php echo $thisok ; ?>">EN ATTENTE</button></a>
			  		<a href="./article.php?val=online" style="color: black;font-weight: bold;"><button class="btn rounded-pill typeart <?php echo $thisok2; ?>">EN LIGNE</button></a>
			  </div>
		</div> -->
		<div class="row d-flex justify-content-end">
			  <div class="col-auto">
			  		<div class="md-form">
				  		<input type="text" id="search" class="form-control" size="35px">
				  		<label for="search">Rechercher ...</label>
			  		</div>
			  </div>
		</div>
		
		<div class="row justify-content-start">
			<div class="col-auto">
				  <table class="table table-responsive">
				  	<thead>
				  	<tr id="head_table">
				  		  <th width="70px" class="border border-0" id="title_tab">#</th>
						  <th width="300px" class="border border-0"><span id="title_tab">Numéro commande</span></th>
				  		  <th width="150px" class="border border-0"><span id="title_tab"> Date</span></th>
							<th width="120px" class="border border-0"><span id="title_tab">Produit</span></th>
				  		  <th width="120px" class="border border-0"><span id="title_tab">Boutique</span></th> 
						 
				  		  <th width="110px" class="border border-0"><span id="title_tab">Etat</span></th>
        
				  		  <th width="300px" class="border border-0"></th>
				   </tr>
				   </thead>
				   <tbody id="myTable">
				   <?php 
                           $i=1;
                        
				   		// foreach ($rows as $row) 
				   		// {
                        // $query = $bdd->query("SELECT nom_cat FROM categories WHERE id_cat='".$row[2]."'");
				   ?>
				   			<tr>
				   				<td><?php echo $i; ?></td>
						   		<td><?php echo "12655"//$row[1]; ?></td>
						   		<td>
									   <?php 
									    //    $cat = ($query->fetch())[0] ;
									    //     if ($cat == null) {
										// 		echo "--";
										// 	}else {
										// 		echo $cat;
										// 	}
										 echo "2021-12-12"	;
						   			?>
						   		</td>
						   		<td >
						   			<?php echo "Chaussure"; //$row[3];?>
						   		</td>

								<td >
						   			<?php echo "Amadou"; //$row[3];?>
						   		</td>

								<td>
						   			<?php echo "En attente"; //$row[3];?>
						   		</td>

						   		<td> 
								      <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-danger">Voir détail</button></a> &nbsp;&nbsp;&nbsp;&nbsp; 
						   			 | &nbsp;&nbsp;&nbsp;&nbsp;
										<a href="#updateArticle?modify=<?php //echo $row[0]; ?>" onclick="alert('Modification test')" class="text-secondary">Modifier</button></a>
						   	    </td>	
								   <!-- <a data-bs-toggle="modal" data-bs-target="#exampleModal<?php //echo $row[0]; ?>" class="deep-orange-text">Supprimer</a>
                                      <?php  $id_row = $row[0]; ?> -->
								   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									 <div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel"><b> Détails de la Commande n°234</b></h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<!-- Détails de la commande  -->
											<div class="container">
											    <div class="row">
												    <div class="col-md-6">
														<ul>
															<li> Date : 2021-12-02 12:27:12</li>
															<li> Produit : Chaussure</li>
															<li> Quantité : 5</li>
															<li> Prix unitaire : 2500 f</li>
															<li> Prix Total : 10000 f</li>
															<li> Boutique : Find Store</li>
														</ul>
													</div>

													<div class="col-md-6">
												     	<ul>
														    
															<li>Nom du client : Amadou GAYE</li>
															<li>Adresse : Dakar</li>
															<li>Boite postale : BP5032</li>
															<li>Téléphone : 77653322</li>
															<li>E-mail : 77653322</li>
														</ul>
													</div>
												</div>
											</div>
											
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
											<button type="button" onclick="window.location='./deleteClasse.php?ID=<?php echo $id_row; ?>'" class="btn btn-success">Confimer</button>
									 	</div>  
								     	 </div>
							     	  </div>
                                  </div>
				  			 </tr>
				   <?php 
				   			//$i++;
				   		//}
				   ?>	
				  </tbody>			   
				  </table>
			</div>
		</div>
	</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
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