$("#changepasswordform").validate({
	onkeyup: function(element) {$(element).valid()},
	onchange: function(element) {$(element).valid()},
	onfocusout: false,
	rules: {
		oldpassword: {
			required: true,
			remote: {
				url: old_password_check,
				type: "post",
				data: { 
					'tag': 'old_password_check',
					'_token':$('meta[name="csrf-token"]').attr('content')
				},
			 }
		},			
		newpassword: {
			required: true,
			minlength: 8
		},							
		confirmpassword: {
			required: true,
			equalTo: "#newpassword"
		},							
	},
	
	messages: {
		oldpassword: {
			remote: "Old password does not match"
		},
		confirmpassword: {
			equalTo: "Password and confirmation password must be same"
		}			
	},
	
	submitHandler: function(form) {
		var formData = new FormData(form);
		$.ajax({
			url: form.action, 
			type: form.method,
			beforeSend: function(){
				$("#loading").show();
			},
			complete: function(){
				$("#loading").hide();
			},					
			data: formData,
			contentType: false,
			processData: false,
			dataType: "json", 
			success: function(data) {
			if(data.error == false){
					Swal.fire({
						title: alert,
						html: data.message,
						icon: "success",
						showCancelButton: false,
						confirmButtonText: ok,
					}).then(function(result) {
						  $("#changepasswordform").trigger("reset");
					});
				}
			}
		});
	},
			
	highlight: function(element, errorClass, validClass) {
		$(element).addClass('is-invalid');
	},
	unhighlight: function(element, errorClass, validClass) {
		$(element).removeClass('is-invalid');
	}
});