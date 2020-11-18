<h1>
        <?php echo $categoria[0]['NAME']?>
</h1>
<ul>
        <?php foreach ($resultat_productes as $prod):?>
                <li>
                        <p>
                                <a class="boto_info" href="/index.php?&product=<?php echo $prod['ID']?>">
                                <?php echo $prod['NAME']?></a>
                        </p>
                </li>
        <?php endforeach; ?>
</ul>