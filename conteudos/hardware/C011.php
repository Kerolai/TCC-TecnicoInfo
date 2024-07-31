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
		<table style="margin-left: 5%;" width="22%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Processadores</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_hw/Hardware - C011 - Processadores.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div>

	<!--CONTEÚDO-->
		<div>
			<center><font size="6"><b>Introdução</b></font></center>
			<p>
				O processador é um <b>circuito integrado</b> encarregado de realizar o processamento de dados do computador. Além disso, este componente pode ser denominado como:
			</p>
			<ul>
				<li>Microprocessador </li>
				<li>CPU (<i>Central Processing Unit</i>)</li>
				<li>UCP (Unidade Central de processamento)</li>
			</ul>
			<p>
				<b>Curiosidade:</b> “O <b>CPU</b> muitas vezes utilizando o senso comum é confundido com o <b>gabinete</b>. Sendo assim, é importante diferenciar tais elementos, os quais são muito distintos, pois o processador é um elemento da caixa (gabinete), que o comporta”.
			</p>
			<center><img src="imagens/C11/foto1.jpg" width="20%"></center><br>
			<p>
				As máquinas que utilizam <b>funcionamento digital</b> possuem sempre um processador e isso inclui carros, máquinas de lavar, ar condicionado, entre outros. Ademais, o processador é denominado comumente como o <b>“cérebro”</b> de um computador mesmo sendo sempre é necessário as <b>instruções</b> para este realizar suas atividades.<br><br>
				As <b>instruções</b> nada mais são do que o <b><i>software</i></b> (programa), os quais auxiliam nas atividades de qualquer máquina. Também podemos encontrar outros tipos de processadores dentro de uma máquina, como o <b>GPU</b> (<i>Graphics Processing Unit</i>), ou seja, as placas de vídeo 3D.
			</p><br>

			<center><font size="6"><b>Componentes de um Processador</b></font></center>
			<ul>
				<li>Registradores</li>
				<li>UC (Unidade de Controle)</li>
				<li>ULA ou ALU (Unidade Lógica e Aritmética)</li>
				<li>UPF ou FPU (Unidade de Ponto Flutuante)</li>
				<li>Memória Cache</li>
			</ul>
			<center><img src="imagens/C11/foto2.jpg" width="30%"><br><br>

			<font size="6">Registradores</font></center>
			<p>
				São dispositivos de <b>armazenamento temporário de dados</b> existente dentro do processador, o qual é importante para <b>facilitar a execução</b> de tarefas que precisam ser <b>fragmentadas</b> em várias instruções. Ademais, o tamanho de um registrador é medido em <b>bits</b>, o qual pode variar de <b>32 a 256 bits</b> em processadores atuais.<br><br>
				A união de todos os <b>registradores</b> forma a memória <b>interna do processador</b>, a qual possui <b>alta velocidade e baixa capacidade</b> (comparada as outras memórias). É importante salientar que o registrador é a <b>memória mais rápida</b> do computador, pois nela é possível ler e escrever rapidamente.<br><br>
				Além disso, antes executar uma <b>instrução</b> todos os <b>dados são lidos</b> da memória <b>cache</b> e armazenados nos <b>registradores</b>. Sendo assim ao executar uma instrução, logo esta indica também quais registradores devem ser usados e qual a sua operação deve ser executada.<br><br>
				<b>Curiosidade:</b> Os registradores possuem tamanhos de <b>32 bits e 64 bits</b> (processadores de 64 bits).
			</p><br>

			<center><font size="6">Unidade de Controle</font></center>
			<p>
				Componente do processador responsável por <b>converter as instruções em sinais elétricos</b>, os quais irão <b>ativar</b> (ou desativar) outros componentes (como a ULA e os registradores). Sendo assim, os sinais são gerados com base na <b>instrução</b> que está sendo processada.
			</p><br>

			<center><font size="6">Unidade Lógica Aritmética</font></center>
			<p>
				São <b>núcleos de processamento</b>, os quais processa dados dos registradores para gerar outros <b>dados</b> que serão o resultado da operação. Este realiza <b>operações aritméticas</b> (soma, subtração, multiplicação, divisão - <b>inteiros</b>) e <b>operações lógicas</b> (<i>AND, OR, XOR, NOT, SHIFTS, ROTATES</i>).
			</p><br>

			<center><font size="6">Unidade de Ponto Flutuante</font></center>
			<p>
				Este executa operações matemáticas <b>complexas</b> (como raízes quadradas, potenciação, logaritmos, entre outros) e operações aritméticas com <b>números reais</b> em <b>alta precisão</b>, a qual é necessária para a geração de imagens tridimensionais, jogos e entre outros. 
			</p><br>

			<center><font size="6">Memória Cache</font></center>
			<p>
				É uma memória <b>intermediária</b> entre a memória principal e os registradores do processador, a qual é dividida em níveis LX (level X), onde X é um número natural.<br><br>
				<b>Curiosidade:</b> Geralmente as caches L1 e L2 estão <b>embutidas</b> no chip do processador e por ser estática resulta em um aumento de custo.
			</p><br>

			<center><font size="6"><b>Clock do Processador</b></font></center>
			<p>
				O <b><i>clock</i></b> é o <b>número de ações</b> (ou pulsos), que o processador consegue <b>executar por segundo</b>. Além disso, as <b>ações</b> podem ler e escrever na memória <i>RAM</i>, dar instruções para o armazenamento, entre outros.<br><br>
				O <i>clock</i> é o <b>indicador</b> mais imediato da “velocidade” de um processador, o qual é medido em <b><i>Hertz</i></b> (GHz). Também é importante salientar que se houver um aumento no clock, pode resultar em problemas no tamanho e intensidade de calor emitido pelo <b>processador</b>.
			</p><br>

			<center><font size="6"><b>Núcleos do Processador</b></font></center>
			<p>
				Os núcleos têm a função de um processador <b>independente</b>, o qual o número de ações que um computador consegue realizar por pulso de <i>clock</i> é <b>maior</b>. Existem núcleos do tipo:<br><br>
				<b style="font-size: 19px;"><i>Core</i></b>: Em resumo, é um é um dos <b>núcleos físicos</b> de um processador. Se um processador tem 4 <i>cores</i>, significa que ele tem 4 núcleos físicos ou a grosso modo, 4 partes.<br><br>
				<b style="font-size: 19px;"><i>Thread</i> (Linha)</b>: Basicamente é quando um processo usa várias <b>linhas de instruções / códigos</b> para executar um determinado <b>programa</b>.<br><br>
				<b>Curiosidade:</b> É possível que um processador trabalhe com 8 threads e 4 núcleos. Além disso, como o sistema operacional utilizar <b><i>2 threads</i> em cada núcleo</b>, o mesmo consegue executar mais programas.
			</p>
			<center><img src="imagens/C11/foto3.jpg" width="36%"></center><br>
			<p>No <i>Windows</i> os <i>threads</i> estão descritos como <b>processadores lógicos</b>.</p>
			<center><img src="imagens/C11/foto4.jpg" width="34%"></center><br><br>

			<center><font size="6"><b>Arquitetura</b></font></center>
			<p>
				O objetivo com o <b>processador</b> é que este possua um <b>conjunto de instruções</b> em pequeno porte e de forma mais <b>simples possível</b>, afim de que o <b>ciclo de tempo</b> do processador seja mais <b>rápido</b>. Dessa forma, são utilizadas duas tecnologias:
			</p>
			<ul>
				<li><b>CISC:</b> Sistemas com conjunto de instruções <b>complexo</b></li>
				<li><b>RISC:</b> Sistemas com conjunto de instruções <b>reduzido</b></li>
			</ul><br>

			<center><font size="6">CISC</font></center>
			<p>
				<b>Microprocessador</b> cujas as instruções são <b>complexas</b>, sendo difíceis de criar a partir de instruções <b>básicas</b>. Utilizada pelos microprocessadores (x86), é um tipo de arquitetura de <b>alto custo</b>, e quanto ao tamanho das instruções, são variáveis podendo exigir <b>mais de um ciclo <i>clock</i></b> para execução.
			</p>
			<center><img src="imagens/C11/foto5.jpg" width="25%"></center><br><br>

			<center><font size="6">RISC</font></center>
			<p>
				Conjunto que apresenta instruções <b>simples</b>. Contém vantagens em relação aos processadores CISC, no qual tem <b>baixo custo</b> de fabricação e suas instruções são executadas em <b>um ciclo de <i>clock</i></b>, tornando mais <b>rápida</b> a execução dos programas.
			</p>
			<center><img src="imagens/C11/foto6.jpg" width="32%"></center>
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