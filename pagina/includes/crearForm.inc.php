
<?php
if(isset($_POST['submit'])):
  $userObj2 = new UsersContr();
  $userObj2->createUser($_POST["uno"],$_POST["dos"],$_POST["tres"],$_POST["cuatro"],$_POST["cinco"],$_POST["seis"],$_POST["siete"]);
 $_SESSION['test']=$_POST['uno'];
 else:?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
Nombres: <input type="text" name="uno"><br>
Apellido Paterno: <input type="text" name="dos"><br>
Apellido Materno: <input type="text" name="tres"><br>
RUT(Sin verificador): <input type="text" name="cuatro"><input type="text" name="cinco"><br>
fecha nacimiento: <input type="text" name="seis"><br>
lugar de nacimiento: <input type="text" name="siete"><br>

<input type="submit" name="submit" value="submit">
</form>

<?php
endif; ?>
