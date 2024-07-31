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
	<title>TekMind | Matérias | Introdução a Eletrônica | Queda de Tensão sobre Resistores</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="estiloCIE.css">
	<style type="text/css">
		.tabela2 {
			border: 2px solid #4B0082;
			border-collapse: collapse;
		}
		.tabela2 td{
			border-right: 2px solid black;
			padding: 5px;
		}
	</style>
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
		<table style="margin-left: 5%;" width="44%">
		  	<tr>
		    	<td><img src="imagens/IntEletron.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Queda de Tensão sobre Resistores</b></font></td>
		 	</tr>
		</table><br>

		<div>
			<p>
				Os <b>resistores</b> são componentes elétricos discretos, que exercem <b>força contrária</b> a passagem do fluxo de elétrons OU corrente elétrica (I). Como resultado ocorre a <b>conversão de energia elétrica em energia térmica</b>, assim em função da <b>diminuição do fluxo de corrente</b> elétrica são capazes de alterar a diferença de potencial em determinado ponto de um circuito.<br><br>
				Os resistores podem compor arranjos de associações em <b>série, paralelo ou mistos</b> de acordo com a sua distribuição espacial. Esse arranjo resulta em uma <b>Resistência Equivalente (Req)</b>.
			</p>
			<center><img src="imagens/C5/foto1.jpg" width="22%"></center>

			<p>Nessa configuração, na ASSOCIAÇÃO EM PARALELO, a corrente elétrica divide-se ao passar pelo circuito e a tensão é a mesma sobre todo o arranjo.</p>
			<center><img src="imagens/C5/foto2.jpg" width="19%"></center>

			<p>Para calcular a Resistência Equivalente (Req) na associação de resistores em paralelo é feita:</p>

			<center>
				<table style="text-align: center; width: 60%;" class="tabela2">
					<tr>
						<td><span>Para n resistores de valores diferentes.</span></td>
						<td><span>Apenas dois Resistores.</span></td>
						<td><span>Para n resistores de mesmo valor</span></td>
					</tr>
					<tr>
						<td><img src="imagens/C5/foto3.jpg" width="300"></td>
						<td><img src="imagens/C5/foto4.jpg" width="200"></td>
						<td><img src="imagens/C5/foto5.jpg" width="130"></td>
					</tr>
				</table>
			</center>
			<p>
				Conhecendo Resistência Equivalente do arranjo e sabendo que o resistor dissipa parte da corrente elétrica que passa sobre ele se observado a 1ª lei de Ohm onde V = R*I podemos calcular e <b>queda de tensão</b> sobre os resistores e determinar a <b>tensão</b> em diferentes pontos do circuito.<br><br>
				Observando o circuito a seguir sabemos que sua Req=315ohm e V=5, utilizando a expressão V = R*I chegamos a corrente consumida pelo circuito, I=15,873mA ou 0,015A. Com essas informações, utilizando a mesma expressão é possível calcular a queda de tensão sobre cada resistor do circuito.<br><br>
				Lembrando que nessa configuração os resistores são percorridos pela MESMA corrente elétrica e a tensão elétrica aplicada cai gradativamente sobre cada resistor ao longo do circuito a imagem a seguir se torna autoexplicativa.
			</p>
			<center>
				<img src="imagens/C5/foto6.jpg" width="30%"><br><br>
				<table style="text-align: center; width: 50%;" class="tabela2">
					<tr>
						<td><span>Observe que cada resistor retira da linha de alimentação uma parcela de energia e a dissipa em forma de calor. O que resta é transferido ao resistor seguinte no arranjo que promove nova queda e assim consecutivamente</span></td>
					</tr>
				</table>
			</center>
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