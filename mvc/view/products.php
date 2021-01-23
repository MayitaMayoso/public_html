<script type="text/javascript">
$(document).ready(
        function() {
                $("#products-link a").on("click",
                        function() {
                                var prod = $(this).data("target");
                                $("#content").load("content.php?action=product&product=" + prod);

                                return false;
                        }
                ).fadeIn(1000);
        }    
);
</script>


<div id="products-link">
<?php foreach ($resultat_products as $prod):?>
	<a href="#" class="item" data-target=<?php echo $prod['ID']?>>
		<div>
			<h3>
                                <?php echo $prod['NAME']?>
			</h3>
		</div>

	</a>
<?php endforeach; ?>
</div>