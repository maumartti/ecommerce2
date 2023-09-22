$(document).ready(function() {
	$('.cart_button').click(function() {
			var productId = $(this).data('product-id');
			var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Obtener el token CSRF
			var quantity = $('#quantity_input').val(); //
			
			// Realiza una solicitud AJAX para agregar el producto al carrito
			$.ajax({
					url: '/add-to-cart/' + productId,
					type: 'POST',
					data: {
							_token: csrfToken, // Incluye el token CSRF en los datos de la solicitud
							quantity: quantity
					},
					success: function(data) {
							if (data.status == 'success') {
									// El producto se agregó exitosamente al carrito
									$.toastr.success('Agregado con éxito');
									//cambiamos el count de cart
									var newCartCount = data.totalCart;
        					$('.cart_count span').text(newCartCount);
							} else {
									// Maneja el caso de error si es necesario
									$.toastr.error('Error al agregar');
							}
					},
					error: function() {
							// Maneja el caso de error si la solicitud falla
							alert('Error al realizar la solicitud');
					}
			});
	});
});
