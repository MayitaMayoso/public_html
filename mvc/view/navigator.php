<script type="text/javascript">
$(document).ready(
        function() {
                $("#checkin-link").on("click",
					function() {
						$("#content").load("content.php?action=checkin");
						return false;
					}
                );
                
                $("#login-link").on("click",
					function() {
						$("#content").load("content.php?action=login");
						return false;
					}
        		);
        }    
);
</script>

<a href="index.php"><img class="logo" src="resources/logo1.png" /></a>

<div class="nav-space"></div>

<ul class="nav-links">
    <li><a href="http://tdiw-e13.deic-docencia.uab.cat/">Inicio</a></li>
    <li><a id="checkin-link" href="#" target="_self">Check-in</a></li>
    <li><a id="login-link" href="#" target="_self">Log-in</a></li>
    <li><a href=""><img class="carrito" src="resources/carrito.svg" /></a></li>
</ul>