<?php

class Users extends Dbh {

  protected function getUser($info1){
    $sql = "SELECT * FROM datos_ggss WHERE IdDatosGgss = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$info1]);
    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getUsers($prueba){
    $sql = "SELECT * FROM .$prueba";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    return $results;
  }

  protected function setUser($uno,$dos,$tres,$cuatro,$cinco,$seis,$siete){
    $sql = "INSERT INTO datos_ggss(NombreGgss,ApellidoPatGgss,ApellidoMatGgss, RutGgss, VerificadorGgss, FechaNacimientoGgss, LugarNacimientoGgss) VALUES (?,?,?,?,?,?,?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$uno,$dos,$tres,$cuatro,$cinco,$seis,$siete]);
    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getTables(){
        $tables = array();
        $sql = "SHOW TABLES FROM test";
        $result = $this->connect()->query($sql);
        $tablas = $result->fetchAll();
        return $tablas;
      }

  protected function cambiarUser($uno,$dos,$tres,$cuatro,$cinco,$seis,$siete,$ocho){
            $sql = "UPDATE datos_ggss SET NombreGgss=?, ApellidoPatGgss=?, ApellidoMatGgss=?, RutGgss=?, VerificadorGgss=?, FechaNacimientoGgss=?, LugarNacimientoGgss=? WHERE IdDatosGgss= ?";
          #  (NombreGgss,ApellidoPatGgss,ApellidoMatGgss, RutGgss, VerificadorGgss, FechaNacimientoGgss, LugarNacimientoGgss) VALUES (?,?,?,?,?,?,?) WHERE IdDatosGgss = 5";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$uno,$dos,$tres,$cuatro,$cinco,$seis,$siete,$ocho]);
          }

}
