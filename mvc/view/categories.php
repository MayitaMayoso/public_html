<script type="text/javascript">
$(document).ready(
        function() {
                $("#categories-link a").on("click",
					function() {
						var cat = $(this).data("target");
						$("#content").load("content.php?action=products&cat=" + cat);

						return false;
					}.fadeIn(1000);
        		);
        }    
);
</script>

<div id="categories-link">
<?php foreach ($resultat_categories as $categoria): ?>
	<a href="#" class="item <?php echo$categoria['NAME']?>" data-target=<?php echo$categoria['ID']?>>		
		<div>
			<h3>
				<?php echo $categoria['NAME'] ?>
			</h3>
		</div>
	</a>
<?php endforeach; ?>
</div>