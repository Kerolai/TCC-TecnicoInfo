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
	<title>TekMind | Matérias | Programação I | Strings</title>
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
		<table style="margin-left: 5%;" width="15%">
		  	<tr>
		    	<td><img src="imagens/prog1.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Strings</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_prog1/Prog.1 - C008 - Strings.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div><br>

	<!--CONTEÚDO-->
		<div>
			<p>
				String (literal) é um <b>conjunto de caracteres</b> caracterizados por uma <b>sequência</b> de letras, algarismos ou símbolos, que em cadeia são tratados como vetores ou matrizes. Veja o exemplo:
			</p>
			<center>
				<table class="tabela" width="35%">
					<tr>
						<th>0</th><th>1</th><th>2</th><th>3</th><th>4</th>
						<th>5</th><th>6</th><th>7</th><th>8</th>
					</tr>
					<tr>
						<td>A</td><td>L</td><td>G</td><td>O</td><td>R</td>
						<td>I</td><td>T</td><td>M</td><td>O</td>
					</tr>
				</table>
			</center>
			<p>
				Como uma palavra apresenta uma cadeia de letras, um dado do tipo String pode ser "montado" através de uma matriz de char.
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Armazenamento na variável</b></font><br>
			<p>
				Caso seja digitado "Visual Books" a variável armazenará apenas "Visual", ou seja, é guardado os valores até que um espaço em branco seja encontrado.<br><br>
				<b style="color: red;">Dica:</b> Caso queira armazenar palavras separadas por espaço, faça o uso da função <b>gets()</b>, que insere caracteres pelo teclado até o Enter seja pressionado.
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Entrada e Saída</b></font><br>
			<p>
				Existem vários tipos de entrada e saída de dados pelo console, sendo as principais:<br><br>
				<b>scanf() e printf()</b> - usadas para qualquer tipo de dados existentes.<br><br>
				<b style="color: red;">Observação:</b> Quando obter uma string através do <b>scanf()</b>, fique atento para não usar o operador de endereço, o &, pois uma matriz já representa diretamente um endereço de memória.<br><br>
				<b>getch() e getche()</b> - retornam imediatamente após uma tecla ser pressionada.<br> A única diferença entre ele é que a getche mostra o caractere na tela e o getch não.<br><br>
				<b>gets()</b> - lê as strings até o primeiro Enter.
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Funções das Strings</b></font><br>
			<p>
				A linguagem C possui funções especiais para análise e manipulação de strings. Tais funções estão definidas na biblioteca string.h.
			</p>
			<center>
				<table class="tabela" width="60%">
					<tr><th>Nome</th> <th>Função</th> <th>Sintaxe</th></tr>
					
					<tr>
						<td><b>Strcpy()</b></td>
						<td><b>Copia</b> o conteúdo de uma variável a outra.</td>
						<td>Strcpy (str1, str2);</td>
					</tr>
					<tr>
						<td><b>Strcat()</b></td>
						<td><b>Concatena</b> o conteúdo de uma variável a outra.</td>
						<td>strcat (str1, str2);</td>
					</tr>
					<tr>
						<td><b>Strlen()</b></td>
						<td>Determina o <b>tamanho</b> da string.</td>
						<td>int tamanho = strlen(str1);</td>
					</tr>
					<tr>
						<td><b>Strcmp()</b></td>
						<td><b>Compara</b> o conteúdo de duas strings. Retorno:<br>
							valor = 0, se str1 = str2;<br>
							valor > 0, se str1 > str2;<br>
							valor < 0, se str1 < str2;</td>
						<td>int valor = strcmp(str1, str2);</td>
					</tr>
					<tr>
						<td><b>Strcmpi()</b></td>
						<td>Mesma função do strcmp, mas não é sensível à <b>caixa alta</b>. <br>Exemplo: "A" e "a" são tratados como o mesmo caracter.</td>
						<td>int valor = strcmpi(str1, str2);</td>
					</tr>
					<tr>
						<td><b>Strupr()</b></td>
						<td>Converte uma string para <b>maiúscula.</b></td>
						<td>strupr(str1)</td>
					</tr>
					<tr>
						<td><b>Strlwr()</b></td>
						<td>Converte uma string para <b>minúscula.</b>.</td>
						<td>strlwr(str1)</td>
					</tr>
					<tr>
						<td><b>Strrev()</b></td>
						<td><b>Inverte</b> o conteúdo de uma string.</td>
						<td>strrev(str1)</td>
					</tr>
					<tr>
						<td><b>Strset()</b></td>
						<td><b>Substitui</b> todos os caracteres de uma string pelo caracter <b>especificado</b>.</td>
						<td>strset(str1, char)</td>
					</tr>
				</table>
			</center><br><br>

			<font size="5" style="margin-left: 7%;"><b>→ Matrizes de Strings</b></font><br>
			<p>
				Quando precisamos armazenar em uma mesma variável uma série de strings, é necessária uma matriz de duas dimensões.
			</p>
			<center>
				<table class="tabela" width="35%">
					<tr>
						<th></th><th>0</th><th>1</th><th>2</th><th>3</th>
						<th>4</th><th>5</th><th>6</th><th>7</th>
					</tr>
					<tr>
						<th>0</th><td>P</td><td>R</td><td>O</td><td>G</td>
						<td>R</td><td>A</td><td>M</td><td>A</td>
					</tr>
					<tr>
						<th>1</th><td>J</td><td>O</td><td>Ã</td><td>O</td>
						<td></td><td></td><td></td><td></td>
					</tr>
					<tr>
						<th>2</th><td>M</td><td>A</td><td>R</td><td>I</td>
						<td>A</td><td></td><td></td><td></td>
					</tr>
					<tr>
						<th>3</th><td>R</td><td>E</td><td>C</td><td>E</td>
						<td>I</td><td>T</td><td>A</td><td></td>
					</tr>
				</table>
			</center>
			<p>
				Note que cada palavra ficar armazenada em uma linha e cada coluna representa uma letra de cada palavra.
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