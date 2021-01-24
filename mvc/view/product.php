<script type="text/javascript">
$(document).ready(
	function() {
		$("#add-product").on("click",
			function() {
				var productId = $(this).closest(".product").data("product");
				$.get( "/mvc/model/addProduct.php?product=" + productId , function( data ) {
					$("#floating-cart").load('/mvc/controller/floating-cart.php');
				});
			}
		);
	}
);
</script>

<div class="product" data-product="<?php echo $product["ID"];?>">
	<h2><?php echo $product['NAME'];?></h2><br>
	<p><?php echo $product['DESCRIPTION'];?></p><br>
	<hr>
	<p class="price"><?php echo $product['PRICE'];?></p>
	<button id="add-product" class="carrito">Añadir al carrito</button>
</div>