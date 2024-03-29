$(document).ready(function(){


	$('.increment-btn').click(function(e){
		e.preventDefault();

		var qty = $(this).closest('.product_data').find('.input-qty').val();

		var value = parseInt(qty,10);
		value = isNaN(value) ? 0 : value;

		if(value < 10)
		{
			value++;
			$(this).closest('.product_data').find('.input-qty').val(value);
		}
	});

	$('.decrement-btn').click(function(e){
		e.preventDefault();

		var qty = $(this).closest('.product_data').find('.input-qty').val();

		var value = parseInt(qty,10);
		value = isNaN(value) ? 0 : value;

		if(value > 1)
		{
			value--;
			$(this).closest('.product_data').find('.input-qty').val(value);

		}

	});

	$('.addToCartBtn').click(function(e){
		e.preventDefault();

		// Inside product_data, find input-qty class
		var qty = $(this).closest('.product_data').find('.input-qty').val();
		var prod_id = $(this).val();

		$.ajax({
			method:"POST",
			url: "functions/handlecart.php",
			data: {
				"prod_id": prod_id,
				"prod_qty": qty,

				// We'll use the 'scope' variable to perform a query to the database
				"scope": "add"
			}, 

			success: function(response){
				if(response == 201)
				{
					alertify.success('Product added to cart');
				}

				else if(response == 401)
				{
					alertify.success('Login to continue');
				}
				else if(response == 'Existing')
				{
					alertify.success('Product already in cart');
				}
				else if(response == 500)
				{
					alertify.success('Something went wrong!');
				} 
			}
		});

	});

	$(document).on('click', '.updateQty', function() {

		var qty = $(this).closest('.product_data').find('.input-qty').val();
		var prod_id = $(this).closest('.product_data').find('.prodId').val();

		$.ajax({
			type: "POST",
			url: "functions/handlecart.php",
			data: {
				"prod_id": prod_id,
				"prod_qty": qty,

				// We'll use the 'scope' variable to perform a query to the database
				"scope": "update"
			}, 

			success: function(response){
				console.log(response);
			}
		});
	});

	$(document).on('click', '.deleteItem', function() {
		var cart_id = $(this).val();
		// alert(cart_id);

		swal({
		  title: "Are you sure?",
		  text: "Once deleted, you will not be able to recover!",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})

		.then((willDelete) => {
		  if (willDelete) {
		  	$.ajax({
				method: "POST",
				url: 'functions/handlecart.php',
				data: {
					"cart_id":cart_id,
					"scope":'delete'
				},

			success: function (response) {
				if(response == 200)
				{
					// alertify.success('Item deleted successfully');

					swal("Good job!", "Product deleted successfully!", "success");	
		  			$("#carts_table").load(location.href + " #carts_table");	
				}
				else
				{
					console.log(response);
					swal("Error!", "Something went wrong!", "error");
				}

			}
		  });
		}

		});
	});


});