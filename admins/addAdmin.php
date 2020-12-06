<?php 
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
</head>
<body>
	<form method="post" action="./saveAdmin.php">
		<div class="container" style="margin-top: 10%;">
			<div class="row">
				  <!-- <div class="col-6">
				  		<div class="md-form">
				  				<i class="fas fa-signature prefix"></i>
				  				<input type="text" name="prenom" id="name" class="form-control" required="">
				  				<label for="name">Prénom ...</label>
				  		</div>
				  </div>
				   <div class="col-6">
				  		<div class="md-form">
				  			  <i class="fas fa-address-book prefix"></i>
				  			  <input type="text" name="nom" id="pname" class="form-control" required="">
				  			  <label for="pname">Nom ...</label>
				  		</div>
				  </div> -->
				   <div class="col-6">
				  		<div class="md-form">
				  			  <i class="fas fa-user prefix"></i>
				  			  <input type="text" name="email" id="login" class="form-control" required="">
				  			  <label for="login">Email ...</label>
				  		</div>
				  </div>
				   <div class="col-6">
				  		<div class="md-form">
				  			  <i class="fas fa-edit prefix"></i>
		                         <div style="padding-left:50px">
									<select class="browser-default custom-select" name="role">
										<option disabled selected> Choisir Role</option>
										<option value="admin">Admin</option>
										<option value="super_admin">Super Admin</option>
									</select>
								 </div>			
				  		</div>
				  </div>
				   <div class="col-6">
				  		<div class="md-form">
				  			  <i class="fas fa-key prefix"></i>
				  			  <input type="password" name="password" id="niveau" class="form-control" required="">
				  			  <label for="niveau">Password ...</label>
				  		</div>
				  </div>
			</div>
			<div class="row d-flex justify-content-center">
				  <div class="col-auto">
				  		<button type="submit" class="btn peach-gradient">Ajouter</button>
				  </div>
			</div>
		</div>
	</form>
</body>
</html>