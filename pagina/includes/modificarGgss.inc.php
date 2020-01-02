<?php
if(isset($_POST['submit'])):
  $userObj7 = new UsersContr();
  $userObj7->editarGgss($_POST["uno"],$_POST["dos"],$_POST["tres"],$_POST["cuatro"],$_POST["cinco"],$_POST["seis"],$_POST["siete"],$_POST["ocho"]);
  #$_SESSION['test']=$_POST['uno'];
else:
   $userObj3 = new UsersView();
   $b = strlen($_SESSION['boton'])-7;
   $a=substr($_SESSION['boton'],0,$b);
   $result = $userObj3->showUser($a);
    ?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
Nombres: <input value="<?php echo($result[0]["NombreGgss"]);?>"  type="text" name="uno"><br>
Apellido Paterno: <input value="<?php echo($result[0]["ApellidoPatGgss"]);?>"  type="text" name="dos"><br>
Apellido Materno: <input value="<?php echo($result[0]["ApellidoMatGgss"]);?>"  type="text" name="tres"><br>
RUT(Sin verificador): <input value="<?php echo($result[0]["RutGgss"]);?>"  type="text" name="cuatro"><input value="<?php echo($result[0]["VerificadorGgss"]); ?>"  type="text" name="cinco"><br>
fecha nacimiento: <input value="<?php echo($result[0]["FechaNacimientoGgss"]);?>"  type="text" name="seis"><br>
lugar de nacimiento: <input value="<?php echo($result[0]["LugarNacimientoGgss"]);?>"  type="text" name="siete"><br>
<input type="hidden" name="ocho" value= <?php echo($a) ?>>
<input type="submit" name="submit" value="Editar - <?php echo(substr($_SESSION['boton'],-1))?>">
</form>

<?php
endif; ?>
