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
			$_SESSION['msg'] = "Erro ao cadastrar a avaliação!";
			echo "<script>alert('Erro ao cadastrar a avaliação!');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Introdução a Eletrônica | Capacitores</title>
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
		<table style="margin-left: 5%;" width="20%">
		  	<tr>
		    	<td><img src="imagens/IntEletron.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Capacitores</b></font></td>
		 	</tr>
		</table><br>

		<div>
			<table style="margin-left: 3%; width: 60%;">
				<tr>
					<td><p>São dispositivos utilizados para o <b>armazenamento de cargas elétricas (Q)</b>.</p></td>
					<td><img src="imagens/C4/foto1.jpg" width="140" align="right"></td>
				</tr>
			</table>
			<p>
				Estruturalmente um <b>capacitor ideal</b> é composto por um <b>par de placas paralelas</b> entre si, chamadas <b>armadura</b>, e <b>isoladas</b> uma da outra. A quantidade de cargas armazenadas entre as armaduras do capacitor está relacionada a <b>área</b> da armadura e recebe o nome de <b>capacitância</b>, que mede a <b>quantidade</b> de cargas armazenada em um <b>capacitor</b>.<br><br>
				A unidade de medida de capacitância é o <b>farad (F)</b>, ou, <b>coulomb por volt (Q/V)</b>.
			</p>
			<center><img src="imagens/C4/foto2.jpg" width="7%"></center>
			<p>
				No cálculo de uma associação em <b>série</b> para encontrar a capacitância é feita a <b>soma dos inversos</b>. E em uma associação em <b>paralelo</b> é feita a <b>soma das capacitâncias</b>.
			</p>
			<center><font size="5"><b>Associação em série:</b></font><br>
			<img src="imagens/C4/foto3.jpg" width="20%"><br><br><br>

			<font size="5"><b>Associação em paralelo:</b></font><br>
			<img src="imagens/C4/foto4.jpg" width="23%"></center><br>
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