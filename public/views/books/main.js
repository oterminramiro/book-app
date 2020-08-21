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
	});
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
	});

	$('#filter-submit').click(function () {

		var type = [];
		$('#filter-type input:checked').each(function() {
		    type.push($(this).val());
		});
		var ed = [];
		$('#filter-ed input:checked').each(function() {
		    ed.push($(this).val());
		});


		$.ajax({
			type: "POST",
			url: '/filter_book',
			data: {
				'book_type':type,
				'editorial':ed,
			},
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success: function (data) {
				$('#books-content').empty();
				$('#books-content').html(data);
			},
			error: function (data) {
				console.log(data);
			}
		});
	});
});
