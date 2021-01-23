<section>
    <form id="edit" method="post" action="index.php?action=modify" enctype="multipart/form-data">
        Nombre:<input name="name" value="<?php echo $resultat_usuari[0]['NOM'];?>"><br><br>
        Mail:<input name="mail" value="<?php echo $resultat_usuari[0]['MAIL'];?>"><br><br>
        Dirección:<input name="address" value="<?php echo $resultat_usuari[0]['ADDRESS'];?>"><br><br>
        Foto de perfil:<?php if ($info_usuari[0]['imatge']!=NULL){?>
        <img class="img_cuenta" src="<?php echo $fotousuario.$usuario[0]['IMG']?> " alt="<?php echo $usuario[0]['NAME']?>"/>
        <?php }
        ?>
        <input type="file" name="img_perfil" /><br><br>
        Contraseña:<input name="password" type="password"><br><br>
        <input type="submit" value="Modificar datos"><br><br>
    </form>
</section>