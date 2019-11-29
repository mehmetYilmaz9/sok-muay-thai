<?php 
//////Form contact
$error = ""; $successMessage = "";

if ($_POST) {
    
    if (!$_POST["emailContact"]) {
        
        $error .= "An email address is required.<br>";
        
    }
    
    if (!$_POST["contentContact"]) {
        
        $error .= "The content field is required.<br>";
        
    }
    
    if (!$_POST["subjectContact"]) {
        
        $error .= "The subject is required.<br>";
        
    }
    
    if ($_POST['emailContact'] && filter_var($_POST["emailContact"], FILTER_VALIDATE_EMAIL) === false) {
        
        $error .= "L'adresse email est invalide.<br>";
        
    }
    
    if ($error != "") {
        
        $error = '<div class="alert alert-danger" role="alert"><p>Erreur survenue:</p>' . $error . '</div>';
        
    } else {
        
        $emailTo = "sokmuaythai@gmail.com";
        
        $subject = $_POST['subjectContact'];
        
        $content = $_POST['contentContact'];
        
        $headers = "From: ".$_POST['emailContact'];
        
        if (mail($emailTo, $subject, $content, $headers)) {
            
            $successMessage = '<div class="alert alert-success" role="alert">Votre message a été envoyé avec succès</div>';
            
            
        } else {
            
            $error = '<div class="alert alert-danger" role="alert"><p><strong>Votre message n\'a pas pu être envoyé</div>'  ;
            
            
        }
        
    }
    
    
    
}
?>





<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="css/icon-font.css">

        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
        <title>Sok Muay Thaï</title>
    </head>


    <body>

        <!-- BODY:HEADER -->
        <header class="header">
            <div class="header__text-box">
                <h1 class="heading-primary">
                  <span class="heading-primary--main">SOK</span>
                  <span class="heading-primary--sub">MUAY THAÏ</span>
                </h1>
            </div>
        </header>  

            <!-- BODY:MAIN -->
        <main>

            <nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">

          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">
              <img src="./img/logonav.png" alt="logonav">
            </a>
                  
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">          
                      <li class="nav-item">
                        <a class="nav-link" href="#section-1">Le Club</a>
                      </li>
                            
                      <li class="nav-item">
                        <a class="nav-link" href="#section-3">Conditions/Equipements</a>
                      </li>
                            
                      <li class="nav-item">
                        <a class="nav-link" href="#section-4">Horaires/Tarifs</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#section-5">La Galerie</a>
                      </li>
                            
                      <li class="nav-item">
                        <a class="nav-link" href="#section-6">Retrouvez-nous </a>
                      </li>
                            
                      <li class="nav-item">
                        <a class="nav-link" href="#section-7">Contactez-nous</a>
                      </li>
                  </ul>           
              </div>
            </nav>
 


 <!-- Presentation-->
<section class="section-presentation" id="section-1">
  <div class="container">
    <div class="row">
      <div class="story">
        <div class="story__text">
          <p class="text-presentation">
            <h1>Le club Sok Muay Thaï:</h1>
            La famille SOK est ravie de vous accueillir pour enseigner l'art de la boxe thaïlandaise.
            Sport complet qui réunit tous les âges et tous les niveaux. 
            Nos cours sont structurés de façon que tout le monde puisse progresser dans cette discipline. 
          </p>

          <ul class="text-presentation">
            <li>Nos cours enfants(7/12 ans) et adolescents (13/17 ans) sont encadrés par notre coach Julien. </li><br>
            <li>Nos cours adultes sont encadrés par nos coachs Brams et Jean-Yves.</li>
          </ul>    
        </div>

        <div class="presentation-img">
          <figure class="story__shape">
            <img class="img-presentation" src="img/portrait julien.png" alt="julien" >
          </figure>

          <figure class="story__shape">
            <img class="img-presentation" src="img/portrait coach.png" alt="brams & jean-yves" >
          </figure>  
        </div> 
      </div>
    </div>
  </div>
