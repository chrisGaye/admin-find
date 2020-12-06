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
<!----------------------------------Plus Button-------------------------------------------------------->
<div class="container">
  <div class="row" style="position: fixed;bottom: 57%;right: 7%;">
         <div class="col-auto">
               <h1><i onclick="GenerateCard(idrow);" class="fas fa-plus-circle" title="Nouvelle Question" style="color: orange;"></i></h1>
         </div>
  </div>
<!----------------------------------/Plus Button-------------------------------------------------------->


<!---------------------------------------Entete--------------------------------------------------------->
<div class="container">
<form method="post" action="saveP.php">
  <div class="row d-flex justify-content-center">
            <div class="col-7">
                  <div class="md-form">
                  <label for="titreJD">Titre du Sondage</label>
                  <input type="text" id="titreJD" name="titre_projet" class="form-control" required="">
                  </div>
            </div>
             <div class="col-7">
                  <div class="md-form">
                  <label for="descJD">Description </label>
                  <textarea class="md-textarea form-control" id="descJD" name="desc_projet" rows="1" required=""></textarea>
                  </div>
            </div>
   </div>
	<br>
<!--------------------------------------/Entete--------------------------------------------------------->

<div id="questionsList">

		 
</div>
<div class="row" style="margin-left: 35%;" id="submitForm">
      <div class="col-12">
            <button type="submit" class="btn btn-success">Valider le Sondage</button>
      </div>  
