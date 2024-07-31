<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Hardware | Atividades | Tipos de computadores e seus componentes | Resultado</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="estiloR.css">
	<style type="text/css">
		.estrelas input[type=radio]{
				display: none;
			}
			.estrelas label i.fa:before{
				content: '\f005';
				font-size: 30px;
				color: #FC0;
				margin: 3px;
			}
			.estrelas input[type=radio]:checked  ~ label i.fa:before{
				color: #CCC;
			}

			/*Botão de envio das estrelas*/
				.bot{
					border: none;
					outline: none;
					border: 1px solid black;
					height: 40px;
					width: 108px;
					color: #000000;
					border-radius: 10px;
					transition: 0.2s;
					font-size: 16px;
				}

			/*Animação do botão de envio*/
				.bot:hover{
					cursor: pointer;
					background: #4B0082;
					color: white;
					transition: 0.2s;
				}
	</style>
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

		if ($q2 == "opt3") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q3 == "opt4") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q4 == "opt1") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q5 == "opt5") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q6 == "opt4") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q7 == "opt2") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q8 == "opt3") {
			$acertos = $acertos + 1;
		}else{
			$erros = $erros + 1;
		}

		if ($q9 == "opt1") {
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
									<label>1. Complete a frase:<br><br>
									“A _ _ _ _ _ _ _ _ _ _ _ é o termo usado para descrever o conjunto de ciências relacionadas a _ _ _ _ _ _ _ _ _ _ _ _ _,<br> transmissão e processamentos da informação em meios _ _ _ _ _ _ _ _”.</label><br><br>

									<font><b>Marcada: b) Informática – armazenamento – digitais</b></font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q1 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>1. Complete a frase:<br><br>
									“A _ _ _ _ _ _ _ _ _ _ _ é o termo usado para descrever o conjunto de ciências relacionadas a _ _ _ _ _ _ _ _ _ _ _ _ _,<br> transmissão e processamentos da informação em meios _ _ _ _ _ _ _ _”.</b></label><br><br>

									<font>Marcada: a) Informática – dados – analógico</font><br>
									<font>R. Correta: b) Informática – armazenamento – digitais</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>1. Complete a frase:<br><br>
									“A _ _ _ _ _ _ _ _ _ _ _ é o termo usado para descrever o conjunto de ciências relacionadas a _ _ _ _ _ _ _ _ _ _ _ _ _,<br> transmissão e processamentos da informação em meios _ _ _ _ _ _ _ _”.</b></label><br><br>

									<font>Marcada: c) Dados – automática – informática</font><br>
									<font>R. Correta: b) Informática – armazenamento – digitais</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>1. Complete a frase:<br><br>
									“A _ _ _ _ _ _ _ _ _ _ _ é o termo usado para descrever o conjunto de ciências relacionadas a _ _ _ _ _ _ _ _ _ _ _ _ _,<br> transmissão e processamentos da informação em meios _ _ _ _ _ _ _ _”.</b></label><br><br>

									<font>Marcada: d) Informática – computador – analógico</font><br>
									<font>R. Correta: b) Informática – armazenamento – digitais</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q1 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>1. Complete a frase:<br><br>
									“A _ _ _ _ _ _ _ _ _ _ _ é o termo usado para descrever o conjunto de ciências relacionadas a _ _ _ _ _ _ _ _ _ _ _ _ _,<br> transmissão e processamentos da informação em meios _ _ _ _ _ _ _ _”.</b></label><br><br>

									<font>Marcada: e) Informação – dados – digitais</font><br>
									<font>R. Correta: b) Informática – armazenamento – digitais</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO2
				//CORRETA
					if ($q2 == "opt3") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>2. Complete corretamente a frase: <br><br>
									“O computador é uma máquina construída por uma série de componentes e _ _ _ _ _ _ _ _ _ eletrônicos, os quais<br> são capazes de receber, armazenar, processar e transmitir as informações”. </b></label><br><br>

									<font>Marcada: c) Circuitos</font><br>
								</p><hr size=2 color=#4B0082>";
							}
				//ERRADAS
					if ($q2 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>2. Complete corretamente a frase: <br><br>
									“O computador é uma máquina construída por uma série de componentes e _ _ _ _ _ _ _ _ _ eletrônicos, os quais<br> são capazes de receber, armazenar, processar e transmitir as informações”. </b></label><br><br>

									<font>Marcada: a) Informações</font><br>
									<font>R. Correta: c) Circuitos</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>2. Complete corretamente a frase: <br><br>
									“O computador é uma máquina construída por uma série de componentes e _ _ _ _ _ _ _ _ _ eletrônicos, os quais<br> são capazes de receber, armazenar, processar e transmitir as informações”. </b></label><br><br>

									<font>Marcada: b) Equipamentos</font><br>
									<font>R. Correta: c) Circuitos</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>2. Complete corretamente a frase: <br><br>
									“O computador é uma máquina construída por uma série de componentes e _ _ _ _ _ _ _ _ _ eletrônicos, os quais<br> são capazes de receber, armazenar, processar e transmitir as informações”. </b></label><br><br>

									<font>Marcada: b) Equipamentos</font><br>
									<font>R. Correta: c) Circuitos</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q2 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 57%; margin: 5%;'>
								<p>
									<label><b>2. Complete corretamente a frase: <br><br>
									“O computador é uma máquina construída por uma série de componentes e _ _ _ _ _ _ _ _ _ eletrônicos, os quais<br> são capazes de receber, armazenar, processar e transmitir as informações”. </b></label><br><br>

									<font>Marcada: e) Armazenamentos</font><br>
									<font>R. Correta: c) Circuitos</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO3
				//CORRETA
					if ($q3 == "opt4") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59.5%; margin: 2.5%;'>
								<p>
									<label><b>3. Os supercomputadores possuem:</b></label><br><br>

									<font>Marcada: d) Altíssimo processamento e grande capacidade de memória</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q3 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>3. Os supercomputadores possuem:</b></label><br><br>

									<font>Marcada: a) Baixíssimo processamento e grande capacidade de memória</font><br>
									<font>R. Correta: d) Altíssimo processamento e grande capacidade de memória</font><br>
								</p><hr size=2 color=#4B0082>";
							}
					if ($q3 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>3. Os supercomputadores possuem:</b></label><br><br>

									<font>Marcada: b) Altíssimo processamento e pequena capacidade de memória</font><br>
									<font>R. Correta: d) Altíssimo processamento e grande capacidade de memória</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q3 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>3. Os supercomputadores possuem:</b></label><br><br>

									<font>Marcada: c) Altíssimo processamento e utilizados para prover serviços na internet</font><br>
									<font>R. Correta: d) Altíssimo processamento e grande capacidade de memória</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q3 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>3. Os supercomputadores possuem:</b></label><br><br>

									<font>Marcada: e) Baixíssimo processamento e utilizados para prover serviços na internet</font><br>
									<font>R. Correta: d) Altíssimo processamento e grande capacidade de memória</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO4
				//CORRETA
					if ($q4 == "opt1") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 56.5%; margin: 5.5%;'>
								<p>
									<label><b>4. Assinale a alternativa correta. Verdadeiro ou falso:<br><br>
									I)	O hardware é a parte física do computador.<br>
									II)	A memória RAM não é volátil.<br>
									III) Um grande exemplo de periféricos de entrada é monitor.<br>
									IV)	O processador é responsável por processar os dados e fornecer a informação desejada.</b></label><br><br>

									<font>Marcada: a) V – F - F – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}

				//ERRADAS
					if ($q4 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>4. Assinale a alternativa correta. Verdadeiro ou falso:<br><br>
									I)	O hardware é a parte física do computador.<br>
									II)	A memória RAM não é volátil.<br>
									III) Um grande exemplo de periféricos de entrada é monitor.<br>
									IV)	O processador é responsável por processar os dados e fornecer a informação desejada.</b></label><br><br>

									<font>Marcada: b) V – V – V – V</font><br>
									<font>R. Correta: a) V – F - F – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>4. Assinale a alternativa correta. Verdadeiro ou falso:<br><br>
									I)	O hardware é a parte física do computador.<br>
									II)	A memória RAM não é volátil.<br>
									III) Um grande exemplo de periféricos de entrada é monitor.<br>
									IV)	O processador é responsável por processar os dados e fornecer a informação desejada.</b></label><br><br>

									<font>Marcada: c) F – V – V – F</font><br>
									<font>R. Correta: a) V – F - F – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>4. Assinale a alternativa correta. Verdadeiro ou falso:<br><br>
									I)	O hardware é a parte física do computador.<br>
									II)	A memória RAM não é volátil.<br>
									III) Um grande exemplo de periféricos de entrada é monitor.<br>
									IV)	O processador é responsável por processar os dados e fornecer a informação desejada.</b></label><br><br>

									<font>Marcada: d) F – F – F – V</font><br>
									<font>R. Correta: a) V – F - F – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q4 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>4. Assinale a alternativa correta. Verdadeiro ou falso:<br><br>
									I)	O hardware é a parte física do computador.<br>
									II)	A memória RAM não é volátil.<br>
									III) Um grande exemplo de periféricos de entrada é monitor.<br>
									IV)	O processador é responsável por processar os dados e fornecer a informação desejada.</b></label><br><br>

									<font>Marcada: e) V – F – V – F</font><br>
									<font>R. Correta: a) V – F - F – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO5
				//CORRETA
					if ($q5 == "opt5") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>5. O que são as máquinas com a lógica predeterminada?</b></label><br><br>

									<font>Marcada: e) Máquinas com o algoritmo intrínseco aos seus circuitos.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

				//ERRADAS
					if ($q5 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>5. O que são as máquinas com a lógica predeterminada?</b></label><br><br>

									<font>Marcada: a) Máquinas que admitem programação e são destinadas a tarefas pessoais.</font><br>
									<font>R. Correta: e) Máquinas com o algoritmo intrínseco aos seus circuitos.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 60.5%; margin: 1.5%;'>
								<p>
									<label><b>5. O que são as máquinas com a lógica predeterminada?</b></label><br><br>

									<font>Marcada: b) Máquinas que admitem programação.</font><br>
									<font>R. Correta: e) Máquinas com o algoritmo intrínseco aos seus circuitos.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>5. O que são as máquinas com a lógica predeterminada?</b></label><br><br>

									<font>Marcada: c) Máquinas com algoritmos intrínsecos aos seus circuitos, mas que admitem programação.</font><br>
									<font>R. Correta: e) Máquinas com o algoritmo intrínseco aos seus circuitos.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q5 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 60.5%; margin: 1.5%;'>
								<p>
									<label><b>5. O que são as máquinas com a lógica predeterminada?</b></label><br><br>

									<font>Marcada: d) Máquinas destinada a tarefas de entretenimento.</font><br>
									<font>R. Correta: e) Máquinas com o algoritmo intrínseco aos seus circuitos.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO6
				//CORRETA
					if ($q6 == "opt4") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>6. A denominação para o grupo que contêm dispositivos, tais como, Notebooks, Netbooks, Ultrabooks, Tablets<br> e Smartphones, é:</b></label><br><br>

									<font>Marcada: d) Computadores portáteis</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q6 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. A denominação para o grupo que contêm dispositivos, tais como, Notebooks, Netbooks, Ultrabooks, Tablets<br> e Smartphones, é:</b></label><br><br>

									<font>Marcada: a) Palmtop</font><br>
									<font>R. Correta: d) Computadores portáteis</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. A denominação para o grupo que contêm dispositivos, tais como, Notebooks, Netbooks, Ultrabooks, Tablets<br> e Smartphones, é:</b></label><br><br>

									<font>Marcada: b) Computador de mesa</font><br>
									<font>R. Correta: d) Computadores portáteis</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. A denominação para o grupo que contêm dispositivos, tais como, Notebooks, Netbooks, Ultrabooks, Tablets<br> e Smartphones, é:</b></label><br><br>

									<font>Marcada: c) Computador de médio porte</font><br>
									<font>R. Correta: d) Computadores portáteis</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q6 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 58%; margin: 4%;'>
								<p>
									<label><b>6. A denominação para o grupo que contêm dispositivos, tais como, Notebooks, Netbooks, Ultrabooks, Tablets<br> e Smartphones, é:</b></label><br><br>

									<font>Marcada: e) Supercomputadores</font><br>
									<font>R. Correta: d) Computadores portáteis</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO7
				//CORRETA
					if ($q7 == "opt2") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>7. As aplicações dos computadores na área da educação, seriam: </b></label><br><br>

									<font>Marcada: b) Ensino à distância, bibliotecas digitais, aulas, entre outros.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q7 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. As aplicações dos computadores na área da educação, seriam: </b></label><br><br>

									<font>Marcada: a) Para redes sociais, músicas, jogos, entre outros.</font><br>
									<font>R. Correta: b) Ensino à distância, bibliotecas digitais, aulas, entre outros.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. As aplicações dos computadores na área da educação, seriam: </b></label><br><br>

									<font>Marcada: c) Projetos em 3D, cálculos complexos, entre outros.</font><br>
									<font>R. Correta: b) Ensino à distância, bibliotecas digitais, aulas, entre outros.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. As aplicações dos computadores na área da educação, seriam: </b></label><br><br>

									<font>Marcada: d) Diagnósticos de doenças, monitoramento de pacientes e cirurgia auxiliadas por computador.</font><br>
									<font>R. Correta: b) Ensino à distância, bibliotecas digitais, aulas, entre outros.</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q7 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>7. As aplicações dos computadores na área da educação, seriam: </b></label><br><br>

									<font>Marcada: e) Sistema de pagamento, estoque e cobranças.</font><br>
									<font>R. Correta: b) Ensino à distância, bibliotecas digitais, aulas, entre outros.</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO8
				//CORRETA
					if ($q8 == "opt3") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 56%; margin: 6%;'>
								<p>
									<label><b>8. Assinale a alternativa correta. Verdadeiro ou falso.<br><br>
									I) A fonte de alimentação é responsável por fornecer energia elétrica aos componentes do computador.<br>
									II) O disco rígido, igualmente a memória RAM, não consegue manter arquivado o conteúdo após o computador<br> ser totalmente desligado.<br>
									III) A velocidade do HD é medida em RPM.<br>
									IV) A função da placa de rede é estabelecer comunicação de um computador para outros, formando assim<br> uma rede.
									</b></label><br><br>

									<font>Marcada: c) V – F – V – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q8 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>8. Assinale a alternativa correta. Verdadeiro ou falso.<br><br>
									I) A fonte de alimentação é responsável por fornecer energia elétrica aos componentes do computador.<br>
									II) O disco rígido, igualmente a memória RAM, não consegue manter arquivado o conteúdo após o computador<br> ser totalmente desligado.<br>
									III) A velocidade do HD é medida em RPM.<br>
									IV) A função da placa de rede é estabelecer comunicação de um computador para outros, formando assim<br> uma rede.
									</b></label><br><br>

									<font>Marcada: a) V – V – V – V</font><br>
									<font>R. Correta: c) V – F – V – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>8. Assinale a alternativa correta. Verdadeiro ou falso.<br><br>
									I) A fonte de alimentação é responsável por fornecer energia elétrica aos componentes do computador.<br>
									II) O disco rígido, igualmente a memória RAM, não consegue manter arquivado o conteúdo após o computador<br> ser totalmente desligado.<br>
									III) A velocidade do HD é medida em RPM.<br>
									IV) A função da placa de rede é estabelecer comunicação de um computador para outros, formando assim<br> uma rede.
									</b></label><br><br>

									<font>Marcada: b) V – F – F – V</font><br>
									<font>R. Correta: c) V – F – V – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>8. Assinale a alternativa correta. Verdadeiro ou falso.<br><br>
									I) A fonte de alimentação é responsável por fornecer energia elétrica aos componentes do computador.<br>
									II) O disco rígido, igualmente a memória RAM, não consegue manter arquivado o conteúdo após o computador<br> ser totalmente desligado.<br>
									III) A velocidade do HD é medida em RPM.<br>
									IV) A função da placa de rede é estabelecer comunicação de um computador para outros, formando assim<br> uma rede.
									</b></label><br><br>

									<font>Marcada: d) F – F – F – F</font><br>
									<font>R. Correta: c) V – F – V – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q8 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 55%; margin: 7%;'>
								<p>
									<label><b>8. Assinale a alternativa correta. Verdadeiro ou falso.<br><br>
									I) A fonte de alimentação é responsável por fornecer energia elétrica aos componentes do computador.<br>
									II) O disco rígido, igualmente a memória RAM, não consegue manter arquivado o conteúdo após o computador<br> ser totalmente desligado.<br>
									III) A velocidade do HD é medida em RPM.<br>
									IV) A função da placa de rede é estabelecer comunicação de um computador para outros, formando assim<br> uma rede.
									</b></label><br><br>

									<font>Marcada: e) F – F – V – V</font><br>
									<font>R. Correta: c) V – F – V – V</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO9
				//CORRETA
					if ($q9 == "opt1") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>9. Qual é o componente que recebe sinal sonoro oriundo do computador, convertendo em áudio analógico para<br> ser reproduzido em outros equipamentos digitais?</b></label><br><br>

									<font>Marcada: a) Placa de som</font><br>
								</p><hr size=2 color=#4B0082>";
					}
				//ERRADAS
					if ($q9 == "opt2") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>9. Qual é o componente que recebe sinal sonoro oriundo do computador, convertendo em áudio analógico para<br> ser reproduzido em outros equipamentos digitais?</b></label><br><br>

									<font>Marcada: b) Placa de rede</font><br>
									<font>R. Correta: a) Placa de som</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>9. Qual é o componente que recebe sinal sonoro oriundo do computador, convertendo em áudio analógico para<br> ser reproduzido em outros equipamentos digitais?</b></label><br><br>

									<font>Marcada: c) Fones de ouvido</font><br>
									<font>R. Correta: a) Placa de som</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>9. Qual é o componente que recebe sinal sonoro oriundo do computador, convertendo em áudio analógico para<br> ser reproduzido em outros equipamentos digitais?</b></label><br><br>

									<font>Marcada: d) Placas de vídeos</font><br>
									<font>R. Correta: a) Placa de som</font><br>
								</p><hr size=2 color=#4B0082>";
					}
					if ($q9 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>9. Qual é o componente que recebe sinal sonoro oriundo do computador, convertendo em áudio analógico para<br> ser reproduzido em outros equipamentos digitais?</b></label><br><br>

									<font>Marcada: e) Placa mãe</font><br>
									<font>R. Correta: a) Placa de som</font><br>
								</p><hr size=2 color=#4B0082>";
					}

			//QUESTÃO9
				//CORRETA
					if ($q10 == "opt2") {
						echo "<img src='imagens/certo.png' id='imagem' style='padding-left: 60%; margin: 2%;'>
								<p>
									<label><b>10. Quais as principais vantagens ao se utilizar um computador?</b></label><br><br>

									<font>Marcada: b) Confiabilidade – aumento na produtividade – versatilidade</font><br>
								</p>";
					}
				//ERRADAS
					if ($q10 == "opt1") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>10. Quais as principais vantagens ao se utilizar um computador?</b></label><br><br>

									<font>Marcada: a) Versatilidade – inconfiável - digital</font><br>
									<font>R. Correta: b) Confiabilidade – aumento na produtividade – versatilidade</font><br>
								</p>";
					}
					if ($q10 == "opt3") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>10. Quais as principais vantagens ao se utilizar um computador?</b></label><br><br>

									<font>Marcada: c) Atraso na produtividade – universal – versatilidade</font><br>
									<font>R. Correta: b) Confiabilidade – aumento na produtividade – versatilidade</font><br>
								</p>";
					}
					if ($q10 == "opt4") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>10. Quais as principais vantagens ao se utilizar um computador?</b></label><br><br>

									<font>Marcada: d) Confiabilidade – digital – atraso na produtividade</font><br>
									<font>R. Correta: b) Confiabilidade – aumento na produtividade – versatilidade</font><br>
								</p>";
					}
					if ($q10 == "opt5") {
						echo "<img src='imagens/errado.png' id='imagem' style='padding-left: 59%; margin: 3%;'>
								<p>
									<label><b>10. Quais as principais vantagens ao se utilizar um computador?</b></label><br><br>

									<font>Marcada: e) Inconfiável – digital – universal</font><br>
									<font>R. Correta: b) Confiabilidade – aumento na produtividade – versatilidade</font><br>
								</p>";
					}
			?>
			</div>
		</fieldset><br><br>

		<div>
			<center><a href="http://localhost/TCC/materias/1ano/hardware.php"><button type="submit" id="bt1"><font size="4">Sair</font></button></a></center>
		</div><br><br><br>

		<!--CRÉDITOS-->
		<div class="div">
			<p class="cred">Elisângela e Kerolai ® 2021</p>
		</div>
</body>
</html>