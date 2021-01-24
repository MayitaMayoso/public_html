<script type="text/javascript">
$(document).ready(
	function() {
		$("#add-product").on("click",
			function() {
				var productId = $(this).closest(".product").data("product");
				load("/../model/addProduct.php?product=" + productId);
			}
		);
	}
);
</script>

<div class="product" data-product="<?php echo $product["ID"];?>">
	<h2><?php echo $product['NAME'];?></h2><br>
	<p class="price"><?php echo $product['PRICE'];?></p>
	<p><?php echo $product['DESCRIPTION'];?></p><br>
	<button id="add-product" class="carrito">Añadir al carrito</button>
</div>