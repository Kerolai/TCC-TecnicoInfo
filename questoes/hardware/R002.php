<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Hardware | Atividades | Fonte de Alimentação | Resultado</title>
	<link rel="stylesheet" type="text/css" href="estiloR.css">
</head>
<body>
	<!--TÍTULO-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; font-size: 65px;">Hardware</font>
			
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

		if ($q1 == "opt1") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q2 == "opt4") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q3 == "opt3") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q4 == "opt1") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q5 == "opt2") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q6 == "opt2") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q7 == "opt3") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q8 == "opt5") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q9 == "opt3") {
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
					if ($q1 == "opt1") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 61.5%; margin: 0.5%;'>
								<p>
									<label><b>1. Qual é a função das fontes de alimentação em relação as tensões originadas da rede elétrica? </b></label><br><br>

									<font><b>Marcada: a) Converter a tensão alternada para tensões contínuas.</b></font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q1 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 61%; margin: 1%;'>
								<p>
									<label><b>1. Qual é a função das fontes de alimentação em relação as tensões originadas da rede elétrica?</b></label><br><br>

									<font>Marcada: b) Converter a tensão continua para tensões alternadas</font><br>
									<font>R. Correta: a) Converter a tensão alternada para tensões contínuas.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 61%; margin: 1%;'>
								<p>
									<label><b>1. Qual é a função das fontes de alimentação em relação as tensões originadas da rede elétrica?</b></label><br><br>

									<font>Marcada: c) Fornecer energia para a memória RAM</font><br>
									<font>R. Correta: a) Converter a tensão alternada para tensões contínuas.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 61%; margin: 1%;'>
								<p>
									<label><b>1. Qual é a função das fontes de alimentação em relação as tensões originadas da rede elétrica?</b></label><br><br>

									<font>Marcada: d) Converter a voltagem alternada para voltagem contínua</font><br>
									<font>R. Correta: a) Converter a tensão alternada para tensões contínuas.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 61%; margin: 1%;'>
								<p>
									<label><b>1. Qual é a função das fontes de alimentação em relação as tensões originadas da rede elétrica?</b></label><br><br>

									<font>Marcada: e) Converter a voltagem continua para tensões alternadas</font><br>
									<font>R. Correta: a) Converter a tensão alternada para tensões contínuas.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO2
				//CORRETA
					if ($q2 == "opt4") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>2. Com relação as tensões das fontes ATX, qual voltagem é utilizada para a alimentação dos processadores,<br> chipsets e memória?</b></label><br><br>

									<font>Marcada: d) +5 volts</font><br>
								</p><hr size=2 color=#4B0082>";
							}
				//ERRADAS
					if ($q2 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>2. Com relação as tensões das fontes ATX, qual voltagem é utilizada para a alimentação dos processadores,<br> chipsets e memória?</b></label><br><br>

									<font>Marcada: a) +3.3 volts</font><br>
									<font>R. Correta: d) +5 volts</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>2. Com relação as tensões das fontes ATX, qual voltagem é utilizada para a alimentação dos processadores,<br> chipsets e memória?</b></label><br><br>

									<font>Marcada: b) +12 volts</font><br>
									<font>R. Correta: d) +5 volts</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>2. Com relação as tensões das fontes ATX, qual voltagem é utilizada para a alimentação dos processadores,<br> chipsets e memória?</b></label><br><br>

									<font>Marcada: c) -12 volts</font><br>
									<font>R. Correta: d) +5 volts</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>2. Com relação as tensões das fontes ATX, qual voltagem é utilizada para a alimentação dos processadores,<br> chipsets e memória?</b></label><br><br>

									<font>Marcada: e) +4 volts</font><br>
									<font>R. Correta: d) +5 volts</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO3
				//CORRETA
					if ($q3 == "opt3") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59.5%; margin: 2.5%;'>
								<p>
									<label><b>3. No que implica a alteração das tensões em relação aos computadores?</b></label><br><br>

									<font>Marcada: c) Durabilidade do aparelho e estabilidade da energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q3 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>3. No que implica a alteração das tensões em relação aos computadores?</b></label><br><br>

									<font>Marcada: a) Estabilidade da energia e acelera o funcionamento da memória RAM</font><br>
									<font>R. Correta: c) Durabilidade do aparelho e estabilidade da energia</font><br>
								</p><hr size=2 color=#4B0082>";
							}
					if ($q3 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>3. No que implica a alteração das tensões em relação aos computadores?</b></label><br><br>

									<font>Marcada: b) Durabilidade do aparelho e estabilidade da memória RAM</font><br>
									<font>R. Correta: c) Durabilidade do aparelho e estabilidade da energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q3 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>3. No que implica a alteração das tensões em relação aos computadores?</b></label><br><br>

									<font>Marcada: d) Resfriamento do aparelho e durabilidade do aparelho</font><br>
									<font>R. Correta: c) Durabilidade do aparelho e estabilidade da energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q3 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>3. No que implica a alteração das tensões em relação aos computadores?</b></label><br><br>

									<font>Marcada: e) Resfriamento do aparelho e estabilidade da energia</font><br>
									<font>R. Correta: c) Durabilidade do aparelho e estabilidade da energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO4
				//CORRETA
					if ($q4 == "opt1") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59.5%; margin: 2.5%;'>
								<p>
									<label><b>4. Sobre os conectores PEG, utilizado para alimentar placas de vídeo PCI Express, podem apresentar quantos pinos?</b></label><br><br>

									<font>Marcada: a) De 6 a 8 pinos</font><br>
								</p><hr size=2 color=#4B0082>";
					}

				//ERRADAS
					if ($q4 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>4. Sobre os conectores PEG, utilizado para alimentar placas de vídeo PCI Express, podem apresentar quantos pinos?</b></label><br><br>

									<font>Marcada: b) 12 pinos</font><br>
									<font>R. Correta: a) De 6 a 8 pinos</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>4. Sobre os conectores PEG, utilizado para alimentar placas de vídeo PCI Express, podem apresentar quantos pinos?</b></label><br><br>

									<font>Marcada: c) De 20 a 24 pinos</font><br>
									<font>R. Correta: a) De 6 a 8 pinos</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>4. Sobre os conectores PEG, utilizado para alimentar placas de vídeo PCI Express, podem apresentar quantos pinos?</b></label><br><br>

									<font>Marcada: d) 4 pinos</font><br>
									<font>R. Correta: a) De 6 a 8 pinos</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>4. Sobre os conectores PEG, utilizado para alimentar placas de vídeo PCI Express, podem apresentar quantos pinos?</b></label><br><br>

									<font>Marcada: e) De 4 a 8 pinos</font><br>
									<font>R. Correta: a) De 6 a 8 pinos</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO5
				//CORRETA
					if ($q5 == "opt2") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>5. Complete corretamente a frase.<br><br>
									“A tensão _ _ _ _ _ _ _ _, é a que movimenta os elétrons sempre para a mesma _ _ _ _ _ _ _”.</b></label><br><br>

									<font>Marcada: b) Contínua – direção</font><br>
								</p><hr size=2 color=#4B0082>";
					}

				//ERRADAS
					if ($q5 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>5. Complete corretamente a frase.<br><br>
									“A tensão _ _ _ _ _ _ _ _, é a que movimenta os elétrons sempre para a mesma _ _ _ _ _ _ _”.</b></label><br><br>

									<font>Marcada: a) Alternada – direção</font><br>
									<font>R. Correta: b) Contínua – direção</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>5. Complete corretamente a frase.<br><br>
									“A tensão _ _ _ _ _ _ _ _, é a que movimenta os elétrons sempre para a mesma _ _ _ _ _ _ _”.</b></label><br><br>

									<font>Marcada: c) Alternada – voltagem</font><br>
									<font>R. Correta: b) Contínua – direção</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>5. Complete corretamente a frase.<br><br>
									“A tensão _ _ _ _ _ _ _ _, é a que movimenta os elétrons sempre para a mesma _ _ _ _ _ _ _”.</b></label><br><br>

									<font>Marcada: d) Continua – voltagem</font><br>
									<font>R. Correta: b) Contínua – direção</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>5. Complete corretamente a frase.<br><br>
									“A tensão _ _ _ _ _ _ _ _, é a que movimenta os elétrons sempre para a mesma _ _ _ _ _ _ _”.</b></label><br><br>

									<font>Marcada: e) Elétrica – voltagem</font><br>
									<font>R. Correta: b) Contínua – direção</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO6
				//CORRETA
					if ($q6 == "opt2") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>6. Sabendo que existe o método para a correção de força. Selecione a alternativa, a qual corresponde<br> corretamente sua necessidade em uma fonte de alimentação.</b></label><br><br>

									<font>Marcada: b) Reduz o calor e perdas de energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q6 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. Sabendo que existe o método para a correção de força. Selecione a alternativa, a qual corresponde<br> corretamente sua necessidade em uma fonte de alimentação.</b></label><br><br>

									<font>Marcada: a) Reduz o calor e aumenta a agilidade do processador</font><br>
									<font>R. Correta: b) Reduz o calor e perdas de energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. Sabendo que existe o método para a correção de força. Selecione a alternativa, a qual corresponde<br> corretamente sua necessidade em uma fonte de alimentação.</b></label><br><br>

									<font>Marcada: c) Reduz perdas de energia e aumenta a agilidade do processador</font><br>
									<font>R. Correta: b) Reduz o calor e perdas de energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. Sabendo que existe o método para a correção de força. Selecione a alternativa, a qual corresponde<br> corretamente sua necessidade em uma fonte de alimentação.</b></label><br><br>

									<font>Marcada: d) Reduz na conta de eletricidade e gera mais calor</font><br>
									<font>R. Correta: b) Reduz o calor e perdas de energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. Sabendo que existe o método para a correção de força. Selecione a alternativa, a qual corresponde<br> corretamente sua necessidade em uma fonte de alimentação.</b></label><br><br>

									<font>Marcada: e) Gera mais calor e diminui as perdas de energia</font><br>
									<font>R. Correta: b) Reduz o calor e perdas de energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO7
				//CORRETA
					if ($q7 == "opt3") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. Cada conector tem uma funcionalidade específica. Dessa forma, qual conector é utilizado em unidades de<br> armazenamento mais antigos, como os HDs PATA, DVD-ROM, ventoinhas e sistemas de iluminação.</b></label><br><br>

									<font>Marcada: c) Conector MOLEX</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q7 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. Cada conector tem uma funcionalidade específica. Dessa forma, qual conector é utilizado em unidades de<br> armazenamento mais antigos, como os HDs PATA, DVD-ROM, ventoinhas e sistemas de iluminação.</b></label><br><br>

									<font>Marcada: a) Conector SATA</font><br>
									<font>R. Correta: c) Conector MOLEX</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. Cada conector tem uma funcionalidade específica. Dessa forma, qual conector é utilizado em unidades de<br> armazenamento mais antigos, como os HDs PATA, DVD-ROM, ventoinhas e sistemas de iluminação.</b></label><br><br>

									<font>Marcada: b) Conector placa-mãe ATX 24 pinos</font><br>
									<font>R. Correta: c) Conector MOLEX</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. Cada conector tem uma funcionalidade específica. Dessa forma, qual conector é utilizado em unidades de<br> armazenamento mais antigos, como os HDs PATA, DVD-ROM, ventoinhas e sistemas de iluminação.</b></label><br><br>

									<font>Marcada: d) Conector PEG</font><br>
									<font>R. Correta: c) Conector MOLEX</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. Cada conector tem uma funcionalidade específica. Dessa forma, qual conector é utilizado em unidades de<br> armazenamento mais antigos, como os HDs PATA, DVD-ROM, ventoinhas e sistemas de iluminação.</b></label><br><br>

									<font>Marcada: e) Nenhuma</font><br>
									<font>R. Correta: c) Conector MOLEX</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO8
				//CORRETA
					if ($q8 == "opt5") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>8. Assinale verdadeiro ou falso.<br><br>
									I) Todas as fontes de alimentação possuem uma chave seletora da tensão de entrada.<br>
									II)	Ao remover o pino de aterramento dos aparelhos, automaticamente a segurança do equipamento está em risco.<br>
									III) A potência elétrica é definida pela medida do trabalho realizado em relação a uma unidade de tempo.<br>
									IV)	A corrente alternada é ora positiva e ora negativa executando um movimento de vai-e-vem.
									</b></label><br><br>

									<font>Marcada: e) F – V – V – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q8 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>8. Assinale verdadeiro ou falso.<br><br>
									I) Todas as fontes de alimentação possuem uma chave seletora da tensão de entrada.<br>
									II)	Ao remover o pino de aterramento dos aparelhos, automaticamente a segurança do equipamento está em risco.<br>
									III) A potência elétrica é definida pela medida do trabalho realizado em relação a uma unidade de tempo.<br>
									IV)	A corrente alternada é ora positiva e ora negativa executando um movimento de vai-e-vem.
									</b></label><br><br>

									<font>Marcada: a) V – V – V – V</font><br>
									<font>R. Correta: e) F – V – V – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>8. Assinale verdadeiro ou falso.<br><br>
									I) Todas as fontes de alimentação possuem uma chave seletora da tensão de entrada.<br>
									II)	Ao remover o pino de aterramento dos aparelhos, automaticamente a segurança do equipamento está em risco.<br>
									III) A potência elétrica é definida pela medida do trabalho realizado em relação a uma unidade de tempo.<br>
									IV)	A corrente alternada é ora positiva e ora negativa executando um movimento de vai-e-vem.
									</b></label><br><br>

									<font>Marcada: b) V – F – F – V</font><br>
									<font>R. Correta: e) F – V – V – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>8. Assinale verdadeiro ou falso.<br><br>
									I) Todas as fontes de alimentação possuem uma chave seletora da tensão de entrada.<br>
									II)	Ao remover o pino de aterramento dos aparelhos, automaticamente a segurança do equipamento está em risco.<br>
									III) A potência elétrica é definida pela medida do trabalho realizado em relação a uma unidade de tempo.<br>
									IV)	A corrente alternada é ora positiva e ora negativa executando um movimento de vai-e-vem.
									</b></label><br><br>

									<font>Marcada: c) F – V – V – F</font><br>
									<font>R. Correta: e) F – V – V – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>8. Assinale verdadeiro ou falso.<br><br>
									I) Todas as fontes de alimentação possuem uma chave seletora da tensão de entrada.<br>
									II)	Ao remover o pino de aterramento dos aparelhos, automaticamente a segurança do equipamento está em risco.<br>
									III) A potência elétrica é definida pela medida do trabalho realizado em relação a uma unidade de tempo.<br>
									IV)	A corrente alternada é ora positiva e ora negativa executando um movimento de vai-e-vem.
									</b></label><br><br>

									<font>Marcada: d) F – F – F – V</font><br>
									<font>R. Correta: e) F – V – V – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO9
				//CORRETA
					if ($q9 == "opt3") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>9. Como estudamos anteriormente, tensão elétrica é a força necessária para o movimento dos elétrons a fim de ter<br> uma corrente elétrica. Nesse sentido, qual é os dois valores de tensão utilizados no Brasil?</b></label><br><br>

									<font>Marcada: c) 110 e 220 volts</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q9 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>9. Como estudamos anteriormente, tensão elétrica é a força necessária para o movimento dos elétrons a fim de ter<br> uma corrente elétrica. Nesse sentido, qual é os dois valores de tensão utilizados no Brasil?</b></label><br><br>

									<font>Marcada: a) 115 e 230 volts</font><br>
									<font>R. Correta: c) 110 e 220 volts</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>9. Como estudamos anteriormente, tensão elétrica é a força necessária para o movimento dos elétrons a fim de ter<br> uma corrente elétrica. Nesse sentido, qual é os dois valores de tensão utilizados no Brasil?</b></label><br><br>

									<font>Marcada: b) 120 e 240 volts</font><br>
									<font>R. Correta: c) 110 e 220 volts</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>9. Como estudamos anteriormente, tensão elétrica é a força necessária para o movimento dos elétrons a fim de ter<br> uma corrente elétrica. Nesse sentido, qual é os dois valores de tensão utilizados no Brasil?</b></label><br><br>

									<font>Marcada: d) 110 e 200 volts</font><br>
									<font>R. Correta: c) 110 e 220 volts</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>9. Como estudamos anteriormente, tensão elétrica é a força necessária para o movimento dos elétrons a fim de ter<br> uma corrente elétrica. Nesse sentido, qual é os dois valores de tensão utilizados no Brasil?</b></label><br><br>

									<font>Marcada: e) 115 e 240 volts</font><br>
									<font>R. Correta: c) 110 e 220 volts</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO9
				//CORRETA
					if ($q10 == "opt4") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>10. No brasil, as lâmpadas piscam uma determinada quantidade por segundo, mas isso é tão rápido que não é<br> possível de se visualizar a olho nu. Sabendo que esse fenômeno é denominado como frequência, selecione a<br> alternativa que corresponde a frequência correta no país.</b></label><br><br>

									<font>Marcada: d) 60 Hz</font><br>
								</p>";
					}
				//ERRADAS
					if ($q10 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>10. No brasil, as lâmpadas piscam uma determinada quantidade por segundo, mas isso é tão rápido que não é<br> possível de se visualizar a olho nu. Sabendo que esse fenômeno é denominado como frequência, selecione a <br>alternativa que corresponde a frequência correta no país.</b></label><br><br>

									<font>Marcada: a) 50 Hz</font><br>
									<font>R. Correta: d) 60 Hz</font><br>
								</p>";
					}
					if ($q10 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>10. No brasil, as lâmpadas piscam uma determinada quantidade por segundo, mas isso é tão rápido que não é<br> possível de se visualizar a olho nu. Sabendo que esse fenômeno é denominado como frequência, selecione a <br>alternativa que corresponde a frequência correta no país.</b></label><br><br>

									<font>Marcada: b) 40 Hz</font><br>
									<font>R. Correta: d) 60 Hz</font><br>
								</p>";
					}
					if ($q10 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>10. No brasil, as lâmpadas piscam uma determinada quantidade por segundo, mas isso é tão rápido que não é<br> possível de se visualizar a olho nu. Sabendo que esse fenômeno é denominado como frequência, selecione a <br>alternativa que corresponde a frequência correta no país.</b></label><br><br>

									<font>Marcada: c) 20 Hz</font><br>
									<font>R. Correta: d) 60 Hz</font><br>
								</p>";
					}
					if ($q10 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>10. No brasil, as lâmpadas piscam uma determinada quantidade por segundo, mas isso é tão rápido que não é<br> possível de se visualizar a olho nu. Sabendo que esse fenômeno é denominado como frequência, selecione a <br>alternativa que corresponde a frequência correta no país.</b></label><br><br>

									<font>Marcada: e) 80 Hz</font><br>
									<font>R. Correta: d) 60 Hz</font><br>
								</p>";
					}
			?>
			</div>
		</fieldset><br><br>

		<div>
			<center><a href="http://localhost/TCC/materias/1ano/hardware.php"><button type="submit" id="bt1"><font size="4">Sair</font></button></a></center>
		</div><br><br>

		<!--CRÉDITOS-->
		<div class="div">
			<p class="cred">Elisângela e Kerolai ® 2021</p>
		</div>
</body>
</html>