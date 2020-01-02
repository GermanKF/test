<?php

class UsersView extends Users {
  public function showUser($info1){
      $results = $this->getUser($info1);
      return $results;
}

  public function showUsers($prueba){
    $results = $this->getUsers($prueba);
    return $results;
}
  public function showTables(){
        $results = $this->getTables();
        return $results;

    }
}
