$( document ).ready(function() {
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
				console.log('agregado');
				$('#shoppingcart-div').empty();
				$('#shoppingcart-div').append(data);
			},
			error: function (data) {
				console.log(data);
			}
		});
	})
	$('.removecart').click(function () {
		var guid = $(this).attr('id');

		$.ajax({
			type: "POST",
			url: '/removecart',
			data: {
				'guid':guid,
			},
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success: function (data) {
				console.log('eliminado');
				$('#shoppingcart-div').empty();
				$('#shoppingcart-div').append(data);
			},
			error: function (data) {
				console.log(data);
			}
		});
	})
});
