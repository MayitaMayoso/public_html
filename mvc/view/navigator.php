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
        <?php if (isset($_SESSION['ID'])) { ?>
                <li><?php echo $_SESSION['NAME']; ?></li>
                <li><a id="account-link" href="./../index.php?action=cuenta">Mi cuenta</a></li>
                <li><a id="orders-link" href="./../index.php?action=pedidos">Mis pedidos</a></li>
                <li><a id="logout-link" href="./../index.php?action=logout">Cerrar sesión</a></li>
        <?php } else { ?>
                <li>    <li>
                <li><a id="checkin-link" href="#" target="_self">Check-in</a></li>
                <li><a id="login-link" href="#" target="_self">Log-in</a></li>
        <?php } ?>
        <li><a href="./../index.php?action=carrito"><img class="carrito" src="resources/carrito.svg" /></a></li>
</ul>