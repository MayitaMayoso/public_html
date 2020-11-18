<h1><?php echo $categoria[0]['NAME']?></h1>
        <ul>
        <?php foreach ($productes as $prod):?>
                <p><a class="boto_info" href="/index.php?&product=<?php echo $prod['ID']?>">
                    <?php echo $prod['NAME']?></a></p>
            </li>
            <?php endforeach; ?>
        </ul>