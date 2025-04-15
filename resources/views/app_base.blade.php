
<!DOCTYPE HTML>
<html>
	<link rel="stylesheet" href="../../dist/css/adminlte.css" />
	@include('site.includes.head')
	
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			@include('site.includes.top-menu')
			
		</nav>
		@yield('content')

		@include('site.includes.footer')
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	@include('site.includes.scripts')
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	</body>
	<script>
		$(document).ready(function () {
			
			$( ".add_panier" ).on( "click", function( event ) {
				let article_id = $(this).data('article_id');
				let user_id =  $(this).data('user_id');
				let quantite = $(this).closest('.product-entry').find("input[type='number']").val();
				let url= '{{route('add_to_panier')}}';
				let token = '{{ csrf_token() }}'
				console.log(user_id);
				var panier = $('#cart_value')
				
				$.ajax({
					type: "POST",
					url: url,
					data:{
						_token:token,
						article_id:article_id,
						user_id:user_id,
						quantite: quantite
						
					},
					dataType: "json",
					success: function (response, status) {
						console.log(response, status);
						
						if (status =="success") {
							alerty(message=response.message, type= 'success');
							let num = response.num;
							panier.append(`<span>10</span>`);
							
						}else{
							alerty(message=response.message, type= 'error')
						}
						}
						
					});
			});
		});
			
function alerty (message, type) { 
	Swal.fire({
  position: "top-end",
  icon: type,
  title: message,
  showConfirmButton: false,
  timer: 1500
});
 }

 
	</script>
</html>

