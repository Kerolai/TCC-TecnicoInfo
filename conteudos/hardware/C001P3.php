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
	<title>TekMind | Matérias | Hardware | Tipos de Computadores e seus componentes</title>
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
	<br><br><br><br>
	<br><br><br>

	<!--BOTÃO PARA VOLTAR-->
		<div>
			<table style="margin-left: 2%;" width="7%">
			  	<tr>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C001P2.php'"><img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C001P2.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="55%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Tipos de Computadores e seus componentes</b></font></td>
		 	</tr>
		</table><br>

		<div>
			<p>
				<b>Hard Disk:</b> O HD ou Disco Rígido serve para armazenar arquivos, programas, jogos, entre outros. No entanto, diferente da memória RAM, consegue manter arquivado o conteúdo, mesmo após o computador ser desligado.
			</p>
			<ul>
				<li>Pode ser disco magnético ou conjunto de chips de memória.</li>
				<li>Velocidade medida em <b>RPM</b> e a capacidade em <i><b>Gigabyte e Terabyte</b></i>.</li>
				<li>Tipos de HD: <b>IDE, SATA, SCSI, SSD</b>.</li>
			</ul><br>

			<center><img src="imagens/C1/foto1.3.jpg" width="30%"></center>

			<p>
				<b>Placa de vídeo: </b>É o componente responsável pelo processamento das imagens que serão exibidas no monitor. Determina a resolução e a quantidade de cores da imagem.
			</p>
			<ul>
				<li><b><i>OnBoard</i> (Integrada à placa mãe)</b> – economia de gastos, porém pior desempenho.</li>
				<li><b><i>OffBoard:</b></i> Maior preço e maior desempenho.</li>
			</ul><br>

			<center><img src="imagens/C1/foto2.3.jpg" width="35%"></center>

			<p>
				<b>Placa de rede: </b>Também chamada de adaptador de rede ou NIC (<i>Network Interface Card</i>). Sua função é estabelecer a comunicação de um computador para outros, formando uma rede. Também é utilizada para acesso a internet de banda larga.
			</p>
			<ul>
				<li>Rede Cabeada</li>
				<li>Rede Sem Fio</li>
			</ul><br>
			<center><img src="imagens/C1/foto3.3.jpg" width="35%"></center>
			
			<p>
				<b>Placa de Som:</b> Dispositivo de hardware, que recebe um sinal sonoro do computador econvertendo em um áudio analógico para ser reproduzido em outros equipamentos digitais, em caixas de som ou fones de ouvido, por exemplo.
			</p>
			<center><img src="imagens/C1/foto4.3.jpg" width="18%"></center><br>

			<p><b>Dispositivos de hardware periféricos:</b></p>
			<center><img src="imagens/C1/foto5.3.jpg" width="40%"></center>

			<p>
				<b>Dispositivos de entrada e saída:</b> Denominados também periféricos. Eles permitem a interação do processador com o homem, possibilitando a entrada e/ou a saída de dados.
			</p>
			<ul>
				<li><b>Entrada:</b> São dispositivos que codificam a informação que entra em dados que possam ser processados pelo sistema digital do computador. <b>Ex:</b> Teclado, Mouse, <i>WebCam</i>, Microfone, <i>Scanner, PenDrive</i>, entre outros.</li><br>
				<li><b>Saída:</b> São dispositivos que decodificam os dados em informação que pode ser entendida pelo usuário. <b>Ex:</b> Monitor, Caixa de som, impressora, entre outros.</li>
			</ul><br>

			<p>
				<b>Conexões dos dispositivos:</b> Todos os dispositivos de entrada e saída, precisam de uma conexão com a placa mãe para o seu funcionamento. <b>Principais conexões utilizadas</b>:
			</p>
			<center><img src="imagens/C1/foto6.3.jpg" width="40%"></center>
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