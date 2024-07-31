<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>Tekmind | Cronograma</title>
	<link rel="stylesheet" type="text/css" href="estiloGeral.css">
	<style type="text/css">
		body{ font-family: Century Gothic; font-size: 15px;}
		
		.div2 {
			background-color: #4B0082;
			width: 100%;
			height: 60px;
		}

		/*TÍTULOS*/
			/*Subtitulo 1*/
			#fonte2 {
				font-family: Courier New;
				font-size: 29px;
				position: absolute;
				color: white;
				margin: 1%;
				left: 37.5%;
			}

			/*Subtitulo 2*/
			#fonte3 {
				font-family: Courier New;
				font-size: 30px;
			}

		/*TEXTO*/
			/*parágrafos*/
			p { margin: 20px; padding-left: 8%; font-size: 15px; }

			/*links externos*/
			#a {
				display: block;
				margin-left: 10%;
				text-decoration: none;
				color: #4B0082;
			}

			/*efeito dos links externos*/
			#a:hover{ 
				text-decoration: underline;
				cursor: pointer;
			}

			/*numeração das matérias de exemplo*/
			#li{ margin-left: 13%; }

		/*TABELA*/
			.tabela {
				border: 2px solid black;
				border-collapse: collapse;
				width: 60%;
				height: 17%;
			}

			.tabela2 {
				border: 2px solid black;
				border-collapse: collapse;
				width: 50%;
				height: 27%;
			}

			.tabela3 {
				border: 2px solid black;
				border-collapse: collapse;
				width: 17%;
				height: 13%;
				left: 10%;
				position: absolute;
			}

			.tabela4 {
				border: 2px solid black;
				border-collapse: collapse;
				width: 12%;
				height: 5%;
				left: 10%;
				position: absolute;
			}

			th, td{
				border: 2px solid black;
				text-align: center;
				padding: 1%;
			}
			th{ color: white; }
	</style>
