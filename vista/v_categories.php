<br>
<br>
<?php foreach ($resultat_categories as $categoria): ?>
	<div class=categories>
		<h3><?php echo $categoria['NAME'] ?></h3>
		<br>
		<a href="/index.php?&cat=<?php echo$categoria['ID']?>">
        	<button class="Boton" id=<?php echo$categoria['ID']?>>Ver más</button>
        </a>
    </div>
<?php endforeach; ?>