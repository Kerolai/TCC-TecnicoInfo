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
	<title>TekMind | Matérias | Introdução a Eletrônica | Conversão Delta-Y</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="estiloCIE.css">
	<style type="text/css">
		fieldset {
			border: 2px solid #4B0082;
			border-radius: 5px;
			margin-left: 20px;
		}
		.op{
			display: flex;
			width: 65%;
		}
	</style>
</head>
<body>
	<!--MENU-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; font-size: 65px;">Introdução a Eletrônica</font>
			
	<!--LOGO-->
		<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
	</div>
	<br><br><br><br>
	<br><br><br>

	<!--BOTÃO PARA VOLTAR-->
		<div>
			<table style="margin-left: 2%;" width="7%">
			  	<tr>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/materias/.php'"> <img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/materias/.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="28%">
		  	<tr>
		    	<td><img src="imagens/IntEletron.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Conversão Delta-Y</b></font></td>
		 	</tr>
		</table><br>

		<div>
			<p>
				A qualquer momento podemos nos deparar com circuitos com topologias mais complexas com difícil resolução, mesmo simplificando não conseguimos definir com clareza se os resistores estão ligados em série ou paralelo.
			</p>
			<center><img src="imagens/C2/foto1.jpg" width="15%"></center>
			<p>
				Pode-se fazer transformações <b>convertendo circuitos</b> com topologia chamada <b>Delta</b> para topologia <b>Ípsilon (Y)</b> ou vice-versa.
			</p><br>

			<center>
				<font size="5"><b>Topologia Y</b></font><br>
				<img src="imagens/C2/foto2.jpg" width="29%"><br><br>

				<font size="5"><b>Topologia Delta</b></font><br>
				<img src="imagens/C2/foto3.jpg" width="29%"><br><br>

				<font size="4">Fazendo uma sobreposição:</font><br>
				<img src="imagens/C2/foto4.jpg" width="21%"><br><br><br>

				<div class="op">
					<div class="div2">
						<fieldset>
							<p>Podemos utilizar o cálculo abaixo para realizar essa conversão (<b>Delta para Y</b>).</p>
							<img src="imagens/C2/foto5.jpg" width="35%">
						</fieldset>
					</div>
					<div class="div2">
						<fieldset>
							<p>Para a conversão <b>Y para Delta</b>, o cálculo é o seguinte:</p>
							<img src="imagens/C2/foto6.jpg" width="65%">
						</fieldset>
					</div>
				</div>
			</center>
		</div><br><br>

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