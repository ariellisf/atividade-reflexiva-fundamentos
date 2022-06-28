$(document).ready(function () {
  var profissionalItem = "";
  profissionalItem += '<div class="form-group">';
  profissionalItem += '<label for="empresa">Nome da Empresa</label>';
  profissionalItem +=
    '<input type="text" id="empresa" name="empresa" placeholder="Nome da Empresa"/>';
  profissionalItem += '<label for="cargo">Cargo</label>';
  profissionalItem +=
    '<input type="text" id="cargo" name="cargo" placeholder="Cargo Ocupado"/>';
  profissionalItem += '<label for="periodoInicial">Período Inicial</label>';
  profissionalItem +=
    '<input type="date" id="periodoInicial" name="periodoInicial" />';
  profissionalItem += '<label for="periodoFInal">Período Final</label>';
  profissionalItem +=
    '<input type="date" id="periodoFinal" name="periodoFinal" />';
  profissionalItem += "</div>";

  var profissionalLista = $("#profissionalLista");

  profissionalLista.append(profissionalItem);

  $("#adicionarEmpresa").on("click", function (event) {
    profissionalLista.append(profissionalItem);
  });

  var academicoItem = "";
  academicoItem += '<div class="form-group">';
  academicoItem += '<label for="instituicao">Nome da Instituição</label>';
  academicoItem +=
    '<input type="text" id="instituicao" name="instituicao" placeholder="Nome da Instituição"/>';
  academicoItem += '<label for="curso">Curso</label>';
  academicoItem +=
    '<input type="text" id="curso" name="curso" placeholder="Nome do Curso"/>';
  academicoItem += '<label for="dataInicio">Data de Início</label>';
  academicoItem += '<input type="date" id="dataInicio" name="dataInicio" />';
  academicoItem += '<label for="dataConclusao">Data de Conclusão</label>';
  academicoItem +=
    '<input type="date" id="dataConclusao" name="dataConclusao" />';
  academicoItem += "</div>";

  var academicoLista = $("#academicoLista");

  academicoLista.append(academicoItem);

  $("#adicionarAcademico").on("click", function (event) {
    academicoLista.append(academicoItem);
  });

  var referenciaItem = "";
  referenciaItem += '<div class="form-group">';
  referenciaItem += '<label for="nomeReferencia">Nome da Referência</label>';
  referenciaItem +=
    '<input type="text" id="nomeReferencia" name="nomeReferencia" placeholder="Nome da Referência"/>';
  referenciaItem += '<label for="contato">Contato</label>';
  referenciaItem +=
    '<input type="tel" id="contato" name="contato" placeholder="(xx)xxxxx-xxx"/>';
  referenciaItem += "</div>";

  var referenciaLista = $("#referenciaLista");

  referenciaLista.append(referenciaItem);

  $("#adicionarReferencia").on("click", function (event) {
    referenciaLista.append(referenciaItem);
  });
});
