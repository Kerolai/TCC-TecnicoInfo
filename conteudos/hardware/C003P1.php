<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Hardware | Placa-mãe</title>
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
		<table style="margin-left: 5%;" width="20%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Placa-mãe</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_hw/Hardware - C003 - Placa-mãe.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div>

	<!--CONTEÚDO-->
		<div>
			<center><font size="6"><b>Introdução</b></font></center>
			<p>
				A placa-mãe, é a <b>maior placa de circuito impresso</b> dentro do computador e serve como base para a conexão de todos os dispositivos.
			</p>
			<center><img src="imagens/C3/foto1.jpg" width="24%"></center>
			<p>
				<b>Placa de circuito impresso – PCI</b>: A placa PCI ou PCB em inglês, é composta por um total de 4 à 10 placas, ou seja, a placa possui muitas camadas. A maioria dos seus componentes, utiliza <b>solda</b> sendo difícil substituí, caso algum deles esteja com defeito.
			</p>
			<center><img src="imagens/C3/foto2.jpg" width="40%"><br><br>

			<font size="6"><b>O que terá em uma placa-mãe?</b></font></center>
			<ul>
				<li>Soquete do processador</li>
				<li><i>Slots</i> de memória</li>
				<li><i>Chipset</i></li>
				<li><i>Slots</i> de expansão</li>
				<li>Portas de comunicação</li>
				<li>Conectores de alimentação</li>
				<li>Conectores para ventoinhas</li>
				<li>Conectores do painel frontal</li>
				<li>Bateria</li>
				<li><i>Chip</i> da BIOS</li>
				<li>Circuito regulador de tensão</li>
			</ul><br><br>

			<center><font size="6"><b>Soquete do Processador</b></font></center>
			<ul>
				<li>É onde o processador deve ser encaixado na placa-mãe.</li>
				<li>É importante verificar, se a placa-mãe é compatível com o processador porque em alguns ele não é compatível mesmo utilizando o mesmo soquete.</li>
			</ul>
			<p>
				<b>Tipos mais utilizados:</b><br><br>
				<b>LGA (<i>Land Grid Array</i>):</b> Soquete utilizada pela <b>Intel</b> onde os <b>pinos não ficam no processador e sim na placa mãe</b>. A forma de fixar o processador é com uma <b>armadura de metal</b> que envolve e protege da pressão que o dissipador de calor exerce sobre ele.
			</p>
			<center><img src="imagens/C3/foto3.jpg" width="15%"></center>
			<p>
				<b>ZIF (<i>Zero Insertion Force</i>):</b> É um padrão de encaixe, em formato de soquete utilizado pela maioria dos processadores. Atualmente utilizado pela <b>AMD</b>, pois, <b>não é preciso fazer força</b> para realizar o encaixe do processador.
			</p>
			<center><img src="imagens/C3/foto4.jpg" width="15%"><br><br>

			<font size="6"><b>Slot de memória</b></font></center>
			<ul>
				<li>Também chamado de <b>soquete de memória</b>;</li>
				<li>Onde se instala os módulos de memória;</li>
			</ul>
			<p>
				O <b>tipo e a quantidade</b> de <b><i>slots</i> de memória</b> que a placa-mãe tem, indicam o <b>tipo de memória e a quantidade máxima de memória</b> que pode ser instalada no computador.<br><br>
				Existe um modo de operação chamado “<i>Dual-channel</i>”. As placas que tem <b>4 slots</b> com essa técnica normalmente vêm com 2 cores para diferenciar os pares que trabalham no modo <i>Dual</i>.
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Modelos de slot DIMM e SO- DIMM (<i>Notebooks</i>):</b></font>
			<ul>
				<li>DDR</li><li>DDR2</li>
				<li>DDR3</li><li>DDR4</li>
			</ul><br>

			<center><font size="6">Slot de memória (DIMM)</font></center>
			<center><img src="imagens/C3/foto5.jpg" width="40%"></center><br>

			<center><font size="6">Slot de memória (DDR-DIMM)</font></center>
			<center><img src="imagens/C3/foto6.jpg" width="40%"></center><br>

			<center><font size="6">Slot de memória (DDR2-DIMM)</font></center>
			<center><img src="imagens/C3/foto7.jpg" width="40%"></center><br>

			<center><font size="6">Slot de memória (DDR3-DIMM)</font></center>
			<center><img src="imagens/C3/foto8.jpg" width="35%"></center><br>

			<center><font size="6">Slot de memória (DDR4-DIMM)</font></center>
			<center><img src="imagens/C3/foto9.jpg" width="40%"></center>
			<br><br><br>

			<center><font size="6">Comparando</font></center>
			<center><img src="imagens/C3/foto10.jpg" width="30%"></center>
		</div><br><br><br>
		
		<center>
			<div>
				<table width="12%">
				  	<tr>
				    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C003P2.php'"> <img src="imagens/direita.png" width="35px"></button></td>
				    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C003P2.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Continuar leitura</b></font></button></td>
				 	</tr>
				</table>
			</div>
		</center><br><br>

		<!--CRÉDITOS-->
		<div class="div">
			<p class="cred">Elisângela e Kerolai ® 2021</p>
		</div>
</body>
</html>