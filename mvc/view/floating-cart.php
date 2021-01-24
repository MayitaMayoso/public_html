<div id="products-link">
<?php echo "Total: ".count($products)." productos";?>
<?php $TOTAL_PRICE=0;?>
<?php foreach ($products as $prod):?>
    <?php $TOTAL_PRICE+=($prod['TOTAL']*$prod['PRICE']); ?>
    <div class="floating-cart-product"><h3>
        <?php echo $prod['NAME']." x".$prod['TOTAL']."  ".($prod['TOTAL']*$prod['PRICE'])."€"?>
    </h3></div>
<?php endforeach; ?>
<?php echo "Precio total: ".$TOTAL_PRICE."€"?>
</div>