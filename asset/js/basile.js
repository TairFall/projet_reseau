// Modal inscription
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})


// Gestion formulaire inscription

$('#formabonne').on('submit', function(e) {
  e.preventDefault();
  let form = $('#formabonne')
  $('.error').html('')
    let nom = $('#nom').val()
    let prenom = $('#prenom').val()
    let email = $('#email').val()
    let password1 = $('#password1').val()
    let password2 = $('#password2').val()

    $.ajax({
      type: 'POST',
      url: 'ajax/ajax-register.php',
      url: form.attr('action'),
      data: {
         nom: nom,
         prenom: prenom,
         email: email,
         password1: password1,
         password2: password2
       },
      data: form.serialize(),
      dataType: 'json',
      beforeSend: function() {
        console.log('beforesend');
        // out btn submit
        //$('#btnsubmit').css('display','none')
      },

      success: function(response) {
        console.log(response)

        if(response.success == false) {
          // modal out
          if(response.errors.nom != null) {
            $('#error_nom').html(response.errors.nom)
          }
          if(response.errors.prenom != null) {
            $('#error_prenom').html(response.errors.prenom)
          }
          if(response.errors.email != null) {
            $('#error_email').html(response.errors.email)
          }
          if(response.errors.password != null) {
            $('#error_password').html(response.errors.password)
          }


        } else {
          $('#bye').trigger('click'); // équivalent de  $('#lien1').click();
           console.log('success')
        }
      }
    });


});




// Gestion formulaire connexion

$('#formlogin').on('submit', function(e) {
  e.preventDefault();
  let form = $('#formlogin')
  $('.error').html('')
    let email = $('#lemail').val()
    let password = $('#lpassword').val()
  $.ajax({
    type: 'POST',
    url: 'ajax/ajax-login.php',
    url: form.attr('action'),
    data: {
       email: email,
       password: password
     },
    data: form.serialize(),
    dataType: 'json',
    beforeSend: function() {
      console.log('beforesend');

      // out btn submit
      //$('#btnsubmit').css('display','none')
    },
    success: function(response) {
      console.log(response)
      if(response.success == false) {
        if(response.errors.email != null) {
          $('#lerror_email').html(response.errors.email)
        }
        if(response.errors.password != null) {
          $('#lerror_password').html(response.errors.password)
        }
        // modal out
         //$('#bye').trigger('click'); // équivalent de  $('#lien1').click();


      } else {
        console.log('success');
        window.location.reload();

      }
    }
  });

});




// Logout


$('#logout').on('click', function(e) {
  e.preventDefault();
  $.ajax({
    type: 'POST',
    url: 'ajax/ajax-logout.php',
    dataType: 'json',
    beforeSend: function() {
      console.log('beforesend');
      // out btn submit
      //$('#btnsubmit').css('display','none')
    },
    success: function(response) {
      console.log(response);
      console.log('bonjour');
      //window.location.replace(http://);
      window.location.reload();
    }
  });

});


/// MOT DE PASSE OUBLIE


/*
$('.forgot_pass').on('click', function(e) {
  e.preventDefault();
  $('#password_login_form').remove();
  $('#submit_login').addClass('submit_forgot');
  $('#formlogin').addClass('form_login');
  $('#submit_login').val('Envoyer');

  $('#bye2').on('click',function(){
    if (!$('#bye2').hasClass('byeforgot')){
      $('<div id="password_login_form" class="form-group"><label for="lpassword">Mot de passe</label><input type="password" id="lpassword" name="lpassword"><span class="error" id="lpassword"></span><div>').insertAfter("#email_login");
    }
    $('#submit_login').removeClass('submit_forgot');
    $('#formlogin').removeClass('form_login');
    $('#submit_login').val('Connexion');
    $('#bye2').addClass('byeforgot');


  })

  // AU SUBMIT
  $('.formlogin').on('submit', function(e) {
    e.preventDefault();
    let form = $('#formlogin')
    $('.error').html('')
    $.ajax({
      type: 'POST',
      url: 'ajax/ajax-forgot.php',
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'json',
      beforeSend: function() {
        console.log('beforesend');

        // out btn submit
        //$('#btnsubmit').css('display','none')
      },
      success: function(response) {
        console.log(response)

      }
    });

  });



});
*/
