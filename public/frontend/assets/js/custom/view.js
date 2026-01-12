	$(document).on('click','.count_view', function () {
		var Link = $(this).data("link");
		var viewCountElement = $(this).find('span[id^="view-count-"]');
		$.ajax({
			url: CountAction,
			type: "POST",
			data: {Link:Link},
			 headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},								
			success: function (response) {
				if (response.error==false) {
					
					viewCountElement.text(response.viewCount);
				}				
			},
			error: function (xhr) {
				console.log("An error occurred:", xhr.responseText);
			}
		});		
	});