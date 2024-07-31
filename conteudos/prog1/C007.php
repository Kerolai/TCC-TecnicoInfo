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
	<title>TekMind | Matérias | Programação I | Matrizes</title>
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
		<table style="margin-left: 5%;" width="17%">
		  	<tr>
		    	<td><img src="imagens/prog1.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Matrizes</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_prog1/Prog.1 - C007 - Matriz.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div><br>

	<!--CONTEÚDO-->
		<div>
			<p>São <b>arranjos</b> (arrays) <b>bidimensionais</b>, diferente do vetor que tem somente uma dimensão, a matriz contém duas. Todos os elementos de uma matriz devem ser do <b>mesmo tipo</b>.</p>

			<font size="5" style="margin-left: 7%;"><b>→ Dimensionando uma matriz</b></font><br>
			<p>Para dimensionar, usamos a seguinte sintaxe na declaração de variáveis</p>
			<center>
				<table id="sintaxe" width="20%">
					<tr><th>tipo nome[dimensão1][dimensão2];</th></tr>
				</table>
			</center>
			<p>
				Sendo que:<br><br>
				<b>Dimensão1 </b>= número de linhas;<br>
				<b>Dimensão2 </b>= número de colunas;<br>
				<b>Tipo </b>= deve ser inteiro, real ou char;<br>
				<b>Nome </b>= nome que dará à matriz dentro das regras para nomear uma variável.
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Definições</b></font><br>
			<p>Vamos considerar uma matriz de ordem 5 (raiz “quadrada”, 5x5).</p>

			<table class="tabela" width="15%" style="margin-left: 15%;">
				<tr>
					<td bgcolor="gray">11</td>
					<td>12</td><td>13</td><td>14</td><td>15</td>
				</tr>
				<tr>
					<td>21</td>
					<td bgcolor="gray">22</td>
					<td>23</td><td>24</td><td>25</td>
				</tr>
				<tr>
					<td>31</td><td>32</td>
					<td bgcolor="gray">33</td>
					<td>34</td><td>35</td>
				</tr>
				<tr>
					<td>41</td><td>42</td><td>43</td>
					<td bgcolor="gray">44</td>
					<td>45</td>
				</tr>
				<tr>
					<td>51</td><td>52</td><td>53</td><td>54</td>
					<td bgcolor="gray">55</td>
				</tr>
			</table><br>
			<ol>
				<li>Os números 11, 22, 33, 44 e 55 formam a <b>Diagonal Principal</b>.</li>
				<li>Os números 12, 13, 14, 15, 23, 24, 25, 34, 35 e 45 formam o <b>triângulo superior</b>.</li>
				<li>Os números 21, 31, 32, 41, 42, 43, 51, 52, 53 e 54 formam o <b>triângulo inferior</b>.</li>
			</ol><br><br>

			<table class="tabela" width="15%" style="margin-left: 15%;">
				<tr><td>11</td><td>12</td><td>13</td><td>14</td><td bgcolor="gray">15</td></tr>

				<tr><td>21</td><td>22</td><td>23</td><td bgcolor="gray">24</td><td>25</td></tr>

				<tr><td>31</td><td>32</td><td bgcolor="gray">33</td><td>34</td><td>35</td></tr>

				<tr><td>41</td><td bgcolor="gray">42</td><td>43</td><td>44</td><td>45</td></tr>
				
				<tr><td bgcolor="gray">51</td><td>52</td><td>53</td><td>54</td><td>55</td></tr>
			</table><br>

			<ol>
				<li>Os números 15, 24, 33, 42 e 51 formam a <b>Diagonal Secundária</b>.</li>
				<li>Os números 11, 12, 13, 14, 21, 22, 23, 31, 32 e 41 formam o <b>triângulo superior</b>.</li>
				<li>Os números 25, 34, 35, 43, 44, 45, 52, 53 e 55 formam o <b>triângulo inferior</b>. </li>
			</ol><br>

			<p>Para encontrar os elementos de uma matriz, notamos que:</p>
			<center>
				<table class="tabela" width="35%">
					<tr>
						<th>Diagonal Principal (DP)</th>
						<th>Caracteres simples (char)</th>
					</tr>
					<tr>
						<td>Elementos da DP:<br>L = C</td>
						<td>Elementos da DS:<br>L + C = ordem + 1<br>ou<br>C == ordem - 1 - L</td>
					</tr>
					<tr>
						<td>Triângulo Superior:<br>L < C</td>
						<td>Triângulo Superior:<br>L + C <= ordem</td>
					</tr>
					<tr>
						<td>Triângulo Inferior:<br>L > C</td>
						<td>Triângulo Superior:<br>L + C >= ordem +2</td>
					</tr>
				</table>
			</center><br><br>

			<font size="5" style="margin-left: 7%;"><b>→ Manipulação</b></font><br>
			<p>
				Na manipulação/impressão de uma matriz de duas dimensões deverá ser controlada por <b>dois loopings</b>, ou seja, dois comandos <b>For</b>. <br><b>Sintaxe</b>:
			</p>
			<center>
				<table id="sintaxe" width="18%">
					<tr><td>&nbsp;&nbsp;for (L<=____; L<=____; L++)<br>
							&nbsp;&nbsp;&nbsp;&nbsp;for (C<=____; C<=____; C++){<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;se(expressão){<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;imprima NomeMatriz [L][C];<br>
							&nbsp;&nbsp;&nbsp;&nbsp;}<br>
							&nbsp;&nbsp;}
					</td></tr>
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