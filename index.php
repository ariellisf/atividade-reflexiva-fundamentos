<!DOCTYPE html>
<html>

<head>
  <title>Gerador de Currículos</title>
  <meta charset="utf-8" />
  <meta description="Atividade Reflexiva - Fundamentos da Programação" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</head>

<body>
  <main class="conteudo">
    <h1>Gerador de Currículos</h1>
    <div class="informacoes">
      <form action="gerar_curriculo.php" method="post">
        <div class="pessoais">
          <h2>Dados Pessoais</h2>
          <div class="grupo-campos">
            <label for="name">Nome Completo</label>
            <input type="text" id="name" name="name" placeholder="Nome Completo" />
          </div>

          <div class="grupo-horizontal">
            <div class="grupo-campos">
              <label for="nascimento">Data de Nascimento</label>
              <input type="date" id="nascimento" name="nascimento" />
            </div>
            <div class="grupo-campos">
              <label for="idade">Idade</label>
              <input type="text" id="idade" name="idade" placeholder="xx anos" />
            </div>
          </div>

          <div class="grupo-horizontal">
            <div class="grupo-campos">
              <label for="telefone">Telefone</label>
              <input type="tel" id="telefone" name="telefone" placeholder="(xx)xxxxx-xxx" />
            </div>
            <div class="grupo-campos">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="xxxxxx@xxxxxxx.com" />
            </div>
          </div>
        </div>

        <div class="profissional">
          <div class="lista-cabecalho">
            <h2>Dados Profissionais</h2>
            <button type="button" id="adicionarDadosProfissionais">
              + Adicionar
            </button>
          </div>
          <div id="dadosProfissionaisLista"></div>
        </div>

        <div class="escolar">
          <div class="lista-cabecalho">
            <h2>Dados Acadêmicos</h2>
            <button type="button" id="adicionarDadosAcademicos">
              + Adicionar
            </button>
          </div>
          <div id="dadosAcademicosLista"></div>
        </div>

        <div class="referencia">
          <div class="lista-cabecalho">
            <h2>Referências Pessoais</h2>
            <button type="button" id="adicionarDadosReferencias">
              + Adicionar
            </button>
          </div>
          <div id="dadosReferenciasLista"></div>
        </div>

        <input class="enviar" type="submit" value="Enviar formulário" />
      </form>
    </div>
  </main>
</body>

</html>