<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Se connecter</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
    <!-- <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/index.css">
</head>
<body>

<div class="container">
   <div class="row justify-content-center">
    <div class="wrapper">
        <form class="form-signin" action="services/login.service.php" >

            <div class="d-flex justify-content-center">
            <a href=""><img title="Aller sur find.com" src="../images/logo.jpeg" class="rounded-circle" alt="logo FIND" width="150px" height="125px"></a> 
            </div><br>
            <h2 class="form-signin-heading" style="text-align:center">Bienvenue</h2><br>
            <input id="username" type="text" class="form-control" name="username" placeholder="Email" required="" autofocus="" /><br>
            <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe" required=""/> <br>
            <?php
              if (isset($_REQUEST['error']) && !empty($_REQUEST['error']) && $_REQUEST['error'] == true) {
                ?>
                  <div id="error-alert">
                    <span class="text-red"> Login ou mot de passe incorrect </span>
                  </div>  
                <?php
              }
            ?>
            <button class="btn btn-lg btn-primary btn-block" style="background-color:#134C9D " type="submit">Se connecter</button> <br> 
            <a href="#reset"><small>Mot de passe oublié ?</small></a>
        </form>
    </div>
   </div>
</div>
</body>
</html>
<!-- code de couleur logo Find : #134C9D -->