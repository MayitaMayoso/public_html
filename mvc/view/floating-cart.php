<div id="products-link">
<?php foreach ($products as $prod):?>
    <div class="floating-cart-product"><h3>
        <?php echo $prod['NAME']." x".$prod['TOTAL']."  ".($prod['TOTAL']*$prod['PRICE'])?>
    </h3></div>
<?php endforeach; ?>
</div>