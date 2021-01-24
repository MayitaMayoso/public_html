<script type="text/javascript">
    $(document).ready(
        function() {
            $("#floating-cart").hide();
        }
    );
</script>
<h2> Shopping Cart </h2>
<?php $TOTAL_PRICE=0; $TOTAL_PRODUCTS=0; ?>
<?php foreach ($products as $prod):?>
    <?php $TOTAL_PRICE+=($prod['TOTAL']*$prod['PRICE']); $TOTAL_PRODUCTS+=$prod['TOTAL']; ?>
    <div class="cart-product"><h3>
        <?php echo $prod['NAME']." x".$prod['TOTAL']."  ".($prod['TOTAL']*$prod['PRICE'])."€"?>
    </h3></div>
<?php endforeach; ?>
<?php echo "Total: (".$TOTAL_PRODUCTS.") ".$TOTAL_PRICE."€"?>