<?php

  $dbHostname = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'exercise1';

  $connection = new mysqli($dbHostname, $dbUsername, $dbPassword, $dbName);

  /*if($connection->connect_errno){

    echo"Não foi possível conextar no Banco de dados";

  }

  else{
    echo "Conexão efutuada com sucesso";
  }*/

?>