</div>
</form>
  <script type="text/javascript">
  
          let idrow         = 1                                      ;
          let questionslist = document.getElementById('questionsList');

          function nbreOptions(id) 
          {
            let rowcard = document.getElementById(id-400)               ;
            let nbreOP =  document.getElementById(id-400+3000).value    ;

            for (let i = 1; i <= nbreOP; i++) 
            {
              rowcard.appendChild(document.createElement("br"))    ;
              let newRow   = document.createElement("div")         ;
              let newCol   = document.createElement("div")         ;
              let newInput = document.createElement("input")       ;
                 
              newCol.setAttribute("class","col-7 offset-3")        ;
              newCol.style.marginLeft = "60%"                      ;
              newCol.style.width      = "400px"                    ;
              newInput.setAttribute("class","form-control")        ;
              newInput.setAttribute("name","option_multiple[]")    ;
              newInput.setAttribute("placeholder","option"+" "+i+" ...") ;

              newCol.appendChild(newInput);
              rowcard.appendChild(newCol) ;
              rowcard.appendChild(document.createElement("br"))    ;
            }

            document.getElementById(id-400+5000).value = nbreOP              ; 
            document.getElementById(id-400+3000).setAttribute("disabled","") ;
            document.getElementById(id).setAttribute("disabled","") ;
          }

          function GenererOption(arg,id,col3id,col4id) 
          {
            let rowcard = document.getElementById(id)                    ;
            document.getElementById(id).setAttribute("disabled","")      ;

            if (arg=='1') //Il s'agit d'une question à choix multiple
            {
              document.getElementById(col3id).style.display = 'inline' ;
              document.getElementById(col4id).style.display = 'inline' ;
            }

            if (arg=='2') //Il s'agit d'une question simple
            {
                  document.getElementById(id-1100+5000).value = 1      ;
            }

          }

          function GenerateCard(arg) 
          {
            idselect=idrow+1100                                         ;
            let card= document.createElement("div")                     ;
            card.setAttribute("class","row new-card  indigo lighten-5") ;
            card.style.borderRadius =  "35px"                           ;
            card.style.width        =  "80%"                            ;
            card.style.marginLeft   =  "10%"                            ;

            let col1 = document.createElement("div")                    ;
            col1.setAttribute("class","col-8")                          ;
            col1.style.marginLeft = '20%'                               ;
            let mdform = document.createElement("div")                  ;
            mdform.setAttribute("class","md-form")                      ;
            let input_title = document.createElement("input")           ;
            input_title.setAttribute("type","text")                     ;
            input_title.setAttribute("name","titre[]")                  ;
            input_title.setAttribute("class","form-control")            ;
            input_title.setAttribute("placeholder","Titre de la question ...");
            input_title.style.width = '100%'                            ;



            mdform.appendChild(input_title);
            col1.appendChild(mdform);

            let col2 = document.createElement("div")                    ;
            col2.setAttribute("class","col-5")                          ;
            col2.style.marginLeft = '15%'                               ;

            let select = document.createElement("select")               ;
            select.setAttribute("class","browser-default custom-select");
            select.setAttribute("id",idselect);
            select.setAttribute("onchange","GenererOption(this.value,this.id,(this.id-400),(this.id-600));");
            select.style.marginTop     = '10px'                             ;
            select.style.marginBottom = '10px'                             ;



            let option0 = document.createElement("option")              ;
            option0.setAttribute("selected","")                         ;
            // let text0   = document.createTextNode("Selectionnez le type de question");
            // option0.appendChild(text0)                                  ;

            let option1 = document.createElement("option")              ;
            option1.setAttribute("value","1")                           ;
            let text1   = document.createTextNode("Choix multiple")     ;
            option1.appendChild(text1)                                  ;
           
            let option2 = document.createElement("option")              ;
            option2.setAttribute("value","2")                           ;
            // let text2   = document.createTextNode("Question simple")    ;
            // option2.appendChild(text2)
            
            let option3 = document.createElement("option")              ;
            option3.setAttribute("value","3")                           ;
            let text3   = document.createTextNode("OUI ou NON")         ;
            option3.appendChild(text3)                                  ;

            let hiddenInput = document.createElement("input")           ;
            hiddenInput.setAttribute("type","hidden")                   ;
            hiddenInput.setAttribute("name","nbreOpp[]")                ;
            hiddenInput.setAttribute("id",idrow+5000)                   ;

            // select.appendChild(option0)  ;
            select.appendChild(option1)  ;
            // select.appendChild(option2)  ;
            // // select.appendChild(option3)  ;
            // col2.appendChild(select)     ;
            // col2.appendChild(hiddenInput);


            let col3 = document.createElement("div");
            col3.setAttribute("class","col-3")      ;
            col3.setAttribute("id",idselect-400)    ;
            col3.style.display = 'none'             ;
            let input = document.createElement("input")                ;
            input.setAttribute("type","text")                          ;
            input.setAttribute("id",idrow+3000)                        ;
            input.setAttribute("class","form-control")                 ;
            input.setAttribute("placeholder","nombre d'options");
            input.setAttribute("title","Le nombre d'options")          ;
            input.style.display    = "inline-block"                     ;
            input.style.marginLeft = "18%"                              ;
            input.style.marginTop =  "10px"                             ;

            col3.appendChild(input)      ;

            let col4 = document.createElement("div");
            col4.setAttribute("class","col-1")      ;
            col4.setAttribute("id",idselect-600)    ;
            col4.style.display      = 'none'        ;
 
            let buttonOK = document.createElement("button")          ;
            buttonOK.setAttribute("class","btn btn-secondary")       ;
            buttonOK.setAttribute("type","button")                   ;
            buttonOK.setAttribute("id",idrow+400)                    ;
            buttonOK.setAttribute("onclick","nbreOptions(this.id)")  ;
            buttonOK.style.display= 'inline-block';
            buttonOK.appendChild(document.createTextNode("OK"))      ;

            col4.appendChild(buttonOK);


            let rowcard = document.createElement("div");
            rowcard.setAttribute("id",idrow)           ;

            card.appendChild(col1)   ;
            card.appendChild(col2)   ;
            card.appendChild(col3)   ;
            card.appendChild(col4)   ;
            card.appendChild(rowcard);

            console.log(card);
            questionslist.appendChild(card);
            questionslist.appendChild(document.createElement("br"))    ;
            idrow++;
          }
  </script>
</div>
</body>
</html>