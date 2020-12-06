<?php 
	session_start();
    include('../../database/db_rc2s.php');

	$_SESSION['id'] =  $ID    = $_GET['id'] ;
	$query = $bdd->query("SELECT * FROM users WHERE id_user='".$ID."'");

	$row  = $query->fetchAll(PDO::FETCH_NUM)  ;
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
	<form method="post" action="./saveUpdate.php">
		<input type="hidden" name="ID" value="<?php echo $ID; ?>">
		<input type="hidden" name="pwd" value="<?php echo $row[0][2]; ?>">
		<div class="container" style="margin-top: 10%;">
			<div class="row">
				
				   <div class="col-6">
				  		<div class="md-form">
				  			  <i class="fas fa-user prefix"></i>
				  			  <input type="text" name="email" id="email" class="form-control" required="" value="<?php echo $row[0][3]; ?>">
				  			  <label for="login">Email ...</label>
				  		</div>
				  </div>
				   <div class="col-6">
				  		<div class="md-form">
				  			  <i class="fas fa-role prefix"></i>
				  			  <!-- <input type="text" name="role" id="niveau" class="form-control" required="" value="<?php echo $row[0][4]; ?>"> -->
				  			  <!-- <label for="niveau" style="padding-top:-20px">Role ...</label> -->
								<select class="browser-default custom-select" name="role">
										<option selected><?php echo $row[0][4]; ?></option>
										<!-- <option value="admin">Admin</option> -->
										<option value="super_admin">Super Admin</option>
								</select>
				  		</div>
				  </div>
			</div>
			<div class="row d-flex justify-content-center">
				  <div class="col-auto">
				  		<button type="submit" class="btn peach-gradient">Modifier les informations de l'admin</button>
				  </div>
			</div>
		</div>
	</form>
</body>
</html>