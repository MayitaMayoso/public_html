
<?php foreach ($resultat_categories as $categoria): ?>
	<li>
		<h3><?php echo $categoria['NAME'] ?></h3>
		<a href="/index.php?&cat=<?php echo$categoria['ID']?>">
        	<button class="Boton" id=<?php echo$categoria['ID']?>>Ver más</button>
        </a>
    </li>
<?php endforeach; ?>