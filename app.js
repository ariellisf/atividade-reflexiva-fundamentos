$(document).ready(function () {
  const dadosProfissionaisLista = $("#dadosProfissionaisLista");
  const dadosAcademicosLista = $("#dadosAcademicosLista");
  const dadosReferenciasLista = $("#dadosReferenciasLista");

  dadosProfissionaisLista.append(dadosProfessionaisItem());
  dadosAcademicosLista.append(dadosAcademicosItem());
  dadosReferenciasLista.append(dadosReferenciasItem());

  $("#adicionarDadosProfissionais").on("click", function () {
    dadosProfissionaisLista.append(dadosProfessionaisItem());
  });

  $("#adicionarDadosAcademicos").on("click", function () {
    dadosAcademicosLista.append(dadosAcademicosItem());
  });

  $("#adicionarDadosReferencias").on("click", function () {
    dadosReferenciasLista.append(dadosReferenciasItem());
  });

  function dadosProfessionaisItem() {
    const posicao = $(".professional-item").length;

    return `
      <div class="lista-item professional-item">
        <div class="grupo-horizontal">
          <div class="grupo-campos">
            <label for="dadosProfissionais[${posicao}][empresa]">Nome da Empresa</label>
            <input type="text" name="dadosProfissionais[${posicao}][empresa]" placeholder="Nome da Empresa"/>
          </div>

          <div class="grupo-campos">
            <label for="dadosProfissionais[${posicao}][cargo]">Cargo</label>
            <input type="text" name="dadosProfissionais[${posicao}][cargo]" placeholder="Cargo Ocupado"/>
          </div>
        </div>

        <div class="grupo-horizontal">
          <div class="grupo-campos">
            <label for="dadosProfissionais[${posicao}][periodoInicial]">Período Inicial</label>
            <input type="date" name="dadosProfissionais[${posicao}][periodoInicial]" />
          </div>
          
          <div class="grupo-campos">
            <label for="dadosProfissionais[${posicao}][periodoFinal]">Período Final</label>
            <input type="date" name="dadosProfissionais[${posicao}][periodoFinal]" />
          </div>          
        </div>
      </div>
    `;
  }

  function dadosAcademicosItem() {
    const posicao = $(".dados-academicos-item").length;

    return `
      <div class="lista-item dados-academicos-item">
        <div class="grupo-horizontal">
          <div class="grupo-campos">
            <label for="dadosAcademicos[${posicao}][instituicao]">Nome da Instituição</label>
            <input type="text" name="dadosAcademicos[${posicao}][instituicao]" placeholder="Nome da Instituição"/>
          </div>

          <div class="grupo-campos">
            <label for="dadosAcademicos[${posicao}][curso]">Curso</label>
            <input type="text" name="dadosAcademicos[${posicao}][curso]" placeholder="Nome do Curso"/>
          </div>
        </div>

        <div class="grupo-horizontal">
          <div class="grupo-campos">
            <label for="dadosAcademicos[${posicao}][dataInicio]">Data de Início</label>
            <input type="date" name="dadosAcademicos[${posicao}][dataInicio]" />
          </div>

          <div class="grupo-campos">
            <label for="dadosAcademicos[${posicao}][dataConclusao]">Data de Conclusão</label>
            <input type="date" name="dadosAcademicos[${posicao}][dataConclusao]" />
          </div>
        </div>
      </div>
    `;
  }

  function dadosReferenciasItem() {
    const posicao = $(".referencias-item").length;

    return `
      <div class="lista-item referencias-item">
        <div class="grupo-horizontal">
          <div class="grupo-campos">
            <label for="dadosReferencias[${posicao}][nome]">Nome da Referência</label>
            <input type="text" name="dadosReferencias[${posicao}][nome]" placeholder="Nome da Referência"/>
          </div>

          <div class="grupo-campos">
            <label for="dadosReferencias[${posicao}][contato]">Contato</label>
            <input type="tel" name="dadosReferencias[${posicao}][contato]" placeholder="(xx)xxxxx-xxx"/>
          </div>
        </div>
      </div>
    `;
  }
});
