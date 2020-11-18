<h1>
        Hello world
</h1>
<ul>
        <?php foreach ($resultat_productes as $prod):?>
                <li>
                        <p>
                                <a class="link" href="/index.php?action=product&product=<?php echo $prod['ID']?>">
                                <?php echo $prod['NAME']?></a>
                        </p>
                </li>
        <?php endforeach; ?>
</ul>