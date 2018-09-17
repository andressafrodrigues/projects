  jQuery(document).ready(function(){
    jQuery('#tableQuiz').empty();
    jQuery.ajax({
      type:'POST',
      dataType: 'json',
      url: '../../../action/quizAction.php?require=2',
      success: function(data){
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
