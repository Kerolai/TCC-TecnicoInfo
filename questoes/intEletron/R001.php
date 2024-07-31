<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Introdução a Eletrônica | Atividades | Conceito de Algoritmos | Resultado</title>
	<link rel="stylesheet" type="text/css" href="estiloRie.css">
</head>
<body>
	<!--TÍTULO-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; font-size: 65px;">Introdução a Eletrônica</font>
			
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

		if ($q1 == "opt2") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q2 == "opt4") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q3 == "opt1") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q4 == "opt5") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q5 == "opt3") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q6 == "opt5") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q7 == "opt4") {
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

		if ($q10 == "opt3") {
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
					if ($q1 == "opt2") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 61%; margin: 1%;'>
								<p>
									<label><b>1. O que é um algoritmo?</b></label><br><br>

									<font><b>Marcada: b) Conjunto finito de regras que fornece uma sequência ordenada e não ambígua para resolver<br> um problema.</b></font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q1 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>1. O que é um algoritmo?</b></label><br><br>

									<font>Marcada: a) Conjunto finito de regras que fornece uma sequência não ordenada e ambígua para resolver<br> um problema.</font><br>
									<font>R. Correta: b) Conjunto finito de regras que fornece uma sequência ordenada e não ambígua para resolver<br> um problema.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>1. O que é um algoritmo?</b></label><br><br>

									<font>Marcada: c) Conjunto infinito de regras que fornece uma sequência ordenada e não ambígua para resolver<br> um problema.</font><br>
									<font>R. Correta: b) Conjunto finito de regras que fornece uma sequência ordenada e não ambígua para resolver<br> um problema.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>1. O que é um algoritmo?</b></label><br><br>

									<font>Marcada: d) Conjunto infinito de regras que fornece uma sequência não ordenada e não ambígua para resolver<br> um problema.</font><br>
									<font>R. Correta: b) Conjunto finito de regras que fornece uma sequência ordenada e não ambígua para resolver<br> um problema.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>1. O que é um algoritmo?</b></label><br><br>

									<font>Marcada: e) Conjunto finito de regras que fornece uma sequência ordenada e ambígua para resolver<br> um problema.</font><br>
									<font>R. Correta: b) Conjunto finito de regras que fornece uma sequência ordenada e não ambígua para resolver<br> um problema.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO2
				//CORRETA
					if ($q2 == "opt4") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>2. Quais das opções abaixo estão corretas?<br><br>
									I) Algoritmo é a base inicial de toda programação de computadores.<br>
									II)	O algoritmo especifica uma sequência de passos irracionais para o computador executar uma tarefa.<br> III) Não existe fim.<br>
									IV) Não cria margem à dupla interpretação.</b></label><br><br>

									<font>Marcada: d) I, II e IV estão corretas.</font><br>
								</p><hr size=2 color=#4B0082>";
							}
				//ERRADAS
					if ($q2 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>2. Quais das opções abaixo estão corretas?<br><br>
									I) Algoritmo é a base inicial de toda programação de computadores.<br>
									II)	O algoritmo especifica uma sequência de passos irracionais para o computador executar uma tarefa.<br> III) Não existe fim.<br>
									IV) Não cria margem à dupla interpretação.</b></label><br><br>

									<font>Marcada: a) I e III estão corretas.</font><br>
									<font>R. Correta: d) I, II e IV estão corretas.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>2. Quais das opções abaixo estão corretas?<br><br>
									I) Algoritmo é a base inicial de toda programação de computadores.<br>
									II)	O algoritmo especifica uma sequência de passos irracionais para o computador executar uma tarefa.<br> III) Não existe fim.<br>
									IV) Não cria margem à dupla interpretação.</b></label><br><br>

									<font>Marcada: b) II e III estão corretas.</font><br>
									<font>R. Correta: d) I, II e IV estão corretas.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>2. Quais das opções abaixo estão corretas?<br><br>
									I) Algoritmo é a base inicial de toda programação de computadores.<br>
									II)	O algoritmo especifica uma sequência de passos irracionais para o computador executar uma tarefa.<br> III) Não existe fim.<br>
									IV) Não cria margem à dupla interpretação.</b></label><br><br>

									<font>Marcada: c) II, e IV estão corretas.</font><br>
									<font>R. Correta: d) I, II e IV estão corretas.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>2. Quais das opções abaixo estão corretas?<br><br>
									I) Algoritmo é a base inicial de toda programação de computadores.<br>
									II)	O algoritmo especifica uma sequência de passos irracionais para o computador executar uma tarefa.<br> III) Não existe fim.<br>
									IV) Não cria margem à dupla interpretação.</b></label><br><br>

									<font>Marcada: e) Todas as alternativas estão corretas.</font><br>
									<font>R. Correta: d) I, II e IV estão corretas.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO3
				//CORRETA
					if ($q3 == "opt1") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>3. Complete a seguinte frase:<br><br>
									“__________ é um tipo de algoritmo com operações específicas para o ______________ e exclusivos ao conjunto<br> de instruções que o _____________ pode executar”.</b></label><br><br>

									<font>Marcada: a) Programa – computador – processador</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q3 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>3. Complete a seguinte frase:<br><br>
									“__________ é um tipo de algoritmo com operações específicas para o ______________ e exclusivos ao conjunto<br> de instruções que o _____________ pode executar”.</b></label><br><br>

									<font>Marcada: b) Programa – compilador – computador</font><br>
									<font>R. Correta: a) Programa – computador – processador</font><br>
								</p><hr size=2 color=#4B0082>";
							}
					if ($q3 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>3. Complete a seguinte frase:<br><br>
									“__________ é um tipo de algoritmo com operações específicas para o ______________ e exclusivos ao conjunto<br> de instruções que o _____________ pode executar”.</b></label><br><br>

									<font>Marcada: c) Compilador – processador – computador</font><br>
									<font>R. Correta: a) Programa – computador – processador</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q3 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>3. Complete a seguinte frase:<br><br>
									“__________ é um tipo de algoritmo com operações específicas para o ______________ e exclusivos ao conjunto<br> de instruções que o _____________ pode executar”.</b></label><br><br>

									<font>Marcada: d) Compilador – programa – computador</font><br>
									<font>R. Correta: a) Programa – computador – processador</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q3 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>3. Complete a seguinte frase:<br><br>
									“__________ é um tipo de algoritmo com operações específicas para o ______________ e exclusivos ao conjunto<br> de instruções que o _____________ pode executar”.</b></label><br><br>

									<font>Marcada: e) Programa – processador – compilador</font><br>
									<font>R. Correta: a) Programa – computador – processador</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO4
				//CORRETA
					if ($q4 == "opt5") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>4. Quais são as formas que os algoritmos podem ser representados?</b></label><br><br>

									<font>Marcada: e) Natural, Fluxograma e Pseudocódigo.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

				//ERRADAS
					if ($q4 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>4. Quais são as formas que os algoritmos podem ser representados?</b></label><br><br>

									<font>Marcada: a) Fluxograma, Simples e Pseudocódigo.</font><br>
									<font>R. Correta: e) Natural, Fluxograma e Pseudocódigo.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>4. Quais são as formas que os algoritmos podem ser representados?</b></label><br><br>

									<font>Marcada: b) Natural, Simples e Fluxograma.</font><br>
									<font>R. Correta: e) Natural, Fluxograma e Pseudocódigo.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>4. Quais são as formas que os algoritmos podem ser representados?</b></label><br><br>

									<font>Marcada: c) Natural, Composta e Fluxograma.</font><br>
									<font>R. Correta: e) Natural, Fluxograma e Pseudocódigo.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>4. Quais são as formas que os algoritmos podem ser representados?</b></label><br><br>

									<font>Marcada: d) Fluxograma, Composta e Pseudocódigo.</font><br>
									<font>R. Correta: e) Natural, Fluxograma e Pseudocódigo.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO5
				//CORRETA
					if ($q5 == "opt3") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>5. De acordo com os símbolos para construir um fluxograma, qual das alternativas a seguir está INCORRETA?</b></label><br><br>

									<font>Marcada: c) Exibição - executa operações de entrada de dados em um monitor de vídeo conectado a um PC.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

				//ERRADAS
					if ($q5 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>5. De acordo com os símbolos para construir um fluxograma, qual das alternativas a seguir está INCORRETA?</b></label><br><br>

									<font>Marcada: a) Terminal - simboliza o início e o fim do fluxo.</font><br>
									<font>R. Correta: c) Exibição - executa operações de entrada de dados em um monitor de vídeo conectado a um PC.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>5. De acordo com os símbolos para construir um fluxograma, qual das alternativas a seguir está INCORRETA?</b></label><br><br>

									<font>Marcada: b) Linha - são os ligamentos entre os símbolos, com uma seta na ponta, indicando sua direção.</font><br>
									<font>R. Correta: c) Exibição - executa operações de entrada de dados em um monitor de vídeo conectado a um PC.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>5. De acordo com os símbolos para construir um fluxograma, qual das alternativas a seguir está INCORRETA?</b></label><br><br>

									<font>Marcada: d) Processamento - executa ações de processamento de operações matemáticas.</font><br>
									<font>R. Correta: c) Exibição - executa operações de entrada de dados em um monitor de vídeo conectado a um PC.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>5. De acordo com os símbolos para construir um fluxograma, qual das alternativas a seguir está INCORRETA?</b></label><br><br>

									<font>Marcada: e) Preparação - permite a modificação de instruções de um laço.</font><br>
									<font>R. Correta: c) Exibição - executa operações de entrada de dados em um monitor de vídeo conectado a um PC.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO6
				//CORRETA
					if ($q6 == "opt5") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>6. Qual das opções abaixo apresentam somente nomes que respeitam as regras para nomeação de variáveis?</b></label><br><br>

									<font>Marcada: e) cao - nota1 - salFunc - nome_funcionario;</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q6 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>6. Qual das opções abaixo apresentam somente nomes que respeitam as regras para nomeação de variáveis?</b></label><br><br>

									<font>Marcada: a) três - nove - calcula – OF001;</font><br>
									<font>R. Correta: e) cao - nota1 - salFunc - nome_funcionario;</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>6. Qual das opções abaixo apresentam somente nomes que respeitam as regras para nomeação de variáveis?</b></label><br><br>

									<font>Marcada: b) 1sal - cont - s - pão;</font><br>
									<font>R. Correta: e) cao - nota1 - salFunc - nome_funcionario;</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>6. Qual das opções abaixo apresentam somente nomes que respeitam as regras para nomeação de variáveis?</b></label><br><br>

									<font>Marcada: c) blue cat - nome - somaT - ledON;</font><br>
									<font>R. Correta: e) cao - nota1 - salFunc - nome_funcionario;</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>6. Qual das opções abaixo apresentam somente nomes que respeitam as regras para nomeação de variáveis?</b></label><br><br>

									<font>Marcada: d) idade - #sal - valorSalT - tam_calca;</font><br>
									<font>R. Correta: e) cao - nota1 - salFunc - nome_funcionario;</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO7
				//CORRETA
					if ($q7 == "opt4") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>7. Relacione as colunas:
									<table style='margin-left: 4%;' width='50%'>
									<tr>
									   	<td><b>I) Inteiro<br> II) Real<br> III) Caracter<br> IV) Lógico</b></td>
									    <td><b>(  ) nome – idade – RS 97,00 – 78...<br> (  ) 45 – 69 – 100 – -9, 0...<br>
										(  ) V (Verdadeiro) – F (Falso).<br> (  ) 1,5 – 9,0 – -0,005 – 100</b></td>
									</tr></table></b></label><br>

									<font style='margin-left: 3%;'>Marcada: d) III, I, IV, II.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q7 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>7. Relacione as colunas:
									<table style='margin-left: 4%;' width='50%'>
									<tr>
									   	<td><b>I) Inteiro<br> II) Real<br> III) Caracter<br> IV) Lógico</b></td>
									    <td><b>(  ) nome – idade – RS 97,00 – 78...<br> (  ) 45 – 69 – 100 – -9, 0...<br>
										(  ) V (Verdadeiro) – F (Falso).<br> (  ) 1,5 – 9,0 – -0,005 – 100</b></td>
									</tr></table></b></label><br>

									<font style='margin-left: 3%;'>Marcada: a) IV, II, I, III.</font><br>
									<font style='margin-left: 3%;'>R. Correta: d) III, I, IV, II.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>7. Relacione as colunas:
									<table style='margin-left: 4%;' width='50%'>
									<tr>
									   	<td><b>I) Inteiro<br> II) Real<br> III) Caracter<br> IV) Lógico</b></td>
									    <td><b>(  ) nome – idade – RS 97,00 – 78...<br> (  ) 45 – 69 – 100 – -9, 0...<br>
										(  ) V (Verdadeiro) – F (Falso).<br> (  ) 1,5 – 9,0 – -0,005 – 100</b></td>
									</tr></table></b></label><br>

									<font style='margin-left: 3%;'>Marcada: b) IV, I, III, II.</font><br>
									<font style='margin-left: 3%;'>R. Correta: d) III, I, IV, II.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>7. Relacione as colunas:
									<table style='margin-left: 4%;' width='50%'>
									<tr>
									   	<td><b>I) Inteiro<br> II) Real<br> III) Caracter<br> IV) Lógico</b></td>
									    <td><b>(  ) nome – idade – RS 97,00 – 78...<br> (  ) 45 – 69 – 100 – -9, 0...<br>
										(  ) V (Verdadeiro) – F (Falso).<br> (  ) 1,5 – 9,0 – -0,005 – 100</b></td>
									</tr></table></b></label><br>

									<font style='margin-left: 3%;'>Marcada: c) II, IV, III, I.</font><br>
									<font style='margin-left: 3%;'>R. Correta: d) III, I, IV, II.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>7. Relacione as colunas:
									<table style='margin-left: 4%;' width='50%'>
									<tr>
									   	<td><b>I) Inteiro<br> II) Real<br> III) Caracter<br> IV) Lógico</b></td>
									    <td><b>(  ) nome – idade – RS 97,00 – 78...<br> (  ) 45 – 69 – 100 – -9, 0...<br>
										(  ) V (Verdadeiro) – F (Falso).<br> (  ) 1,5 – 9,0 – -0,005 – 100</b></td>
									</tr></table></b></label><br>

									<font style='margin-left: 3%;'>Marcada: e) II, III, IV, I.</font><br>
									<font style='margin-left: 3%;'>R. Correta: d) III, I, IV, II.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO8
				//CORRETA
					if ($q8 == "opt2") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>8. Indique o tipo de atribuição que está ocorrendo em cada situação abaixo:<br><br>
									I) a + b;<br> II) idade || nome;<br> III) qst1 == gabarito;<br> IV)	idade >= 18;<br> V) sal * 1000;</b></label><br><br>

									<font>Marcada: b) I - Adição, II - ou, III - igual, IV - maior ou igual, V – multiplicação.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q8 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>8. Indique o tipo de atribuição que está ocorrendo em cada situação abaixo:<br><br>
									I) a + b;<br> II) idade || nome;<br> III) qst1 == gabarito;<br> IV)	idade >= 18;<br> V) sal * 1000;</b></label><br><br>

									<font>Marcada: a) I - Atribuição, II - ou, III - comparação, IV - maior ou igual, V - expoente.</font><br>
									<font>R. Correta: b) I - Adição, II - ou, III - igual, IV - maior ou igual, V – multiplicação.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>8. Indique o tipo de atribuição que está ocorrendo em cada situação abaixo:<br><br>
									I) a + b;<br> II) idade || nome;<br> III) qst1 == gabarito;<br> IV)	idade >= 18;<br> V) sal * 1000;</b></label><br><br>

									<font>Marcada: c) I - Atribuição, II - não, III - igual, IV - menor ou igual, V - divisão.</font><br>
									<font>R. Correta: b) I - Adição, II - ou, III - igual, IV - maior ou igual, V – multiplicação.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>8. Indique o tipo de atribuição que está ocorrendo em cada situação abaixo:<br><br>
									I) a + b;<br> II) idade || nome;<br> III) qst1 == gabarito;<br> IV)	idade >= 18;<br> V) sal * 1000;</b></label><br><br>

									<font>Marcada: d) I - Adição, II - não, III - comparação, IV - maior ou igual, V - resto.</font><br>
									<font>R. Correta: b) I - Adição, II - ou, III - igual, IV - maior ou igual, V – multiplicação.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>8. Indique o tipo de atribuição que está ocorrendo em cada situação abaixo:<br><br>
									I) a + b;<br> II) idade || nome;<br> III) qst1 == gabarito;<br> IV)	idade >= 18;<br> V) sal * 1000;</b></label><br><br>

									<font>Marcada: e) I - Adição, II - ou, III - igual, IV - menor ou igual, V - multiplicação.</font><br>
									<font>R. Correta: b) I - Adição, II - ou, III - igual, IV - maior ou igual, V – multiplicação.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO9
				//CORRETA
					if ($q9 == "opt1") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>9. Observe as comparações e diga se é verdadeiro ou falso.<br><br>
									Sendo que: a = 2; b = 5; c = 8; d = 3; e = 6;<br><br>
									(b == d + a) && (c <= b) => _____<br> (c-a == e) || (a == d) => _____<br> (e == c-a) && (b > a) => _____<br> (a+2 == d) || (e < c-1) => _____<br></b></label><br><br>

									<font>Marcada: a) F – V – V – F</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q9 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 54%; margin: 8%;'>
								<p>
									<label><b>9. Observe as comparações e diga se é verdadeiro ou falso.<br><br>
									Sendo que: a = 2; b = 5; c = 8; d = 3; e = 6;<br><br>
									(b == d + a) && (c <= b) => _____<br> (c-a == e) || (a == d) => _____<br> (e == c-a) && (b > a) => _____<br> (a+2 == d) || (e < c-1) => _____<br></b></label><br><br>

									<font>Marcada: b) V – F – F – V</font><br>
									<font>R. Correta: a) F – V – V – F</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 54%; margin: 8%;'>
								<p>
									<label><b>9. Observe as comparações e diga se é verdadeiro ou falso.<br><br>
									Sendo que: a = 2; b = 5; c = 8; d = 3; e = 6;<br><br>
									(b == d + a) && (c <= b) => _____<br> (c-a == e) || (a == d) => _____<br> (e == c-a) && (b > a) => _____<br> (a+2 == d) || (e < c-1) => _____<br></b></label><br><br>

									<font>Marcada: c) F – F – F – V</font><br>
									<font>R. Correta: a) F – V – V – F</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 54%; margin: 8%;'>
								<p>
									<label><b>9. Observe as comparações e diga se é verdadeiro ou falso.<br><br>
									Sendo que: a = 2; b = 5; c = 8; d = 3; e = 6;<br><br>
									(b == d + a) && (c <= b) => _____<br> (c-a == e) || (a == d) => _____<br> (e == c-a) && (b > a) => _____<br> (a+2 == d) || (e < c-1) => _____<br></b></label><br><br>

									<font>Marcada: d) V – V – V – F</font><br>
									<font>R. Correta: a) F – V – V – F</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 54%; margin: 8%;'>
								<p>
									<label><b>9. Observe as comparações e diga se é verdadeiro ou falso.<br><br>
									Sendo que: a = 2; b = 5; c = 8; d = 3; e = 6;<br><br>
									(b == d + a) && (c <= b) => _____<br> (c-a == e) || (a == d) => _____<br> (e == c-a) && (b > a) => _____<br> (a+2 == d) || (e < c-1) => _____<br></b></label><br><br>

									<font>Marcada: e) V – F – V – F</font><br>
									<font>R. Correta: a) F – V – V – F</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO9
				//CORRETA
					if ($q10 == "opt3") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 54%; margin: 8%;'>
								<p>
									<label><b>10. Analise o algoritmo abaixo e diga o que será impresso na tela ao serem executados:</b></label><br><br>
									<img src='imagens/foto1.jpg' width='25%'' style='margin-left: 2%;'><br><br>

									<font>Marcada: c) A = 30, B = 30, C = 60</font><br>
								</p>";
					}
				//ERRADAS
					if ($q10 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 53%; margin: 9%;'>
								<p>
									<label><b>10. Analise o algoritmo abaixo e diga o que será impresso na tela ao serem executados:</b></label><br><br>
									<img src='imagens/foto1.jpg' width='25%'' style='margin-left: 2%;'><br><br>

									<font>Marcada: a) A = 30, B = 20, C = 50</font><br>
									<font>R. Correta: c) A = 30, B = 30, C = 60</font><br>
								</p>";
					}
					if ($q10 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 53%; margin: 9%;'>
								<p>
									<label><b>10. Analise o algoritmo abaixo e diga o que será impresso na tela ao serem executados:</b></label><br><br>
									<img src='imagens/foto1.jpg' width='25%'' style='margin-left: 2%;'><br><br>

									<font>Marcada: b) A = 20, B = 30, C = 40</font><br>
									<font>R. Correta: c) A = 30, B = 30, C = 60</font><br>
								</p>";
					}
					if ($q10 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 53%; margin: 9%;'>
								<p>
									<label><b>10. Analise o algoritmo abaixo e diga o que será impresso na tela ao serem executados:</b></label><br><br>
									<img src='imagens/foto1.jpg' width='25%'' style='margin-left: 2%;'><br><br>

									<font>Marcada: d) A = 20, B = 30, C = 50</font><br>
									<font>R. Correta: c) A = 30, B = 30, C = 60</font><br>
								</p>";
					}
					if ($q10 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 53%; margin: 9%;'>
								<p>
									<label><b>10. Analise o algoritmo abaixo e diga o que será impresso na tela ao serem executados:</b></label><br><br>
									<img src='imagens/foto1.jpg' width='25%'' style='margin-left: 2%;'><br><br>

									<font>Marcada: e) A = 30, B = 20, C = 40</font><br>
									<font>R. Correta: c) A = 30, B = 30, C = 60</font><br>
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