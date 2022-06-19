<!DOCTYPE html>
<html>
	<head>
		
		<title> Gerador de Currículos</title>
		<meta charset="utf-8">
		<meta description="Atividade Reflexiva - Fundamentos da Programação" >

	</head>

	<body>

		<h1>Gerador de Currículos</h1>
		<div class="informacoes" >

			<form action="action_page.php" method="post">

				<div class="pessoais">
					
					<h2>Dados Pessoais</h2>
					<div class="form-group">
						<label for="name">Nome Completo</label>
						<input type="text" id="name" name="name" placeholder="Nome Completo">
					</div>
					<div class="form-group">
						<label for="nascimento">Data de Nascimento</label>
						<input type="date" id="nascimento" name="nascimento">
					</div>
					<div class="form-group">
						<label for="idade">Idade</label>
						<input type="text" id="idade" name="idade" placeholder="xx anos">
					</div>
					<div class="form-group">
						<label for="telefone">Telefone</label>
						<input type="tel" id="telefone" name="telefone" placeholder="(xx)xxxxx-xxx">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" id="email" name="email" placeholder="xxxxxx@xxxxxxx.com">
					</div>

				</div>

				<div class="profissional">

					<h2>Dados Profissionais</h2>
					<div class="form-group">

						<label for="empresa">Nome da Empresa</label>
						<input type="text" id="empresa" name="empresa" placeholder="Nome da Empresa">
						<label for="cargo">Cargo</label>
						<input type="text" id="cargo" name="cargo" placeholder="Cargo Ocupado">
						<label for="periodoInicial">Período Inicial</label>
						<input type="date" id="periodoInicial" name="periodoInicial">
						<label for="periodoFInal">Período Final</label>
						<input type="text" id="periodoFinal" name="periodoFinal" placeholder="<?php echo date("d/m/Y"); ?>">

					</div>

					<button>Adicionar Empresa</button>

				</div>

				<div class="escolar">

					<h2>Dados Acadêmicos</h2>
					<div class="form-group">

						<label for="instituicao">Nome da Instituição</label>
						<input type="text" id="instituicao" name="instituicao" placeholder="Nome da Instituição">
						<label for="curso">Curso</label>
						<input type="text" id="curso" name="curso" placeholder="Nome do Curso">
						<label for="dataInicio">Data de Início</label>
						<input type="date" id="dataInicio" name="dataInicio">
						<label for="dataConclusao">Data de Conclusão</label>
						<input type="date" id="dataConclusao" name="dataConclusao">

					</div>

					<button>Adicionar Empresa</button>

				</div>

				<div class="referencia">

					<h2>Referências Pessoais</h2>		
					<div class="form-group">

						<label for="nomeReferencia">Nome da Referência</label>
						<input type="text" id="nomeReferencia" name="nomeReferencia" placeholder="Nome da Referência">
						<label for="contato">Contato</label>
						<input type="tel" id="contato" name="contato" placeholder="(xx)xxxxx-xxx">

					</div>

					<button>Adicionar Referência</button>

				</div>

				<input class="enviar" type="submit" value="Enviar formulário">

			</form>
		</div>

	</body>

</html>	