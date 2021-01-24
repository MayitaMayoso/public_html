<script type="text/javascript">
    $(document).ready(
        function() {
            $("#floating-cart").hide();
        }

        $("#buy-cart").on("click",
			function() {
				var productId = $(this).closest(".product").data("product");
				$.get( "/mvc/model/buyCart.php?product=" + productId , function( data ) {
					console.log("Cesta comprada");
				});
			}
		);

        $("#empty-cart").on("click",
			function() {
				var productId = $(this).closest(".product").data("product");
				$.get( "/mvc/model/emptyCart.php", function( data ) {
					console.log("Cesta vaciada.");
				});
			}
		);
    );
</script>

<div id="cart-page">
<h2> Shopping Cart </h2>
<?php $TOTAL_PRICE=0; $TOTAL_PRODUCTS=0; ?>
<?php foreach ($products as $prod):?>
    <?php $TOTAL_PRICE+=($prod['TOTAL']*$prod['PRICE']); $TOTAL_PRODUCTS+=$prod['TOTAL']; ?>
    <div class="cart-product"><h3>
        <?php echo $prod['NAME']." x".$prod['TOTAL']."  ".($prod['TOTAL']*$prod['PRICE'])."€"?>
    </h3></div>
<?php endforeach; ?>
<button id="buy-cart" type="button">¿Efectuar compra!</button>
<button id="empty-cart" type="button">Vaciar carrito</button>
<?php echo "Total: (".$TOTAL_PRODUCTS.") ".$TOTAL_PRICE."€"?>
</div>