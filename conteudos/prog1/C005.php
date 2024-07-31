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
	<title>TekMind | Matérias | Programação I | Swith Case</title>
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
		<table style="margin-left: 5%;" width="20%">
		  	<tr>
		    	<td><img src="imagens/prog1.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Swith Case</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_prog1/Prog.1 - C005 - Swith Case.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div><br>

	<!--CONTEÚDO-->
		<div>
			<p>
				Também conhecido como <b>menu</b>, é um comando que permite a <b>construção</b> de algoritmos que executem várias funções, e ainda, o usuário pode <b>determinar</b> qual operação deseja executar.<br><br><b>Sintaxe</b>
			</p>
			<center>
				<table id="sintaxe" width="24%">
					<tr><td>
							<b>&nbsp;&nbsp;&nbsp;Swith (expressão){<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case (rótulo 1): bloco de comando break;<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case (rótulo 2): bloco de comando break;<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case (rótulo 3): bloco de comando break;<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default bloco de comandos<br>
								&nbsp;&nbsp;&nbsp;}</b>
						</td></tr>
				</table>
			</center><br>

			<p><b>Considerações da estrutura:</b></p>
			<ul>
				<li>A expressão é avaliada e comparada com um dos rótulos;</li>
				<li>O termo <b>default</b> é opcional.</li>
				<li>O <b>rótulo</b> é definido com uma constante do tipo caractere ou inteiro.</li>
			</ul>
			<p>Podemos observar que o comando anterior equivale à sequência de comandos se encadeados. Observe</p>

			<center>
				<table id="sintaxe" width="22%">
					<tr><td>
							<b>&nbsp;&nbsp;&nbsp;if (valor testado >= primeiro valor)<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bloco de instruções<br>
								&nbsp;&nbsp;&nbsp;else if (valor testado >= segundo valor)<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bloco de instruções<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if .........<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br>
								&nbsp;&nbsp;&nbsp;bloco de instruções final</b>
						</td></tr>
				</table><br><br>

			<font size="6"><b>Teste de Mesa</b></font></center><br>
			<p>
				É um meio pelo qual podemos acompanhar a execução de um algoritmo passo a passo. Desta forma, podemos encontrar erros e confirmar se a lógica do algoritmo está correta mais facilmente.<br><br>
				Um teste de mesa pode ser feito através de uma simulação, aonde são dados valores de entrada e vai-se preenchendo uma tabela aonde são colocadas todas as variáveis e constantes do algoritmo. A cada comando de atribuição ou cálculo de expressão o valor das variáveis deve ser atualizado.<br><br>
				Ao final do teste podemos ter as seguintes situações:
			</p>
			<ul>
				<li>O resultado esperado foi alcançado; ou</li>
				<li>Foram detectados erros nos comandos; ou</li>
				<li>Foram detectados erros no fluxo de execução – erro na estrutura de controle.</li>
			</ul>
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