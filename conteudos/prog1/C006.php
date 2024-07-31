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
	<title>TekMind | Matérias | Programação I | Vetores</title>
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
		<table style="margin-left: 5%;" width="16%">
		  	<tr>
		    	<td><img src="imagens/prog1.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Vetores</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_prog1/Prog.1 - C006 - Vetores.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div><br>

	<!--CONTEÚDO-->
		<div>
			<font size="5" style="margin-left: 7%;"><b>→ Definição</b></font>
			<p>
				São arranjos (arrays) unidimensionais. Uma <b>sequência de variáveis</b> do mesmo tipo, que são alocadas lado a lado na memória.<br><br>
				É a mesma ideia da linha de uma matriz na matemática, isto é, <b>várias colunas e uma só linha</b>.
			</p>
			<center><img src="imagens/C6/foto1.jpg" width="26%"></center><br>

			<font size="5" style="margin-left: 7%;"><b>→ No que consiste a ordenação?</b></font>
			<p>
				O objetivo dos algoritmos de ordenação é de <b>modificar</b> uma sequência n1, n2, n3, de forma que n1<= n2 <=n3...<br><br>
				A ordenação não precisa ser exatamente de um vetor, mas geralmente é o que usamos para armazenar determinada lista de números.
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Porque ordenar?</b></font>
			<p>Ordenar as informações é consideravelmente essencial para determinada aplicação, por conta de os algoritmos melhorarem sua organização.</p>

			<font size="5" style="margin-left: 7%;"><b>→ Como funciona um vetor?</b></font><br>
			<p style="margin-left: 5%">1. Assumiremos que a primeira posição do vetor é 0.</p>
			<center>
				<table class="tabela" width="32%">
					<tr>
						<th>A[0</th><th>1</th><th>2</th><th>3</th>
						<th>4</th><th>5</th><th>6</th><th>7]</th>
					</tr>
					<tr>
						<td>2</td><td>4</td><td>5</td><td>8</td>
						<td>12</td><td>3</td><td>56</td><td>34</td>
					</tr>
				</table>
			</center>
			<p style="margin-left: 5%">2. Esse é um vetor de 8 elementos, isto é, tem 8 variáveis, todas com o mesmo nome e diferentes posições dentro de um arranjo, chamado índice.</p>

			<center><b>A0 = 2; A1 = 4; A2 =5; A3 = 8; A4 = 12; A5 = 3; A6 = 56; A7 = 34;</b></center>
			<p style="margin-left: 5%">3. Para dimensionar um vetor, usamos o seguinte comando na declaração de variáveis:</p>
			<center>
				<table id="sintaxe" width="17%">
					<tr><th>Tipo nome [dimensão]</th></tr>
				</table>
			</center><br>

			<p>
				Sendo que:<br><br>
				&nbsp;&nbsp;<b>Dimensão</b> = número de elementos. Exemplo; [5] //5 elementos (de 0 a 4).<br>
				&nbsp;&nbsp;<b>Tipo</b> = tipo da variável; poderá ser inteiro, real ou caractere.<br>
				&nbsp;&nbsp;<b>Nome</b> = nome da variável que você dará ao vetor.<br><br>
				Além disso, os vetores servem para <b>simplificar</b> a declaração de várias variáveis iguais, por exemplo:<br><br>
				Imagine um programa que manipule 10 notas de um aluno. Ao invés de termos variáveis do tipo nota1, nota2, nota3, [...], nota10; bastaria termos um único vetor chamado "Nota", com índices que variam de 1 até 10
			</p>
			<center>
				<table class="tabela" width="43%">
					<tr>
						<th>A[1</th><th>2</th><th>3</th><th>4</th>
						<th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th>
					</tr>
					<tr>
						<td>8.0</td><td>7.5</td><td>10.0</td><td>6.5</td><td>7.0</td>
						<td>7.0</td><td>5.4</td><td>9.2</td><td>10.0</td><td>8.6</td>
					</tr>
				</table>
			</center>
			<p>A vantagem é que o nome da variável fica <b>fixa</b>, enquanto podemos usar um <b>FOR</b>, onde o contador seria usado como índice do vetor.</p>
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