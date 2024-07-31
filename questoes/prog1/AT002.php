<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Programação I | Atividades | Construção de Algoritmos</title>
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
		<table style="margin-left: 5%;" width="44%">
		  	<tr>
		    	<td><img src="imagens/prog1.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Atividades - Construção de Algoritmos</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="QuestProg/Questões 002 - Construção de Algoritmos.docx" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar questões</b></font>
			</a>
		</div>
		
	<!--QUESTÕES-->
	<form method="POST" action="R002.php">
		<article class="questoes">
			<div>
				<p>
					<label><b>1. Quais são as três estruturas básicas de controle que se baseiam em algoritmos?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt1" required="">a) Decisão, preparação e repetição<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt2" required="">b) Sequenciação, repetição e preparação<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt3" required="">c) Decisão, modulação e preparação<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt4" required="">d) Sequenciação, decisão e repetição<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt5" required="">e) Sequenciação, modulação e preparação<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>2. Complete:<br><br>
					"___________________ é um conjunto de objetos que tem em comum o mesmo comportamento diante de um conjunto definido de operações".</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt1" required="">a) Programa<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt2" required="">b) Prioridade de Operadores<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt3" required="">c) Variáveis<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt4" required="">d) Operadores<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt5" required="">e) Conjunto de dados<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>3. Qual é a sequência de comandos para construir uma estrutura de sequenciação?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt1" required="">a) Início - Processamento - Entrada de dados - Saída de dados - Fim<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt2" required="">b) Início - Entrada de dados - Processamento - Saída de dados - Fim<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt3" required="">c) Início - Entrada de dados - Processamento - Fim - Saída de dados<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt4" required="">d) Fim - Processamento - Entrada de dados - Início - Saída de dados<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt5" required="">e) Fim - Entrada de Dados - Processamento - Início - Saída de dados<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>4. Quais opções estão corretas de acordo com a estrutura de decisão?<br><br>
					I) Acontece diversas instruções de uma certa condição for aceita.<br>
					II)	Não há caminhos alternativos no algoritmo.<br>
					III) Executa apenas uma vez cada comando.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt1" required="">a) I e II<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt2" required="">b) II e III<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt3" required="">c) I e II<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt4" required="">d) Apenas a III<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt5" required="">e) Apenas a I<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>5. Complete a frase a seguir de acordo com a sintaxe da função se:<br><br>
					"Se a condição for _________, será executado a instrução relacionada ao _____. Se a condição for ______, o algoritmo muda o fluxo e vai diretamente para a ___________ do algoritmo".</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt1" required="">a) Verdadeira, então, falsa, continuação<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt2" required="">b) Falsa, então, verdadeira, bloco de comandos<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt3" required="">c) Verdadeira, fim se, falsa, bloco de comandos<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt4" required="">d) Falsa, fim se, verdadeira, continuação<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt5" required="">e) Falsa, então, verdadeira, continuação<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>6. Para que serve a cláusula senão (else)?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt1" required="">a) Seu uso é opcional. Serve para executar uma variável quando a condição do if for verdadeiro<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt2" required="">b) Seu uso é obrigatório. Serve para executar um bloco de comandos quando a condição do if for falso<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt3" required="">c) Seu uso é opcional. Serve para executar um bloco de comandos quando a condição do if for falso<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt4" required="">d) Seu uso é obrigatório. Serve para executar um bloco de comandos quando a condição do if for verdadeiro<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt5" required="">e) Seu uso é opcional. Serve para executar uma variável quando a condição do if for falso<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>7. Quando podemos saber se é um comando de condição encadeado?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt1" required="">a) Quando o bloco de instruções subordinado ao comando se contém outros comandos diferentes<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt2" required="">b) Quando o bloco de instruções subordinado ao comando se contém outros comandos iguais<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt3" required="">c) Quando o comando se/senão subordinado ao bloco de instruções contém outros comandos diferentes<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt4" required="">d) Quando o comando se subordinado ao bloco de instruções contém outros comandos iguais<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt5" required="">e) Quando o bloco de instruções subordinado ao comando se/senão contém outros comandos iguais<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>8. Observe as operações abaixo e diga qual está INCORRETA:<br><br>
					I) % (resto da divisão);<br>II)	pow (raiz quadrada de um número);<br>
					III) != (diferente);<br> IV) && (e);<br>
					V) div (resultado inteiro de uma divisão);</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt1" required="">a) Opção I<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt2" required="">b) Opção II<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt3" required="">c) Opção III<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt4" required="">d) Opção IV<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt5" required="">e) Opção V<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>9. Observe esse código abaixo:<br><br>
					&nbsp;int num1 = 9; num2 = 6;<br>&nbsp;&nbsp;if(num1==num2){<br>
					&nbsp;&nbsp;&nbsp;printf("São iguais");<br>&nbsp;&nbsp;}else<br>
					&nbsp;&nbsp;&nbsp;printf("São diferentes");<br>&nbsp;}</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt1" required="">a) O comando if/else está comparando os dois números para informar se são iguais. Se a condição for verdadeira, irá sair a mensagem "São iguais", caso contrário, aparecerá "São diferentes".<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt2" required="">b) O comando while está comparando os dois números para informar se são diferentes. Se a condição for verdadeira, irá sair a mensagem "São iguais", caso contrário, aparecerá "São diferentes".<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt3" required="">c) O comando if/else está comparando os dois números para informar se são diferentes. Se a condição for verdadeira, irá sair a mensagem "São diferentes", caso contrário, aparecerá "São iguais".<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt4" required="">d) O comando while está comparando os dois números para informar se são iguais. Se a condição for verdadeira, irá sair a mensagem "São diferentes", caso contrário, aparecerá "São iguais".<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt5" required="">e) O comando if/else está comparando os dois números para informar se são iguais. Se a condição for verdadeira, irá sair a mensagem "São iguais", caso contrário, aparecerá "São diferentes".<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>10. Observe mais um exemplo e marque a resposta correta:<br><br>
					&nbsp;int i;<br>&nbsp;&nbsp;printf ("Informe um número: ");<br>
					&nbsp;&nbsp;scanf ("%d", &i);<br>&nbsp;&nbsp;&nbsp;if (i < 0){<br>
					&nbsp;&nbsp;&nbsp;&nbsp;printf ("O número é negativo");<br>&nbsp;&nbsp;&nbsp;}else{<br>
					&nbsp;&nbsp;&nbsp;&nbsp;printf ("O número é positivo ou nulo");<br>&nbsp;}</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt1" required="">a) O comando if/else está analisando se o número é menor que 0. Se a condição for verdadeira, executará o bloco do else, caso contrário, o bloco do if será executado.<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt2" required="">b) O comando if/else está analisando se o número é maior que 0. Se a condição for verdadeira, executará o bloco do if, caso contrário, o bloco do else será executado.<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt3" required="">c) O comando if/else está analisando se o número é menor e igual a 0. Se a condição for verdadeira, executará o bloco do if, caso contrário, o bloco do else será executado.<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt4" required="">d) O comando if/else está analisando se o número é menor que 0. Se a condição for verdadeira, executará o bloco do if, caso contrário, o bloco do else será executado.<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt5" required="">e) O comando if/else está analisando se o número é maior que 0. Se a condição for verdadeira, executará o bloco do else, caso contrário, o bloco do if será executado.<br><br>
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