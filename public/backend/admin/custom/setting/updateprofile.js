$("#updateprofileform").validate({
	onkeyup: function(element) {$(element).valid()},
	onchange: function(element) {$(element).valid()},
	onfocusout: false,
	rules: {
		name: {required: true,},										
	},
	
	messages: {
					
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
						location.reload();  
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