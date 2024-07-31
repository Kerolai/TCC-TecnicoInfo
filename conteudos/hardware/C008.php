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
	<title>TekMind | Matérias | Hardware | Placas de som</title>
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
		<table style="margin-left: 5%;" width="22%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Placas de som</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_hw/Hardware - C008 - Placas de som.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div>

	<!--CONTEÚDO-->
		<div>
			<center><font size="6"><b>Introdução</b></font></center>
			<p>As placas de som são dispositivos responsáveis por <b>prover o áudio</b> gerado no computador.</p>
			<center><img src="imagens/C8/foto1.jpg" width="22%"></center><br>

			<center><font size="6"><b>Características</b></font></center>
			<p>
				Como as placas de som são constituídas por dispositivos com <b>um ou mais chips</b>, os quais são responsáveis pelo <b>processamento e emissão</b> do áudio gerado pelas <b>aplicações</b>, se faz necessário, trabalhar com os <b>sinais sonoros digitais</b>.<br><br>
				E para isso existem dois tipos de conversores, os quais são:
			</p>
			<ul>
				<li>ADC (Conversor Analógico-Digital)</li>
				<li>DAC (Conversor Digital-Analógico)</li>
			</ul><br>

			<center><font size="6">ADC</font></center>
			<p>
				O conversor ADC (ou A/D) é responsável pela <b>digitalização</b> dos sinais sonoros, ou seja, a placa irá receber os sinais de um determinado dispositivo <b>externo</b> (como o microfone), o som originado do mesmo irá ser disponibilizado por <b>sinais analógicos</b> e o conversor irá “converter” o sinal analógico para <b>digital</b>, já que os computadores só entender por esse sinal.
			</p><br>
			<center><font size="6">DAC</font></center>
			<p>
				O conversor DAC (ou D/A) realiza a conversão dos sinais <b>digitais</b> para sinais <b>analógicos</b>, a fim de que os sons emitidos pelos computadores, os quais estão conectados a dispositivos externos, sejam ouvidos pelos usuários.<br><br>
				<b>Curiosidade:</b> Se for necessário utilizar os dois conversores, as placas de som utilizam o recurso denominado como <i>fullduplex</i>.
			</p><br>

			<center><font size="6"><b>Resolução</b></font></center>
			<p>
				A maioria das placas operam com 16 bits de resolução e as mais antigas trabalhavam com 8 bits. Sendo assim, números superiores a 16 bits oferecidos nas especificações, geralmente indicam a quantidade de tons simultâneos, a qual a placa pode trabalhar (polifonia). E por fim, placas com 20 bits (ou mais), são para evitar perdas na qualidade das aplicações.
			</p><br>

			<center><font size="6"><b>Taxa de Amostragem</b></font></center>
			<p>
				Geralmente as placas de som operam com 100 KHz (aproximadamente), isso significa que o som está no formato <b>analógico</b>, logo, sabemos que o formato terá que ser convertido em <b>sinais digitais</b>, pois é como o computador <b>compreende</b>. Dessa forma, acaba-se perdendo muitos pontos de sinais durante essa transição, o que faz com que a frequência <b>não determine todos intervalos</b> entre cada ponto capturado.
				<b>Exemplo:</b><br>
				Se tivermos um sinal digital de 44 KHz, este obterá uma <b>boa qualidade</b> de áudio, já que o mesmo é <b>fiel ao sinal analógico</b>. Em contrapartida, se tivermos um sinal digital em 11 KHz, teremos uma <b>perda</b> na qualidade do áudio.
			</p><br>

			<center><font size="6"><b>Resposta de Frequência</b></font></center>
			<p>
				Indica a <b>faixa de frequência</b>, a qual a placa pode oferecer, como por exemplo, um intervalo que fica entre 20 Hz e 20 KHz. Ademais, desvios de frequência é medido em <b>decibéis</b> (dB).<br><br>
				Sendo assim, desvios com taxa inferior a 1dB, são indicativos de uma boa qualidade de áudio.
			</p><br>

			<center><font size="6"><b>SNR</b></font></center>
			<p>O SNR (Relação Sinal/Ruído) indica o <b>nível de ruído</b> existente na <b>placa de som</b>, o qual é medido em decibéis.</p><br>

			<center><font size="6"><b>THD</b></font></center>
			<p>
				O THD (Distorção Harmônica Total) é um indicativo do <b>nível de distorção</b>, o qual o ruído é captado durante a emissão do áudio para os dispositivos <b>externos</b> (como fone). A medição é feita em <b>porcentagem</b> e quanto <b>menor</b> o valor, <b>melhor</b>.
			</p><br>

			<center><font size="6"><b>MIDI</b></font></center>
			<p>
				O padrão MIDI (<i>Musical Instrument Data Interface</i>) são arquivos <b>pequenos</b> que contém <b>sequências</b> de notas musicais, as quais <b>orientam os sintetizadores</b>. 
			</p><br>

			<center><font size="6"><b>Sintetizadores</b></font></center>
			<p>
				Em casos em que o <b>arquivo de som</b> está grande, é necessário realizar uma <b>compactação de áudio</b> (como MP3 e <i>Ogg Vorbis</i>) e utilizar os sintetizadores.<br><br>
				Dessa forma, é possível utilizar diversos tipos de sintetizador, como o de <b>frequência modulada</b>, o qual permite a <b>geração</b> de áudio na placa de som sem a necessidade de usar um áudio digitalizado, ou o se quiser garantir um áudio mais <b>autêntico</b> é possível utilizar um sintetizador denominado, como <b><i>Wave Table</i></b>, o qual é possível <b>compor</b> áudio através de amostras originadas a partir de instrumentos sonoros.
			</p><br>

			<center><font size="6"><b>Processador de Sinal Digital</b></font></center>
			<p>
				O DSP é um chip presente nas placas de som, dedicado a <b>processar informações sonoras</b>, liberando o processador de efetuar esse procedimento. Ademais, é de suma importância para a <b>edição de áudio</b>, pois torna mais <b>rápida</b> a aplicação de efeitos e outros recursos.
			</p><br>

			<center><font size="6"><b>Canais de áudio</b></font></center>
			<p>
				Apontam <b>quantas caixas de som</b> podem se <b>conectar</b> a placa. Além disso, as placas de som <b>simples</b>, suportam somente <b>dois canais</b> (direito e esquerdo) e as que possui <b>capacidade maiores</b>, costumam ter canais <b>extras</b> (kits acústicos) com mais de cinco caixas de som conectadas.
			</p><br>

			<center><font size="6"><b>Conexões</b></font></center>
			<p>As placas de som podem ter diversas conexões distintas, sendo estas as mais comuns:</p>

			<center>
				<table class="tabela" width="60%">
					<tr>
						<th></th> <th></th>
						<th>Prováveis cores das conexões</th>
					</tr>
					<tr>
						<th>MIC</th>
						<td>Entrada para microfone</td>
						<td>Rosa</td>
					</tr>
					<tr>
						<th>Line-In</th>
						<td>Entrada para conectar aparelhos sonoros (como rádio)</td>
						<td>Azul</td>
					</tr>
					<tr>
						<th>Line-Out</th>
						<td>Entrada para conectar caixas de som ou fone de ouvido</td>
						<td>Verde</td>
					</tr>
					<tr>
						<th>Speaker</th>
						<td>Entrada para caixas de som sem amplificação</td>
						<td>Preto</td>
					</tr>
					<tr>
						<th>Joystick/MIDI</th>
						<td>Entrada para ligar joystick (controle para jogos) ou instrumentos MIDI</td>
						<td>*</td>
					</tr>
					<tr>
						<th>SPDIF</th>
						<td>Entrada para conexão de aparelhos externos</td>
						<td>Laranja</td>
					</tr>
				</table>
			</center><br><br>

			<center><font size="6"><b>Modelos PCI</b></font></center>
			<p>
				Os modelos PCI são indicados para os indivíduos que desejam extrair o máximo de qualidade do áudio, além de algumas placas contarem com os conectores RCA, S/PDIF e MIDI. Confira:
			</p>
			<p>
				<b style="font-size: 19px;">M-Audio Audiophile 2496:</b>
				Tecnologia voltada para a captação de áudio, operando com 24 bits e à 96 KHz, também conta com 4 entradas analógicas RCA e possui entrada MIDI e S/PDIF.
			</p>
			<center><img src="imagens/C8/foto2.jpg" width="25%"></center><br>

			<p>
				<b style="font-size: 19px;">Creative Sound Blaster Audigy RX:</b>
				Possuí saídas para 7.1 canais, duas para microfone 3.5mm e saída Toslink. Ademais, suas saídas são ampliadas, trabalham em 24 bits, com resposta de frequência a 192 kHz e sinal de ruído de 106 dB.
			</p>
			<center><img src="imagens/C8/foto3.jpg" width="25%"></center><br>

			<p>
				<b style="font-size: 19px;">Asus Xonar DG 5.1:</b>
				Sendo um componente voltado para gamers, conta com 5.1 canais, sua saída é ampliada para fones e com saída S/PDIF. Além disso, opera em 32 bits e possui tecnologias para otimização da captação da voz e áudio em 3D.
			</p>
			<center><img src="imagens/C8/foto4.jpg" width="25%"></center><br>

			<center><font size="6"><b>Modelos USB</b></font></center>
			<p>Os modelos USB são para quem deseja portabilidade, confira:</p>
			<p>
				<b style="font-size: 19px;">Creative Sound Blaster X-Fi:</b>
				Sendo um USB, oferece 5.1 canais, conta com saída RCA, <i>Toslink</i> e de microfone. Ademais, trabalha em 24-Bit e a 96 KHz, também possui um SNR de 100dB, com diferentes ajustes, como equalizador dinâmico e aperfeiçoamento do som <i>surround</i>.
			</p>
			<center><img src="imagens/C8/foto5.jpg" width="25%"></center><br>

			<p>
				<b style="font-size: 19px;">Behringer UCA222:</b>
				A placa de som conta com saída para fone de ouvido estéreo, S/PDIF, e 4 RCA. Além disso opera em 16 bits e trabalha em 48 KHz;
			</p>
			<center><img src="imagens/C8/foto6.jpg" width="25%"></center><br>

			<p>
				<b style="font-size: 19px;">SteelSeries 7Hv2:</b>
				Realiza simulação de áudio para 7.1 e oferece entrada para fone e microfone.
			</p>
			<center><img src="imagens/C8/foto7.jpg" width="20%"></center><br>
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