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
	<title>TekMind | Matérias | Hardware | Processadores</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="estiloC.css">
</head>
<body>
	<!--MENU-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; left: 38%; font-size: 65px;">Hardware</font>
			
	<!--LOGO-->
		<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
	</div>
	<br><br><br><br><br><br><br>

	<!--BOTÃO PARA VOLTAR-->
		<div>
			<table style="margin-left: 2%;" width="7%">
			  	<tr>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/materias/1ano/hardware.php'"> <img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/materias/1ano/hardware.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="28%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Energia Eletrostática</b></font></td>
		 	</tr>
		</table><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_hw/Hardware - C012 - Energia Eletrostática.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div>

	<!--CONTEÚDO-->
		<div>
			<center><font size="6"><b>Introdução</b></font></center>
			<p>
				A <b>energia eletrostática</b> é toda <b>carga elétrica</b> de um determinado corpo em que os <b>átomos</b> apresentam uma instabilidade na sua <b>neutralidade</b>.
			</p>
			<center><img src="imagens/C12/foto1.jpg" width="17%"></center>
			<p>De maneira geral, temos três tipos de eletrização:</p>
			<center>
				<table class="tabela" width="50%">
					<tr>
						<th>Eletrização por atrito</th>
						<td>Ocorre <b>atrito</b> entre corpos, ocasionando que um deles <b>perca elétrons</b>, e assim, fique com carga positiva ou negativa.</td>
					</tr>
					<tr>
						<th>Eletrização por contato</th>
						<td>Ocorre ao segurar um <b>corpo eletrizado</b> e encostá-lo em um <b>corpo neutro</b>, cedendo assim, uma parte de sua carga ao corpo neutro e deixando com carga de <b>mesmo sinal</b> que o primeiro.</td>
					</tr>
					<tr>
						<th>Eletrização por aquecimento</th>
						<td>Corpos quando <b>aquecidos</b> acabam adquirindo cargas positivas ou negativa.</td>
					</tr>
				</table>
			</center><br><br>

			<center><font size="6"><b>Na informática</b></font></center>
			<p>Quando envolvemos a tecnologia, a energia eletrostática não é aliada, pois tal energia pode <b>danificar a máquina</b>.</p>
			<center><img src="imagens/C12/foto2.jpg" width="24%"></center>
			<p>
				É importante salientar, que existem <b>equipamentos</b> que ajudam a manter esses materiais <b>isolados</b> e que são importantes ao realizar a <b>manutenção</b> de algum aparelho eletrônico, são eles:
			</p>

			<p style="font-size: 19px;"><b>Cabo aterramento - Chapéu:</b></p>
			<img src="imagens/C12/foto3.jpg" width="20%" style="padding-left: 160px;">

			<p style="font-size: 19px;"><b>Pulseira Antiestática:</b></p>
			<img src="imagens/C12/foto4.jpg" width="20%" style="padding-left: 160px;">

			<p style="font-size: 19px;"><b>Luvas Antiestática:</b></p>
			<img src="imagens/C12/foto5.jpg" width="20%" style="padding-left: 160px;">

			<p style="font-size: 19px;"><b>Dedeiras Antiestática:</b></p>
			<img src="imagens/C12/foto6.jpg" width="20%" style="padding-left: 160px;">

			<p style="font-size: 19px;"><b>Saco metalizado:</b></p>
			<img src="imagens/C12/foto7.jpg" width="20%" style="padding-left: 160px;">

			<p style="font-size: 19px;"><b>Tecidos de microfibra:</b></p>
			<img src="imagens/C12/foto8.jpg" width="14%" style="padding-left: 160px;">

			<p style="font-size: 19px;"><b>Kit de pincel escova ESD (antiestática):</b></p>
			<img src="imagens/C12/foto9.jpg" width="25%" style="padding-left: 160px;">

			<p style="font-size: 19px;"><b>Pinça reta e curva ESD (antiestática):</b></p>
			<img src="imagens/C12/foto10.jpg" width="19%" style="padding-left: 160px;">

			<p style="font-size: 19px;"><b>Cleaner:</b></p>
			<img src="imagens/C12/foto11.jpg" width="9%" style="padding-left: 160px;">

			<p style="font-size: 19px;"><b>Manta de cobre (antiestática):</b></p>
			<img src="imagens/C12/foto12.jpg" width="18%" style="padding-left: 160px;">

			<p style="font-size: 19px;"><b>Botas de borracha:</b></p>
			<img src="imagens/C12/foto13.jpg" width="15%" style="padding-left: 160px;">

			<p>Segue abaixo, a imagem de um técnico com os seus devidos equipamentos:</p>
			<center><img src="imagens/C12/foto14.jpg" width="28%"></center>

			<p>Aqui são alguns <b>materiais isolantes e condutores de energia</b>, comuns no ambiente de trabalho: </p>

			<center>
				<table class="tabela" width="35%">
					<tr><th>Materiais isolantes</th><th>Materiais Condutores</th></tr>

					<tr><td>Tecido</td><td>Metais</td></tr>
					<tr><td>Vidro</td><td>Corpo humano</td></tr>
					<tr><td>Plástico</td><td></td></tr>
				</table>
			</center><br><br>

			<p>E para finalizar, algumas dicas que podem ser bastante úteis para evitar qualquer tipo de dano ao aparelho, são elas:</p>

			<center>
				<table class="tabela" width="35%">
					<tr><th>Dicas</th></tr>
					<tr><td>Manter o computador plugado, de preferência em uma tomada com fio terra.</td></tr>
					<tr><td>Ao fazer reparos, certificar que a máquina está desligada.</td></tr>
					<tr><td>Tocar em paredes ou na carcaça do gabinete antes de tocar em um componente, a fim de descarregar a energia.</td></tr>
					<tr><td>Na mesa de trabalho, opte por materiais não condutores de energia.</td></tr>
					<tr><td>Não deixe outros aparelhos eletrônicos próximos ao ambiente.</td></tr>
					<tr><td>Controle a umidade do ar.</td></tr>
					<tr><td>Use os matérias isolantes de energia.</td></tr>
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