<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Hardware | Atividades | Tipos de computadores e seus componentes</title>
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
	<br><br><br><br><br><br><br>

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
		<table style="margin-left: 5%;" width="70%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Atividades - Tipos de computadores e seus componentes</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="QuestHard/Questões 001 - Tipos de Computadores e seus componentes.docx" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar questões</b></font>
			</a>
		</div>
		
	<!--QUESTÕES-->
	<form method="POST" action="R001.php">
		<article class="questoes">
			<div>
				<p>
					<label><b>1. Complete a frase:<br><br>
					“A _ _ _ _ _ _ _ _ _ _ _ é o termo usado para descrever o conjunto de ciências relacionadas a _ _ _ _ _ _ _ _ _ _ _ _ _, transmissão e processamentos da informação em meios<br> _ _ _ _ _ _ _ _”.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt1" required="">a) Informática – dados – analógico<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt2" required="">b) Informática – armazenamento – digitais<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt3" required="">c) Dados – automática – informática<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt4" required="">d) Informática – computador – analógico<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt5" required="">e) Informação – dados – digitais<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>2. Complete corretamente a frase: <br><br>
					“O computador é uma máquina construída por uma série de componentes e _ _ _ _ _ _ _ _ _ eletrônicos, os quais são capazes de receber, armazenar, processar e transmitir as informações”.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt1" required="">a) Informações<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt2" required="">b) Equipamentos<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt3" required="">c) Circuitos<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt4" required="">d) Processar<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt5" required="">e) Armazenamentos<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>3. Os supercomputadores possuem:</b></label><br><br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt1" required="">a) Baixíssimo processamento e grande capacidade de memória<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt2" required="">b) Altíssimo processamento e pequena capacidade de memória<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt3" required="">c) Altíssimo processamento e utilizados para prover serviços na internet<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt4" required="">d) Altíssimo processamento e grande capacidade de memória<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt5" required="">e) Baixíssimo processamento e utilizados para prover serviços na internet<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>4. Assinale a alternativa correta. Verdadeiro ou falso:<br><br>
					I)	O hardware é a parte física do computador.<br>
					II)	A memória RAM não é volátil.<br>
					III) Um grande exemplo de periféricos de entrada é monitor.<br>
					IV)	O processador é responsável por processar os dados e fornecer a informação desejada.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt1" required="">a) V – F - F – V<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt2" required="">b) V – V – V – V<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt3" required="">c) F – V – V – F<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt4" required="">d) F – F – F – V<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt5" required="">e) V – F – V – F<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>5. O que são as máquinas com a lógica predeterminada?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt1" required="">a) Máquinas que admitem programação e são destinadas a tarefas pessoais.<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt2" required="">b) Máquinas que admitem programação.<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt3" required="">c) Máquinas com algoritmos intrínsecos aos seus circuitos, mas que admitem programação.<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt4" required="">d) Máquinas destinada a tarefas de entretenimento.<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt5" required="">e) Máquinas com o algoritmo intrínseco aos seus circuitos.<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>6. A denominação para o grupo que contêm dispositivos, tais como, Notebooks, Netbooks, Ultrabooks, Tablets e Smartphones, é:</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt1" required="">a) Palmtop<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt2" required="">b) Computador de mesa<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt3" required="">c) Computador de médio porte<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt4" required="">d) Computadores portáteis<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt5" required="">e) Supercomputadores<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>7. As aplicações dos computadores na área da educação, seriam: </b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt1" required="">a) Para redes sociais, músicas, jogos, entre outros.<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt2" required="">b) Ensino à distância, bibliotecas digitais, aulas, entre outros.<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt3" required="">c) Projetos em 3D, cálculos complexos, entre outros.<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt4" required="">d) Diagnósticos de doenças, monitoramento de pacientes e cirurgia auxiliadas por computador.<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt5" required="">e) Sistema de pagamento, estoque e cobranças.<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>8. Assinale a alternativa correta. Verdadeiro ou falso.<br><br>
					I) A fonte de alimentação é responsável por fornecer energia elétrica aos componentes do computador.<br>
					II) O disco rígido, igualmente a memória RAM, não consegue manter arquivado o conteúdo após o computador ser totalmente desligado.<br>
					III) A velocidade do HD é medida em RPM.<br>
					IV) A função da placa de rede é estabelecer comunicação de um computador para outros, formando assim uma rede.
					</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt1" required="">a) V – V – V – V<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt2" required="">b) V – F – F – V<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt3" required="">c) V – F – V – V<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt4" required="">d) F – F – F – F<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt5" required="">e) F – F – V – V<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>9. Qual é o componente que recebe sinal sonoro oriundo do computador, convertendo em áudio analógico para ser reproduzido em outros equipamentos digitais?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt1" required="">a) Placa de som<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt2" required="">b) Placa de rede<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt3" required="">c) Fones de ouvido<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt4" required="">d) Placas de vídeos<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt5" required="">e) Placa mãe<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>10. Quais as principais vantagens ao se utilizar um computador?</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt1" required="">a) Versatilidade – inconfiável - digital<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt2" required="">b) Confiabilidade – aumento na produtividade – versatilidade<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt3" required="">c) Atraso na produtividade – universal – versatilidade<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt4" required="">d) Confiabilidade – digital – atraso na produtividade<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt5" required="">e) Inconfiável – digital – universal<br><br>
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