<?php foreach ($resultat_categories as $categoria): ?>
	<a href="#" class="item <?php echo$categoria['NAME']?> "id="category-link">
		<div><h3><?php echo $categoria['NAME'] ?></h3></div>
	</a>
<?php endforeach; ?>