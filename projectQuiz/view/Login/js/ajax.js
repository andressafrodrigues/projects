
jQuery(document).ready(function(){
  jQuery("#formLogin").submit(function(e){
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

        if (response.result == true) {        
          alert(response.message);
          jQuery('input#username').prop('readonly', true);
          jQuery('input#password').prop('readonly', true);
          setTimeout(function(){
            document.location.replace('view/Login/pages/admin.php');
          }, 2000);

        }

      },
      error: function(response) {
        console.log(response);
      }

    });
    jQuery('[name="login"]').prop("disabled",false);
    jQuery('#login').html('Logar');

  });

  jQuery("#formQuiz").submit(function(e){
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
        alert('Sucesso! Você será direcionado para a tela de questões!');
        if (data.result == true) {
          setTimeout(function(){
            document.location.replace('newQuestion.php');
          }, 3000);

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

  jQuery("#formQuestion").submit(function(e){
    e.preventDefault();
    var formData = jQuery('#formQuestion').serialize();
    jQuery('[name="saveQuestion"]').prop("disabled", true);
    jQuery('[name="saveQuestion"]').html('Aguarde...');

    jQuery.ajax({
      type: 'POST',
      url: '../../../action/questionAction.php?require=1',
      dataType: 'json',
      data: formData,
      success: function(data){
        alert('Sucesso! Você será direcionado para a lista de Quiz!');
        if (data.result == true) {
          setTimeout(function(){
            document.location.replace('listQuiz.php');
          }, 3000);

        } else {
          alert("Erro ao tentar cadastrar Pergunta: "+data.message);
        }
      },
      error: function(data){
        alert("Erro ao tentar cadastrar Pergunta: "+data.message);
      }
    });
    jQuery('[name="saveQuestion"]').prop("disabled",false);
    jQuery('#saveQuestion').html('Salvar');
  });

});
