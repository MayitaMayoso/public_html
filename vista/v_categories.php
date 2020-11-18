<br>
<br>
<?php foreach ($resultat_categories as $categoria): ?>
	<a href="/index.php?&cat=<?php echo$categoria['ID']?>" class="item <?php echo$categoria['ID']?>">
			<div><h3><?php echo $categoria['NAME'] ?></h3></div>
	</a>
<?php endforeach; ?>