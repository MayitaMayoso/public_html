<section>
    <form id="edit" method="post" action="index.php?action=modify" enctype="multipart/form-data">
        Nombre:<input name="name" value="<?php echo $resultat_usuari[0]['NOM'];?>"><br><br>
        Mail:<input name="mail" value="<?php echo $resultat_usuari[0]['MAIL'];?>"><br><br>
        Dirección:<input name="address" value="<?php echo $resultat_usuari[0]['ADDRESS'];?>"><br><br>
        Contraseña:<input name="password" type="password"><br><br>
        <input type="submit" value="Check-in"><br><br>
    </form>
</section>