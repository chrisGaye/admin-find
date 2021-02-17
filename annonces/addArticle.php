<?php 
    session_start() ;
    include '../../database/db_rc2s.php';

    $req =$bdd->query("SELECT id_cat, nom_cat FROM categories");  
    $rows=$req->fetchAll(PDO::FETCH_NUM);    
?>
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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="http://cdn.wysibb.com/js/jquery.wysibb.min.js"></script>
	<link rel="stylesheet" href="http://cdn.wysibb.com/css/default/wbbtheme.css" />
	<script>
		$(function() {
  		$("#contenu").wysibb();
		})
	</script>
  <style type="text/css">
    body
    {
      overflow-x: hidden;
    }
  </style>
  
<body>
<form action="./saveArticle.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="contenu" id="hiddenIn">
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-auto">
                 <div class="md-form">
                    <i class="fab fa-bandcamp prefix"></i>
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" name="titre" id="titre" required="">
                </div>
        </div>
    </div>
    <div class="row">
          <div class="col-12">
                <?php 
                // include 'quilleditor.php'; 
                ?>
                 <textarea class="form-control" name="contain" rows="10" id="contenu" value="<?php if(isset($_POST['pub'])) echo $_POST['contain'] ?> "></textarea>
         </div>
        <div class="row d-flex justify-content-between" style="width: 100%;">  
                     <div class="col-auto">
                              <select class="browser-default custom-select" style="height: 50px;margin-top: 18px;margin-left: 15px;" name="cat">
                              <option selected>Choisir une Catégorie</option>
                              <?php 
                                    foreach ($rows as $row) 
                                    { 
                              ?> 
                                  <option value="<?php echo $row[0] ?>"><?php echo $row[1]; ?></option>
                              <?php 
                                    }
                              ?>
                              </select>
                      </div>
                
                      <div class="col-auto" style="margin-top: 22px;">
                            <div class="md-form">
                               <label for="titre">Image</label>
                               <input type="file" name="image_article" class="form-control" id="image_article">

                               <!-- <label for="titre">Titre</label>
                               <input type="text" class="form-control" name="titre" id="titre" required> -->
                            <!-- <input type="file" name = "image" class="form-control-file" id="exampleFormControlFile1"> -->
                                  
                                 <!-- <input type="file" name="image" id="upload" class="form-control">  -->
                                 <!-- <label for="upload"> <img src="upload.png" name="img" style="width: 20%;height: 100%;position: absolute;left:95%;bottom: 2px;"></label>
                                <label for="upload" style="margin-left: 20px;margin-top: 15px;" class="text-primary">Image de mise en avant</label>  -->
                            </div>
                      </div>
               
                      <div class="col-auto offset-md-2" style="margin-top: 15px;">
                            <h2><button type="submit" class="btn btn-success">Ajouter</button></h2>
                     </div>
                
</div>
          </div>
    </div>
</div>
</form>
</body>