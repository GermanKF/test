<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href=<?php echo("index.php?boton=Home")?>>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=<?php echo("index.php?boton=userCreate")?>>Crear Usuario</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Listado de tablas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              if(isset($_SESSION['tabla'])):
              $i=0;
              while ($i < count($_SESSION['tabla'])){
                ?>
                <a class="dropdown-item" href=<?php echo("index.php?tablename=".$i)?>> <?php echo("--->".$_SESSION['tabla'][$i]."<-----");?>  </a>
                <?php
                $i+=1;
              }
            else:
              ?><a class="dropdown-item" href="#"> No Existe listado  </a><?php
            endif;
            ?>


            <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
