<ul>
        <?php foreach ($resultat_products as $prod):?><li><p>
                <a class="link" id="product-link" href="#" target-data=<?php echo $prod['ID']?>>
                <?php echo $prod['NAME']?></a>
        </p></li><?php endforeach; ?>
</ul>