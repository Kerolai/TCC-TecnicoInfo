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
	<title>TekMind | Matérias | Hardware | Barramentos</title>
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
		<table style="margin-left: 5%;" width="21%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Barramentos</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_hw/Hardware - C009 - Barramentos.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div>

	<!--CONTEÚDO-->
		<div>
			<center><font size="6"><b>Introdução</b></font></center>
			<p>
				Barramentos são conectores presentes na placa-mãe que serve para instalar placas de expansão, adicionando assim funcionalidades que não estão presentes na placa do computador.
			</p>
			<center><img src="imagens/C9/foto1.jpg" width="25%"></center><br><br>

			<center><font size="6"><b>Tipos de Slots para PCs</b></font></center>
			<p>
				Esses são os slots lançados até a atualidade e mais comumente de aparecer:<br><br>
				&nbsp;&nbsp;<b>ISA:</b> (<i>Industry Standard Architecture</i> – Arquitetura padrão da indústria).<br>
				&nbsp;&nbsp;<b>EISA:</b> (<i>Extend Industry Standard Architecture</i> – Arquitetura padrão da indústria estendida).<br>
				&nbsp;&nbsp;<b>VLB:</b> (<i>Vesa Local Bus</i> – Barramento local VESA).<br>
				&nbsp;&nbsp;<b>PCI:</b> (<i>Peripheral Component Interconnect</i> – Interconexão de componentes periféricos).<br>
				&nbsp;&nbsp;<b>AGP:</b> (<i>Accelerated Graphics Port</i> – Porta gráfica acelerada).<br>
				&nbsp;&nbsp;<b>AMR:</b> (<i>Audio/Modem Riser</i> – Levantador de áudio e modem).<br>
				&nbsp;&nbsp;<b>CNR:</b> (<i>Communications and Networking Riser</i> – Levantador de comunicações e rede).<br>
				&nbsp;&nbsp;<b>PCI Express:</b> (<i>Peripheral Component Interconnect Express</i> – Interconexão de componentes periféricos expressa).<br>
				&nbsp;&nbsp;<b>mSATA:</b> (<i>Mini Serial Advanced Technology Attachment</i>).<br>
				&nbsp;&nbsp;<b>M.2:</b> (SSD M2).
			</p><br>

			<center><font size="6">PCI</font></center>
			<p>
				Servia para <b>todas</b> as plataformas e surgiu em 1992, pela INTEL. O PCI é um barramento <b>independente</b>, não sendo voltado para uma plataforma específica, estando conectado ao sistema através de um <b>chip ponte</b> (<i>chipset</i>).<br><br>
				Quando um novo <b>processador</b> é lançado, o mesmo barramento PCI pode ser utilizado, basta somente <b>reprojetar o chip da ponte</b>. Ademais, esse slot possui um <b><i>clock</i> de 33Mhz</b> transferindo <b>32bits</b> por pulso de clock, possibilitando uma velocidade de <b>133MB/s</b>.<br><br>
				Existiram também slots <b>PCI de 64 bits</b>, para placas de servidores e esse tipo tinha uma largura de banda de <b>266MB/s</b>.
			</p>
			<center><img src="imagens/C9/foto2.jpg" width="38%"></center><br><br>

			<center><font size="6">AGP</font></center>
			<p>
				Surgiu, quando o barramento PCI começou a <b>não dar conta</b> das novas placas de vídeos. O AGP foi lançado em <b>1996 pela Intel</b>, tinha seu uso exclusivo para <b>placas de vídeo</b> e era controlado pela <b>ponte norte</b>.<br><br>
				O AGP <b>não é um barramento</b>, mas sim uma <b>conexão ponto-a-ponto</b> exclusiva entre a <b>ponte norte e placa de vídeo</b>, não sendo compartilhado com outros dispositivos. No slot AGP existem 4 versões, sendo elas:
			</p><br>

			<center>
				<div>
					<table class="tabela" width="45%">
						<tr>
							<th><i>Slot</i></th><th>Versão</th>
							<th><i>Clock</i></th><th>Número de <i>Bits</i></th>
							<th>Largura de Banda</th><th>Tensão</th>
						</tr>
						<tr>
							<td>AGPx1</td><td>1.0</td>
							<td>66 Mhz</td><td>32</td>
							<td>266MB/s</td><td>3.3v</td>
						</tr>
						<tr>
							<td>AGPx2</td><td>1.0</td>
							<td>66 Mhz</td><td>32</td>
							<td>533MB/s</td><td>3.3v</td>
						</tr>
						<tr>
							<td>AGPx4</td><td>2.0</td>
							<td>66 Mhz</td><td>32</td>
							<td>1066MB/s</td><td>1.5v</td>
						</tr>
						<tr>
							<td>AGPx8</td><td>3.0</td>
							<td>66 Mhz</td><td>32</td>
							<td>2133MB/s</td><td>1.5v</td>
						</tr>
					</table>
				</div><br><br>

			<img src="imagens/C9/foto3.jpg" width="30%"><br><br>

			<font size="6">AGP Pro</font></center>
			<p>
				O AGP PRO é um <b><i>slot</i> maior</b> e com <b>mais linhas de alimentação</b>, o que permite a instalação de placas de vídeo que exige um maior consumo elétrico. Além disso, o AGP PRO é <b>pouco utilizado</b>, mas possui as <b>mesmas características do slot AGP</b>, inclusive as suas tensões.
			</p>
			<center><img src="imagens/C9/foto4.jpg" width="25%"></center><br><br>

			<center><font size="6">PCI-Express (PCIe)</font></center>
			<p>
				O PCIe trabalha de forma totalmente <b>diferenciada</b> do PCI, sendo uma conexão ponto-a-ponto a qual não é possível ser compartilhada. Uma placa-mãe com vários slots PCIe tem cada slot conectado a um processador ou chipset através de um canal.<br><br>
				<b style="font-size: 19px;">PISTAS (<i>Lanes</i>):</b><br><br>
				A conexão do PCIe é baseada no conceito de pistas <i>full-duplex</i>, ou seja, um canal separado para <b>transmissão</b> e outro para <b>recepção</b> de dados.
			</p>
			<center><img src="imagens/C9/foto5.jpg" width="28%"></center><br><br>

			<p>O <b>número de pistas</b> varia de acordo com o <b>tipo do <i>slot</i></b>.</p>

			<center><img src="imagens/C9/foto6.jpg" width="25%"></center><br>

			<p><b style="font-size: 19px;">Versões:<br><br></b>
			Atualmente o PCIe possuí 4 versões, mas em breve terá a versão 5.</p>

			<center>
				<div>
					<table class="tabela" width="40%">
						<tr>
							<th>Versão</th><th>Codificação</th>
							<th><i>Clock</i></th><th>Largura de Banda (x1)</th>
						</tr>
						<tr>
							<td>1.0</td><td>8b/10b</td>
							<td>2.5GHz</td><td>2,5Gbps(250MB/s)</td>
						</tr>
						<tr>
							<td>2.0</td><td>8b/10b</td>
							<td>5GHz</td><td>5Gbps(500MB/s)</td>
						</tr>
						<tr>
							<td>3.0</td><td>128b/130b</td>
							<td>8GHz</td><td>8Gbps(1GB/s)</td>
						</tr>
						<tr>
							<td>4.0</td><td>128b/130b</td>
							<td>16GHz</td><td>16Gbps(2GB/s)</td>
						</tr>
						<tr>
							<td>5.0</td><td>128b/130b</td>
							<td>32GHz</td><td>32Gbps(4GB/s)</td>
						</tr>
					</table>
				</div>
			</center><br>

			<p>
				<b style="font-size: 19px;">Quanto a compatibilidade:<br><br></b>
				Um fato pouco divulgado é que pode ser instalada qualquer placa PCI Express em qualquer slot PCIe. Como a placa-mãe contém um slot x8 e tiver somente uma placa x4, é sim possivel instalar sem problemas. Da mesma forma que ao contrário (desde que o slot seja aberto atrás – nem todas as placas-mãe tem essa opção) o que limitaria o funcionamento do dispositivo.
			</p>
			<center><img src="imagens/C9/foto7.jpg" width="16%"></center><br><br>

			<center><font size="6">mSATA (Mini Serial ATA)</font></center>
			<p>
				Os slots mSATA são na verdade <b>portas SATA</b>, só que com outro formato físico, que serve para instalação de discos <b>SSD</b>. Além disto, este surgiu da necessidade de disponibilizar a velocidade dos SSDs em dispositivos com espaço reduzido, como notbooks e <i>ultrabooks</i>, semelhante a um pequeno cartão.
			</p>
			<center><img src="imagens/C9/foto8.jpg" width="16%"></center><br><br>

			<center><font size="6">M.2 (SSD M2)</font></center>
			<p>
				Surgiu com o objetivo de substituir o mSATA, oferencendo uma maior velocidade na transferência de dados em um cartão com formato reduzido. Além disto, os SSDs deste tipo chegam a uma taxa de até 10 Gigabits/s.<br><br>
				SSDs com chave B acessam as interfaces PCIe x2, enquanto a chave M opera o PCIe x4, desde que o suporte destas interfaces seja oferecido pelo sistema. Os modelos B+M são compatíveis com essas duas chaves. E além de suporte PCIe, também podem operam em SATA, dependendo do modelo do SSD e da placa-mãe.
			</p>
			<center><img src="imagens/C9/foto9.jpg" width="25%"></center><br><br>

			<p>As unidades M.2 utilizam a mesma largura, mas o seu comprimento tem que verificar se à compatibilidade com o laptop antes da compra, essas são as unidades:</p>
			<ul>
				<li><b>M.2 2230:</b> 22 milímetros de largura por 30 milímetros de comprimento.</li>
				<li><b>M.2 2242:</b> 22 milímetros de largura por 42 milímetros de comprimento.</li>
				<li><b>M.2 2260:</b> 22 milímetros de largura por 60 milímetros de comprimento.</li>
				<li><b>M.2 2280:</b> 22 milímetros de largura por 80 milímetros de comprimento.</li>
				<li><b>M.2 2210:</b> 22 milímetros de largura por 110 milímetros de comprimento.</li>
			</ul>
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