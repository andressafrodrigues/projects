
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


  jQuery(document).ready(function(){
    jQuery('#tabela').empty();
    jQuery.ajax({
      type:'POST',
      dataType: 'json',
      url: '../../../action/quizAction.php?require=2',
      success: function(data){
        console.log(data.resp);
        console.log(data.resp.length);
          console.log(data.resp[1].desc);
        for (var i = data.resp.length - 1; i >= 0; i--) {
          jQuery('#tableQuiz').append('<tr> '+
                                        '<td>'+data.resp[i].id+'</td>'+
                                        '<td>'+data.resp[i].name+'</td>'+
                                        '<td>'+data.resp[i].description +'</td>'+
                                        '<td><button class="btn-info" onclick="startQuiz('+data.resp[i].id+')">Iniciar Quiz</button></td>'+
                                      '</tr>');
        }
      }
    });
});
  
});
