
<section id="account">
    <h2>Mi cuenta</h2>
    <form id="edit" method="post" action="index.php?action=modify" enctype="multipart/form-data">
        Nombre:<input name="name" value="<?php echo $resultat_usuari[0]['NOM'];?>"><br><br>
        Mail:<input name="mail" value="<?php echo $resultat_usuari[0]['MAIL'];?>"><br><br>
        Dirección:<input name="address" value="<?php echo $resultat_usuari[0]['ADDRESS'];?>"><br><br>
        Foto de perfil:
        <?php if ($resultat_usuari[0]['IMG']!=NULL){?>
        <img class="foto_perfil" src="<?php echo $fotousuario.$resultat_usuari[0]['IMG']?> " alt="<?php echo $resultat_usuari[0]['NAME']?>"/>
        <?php }
        ?>
        <input type="file" name="img_user" />
        Contraseña:<input name="password" type="password"><br><br>
        <input type="submit" value="Modificar datos"><br><br>
    </form>
</section>