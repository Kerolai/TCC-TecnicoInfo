<?php
	$servidor = "localhost"; $usuario = "root"; $senha = ""; $dbname = "tcc";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if(!empty($_GET['estrela'])){
		$estrela = $_GET['estrela'];
		
		//Salvar no banco de dados
		$result_avaliacos = "INSERT INTO avaliacao (qnt_estrela, created) VALUES ('$estrela', NOW())";
		$resultado_avaliacos = mysqli_query($conn, $result_avaliacos);
		
		if(mysqli_insert_id($conn)){
			$_SESSION['msg'] = "Avaliação cadastrada com sucesso!";
			echo "<script>alert('Avaliação cadastrada com sucesso!');</script>";
		}else{
			$_SESSION['msg'] = "Erro ao cadastrar a avaliação!";
			echo "<script>alert('Erro ao cadastrar a avaliação!');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Introdução a Eletrônica | Filtros Elétricos</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="estiloCIE.css">
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
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/materias/.php'"> <img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/materias/.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="22%">
		  	<tr>
		    	<td><img src="imagens/IntEletron.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Filtros Elétricos</b></font></td>
		 	</tr>
		</table><br>

		<div>
			<center><font size="6"><b>Passa Baixa e Passa Alta</b></font></center>
			<p>
				Os <b>filtros elétricos</b> são <b>circuitos</b> utilizados em sistemas eletrônicos no <b>processamento de sinais</b> para <b>seleção</b> de determinada <b>faixa de frequência (Hz)</b> ou na <b>rejeição de ruídos</b> indesejáveis na linha de comunicação ou alimentação.<br><br>
				<ins>Podem ser organizados em <b>ativos e passivos</b>.</ins>
			</p>
			<ul>
				<li><b>Ativos:</b> são concebidos em torno de <b>componentes ativos</b> como transistores e Amplificadores Operacionais agregados a componentes passivos.</li>
				<li><b>Passivos:</b> são aqueles que operam basicamente sobre <b>componentes passivos</b> como resistores, capacitores e indutores.</li>
			</ul>
			<p>
				Outro ponto a observar no que difere um tipo de filtro do outro é com relação ao seu <b>ganho</b>, que é relação entre o sinal de saída pelo sinal de entrada. O ganho de um filtro <b>passivo</b> sempre será <b>menor que 1</b> e o ganho de um filtro <b>ativo</b> pode ser <b>maior que 1</b>.<br><br>
				Existem quatro tipos básicos de filtros caracterizados pelas <b>frequências</b> que rejeitam ou deixam passar:
			</p>
			<ul>
				<li>Passa-baixa</li><li>Passa-alta</li>
				<li>Passa-banda</li><li>Rejeita-banda</li>
			</ul>

			<p>
				Vamos estudar apenas o <b>passa-baixa e passa-alta</b>. O comportamento do filtro elétricos é caracterizado pela sua resposta de frequência em função da <b>frequência de corte (fc)</b> selecionada.
			</p>
			<center><img src="imagens/C6/foto1.jpg" width="23%"></center>
			<p>Acima, ao observar a curva de resposta de um filtro é possível identificar <b>três bandas</b> distintas:</p>
			<ul>
				<li>A <b>banda de passagem (Bp)</b> que corresponde às <b>frequências do sinal de entrada</b> que passam para a saída sem atenuação.</li>
				<li>A <b>banda de transição</b> é a <b>zona entre Bp e Bc</b>, nesta zona o filtro tem uma atuação gradual sobre o sinal de entrada à medida que este se aproxima da Fc.</li>
				<li>A <b>banda de corte (Bc)</b> corresponde à <b>faixa de frequências do sinal de entrada</b> que são rejeitadas pelo filtro determinada pela fc.</li>
			</ul>
			<p>
				A <b>frequência de corte</b> de um filtro é a frequência onde a potência do sinal de saída, é metade da potência do sinal de entrada (-3Db). Uma forma simples de chegar o valor de saída do filtro é sabendo que <b>Vsaída = 70% de Ventrada</b>.<br><br>
				Para entender como funciona um filtro eletrônico é preciso entender que um capacitor além da sua capacitância possuiu outra característica chama da <b>reatância capacitiva</b>. Que varia de acordo com a frequência do sinal que é aplicado sobre o capacitor. Se a <b>frequência for baixa, a reatância capacitiva será alta</b> e caso a <b>frequência seja alta a reatância capacitiva será baixa</b>.<br><br>
				Assim na presença de sinais de baixa frequência o capacitor tende a <b>aumentar</b> sua reatância capacitiva e bloqueá-lo e o contrário ocorre na presença de sinais de <b>altas frequências</b>.<br><br>
				<ins>Podemos calcular a <b>reatância capacitiva (Rc)</b> utilizando o cálculo abaixo:</ins>
			</p>
			<img src="imagens/C6/foto2.jpg" width="19%" style="padding-left: 9%;">

			<p>
				Assim o capacitor é capaz de <b>bloquear ou permitir a passagem de sinais</b> em uma determinada <b>faixa de frequência</b>. Em conjunto com um <b>resistor</b>, que tem seu valor tomando como referência a Rc do capacitor em função da frequência desejada, é possível construir um filtro eletrônico especifico para determinada faixa de frequência.<br><br>
				<ins>A expressão abaixo define a <b>frequência de corte do filtro (Fc)</b>:</ins>
			</p>
			<img src="imagens/C6/foto3.jpg" width="19%" style="padding-left: 9%;">

			<p>
				Para analisar os circuitos abaixo vamos considerar apenas o comportamento do capacitor. Partindo do princípio que o capacitor se comporta como um <b>circuito fechado</b> na presença de sinais de <b>alta frequência</b> e como um <b>circuito aberto</b> na presença de sinais de <b>baixa frequência</b> fica fácil compreender o funcionamento de cada arranjo.
			</p>
			<center><img src="imagens/C6/foto4.jpg" width="23%"></center>

			<p>
				No filtro <b>passa-baixa</b> os sinais de alta frequência são escoados para a <b>terra</b> e restante encontra caminho rumo a <b>saída do circuito</b>.<br><br>
				No filtro <b>passa-alta</b> o capacitor que atua como um <b>circuito aberto</b> na presença de sinais de <b>baixa frequência</b> permite a passagem apenas dos sinais de <b>alta frequência</b> que encontram o caminho de menor resistência na <b>saída do circuito</b>.
			</p>
		</div><br><br>

		<div class="est">
			<fieldset class="estre">
				<h2 style="color: white">Avalie-nos!</h2><br>
				<span style="color: white">
					<?php
						if(isset($_SESSION['msg'])){
							echo $_SESSION['msg']. "<br><br>";
						}
					?>
				</span>
				<form method="GET" enctype="multipart/form-data">
					<div class="estrelas">
						<input type="radio" id="vazio" name="estrela" value="" checked>
							
						<label for="estrela_um"><i class="fa"></i></label>
						<input type="radio" id="estrela_um" name="estrela" value="1">
							
						<label for="estrela_dois"><i class="fa"></i></label>
						<input type="radio" id="estrela_dois" name="estrela" value="2">
							
						<label for="estrela_tres"><i class="fa"></i></label>
						<input type="radio" id="estrela_tres" name="estrela" value="3">
							
						<label for="estrela_quatro"><i class="fa"></i></label>
						<input type="radio" id="estrela_quatro" name="estrela" value="4">
							
						<label for="estrela_cinco"><i class="fa"></i></label>
						<input type="radio" id="estrela_cinco" name="estrela" value="5">
						<br><br>
						<input type="submit" value="Avaliar" class="bot">
					</div>
				</form>
			</fieldset>
		</div><br><br>

		<!--CRÉDITOS-->
		<div class="div">
			<p class="cred">Elisângela e Kerolai ® 2021</p>
		</div>
</body>
</html>