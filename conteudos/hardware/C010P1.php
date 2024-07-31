<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Hardware | Memória RAM</title>
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
		<table style="margin-left: 5%;" width="23%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Memória RAM</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_hw/Hardware - C010 - Memória RAM.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div>

	<!--CONTEÚDO-->
		<div>
			<center><font size="6"><b>Introdução</b></font></center>
			<p>
				A <b>memória <i>RAM</i></b> (memória de acesso aleatório), é responsável por disponibilizar <b>dados e instruções para processamento</b>. Além disso, em casos específicos como as instruções e dados estarem localizados em um <b>sistema de memória em massa</b> (HD, SSD, <i>PenDrive</i>, entre outros), estas informações primeiramente devem ser transferidas para a <b>memória <i>RAM</i></b>, afim de que o <b>processador tenha acesso</b> as mesmas.
			</p>
			<center><img src="imagens/C10/foto1.jpg" width="30%"></center><br>
			<p>
				O <b>sistema de memória</b> utiliza o <b>endereçamento</b> para que o <b>processador</b> localize essas informações com mais <b>facilidade</b>. Ademais, a memória <i>RAM</i> pode ser acessada em qualquer posição, por isso da denominação “acesso aleatório”.
			</p><br>

			<center><font size="6"><b>Características</b></font></center>
			<p>
				Essa memória possibilita que o <b>processador escreva dados</b> na memória. Além disso, a memória é <b>volátil</b>, ou seja, quando a fonte de alimentação é cortada (quando o computador é desligado), a mesma perde o seu conteúdo. Também é importante saber, que os chips RAM podem ser construídos com as tecnologias: 
			</p>
			<ul>
				<li>Estática </li><li>Dinâmica</li>
			</ul><br>

			<center><font size="5"><b>Memória Estática</b></font></center>
			<p>
				As memórias estáticas (ou <i>SRAM</i>), utilizam o circuito <b><i>flip-flop</i></b> (transístor), para <b>armazenamento dos bits</b> de informação em seu interior. Essa memória não é muito popular e envolve a memória a qual vem instalada em componentes do computador, principalmente nos processadores.<br><br>
				É comumente encontrarmos as suas <b>implementações</b> utilizando <b>quatro transistores e seis transistores</b>, ambos do tipo <i>MOSFET</i>. Além disso, as memórias <b>estáticas</b> são mais <b>rápidas</b> comparadas com as <b>dinâmicas</b>, pois <b>não utilizam capacitores</b> para <b>armazenar informação</b>.<br><br>
				<b>Curiosidade:</b> “Os capacitores <b>precisam de ciclos de recarga</b>, o que resulta em uma latência maior, implicando também na sua velocidade”.
			</p><br>

			<center><font size="5"><b>Memória Dinâmica</b></font></center>
			<p>
				As memórias dinâmicas (ou <i>DRAM</i>), usadas na <b>memória principal</b> do computador apresenta os seus <b>bits de informação</b> armazenados em um <b>capacitor</b>. A principal problemática para esse tipo de memória é que os capacitores <b>se descarregam naturalmente</b> ao longo do tempo e as memórias consequentemente precisam <b>recarregar</b> os seus capacitores (processo chamado de “<i>refresh</i>”).<br><br>
				Além disso, os capacitores que estão neste processo, <b>não podem ser acessados</b> causando uma demora <b>muito maior</b> do que a memória <b>estática</b>.<br><br>
				Essa memória pode ser classificada ainda, como:
			</p>
			<ul>
				<li>Síncrona</li><li>Assíncrona</li>
			</ul>

			<center><font size="5"><b>Memória Dinâmica x Memória Estática</b></font><br>
				<table class="tabela" width="40%">
					<tr>
						<th>Características</th>
						<th>Estática (<i>SRAM</i>)</th>
						<th>Dinâmica (<i>DRAM</i>)</th>
					</tr>

					<tr><td>Célula</td><td><i>Flip-Flop</i></td><td>Capacitor</td></tr>

					<tr><td>Velocidade</td><td>Alta</td><td>Baixa</td></tr>

					<tr><td>Dencidade</td><td>Baixa</td><td>Alta</td></tr>

					<tr><td>Custo</td><td>Alto</td><td>Baixo</td></tr>
				</table><br><br>

			<font size="6"><b>Tecnologia das Memórias</b></font></center>
			<p>
				Os <b>módulos de memória</b>, são formados por <b>chips de memória RAM</b> e com diversas tecnologias.<br><br>
				A memória construída com a tecnologia <b>dinâmica</b> possuí seus chips desenhados como uma <b>matriz de células</b>, pois estas estão dispostas em <b>linhas e colunas</b>. Além disso, os <b>bits</b> podem ser extraídos somente indicando a <b>posição</b> da célula.<br><br>
				<b style="font-size: 19px;">- Tecnologias da memória <i>DRAM</i>:</b>
			</p>
			<ul>
				<li><i>Fast Page Mode</i> (FPM)</li>
				<li><i>Extended Data Out</i> (EDO)</li>
				<li><i>Synchronous DRAM</i> (SDRAM)</li>
				<li><i>Double Data Rate SDRAM</i> (DDR-SDRAM)</li>
			</ul><br>

			<center><font size="5"><b>FPM</b></font></center>
			<p>
				Essa tecnologia é <b>pioneira</b> e permite um <b>acesso rápido aos dados</b>, a qual está na <b>mesma linha</b> da memória. Por meio do <b>sistema de matrizes</b> (ou banco de memória), as células recebem <b>sinais de endereçamento e de controle</b>, fornecendo ou recebendo uma determinada informação.<br><br>
				<b>Curiosidade:</b> Os chips com a tecnologia <i>FPM</i> são geralmente encontrados em módulos SIMM (30 e 72 vias) ou em <i>DIMM</i> (168 vias) e <i>SODIMM</i>.
			</p><br>

			<center><font size="5"><b>SDRAM</b></font></center>
			<p>
				A tecnologia SDRAM permite que as memórias sejam <b>sincronizadas</b> com o <b>processador</b>. Assim o <b>controlador</b> de memória sabe exatamente em que <b>ciclo de <i>clock</i></b> a informação estará disponível para o <b>processador</b>, não o deixando esperar os dados.<br><br>
				Além disso, essa memória não indica o tempo de acesso, mas sim o tempo de ciclo e só transfere os dados na subida do sinal de <i>clock</i>.<br><br>
				<b>Curiosidade:</b> As memórias com tecnologia <i>SDRAM</i> são encontradas, como: 
			</p>
			<ul>
				<li>PC66 (66 MHz)</li><li>PC100 (100 MHz)</li>
				<li>PC133 (133 MHz)</li><li>Ou SDR (<i>Single Data Rate</i>)</li>
			</ul>
			<p>E são montados em módulos <i>DIMM</i> (168 vias).</p><br>

			<center><font size="5"><b>DDR-SDRAM</b></font></center>
			<p>
				A tecnologia <i>DDR-SDRAM</i> é a <b>evolução</b> da versão padrão <i>SDRAM</i> simples, pois essa transfere dados na <b>subida</b> e na <b>descida</b> do sinal <b><i>clock</i></b>, <b>dobrando a taxa</b> de transferência de dados (<i>data rate</i>).<br><br>
				<b>Exemplo:</b> “Uma memória <i>DDR-SDRAM</i> com um <i>clock</i> de 100 MHz (real), consegue um desempenho equivalente a 200 Hz (efetivo)”.
			</p>
		</div><br><br><br>

		<center>
			<div>
				<table width="12%">
				  	<tr>
				    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C010P2.php'"> <img src="imagens/direita.png" width="35px"></button></td>
				    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C010P2.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Continuar leitura</b></font></button></td>
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