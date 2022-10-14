<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./estilo.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
      rel="stylesheet"
    />
    <title>Cristália</title>
  </head>

  <body>
    <div class="container">

     
      <img src="./logoCris.png" alt="Logo da Empresa Cristália" title="Cristália">
      <p><strong>TESTE PARA DESENVOLVEDOR WEB</strong></p>

      <div class="header">
        <h2>Calculando salário</h2>
      </div>

      <form action="calc.php" method="POST" id="form" class="form">
        <div class="form-control">
          <label for="name">Nome</label>
          <input
            type="text"
            name="nome"
            placeholder="Digite seu nome..."
          />
        </div>

        <div class="form-control">
          <label for="cargo">Cargo</label>
          <input
            type="text"
            name="cargo"
            placeholder="Digite seu cargo..."
          />
        </div>

        <div class="form-control">
          <label for="salarioAtual">Salário Atual</label>
          <input
            type="text"
            name="salAtual"
            placeholder="Digite seu salário atual..."
          />
        </div>

        <div class="form-control">
          <label for="salarioAnterior">Salario Anterior</label>
          <input
            type="text"
            
            name="salAnterior"
            placeholder="Digite seu salario anterior..."
          />
        </div>

        <div class="form-control">
          <label for="correcaoSalarial">Correção Salarial</label>
          <input
            type="text"
            name="correcaoSalarial"
            placeholder="Digite a correção salarial..."
          />
        </div>

        <div class="form-control">
          <label for="bonus">Bonus Salarial</label>
          <input
            type="text"
            name="bonuSalarial"
            placeholder="Digite a bonus salarial..."
          />
        </div>

        <button type="submit">Enviar</button>

        <div class="form-control">
          <label for="somaSal">Soma total dos Salários: </label>
          <input
            type="text"
            name="somaSal"
          />

        </div>
        <button type="submit">Somar Salários</button>
      </form>
      
    </div>
  </body>
</html>
