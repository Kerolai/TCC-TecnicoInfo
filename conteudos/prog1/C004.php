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
	<title>TekMind | Matérias | Programação I | Estruturas de Repetição</title>
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
		<table style="margin-left: 5%;" width="32%">
		  	<tr>
		    	<td><img src="imagens/prog1.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Estruturas de Repetição</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_prog1/Prog.1 - C004 - Estruturas de Repetição.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div><br>

	<!--CONTEÚDO-->
		<div>
			<p>
				É comum a repetição de procedimentos para se realizar tarefas. Facilita quando queremos escrever a mesma instrução várias vezes. Não são repetidos eternamente, mas se encerram quando o objetivo é atingido.<br><br>
				Existem três estruturas (laços) de repetição, são elas: <b>While, Do... While e For</b>
			</p>

			<center><font size="6"><b>While</b></font></center><br>
			<ul>
				<li>Esse comando testa a condição no início e só repete se for <b>verdadeira</b>.</li>
				<li>Quando o número de repetições for desconhecido, é necessária uma <b>chave</b> para interromper a repetição.</li>
				<li>Os algoritmos podem repetir uma ou mais instruções, ser executado várias vezes e ter caminhos alternativos.</li>
			</ul>
			<p><b>Sintaxe:</b></p>
			<center>
				<table id="sintaxe" width="16%">
					<tr><td>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;While (expressão lógica) {<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</b>
						</td></tr>
				</table>
			</center>
			<p>Cada execução do bloco de instruções é chamada <b>interação</b>. Para termos a informação de quantas interações já foram realizadas, precisamos de uma variável com a função de <b>contado</b>.</p>

			<font size="5" style="margin-left: 7%;"><b>→ Contador</b></font>
			<p>
				Utilizado para contar a quantidade de vezes que uma instrução é executada.<br><br><b>Sintaxe:</b>
			</p>
			<center>
				<table id="sintaxe" width="21%">
					<tr><th>VARIÁVEL = VARIÁVEL + CONSTANTE</th></tr>
				</table>
			</center><br>
			<p>
				<b>Observações:<br><br> 1)</b> A variável contador normalmente é inicializada com zero, ou seja, zera-se a variável antes de utilizá-la:
			</p>
			<center>
				<table id="sintaxe" width="10%">
					<tr><th>VARIÁVEL = 0</th></tr>
				</table>
			</center><br>
			<p>
				<b>2)</b> A constante (valor 1) determina o valor do incremento da variável (contador), ou seja, o que será somado a ela.
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Acumuladores (somadores)</b></font>
			<p>
				É utilizado para obter somatórios (Ʃ).<br><br>
				<b>Sintaxe:</b>
			</p>
			<center>
				<table id="sintaxe" width="23%">
					<tr><th>VARIÁVEL1 = VARIÁVEL1 + VARIÁVEL2</th></tr>
				</table>
			</center><br>
			<p>
				<b>Observações:</b><br><br>
				<b>1)</b> A variável do acumulador deve sempre ser inicializada, normalmente com zero, igual ao contador.<br>
				<b>2)</b> A variável2 indica o valor a ser acumulado, somado e armazenada na variável1.
			</p>

			<p>
				<b style="color: red;">Obs.:</b> A utilização de comandos de repetição encadeados geralmente causa uma certa dificuldade para seu acompanhamento à primeira vista. Podemos ter tantos laços quisermos, e ainda tê-los combinados com comandos de decisão e assim por diante.<br><br>
				<b>Estrutura do While encadeado:</b>
			</p>
			<img src="imagens/C4/foto1.jpg" width="25%" style="margin-left: 12%;"><br>
	
			<center><font size="6"><b>Do... While</b></font></center><br>
			<p>
				Esse comando funciona de forma similar ao comando while, exceto pelo fato de que a condição de controle só é testada <b>após</b> a execução do bloco de comandos.<br><br>
				<b>Sintaxe:</b>
			</p>

			<center>
				<table id="sintaxe" width="16%">
					<tr>
						<td>
							<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do {<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bloco de instruções<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;While(valor booleano);<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos</b>
						</td>
					</tr>
				</table>
			</center>

			<p>Assim, podemos utilizá-lo quando termos certeza de que o bloco de instruções será executado ao menos uma vez, sem a necessidade do teste na entrada do bloco.</p><br>

		<center><font size="6"><b>For</b></font></center><br>
			<p>
				A lista de comandos é executada somente se o valor da variável for menor ou igual ao valor final, depois ela é incrementada a variável de controle. Isso se repete até que o valor da variável de controle seja maior que o valor final.<br><br>
				<b>Sintaxe:</b>
			</p>

		<center>
			<table id="sintaxe" width="27.5%">
				<tr><td><b>
						&nbsp;&nbsp;&nbsp;&nbsp;for (valor inicial; condição; valor do incremento){<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos<br>
						&nbsp;&nbsp;&nbsp;&nbsp;}
				</b></td></tr>
			</table>
		</center>
		<p>Portanto, temos a separação do comando em três cláusulas: <b>preparação, condição e passo</b>.</p><br>
		
		<center><font size="6"><b>Resumindo...</b></font></center><br>

		<center>
			<table class="tabela" width="70%">
				<tr>
					<td>&nbsp;&nbsp;<b>While</b>(expressão lógica){<br>
						&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos<br>
						&nbsp;&nbsp;}
					</td>
					<td>O <b>while</b> analisa a <b>expressão lógica</b>, se resultado for verdadeiro, o <b>bloco de comandos</b> é executado.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;<b>do</b> {<br>
						&nbsp;&nbsp;&nbsp;&nbsp;bloco de instruções<br>
						&nbsp;&nbsp;}<br>
						&nbsp;&nbsp;<b>While</b>(valor booleano);<br>
						&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos
					</td>
					<td>O <b>do</b> executa o <b>bloco de instruções</b> até que o valor retornado pelo <b>bloco de comandos</b> seja Verdadeiro.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;<b>for</b> (valor inicial; condição; valor do incremento){<br>
						&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos<br>
						&nbsp;&nbsp;}
					</td>
					<td>O <b>for</b> incrementa, a variável, a partir do <b>valor inicial</b> de uma unidade, até que atinja o valor final. E para cada incremento o <b>bloco de comandos</b> é executada.</td>
				</tr>
			</table>
		</center>
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