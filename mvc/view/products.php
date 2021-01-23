<div id="products-link">
<?php foreach ($resultat_products as $prod):?><li><p>
        <a class="item <?php echo $prod['NAME']?>" href="#" target-data=<?php echo $prod['ID']?>>
                <?php echo $prod['NAME']?>
        </a>
<?php endforeach; ?>
</div>