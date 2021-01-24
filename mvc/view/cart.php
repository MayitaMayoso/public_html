<script type="text/javascript">
    $(document).ready(
        function() {
            $("#buy-cart").on("click",
                function() {
                    $.get( "/mvc/model/buyCart.php" , 
                        function( ) {
                            $("#content").load("content.php?action=endshopping");   
					        $("#floating-cart").load('/mvc/controller/floating-cart.php');
                        }
                    );
                }
            );

            $("#empty-cart").on("click",
                function() {
                    $.get( "/mvc/model/emptyCart.php",
                        function( ) {
                            $("#content").load("content.php?action=endshopping");
					        $("#floating-cart").load('/mvc/controller/floating-cart.php');
                        }
                    );
                }
            );

            $("#cart-page .delete-item").on("click",
                function() {
					var prod = $(this).data("target");
                    $.get( "/mvc/model/deleteItem.php?product=" + prod,
                        function( ) {
                            $("#content").load("content.php?action=cart");
					        $("#floating-cart").load('/mvc/controller/floating-cart.php');
                        }
                    );
                }
            );

            $("#cart-page .increase-item").on("click",
                function() {
					var prod = $(this).data("target");
                    $.get( "/mvc/model/increaseItem.php?product=" + prod,
                        function( ) {
                            $("#content").load("content.php?action=cart");
					        $("#floating-cart").load('/mvc/controller/floating-cart.php');
                        }
                    );
                }
            );

            $("#cart-page .decrease-item").on("click",
                function() {
					var prod = $(this).data("target");
                    $.get( "/mvc/model/decreaseItem.php?product=" + prod,
                        function( ) {
                            $("#content").load("content.php?action=cart");
					        $("#floating-cart").load('/mvc/controller/floating-cart.php');
                        }
                    );
                }
            );
        }
    );
</script>

<div class="cart">
    <h2> Shopping Cart </h2>
    <?php $TOTAL_PRICE=0; $TOTAL_PRODUCTS=0; ?>
    <?php foreach ($products as $prod):?>
        <?php $TOTAL_PRICE+=($prod['TOTAL']*$prod['PRICE']); $TOTAL_PRODUCTS+=$prod['TOTAL']; ?>
        <div class="cart-product"><h3>
            <?php echo $prod['NAME']." x".$prod['TOTAL']."  ".($prod['TOTAL']*$prod['PRICE'])."€"?>
            <button class="increase-item" type="button" data-target=<?php echo$prod['ID']?>>Añadir</button>
            <button class="decrease-item" type="button" data-target=<?php echo$prod['ID']?>>Restar</button>
            <button class="delete-item" type="button" data-target=<?php echo$prod['ID']?>>Eliminar</button>
        </h3></div><br>
    <?php endforeach; ?>
    <?php echo "Total: (".$TOTAL_PRODUCTS.") ".$TOTAL_PRICE."€"?><br><br>
    <button id="buy-cart" type="button">Comprar</button>
    <button id="empty-cart" type="button">Vaciar carrito</button>
</div>