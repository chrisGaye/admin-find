<?php 
    session_start();
?>
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
<div class="container">
        <br>
    <div class="row">
       <a href="./document.php"><i class="far fa-arrow-alt-circle-left" style="font-size:40px;color:#343A40"></i></a>
    </div>   
		<div class="row d-flex justify-content-center">
			   <div class="col-auto" style="font-weight: bold;">
			   		 <i class="fas fa-database"></i>&nbsp;&nbsp;<span style="font-size:20px">Ajout de documents</span> 
			   </div>
		</div><br><br>
         <div class="row d-flex justify-content-center">
                 <form action="saveDocument.php" method="POST">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group" >
                                <label for="fichier" style="font-size:20px">Fichier</label>
                                <input type="file" name="fichier" id="fichier" required class="form-control form-control-sm" style="font-size:20px;height:45px">
                            </div>
        
                            <div class="form-group">
                                <label for="nature" style="font-size:20px">Nature</label>
                                <select id="nature" name="nature"  required class="form-control form-control-sm" style="font-size:20px;height:45px">
                                    <option value="cours" >Cours</option>
                                    <option value="exercice">Exercice</option>
                                    <option value="support">Support de cours</option>
                                </select>
                            </div><br>
                            <div class="form-group">
                                <label for="nature" style="font-size:20px">Choisir Matière</label>
                                <select id="nature" name="matiere"  required class="form-control form-control-sm" style="font-size:20px;height:45px">
                                    <option value="Math" >Math</option>
                                    <option value="Physique">Physique</option>
                                    <option value="Chmie">Chmie</option>
                                    <option value="SVT" >SVT</option>
                                    
                                </select>
                            </div><br>
                                <div class="form-group">
                                <label for="cars" style="font-size:20px">Choisir Niveau</label>
                                <select  name="niveau" id="cars" class="form-control form-control-sm" style="font-size:20px;height:45px">
                                        <optgroup label="Collège">
                                            <option value="4ème">4ème</option>
                                            <option value="3ème">3ème</option>
                                        </optgroup>
                                        <optgroup label="Lycée">
                                            <option value="Seconde">Seconde</option>
                                            <option value="Première">Première</option>
                                            <option value="Terminale">Terminale</option>
                                        </optgroup>
                                </select>
                                </div><br>
                            <button type="submit" class="btn btn-default" style="background-color:#343A40">Ajouter</button>
                        </div>
                        
                    </div>
                    
                </form>
    
         </div>  
</div>
