$( document ).ready(function() {
	console.log(document.cookie)
	$('.addtocart').click(function () {
		var guid = $(this).attr('id');

		$.ajax({
			type: "POST",
			url: '/addtocart',
			data: {
				'guid':guid,
			},
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success: function (data) {
				console.log(document.cookie)
			},
			error: function (data) {
				console.log(document.cookie);
			}
		});
	})
});
