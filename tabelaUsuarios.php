<?php
	$conexao = mysqli_connect ('localhost', 'root', '', 'tekmind') or die ('Erro!');
	$sql = "SELECT * FROM usuarios ORDER BY idUsuario;";
	$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Usuários Cadastrados</title>
	<link rel="stylesheet" type="text/css" href="estiloGeral.css">
	<style type="text/css">
		/*CAIXA DE CONTORNO*/
			fieldset { border: 4px solid #4B0082; width: 90%;}

		/*Tabela*/
			.table th, td{ border-bottom: 1px solid #4B0082; }
			.table td{ padding: 5px 25px; }
	</style>
</head>
<body>
	<!--TÍTULO-->
	<div class="titulo">
		<font id="fonte1" style="margin: 2%; left: 31%; font-family: Courier New; font-size: 60px;">Editar Usuários</font>

		<!--MENU SUPERIOR-->
			<nav>
			 	<ul class="menu">
				  	<li><a href="opcoesADM.php" type="submit">Voltar</a></li>
				  	<li><a href="index.php" type="submit">Sair</a></li>
				</ul>
			</nav>
			
		<!--LOGO-->
			<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
	</div>
	<br>
	<center>
		<fieldset>
		<!--BORDA DA TABELA-->
			<legend>&nbsp; <font size="4">Tabela de Usuários:</font> &nbsp;</legend>

		<!--Usuários-->
			<table class="table" border="0" cellpadding="0" cellspacing="7" width="95%">
				<tr>
					<th><font size="4">Id</font></th>
					<th><font size="4">Nome</font></th>
			        <th><font size="4">E-mail</font></th>
			        <th><font size="4">Endereço</font></th>
			        <th><font size="4">CPF</font></th>
			        <th><font size="4">Alterar</font></th>
			        <th><font size="4">Excluir</font></th>
				</tr>

				<tbody>
					<?php
						while ($registro = mysqli_fetch_array($resultado)) {
							echo "<tr>
									<td>" . $registro['idUsuario'] . "</td>
									<td>" . $registro['nomeUsuario'] . "</td>
									<td>" . $registro['emailUsuario'] . "</td>
									<td>" . $registro['enderecoUsuario'] . "</td>
									<td>" . $registro['cpfUsuario'] . "</td>

									<td><a href=editUsuario.php?idUsuario=" . $registro['idUsuario']."><img src='imagens/alterar.png' width='25px' height='26px'></a></td>

									<td><a href=excluirUsuario.php?idUsuario=" . $registro['idUsuario']."><img src='imagens/lixo.png' width='25px' height='23px'></a></td>
								</tr>";
						}
					?>
				</tbody>
			</table>
		</fieldset>
		</center>
		
		<!--CRÉDITOS-->
		<div class="div" style="position: fixed;">
			<p class="cred">Elisângela e Kerolai ® 2021</p>
		</div>
</body>
</html>