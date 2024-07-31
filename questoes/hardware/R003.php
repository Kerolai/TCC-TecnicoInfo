<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Hardware | Atividades | Placa-Mãe | Resultado</title>
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

		if ($q1 == "opt2") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q2 == "opt1") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q3 == "opt3") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q4 == "opt4") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q5 == "opt2") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q6 == "opt4") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q7 == "opt1") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q8 == "opt3") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q9 == "opt5") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q10 == "opt2") {
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
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>1. Complete a frase corretamente:<br><br>
									“A placa-mãe é a _ _ _ _ _ placa de circuito impresso dentro do computador e serve como base para a<br> _ _ _ _ _ _ _ de todos os dispositivos”.</b></label><br><br>

									<font><b>Marcada: b) Maior – conexão</b></font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q1 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>1. Complete a frase corretamente:<br><br>
									“A placa-mãe é a _ _ _ _ _ placa de circuito impresso dentro do computador e serve como base para a<br> _ _ _ _ _ _ _ de todos os dispositivos”.</b></label><br><br>

									<font>Marcada: a) Maior – alinhamento</font><br>
									<font>R. Correta: b) Maior – conexão</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>1. Complete a frase corretamente:<br><br>
									“A placa-mãe é a _ _ _ _ _ placa de circuito impresso dentro do computador e serve como base para a<br> _ _ _ _ _ _ _ de todos os dispositivos”.</b></label><br><br>

									<font>Marcada: c) Menor – conexão</font><br>
									<font>R. Correta: b) Maior – conexão</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>1. Complete a frase corretamente:<br><br>
									“A placa-mãe é a _ _ _ _ _ placa de circuito impresso dentro do computador e serve como base para a<br> _ _ _ _ _ _ _ de todos os dispositivos”.</b></label><br><br>

									<font>Marcada: d) Menor – alinhamento</font><br>
									<font>R. Correta: b) Maior – conexão</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>1. Complete a frase corretamente:<br><br>
									“A placa-mãe é a _ _ _ _ _ placa de circuito impresso dentro do computador e serve como base para a<br> _ _ _ _ _ _ _ de todos os dispositivos”.</b></label><br><br>

									<font>Marcada: e) Maior – regulagem</font><br>
									<font>R. Correta: b) Maior – conexão</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO2
				//CORRETA
					if ($q2 == "opt1") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>2. Indique a única alternativa correta:</b></label><br><br>

									<font>Marcada: a) O circuito regulador de tensão é um componente responsável pela regulagem e conversão<br> das tensões recebidas da fonte de alimentação.</font><br>
								</p><hr size=2 color=#4B0082>";
							}
				//ERRADAS
					if ($q2 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>2. Indique a única alternativa correta:</b></label><br><br>

									<font>Marcada: b) O capacitor é o componente responsável pelo armazenamento de dados recebidos pelo processador.</font><br>
									<font>R. Correta: a) O circuito regulador de tensão é um componente responsável pela regulagem e conversão<br> das tensões recebidas da fonte de alimentação.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>2. Indique a única alternativa correta:</b></label><br><br>

									<font>Marcada: c) A ponte norte possui um chip mais simples se comparado com o chip da ponte sul, a qual fica<br> responsável de componentes como, barramentos PCI <i>Express</i> ou AGP e <i>chipset</i> de vídeo <i>Onboard</i>.</font><br>
									<font>R. Correta: a) O circuito regulador de tensão é um componente responsável pela regulagem e conversão<br> das tensões recebidas da fonte de alimentação.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>2. Indique a única alternativa correta:</b></label><br><br>

									<font>Marcada: d) Os módulos de memória geralmente são soldados a placa, o que resulta em diversos danos a placa.</font><br>
									<font>R. Correta: a) O circuito regulador de tensão é um componente responsável pela regulagem e conversão<br> das tensões recebidas da fonte de alimentação.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>2. Indique a única alternativa correta:</b></label><br><br>

									<font>Marcada: e) O modelo ZIF é o padrão que utiliza uma armadura de metal que envolve e protege o<br> processador da pressão que o dissipador de calor exerce.</font><br>
									<font>R. Correta: a) O circuito regulador de tensão é um componente responsável pela regulagem e conversão<br> das tensões recebidas da fonte de alimentação.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO3
				//CORRETA
					if ($q3 == "opt3") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>3. Em relação aos conectores para ventoinhas, complete a frase de corretamente.<br><br>
									“As placas-mãe tem um conector de _ _ _ _ _ _ pinos para o cooler do processador e alguns conectores de<br> três ou quatro pinos para ventoinhas _ _ _ _ _ _ _ _ _ _, geralmente fixadas no gabinete do computador”.</b></label><br><br>

									<font>Marcada: c) Quatro – auxiliares</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q3 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>3. Em relação aos conectores para ventoinhas, complete a frase de corretamente.<br><br>
									“As placas-mãe tem um conector de _ _ _ _ _ _ pinos para o cooler do processador e alguns conectores de<br> três ou quatro pinos para ventoinhas _ _ _ _ _ _ _ _ _ _, geralmente fixadas no gabinete do computador”.</b></label><br><br>

									<font>Marcada: a) Oito – principais</font><br>
									<font>R. Correta: c) Quatro – auxiliares</font><br>
								</p><hr size=2 color=#4B0082>";
							}
					if ($q3 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>3. Em relação aos conectores para ventoinhas, complete a frase de corretamente.<br><br>
									“As placas-mãe tem um conector de _ _ _ _ _ _ pinos para o cooler do processador e alguns conectores de<br> três ou quatro pinos para ventoinhas _ _ _ _ _ _ _ _ _ _, geralmente fixadas no gabinete do computador”.</b></label><br><br>

									<font>Marcada: b) Cinco – auxiliares</font><br>
									<font>R. Correta: c) Quatro – auxiliares</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q3 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>3. Em relação aos conectores para ventoinhas, complete a frase de corretamente.<br><br>
									“As placas-mãe tem um conector de _ _ _ _ _ _ pinos para o cooler do processador e alguns conectores de<br> três ou quatro pinos para ventoinhas _ _ _ _ _ _ _ _ _ _, geralmente fixadas no gabinete do computador”.</b></label><br><br>

									<font>Marcada: d) Dois – principais</font><br>
									<font>R. Correta: c) Quatro – auxiliares</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q3 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>3. Em relação aos conectores para ventoinhas, complete a frase de corretamente.<br><br>
									“As placas-mãe tem um conector de _ _ _ _ _ _ pinos para o cooler do processador e alguns conectores de<br> três ou quatro pinos para ventoinhas _ _ _ _ _ _ _ _ _ _, geralmente fixadas no gabinete do computador”.</b></label><br><br>

									<font>Marcada: e) Seis – principais</font><br>
									<font>R. Correta: c) Quatro – auxiliares</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO4
				//CORRETA
					if ($q4 == "opt4") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 58.5%; margin: 3.5%;'>
								<p>
									<label><b>4. Sabendo que o capacitor é o componente responsável pelo armazenamento de pequenas quantidades<br> de energia, indique a alternativa a qual corresponde aos principais problemas que comumente ocorre<br> nesses elementos.</b></label><br><br>

									<font>Marcada: d) Estufamento e vazamento dos capacitores.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

				//ERRADAS
					if ($q4 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>4. Sabendo que o capacitor é o componente responsável pelo armazenamento de pequenas quantidades<br> de energia, indique a alternativa a qual corresponde aos principais problemas que comumente ocorre<br> nesses elementos.</b></label><br><br>

									<font>Marcada: a) Estufamento e derretimento dos capacitores.</font><br>
									<font>R. Correta: d) Estufamento e vazamento dos capacitores.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>4. Sabendo que o capacitor é o componente responsável pelo armazenamento de pequenas quantidades<br> de energia, indique a alternativa a qual corresponde aos principais problemas que comumente ocorre<br> nesses elementos.</b></label><br><br>

									<font>Marcada: b) Vazamento e derretimento dos capacitores.</font><br>
									<font>R. Correta: d) Estufamento e vazamento dos capacitores.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>4. Sabendo que o capacitor é o componente responsável pelo armazenamento de pequenas quantidades<br> de energia, indique a alternativa a qual corresponde aos principais problemas que comumente ocorre<br> nesses elementos.</b></label><br><br>

									<font>Marcada: c) Vazamento e solidificação dos capacitores.</font><br>
									<font>R. Correta: d) Estufamento e vazamento dos capacitores.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>4. Sabendo que o capacitor é o componente responsável pelo armazenamento de pequenas quantidades<br> de energia, indique a alternativa a qual corresponde aos principais problemas que comumente ocorre<br> nesses elementos.</b></label><br><br>

									<font>Marcada: e) Nenhuma.</font><br>
									<font>R. Correta: d) Estufamento e vazamento dos capacitores.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO5
				//CORRETA
					if ($q5 == "opt2") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>5. O <i>chipset</i> é de suma importância para a placa-mãe, pois sem ele tudo seriam só componentes e não teriam<br> utilidade alguma. Dessa forma, indique as duas pontes a qual a placa comporta.</b></label><br><br>

									<font>Marcada: b) Ponte Sul e Norte</font><br>
								</p><hr size=2 color=#4B0082>";
					}

				//ERRADAS
					if ($q5 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>5. O <i>chipset</i> é de suma importância para a placa-mãe, pois sem ele tudo seriam só componentes e não teriam<br> utilidade alguma. Dessa forma, indique as duas pontes a qual a placa comporta.</b></label><br><br>

									<font>Marcada: a) Ponte Noroeste e Sul</font><br>
									<font>R. Correta: b) Ponte Sul e Norte</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>5. O <i>chipset</i> é de suma importância para a placa-mãe, pois sem ele tudo seriam só componentes e não teriam<br> utilidade alguma. Dessa forma, indique as duas pontes a qual a placa comporta.</b></label><br><br>

									<font>Marcada: c) Ponte Sudoeste e Nordeste</font><br>
									<font>R. Correta: b) Ponte Sul e Norte</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>5. O <i>chipset</i> é de suma importância para a placa-mãe, pois sem ele tudo seriam só componentes e não teriam<br> utilidade alguma. Dessa forma, indique as duas pontes a qual a placa comporta.</b></label><br><br>

									<font>Marcada: d) Ponte Sul e Sudoeste</font><br>
									<font>R. Correta: b) Ponte Sul e Norte</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>5. O <i>chipset</i> é de suma importância para a placa-mãe, pois sem ele tudo seriam só componentes e não teriam<br> utilidade alguma. Dessa forma, indique as duas pontes a qual a placa comporta.</b></label><br><br>

									<font>Marcada: e) Nenhuma</font><br>
									<font>R. Correta: b) Ponte Sul e Norte</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO6
				//CORRETA
					if ($q6 == "opt4") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>6. Sabendo que a placa possui pelo menos dois conectores de alimentação. Cite as possíveis quantidades<br> de pinos que um conector para a alimentação do processador pode utilizar.</b></label><br><br>

									<font>Marcada: d) De quatro ou oito pinos.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q6 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. Sabendo que a placa possui pelo menos dois conectores de alimentação. Cite as possíveis quantidades<br> de pinos que um conector para a alimentação do processador pode utilizar.</b></label><br><br>

									<font>Marcada: a) De seis ou oito pinos.</font><br>
									<font>R. Correta: d) De quatro ou oito pinos.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. Sabendo que a placa possui pelo menos dois conectores de alimentação. Cite as possíveis quantidades<br> de pinos que um conector para a alimentação do processador pode utilizar.</b></label><br><br>

									<font>Marcada: b) De quatro a doze pinos.</font><br>
									<font>R. Correta: d) De quatro ou oito pinos.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. Sabendo que a placa possui pelo menos dois conectores de alimentação. Cite as possíveis quantidades<br> de pinos que um conector para a alimentação do processador pode utilizar.</b></label><br><br>

									<font>Marcada: c) De doze a vinte pinos.</font><br>
									<font>R. Correta: d) De quatro ou oito pinos.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. Sabendo que a placa possui pelo menos dois conectores de alimentação. Cite as possíveis quantidades<br> de pinos que um conector para a alimentação do processador pode utilizar.</b></label><br><br>

									<font>Marcada: e) Nenhuma.</font><br>
									<font>R. Correta: d) De quatro ou oito pinos.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO7
				//CORRETA
					if ($q7 == "opt1") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>7. Em relação às camadas de uma placa de circuito impresso (PCI), podemos encontrar um total de:</b></label><br><br>

									<font>Marcada: a) Quatro a dez camadas.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q7 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. Em relação às camadas de uma placa de circuito impresso (PCI), podemos encontrar um total de:</b></label><br><br>

									<font>Marcada: b) Dez a vinte camadas.</font><br>
									<font>R. Correta: a) Quatro a dez camadas.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. Em relação às camadas de uma placa de circuito impresso (PCI), podemos encontrar um total de:</b></label><br><br>

									<font>Marcada: c) Seis a vinte camadas.</font><br>
									<font>R. Correta: a) Quatro a dez camadas.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. Em relação às camadas de uma placa de circuito impresso (PCI), podemos encontrar um total de:</b></label><br><br>

									<font>Marcada: d) Oito a dez camadas.</font><br>
									<font>R. Correta: a) Quatro a dez camadas.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. Em relação às camadas de uma placa de circuito impresso (PCI), podemos encontrar um total de:</b></label><br><br>

									<font>Marcada: e) Nenhuma.</font><br>
									<font>R. Correta: a) Quatro a dez camadas.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO8
				//CORRETA
					if ($q8 == "opt3") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>8. Complete a frase:<br><br>
									“O chip da ponte Sul realiza o controle dos _ _ _ _ _ _ _ _ _ _ _ e faz ponte entre o barramento PCI e o barramento _ _ _”.</b></label><br><br>

									<font>Marcada: c) Periféricos - ISA</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q8 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>8. Complete a frase:<br><br>
									“O chip da ponte Sul realiza o controle dos _ _ _ _ _ _ _ _ _ _ _ e faz ponte entre o barramento PCI e o barramento _ _ _”.</b></label><br><br>

									<font>Marcada: a) Capacitores – ISA</font><br>
									<font>R. Correta: c) Periféricos - ISA</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>8. Complete a frase:<br><br>
									“O chip da ponte Sul realiza o controle dos _ _ _ _ _ _ _ _ _ _ _ e faz ponte entre o barramento PCI e o barramento _ _ _”.</b></label><br><br>

									<font>Marcada: b) Periféricos – AGP</font><br>
									<font>R. Correta: c) Periféricos - ISA</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>8. Complete a frase:<br><br>
									“O chip da ponte Sul realiza o controle dos _ _ _ _ _ _ _ _ _ _ _ e faz ponte entre o barramento PCI e o barramento _ _ _”.</b></label><br><br>

									<font>Marcada: d) Capacitores - AGP</font><br>
									<font>R. Correta: c) Periféricos - ISA</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>8. Complete a frase:<br><br>
									“O chip da ponte Sul realiza o controle dos _ _ _ _ _ _ _ _ _ _ _ e faz ponte entre o barramento PCI e o barramento _ _ _”.</b></label><br><br>

									<font>Marcada: e) Nenhuma</font><br>
									<font>R. Correta: c) Periféricos - ISA</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO9
				//CORRETA
					if ($q9 == "opt5") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>9. A BIOS possui um software básico na sua composição, a fim de checar com êxito os dispositivos instalados<br> na máquina. Dessa forma, para que o mesmo mantenha as configurações do CMOS é necessário somente, que:</b></label><br><br>

									<font>Marcada: e) Corte o fornecimento de energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q9 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>9. A BIOS possui um software básico na sua composição, a fim de checar com êxito os dispositivos instalados<br> na máquina. Dessa forma, para que o mesmo mantenha as configurações do CMOS é necessário somente, que:</b></label><br><br>

									<font>Marcada: a) Desinstalar e atualizar as configurações</font><br>
									<font>R. Correta: e) Corte o fornecimento de energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>9. A BIOS possui um software básico na sua composição, a fim de checar com êxito os dispositivos instalados<br> na máquina. Dessa forma, para que o mesmo mantenha as configurações do CMOS é necessário somente, que:</b></label><br><br>

									<font>Marcada: b) Baixe um software mais atualizado</font><br>
									<font>R. Correta: e) Corte o fornecimento de energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>9. A BIOS possui um software básico na sua composição, a fim de checar com êxito os dispositivos instalados<br> na máquina. Dessa forma, para que o mesmo mantenha as configurações do CMOS é necessário somente, que:</b></label><br><br>

									<font>Marcada: c) Reiniciar a máquina</font><br>
									<font>R. Correta: e) Corte o fornecimento de energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>9. A BIOS possui um software básico na sua composição, a fim de checar com êxito os dispositivos instalados<br> na máquina. Dessa forma, para que o mesmo mantenha as configurações do CMOS é necessário somente, que:</b></label><br><br>

									<font>Marcada: d) Realize a troca do dispositivo</font><br>
									<font>R. Correta: e) Corte o fornecimento de energia</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO9
				//CORRETA
					if ($q10 == "opt2") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>10. Os slots de memória servem para a instalação dos módulos de memória, além disso, o tipo e a quantidade<br> de slots de memória que a placa-mãe tem, indicam o:</b></label><br><br>

									<font>Marcada: b) Tipo de memória e a quantidade máxima que pode ser instalada no computador.</font><br>
								</p>";
					}
				//ERRADAS
					if ($q10 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>10. Os slots de memória servem para a instalação dos módulos de memória, além disso, o tipo e a quantidade<br> de slots de memória que a placa-mãe tem, indicam o:</b></label><br><br>

									<font>Marcada: a) O modelo da memória e a quantidade mínima que pode ser instalada no computador.</font><br>
									<font>R. Correta: b) Tipo de memória e a quantidade máxima que pode ser instalada no computador.</font><br>
								</p>";
					}
					if ($q10 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>10. Os slots de memória servem para a instalação dos módulos de memória, além disso, o tipo e a quantidade<br> de slots de memória que a placa-mãe tem, indicam o:</b></label><br><br>

									<font>Marcada: c) A quantidade mínima e máxima que pode ser instalada no computador.</font><br>
									<font>R. Correta: b) Tipo de memória e a quantidade máxima que pode ser instalada no computador.</font><br>
								</p>";
					}
					if ($q10 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>10. Os slots de memória servem para a instalação dos módulos de memória, além disso, o tipo e a quantidade<br> de slots de memória que a placa-mãe tem, indicam o:</b></label><br><br>

									<font>Marcada: d) A quantidade mínima de memória que pode ser instalada no computador.</font><br>
									<font>R. Correta: b) Tipo de memória e a quantidade máxima que pode ser instalada no computador.</font><br>
								</p>";
					}
					if ($q10 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>10. Os slots de memória servem para a instalação dos módulos de memória, além disso, o tipo e a quantidade<br> de slots de memória que a placa-mãe tem, indicam o:</b></label><br><br>

									<font>Marcada: e) Tipo de memória e a quantidade mínima que pode ser instalada no computador.</font><br>
									<font>R. Correta: b) Tipo de memória e a quantidade máxima que pode ser instalada no computador.</font><br>
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