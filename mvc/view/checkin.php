<script type="text/javascript">
    function checkinFunction() {
        $("#content").load("content.php?action=checkin");
        console.log("me he registrado");
    }
</script>

<form id="checkin-form" method="post" action="#" onsubmit="checkinFunction()">
    <input placeholder="Nombre" name="name" type="text"><br><br>
    <input placeholder="Mail" name="mail" type="email"><br><br>
    <input placeholder="Dirección" name="address" type="text"><br><br>
    <input placeholder="Contraseña" name="password" type="password"><br><br>
    <input type="submit" value="Check-in"><br><br>
</form>