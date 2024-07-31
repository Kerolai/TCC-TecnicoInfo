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
	<title>TekMind | Matérias | Hardware | Placa-mãe</title>
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
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C003P1.php'"> <img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C003P1.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="20%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Placa-mãe</b></font></td>
		 	</tr>
		</table><br>

		<div>
			<center><font size="6"><b>Conectores de alimentação</b></font></center>

			<p>Existem em uma placa-mãe pelo menos dois conectores de alimentação.</p>
			<ul>
				<li>Conector de <b>alimentação principal</b>, que possui <b>24 pinos</b>.</li>
				<li>Conector de <b>alimentação do processador</b>, que possui <b>4 pinos</b> (ATX12V) ou <b>8 pinos</b> (EPS12V).</li>
			</ul>
			<center><img src="imagens/C3/foto1.1.jpg" width="48%"><br><br>

			<font size="6"><b>Conectores para ventoinhas</b></font></center>
			<p>
				As placas-mãe tem um <b>conector de quatro pinos</b> para o <b><i>cooler</i> do processador</b> e alguns <b>conectores de três ou quatro pinos</b> para <b>ventoinhas auxiliares</b>, geralmente <b>fixadas no gabinete do computador</b>.<br><br>
				Nas ventoinhas com <b>três fios</b>, o <b>preto é o fio terra</b>, o fio <b>vermelho é a alimentação (+12V)</b> e o fio <b>verde ou amarelo</b> é conectado ao <b>sensor de rotação</b>. Nas ventoinhas com <b>quatro fios</b>, o <b>quarto fio</b> geralmente é <b>azul</b> e serve para <b>controlar a velocidade de rotação</b> da ventoinha.
			</p>
			<center><img src="imagens/C3/foto2.1.jpg" width="43%"><br><br>

			<font size="6"><b>BIOS (<i>Basic Input/Output System</i>)</b></font></center>
			<ul>
				<li>Possui o software básico necessário para iniciar a placa-mãe e checar os dispositivos instalados.</li>
				<li>Contém o setup para configurar opções oferecidas pela placa.</li>
				<li>Por definição a BIOS é um software, mas tudo fica gravado em um chip encaixado na placa-mãe.</li>
				<li>O chip combina uma pequena quantidade de memória Flash (512 ou 1024KB), o <b>CMOS</b> onde são armazenadas as configurações do setup (composto por até 256 bytes de memória volátil) e o relógio de tempo real.</li>
			</ul>
			<center><img src="imagens/C3/foto3.1.jpg" width="17%"></center>
			<p>
				Para manter as configurações do CMOS a placa possui uma bateria CR2032 responsável pela alimentação da BIOS, e se for desejado zerar as configurações do CMOS (ou voltar a de fábrica) por ser volátil, basta cortar o fornecimento de energia.<br><br>
				<b>Existem duas formas:</b>
			</p>
			<ul>
				<li>Desligando o computador por completo e depois remover a bateria CR2032 da placa e colocar uma moeda no lugar para fechar o curto entre os dois contatos da bateria por 15 segundos.</li>
				<li>Ou usando o <i>jumper “Clear CMOS”</i>, que sempre é próximo da bateria. Este, possui duas posições, uma para uso normal e outra para apagar a CMOS e para realizar esse procedimento, basta mudar o mesmo de posição, por 15 segundo e depois reposicionar.</li>
			</ul><br><br>

			<center><font size="6"><b>Circuito Regulador de Tensão</b></font></center>
			<p>
				Circuito <b>responsável por regular e converter</b> as tensões recebidas da fonte de alimentação nas tensões requeridas pelos componentes da placa, através de fazes (vários reguladores trabalhando em paralelo fornecendo mais energia com fluxo estável).
			</p>
			<center><img src="imagens/C3/foto4.1.jpg" width="30%"><br><br>

			<font size="6">Circuito Regulador de Tensão - Componentes</font></center>
			<p>
				O <b>principal componente</b> é o <b>circuito PWM</b> (<i>Pulse Width Modulation</i> – Modulação por largura de pulso), que monitora a saída do circuito “DC-DC” e caso note uma tensão diferente do valor do correto, este realiza a correção.
			</p><br>

			<font size="5" style="margin-left: 7%;"><b>→ Demais componentes:</b></font><br>
			<center><img src="imagens/C3/foto5.1.jpg" width="50%"></center><br><br>

			<center><font size="6"><b>Problemas nos Capacitores</b></font></center>
			<p>
				O <b>capacitor</b> é o componente <b>responsável por armazenar pequenas quantidades de energia</b>, absorvendo variações e entregando um fluxo estável para os componentes ligados a ele.<br><br>
				Um dos <b>principais problemas</b>, em placas que possuem componentes de baixa qualidade é o <b>estufamento dos capacitores</b>, que compõe os reguladores de tensão.<br><br>
				Quando isso acontece, nota-se <b>travamentos</b> em momentos de <b>atividade intensa</b>, que logo passam a serem mais <b>frequentes</b> até chegar ao ponto desta máquina não conseguir mais <b>concluir o processo de boot</b>.
			</p>
			<center><img src="imagens/C3/foto6.1.jpg" width="30%"></center><br><br>

			<center><font size="6"><b>Chipset</b></font></center>
			<p>
				O <b><i>chipset</i></b> é o <b>principal componente da placa-mãe</b>, pois sem ele, tudo seria somente componentes da placa. Com suas funções dividas em dois chips:
			</p>
			<ul>
				<li>Ponte Norte</li>
				<li>Ponte Sul</li>
			</ul>
			<center><img src="imagens/C3/foto7.1.jpg" width="30%"><br><br>

			<font size="6">Ponte Norte</font></center>
			<p>
				Chip mais <b>complexo</b> e fica <b>próximo ao processador</b>. Este, incorpora os barramentos rápidos e funções complexas, incluindo o controlador de memória,barramento PCI Express ou AGP e quando presente também o chipset de <b>vídeo <i>Onboard</i></b>.<br><br>
				As placas que são mais resistentes trazem a ponte norte com <b>dissipador de calor</b> e outras com <b>dissipador e cooler</b>. Ademais, o circuito da ponte norte <b>determina a quantidade máxima de memória RAM</b> que a placa pode endereçar, isso é conhecido também como a quantidade máxima de memória cache.
			</p><br>

			<center><font size="6">Ponte Sul</font></center>
			<p>
				<i>Chip</i> que faz controle dos <b>periféricos</b>; este faz a ponte entre o barramento PCI e o barramento ISA, e controla os periféricos on-board (como as portas IDE).<br><br>
				A porte sul contém o controlador DMA, o controlador de interrupções, a CMOS e o relógio de tempo real (RTC).
			</p>
			<center><img src="imagens/C3/foto8.1.jpg" width="30%"><br><br>

			<font size="6"><b>Principais Funções</b></font></center>
			<ul>
				<li>Interface IDE</li>
				<li>Controle da memória RAM</li>
				<li>Controle da memória cache externa</li>
				<li>Controle dos barramentos: ISA, PCI, AGP e PCI <i>Express</i></li>
				<li><i>Timer</i></li>
				<li>Controle da DMA e interrupções</li>
				<li>Interface USB</li>
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