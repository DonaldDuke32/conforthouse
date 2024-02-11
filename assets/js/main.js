$(document).ready(function (){


$('#mailer').click(function(){

    document.getElementById("non_soumis_mail").style.display="none";
    document.getElementById("soumis_mail").style.display="block";
    
     var noms = document.getElementById('noms').value;
     var email = document.getElementById('email').value;
     var phone = document.getElementById('phone').value;
     var subject = document.getElementById('subject').value;
     var message = document.getElementById('message').value;

 
     if(noms !="" && email !="" & phone !="" && subject !="" && message !="" ){
     $.ajax({                                      
     url: 'php/mail.php',              
     type: "POST",          
     data: {'noms':noms , 'email':email , 'phone':phone , 'subject':subject , 'message':message},      
     success: function(data) {
         if(data =="OK"){
             swal("Reussi","Message envoyé !!! ","success");
             document.getElementById("soumis_mail").style.display="none";
             document.getElementById("non_soumis_mail").style.display="block";
         }else{
             swal("Attention","Echec d'envoi du message ","error");
             document.getElementById("soumis_mail").style.display="none";
             document.getElementById("non_soumis_mail").style.display="block";
         }
         }
 });
 
 
 }else{
     swal("Attention","Veuillez remplir tous les champs !!! ","warning");
     document.getElementById("soumis_mail").style.display="none";
     document.getElementById("non_soumis_mail").style.display="block";
 }
 });




});