////  SUBMITTING FORM CONTACT
$("formContact").submit(function(e) {
              
    var error = "";
    
    if ($("#emailContact").val() == "") {
        
        error += "Erreur dans la saisie de l'adresse email.<br>"
        
    }
    
    if ($("#subjectContact").val() == "") {
        
        error += "Erreur dans la saisie du sujet.<br>"
        
    }
    
    if ($("#contentContact").val() == "") {
        
        error += "Erreur dans la saisie du message.<br>"
        
    }
    
    if (error != "") {
        
       $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>Erreur survenue:</strong></p>' + error + '</div>');
        
        return false;
        
    } else {
        
        return true;
        
    }
})

////  SUBMITTING FORM PARTICULIER
$("formParticulier").submit(function(e) {
              
    var error = "";
    
    if ($("#emailParti").val() == "") {
        
        error += "Erreur dans la saisie de l'adresse email.<br>"
        
    }
    
    if ($("#subjectParti").val() == "") {
        
        error += "Erreur dans la saisie du sujet.<br>"
        
    }
    
    if ($("#contentParti").val() == "") {
        
        error += "Erreur dans la saisie du message.<br>"
        
    }
    
    if (error != "") {
        
       $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>Erreur survenue:</strong></p>' + error + '</div>');
        
        return false;
        
    } else {
        
        return true;
        
    }
})





  // Smooth Scrolling-TRANSITION 
      $('a[href*="#"]:not([href="#"])').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
     var target = $(this.hash);
     target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      
      if (target.length) {
     $('html, body').animate({
         scrollTop: target.offset().top
         }, 1000);
         return false;
     }
     }
   });
  


  