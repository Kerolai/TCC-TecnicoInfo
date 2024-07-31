<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Hardware | Atividades | Fonte de Alimentação</title>
	<link rel="stylesheet" type="text/css" href="estiloAT.css">
	<style type="text/css">
		a{
			display: block;
			text-decoration: none;
			color: black;
			transition: 0.2s;
		}
		a:hover{color: white;}

		.down{
			border: 1px solid black;
		   	background-color: white;
		   	border-radius: 6px;
		   	padding: 5px;
		   	cursor: pointer;
		   	display: flex;
	 		align-items: center;
	 		transition: 0.2s;
	 		width: 11%;
		}
		.down:hover{background-color: #4B0082;}
	</style>
</head>
<body>
	<!--MENU-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; font-size: 65px;">Hardware</font>
			
	<!--LOGO-->
		<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
	</div>
	<br><br><br><br>
	<br><br><br>

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
		<table style="margin-left: 5%;" width="44%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Atividades - Fonte de Alimentação</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="QuestHard/Questões 002 - Fontes de Alimentação.docx" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar questões</b></font>
			</a>
		</div>
		
	<!--QUESTÕES-->
	<form method="POST" action="R002.php">
		<article class="questoes">
			<div>
				<p>
					<label><b>1. Qual é a função das fontes de alimentação em relação as tensões originadas da rede elétrica?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt1" required="">a) Converter a tensão alternada para tensões contínuas<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt2" required="">b) Converter a tensão continua para tensões alternadas<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt3" required="">c) Fornecer energia para a memória RAM<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt4" required="">d) Converter a voltagem alternada para voltagem contínua<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt5" required="">e) Converter a voltagem continua para tensões alternadas<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>2. Com relação as tensões das fontes ATX, qual voltagem é utilizada para a alimentação dos processadores, chipsets e memória?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt1" required="">a) +3.3 volts<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt2" required="">b) +12 volts<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt3" required="">c) -12 volts<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt4" required="">d) +5 volts<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt5" required="">e) +4 volts<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>3. No que implica a alteração das tensões em relação aos computadores?</b></label><br><br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt1" required="">a) Estabilidade da energia e acelera o funcionamento da memória RAM<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt2" required="">b) Durabilidade do aparelho e estabilidade da memória RAM<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt3" required="">c) Durabilidade do aparelho e estabilidade da energia<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt4" required="">d) Resfriamento do aparelho e durabilidade do aparelho<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt5" required="">e) Resfriamento do aparelho e estabilidade da energia<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>4. Sobre os conectores PEG, utilizado para alimentar placas de vídeo PCI Express, podem apresentar quantos pinos?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt1" required="">a) De 6 a 8 pinos<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt2" required="">b) 12 pinos<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt3" required="">c) De 20 a 24 pinos<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt4" required="">d) 4 pinos<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt5" required="">e) De 4 a 8 pinos<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>5. Complete corretamente a frase.<br><br>
					“A tensão _ _ _ _ _ _ _ _, é a que movimenta os elétrons sempre para a mesma _ _ _ _ _ _ _”.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt1" required="">a) Alternada – direção<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt2" required="">b) Contínua – direção<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt3" required="">c) Alternada – voltagem<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt4" required="">d) Continua – voltagem<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt5" required="">e) Elétrica – voltagem<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>6. Sabendo que existe o método para a correção de força. Selecione a alternativa, a qual corresponde corretamente sua necessidade em uma fonte de alimentação.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt1" required="">a) Reduz o calor e aumenta a agilidade do processador<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt2" required="">b) Reduz o calor e perdas de energia<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt3" required="">c) Reduz perdas de energia e aumenta a agilidade do processador<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt4" required="">d) Reduz na conta de eletricidade e gera mais calor<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt5" required="">e) Gera mais calor e diminui as perdas de energia<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>7. Cada conector tem uma funcionalidade específica. Dessa forma, qual conector é utilizado em unidades de armazenamento mais antigos, como os HDs PATA, DVD-ROM, ventoinhas e sistemas de iluminação.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt1" required="">a) Conector SATA<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt2" required="">b) Conector placa-mãe ATX 24 pinos<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt3" required="">c) Conector MOLEX<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt4" required="">d) Conector PEG<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt5" required="">e) Nenhuma<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>8. Assinale verdadeiro ou falso.<br><br>
					I) Todas as fontes de alimentação possuem uma chave seletora da tensão de entrada.<br>
					II)	Ao remover o pino de aterramento dos aparelhos, automaticamente a segurança do equipamento está em risco.<br>
					III) A potência elétrica é definida pela medida do trabalho realizado em relação a uma unidade de tempo.<br>
					IV)	A corrente alternada é ora positiva e ora negativa executando um movimento de vai-e-vem.
					</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt1" required="">a) V – V – V – V<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt2" required="">b) V – F – F – V<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt3" required="">c) F – V – V – F<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt4" required="">d) F – F – F – V<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt5" required="">e) F – V – V – V<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>9. Como estudamos anteriormente, tensão elétrica é a força necessária para o movimento dos elétrons a fim de ter uma corrente elétrica. Nesse sentido, qual é os dois valores de tensão utilizados no Brasil?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt1" required="">a) 115 e 230 volts<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt2" required="">b) 120 e 240 volts<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt3" required="">c) 110 e 220 volts<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt4" required="">d) 110 e 200 volts<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt5" required="">e) 115 e 240 volts<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>10. No brasil, as lâmpadas piscam uma determinada quantidade por segundo, mas isso é tão rápido que não é possível de se visualizar a olho nu. Sabendo que esse fenômeno é denominado como frequência, selecione a alternativa que corresponde a frequência correta no país.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt1" required="">a) 50 Hz<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt2" required="">b) 40 Hz<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt3" required="">c) 20 Hz<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt4" required="">d) 60 Hz<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt5" required="">e) 80 Hz<br><br>
				</p>
			</div>
		</article><br>
		<center><button type="submit" id="bt1"><font size="4">Enviar</font></button></center>
	</form><br><br>

	<!--CRÉDITOS-->
	<div class="div">
		<p class="cred">Elisângela e Kerolai ® 2021</p>
	</div>
</body>
</html>