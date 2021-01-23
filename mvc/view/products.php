<script type="text/javascript">
$(document).ready(
        function() {
                var container = $("#content");
                
                $("#products-link a").on("click",
                        function() {
                                var prod = $(this).data("target");
                                container.load("content.php?action=product&product=" + prod);

                                return false;
                        }
                );
        }    
);
</script>


<div id="products-link">
<?php foreach ($resultat_products as $prod):?>
	<a href="#" class="item" target-data=<?php echo $prod['ID']?>>
		<div>
			<h3>
                                <?php echo $prod['ID']?> <?php echo $prod['NAME']?>
			</h3>
		</div>

	</a>
<?php endforeach; ?>
</div>