</section>



      <section class="transition transition-1" ></section>
      
      <section class="section-card" id="section-3">
        <!--CONDITIONS/EQUIPEMENT-->                  
       <div class="container">
          <div class="row">     
             <!--piece à fournir-->
              <div class="col-md-6">
                <div class="card">
                  <div class="card__side card__side--front">
                  <div class="card__picture card__picture--1">
                    &nbsp;
                  </div>

                  <h3 class="card__heading">
                    <span class="card__heading-span card__heading-span--1">Pièces à fournir </span>
                  </h3>

                  <div class="card__details">
                    <ul>
                      <li>1 Certificat médical (précisant APTE pour la boxe Thaïlandaise)</li>
                          <li>2 photos d'identité (format officiel)</li>
                          <li>Formulaire d'inscription</li>
                          <li>Autorisation parentale (pour les mineurs)</li>
                      </ul>
                  </div>
                  <!--Terminer de coder l html/ recadrer les img/ code css-->
                  </div>    
                </div>
                 </div>                
                            
             <!--Equipement obligatoire-->


             <div class="col-md-6">
             <div class="card">
             <div class="card__side card__side--front">
                  <div class="card__picture card__picture--2">
                    &nbsp;
                  </div>

                 <h3 class="card__heading">
                 <span class="card__heading-span card__heading-span--1">Équipement obligatoire </span>
                 </h3>
                 <div class="card__details">
                  <ul>
                    <li>Gant de Boxe</li>
                    <li>Protège dents</li>
                    <li>Protège tibias</li>
                    <li>Claquettes</li>
                    <li>Coquille (pour les garçcons)</li>
                    <li>Short(type Muay Thaï de préférence)</li>
                    <li>Bandages</li>
                    </ul>
                  </div>
              </div>
            </div>
            </div>     
           
</section>

<section class="transition transition-3"></section>


