<script type="text/javascript">
$(document).ready(
	function() {
		$("#add-product").on("click",
			function() {
				<?php					
					require_once __DIR__ . '/../model/connection.php';
					require_once __DIR__.'/../model/order.php';

					$connection = connect();    
					$order = getOrder($connection);
					addProduct($product, $order, $connection);
				?>
			}
		);
	}<
);
</script>

<div class="product">
	<h2><?php echo $product['NAME'];?></h2><br>
	<p class="price"><?php echo $product['PRICE'];?></p>
	<p><?php echo $product['DESCRIPTION'];?></p><br>
	<button id="add-product" class="carrito">Añadir al carrito</button>
</div>