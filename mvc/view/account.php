
<section id="account">
    <h2>Mi cuenta</h2>
    <form id="edit" method="post" action="index.php?action=modify" enctype="multipart/form-data">
        Nombre:<input name="NAME" value="<?php echo $resultat_usuari[0]['NAME'];?>"><br><br>
        Mail:<input name="MAIL" value="<?php echo $resultat_usuari[0]['MAIL'];?>"><br><br>
        Dirección:<input name="ADDRESS" value="<?php echo $resultat_usuari[0]['ADDRESS'];?>"><br><br>
        Foto de perfil:
        <?php if ($resultat_usuari[0]['IMG']!=NULL){?>
        <img class="foto_perfil" src="<?php echo '$pathpublico'.$resultat_usuari[0]['IMG']?> " alt="<?php echo $resultat_usuari[0]['NAME']?>"/>
        <?php }
        ?><br><br>
        <input type="file" name="IMG" /><br><br>
        Contraseña:<input name="PASSWORD" type="password"><br><br>
        <input type="submit" value="Modificar datos"><br><br>
    </form>
</section>