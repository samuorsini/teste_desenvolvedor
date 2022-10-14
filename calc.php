<?php

  include("./CorrecaoDeSalario.php");
  include_once('connection.php');

        $nome = $_POST['nome'];
        $cargo = $_POST['cargo'];
        $salaAtual = $_POST['salAtual'];
        $salaAnterior = $_POST['salAnterior'];
        $correcaoSal = $_POST['correcaoSalarial'] / 100;
        $bonus = $_POST['bonuSalarial'];
        
      if($salaAtual != "" && $salaAnterior != ""){

        if($salaAtual <= 1500){
          
          $salariocalc = ($salaAtual * $correcaoSal) + $bonus;
          $salarioFinal = $salariocalc + $salaAtual;

        }else{
          $salariocalc = $salaAtual * $correcaoSal;
          $salarioFinal = $salariocalc + $salaAtual;
        }
      }
      echo "Salario com a correção salarial: " . $salarioFinal;

      $result = mysqli_query($connection, "INSERT INTO funcionarios(nome, cargo, salario_atual, salario_anterior, salario_reajustado)
      VALUES ('$nome', '$cargo', '$salaAtual', '$salaAnterior', '$salarioFinal')");

        
      ?>