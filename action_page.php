<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Meu Curriculo</title>
	<link rel="stylesheet" type="text/css" href="curriculo.css" />
</head>

<?php
$nomeCompleto = $_POST['name'];
$dataNascimento = $_POST['nascimento'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$dadosProfissionais = $_POST['dadosProfissionais'];
$dadosAcademicos = $_POST['dadosAcademicos'];
$dadosReferencias = $_POST['dadosReferencias'];
?>

<body>
	<div class="conteudo">
		<h1>Curriculo Vitae</h1>
		<h3><?php echo $nomeCompleto; ?></h3>

		<h4>Dados pessoais</h4>
		<hr />
		<div class="campo">
			<p><strong>Data de Nascimento: </strong><?php echo $dataNascimento; ?></p>
		</div>

		<div class="campo">
			<p><strong>Idade: </strong><?php echo $idade; ?></p>
		</div>

		<div class="campo">
			<p><strong>Telefone: </strong><?php echo $telefone; ?></p>
		</div>

		<div class="campo">
			<p><strong>E-mail: </strong><?php echo $email; ?></p>
		</div>

		<h4>Dados Profissionais</h4>
		<hr />
		<ul>
			<?php foreach ($dadosProfissionais as $value) { ?>
				<li>
					<div class="lista-item">
						<div class="grupo-horizontal">
							<p><strong>Empresa: </strong><?php echo $value['empresa']; ?></p>
							<p><strong>Cargo: </strong><?php echo $value['cargo']; ?></p>
						</div>

						<div class="grupo-horizontal">
							<p><strong>Período Inicial: </strong><?php echo $value['periodoInicial'] ?></p>
							<p><strong>Período Final: </strong><?php echo $value['periodoFinal'] ?></p>
						</div>
					</div>
				</li>
			<?php } ?>
		</ul>

		<h4>Dados Acadêmicos</h4>
		<hr />
		<ul>
			<?php foreach ($dadosAcademicos as $value) { ?>
				<li>
					<div class="lista-item">
						<div class="grupo-horizontal">
							<p><strong>Nome da Instituição: </strong><?php echo $value['instituicao'] ?></p>
							<p><strong>Curso: </strong><?php echo $value['curso'] ?></p>
						</div>

						<div class="grupo-horizontal">
							<p><strong>Data de Inicial: </strong><?php echo $value['dataInicio'] ?></p>
							<p><strong>Data de Conclusão: </strong><?php echo $value['dataConclusao'] ?></p>
						</div>
					</div>
				</li>
			<?php } ?>
		</ul>

		<h4>Referências Pessoais</h4>
		<hr />
		<ul>
			<?php foreach ($dadosReferencias as $value) { ?>
				<li>
					<div class="lista-item">
						<div class="grupo-horizontal">
							<p><strong>Nome da Referência: </strong><?php echo $value['nome'] ?></p>
							<p><strong>Contato: </strong><?php echo $value['contato'] ?></p>
						</div>
					</div>
				</li>
			<?php } ?>
		</ul>

		<button type="button" onclick="window.print();">Imprimir</button>
	</div>

</body>

</html>