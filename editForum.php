<?php
	$conexao = mysqli_connect ('localhost', 'root', '', 'tekmind') or die ('Erro!');
	if (isset ($_POST['btenvia'])) {

		date_default_timezone_set('America/Sao_Paulo');
		$data = date('d/m/Y - H:i:s');
		$de = $_POST['de'];
		$para = $_POST['para'];
		$mensagem = $_POST['mensagem'];

		$sql = "INSERT INTO forum (de, para, mensagem) VALUES ('$de', '$para', '$mensagem');";
		$resultado = mysqli_query ($conexao, $sql);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Administrador | Editar Fórum</title>
	<link rel="stylesheet" type="text/css" href="estiloGeral.css">
	<style type="text/css">
		body{ font-family: Century Gothic; font-size: 15px;}
		
		/*CAIXA DE CONTORNO*/
			fieldset { border: 4px solid #4B0082; width: 70%; }

		/*Caixas "de" e "para"*/
			.caixa {
				border-radius: 10px;
				border: 1px solid black;
				font-size: 12pt;
				padding: 3.7px 15px;
				outline: none;
				color: black;
			}

		/*Caixa de texto*/
			.caixa2 {
				height: 69px;
				width: 330px;
				border-radius: 7px;
				border: 1px solid black;
				font-size: 12pt;
				outline: none;
				padding: 5px 10px;
			}

			#texto {width: 300; height: 23; }
			#mensagem { width: 490; height: 50; }

		

		/*botão*/
		#bt1 {
			border: none;
			outline: none;
			border: 1px solid black;
			height: 40px;
			width: 100px;
			color: #000000;
			border-radius: 10px;
			transition: 0.2s;
			font-weight: bold;
			font-size: 13px;
			cursor: pointer;
		}

		/*Animação do botão*/
			#bt1:hover{ background: #4B0082; color: white; }

		/*botão de excluir*/
		.excluir{
			padding-left: 65%;
			position: absolute;
			padding-top: 2.5%;
		}
	</style>
</head>
<body>
	<!--TÍTULO-->
	<div class="titulo" style="position: fixed; z-index: 1;">
		<font id="fonte1" style="margin: 2%; left: 42%; font-family: Courier New; font-size: 65px;">Fórum</font>

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
	<br><br><br><br><br><br><br>
	<center>
	<fieldset>
		<!--BORDA DA TABELA-->
		<legend>
			&nbsp; <font size="4">Enviar Recado:</font> &nbsp;
		</legend>
		
		<!--ENVIAR RECADO-->
		<table border="0" cellpadding="0" cellspacing="2" align="center">
			<form name="form" method="POST">
				<!--DE-->
				<tr><td>
					<font id="texto">De:</font><br>
					<input class="caixa" type="text" name="de" size="30" required="">
				</td></tr>

				<!--PARA-->
				<tr><td>
					<font id="texto">Para:</font><br>
					<input class="caixa" type="text" name="para" size="30">
				</td></tr>
					
				<!--MENSAGEM-->
				<tr> 
					<td valign="top">
						<font id="mensagem">Mensagem:</font><br>
						<textarea class="caixa2" type="text" name="mensagem" required=""></textarea>
					</td>

					<!--BOTÃO DE ENVIAR-->
					<td valign="top">
						<font face="verdana" color="#CCCCFF"></font><br>
						<div style="margin-left: 3px;">
						   	<input id="bt1" type="submit" value="Enviar" name="btenvia" exit();>
						</div>
					</td>
				</tr>
			</form>
		</table>
	</fieldset><br>

	<fieldset>
		<!--BORDA DA TABELA-->
		<legend> &nbsp; <font size="4">Fórum de Mensagens:</font> &nbsp; </legend>
		
		<!--MENSAGENS ENVIADAS-->
		<table border="0" cellpadding="0" cellspacing="7" width="100%">
			<form name="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<!--MENSAGEM FIXADA-->
				<tr>
					<td>
						<small style="color: red">Mensagem fixada *</small><br>
						<b>Data:</b> 20/05/2021<br>
						<b>De:</b> Administrador<br>
						<b>Para:</b> Alunos<br>
						<b>Mensagem:</b><br>
						&nbsp;&nbsp;&nbsp;Bem-Vindos ao nosso fórum! Escreva suas dúvidas aqui!
						<hr size=2 color=#4B0082>
					</td>
				</tr>
				<!--EXIBINDO MENSAGENS ENVIADAS-->
				<tr>
					<td>
						<?php
							$sql2 = "SELECT * FROM forum ORDER BY idMensagem DESC;";
							$resultado2 = mysqli_query($conexao, $sql2);

							while ($registro = mysqli_fetch_array($resultado2)) {
							echo "
								<div class='excluir'>
									<a href=excluirForum.php?idMensagem=" . $registro['idMensagem'] ."> <img src='imagens/lixo.png' width='30px' height='28px'> </a>
								</div>

								<b>Data: </b>" . $registro['data'] . " <br>
								<b>De: </b>" . $registro['de'] . "<br>
								<b>Para: </b>" . $registro['para'] . "<br>
								<b>Mensagem: </b> <br>
									&nbsp;&nbsp;&nbsp;" . $registro['mensagem'] . "<hr size=2 color=#4B0082>";
							}
						?>
					</td>
				</tr>
			</form>
		</table>
	</fieldset><br><br>

	<!--CRÉDITOS-->
	<div class="div">
		<p class="cred">Elisângela e Kerolai ® 2021</p>
	</div>
</body>
</html>