<?php 
	session_start() ;
	//include '../../data.php';

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
	<title>ARTICLES</title>
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
  </style>
</head>
<body>
	
	 <?php // include '../../database/db_rc2s.php'; ?>
	<div class="container">
		<br>
		<div class="row d-flex justify-content-center">
			   <div class="col-auto" style="font-weight: bold;">
			   		 <i class="fas fa-pen-alt"></i>&nbsp;&nbsp;Espace d'annonces
			   </div>
		</div>
		<!-- <br>
		<div class="row">
			  <div class="col-auto d-flex justify-content-start">
			  		<a href="./addArticle.php"><button type="button" class="btn btn-outline-secondary waves-effect rounded-pill">Ajouter une annonce</button></a>
			  </div>
		</div>
		<br>
		<div class="row">
			  <div class="col-12 d-flex justify-content-start">
			  		<a href="./article.php?val=att" style="color: black;font-weight: bold;"><button class="btn rounded-pill typeart <?php echo $thisok ; ?>">EN ATTENTE</button></a>
			  		<a href="./article.php?val=online" style="color: black;font-weight: bold;"><button class="btn rounded-pill typeart <?php echo $thisok2; ?>">EN LIGNE</button></a>
			  </div>
		</div> -->
		<div class="row d-flex justify-content-end">
			  <div class="col-auto">
			  		<div class="md-form">
				  		<input type="text" id="search" class="form-control">
				  		<label for="search">Rechercher ...</label>
			  		</div>
			  </div>
		</div>
		
		<div class="row">
			<div class="col-auto">
				  <table class="table table-responsive">
				  	<thead>
				  	<tr>
				  		  <th width="70px" class="border border-0">#</th>
				  		  <th width="250px" class="border border-0">Titre</th>
                            <th width="300px" class="border border-0">Decription</th>
				  		  <th width="110px" class="border border-0">DATE</th>
				  		  <th width="300px" class="border border-0"></th>
				   </tr>
				   </thead>
				   <tbody id="myTable">
				   <?php 
                           $i=1;
                        
				   		// foreach ($rows as $row) 
				   		{
                        //  $query = $bdd->query("SELECT nom_cat FROM categories WHERE id_cat='".$row[2]."'");
				   ?>
				   			<tr>
				   				<td><?php echo $i; ?></td>
						   		<td><?php echo "Lancement de Find"; ?></td>
						   		<td>
                                   <?php echo "Une petite description de la chose"; ?>
						   		</td>
						   		<td class="text-primary">
						   			<?php echo "2021-09-21" ?>
						   		</td>
						   		<td><a href="#./updateArticle?modify=<?php //echo $row[0]; ?>">Modifier</button></a> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
						   	      <a href="#deleteArticle.php?id=<?php //echo $row[0]; ?>" class="text-danger">Supprimer</button></a></td>
						   		

				  			 </tr>
				   <?php 
				   			$i++;
				   		}
				   ?>	
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