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
	<title>TekMind | Matérias | Hardware | Fonte de Alimentação</title>
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
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C002P1.php'"> <img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C002P1.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="32%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Fonte de Alimentação</b></font></td>
		 	</tr>
		</table><br>

		<div>
			<center><font size="6"><b>Fontes de Alimentação</b></font></center>
			<p>
				Principais fontes de alimentação: Os padrões das fontes de alimentação têm <b>ligação com a evolução</b> dos padrões de <b>gabinetes e placa-mãe</b>.<br><br>
				<b>AT</b> – Padrão antigo utilizado;<br>
				<b>ATX12V</b> – Padrão mais atualizado;<br>
				<b>EPS12V</b> – Fontes de porte maior e conexões diferenciadas;<br>
				<b>SFX</b> – Padrão utilizado em gabinetes de baixo perfil.
			</p><br>

			<center><font size="6"><b>Fonte AT (<i>Advanced Technology</i>)</b></font></center>
			<p>
				Utilizado por computadores até meados de 1996. Em relação ao padrão atual <b>ATX</b>, as fontes <b>AT</b> são muito inferiores.
			</p>
			<ul>
				<li>Não possuíam a <b>tensão 3.3V</b> utilizada por chips e circuitos atuais, consumindo menos energia;</li>
				<li><b>Baixa potência</b> limitando o número de dispositivos que poderiam ser ligados à fonte.</li>
				<li><b>Não suportava o desligamento do computador via <i>software</i></b>, ligar e desligar era através de uma chave no gabinete.</li>
				<li>A ligação da fonte com a placa-mãe era através de <b>2 conectores, P8 e P9</b> o que exigia cuidado para não inverter os mesmos, com <b>risco de danificar a placa</b>.</li>
				<li>O conector <b>P8 e P9</b> possui <b>6 pinos</b>, que totalizando, são <b>12 pinos conectados à placa-mãe</b>.</li>
			</ul><br>
			<center><img src="imagens/C2/foto1.1.jpg" width="45%"><br><br>

			<font size="6"><b>Fonte ATX (<i>Advanced Technology Extendend</i>)</b></font></center>
			<p>A fonte ATX, é a versão melhorada do <b>AT</b>; em muitos aspectos.</p>
			<ul>
				<li>Essa fonte possui mais pinos e tensões.</li>
				<li>Na <b>versão 1.0</b> da ATX o conector contém <b>20 pinos</b>.</li>
				<li>Na <b>versão 2.0</b> possui <b>24 pinos</b>.</li>
				<li>Essa fonte possui a função <b>soft on/off</b> que permite ligar e desligar o computador via software.</li>
			</ul><br>
			<center><img src="imagens/C2/foto2.1.jpg" width="30%"></center><br><br>

			<font size="4" style="margin-left: 7%;"><b>→ Tensões das fontes ATX (Plug da placa-mãe)</b></font><br><br>
			<ul>
				<li><b>+5V</b> – Utilizada na alimentação de processadores, chipsets e memórias.</li>
				<li><b>+12V</b> - Utilizada em dispositivos que tenham motores, como HD´s e leitores de CD/DVD.</li>
				<li><b>-12V</b> - Utilizada em barramentos de comunicação.</li>
				<li><b>+3.3V</b> - Usada por chips, principalmente pelo processador, reduzindo o consumo de energia.</li>
				<li><b>+5VSB</b> - Função “standby” fornece os 5V mesmo com a fonte “desligada”;</li>
				<li><b>PWR_OK (<i>Power Good</i>)</b> - Informa à placa-mãe que as saídas +12V, +5V e +3.3V estão corretos, ou seja, quando p PWR_OK fica no estado 1 (+5V).</li>
				<li><b>PS_ON#</b> - Liga a fonte de alimentação. Quando colocado em "0" (sem tensão) a fonte liga, se estiver alguma tensão, a fonte não ligará.</li>
				<li><b>Terra</b> - Fios pretos, chamados também de GND ou COM.</li>
			</ul><br>

			<center>
				<table id="sintaxe" width="10%">
					<tr><td style="text-align: center; font-size: 18px;"><b>Atenção</b></td></tr>
				</table>
			</center>
			<p>
				Se for preciso <b>testar a fonte</b> fora do gabinete, somente terá que fazer uma <b>ponte</b> entre o <b>pino do fio verde</b> e o <b>pino do fio preto</b> (terra), ligando em seguida a mesma na energia, assim o PS_ON ficará “0” e a fonte ligará.
			</p><br>

			<center><font size="5">Conectores placa-mãe ATX 20 e 24 pinos</font><br><br>

			<img src="imagens/C2/foto3.1.jpg" align="left" width="15%" style="padding-left: 200px;"></center>
			<div>
				<fieldset style="border: white; width: 30%; margin-left: 25%;">
					<p><b>ATX 20 pinos</b> vêm com <b>4 pinos</b> separados para alimentação direta do processador.</p>
				</fieldset>
			</div><br><br><br><br><br>

			<center><img src="imagens/C2/foto4.1.jpg" align="left" width="15%" style="padding-left: 200px;"></center>
			<div>
				<fieldset style="border: white; width: 30%; margin-left: 25%;">
					<p><b>ATX 20 + 4P</b> tem opção de ligar com <b>24 pinos</b> ou com <b>20 + 4</b>, pois separa os conectores.</p>
				</fieldset>
			</div><br><br><br><br><br>

			<center><font size="5">Conectores PEG (PCI Express Graphics)</font><br><br>

			<img src="imagens/C2/foto5.1.jpg" align="left" width="24%" style="padding-left: 200px;"></center>
			<div>
				<fieldset style="border: white; width: 30%; margin-left: 35%;">
					<p>Conector usado para alimentar placas de vídeo PCI Express, e pode conter de 6 ou 8 pinos.</p>
				</fieldset>
			</div><br><br><br><br>

			<center><font size="5">Conector SATA</font><br><br>

			<img src="imagens/C2/foto6.1.jpg" align="left" width="15%" style="padding-left: 200px;"></center>
			<div>
				<fieldset style="border: white; width: 30%; margin-left: 25%;">
					<p>Conector utilizado para alimentar unidades de armazenamento como discos rígidos, SSDs e unidades ópticas.</p>
				</fieldset>
			</div><br><br>

			<center><font size="5">Conector para periféricos (<i>MOLEX</i>)</font><br><br>

			<img src="imagens/C2/foto7.1.jpg" align="left" width="13%" style="padding-left: 200px;"></center>
			<div>
				<fieldset style="border: white; width: 30%; margin-left: 25%;">
					<p>Utilizado em unidades de armazenamentos que são mais antigos como os HDs PATA, DVD-ROM, também por ventoinhas e sistemas de iluminação.</p>
				</fieldset>
			</div><br><br>
			
			<p>
				<b>Potência:</b> É a classificação do nível de potência máxima que as fontes de alimentação podem fornecer. Muitos fabricantes rotulam suas fontes com seu valor máximo de pico, o problema é que isso só pode ser atingido em períodos extremamente curtos ou até em frações de segundos.<br><br>
				Outra maneira de "tapear" a potência é rotular sua potência máxima a 25°C. Porém, como dentro de um computador geralmente a temperatura está acima de 25°C, a capacidade de entregar a corrente e a potência dos semicondutores diminui.
			</p>
			<p>
				<b>PFC (Fator de correção de força)</b> – Método utilizado para <b>reduzir as perdas de energia</b> nas fontes. Ao <b>reduzir as perdas, aumentando a eficiência da fonte, reduz também a geração de calor</b> e a necessidade de refrigeração. Com isso, as fontes ficam mais silenciosas, mais eficientes e também com uma redução na conta de eletricidade.
			</p>

			<center><img src="imagens/C2/foto8.1.jpg" width="45%"></center>
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