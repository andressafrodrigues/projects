
$(document).ready(function(){
  $("#formLogin").submit(function(e){
    console.log('oi');
    e.preventDefault();
    var formData = jQuery('#formLogin').serialize();
    console.log(formData);
    jQuery('[name="login"]').prop("disabled",true);
    jQuery('[name="login"]').html('Aguarde...');

    jQuery.ajax({
      type: 'POST',
      url: 'controller/loginController.php?login',
      data: formData,
      dataType: 'json',
      success: function(response) {
        console.log(response.result);
        // alert('popopo');
        if (response.result == true) {         
          alert(response.message)
          jQuery('#formLogin').trigger('reset');
          setTimeout(function(){
            document.location.replace('admin.php');
          }, 2000);

        } else {
          jQuery('#msgLogar').html('<p class="alert alert-danger">' + response["responseText"] + '</p>');
        }

      },
      error: function(response) {
        console.log(response);
      }

    });
    jQuery('[name="login"]').prop("disabled",false);
    jQuery('#login').html('Logar');

  });

  $("#formQuiz").submit(function(e){
    console.log('oi');
    e.preventDefault();
    var formData = jQuery('#formQuiz').serialize();
    jQuery('[name="saveQuiz"]').prop("disabled",true);
    jQuery('[name="saveQuiz"]').html('Aguarde...');

    jQuery.ajax({
      type: 'POST',
      url: '../../../action/quizAction.php?require=1',
      data: formData,
      dataType: 'json',
      success: function(response) {
        if (response.result == true) {         
          alert(response.message);
          // jQuery('#formQuiz').trigger('reset');
          // // setTimeout(function(){
          // //   document.location.replace('admin.php');
          // // }, 2000);
        } else {
          jQuery('#msgLogar').html('<p class="alert alert-danger">' + response["responseText"] + '</p>');
          console.log(response);
        }
      },
      error: function(response) {
        console.log('aa');
        console.log(response.message);
      }

    });
    jQuery('[name="saveQuiz"]').prop("disabled",false);
    jQuery('#saveQuiz').html('Salvar');

  });

  //     jQuery("#saveQuiz").click(function () {
  //            var dataForm = {
  //                 name: $("input#name").val(),
  //                 description: $("input#description").val(),
  //            };
  //    
  //           $.ajax({
  //                 url: "../../../../action/quizAction.php?req=1",
  //                 type: "POST",
  //                 dataType: "html",
  //                 data: dataForm,
  //                 success: function (result) {
  //                      $("#resultado").html(result);
  //                 },
  //                 error: function (result) {
  //                     console.log(result);
  //                 }
  //           });
  //      });

});
