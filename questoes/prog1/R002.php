<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Programação I | Atividades | Construção de Algoritmos | Resultado</title>
	<link rel="stylesheet" type="text/css" href="estiloR.css">
</head>
<body>
	<!--TÍTULO-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; font-size: 65px;">Programação I</font>
			
	<!--LOGO-->
		<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
	</div>
	<br><br><br><br>
	<br><br><br>

	<?php
		$q1 = $_POST["perg1"];
		$q2 = $_POST["perg2"];
		$q3 = $_POST["perg3"];
		$q4 = $_POST["perg4"];
		$q5 = $_POST["perg5"];
		$q6 = $_POST["perg6"];
		$q7 = $_POST["perg7"];
		$q8 = $_POST["perg8"];
		$q9 = $_POST["perg9"];
		$q10 = $_POST["perg10"];

		$acertos = 0;
		$erros = 0;
		$acertos_t = 10;
		$erros_t = 10;

		if ($q1 == "opt4") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q2 == "opt5") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q3 == "opt2") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q4 == "opt4") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q5 == "opt1") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q6 == "opt3") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q7 == "opt5") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q8 == "opt2") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q9 == "opt1") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q10 == "opt4") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		$percentualA = $acertos * 100 / $acertos_t;
	?>
	<center>
		<font size="6"><b>Atividade Realizada!</b></font><br><br>

		<?php
			if ($acertos == 10 || $acertos == 9 || $acertos == 8 || $acertos == 7) {
				echo "<font size='5'><b>Parabéns, continue assim!</b></font><br><br>";
			}
			if ($acertos == 6 || $acertos == 5 || $acertos == 4) {
				echo "<font size='5'><b>Muito bem, quase lá!</b></font><br><br>";
			}
			if ($acertos == 3 || $acertos == 2 || $acertos == 1 || $acertos == 0) {
				echo "<font size='5'><b>Melhore seus estudos!</b></font><br><br>";
			}
		?>

		<div class="principal">
			<div class="caixa">
				<font size="5"><b>
					<?php
						echo "<b>" . $acertos. "/10</b><br>";
						echo "Acertos: " . round($percentualA, 1) . "%";
					?></b>
				</font>
			</div>	
		</div><br><br>

	</center>
		<fieldset>
			<legend>
				&nbsp;&nbsp;<font size="4">Gabarito</font>&nbsp;&nbsp;
			</legend>
			<div class="questoes">
			<?php
			//QUESTÃO 1
				//CORRETA
					if ($q1 == "opt4") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 62%;'>
								<p>
									<label><b>1. Quais são as três estruturas básicas de controle que se baseiam em algoritmos?</b></label><br><br>

									<font><b>Marcada: d) Sequenciação, decisão e repetição</b></font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q1 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 61.5%; margin: 0.5%;'>
								<p>
									<label><b>1. Quais são as três estruturas básicas de controle que se baseiam em algoritmos?</b></label><br><br>

									<font>Marcada: a) Decisão, preparação e repetição</font><br>
									<font>R. Correta: d) Sequenciação, decisão e repetição</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 61.5%; margin: 0.5%;'>
								<p>
									<label><b>1. Quais são as três estruturas básicas de controle que se baseiam em algoritmos?</b></label><br><br>

									<font>Marcada: b) Sequenciação, repetição e preparação</font><br>
									<font>R. Correta: d) Sequenciação, decisão e repetição</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 61.5%; margin: 0.5%;'>
								<p>
									<label><b>1. Quais são as três estruturas básicas de controle que se baseiam em algoritmos?</b></label><br><br>

									<font>Marcada: c) Decisão, modulação e preparação</font><br>
									<font>R. Correta: d) Sequenciação, decisão e repetição</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 61.5%; margin: 0.5%;'>
								<p>
									<label><b>1. Quais são as três estruturas básicas de controle que se baseiam em algoritmos?</b></label><br><br>

									<font>Marcada: e) Sequenciação, modulação e preparação</font><br>
									<font>R. Correta: b) Conjunto finito de regras que fornece uma sequência ordenada e não ambígua para resolver<br> um problema.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO2
				//CORRETA
					if ($q2 == "opt5") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 57.5%; margin: 4.5%;'>
								<p>
									<label><b>2. Complete:<br><br>
									“___________________ é um conjunto de objetos que tem em comum o mesmo comportamento diante de um<br> conjunto definido de operações”.</b></label><br><br>

									<font>Marcada: e) Conjunto de dados</font><br>
								</p><hr size=2 color=#4B0082>";
							}
				//ERRADAS
					if ($q2 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>2. Complete:<br><br>
									“___________________ é um conjunto de objetos que tem em comum o mesmo comportamento diante de um<br> conjunto definido de operações”.</b></label><br><br>

									<font>Marcada: a) Programa</font><br>
									<font>R. Correta: e) Conjunto de dados</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>2. Complete:<br><br>
									“___________________ é um conjunto de objetos que tem em comum o mesmo comportamento diante de um<br> conjunto definido de operações”.</b></label><br><br>

									<font>Marcada: b) Prioridade de Operadores</font><br>
									<font>R. Correta: e) Conjunto de dados</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>2. Complete:<br><br>
									“___________________ é um conjunto de objetos que tem em comum o mesmo comportamento diante de um<br> conjunto definido de operações”.</b></label><br><br>

									<font>Marcada: c) Variáveis</font><br>
									<font>R. Correta: e) Conjunto de dados</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>2. Complete:<br><br>
									“___________________ é um conjunto de objetos que tem em comum o mesmo comportamento diante de um<br> conjunto definido de operações”.</b></label><br><br>

									<font>Marcada: d) Operadores</font><br>
									<font>R. Correta: e) Conjunto de dados</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO3
				//CORRETA
					if ($q3 == "opt2") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59.5%; margin: 2.5%;'>
								<p>
									<label><b>3. Qual é a sequência de comandos para construir uma estrutura de sequenciação?</b></label><br><br>

									<font>Marcada: b) Início - Entrada de dados - Processamento - Saída de dados - Fim</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q3 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>3. Qual é a sequência de comandos para construir uma estrutura de sequenciação?</b></label><br><br>

									<font>Marcada: b) Programa – compilador – computador</font><br>
									<font>R. Correta: b) Início - Entrada de dados - Processamento - Saída de dados - Fim</font><br>
								</p><hr size=2 color=#4B0082>";
							}
					if ($q3 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>3. Qual é a sequência de comandos para construir uma estrutura de sequenciação?</b></label><br><br>

									<font>Marcada: c) Início - Entrada de dados - Processamento - Fim - Saída de dados</font><br>
									<font>R. Correta: b) Início - Entrada de dados - Processamento - Saída de dados - Fim</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q3 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>3. Qual é a sequência de comandos para construir uma estrutura de sequenciação?</b></label><br><br>

									<font>Marcada: d) Fim - Processamento - Entrada de dados - Início - Saída de dados</font><br>
									<font>R. Correta: b) Início - Entrada de dados - Processamento - Saída de dados - Fim</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q3 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>3. Qual é a sequência de comandos para construir uma estrutura de sequenciação?</b></label><br><br>

									<font>Marcada: e) Fim - Entrada de Dados - Processamento - Início - Saída de dados</font><br>
									<font>R. Correta: b) Início - Entrada de dados - Processamento - Saída de dados - Fim</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO4
				//CORRETA
					if ($q4 == "opt4") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>4. Quais opções estão corretas de acordo com a estrutura de decisão?<br><br>
									I) Acontece diversas instruções de uma certa condição for aceita.<br>
									II)	Não há caminhos alternativos no algoritmo.<br>
									III) Executa apenas uma vez cada comando.</b></label><br><br>

									<font>Marcada: d) Apenas a III</font><br>
								</p><hr size=2 color=#4B0082>";
					}

				//ERRADAS
					if ($q4 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>4. Quais opções estão corretas de acordo com a estrutura de decisão?<br><br>
									I) Acontece diversas instruções de uma certa condição for aceita.<br>
									II)	Não há caminhos alternativos no algoritmo.<br>
									III) Executa apenas uma vez cada comando.</b></label><br><br>

									<font>Marcada: a) I e II</font><br>
									<font>R. Correta: d) Apenas a III</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>4. Quais opções estão corretas de acordo com a estrutura de decisão?<br><br>
									I) Acontece diversas instruções de uma certa condição for aceita.<br>
									II)	Não há caminhos alternativos no algoritmo.<br>
									III) Executa apenas uma vez cada comando.</b></label><br><br>

									<font>Marcada: b) II e III</font><br>
									<font>R. Correta: d) Apenas a III</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>4. Quais opções estão corretas de acordo com a estrutura de decisão?<br><br>
									I) Acontece diversas instruções de uma certa condição for aceita.<br>
									II)	Não há caminhos alternativos no algoritmo.<br>
									III) Executa apenas uma vez cada comando.</b></label><br><br>

									<font>Marcada: c) I e II</font><br>
									<font>R. Correta: d) Apenas a III</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>4. Quais opções estão corretas de acordo com a estrutura de decisão?<br><br>
									I) Acontece diversas instruções de uma certa condição for aceita.<br>
									II)	Não há caminhos alternativos no algoritmo.<br>
									III) Executa apenas uma vez cada comando.</b></label><br><br>

									<font>Marcada: e) Apenas a I</font><br>
									<font>R. Correta: d) Apenas a III</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO5
				//CORRETA
					if ($q5 == "opt1") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>5. Complete a frase a seguir de acordo com a sintaxe da função se:<br><br>
									“Se a condição for _________, será executado a instrução relacionada ao _____. Se a condição for ______, o<br> algoritmo muda o fluxo e vai diretamente para a ___________ do algoritmo”.</b></label><br><br>

									<font>Marcada: a) Verdadeira, então, falsa, continuação</font><br>
								</p><hr size=2 color=#4B0082>";
					}

				//ERRADAS
					if ($q5 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>5. Complete a frase a seguir de acordo com a sintaxe da função se:<br><br>
									“Se a condição for _________, será executado a instrução relacionada ao _____. Se a condição for ______, o<br> algoritmo muda o fluxo e vai diretamente para a ___________ do algoritmo”.</b></label><br><br>

									<font>Marcada: b) Falsa, então, verdadeira, bloco de comandos</font><br>
									<font>R. Correta: a) Verdadeira, então, falsa, continuação</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>5. Complete a frase a seguir de acordo com a sintaxe da função se:<br><br>
									“Se a condição for _________, será executado a instrução relacionada ao _____. Se a condição for ______, o<br> algoritmo muda o fluxo e vai diretamente para a ___________ do algoritmo”.</b></label><br><br>

									<font>Marcada: c) Verdadeira, fim se, falsa, bloco de comandos</font><br>
									<font>R. Correta: a) Verdadeira, então, falsa, continuação</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>5. Complete a frase a seguir de acordo com a sintaxe da função se:<br><br>
									“Se a condição for _________, será executado a instrução relacionada ao _____. Se a condição for ______, o<br> algoritmo muda o fluxo e vai diretamente para a ___________ do algoritmo”.</b></label><br><br>

									<font>Marcada: d) Falsa, fim se, verdadeira, continuação</font><br>
									<font>R. Correta: a) Verdadeira, então, falsa, continuação</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>5. Complete a frase a seguir de acordo com a sintaxe da função se:<br><br>
									“Se a condição for _________, será executado a instrução relacionada ao _____. Se a condição for ______, o<br> algoritmo muda o fluxo e vai diretamente para a ___________ do algoritmo”.</b></label><br><br>

									<font>Marcada: e) Falsa, então, verdadeira, continuação</font><br>
									<font>R. Correta: a) Verdadeira, então, falsa, continuação</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO6
				//CORRETA
					if ($q6 == "opt3") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>6. Qual das opções abaixo apresentam somente nomes que respeitam as regras para nomeação de variáveis?</b></label><br><br>

									<font>Marcada: c) Seu uso é opcional. Serve para executar um bloco de comandos quando a condição do if for<br> falso</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q6 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. Para que serve a cláusula senão (else)?</b></label><br><br>

									<font>Marcada: a) Seu uso é opcional. Serve para executar uma variável quando a condição do if for<br> verdadeiro</font><br>
									<font>R. Correta: c) Seu uso é opcional. Serve para executar um bloco de comandos quando a condição do if for<br> falso</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. Para que serve a cláusula senão (else)?</b></label><br><br>

									<font>Marcada: b) Seu uso é obrigatório. Serve para executar um bloco de comandos quando a condição do if for<br> falso</font><br>
									<font>R. Correta: c) Seu uso é opcional. Serve para executar um bloco de comandos quando a condição do if for<br> falso</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. Para que serve a cláusula senão (else)?</b></label><br><br>

									<font>Marcada: d) Seu uso é obrigatório. Serve para executar um bloco de comandos quando a condição do if for<br> verdadeiro</font><br>
									<font>R. Correta: c) Seu uso é opcional. Serve para executar um bloco de comandos quando a condição do if for<br> falso</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. Para que serve a cláusula senão (else)?</b></label><br><br>

									<font>Marcada: e) Seu uso é opcional. Serve para executar uma variável quando a condição do if for<br> falso</font><br>
									<font>R. Correta: c) Seu uso é opcional. Serve para executar um bloco de comandos quando a condição do if for<br> falso</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO7
				//CORRETA
					if ($q7 == "opt5") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. Quando podemos saber se é um comando de condição encadeado?</b></label><br><br>

									<font>Marcada: e) Quando o bloco de instruções<br> subordinado ao comando se/senão contém outros comandos iguais</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q7 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58.5%; margin: 3.5%;'>
								<p>
									<label><b>7. Quando podemos saber se é um comando de condição encadeado?</b></label><br><br>

									<font>Marcada: a) Quando o bloco de instruções<br> subordinado ao comando se contém outros comandos diferentes</font><br>
									<font>R. Correta: e) Quando o bloco de instruções subordinado ao comando se/senão contém outros comandos iguais</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58.5%; margin: 3.5%;'>
								<p>
									<label><b>7. Quando podemos saber se é um comando de condição encadeado?</b></label><br><br>

									<font>Marcada: b) Quando o bloco de instruções<br> subordinado ao comando se contém outros comandos iguais</font><br>
									<font>R. Correta: e) Quando o bloco de instruções subordinado ao comando se/senão contém outros comandos iguais</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58.5%; margin: 3.5%;'>
								<p>
									<label><b>7. Quando podemos saber se é um comando de condição encadeado?</b></label><br><br>

									<font>Marcada: c) Quando o comando se/senão subordinado<br> ao bloco de instruções contém outros comandos diferentes</font><br>
									<font>R. Correta: e) Quando o bloco de instruções subordinado ao comando se/senão contém outros comandos iguais</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58.5%; margin: 3.5%;'>
								<p>
									<label><b>7. Quando podemos saber se é um comando de condição encadeado?</b></label><br><br>

									<font>Marcada: d) Quando o comando se subordinado<br> ao bloco de instruções contém outros comandos iguais</font><br>
									<font>R. Correta: e) Quando o bloco de instruções subordinado ao comando se/senão contém outros comandos iguais</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO8
				//CORRETA
					if ($q8 == "opt2") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>8. Observe as operações abaixo e diga qual está INCORRETA:<br><br>
									I) % (resto da divisão);<br>II)	pow (raiz quadrada de um número);<br>
									III) != (diferente);<br> IV) && (e);<br>
									V) div (resultado inteiro de uma divisão);</b></label><br><br>

									<font>Marcada: b) Opção II</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q8 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>8. Observe as operações abaixo e diga qual está INCORRETA:<br><br>
									I) % (resto da divisão);<br>II)	pow (raiz quadrada de um número);<br>
									III) != (diferente);<br> IV) && (e);<br>
									V) div (resultado inteiro de uma divisão);</b></label><br><br>

									<font>Marcada: a) Opção I</font><br>
									<font>R. Correta: b) Opção II</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>8. Observe as operações abaixo e diga qual está INCORRETA:<br><br>
									I) % (resto da divisão);<br>II)	pow (raiz quadrada de um número);<br>
									III) != (diferente);<br> IV) && (e);<br>
									V) div (resultado inteiro de uma divisão);</b></label><br><br>

									<font>Marcada: c) Opção III</font><br>
									<font>R. Correta: b) Opção II</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>8. Observe as operações abaixo e diga qual está INCORRETA:<br><br>
									I) % (resto da divisão);<br>II)	pow (raiz quadrada de um número);<br>
									III) != (diferente);<br> IV) && (e);<br>
									V) div (resultado inteiro de uma divisão);</b></label><br><br>

									<font>Marcada: d) Opção IV</font><br>
									<font>R. Correta: b) Opção II</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>8. Observe as operações abaixo e diga qual está INCORRETA:<br><br>
									I) % (resto da divisão);<br>II)	pow (raiz quadrada de um número);<br>
									III) != (diferente);<br> IV) && (e);<br>
									V) div (resultado inteiro de uma divisão);</b></label><br><br>

									<font>Marcada: e) Opção V</font><br>
									<font>R. Correta: b) Opção II</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO9
				//CORRETA
					if ($q9 == "opt1") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>9. Observe esse código abaixo:<br><br>
									&nbsp;int num1 = 9; num2 = 6;<br>&nbsp;&nbsp;if(num1==num2){<br>
									&nbsp;&nbsp;&nbsp;printf(“São iguais”);<br>&nbsp;&nbsp;}else<br>
									&nbsp;&nbsp;&nbsp;printf(“São diferentes”);<br>&nbsp;}</b></label><br><br>

									<font>Marcada: a) O comando if/else está comparando os dois números para informar se são iguais. Se a condição<br> for verdadeira, irá sair a mensagem “São iguais”, caso contrário, aparecerá “São diferentes”.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q9 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 54%; margin: 8%;'>
								<p>
									<label><b>9. Observe esse código abaixo:<br><br>
									&nbsp;int num1 = 9; num2 = 6;<br>&nbsp;&nbsp;if(num1==num2){<br>
									&nbsp;&nbsp;&nbsp;printf(“São iguais”);<br>&nbsp;&nbsp;}else<br>
									&nbsp;&nbsp;&nbsp;printf(“São diferentes”);<br>&nbsp;}</b></label><br><br>

									<font>Marcada: b) O comando while está comparando os dois números para informar se são diferentes. Se a condição<br> for verdadeira, irá sair a mensagem “São iguais”, caso contrário, aparecerá “São diferentes”.</font><br>
									<font>R. Correta: a) O comando if/else está comparando os dois números para informar se são iguais. Se a condição<br> for verdadeira, irá sair a mensagem “São iguais”, caso contrário, aparecerá “São diferentes”.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 54%; margin: 8%;'>
								<p>
									<label><b>9. Observe esse código abaixo:<br><br>
									&nbsp;int num1 = 9; num2 = 6;<br>&nbsp;&nbsp;if(num1==num2){<br>
									&nbsp;&nbsp;&nbsp;printf(“São iguais”);<br>&nbsp;&nbsp;}else<br>
									&nbsp;&nbsp;&nbsp;printf(“São diferentes”);<br>&nbsp;}</b></label><br><br>

									<font>Marcada: c) O comando if/else está comparando os dois números para informar se são diferentes. Se a condição<br> for verdadeira, irá sair a mensagem “São diferentes”, caso contrário, aparecerá “São iguais”.</font><br>
									<font>R. Correta: a) O comando if/else está comparando os dois números para informar se são iguais. Se a condição<br> for verdadeira, irá sair a mensagem “São iguais”, caso contrário, aparecerá “São diferentes”.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 54%; margin: 8%;'>
								<p>
									<label><b>9. Observe esse código abaixo:<br><br>
									&nbsp;int num1 = 9; num2 = 6;<br>&nbsp;&nbsp;if(num1==num2){<br>
									&nbsp;&nbsp;&nbsp;printf(“São iguais”);<br>&nbsp;&nbsp;}else<br>
									&nbsp;&nbsp;&nbsp;printf(“São diferentes”);<br>&nbsp;}</b></label><br><br>

									<font>Marcada: d) O comando while está comparando os dois números para informar se são iguais. Se a condição<br> for verdadeira, irá sair a mensagem “São diferentes”, caso contrário, aparecerá “São iguais”.</font><br>
									<font>R. Correta: a) O comando if/else está comparando os dois números para informar se são iguais. Se a condição<br> for verdadeira, irá sair a mensagem “São iguais”, caso contrário, aparecerá “São diferentes”.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 54%; margin: 8%;'>
								<p>
									<label><b>9. Observe esse código abaixo:<br><br>
									&nbsp;int num1 = 9; num2 = 6;<br>&nbsp;&nbsp;if(num1==num2){<br>
									&nbsp;&nbsp;&nbsp;printf(“São iguais”);<br>&nbsp;&nbsp;}else<br>
									&nbsp;&nbsp;&nbsp;printf(“São diferentes”);<br>&nbsp;}</b></label><br><br>

									<font>Marcada: e) O comando if/else está comparando os dois números para informar se são iguais. Se a condição<br> for verdadeira, irá sair a mensagem “São iguais”, caso contrário, aparecerá “São diferentes”.</font><br>
									<font>R. Correta: a) O comando if/else está comparando os dois números para informar se são iguais. Se a condição<br> for verdadeira, irá sair a mensagem “São iguais”, caso contrário, aparecerá “São diferentes”.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO9
				//CORRETA
					if ($q10 == "opt4") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 54%; margin: 8%;'>
								<p>
									<label><b>10. Observe mais um exemplo e marque a resposta correta:<br><br>
									&nbsp;int i;<br>&nbsp;&nbsp;printf (“Informe um número: ”);<br>
									&nbsp;&nbsp;scanf (“%d”, &i);<br>&nbsp;&nbsp;&nbsp;if (i < 0){<br>
									&nbsp;&nbsp;&nbsp;&nbsp;printf (“O número é negativo”);<br>&nbsp;&nbsp;&nbsp;}else{<br>
									&nbsp;&nbsp;&nbsp;&nbsp;printf (“O número é positivo ou nulo”);<br>&nbsp;}</b></label><br><br>

									<font>Marcada: d) O comando if/else está analisando se o número é menor que 0. Se a condição for verdadeira,<br> executará o bloco do if, caso contrário, o bloco do else será executado.</font><br>
								</p>";
					}
				//ERRADAS
					if ($q10 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 53%; margin: 9%;'>
								<p>
									<label><b>10. Observe mais um exemplo e marque a resposta correta:<br><br>
									&nbsp;int i;<br>&nbsp;&nbsp;printf (“Informe um número: ”);<br>
									&nbsp;&nbsp;scanf (“%d”, &i);<br>&nbsp;&nbsp;&nbsp;if (i < 0){<br>
									&nbsp;&nbsp;&nbsp;&nbsp;printf (“O número é negativo”);<br>&nbsp;&nbsp;&nbsp;}else{<br>
									&nbsp;&nbsp;&nbsp;&nbsp;printf (“O número é positivo ou nulo”);<br>&nbsp;}</b></label><br><br>

									<font>Marcada: a) O comando if/else está analisando se o número é menor que 0. Se a condição for verdadeira,<br> executará o bloco do else, caso contrário, o bloco do if será executado.</font><br>
									<font>R. Correta: d) O comando if/else está analisando se o número é menor que 0. Se a condição for verdadeira,<br> executará o bloco do if, caso contrário, o bloco do else será executado.</font><br>
								</p>";
					}
					if ($q10 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 53%; margin: 9%;'>
								<p>
									<label><b>10. Observe mais um exemplo e marque a resposta correta:<br><br>
									&nbsp;int i;<br>&nbsp;&nbsp;printf (“Informe um número: ”);<br>
									&nbsp;&nbsp;scanf (“%d”, &i);<br>&nbsp;&nbsp;&nbsp;if (i < 0){<br>
									&nbsp;&nbsp;&nbsp;&nbsp;printf (“O número é negativo”);<br>&nbsp;&nbsp;&nbsp;}else{<br>
									&nbsp;&nbsp;&nbsp;&nbsp;printf (“O número é positivo ou nulo”);<br>&nbsp;}</b></label><br><br>

									<font>Marcada: b) O comando if/else está analisando se o número é maior que 0. Se a condição for verdadeira,<br> executará o bloco do if, caso contrário, o bloco do else será executado.</font><br>
									<font>R. Correta: d) O comando if/else está analisando se o número é menor que 0. Se a condição for verdadeira,<br> executará o bloco do if, caso contrário, o bloco do else será executado.</font><br>
								</p>";
					}
					if ($q10 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 53%; margin: 9%;'>
								<p>
									<label><b>10. Observe mais um exemplo e marque a resposta correta:<br><br>
									&nbsp;int i;<br>&nbsp;&nbsp;printf (“Informe um número: ”);<br>
									&nbsp;&nbsp;scanf (“%d”, &i);<br>&nbsp;&nbsp;&nbsp;if (i < 0){<br>
									&nbsp;&nbsp;&nbsp;&nbsp;printf (“O número é negativo”);<br>&nbsp;&nbsp;&nbsp;}else{<br>
									&nbsp;&nbsp;&nbsp;&nbsp;printf (“O número é positivo ou nulo”);<br>&nbsp;}</b></label><br><br>

									<font>Marcada: c) O comando if/else está analisando se o número é menor e igual a 0. Se a condição for verdadeira,<br> executará o bloco do if, caso contrário, o bloco do else será executado.</font><br>
									<font>R. Correta: d) O comando if/else está analisando se o número é menor que 0. Se a condição for verdadeira,<br> executará o bloco do if, caso contrário, o bloco do else será executado.</font><br>
								</p>";
					}
					if ($q10 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 53%; margin: 9%;'>
								<p>
									<label><b>10. Observe mais um exemplo e marque a resposta correta:<br><br>
									&nbsp;int i;<br>&nbsp;&nbsp;printf (“Informe um número: ”);<br>
									&nbsp;&nbsp;scanf (“%d”, &i);<br>&nbsp;&nbsp;&nbsp;if (i < 0){<br>
									&nbsp;&nbsp;&nbsp;&nbsp;printf (“O número é negativo”);<br>&nbsp;&nbsp;&nbsp;}else{<br>
									&nbsp;&nbsp;&nbsp;&nbsp;printf (“O número é positivo ou nulo”);<br>&nbsp;}</b></label><br><br>

									<font>Marcada: e) O comando if/else está analisando se o número é maior que 0. Se a condição for verdadeira,<br> executará o bloco do else, caso contrário, o bloco do if será executado.</font><br>
									<font>R. Correta: d) O comando if/else está analisando se o número é menor que 0. Se a condição for verdadeira,<br> executará o bloco do if, caso contrário, o bloco do else será executado.</font><br>
								</p>";
					}
			?>
			</div>
		</fieldset><br><br>

		<div>
			<center><a href="http://localhost/TCC/materias/1ano/prog1.php"><button type="submit" id="bt1"><font size="4">Sair</font></button></a></center>
		</div><br><br>

		<!--CRÉDITOS-->
		<div class="div">
			<p class="cred">Elisângela e Kerolai ® 2021</p>
		</div>
</body>
</html>