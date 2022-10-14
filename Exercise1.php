<?php

include_once('connection.php');

$sql = "SELECT * FROM funcionarios ORDER BY id ASC";

$result = $connection->query($sql);

?>

<!DOCTYPE html>
  <html lang="PT-BR">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <title>Exercise 1</title>

  </head>

  <body>
      <div class="container">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Cargo</th>
                <th scope="col">Salario Atual</th>
                <th scope="col">Salario Anterior</th>
              </tr>
            </thead>
            <tbody>
              <?php

                while($userData = mysqli_fetch_assoc($result)){

                  echo "<tr>";
                  echo "<td>".$userData['id'] . "</td>";
                  echo "<td>".$userData['nome'] . "</td>";
                  echo "<td>".$userData['cargo'] . "</td>";
                  echo "<td>".$userData['salario_atual'] . "</td>";
                  echo "<td>".$userData['salario_anterior'] . "</td>";
                  echo "</tr>";
                }
              ?>
            </tbody>

            
            
              <?php

                /*$query_soma = "SELECT SUM(salario_atual) AS sal_atual FROM funcionarios";
  
                $resultSoma =  mysqli_query($connection, $query_soma);
                $total = mysqli_fetch_array($resultSoma);

                echo "<td><input type='submit' value='calcular'></td>";
                echo "<td> A SOMA DO SALARIO ATUAL: " . $total['sal_atual'] . "</td>";*/
        
              ?>
        
            <form method="post">
              Salario_atual 1: <input type="text" name="txtV1">
            
              Salario_atual 2: <input type="text" name="txtV2">
              <hr>
              Salario_atual 3: <input type="text" name="txtV3">
         
              Salario_atual 4: <input type="text" name="txtV4">
              <hr>
              Salario_atual 5: <input type="text" name="txtV5">
         
              Salario_atual 6: <input type="text" name="txtV6">
              <hr>

              <input type="submit" value="Calcular">
            </form>

            <?php

              if($_POST){

                $v1 = $_POST['txtV1'];
                $v2 = $_POST['txtV2'];
                $v3 = $_POST['txtV3'];
                $v4 = $_POST['txtV4'];
                $v5 = $_POST['txtV5'];
                $v6 = $_POST['txtV6'];

                $total_salarioAtual = $v1 + $v2 + $v3 + $v4 + $v5 + $v6;
                echo "Total do Salario Atual: " . $total_salarioAtual;

              }
            ?>

    </div>
  </body>

</html>