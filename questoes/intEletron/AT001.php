<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Introdução a Eletrônica | Atividades</title>
	<link rel="stylesheet" type="text/css" href="estiloATie.css">
</head>
<body>
	<!--MENU-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; font-size: 65px;">Introdução a Eletrônica</font>
			
	<!--LOGO-->
		<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
	</div>
	<br><br><br><br>
	<br><br><br>

	<!--BOTÃO PARA VOLTAR-->
		<div>
			<table style="margin-left: 2%;" width="7%">
			  	<tr>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/'"> <img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="18%">
		  	<tr>
		    	<td><img src="imagens/IntEletron.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Atividades</b></font></td>
		 	</tr>
		</table><br>

	<form method="POST" action="R001.php">
		<article class="questoes">
			<div>
				<p>
					<label><b>1. O que é um algoritmo?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt1" required="">a) Conjunto finito de regras que fornece uma sequência não ordenada e ambígua para resolver um problema.<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt2" required="">b) Conjunto finito de regras que fornece uma sequência ordenada e não ambígua para resolver um problema.<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt3" required="">c) Conjunto infinito de regras que fornece uma sequência ordenada e não ambígua para resolver um problema.<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt4" required="">d) Conjunto infinito de regras que fornece uma sequência não ordenada e não ambígua para resolver um problema.<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt5" required="">e) Conjunto finito de regras que fornece uma sequência ordenada e ambígua para resolver um problema.<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>2. Quais das opções abaixo estão corretas?<br><br>
					I) Algoritmo é a base inicial de toda programação de computadores.<br>
					II)	O algoritmo especifica uma sequência de passos irracionais para o computador executar uma tarefa.<br> III) Não existe fim.<br>
					IV) Não cria margem à dupla interpretação.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt1" required="">a) I e III estão corretas.<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt2" required="">b) II e III estão corretas.<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt3" required="">c) II, e IV estão corretas.<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt4" required="">d) I, II e IV estão corretas.<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt5" required="">e) Todas as alternativas estão corretas.<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>3. Complete a seguinte frase:<br><br>
					“__________ é um tipo de algoritmo com operações específicas para o ______________ e exclusivos ao conjunto de instruções que o _____________ pode executar”.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt1" required="">a) Programa – computador – processador<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt2" required="">b) Programa – compilador – computador<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt3" required="">c) Compilador – processador – computador<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt4" required="">d) Compilador – programa – computador<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt5" required="">e) Programa – processador – compilador<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>4. Quais são as formas que os algoritmos podem ser representados?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt1" required="">a) Fluxograma, Simples e Pseudocódigo.<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt2" required="">b) Natural, Simples e Fluxograma.<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt3" required="">c) Natural, Composta e Fluxograma.<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt4" required="">d) Fluxograma, Composta e Pseudocódigo.<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt5" required="">e) Natural, Fluxograma e Pseudocódigo.<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>5. De acordo com os símbolos para construir um fluxograma, qual das alternativas a seguir está INCORRETA?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt1" required="">a) Terminal - simboliza o início e o fim do fluxo.<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt2" required="">b) Linha - são os ligamentos entre os símbolos, com uma seta na ponta, indicando sua direção.<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt3" required="">c) Exibição - executa operações de entrada de dados em um monitor de vídeo conectado a um PC.<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt4" required="">d) Processamento - executa ações de processamento de operações matemáticas.<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt5" required="">e) Preparação - permite a modificação de instruções de um laço.<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>6. Qual das opções abaixo apresentam somente nomes que respeitam as regras para nomeação de variáveis?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt1" required="">a) três - nove - calcula – OF001;<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt2" required="">b) 1sal - cont - s - pão;<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt3" required="">c) blue cat - nome - somaT - ledON;<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt4" required="">d) idade - $sal - valorSalT - tam_calca;<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt5" required="">e) cao - nota1 - salFunc - nome_funcionario;<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>7. Relacione as colunas:
					<table style="margin-left: 8%;" width="50%">
					 <tr>
					   	<td><b>I) Inteiro<br> II) Real<br> III) Caracter<br> IV) Lógico</b></td>
					    <td><b>(  ) nome – idade – R$ 97,00 – 78...<br> (  ) 45 – 69 – 100 – -9, 0...<br>
						(  ) V (Verdadeiro) – F (Falso).<br> (  ) 1,5 – 9,0 – -0,005 – 100</b></td>
					 </tr></table></b></label>
				</p>
				<p>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt1" required="">a) IV, II, I, III.<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt2" required="">b) IV, I, III, II.<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt3" required="">c) II, IV, III, I.<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt4" required="">d) III, I, IV, II.<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt5" required="">e) II, III, IV, I.<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>8. Indique o tipo de atribuição que está ocorrendo em cada situação abaixo:<br><br>
					I) a + b;<br> II) idade || nome;<br> III) qst1 == gabarito;<br> IV)	idade >= 18;<br> V) sal * 1000;</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt1" required="">a) I - Atribuição, II - ou, III - comparação, IV - maior ou igual, V - expoente.<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt2" required="">b) I - Adição, II - ou, III - igual, IV - maior ou igual, V – multiplicação.<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt3" required="">c) I - Atribuição, II - não, III - igual, IV - menor ou igual, V - divisão.<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt4" required="">d) I - Adição, II - não, III - comparação, IV - maior ou igual, V - resto.<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt5" required="">e) I - Adição, II - ou, III - igual, IV - menor ou igual, V - multiplicação.<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>9. Observe as comparações e diga se é verdadeiro ou falso.<br><br>
					Sendo que: a = 2; b = 5; c = 8; d = 3; e = 6;<br><br>
					(b == d + a) && (c <= b) => _____<br> (c-a == e) || (a == d) => _____<br> (e == c-a) && (b > a) => _____<br> (a+2 == d) || (e < c-1) => _____<br></b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt1" required="">a) F – V – V – F<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt2" required="">b) V – F – F – V<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt3" required="">c) F – F – F – V<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt4" required="">d) V – V – V – F<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt5" required="">e) V – F – V – F<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>10. Analise o algoritmo abaixo e diga o que será impresso na tela ao serem executados:</b></label><br><br>
					<img src="imagens/foto1.jpg" width="25%" style="margin-left: 2%;"><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt1" required="">a) A = 30, B = 20, C = 50<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt2" required="">b) A = 20, B = 30, C = 40<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt3" required="">c) A = 30, B = 30, C = 60<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt4" required="">d) A = 20, B = 30, C = 50<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt5" required="">e) A = 30, B = 20, C = 40<br><br>
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