</head>
<body>
		<!--TÍTULO-->
		<div class="titulo" style="position: fixed; z-index: 1;">
			<font id="fonte1" style="margin: 2%; left: 36%; font-family: Courier New; font-size: 65px;">Cronograma</font>

			<!--MENU SUPERIOR-->
			<nav>
			 	<ul class="menu">
			 		<li><a href="forum.php" type="submit">Fórum</a></li>
			 		<li><a href="sobre.php" type="submit">Sobre</a></li>
			 		<li><a href="perfil.php" type="submit">Perfil</a></li>
				  	<li><a href="login.php" type="submit">Entre</a></li>
				  	<li><a href="index.php" type="submit">Voltar</a></li>
				</ul>
			</nav>

		<!--LOGO-->
			<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;"><br>
		</div>
		<br><br><br><br><br><br><br>

		<!--INTRODUÇÃO-->
		<p>
			Olá, tudo bem?<br><br>Esse cronograma de estudo foi feito por nós, criadoras da <b>Plataforma de Apoio ao Estudante de Informática (PAEI – JC)</b>.<br><br>O objetivo dessa plataforma é ser simples, direta e capacitada o suficiente para que você tenha mais facilidade com os conteúdos.<br><br>O <b>cronograma</b> é uma forma de, entre outras, de manter a organização dos estudos conforme a sua rotina.<br><br><br>Aqui segue alguns anexos:
		</p>

		<a id="a" href="download/" download><b>Como fazer seu Cronograma!</b></a>
		<a id="a" href="download/" download><b>Faça seu próprio Cronograma!</b></a><br>

		<!--TABELA CRONOGRAMA-->
		<div>
			<small style="padding-left: 20%;"><b>Tabela de Exemplo</b></small>
			<center>
				<table class="tabela">
					<tr>
						<th bgcolor="#4B0082"></th>
						<th bgcolor="#4B0082">Segunda</th>
						<th bgcolor="#4B0082">Terça</th>
						<th bgcolor="#4B0082">Quarta</th>
						<th bgcolor="#4B0082">Quinta</th>
						<th bgcolor="#4B0082">Sexta</th>
						<th bgcolor="#4B0082">Sábado</th>
						<th bgcolor="#4B0082">Domingo</th>
					</tr>
					<tr>
						<th bgcolor="#4B0082">Revisão</th>
						<td>1º - 2</td>
						<td>3º - 1</td>
						<td>2º - 4</td>
						<td>4º - 3</td>
						<td>1º - 2</td>
						<td>3º - 1</td>
						<td>Descanso</td>
					</tr>
					<tr>
						<th bgcolor="#4B0082">Matéria</th>
						<td>3º - 1</td>
						<td>2º - 4</td>
						<td>4º - 3</td>
						<td>3º - 1</td>
						<td>2º - 4</td>
						<td>1º - 2</td>
						<td>Descanso</td>
					</tr>
				</table>
			</center>
		</div><br><br>

		<div class="div2">
			<!--Subtitulo 1-->
			<font id="fonte2">Como montar a tabela?</font><br><br>
		</div><br>

		<!--Lista de como fazer um cronograma-->
		<div>
			<p>
				Primeiramente, numere as matérias do seu curso de acordo com a sua ordem de prioridade / dificuldade. Ordene em sua opinião as mais difíceis,<br> com mais tempo de estudo e as de mais facilidade, com menos.<br>
				<small>Na tabela, o item em 1º, é o mais urgente e o item em 4º é o menos urgente.</small>
			</p>
			<p>Contudo, complete a tabela colocando as matérias nos dias da semana de acordo com seus respectivos graus de prioridade.</p>
			<p>O seu tempo deve ser dividido da seguinte maneira: <b>Revisão: 30%, Intervalo: 10% e Matéria: 60%.</b></p>
		</div>

		<!--TABELA DE DIVISÃO DE TEMPO-->
		<div>
			<center>
				<font id="fonte3" size="6">Tabela de Divisão de Tempo</font><br><br>
				<table class="tabela2">
					<tr>
						<th bgcolor="#4B0082">Período Livre</th>
						<th bgcolor="#4B0082">Revisão - 30%</th>
						<th bgcolor="#4B0082">Intervalo - 10%</th>
						<th bgcolor="#4B0082">Matéria - 60%</th>
					</tr>

					<tr><td>1 hora</td><td>15 min</td><td>05 min</td><td>40 min</td></tr>
					<tr><td>2 horas</td><td>35 min</td><td>10 min</td><td>1 hora e 15 min</td></tr>
					<tr><td>3 horas</td><td>50 min</td><td>20 min</td><td>1 hora e 50 min</td></tr>
					<tr><td>4 horas</td><td>1 hora e 10 min</td><td>30 min</td><td>2 horas e 20 min</td></tr>
					<tr><td>5 horas</td><td>1 hora e 40min</td><td>40 min</td><td>2 horas e 40 min</td></tr>
				</table>
			</center>
		</div>

		<p>Matérias de cada turma:</p>
		<p><b>1° ano:</b> Programação I – Hardware – Aplicativos – Fundamentos da Informática <br><b>2° ano:</b> Programação II – Redes de Computadores – Banco de Dados – Análise e Modelagem de Sistemas <br><b> 3° ano:</b> Programação III – Empreendedorismo – Tópicos Avançados em Informática – TCC</p>

		<p>Vamos iniciar um exemplo para compreender melhor. Digamos que um aluno do <b>1° ano</b> tenha <b>5 horas de estudo</b> em determinado dia. <br>Começe numerando suas respectivas matérias:</p>
		<ol>
			<li id="li">Programação I</li>
			<li id="li">Hardware</li>
			<li id="li">Aplicativos</li>
			<li id="li">Fundamentos da Informática</li>
		</ol>

		<p>Logo depois, anotar as matérias de acordo com seu grau de dificuldade:</p>

		<p><b>1º - ________ (Matéria a qual você tem mais dificuldade) <br>2º - ________ <br> 3º - ________ <br> 4º - ________ (Matéria a qual você tem mais facilidade)</b></p>

		<p>Tabela de Exemplo:</p>
		<div>
			<center>
				<table class="tabela">
					<tr>
						<th bgcolor="#4B0082"></th>
						<th bgcolor="#4B0082">Segunda</th>
						<th bgcolor="#4B0082">Terça</th>
						<th bgcolor="#4B0082">Quarta</th>
						<th bgcolor="#4B0082">Quinta</th>
						<th bgcolor="#4B0082">Sexta</th>
						<th bgcolor="#4B0082">Sábado</th>
						<th bgcolor="#4B0082">Domingo</th>
					</tr>
					<tr>
						<th bgcolor="#4B0082">Revisão</th>
						<td>4º - ___</td><td>2º - ___</td><td>1º - ___</td>
						<td>3º - ___</td><td>2º - ___</td><td>1º - ___</td>
						<td>Descanso</td>
					</tr>
					<tr>
						<th bgcolor="#4B0082">Matérias</th>
						<td>1º - ___</td><td>3º - ___</td><td>2º - ___</td>
						<td>1º - ___</td><td>4º - ___</td><td>2º - ___</td>
						<td>Descanso</td>
					</tr>
				</table>
			</center>
		</div>

		<p>No qual você irá preencher nos espaços vazios com o respectivo número da matéria escolhida para estudo. <br><b>Exemplo:</b> Revisão | Segunda-feira | 4° - 3 (aplicativos). </p>

		<p>Por fim, a matéria será dividida com esta determinada duração:</p>

		<!--TABELA DE DIVISÃO-->
		<b style="padding-left: 9%;">Segunda à sábado:</b><br><br>

		<table class="tabela3">
			<tr><th bgcolor="#4B0082">Revisão: 1 hora 40min</th></tr>
			<tr><th bgcolor="#4B0082">Intervalo: 40min</th></tr>
			<tr><th bgcolor="#4B0082">Matéria: 2 horas 40min</th></tr>
		</table>
		<br><br><br><br><br><br>

		<b style="padding-left: 9%;">Domingo:</b><br><br>

		<table class="tabela4">
			<tr><th bgcolor="#4B0082">Descanso</th></tr>
		</table><br><br><br>

		<!--CRÉDITOS-->
		<center>	
			<div class="div">
				<font class="cred">Elisângela e Kerolai ® 2021</font>
			</div>
		</center>
</body>
</html>