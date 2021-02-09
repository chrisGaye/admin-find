<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>FIND</title>
  <link rel="icon" type="image/png" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <style type="text/css">
  	@media(max-width: 767px)
  	{
  		.mobile-aff
  		{
  			
  		}
  	}
  	@media(min-width: 768px)
  	{
  		.mobile-aff
  		{
  			
  		}
  	}
  </style>
</head>
<body>
	<div class="container">
		    <br>
		   <div class="row d-flex justify-content-center">
		   		<div>
		   			<img src="../../images/logo.jpeg" id="home-img" class="rounded-circle" class="mobile-aff" style="display: none;width: 380px;height: 380px;">
		   		</div>
		   </div>
       <br>
       <div class="row d-flex justify-content-center">
              <div class="col-auto orange-text">
                    <h2>Bienvenu sur votre espace d'administration</h2>
              </div>
       </div>
		   <div class="row d-flex justify-content-center">
		   		<div class="col-auto">
		   			  <h2 style="display: none;" class="mobile-aff" id="home-text">Commençez par <div style="display: inline;" ><a class="orange-text" href="stat.php">"consulter"</a></div> le tableau de bord !</h2>
		   		</div>
		   </div>
	</div>
  
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
		$(function() 
		{
			$("#home-img").show(3000) ;
			$("#home-text").show(3000);
		});
	</script>
</body>
</html>
