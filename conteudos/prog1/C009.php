<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "tcc";
	
	//Criar a conexao
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
	<title>TekMind | Matérias | Programação I | Ordenação</title>
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
		<table style="margin-left: 5%;" width="19%">
		  	<tr>
		    	<td><img src="imagens/prog1.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Ordenação</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_prog1/Prog.1 - C009 - Ordenação.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div><br>

	<!--CONTEÚDO-->
		<div>
			<p>
				A ordenação tem seu objetivo principal de <b>ordenar</b> os elementos inseridos no vetor em <b>ordem alfabética ou numérica</b>. Comparando o elemento da 1ª posição com os seguintes para analisar se é necessário a troca de lugar entre eles com a variável auxiliar (aux).
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Funcionamento da ordenação</b></font><br>
			<p>
				1 – Inicia comparando o elemento da posição 0 entre os das outras posições por ordem alfabética. Se a primeira letra da posição 0 for <b>antes</b> da letra de outra posição, <b>troca-se de lugar</b>, e assim por diante até que o vetor fique na <b>ordem correta. Exemplo:</b>
			</p>
			<p>
				<b style="font-size: 19px;">1ª fase:</b><br><br>
				<b>1 –</b> Como o elemento da posição 0 (J) em ordem alfabética vem <b>antes</b> do nome na posição 1 (R), não necessita inverter os nomes.
			</p>
			<center><img src="imagens/C9/foto1.jpg" width="35%"></center>

			<p><b>2 -</b> O elemento da posição 0 (J) vem depois do nome da posição 2 (I), então inverte-os.</p>
			<center><img src="imagens/C9/foto2.jpg" width="35%"></center>

			<p><b>3 -</b> O elemento da posição 0 (I) vem depois do nome da posição 3 (B), então inverte-os.</p>
			<center><img src="imagens/C9/foto3.jpg" width="35%"></center>

			<p><b>4 -</b> O elemento da posição 0 (B) vem depois do nome da posição 4 (A), então inverta-os.</p>
			<center><img src="imagens/C9/foto4.jpg" width="35%"></center>
			<p>
				Após essas comparações, conseguimos colocar na posição 0 o nome ANA. Contudo, não nos preocupamos mais com a posição 0; partiremos em busca do 2º nome da lista.
			</p>
			
			<p>
				<b style="font-size: 19px;">2ª fase:</b><br><br>
				<b>1 –</b> O elemento da posição 1 (R) vem depois do nome que na posição 2 (J), então inverte-os.
			</p>
			<center><img src="imagens/C9/foto5.jpg" width="35%"></center>

			<p><b>2 -</b> O elemento da posição 1 (J) vem depois do nome da posição 3 (I), então inverte-os.</p>
			<center><img src="imagens/C9/foto6.jpg" width="35%"></center>

			<p><b>3 -</b> O elemento da posição 0 (I) vem depois do nome da posição 4 (B), então inverte-os.</p>
			<center><img src="imagens/C9/foto7.jpg" width="35%"></center>
			<p>
				Agora conseguimos colocar na posição 1 o nome BIA, não nos preocupamos mais com as posições 0 e 1; partiremos em busca do 3º nome da lista.
			</p>

			<p>
				<b style="font-size: 19px;">3ª fase:</b><br><br>
				<b>1 –</b> O elemento da posição 2 (R) vem depois do nome na posição 3 (J), então inverte-os.
			</p>
			<center><img src="imagens/C9/foto8.jpg" width="35%"></center>

			<p><b>2 -</b> O elemento da posição 2 (J) ver depois do nome na posição 4 (I), então inverta-os.</p>
			<center><img src="imagens/C9/foto9.jpg" width="35%"></center>
			<p>
				Agora conseguimos colocar na posição 2 o nome IVO, não nos preocupamos mais com as posições 0,1 e 2; partiremos para a busca do 3º nome da lista.
			</p>

			<p>
				<b style="font-size: 19px;">4ª fase:</b><br><br>
				<b>1 –</b> O elemento da posição 3 (R) vem depois do nome na posição 3 (J), então inverte-os.
			</p>
			<center><img src="imagens/C9/foto10.jpg" width="35%"></center>
			<p>
				Agora conseguimos colocar na posição 3 o nome JOÃO e na posição 4 o Rui, finalizamos então a nossa ordenação.
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Conclusões</b></font><br>
			<p>
				Apesar de termos cinco nomes só tivemos quatro fases, pois quando comparamos o penúltimo com o último economizamos uma fase. O número de comparações foi <b>diminuindo em cada fase</b>.
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Sintaxe</b></font><br>
			<p>
				Para realizarmos a ordenação, utilizaremos o comando For e If (se):
			</p>

			<center>
				<table id="sintaxe" width="18%">
					<tr>
						<td>
							<b>
								&nbsp;&nbsp;for (L=0; L<4; L++){<br>
								&nbsp;&nbsp;&nbsp;&nbsp;for (C=L+1; C<=4; C++){<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (nomes[L] > nomes[C]){<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aux = nomes [L];<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nomes[L] = nomes[C];<br> 
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nomes[C] = aux;<br>
								&nbsp;&nbsp;}}}
							</b>
						</td>
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