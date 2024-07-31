<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Hardware | Atividades | Placa-Mãe</title>
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
		<table style="margin-left: 5%;" width="34%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Atividades - Placa-Mãe</b></font></td>
		 	</tr>
		</table><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="QuestHard/Questões 003 - Placa Mãe.docx" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar questões</b></font>
			</a>
		</div>
		
	<!--QUESTÕES-->
	<form method="POST" action="R003.php">
		<article class="questoes">
			<div>
				<p>
					<label><b>1. Complete a frase corretamente:<br><br>
					“A placa-mãe é a _ _ _ _ _ placa de circuito impresso dentro do computador e serve como base para a _ _ _ _ _ _ _ de todos os dispositivos”.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt1" required="">a) Maior – alinhamento<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt2" required="">b) Maior – conexão<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt3" required="">c) Menor – conexão<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt4" required="">d) Menor – alinhamento<br>
					&nbsp;&nbsp;<input type="radio" name="perg1" value="opt5" required="">e) Maior – regulagem<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>2. Indique a única alternativa correta:</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt1" required="">a) O circuito regulador de tensão é um componente responsável pela regulagem e conversão das tensões recebidas da fonte de alimentação.<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt2" required="">b) O capacitor é o componente responsável pelo armazenamento de dados recebidos pelo processador.<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt3" required="">c) A ponte norte possui um chip mais simples se comparado com o chip da ponte sul, a qual fica responsável de componentes como, barramentos PCI <i>Express</i> ou AGP e <i>chipset</i> de vídeo <i>Onboard</i>.<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt4" required="">d) Os módulos de memória geralmente são soldados a placa, o que resulta em diversos danos a placa.<br>
					&nbsp;&nbsp;<input type="radio" name="perg2" value="opt5" required="">e) O modelo ZIF é o padrão que utiliza uma armadura de metal que envolve e protege o processador da pressão que o dissipador de calor exerce.<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>3. Em relação aos conectores para ventoinhas, complete a frase de corretamente.<br><br>
					“As placas-mãe tem um conector de _ _ _ _ _ _ pinos para o cooler do processador e alguns conectores de três ou quatro pinos para ventoinhas _ _ _ _ _ _ _ _ _ _, geralmente fixadas no gabinete do computador”.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt1" required="">a) Oito – principais<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt2" required="">b) Cinco – auxiliares<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt3" required="">c) Quatro – auxiliares<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt4" required="">d) Dois – principais<br>
					&nbsp;&nbsp;<input type="radio" name="perg3" value="opt5" required="">e) Seis – principais<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>4. Sabendo que o capacitor é o componente responsável pelo armazenamento de pequenas quantidades de energia, indique a alternativa a qual corresponde aos principais problemas que comumente ocorre nesses elementos.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt1" required="">a) Estufamento e derretimento dos capacitores.<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt2" required="">b) Vazamento e derretimento dos capacitores.<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt3" required="">c) Vazamento e solidificação dos capacitores.<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt4" required="">d) Estufamento e vazamento dos capacitores.<br>
					&nbsp;&nbsp;<input type="radio" name="perg4" value="opt5" required="">e) Nenhuma.<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>5. O <i>chipset</i> é de suma importância para a placa-mãe, pois sem ele tudo seriam só componentes e não teriam utilidade alguma. Dessa forma, indique as duas pontes a qual a placa comporta.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt1" required="">a) Ponte Noroeste e Sul<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt2" required="">b) Ponte Sul e Norte<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt3" required="">c) Ponte Sudoeste e Nordeste<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt4" required="">d) Ponte Sul e Sudoeste<br>
					&nbsp;&nbsp;<input type="radio" name="perg5" value="opt5" required="">e) Nenhuma<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>6. Sabendo que a placa possui pelo menos dois conectores de alimentação. Cite as possíveis quantidades de pinos que um conector para a alimentação do processador pode utilizar.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt1" required="">a) De seis ou oito pinos.<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt2" required="">b) De quatro a doze pinos.<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt3" required="">c) De doze a vinte pinos.<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt4" required="">d) De quatro ou oito pinos.<br>
					&nbsp;&nbsp;<input type="radio" name="perg6" value="opt5" required="">e) Nenhuma.<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>7. Em relação às camadas de uma placa de circuito impresso (PCI), podemos encontrar um total de:</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt1" required="">a) Quatro a dez camadas.<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt2" required="">b) Dez a vinte camadas.<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt3" required="">c) Seis a vinte camadas.<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt4" required="">d) Oito a dez camadas.<br>
					&nbsp;&nbsp;<input type="radio" name="perg7" value="opt5" required="">e) Nenhuma.<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>8. Complete a frase:<br><br>
					“O chip da ponte Sul realiza o controle dos _ _ _ _ _ _ _ _ _ _ _ e faz ponte entre o barramento PCI e o barramento _ _ _”.</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt1" required="">a) Capacitores – ISA<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt2" required="">b) Periféricos – AGP<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt3" required="">c) Periféricos - ISA<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt4" required="">d) Capacitores - AGP<br>
					&nbsp;&nbsp;<input type="radio" name="perg8" value="opt5" required="">e) Nenhuma<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>9. A BIOS possui um software básico na sua composição, a fim de checar com êxito os dispositivos instalados na máquina. Dessa forma, para que o mesmo mantenha as configurações do CMOS é necessário somente, que:</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt1" required="">a) Desinstalar e atualizar as configurações<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt2" required="">b) Baixe um software mais atualizado<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt3" required="">c) Reiniciar a máquina<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt4" required="">d) Realize a troca do dispositivo<br>
					&nbsp;&nbsp;<input type="radio" name="perg9" value="opt5" required="">e) Corte o fornecimento de energia<br><br>
				</p>
			</div>
			<div>
				<p>
					<label><b>10. Os slots de memória servem para a instalação dos módulos de memória, além disso, o tipo e a quantidade de slots de memória que a placa-mãe tem, indicam o:</b></label><br><br>

					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt1" required="">a) O modelo da memória e a quantidade mínima que pode ser instalada no computador.<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt2" required="">b) Tipo de memória e a quantidade máxima que pode ser instalada no computador.<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt3" required="">c) A quantidade mínima e máxima que pode ser instalada no computador.<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt4" required="">d) A quantidade mínima de memória que pode ser instalada no computador.<br>
					&nbsp;&nbsp;<input type="radio" name="perg10" value="opt5" required="">e) Tipo de memória e a quantidade mínima que pode ser instalada no computador.<br><br>
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