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
	<title>TekMind | Matérias | Programação I | Conceito de Algoritmos</title>
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
	<br><br><br><br>
	<br><br><br>

	<!--BOTÃO PARA VOLTAR-->
		<div>
			<table style="margin-left: 2%;" width="7%">
			  	<tr>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/prog1/C001P1.php'"> <img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/prog1/C001P1.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="35%">
		  	<tr>
		    	<td><img src="imagens/prog1.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Conceito de Algoritmos</b></font></td>
		 	</tr>
		</table><br>

		<div>
			<center><font size="6"><b>Fundamentos</b></font></center><br>

			<font size="5" style="margin-left: 7%;"><b>→ Manipulação de dados</b></font>
			<p>
				Um <b>conjunto de dados</b> é um conjunto de objetos que tem em comum o mesmo comportamento diante de um conjunto definido de operações, podendo trabalhar com diferentes tipos de dados em um programa.
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Identificadores, Constantes e Variáveis</b></font><br>
			<p>
				<b style="font-size: 18px;">– Identificadores</b><br><br>
				Nomes escolhidos para rotular as <b>variáveis, procedimentos e funções</b>, normalmente obedecendo as seguintes regras:
			</p>
			<ul>
				<li>Os primeiros caracteres devem ser uma <b>letra</b>;</li>
				<li>Ser formados por caracteres pertencentes ao seguinte conjunto {a,b,c...a,A,B,C...A,0,1,2...9};</li>
				<li>Devem explicar seu conteúdo.</li>
			</ul>

			<p>
				<b style="font-size: 18px;">– Contantes</b><br><br>
				Representam valores que não variam no decorrer do algoritmo.<br><br>
				<b>Exemplo</b>: PI, “Falso”, “Opções”.<br>
			</p>
			<p>
				<b style="font-size: 18px;">– Variáveis</b><br><br>
				Unidade básica de <b>armazenamento</b> das informações a nível de linguagem de programação.
			</p>
			<img src="imagens/C1/foto1.1.jpg" width="15%" style="margin-left: 10%;">

			<p>Os tipos de dados e variáveis dependem da <b>finalidade</b> do algoritmo, sendo estes:</p>
			<ul>
				<li><b>Inteiro:</b> Qualquer número inteiro, negativo, nulo ou positivo.<br><b>Exemplo</b>: 100,-4,0,98.......</li><br>
				<li><b>Real:</b> Qualquer número real, negativo, nulo ou positivo.<br><b>Exemplo:</b> 1,3 816,97 3,0 -0,0055.......</li><br>
				<li><b>Caracter:</b> qualquer conjunto de caracteres alfanuméricos (qualquer tipo numérico ou letra do alfabeto).<br><b>Exemplo:</b> CASA, livro, 18, R$ 55,36......</li><br>
				<li><b>Lógico:</b> Armazena apenas os valores V (Verdadeiro) e F (Falso).</li><br>
			</ul><br>

			<font size="5" style="margin-left: 7%;"><b>→ Declaração de Variáveis</b></font>
			<p>
				Criação (ou definição) de locais na memória rotulados com o identificador da variável utilizada no algoritmo para <b>manipulação</b> de uma determinada informação.<br>
				<b>Exemplo:</b> NUM, X : inteiro; PI : constante;<br><br>
				<b style="color: red">Observação:</b> Neste momento, as variáveis ainda não têm nenhum tipo de valor;
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Operações Básicas</b></font>
			<p>
				É necessário que as variáveis tenham seus valores consultados ou alterados e, para isso, devemos definir um <b>conjunto de operadores</b>, sendo eles:<br><br>
				<b style="font-size: 18px;">– Operador de Atribuição</b><br><br>
				Atribui um <b>valor</b> a uma variável ou constante. Sintaxe geral da linguagem:
			</p>

			<table id="frase" width="18%"><tr><th>IDENTIFICADOR → EXPRESSÃO</th></tr></table>

			<p>
				<b>Exemplo:</b> NOME ← ‘Fulano de tal’<br>Media ← (P1+P2) /2<br><br>
				Tipos de operadores matemáticos:
			</p>

			<center>
				<table class="tabela" width="46%">
					<tr>
						<td><b>+</b> = Adição</td>
						<td><b>Div</b> = resultado inteiro de uma divisão.</td>
					</tr>
					<tr>
						<td><b>*</b> = Multiplicação</td>
						<td><b>% (resto) </b>= resto da divisão inteira de dois números inteiros.</td>
					</tr>
					<tr>
						<td><b>-</b> = Subtração</td>
						<td><b>pow (base, expoente) </b>= ab exponenciação.</td>
					</tr>
					<tr>
						<td><b>/</b> = Divisão</td>
						<td><b>sqrt (valor numérico) </b>= é a raiz quadrada de um número.</td>
					</tr>
				</table>
			</center><br>
			<p>
				<b style="font-size: 18px;">– Operadores Relacionais</b><br><br>
				Utilizados para relacionar variáveis ou expressões, resultando num <b>valor lógico</b> (verdadeiro ou falso), sendo eles:
			</p>
			<center>
				<table class="tabela" width="27%">
					<tr>
						<td><b>==</b> - igual</td> <td><b>!=</b> - diferente</td>
					</tr>
					<tr>
						<td><b><</b> - menor</td> <td><b>></b> - maior</td>
					</tr>
					<tr>
						<td><b><=</b> - menor ou igual</td> <td><b>>=</b> - maior ou igual</td>
					</tr>
				</table>
			</center><br>
			<p>
				<b style="font-size: 18px;">– Operadores Lógicos</b><br><br>
				Utilizados para avaliar expressões lógicas, sendo eles:
			</p>
			<ul>
				<li><b>e (&&)</b> - lógico ou conjunção.</li>
				<li><b>ou (| |)</b> - lógico ou disjunção.</li>
				<li><b>não (!)</b> - negação.</li>
			</ul>
			<p><b>Exemplo:</b> a = 5, b = 4, c = 9, d = -2, e = 3;</p>

			<img src="imagens/C1/foto1.2.jpg" width="39%" style="margin-left: 12%;"><br><br>

			<font size="5" style="margin-left: 7%;"><b>→ Prioridade de Operadores</b></font>
			<p>
				Durante a execução de uma expressão que envolve vários operadores, é necessário a existência de prioridades, caso contrário poderemos obter valores que não<br> representam o resultado esperado.
			</p>
			<ol>
				<li>Efetuar operações embutidas em parênteses "mais internos";</li>
				<li>Efetuar Funções;</li>
				<li>Efetuar multiplicação e/ou divisão;</li>
				<li>Efetuar adição e/ou subtração;</li>
				<li>Operadores Relacionais;</li>
				<li>Operadores Lógicos.</li>
			</ol>
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