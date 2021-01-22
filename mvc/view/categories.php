<?php foreach ($resultat_categories as $categoria): ?>
	<a href="#" class="item <?php echo$categoria['NAME']?> "id="category-link" data-target=<?php echo$categoria['ID']?>>
		<div><h3><?php echo $categoria['NAME'] ?></h3></div>
	</a>
<?php endforeach; ?>