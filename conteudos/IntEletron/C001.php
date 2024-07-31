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
	<title>TekMind | Matérias | Introdução a Eletrônica | Conceitos Principais</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="estiloCIE.css">
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
		    	<td><font id="fonte2"><b>Conceitos Principais</b></font></td>
		 	</tr>
		</table><br>

		<div>
			<center><font size="6"><b>Tensão</b></font></center>
			<p>
				É a <b>diferença de cargas elétricas</b> entre dois pontos ou ainda diferença entre o <b>potencial</b> elétrico entre dois pontos (DDP).<br><br>
				A tensão elétrica é medida em <b>Volt (V)</b> e pode ser expressa por E ou U.
			</p><br>

			<center><font size="6"><b>Corrente</b></font></center>
			<p>
				É o <b>fluxo de cargas elétricas</b> (elétrons livres), que se deslocam sobre <b>condutor</b> elétrico motivadas por uma diferença de potencial elétrico (DDP) aplicado entre as <b>pontas</b> do condutor.
			</p>
			<center><img src="imagens/C1/foto1.jpg" width="23%"></center>
			<p>
				A corrente elétrica é medida em Ampere (A) expressa também por i. Possuindo dois sentidos, como mostra a imagem acima.
			</p><br>

			<center><font size="6"><b>Resistência elétrica</b></font></center>
			<p>
				Quando um condutor é submetido a uma diferença de potencial, o movimento de elétrons livres no interior do condutor <b>colide</b> entre si e com os átomos do próprio condutor, implicando em uma <b>dificuldade</b> para a <b>passagem do fluxo de elétrons</b>.<br><br>
				A resistência elétrica representa a <b>razão Volt/Ampére</b> e expressa em <b>Ohm (Ω)</b>.
			</p>
			<center><img src="imagens/C1/foto2.jpg" width="18%"></center><br><br>

			<center><font size="5"><b>Exemplo de tensão, corrente e resistência</b></font></center><br>
			<center><img src="imagens/C1/foto3.jpg" width="15%"></center><br>
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