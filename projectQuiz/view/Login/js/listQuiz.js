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
