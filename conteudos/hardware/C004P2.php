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
	<title>TekMind | Matérias | Hardware | Disco Rígido (HD)</title>
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
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C004P1.php'"> <img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C004P1.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="26%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Disco Rígido (HD)</b></font></td>
		 	</tr>
		</table><br>

		<div>
			<center><font size="6"><b>Formato dos Setores</b></font></center>
			<ul>
				<li>Cada setor armazena 512 bytes de dados.</li>
				<li>Os atuais, utilizam setores de 4 KiB (Formato AF – formato avançado).</li>
			</ul>
			<p>
				Cada setor contém também, uma área de endereçamento e um código de verificação de erros (<i>checksum</i>). Além disto, os dados de controles existentes antes da área de dados, são denominados de <b>cabeçalhos</b> e os dados, os quais são adicionados posteriormente são chamados de <b>rodapé</b>.<br><br>
				Se for de interesse aumentar o tamanho do setor, este irá diminuir a quantidade de cabeçalhos e rodapés, o que resulta em um aumento de espaço disponível no disco.<br><br>
				<b>Exemplo:</b>
			</p>
			<center><img src="imagens/C4/foto1.1.jpg" width="45%"></center><br><br>

			<center><font size="6"><b>Método de endereçamento</b></font></center>
			<p>
				Fundamental para a <b>organização dos bits</b> dentro do HD, para estarem disponível a qualquer momento. Este método, utiliza a geometria dos discos afim da organização, e para isso ocorre a separação do disco em cilindros, trilhas e setores.<br><br>
				- Existem dois métodos de endereçamento, os quais são:
			</p>
			<center>
				<div>
					<table class="tabela" width="28%">
						<tr>
							<th>CHS</th>
							<td>Cilindro, Cabeça, Setor</td>
						</tr>
						<tr>
							<th>LBA</th>
							<td>Endereçamento Lógico de Blocos</td>
						</tr>
					</table>
				</div><br><br>

			<font size="6">CHS</font></center>
			<p>
				Na formação de <b>baixo nível</b>, a face (ou cabeça) de cada lado dos <b>pratos</b>, são <b>divididas</b> em várias trilhas <b>concêntricas</b>, ou seja, com os centros alinhados e as trilhas são divididas em vários <b>setores</b>.
			</p>
			<ul>
				<li>Trilha: Definição para uma trilha localizada em uma das <b>faces</b> de um dos <b>pratos</b>.</li>
				<li>Cilindro: Definição usada para <b>identificar</b> todas as trilhas de mesmo número de ordem, em todas <b>faces dos pratos</b>.</li>
			</ul>
			<p>
				<b>Curiosidade:</b> Para cada face do prato existe uma cabeça de leitura e gravação. Além disto, ao multiplicarmos o número de trilhas, lados e setores por trilha, nós temos o número total de setores do disco rígido.
			</p>
			<center><img src="imagens/C4/foto2.1.jpg" width="25%"></center>
			<p>
				<b>Problemas de limitação:</b> Antigamente existia uma limitação no sistema CHS que era denominada <b>limite de 528MB</b>. Essa limitação afetava a BIOS, discos e também o padrão IDE/ATA resultando na ineficiência relacionada ao computador ao tentar acessar as trilhas de um disco, se o número de trilhas fosse maior do que à suportada pela BIOS e/ou porta IDE/ATA.
			</p><br><br>

			<center><font size="6">LBA</font></center>
			<p>
				Do contrário do CHS, o LBA utiliza <b>apena um valor</b>, em que consiste nos setores do disco serem endereçados de maneira <b>sequencial</b>. Além disso, o padrão IDE/ATA reserva 16 bits para endereçamento do cilindro, 4 bits para endereçamento da cabeça de leitura e 8 bits para o setor, totalizando 28 bits de endereçamento.<br><br>

				<b>Revisões feitas no método de endereçamento</b> (LBA):
			</p><br>
			<center>
				<div>
					<table class="tabela" width="25%">
						<tr>
							<th>Nº Bits</th>
							<th>Capacidade Máxima</th>
						</tr>
						<tr>
							<td>22</td>
							<td>2 GiB</td>
						</tr>
						<tr>
							<td>28</td>
							<td>128 GiB</td>
						</tr>
						<tr>
							<td>48</td>
							<td>128 PiB</td>
						</tr>
					</table>
				</div>
			</center><br><br>

			<center><font size="6"><b>Tecnologia S.M.A.R.T</b></font></center>
			<p>
				A tecnologia de automonitoramento, análise e relatório possuída pelos discos rígidos, permite informar ao usuário possíveis <b>falhas</b>, dando-lhe a opção de realizar <i>backup</i> das informações e efetuar substituição da mesma. Além disso, a tecnologia monitora os parâmetros de funcionamento do disco rígido, tais como:
			</p>
			<ul>
				<li>Taxa de erros de leitura acima do normal;</li>
				<li>Taxa de transferência abaixo do normal;</li>
				<li>Duração elevada de tempo até atingir a velocidade de rotação máxima;</li>
				<li>Taxa alta de setores reserva sendo utilizados;</li>
				<li>Cabeças muito próximas da superfície magnética.</li>
			</ul><br>

			<center><font size="6"><b>Interface de comunicação</b></font></center>
			<p>
				São por meio de interfaces que os HDs são conectados ao computador, as quais são capazes de transmitir dados entre <b>hosts</b> de maneira segura e eficiente. As tecnologias mais comuns para isso, são:
			</p>
			<ul>
				<li><b>IDE</b> (<i>Intelligent Drive Electronics</i>): A qual também é conhecida pelo nome <b>ATA ou PATA</b>.</li>
				<li><b>SATA</b> (Serial ATA).</li>
			</ul><br>

			<center><font size="6">IDE/ATA</font></center>
			<p>Com a grande procura desse padrão de interface, as placas começaram a oferecer dois tipos de conectores IDE, os quais são:</p>
			<ul>
				<li>IDE 0 ou primário;</li>
				<li>IDE 1 ou secundário.</li>
			</ul>
			<p>
				Esse padrão de interface possuía a capacidade de se conectar em até dois dispositivos eletrônicos. Ademais, essa conexão feita no HD era por meio de um cabo (flat) de 40 vias ou 80 vias, os quais serviam para evitar qualquer tipo de perda de dados causados pela interferência.
			</p>
			<center><img src="imagens/C4/foto3.1.jpg" width="40%"></center>
			<p>
				<b>Curiosidade:</b> Os dispositivos podem se conectar no mesmo cabo, pois existe uma peça chamada <i>jumper</i>, a qual é posicionada na parte traseira do HD. Sendo assim, se existir dois dispositivos conectados no cabo, é necessário posicionar o <i>jumper</i> de ambos para o seu reconhecimento.
			</p>
			<center><img src="imagens/C4/foto4.1.jpg" width="40%"></center>
			<ul>
				<li><b>Master</b> (Dispositivo primário);</li>
				<li><b>Slave</b> (Dispositivo secundário);</li>
				<li><b><i>Cable Select</i></b> (Dispositivo primário, o qual é conectado na ponta do cabo e o secundário no meio do cabo).</li>
			</ul><br>
			<center><img src="imagens/C4/foto5.1.jpg" width="20%"></center><br><br>

			<center><font size="5">Taxa de Transferência (IDE/ATA)</font></center>
			<p>
				<b>DMA</b> (<i>Direct Memory Access</i>): Tecnologia que possibilita o acesso direto à memória pelo HD (e outros dispositivos), sem haver necessidade da ajuda de um processador.
			</p>
			<center>
				<div>
					<table class="tabela" width="35%">
						<tr><th>Operação</th><th>Taxa de Transferência</th></tr>
						<tr><td>ATA-4(Ultra ATA/33, UDMA 33)</td><td>33 MB/s</td></tr>
						<tr><td>ATA-4(Ultra ATA/66, UDMA 66)</td><td>66 MB/s</td></tr>
						<tr><td>ATA-4(Ultra ATA/100, UDMA 100)</td><td>100 MB/s</td></tr>
						<tr><td>ATA-4(Ultra ATA/133, UDMA 133)</td><td>133 MB/s</td></tr>
					</table>
				</div><br><br>

			<font size="6">SATA</font></center>
			<p>
				O Serial ATA é o padrão do mercado, pois apresenta melhorias em relação a versões anteriores, como maiores <b>taxas de transmissão de dados</b>, dispensa de uso de <b><i>jumpers</i></b>, cabos de conexão e de alimentação mais finos, entre outros.<br><br>
				Além disso, a interface SATA <b>não conta com o esquema de permitir dois dispositivos por cabo</b>, mas em contrapartida, o seu conector é pequeno, facilitando a sua instalação. Sendo assim, é comum encontrar placas com até oito conectores.<br><br>
				<b>Versões do SATA:</b>
			</p><br>
			<center>
				<div>
					<table class="tabela" width="20%">
						<tr><th>SATA I</th><td>150 MB/s</td></tr>
						<tr><th>SATA II</th><td>300 MB/s</td></tr>
						<tr><th>SATA III</th><td>600 MB/s</td></tr>
					</table>
				</div>
			<br><br>

			<img src="imagens/C4/foto6.1.jpg" width="40%"></center>
			<p>O conector SATA tem 7 vias:</p>
			<ol style="margin-left: 11%;">
				<li><i>Ground</i> (terra)</li>
				<li>A+ (Envio de dados)</li>
				<li>A- (Envio de dados)</li>
				<li><i>Ground</i> (terra)</li>
				<li>B+ (Recepção de dados)</li>
				<li>B- (Recepção de dados)</li>
				<li><i>Ground</i> (terra)</li>
			</ol><br>
			<center><img src="imagens/C4/foto7.1.jpg" width="40%"></center><br><br>

			<p><b>Comparativo SATA x PATA (IDE):</b></p>
			<center>
				<div>
					<table class="tabela" width="35%">
						<tr><th>Padrão</th><th>Quantidade de Pinos</th><th>Velocidade de Transferência</th></tr>
						<tr><th>IDE/ATA</th><td>40</td><td>133 MB/s</td></tr>
						<tr><th>SATA 150</th><td>07</td><td>150 MB/s</td></tr>
						<tr><th>SATA II (300)</th><td>07</td><td>300 MB/s</td></tr>
						<tr><th>SATA (600)</th><td>07</td><td>600 MB/s</td></tr>
					</table>
				</div>
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