<section class="section-card-down" id="section-4">
     <!--TARIF HORAIRES-->
                            

   <div class="container">
      <div class="row">
                             
        <div class="col-md-6">
          <div class="card">

             <div class="card__side card__side--front">
                <div class="card__picture card__picture--3">
                  &nbsp;
               </div>
                 <h3 class="card__heading">
                    <span class="card__heading-span card__heading-span--1">Horaires </span>
                  
                  </h3>
                    <div class="card__details">
                       <ul>
                          <li>Lundi / Jeudi:</li>
                            <li>17h30 - 18h30 : Cours enfants (7/12 ans)</li>
                            <li>18h30 - 20h00 : Cours ados (13/17 ans)</li>
                            <li>20h00 - 22h00 : Cours adultes</li>
                        </ul>
              </div>
            </div>
            </div>
      </div>

                                
    
     <div class="col-md-6">
        <div class="card">

          <div class="card__side card__side--front">
            <div class="card__picture card__picture--4">
              &nbsp;
             </div>
                <h3 class="card__heading">
                  <span class="card__heading-span card__heading-span--1">Tarifs </span>
                </h3>

                   <div class="card__details">
                      <ul>
                        <li>Enfants : 100€</li>
                        <li>Ado : 120€</li>
                        <li>Adulte : 180€</li>
                        <li>En cas de compétition, prévoir 50€ et une photo</li>
                     </ul>
                 </div>
              </div>
          </div>
      </div>        
  </section>

  <section class="transition transition-4"></section>


  <section class="section-gallery col-lg-12" id="section-5">
    <div class="row justify-content-center photos">
   
        <a href="img/galerie/gallery img 4.jpeg" data-lightbox="photos"><img src="img/galerie/gallery img 4.jpeg" alt=""  class="img-thumbnail img-fluid"></a>
      
        <a href="img/galerie/bols.JPG" data-lightbox="photos"><img src="img/galerie/bols.JPG" alt="" class="img-thumbnail img-fluid"></a>

        <a href="img/galerie/gallery img 1.jpeg" data-lightbox="photos"><img src="img/galerie/gallery img 1.jpeg" alt="" class="img-thumbnail img-fluid"></a>

        <a href="img/galerie/gallery img 2.jpeg" data-lightbox="photos"><img src="img/galerie/gallery img 2.jpeg" alt="" class="img-thumbnail img-fluid"></a>

        <a href="img/galerie/gallery img 3.jpeg" data-lightbox="photos"><img src="img/galerie/gallery img 3.jpeg" alt="" class="img-thumbnail img-fluid"></a>

        <a href="img/galerie/gallery img 5.jpeg" data-lightbox="photos"><img src="img/galerie/gallery img 5.jpeg" alt="" class="img-thumbnail img-fluid"></a>
        <a href="img/galerie/gallery img 6.jpeg" data-lightbox="photos"><img src="img/galerie/gallery img 6.jpeg" alt="" class="img-thumbnail img-fluid" ></a>
        <a href="img/galerie/gallery img 7.jpeg" data-lightbox="photos"><img src="img/galerie/gallery img 7.jpeg" alt="" class="img-thumbnail img-fluid" ></a>
        <a href="img/galerie/gallery img 8.jpeg" data-lightbox="photos"><img src="img/galerie/gallery img 8.jpeg" alt="" class="img-thumbnail img-fluid"></a>
        <a href="img/galerie/gallery img 9.jpeg" data-lightbox="photos"><img src="img/galerie/gallery img 9.jpeg" alt="" class="img-thumbnail img-fluid" ></a>
        <a href="img/galerie/gallery img 10.jpeg" data-lightbox="photos"><img src="img/galerie/gallery img 10.jpeg" alt="" class="img-thumbnail img-fluid" ></a>
        <a href="img/galerie/gallery img 11.jpeg" data-lightbox="photos"><img src="img/galerie/gallery img 11.jpeg" alt="" class="img-thumbnail img-fluid" ></a>
        <a href="img/galerie/gallery img 12.jpeg" data-lightbox="photos"><img src="img/galerie/gallery img 12.jpeg" alt="" class="img-thumbnail img-fluid" ></a>
    </div>
    




  </section>







  <section class="transition transition-5" ></section>
  
  <!--        MAPS/ADRESSE        -->
  
  <section class="section-contact" id="section-6">

  <div class="container">
    <div class="contact-localisation">
      <h3 class="contact-heading-main"><i class="icon-basic-geolocalize-01"></i> 9 Rue Roger Salengro</h3>
      <h5 class="contact-heading-sub">93350 Le Bourget</h5>
    </div>                   
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2620.874911775334!2d2.4188098154333693!3d48.93682430313519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66b7fb74b8f8d%3A0xa53558de9f95314a!2s9+Rue+Roger+Salengro%2C+93350+Le+Bourget!5e0!3m2!1sfr!2sfr!4v1546955038956" class="contact-map" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  </section>    

  
  <section class="transition transition-6"></section>



  
  <section class="section-form"  id="section-7">
      <!--        Formulaire       -->
      
    <br>
     <div class="container form-size-error" id="error"><?php echo $error.$successMessage; ?> </div>
    <br>
                            
    <div class="container form-size">
      <form name="formContact" method="post" class="form">
      <h3>Contactez-nous pour tout renseignement ou planification de cours particuliers</h3>

      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" name="emailContact" class="form-control" id="emailContact" aria-describedby="emailHelp" placeholder="Veuillez saisir votre adresse email*" required>
        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais vos données personnelles.</small>
      </div>

      <div class="form-group">
        <label for="subject">Sujet :</label>
        <input type="text" name="subjectContact" class="form-control" id="subjectContact" placeholder="Veuillez saisir votre sujet*" required>
      </div>
      
      <div class="form-group">
        <label for="textarea">Message :</label>
        <textarea class="form-control" name="contentContact" id="contentContact" placeholder="Veuillez saisir votre message*" rows="6" required></textarea>
      </div>

    
      <button type="submit" id="submit" class="btn btn-success">Envoyer</button>
      </form>
      <br>
    </div>

    
    </section>
</main>









    
    
        <!-- BODY:FOOTER -->
<footer class="footer">



        
  <!--Bootstrap script-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--The slim version doesn't support the all library-->
  <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
  <script src="js/main.js"></script>







  <!-- jQuery Ui-->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
             
  <div class="footer__logo-box">
    <picture class="footer__logo">
      <source srcset="img/logo-1x.png 1x, img/logo-2x.png 2x" media="(max-width: 37.5em)">
        <img srcset="img/logo-1x.png 1x, img/logo-2x.png 2x" 
          alt="Full logo"
          src="img/logo-2x.png">
    </picture>  
    </div>               
   
             
     <div class="container">
        <div class="row">   
       
         <div class="col-md-4">
          <div class="footer__navigation">           
            <h2>Retrouvez nous sur <br> les réseaux sociaux:</h2>
                <ul class="footer__list">
                  <li class="footer__item"><a href="https://www.instagram.com/sokmuaythai93/"><i class="footer-icon fab fa-instagram"></i></a></li>
                  <li class="footer__item"><a href="https://www.facebook.com/jeanyves.brams.5"><i class="footer-icon-face fab fa-facebook-f"></i></a></li>
                </ul>  
            </div>
        </div>     
    </div>                     


      </footer>
    </body>
</html>