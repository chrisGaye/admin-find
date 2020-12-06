<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>GESTION DES SIGNAUX</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="PharmaLiv">
	<meta name="author" content="ninjamer">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
	<style type="text/css">
			body,html
			{	
				padding: 5px;
				overflow-x: hidden;
				height: 100%;
			}
	</style>
</head>
<body>
		<?php include 'headernav.php'; ?>
		<div class="container">
			<div class="row d-flex justify-content-center">
				  <div class="col-12" style="text-align: center;margin-bottom: 25px;">
				  		<button type="button" class="btn blue-gradient rounded-pill">veuillez saisir un signal</button>
				  </div>
			<form method="post" action="add_signal.php" onsubmit="_New_Signal_();">
				  <input type="hidden" name="signal" id="signal">
				  <div class="col-12">
				  		<?php include 'quill_editor.php'; ?>
				  </div>
				  <div class="col-12"  style="text-align: center;margin-top: 15px;">
				  	<button type="submit" class="btn btn-outline-success rounded-pill">Valider</button>
				  </div>			
			</form>
			</div>
		</div>
		<script type="text/javascript">
				  function _New_Signal_() 
				  {
				  	document.getElementById('signal').value = quill.root.innerHTML.trim();
				  }
				  document.getElementById('path_to_option').innerHTML = '> Signaux >';
		</script>
</body>
</html>