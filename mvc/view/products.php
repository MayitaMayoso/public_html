<div id="products-link">
<?php foreach ($resultat_products as $prod):?>
        <a href="#" class="item <?php echo $prod['NAME']?>" target-data=<?php echo $prod['ID']?>>
                <div><h3><?php echo $prod['NAME']?></h3></div>
        </a>
<?php endforeach; ?>
</div>