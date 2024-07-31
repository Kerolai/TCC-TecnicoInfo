<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Programação I | Conceito de Algoritmos</title>
	<link rel="stylesheet" type="text/css" href="estiloCP1.css">
</head>
<body>
	<!--MENU-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; font-size: 65px;">Programação I</font>
			
	<!--LOGO-->
		<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
	</div>
	<br><br><br><br>
	<br><br><br>

	<!--BOTÃO PARA VOLTAR-->
		<div>
			<table style="margin-left: 2%;" width="7%">
			  	<tr>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/materias/1ano/prog1.php'"> <img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/materias/1ano/prog1.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="35%">
		  	<tr>
		    	<td><img src="imagens/prog1.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Conceito de Algoritmos</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_prog1/Prog.1 - C001 - Conceito de algoritmo.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div>

	<!--CONTEÚDO-->
		<div>
			<center><font size="6"><b>Algoritmos</b></font></center>

			<font size="5" style="margin-left: 7%;"><b>→ Definição</b></font>
			<p>
				<b>Algoritmo</b> é um <b>conjunto finito</b> de regras que fornece uma <b>sequência ordenada</b>, e não ambígua de operações para <b>resolver um problema</b> específico passo a passo.<br><br>
				Para especificar uma sequência de passos, é necessário utilizar a ordem, portanto, precisamos utilizar a <b>lógica</b>.
			</p>

			<center><img src="imagens/C1/foto1.jpg" width="40%"></center>
			<p>
				Quando construímos um algoritmo, fixamos um <b>padrão de comportamento</b> para ser seguido passo a passo, que pode ser executado por outra pessoa ou máquina.<br><br>

			<font size="5" style="margin-left: 7%;"><b>→ Porque precisamos dos algoritmos?</b></font>
			<p>O algoritmo é a base inicial de toda programação de computadores. Pois:</p>
			<ul>
				<li>Especifica uma sequência de passos lógicos para o computador executar uma tarefa.</li>
				<li>Com uma ferramenta algorítmica, podemos compreender uma solução para um dado problema.</li>
			</ul><br><br>

			<font size="5" style="margin-left: 7%;"><b>→ Caraterísticas</b></font><br><br>
			<ul>
				<li>Existe fim;</li>
				<li>Não cria margem à dupla interpretação (não ambíguo);</li>
				<li>Receber dados de entrada do mundo exterior;</li>
				<li>Gera informações de saída para o mundo externo ao algoritmo;</li>
				<li>Afetivo (todas as etapas especificadas no algoritmo devem ser alcançáveis em um tempo finito).</li>
			</ul><br>

			<center><img src="imagens/C1/foto2.jpg" width="25%"><br><br>

			<font size="6"><b>Programas de Computador</b></font></center>
			<p>
				<b>Programa</b> é um tipo de algoritmo com operações específicas para o computador e exclusivos ao conjunto de instruções que o processador pode executar.<br><br>
				Classificamos as linguagens de programação segundo sua <b>proximidade</b> com a linguagem da máquina. Quanto maior a semelhança, mais baixo é o nível da linguagem. <br>As mais "distantes" são conhecidas como <b>linguagens de alto nível</b>.<br><br>
				Os computadores das mais variadas arquiteturas têm funcionamento similar:
			</p>
			<center><img src="imagens/C1/foto3.jpg" width="40%"></center><br>

			<font size="5" style="margin-left: 7%;"><b>→ Executando um Programa</b></font>
			<p>
				A partir do código em linguagem de alto nível, chamado como <b>código fonte</b>, o <b>compilador</b> gera um arquivo com o código em linguagem de máquina, conhecido como <b>código-objeto</b>. Esse código-objeto fica em disco e só é carregado em memória no momento da execução.
			</p>
			<center><img src="imagens/C1/foto4.jpg" width="35%"><br><br>

			<font size="6"><b>Estruturação de Algoritmos</b></font></center><br>

			<font size="5" style="margin-left: 7%;"><b>→ Formas de Representação</b></font>

			<p>
				<b style="font-size: 18px;">– Linguagem natural</b><br><br>
				Faz-se o uso do português para descrever o algoritmo e é dirigida a orientar uma pessoa e não uma máquina, as quais não podem tomar decisões na base de escolher alternativas, mesmo que nos pareçam óbvias.<br><br>

				<b>Vantagem:</b><br>
				&nbsp;&nbsp;O português é bastante conhecido por nós.<br><br>
				<b>Desvantagens:</b><br>
				&nbsp;&nbsp;Imprecisão;<br>
				&nbsp;&nbsp;Pouca confiabilidade.<br><br>

				<b style="font-size: 18px;">– Fluxograma ou Diagrama de blocos</b><br><br>
				Conjunto de <b>símbolos gráficos</b>, cada um representando uma <b>ação específica</b> e básica para ser executada por um computador. Ele mostra a linha de raciocínio usada <br>pelo programador para resolver o problema proposto.<br><br>
				Na tabela a seguir, apresenta todos os símbolos e suas respectivas funções:
			</p>
			<center>
				<table class="tabela" width="55%">
					<tr>
						<th>Símbolo</th>
						<th>Significado</th>
						<th>Descrição</th>
					</tr>
					<tr>
						<td><img src="imagens/C1/figu1.jpg"></td>
						<td><b>Terminal</b></td>
						<td><b>Início e fim</b> do fluxo lógico ou definição de sub-rotinas.</td>
					</tr>
					<tr>
						<td><img src="imagens/C1/figu2.jpg"></td>
						<td><b>Entrada Manual</b></td>
						<td>Define <b>entrada manual</b> de dados por meio de um teclado conectado ao computador.</td>
					</tr>
					<tr>
						<td><img src="imagens/C1/figu3.jpg"></td>
						<td><b>Processamento</b></td>
						<td>Executa ações de <b>processamento</b> relacionados a operações matemáticas.</td>
					</tr>
					<tr>
						<td><img src="imagens/C1/figu4.jpg"></td>
						<td><b>Exibição</b></td>
						<td>Executa operações de <b>saída de dados</b> em um monitor de vídeo conectado ao computador.</td>
					</tr>
					<tr>
						<td><img src="imagens/C1/figu5.jpg"></td>
						<td><b>Decisão</b></td>
						<td>Define <b>desvios condicionais</b> nas operações de tomadas de decisões e laços adicionais para <b>repetição</b> de trechos do programa.</td>
					</tr>
					<tr>
						<td><img src="imagens/C1/figu6.jpg"></td>
						<td><b>Preparação</b></td>
						<td>Executa um laço incondicional que permite a <b>modificação de instruções</b> ou grupo de instruções limitadas no laço.</td>
					</tr>
					<tr>
						<td><img src="imagens/C1/figu7.jpg"></td>
						<td><b>Processo predefinido</b></td>
						<td>Define um grupo de <b>operações</b> relacionadas a uma sub-rotina de processamento.</td>
					</tr>
					<tr>
						<td><img src="imagens/C1/figu8.jpg"></td>
						<td><b>Conector</b></td>
						<td>Pontos de <b>conexão</b> entre trechos de programas apontados a outras partes do diagrama de blocos.</td>
					</tr>
					<tr>
						<td><img src="imagens/C1/figu9.jpg"></td>
						<td><b>Linha</b></td>
						<td><b>Vínculos</b> existentes entre os símbolos de um diagrama de blocos. Deve ter na ponta uma <b>seta</b>, indicando sua <b>direção</b>.</td>
					</tr>
				</table>
			</center><br>

			<p><b>Exemplo:</b></p>
			<img src="imagens/C1/foto5.jpg" width="35%" style="margin-left: 10%;"><br>
			<p>
				Entretanto, a <b>representação gráfica</b> não é prática. A correção de uma linha de pensamento pode implicar a reconstrução de muitas instruções. Além disso, a construção <br>de algoritmos mais complexos e longos pode se tornar extremamente trabalhoso, ocupando várias páginas.<br><br>

				<b>Vantagens:</b><br>
				&nbsp;&nbsp;Uma das ferramentas mais conhecidas.<br><br>

				<b>Desvantagem:</b><br>
				&nbsp;&nbsp;Complica à medida que o algoritmo cresce.<br><br>
			</p>
			<p>
				<b style="font-size: 18px;">– Fluxograma ou Diagrama de blocos</b><br><br>

				Consiste na definição de uma pseudolinguagem de programação, cujos comandos são em português, para representar algoritmos. Sua estrutura é inicializada deste jeito:<br><br>

				<b>Algoritmo</b> Nome_Do_Algoritmo<br>
				&nbsp;&nbsp;<b>variáveis</b><br>
					&nbsp;&nbsp;&nbsp;&nbsp;Declaração das variáveis<br>
				&nbsp;&nbsp;<b>Início</b><br>
					&nbsp;&nbsp;&nbsp;&nbsp;Corpo do Algoritmo<br>
				&nbsp;&nbsp;<b>Fim</b><br><br>

				<b>Vantagens:</b><br>
				&nbsp;&nbsp;Usa o português como base.<br>
				&nbsp;&nbsp;Pode-se definir quais e como os dados vão estar estruturados.<br>
				&nbsp;&nbsp;Passagem quase imediata do algoritmo para uma linguagem de programação qualquer.<br><br>

				<b>Desvantagem:</b><br>
				&nbsp;&nbsp;Não é padronizada.<br><br>
			</p>
		</div><br><br><br>

		<center>
			<div>
				<table width="12%">
				  	<tr>
				    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/prog1/C001P2.php'"> <img src="imagens/direita.png" width="35px"></button></td>
				    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/prog1/C001P2.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Continuar leitura</b></font></button></td>
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