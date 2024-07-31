<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Programação I | Linguagem C</title>
	<link rel="stylesheet" type="text/css" href="estiloCP1.css">
</head>
<body>
	<!--MENU-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; font-size: 65px;">Programação I</font>
			
	<!--LOGO-->
		<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
	</div>
	<br><br><br><br><br><br><br>

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
		<table style="margin-left: 5%;" width="23%">
		  	<tr>
		    	<td><img src="imagens/prog1.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Linguagem C</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_prog1/Prog.1 - C003 - Linguagem C.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div><br>

	<!--CONTEÚDO-->
		<div>
			<font size="5" style="margin-left: 7%;"><b>→ Introdução</b></font>
			<p>
				A linguagem de programação C foi criada em 1972 por <i>Dennis Ritchie</i> no centro de pesquisa da <i>Bell Laboratories</i> que tem de propósito geral, uma adequadação à programação estruturada.
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Sintaxe</b></font>
			<p>
				Regras detalhadas para cada construção na linguagem C. Essas regras estão relacionadas com os <b>tipos</b>, as <b>declarações</b>, as <b>funções</b> e as <b>expressões</b>.<br><br>
				<b>Tipos:</b> Definem as propriedades dos dados manipulados em um programa;<br>
				<b>Declarações:</b> Expressam as partes do programa, onde é alocado memória, definido o conteúdo inicial e suas funções.<br>
				<b>Funções:</b> Especificam as ações que um programa executa quando roda;<br>
				<b>Expressões:</b> determinação e alteração de valores regularmente chamadas de funções I/O.<br>
			</p>
			<ul>
				<li>Todo programa em C <b>inicia sua execução</b> chamando a função <b>main()</b>.</li>
				<li>Os <b>comentários</b> no programa são colocados entre /* e */ (não sendo considerados na compilação).</li>
				<li>Cada instrução encerra com ; (ponto e vírgula).</li>
			</ul>
			<p>
				A estrutura de um programa em C possui os seguintes elementos:<br><br>
				&nbsp;&nbsp;- definições de pré-processamento;<br>
				&nbsp;&nbsp;- definições de tipo;<br>
				&nbsp;&nbsp;- declarações de variáveis globais;<br>
				&nbsp;&nbsp;- protótipos de funções;<br>
				&nbsp;&nbsp;- funções.<br>
			</p><br>

			<center><font size="6"><b>Definição de pré-processamento</b></font></center><br>
			<p>
				Comandos interpretados pelo compilador, que diz respeito a <b>operações realizadas</b> pelo compilador para geração de código. Geralmente inicial com uma cerquilha (#) e não são comandos da linguagem C. Entre os mais utilizados, temos:
			</p>
			<p>
				<center><img src="imagens/C3/foto1.jpg" width="13%"></center>

				<font style="margin-left: 7.8%">Utilizado para indicar ao compilador que ele deve "colar" as definições do stdio.h no arquivo antes de compilá-lo. Importante para descrever as funções básicas de entrada e saída.</font>
			</p>
			<p>
				<center><img src="imagens/C3/foto2.jpg" width="13%"></center>

				<font style="margin-left: 7.8%;">Quando a função <b>getch()</b> é utilizada, em que espera o pressionamento de uma tecla pelo usuário. E também, a função <b>clrscr()</b>, que é utilizada para limpar a tela.<br><br>
				<b style="color: red; margin-left: 7.8%;">OBS:</b> a função <b>getche()</b> funciona de forma semelhante, porém exibe na tela o caracter digitado.</font>
			</p>
			<p>
				<center><img src="imagens/C3/foto3.jpg" width="13%"></center>

				<font style="margin-left: 7.8%">Requerida para usar a <b>rand()</b>, uma função que gera um número aleatório entre 0 e 32767.</font>
			</p>
			<p>
				<center><img src="imagens/C3/foto4.jpg" width="13%"></center>

				<font style="margin-left: 7.8%">Utilizada para realizar <b>cálculos matemáticos</b>, como: função trigonométrica, logaritmica, exponencial, entre outras.</font>
			</p><br>

			<font size="5" style="margin-left: 7%;"><b>→ Identificadores</b></font>
			<p>
				Nomes usados para fazer <b>referência</b> aos objetos definidos pelo usuário (Ex.: variáveis, funções, rótulos, etc.).<br><br>
				É um caso sensitive, em que as letras maiúsculas se <b>diferem </b>das minúsculas.
			</p><br>

			<center><font size="6"><b>Definições de Tipo</b></font></center><br>
			<p>
				Quando é declarado um <b>identificador</b>, dá a ele um <b>tipo</b>. Os tipos principais podem ser colocados dentro da classe do tipo objeto dado. Um tipo de objeto de dados determina como esses valores irão ser <b>expressados, operados e representados</b>.<br><br>
				No C existem cinco tipos de dados básicos:
			</p>
			<center>
				<table class="tabela" width="46%">
					<tr>
						<th bgcolor="#4B0082">Tipo</th>
						<th bgcolor="#4B0082">Valor</th>
						<th bgcolor="#4B0082">Número de Bytes</th>
						<th bgcolor="#4B0082">Faixa de Dados</th>
						<th bgcolor="#4B0082">Exemplos</th>
					</tr>
					<tr>
						<th bgcolor="#4B0082">Char</th>
						<td>Caracter</td><td>1</td>
						<td>-128 a 127</td>
						<td>‘a’&nbsp;&nbsp;&nbsp;‘s’</td>
					</tr>
					<tr>
						<th bgcolor="#4B0082">Int</th>
						<td>Inteiro</td><td>2</td>
						<td>-32768 e 32768</td>
						<td>12&nbsp;&nbsp;&nbsp;-1900</td>
						</tr>
					<tr>
						<th bgcolor="#4B0082">Float</th>
						<td>ponto flutuante <br>(números racionais);</td><td>4</td>
						<td>6 dígitos de precisão</td>
						<td>-0,5&nbsp;&nbsp;&nbsp;9,56</td>
					</tr>
					<tr>
						<th bgcolor="#4B0082">Double</th>
						<td>ponto flutuante de<br> dupla precisão</td><td>8</td>
						<td>15 dígitos de precisão</td>
						<td>44,4565464564</td>
					</tr>
					<tr>
						<th bgcolor="#4B0082">Void</th>
						<td>Nulo</td><td>0</td>
						<td>Sem valor</td><td></td>
					</tr>
				</table>
			</center><br><br>

			<font size="5" style="margin-left: 7%;"><b>→ Operador de Atribuição</b></font>
			<p>
				É representado pelo sinal de igual (=), utilizado para <b>atribuir</b> um valor a outra variável. A declaração de atribuição é:<br><br>
				<b>variável = expressão;</b>
			</p><br>

			<font size="5" style="margin-left: 7%;"><b>→ Operadores Matemáticos</b></font>
			<p>
				Em C temos dois operadores matemáticos <b>unários</b> (agem sobre um único operando) e cinco <b>binários</b> (agem sobre dois operandos).
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Operadores Unários</b></font><br>
			<center>
				<table class="tabela" width="40%">
					<tr>
						<th bgcolor="#4B0082">Operador</th>
						<th bgcolor="#4B0082">Símbolo</th>
						<th bgcolor="#4B0082">Ação</th>
						<th bgcolor="#4B0082">Exemplos</th>
					</tr>
					<tr>
						<td>Incremento</td><td>++</td>
						<td>Incrementa o operando <br>de uma unidade</td><td>x++, ++x</td>
					</tr>
					<tr>
						<td>Decremento</td><td>--</td>
						<td>Decrementa o operando <br>em uma unidade</td><td>x--, --x</td>
					</tr>
				</table>
			</center>
			<p>
				Sendo que:<br>
				&nbsp;&nbsp;x++; é equivalente à x = x + 1;<br>
				&nbsp;&nbsp;y++; é equivalente à y = y - 1;<br><br>
				Quando o operador for colocado antes da variável, ele <b>modifica</b> o conteúdo da variável antes dela ser usada.
			</p><br>

			<font size="5" style="margin-left: 7%;"><b>→ Operadores Binários</b></font><br>
			<p>
				A tabela abaixo apresenta os operadores binários de C e as ações executadas pelos operandos x e y:
			</p>

			<center>
				<table class="tabela" width="50%">
					<tr>
						<th bgcolor="#4B0082">Operador</th>
						<th bgcolor="#4B0082">Símbolo</th>
						<th bgcolor="#4B0082">Ação</th>
						<th bgcolor="#4B0082">Exemplos</th>
					</tr>
					<tr>
						<td>Adição</td><td>+</td>
						<td>Adiciona dois operandos</td><td>x + y</td>
					</tr>
					<tr>
						<td>Subtração</td><td>-</td>
						<td>Subtrai o segundo operando do primeiro</td><td>x - y</td>
					</tr>
					<tr>
						<td>Multiplicação</td><td>*</td>
						<td>Multiplica dois operandos</td><td>x * y</td>
					</tr>
					<tr>
						<td>Divisão</td><td>%</td>
						<td>Divide o primeiro operando do segundo</td><td>x / y</td>
					</tr>
					<tr>
						<td>Módulo de Divisão</td><td>/</td>
						<td>Calcula o resto de uma divisão de inteiros</td><td>x % y</td>
					</tr>
				</table>
		</center><br><br>

		<font size="5" style="margin-left: 7%;"><b>→ Operadores Relacionais</b></font><br>
		<p>Usados para comparar dois valores. São eles:</p>
		<center>
			<table class="tabela" width="25%">
				<tr><th bgcolor="#4B0082">Operadores</th><th bgcolor="#4B0082">Exemplos</th></tr>
				
				<tr><td>==</td><td>igual</td></tr>
				<tr><td>!=</td><td>diferente</td></tr>
				<tr><td>></td><td>maior que</td></tr>
				<tr><td>>=</td><td>maior ou igual a</td></tr>
				<tr><td><</td><td>menor que</td></tr>
				<tr><td><=</td><td>menor ou igual a</td></tr>
			</table>
		</center>
		<p>
			O valor de uma expressão envolvendo um operador relacional pode ser <b>Verdadeiro ou Falso</b>.<br><br>
			Por exemplo, se x=5 e y=-4. O valor da expressão x==y é <b>falso</b>. Mas se y fosse igual a 5, então resultaria em <b>verdadeiro</b>.
		</p>

		<font size="5" style="margin-left: 7%;"><b>→ Operadores Lógicos</b></font><br>
		<p>
			Imagine duas expressões quaisquer: x e y. Supondo que elas resultam, falso (F) ou verdadeiro (V), a tabela abaixo mostra os resultados que podem ser obtidos usando dos operadores lógicos:
		</p>

		<center>
			<table class="tabela" width="20%">
				<tr><th bgcolor="#4B0082">Operadores</th><th bgcolor="#4B0082">Símbolos</th></tr>
				
				<tr><td>And (e)</td><td>&&</td></tr>
				<tr><td>Or (ou)</td><td>||</td></tr>
				<tr><td>Not (negação)</td><td>!</td></tr>
			</table>
		</center>
		</div><br><br>
		
		<center>
			<div>
				<table width="12%">
				  	<tr>
				    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/prog1/C003P2.php'"> <img src="imagens/direita.png" width="35px"></button></td>
				    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/prog1/C003P2.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Continuar leitura</b></font></button></td>
				 	</tr>
				</table>
			</div>
		</center><br>

		<!--CRÉDITOS-->
		<div class="div">
			<p class="cred">Elisângela e Kerolai ® 2021</p>
		</div>
</body>
</html>