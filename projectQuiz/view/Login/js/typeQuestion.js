jQuery(document).ready(function(){
  listTypes();
  function listTypes(){
    jQuery.ajax({
      type: 'POST',
      url: '../../../action/questionAction.php?require=listTypes',
      dataType: 'json',
      success: function(data){
        var id      = "";
        var name    = "";
        var option  = "";
        for (var i = 0; i < data.resp.length; i++){
          id = data.resp[i].id;
          name = data.resp[i].type_name;
          option = "<option value='"+id+"'>"+name+"</option>";
          $('#typeQuestion').append(option);
        };
      },
      error: function(data){
        alert("Erro");
      }
    });
  }
  listQuiz();
  function listQuiz(){
    jQuery.ajax({
      type: 'POST',
      url: '../../../action/quizAction.php?require=2',
      dataType: 'json',
      success: function(data){
        var id      = "";
        var name    = "";
        var option  = "";
        for (var i = 0; i < data.resp.length; i++){
          id = data.resp[i].id;
          name = data.resp[i].name;
          option = "<option value='"+id+"'>"+name+"</option>";
          $('#quizList').append(option);
        };
      },
      error: function(data){
        alert("Erro");
      }
    });
  }
});