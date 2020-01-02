<?php
        if(!isset($_SESSION['tabla'])):
          $Tables = new UsersView();
          $tablas = $Tables->showTables();
          $tableton =[];
          $i = 0;
              while (current($tablas)){
                  array_push($tableton, ($tablas[$i]["Tables_in_test"]));
                  $i+=1;
                  next($tablas);
                }
                $_SESSION['tabla'] = $tableton;
              endif;
  $tabla = "datos_ggss";
  $testObj = new UsersView();
  echo ("esto es sesion tabla------>");
  $tab = ($_SESSION['tabla'][$_SESSION['tabla_seleccion']]);
  echo ($tab);
if(isset($_SESSION['tabla'][$_SESSION['tabla_seleccion']])):
  $prueba = $testObj->showUsers($tab);
  $titulo = $prueba;
else:
  $prueba = $testObj->showUsers($tabla);
  $titulo = $prueba;
endif;
  #Para crear nuevos usuarios GGSS.
  #$userObj2 = new UsersContr();
  #$userObj2->createUser("alo","alo","alo",1111,2,"1982-1-1","aqui");

#if(($_SESSION['boton']%2) ==0):
?>
<table class="table table-hover">
<thead>
<tr>
<?php  while (current($titulo[0])) {?>
    <td><?php echo key($titulo[0])?></td>
    <?php next($titulo[0]);} ?>
    <td><?php echo("testeando boton");?></td>
</tr>
</thead>
<tbody>
<tr>
  <?php  if (count($prueba)==1):
            while (current($prueba[0])){?>
              <td><?php echo current($prueba[0]);?></td>
              <?php next($prueba[0]);}?>
              <td><input type="submit" name="submit" value="<?php echo key($name)?>"></td>
</tr>
        <?php
         else:
            $j=0;
             foreach ($prueba as $name){
                      while (current($name)){
                              if(count($name)==$j+1):  ?>
                                <td><?php echo current($name);?></td>
                                <td> <a href="<?php echo("index.php?boton=".$name["IdDatosGgss"]."-Editar");?>" ><?php echo ($name["IdDatosGgss"]."-Editar"); ?></a></td>
                              <?php
                                $j=0;
                              else: ?>
                                <td><?php echo current($name);?></td>
                                <?php
                                  $j+=1;
                              endif;?>
                              <?php next($name);} ?>
                              <?php
          ?>  </tr><?php    }
         endif; ?>
</tbody>
</table>
