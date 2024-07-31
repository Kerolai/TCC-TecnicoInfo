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
	<title>TekMind | Matérias | Introdução a Eletrônica | Resistência</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="estiloCIE.css">
	<style type="text/css">
		.resumo {
			border: 2px solid #4B0082;
			border-radius: 10px;
			width: 45%;
			margin-left: 27%;
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
		<table style="margin-left: 5%;" width="19%">
		  	<tr>
		    	<td><img src="imagens/IntEletron.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Resistência</b></font></td>
		 	</tr>
		</table><br>

		<div>
			<center><font size="6"><b>Resistores</b></font></center>
			<p>
				Exercem <b>força contrária</b> a passagem do fluxo de elétrons. Como resultado ocorre a <b>conversão de energia elétrica em energia térmica</b>, assim em função da diminuição do fluxo de corrente elétrica são capazes de <b>alterar a diferença de potencial</b> em determinado ponto de um circuito.<br><br>
				Sua unidade de resistência é <b>Ω ou ohm</b>
			</p>
			<center><font style="font-size: 18px;">1000 = 1KΩ<br>1.000.000Ω = 1000KΩ = 1MΩ</font></center><br><br>

			<center><font size="6"><b>Resistência Equivalente (Req)</b></font></center>
			<p>É o resultado da <b>simplificação</b> de circuitos elétricos compostos pela <b>associação</b> de resistores.</p><br>

			<center><font size="5"><b>Associação de Resistores em Série</b></font><br>
			<img src="imagens/C3/foto1.jpg" width="22%"></center>
			<p>
				Os resistores são percorridos pela <b>MESMA corrente</b> elétrica e o potencial elétrico que é aplicado sobre os terminais do circuito é distribuído entre os resistores. A tensão aplicada cai ao longo do circuito.<br><br>
				Podemos encontrar a Req com o cálculo abaixo:
			</p>
			<center><img src="imagens/C3/foto2.jpg" width="22%"></center><br>

			<center><font size="5"><b>Associação de Resistores em Paralelo</b></font><br>
			<img src="imagens/C3/foto3.jpg" width="12%"></center>
			<p>
				Os resistores são ligados ao <b>mesmo potencial</b> elétrico e a <b>corrente</b> elétrica que atravessa cada resistor será <b>diferente</b> caso os resistores tenham resistências elétricas diferentes.<br><br>
				Podemos calcular a Req em resistores em paralelo com o seguinte cálculo:
			</p>
			<center><img src="imagens/C3/foto4.jpg" width="20%"></center><br>
			<p>Existe outra opção para calcular a Req, mas com apenas <b>dois resistores</b> de cada de vez.</p>
			<center><img src="imagens/C3/foto5.jpg" width="16%"></center><br>
			<p>Se todos os resistores possuem o <b>mesmo valor</b> o cálculo fica mais simples:</p>
			<center><img src="imagens/C3/foto6.jpg" width="10%"></center><br><br>

			<fieldset class="resumo">
				<center><font size="6"><b>Resumo</b></font><br><br>
					<font size="5"><b>Na ligação em série:</b></font></center><br>
						<ul>
							<li>As resistências somam-se;</li>
							<li>Os potenciais elétricos somam-se;</li>
							<li>A corrente elétrica é igual para todos os resistores;</li>
							<li>A resistência elétrica equivalente será sempre maior do que a maior das resistências.</li>
						</ul>

					<center><font size="5"><b>Na ligação em paralelo:</b></font></center><br>
						<ul>
							<li>A corrente elétrica divide-se de acordo com a resistência elétrica de cada ramo;</li>
							<li>Todos os resistores encontram-se ligados sob o mesmo potencial elétrico;</li>
							<li>A resistência elétrica equivalente é menor que a menor das resistências.</li>
						</ul>
			</fieldset>
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