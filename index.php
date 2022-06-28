<!DOCTYPE html>
<html>
  <head>
    <title>Gerador de Currículos</title>
    <meta charset="utf-8" />
    <meta description="Atividade Reflexiva - Fundamentos da Programação" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,700;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src= "app.js"></script>
  </head>

  <body>
    <h1>Gerador de Currículos</h1>
    <div class="informacoes">
      <form action="action_page.php" method="post">
        <div class="pessoais">
          <h2>Dados Pessoais</h2>
          <div class="form-group">
            <label for="name">Nome Completo</label>
            <input
              type="text"
              id="name"
              name="name"
              placeholder="Nome Completo"
            />
          </div>
          <div class="form-group">
            <label for="nascimento">Data de Nascimento</label>
            <input type="date" id="nascimento" name="nascimento" />
          </div>
          <div class="form-group">
            <label for="idade">Idade</label>
            <input type="text" id="idade" name="idade" placeholder="xx anos" />
          </div>
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input
              type="tel"
              id="telefone"
              name="telefone"
              placeholder="(xx)xxxxx-xxx"
            />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="xxxxxx@xxxxxxx.com"
            />
          </div>
        </div>

        <div class="profissional">
          <h2>Dados Profissionais</h2>

          <div id="profissionalLista"> 
          </div>

          <button type="button" id="adicionarEmpresa">Adicionar Empresa</button>
        </div>

        <div class="escolar">
          <h2>Dados Acadêmicos</h2>

          <div id="academicoLista"> 
          </div>

          <button type="button" id="adicionarAcademico" >Adicionar Dados Academicos</button>
        </div>

        <div class="referencia">
          <h2>Referências Pessoais</h2>

          <div id="referenciaLista"> 
          </div>

          <button type="button" id="adicionarReferencia">Adicionar Referência</button>
        </div>

        <input class="enviar" type="submit" value="Enviar formulário" />
      </form>
    </div>
  </body>
</html>
