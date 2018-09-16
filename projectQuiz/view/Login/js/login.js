// (function($){

	// function login(){
	// 	var url = "controller/userController.php";
	// 	var frm = jQuery('#formLogin');
	// 	var type = jQuery('#type').val();
	// 	var user = jQuery('#username').val();
	// 	var pass = jQuery('#password').val();
	// 	var dataLogin = {
	// 		"type" = type,
	// 		"user" = user,
	// 		"password" = pass
	// 	};
	// 	alert(dataLogin);
		/*
		$.ajax({
			type: "POST",
			dataType: "json",
			url: url,
			data: dataLogin,
			async : true,
			success: function(data){
				var retorno = $.parseJSON(data);
				alert(retorno.Mensagem);
			},
			error: function(data){
				alert("Error");
			}
		});
		*/
// 	}

// });



$(document).ready(function(){
	$("#formLogin").submit(function(e){
		e.preventDefault();
		 var formData = $('#formLogin').serialize();
		$('[name="login"]').prop("disabled",true);
		$('[name="login"]').html('Aguarde...');

		$.ajax({
			type: 'POST',
			url: '../model/User.php',
			data: formData,
			dataType: 'json',
			success: function(response) {
				if (response == true) {
					alert('funcionou essa porra');         
					$('#formLogin').trigger('reset');
					setTimeout(function(){
						document.location.replace('teste.php');
					}, 2000);
				}
			}
		});
	});
});