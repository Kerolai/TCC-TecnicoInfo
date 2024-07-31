<?php
	$servidor = "localhost"; $usuario = "root"; $senha = ""; $dbname = "tcc";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if(!empty($_GET['estrela'])){
		$estrela = $_GET['estrela'];
		
		//Salvar no banco de dados
		$result_avaliacos = "INSERT INTO avaliacao (qnt_estrela, created) VALUES ('$estrela', NOW())";
		$resultado_avaliacos = mysqli_query($conn, $result_avaliacos);
		
		if(mysqli_insert_id($conn)){
			$_SESSION['msg'] = "Avaliação cadastrada com sucesso!";
			echo "<script>alert('Avaliação cadastrada com sucesso!');</script>";
		}else{
			$_SESSION['msg'] = "<script>alert('Erro ao cadastrar a avaliação!');</script>";
			echo "<script>alert('Erro ao cadastrar a avaliação!');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Programação I | Construção de Algoritmos</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="estiloCP1.css">
</head>
<body>
	<!--MENU-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; font-size: 65px;">Programação I</font>
			
	<!--LOGO-->
		<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
	</div>
	<br><br><br><br><br><br><br>

	<!--BOTÃO PARA VOLTAR-->
		<div>
			<table style="margin-left: 2%;" width="7%">
			  	<tr>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/materias/1ano/prog1.php'"> <img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/materias/1ano/prog1.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="35%">
		  	<tr>
		    	<td><img src="imagens/prog1.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Contrução de Algoritmos</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_prog1/Prog.1 - C002 - Construção de algoritmos.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div>

	<!--CONTEÚDO-->
		<div>
			<p>Existem três estruturas básicas de controle nas quais se baseiam os algoritmos: <b>sequenciação, decisão e repetição</b>.</p>

			<font size="5" style="margin-left: 7%;"><b>→ Sequenciação</b></font><br><br>
			<ul>
				<li>Não há caminhos alternativos no algoritmo.</li>
				<li>Executa apenas uma vez cada comando.</li>
				<li>Normalmente possui a seguinte sequência de comandos:</li>
			</ul>
			<p style="margin-left: 5%;">
				– Início do algoritmo<br>
				– Entrada de dados<br>
				– Processamento<br>
				– Saída de dados<br>
				– Fim do algoritmo fim<br>
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Decisão, Seleção ou Condição:</b></font><br><br>
			<ul>
				<li>Só acontece uma instrução se uma certa condição for aceita.</li>
				<li>Há caminhos alternativos no algoritmo.</li>
				<li>Executa apenas uma vez cada comando.</li>
			</ul><br><br>

			<center><font size="6"><b>Comando Se</b></font></center><br>
			<p>
				O funcionamento do comando é bastante intuitivo e próximo da vida real.<br><br>
				&nbsp;&nbsp;<b>se</b> (condição) <b>então</b><br>
				&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos<br>
				&nbsp;&nbsp;<b>fim se</b><br><br>

				Se a <b>(condição)</b> for <b>verdadeira</b>, será executado a instrução relacionada a <b>“então”</b>. Se a condição for <b>falsa</b>, o algoritmo muda o fluxo da execução e vai diretamente para<br> a <b>continuação</b> do algoritmo.<br><br>
				O comando <b>“se”</b> pode ou não ser acompanhado pela cláusula <b>senão</b>. O bloco de comandos 2 que segue a cláusula senão será executado quando a condição 1 for falso.<br><br>

				&nbsp;&nbsp;<b>se</b> (condição) <b>então</b><br>
				&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos 1<br>
				&nbsp;&nbsp;<b>senão</b><br>
				&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos 2<br>
				&nbsp;&nbsp;<b>fim se</b><br>
			</p><br>

			<center><font size="6"><b>Comandos de Condição Encadeados</b></font></center><br>
			<p>
				O comando de <b>decisão</b> faz parte de um bloco de instruções maior, que é o bloco <b>principal</b> do programa. Esses podem conter qualquer tipo de instrução, inclusive <br> comandos de decisão.<br><br>
				Quando o bloco de instruções subordinado ao comando <b>se/senão</b> contém outros comandos iguais, temos o <b>encadeamento de comandos de decisão</b>.<br><br>

				<b style="color: red">Curiosidade:</b> Muitas vezes, em algumas aplicações, sentiremos a necessidade de tomar outras decisões dentro de uma das alternativas da estrutura do se, isso é <br>chamado de <b>SES aninhados</b>.
			</p>
		</div><br><br><br><br>

		<div class="est">
			<fieldset class="estre">
				<h2 style="color: white">Avalie-nos!</h2><br>
				<span style="color: white">
					<?php
						if(isset($_SESSION['msg'])){
							echo $_SESSION['msg']. "<br><br>";
						}
					?>
				</span>
				<form method="GET" enctype="multipart/form-data">
					<div class="estrelas">
						<input type="radio" id="vazio" name="estrela" value="" checked>
							
						<label for="estrela_um"><i class="fa"></i></label>
						<input type="radio" id="estrela_um" name="estrela" value="1">
							
						<label for="estrela_dois"><i class="fa"></i></label>
						<input type="radio" id="estrela_dois" name="estrela" value="2">
							
						<label for="estrela_tres"><i class="fa"></i></label>
						<input type="radio" id="estrela_tres" name="estrela" value="3">
							
						<label for="estrela_quatro"><i class="fa"></i></label>
						<input type="radio" id="estrela_quatro" name="estrela" value="4">
							
						<label for="estrela_cinco"><i class="fa"></i></label>
						<input type="radio" id="estrela_cinco" name="estrela" value="5">
						<br><br>
						<input type="submit" value="Avaliar" class="bot">
					</div>
				</form>
			</fieldset>
		</div><br><br>

		<!--CRÉDITOS-->
		<div class="div">
			<p class="cred">Elisângela e Kerolai ® 2021</p>
		</div>
</body>
</html>