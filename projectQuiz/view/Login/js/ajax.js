
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
      url: 'action/loginAction.php?require=1',
      data: formData,
      dataType: 'json',
      success: function(response) {
        console.log('entrou no response');
        console.log(response.result);
        // alert('popopo');
        if (response.result == true) {  
          // console.log(response.res);       
          alert(response.message);
          jQuery('#formLogin').trigger('reset');
          setTimeout(function(){
            document.location.replace('admin.php');
          }, 2000);

        }

      },
      error: function(response) {
        console.log('entrou no error');
        console.log(response);
      }

    });
    jQuery('[name="login"]').prop("disabled",false);
    jQuery('#login').html('Logar');

  });

  $("#formQuiz").submit(function(e){
    e.preventDefault();
    var formData = jQuery('#formQuiz').serialize();
    jQuery('[name="saveQuiz"]').prop("disabled",true);
    jQuery('[name="saveQuiz"]').html('Aguarde...');

    jQuery.ajax({
      type: 'POST',
      url: '../../../action/quizAction.php?require=1',
      dataType: 'json',
      data: formData,
      success: function(data){
        if (data.result == true) {
          alert(data.message);
        } else {
          console.log(data);
        }
      },
      error: function(data){
        console.log(data.message);
      }
    });
    jQuery('[name="saveQuiz"]').prop("disabled",false);
    jQuery('#saveQuiz').html('Salvar');

  });
});
