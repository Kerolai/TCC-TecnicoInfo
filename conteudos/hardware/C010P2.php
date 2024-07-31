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
			$_SESSION['msg'] = "<script>alert('Erro ao cadastrar a avaliação!');</script>";
			echo "<script>alert('Erro ao cadastrar a avaliação!');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Hardware | Memória RAM</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="estiloC.css">
</head>
<body>
	<!--MENU-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; left: 38%; font-size: 65px;">Hardware</font>
			
	<!--LOGO-->
		<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
	</div>
	<br><br><br><br>
	<br><br><br>

	<!--BOTÃO PARA VOLTAR-->
		<div>
			<table style="margin-left: 2%;" width="7%">
			  	<tr>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C010P1.php'"> <img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C010P1.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="23%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Memória RAM</b></font></td>
		 	</tr>
		</table><br>

		<div>
			<center><font size="6"><b>Módulos de Memória</b></font></center>
			<p>
				Antigamente, a memória RAM era formada por chips discretos e na sua instalação ou expansão, o técnico tinha que manipular os chips individualmente tendo sérios riscos de uma incorreta instalação.
			</p>
			<center><img src="imagens/C10/foto1.1.jpg" width="21%"></center>
			<p>
				Como <b>não</b> eram utilizados <b>módulos de memória</b> nas máquinas pioneiras, os chips de memória tinham que serem instalados diretamente na <b>placa-mãe</b>, encaixados individualmente em <b>colunas de soquetes</b> (ou soldados), onde cada coluna formava um <b>banco de memória</b>.<br><br>
				Sendo assim, os fabricantes começaram a <b>soldar os chips</b> de memória em pequenas PCBs (Placas de circuito impresso), denominados <b>módulos de memória</b>. Além disso, a manipulação ficou mais simples e a probabilidade de instalação incorreta foi reduzida.<br><br>
 				<b style="font-size: 19px;">- Principais modelos de módulos de memória já lançados:</b>
			</p>
			<center>
				<table class="tabela" width="40%">
					<tr>
						<th>Nome</th>
						<th>Bits</th>
						<th>Contatos</th>
						<th>Memória</th>
					</tr>
					<tr><th>SIPP</th><td>8</td><td>30</td><td>FPM</td></tr>

					<tr><th>SIMM-30</th><td>8</td><td>30</td><td>FPM</td></tr>

					<tr><th>SIMM-72</th><td>32</td><td>72</td><td>FPM ou EDO</td></tr>

					<tr><th>DIMM</th><td>64</td><td>168</td><td>SDRAM</td></tr>
					
					<tr><th>DIMM</th><td>64</td><td>168</td><td>SDRAM</td></tr>
					
					<tr><th>DDR-DIMM</th><td>64</td><td>184</td><td>DDR-SDRAM</td></tr>
					
					<tr><th>DDR2-DIMM</th><td>64</td><td>240</td><td>DDR2-SDRAM</td></tr>
					
					<tr><th>DDR3-DIMM</th><td>64</td><td>240</td><td>DDR3-SDRAM</td></tr>
					
					<tr><th>DDR4-DIMM</th><td>64</td><td>284</td><td>DDR4-SDRAM</td></tr>
				</table><br><br>

			<font size="6"><b>Módulo SIPP (<i>Single Inline Pin Package</i>)</b></font></center>
			<p>
				Pioneira na ideia de se criar módulos para se obter mais <b>facilidade</b> durante a <b>manipulação</b>, porém utilizava o sistema de “perninha” presentes nos chips de memória, mesmo que ele já fosse fixado a placa. Entretanto, este projeto não durou muito e logo foi substituído pelo <b>módulo <i>SIMM</i></b>.
			</p>
			<center><img src="imagens/C10/foto2.1.jpg" width="33%"></center><br><br>

			<center><font size="6"><b>Módulo SIMM (<i>Single Inline Memory Module</i>)</b></font></center>
			<p>
				Neste módulo, os chips de memória são fixados em uma PCB (placa de circuito regular) que possui uma <b>fila de contatos elétricos</b> dispostos <b>simetricamente</b> nos dois lados. Ademais, este possui módulos de 30 e 72 vias.
			</p>
			<center><img src="imagens/C10/foto3.1.jpg" width="30%"></center><br>
			<center><img src="imagens/C10/foto4.1.jpg" width="30%"></center><br><br>

			<center><font size="6"><b>Módulo DIMM (<i>Dual Inline Memory Module</i>)</b></font></center>
			<p>
				O módulo DIMM possuí os seus contatos de forma <b>independente</b>, o qual exigiu do soquete um redesenho onde os módulos são devidamente encaixados.  
			</p>
			<center><img src="imagens/C10/foto5.1.jpg" width="27%"></center><br><br>

			<center><font size="5"><b>Módulo DDR-DIMM (<i>Double Data Rate - Dual Inline Memory Module</i>)</b></font></center>
			<p>Os chips com tecnologia DDR são encontrados em módulos no formato DIMM, nos seguintes modelos:</p>
			<ul>
				<li>DDR (módulos com 184 pinos);</li>
				<li>DDR2, DDR3 (módulos com 240 pinos);</li>
				<li>DDR4 (módulos com 284 pinos);</li>
			</ul>
			<center><img src="imagens/C10/foto6.1.jpg" width="30%"></center><br><br>

			<center><font size="6"><b>Classificação dos Módulos de Memória</b></font></center>
			<p>
				Os módulos de memória DIMM usam a classificação <b>PCXXX</b>, onde o “XXX” é o <b><i>clock</i> máximo suportado</b> pelos chips de memória. Existem basicamente três tipos de módulos DIMM: <b>PC66, PC100 e PC133</b>. E a classificação “DDRxxx” é para os <b>chips de memória</b>.<br><br>
				Os módulos de memória <b>DDR-DIMM, DDR2-DIMM, DDR3-DIMM e DDR4-DIMM</b> são classificados de acordo com a <b>largura de banda</b> proporcionada pela <b>memória</b>.<br><br>
				Segue abaixo o formato de classificação dos módulos DDR:
			</p>
			<ul>
				<li>DDR-DIMM – Formato PCXXXX</li> <li>DDR2-DIMM – Formato PC2-XXXX</li>
				<li>DDR3-DIMM – Formato PC3-XXXXX</li> <li>DDR4-DIMM – Formato PC4-XXXXX</li>
			</ul><br>
			
			<center>
				<table class="tabela" width="50%">
					<tr>
						<th>Módulo</th><th>Memória</th><th><i>Clock</i> Rotulado</th><th><i>Clock</i> Real</th><th>Largura de Banda</th>
					</tr>
					<tr><th>PC66</th><td>SDRAM</td><th>66 Mhz</th><td>66 Mhz</td><th>528 MB/s</th></tr>
					
					<tr><th>PC100</th><td>SDRAM</td><th>100 Mhz</th><td>100 Mhz</td><th>800 MB/s</th></tr>
					
					<tr><th>PC133</th><td>SDRAM</td><th>133 Mhz</th><td>133 Mhz</td><th>1064 MB/s</th></tr>
					
					<tr><th>PC1600</th><td>DDR-200</td><th>200 Mhz</th><td>100 Mhz</td><th>1600 MB/s</th></tr>
					
					<tr><th>PC2100</th><td>DDR-266</td><th>266 Mhz</th><td>133 Mhz</td><th>2133 MB/s</th></tr>
					
					<tr><th>PC2700</th><td>DDR-333</td><th>333 Mhz</th><td>166 Mhz</td><th>2666 MB/s</th></tr>
					
					<tr><th>PC2100</th><td>DDR-266</td><th>266 Mhz</th><td>133 Mhz</td><th>2133 MB/s</th></tr>
					
					<tr><th>PC3200</th><td>DDR-400</td><th>400 Mhz</th><td>200 Mhz</td><th>3200 MB/s</th></tr>
					
					<tr><th>PC2-3200</th><td>DDR2-400</td><th>400 Mhz</th><td>200 Mhz</td><th>3200 MB/s</th></tr>
					
					<tr><th>PC2-4200/PC2-4300</th><td>DDR2-533</td><th>533 Mhz</th><td>266 Mhz</td><th>4266 MB/s</th></tr>
					
					<tr><th>PC2-5300/PC2-5400</th><td>DDR2-666</td><th>666 Mhz</th><td>333 Mhz</td><th>5333 MB/s</th></tr>
					
					<tr><th>PC2-6400</th><td>DDR2-800</td><th>800 Mhz</th><td>400 Mhz</td><th>6400 MB/s</th></tr>
					
					<tr><th>PC2-8500</th><td>DDR2-1067</td><th>1066 Mhz</th><td>533 Mhz</td><th>8500 MB/s</th></tr>
					
					<tr><th>PC3-6400</th><td>DDR3-800</td><th>800 Mhz</th><td>400 Mhz</td><th>6400 MB/s</th></tr>
					
					<tr><th>PC3-10600</th><td>DDR3-1333</td><th>1333 Mhz</th><td>666 Mhz</td><th>10666 MB/s</th></tr>
					
					<tr><th>PC3-12800</th><td>DDR3-1600</td><th>1600 Mhz</th><td>800 Mhz</td><th>12800 MB/s</th></tr>
					
					<tr><th>PC3-14900</th><td>DDR3-1866</td><th>1866 Mhz</th><td>933 Mhz</td><th>14933 MB/s</th></tr>
					
					<tr><th>PC3-17000</th><td>DDR3-2133</td><th>2133 Mhz</th><td>1066 Mhz</td><th>17066 MB/s</th></tr>
					
					<tr><th>PC4-12800</th><td>DDR4-1600</td><th>800 Mhz</th><td>400 Mhz</td><th>12800 MB/s</th></tr>
					
					<tr><th>PC4-14900</th><td>DDR4-1866</td><th>933 Mhz</th><td>233 Mhz</td><th>14933 MB/s</th></tr>
					
					<tr><th>PC4-17000</th><td>DDR4-2133</td><th>1066 Mhz</th><td>266 Mhz</td><th>17066 MB/s</th></tr>
					
					<tr><th>PC4-19200</th><td>DDR4-2400</td><th>1200 Mhz</th><td>300 Mhz</td><th>19200 MB/s</th></tr>
					
					<tr><th>PC4-21333</th><td>DDR4-2666</td><th>1333 Mhz</th><td>333 Mhz</td><th>21333 MB/s</th></tr>
					
					<tr><th>PC4-23466</th><td>DDR4-2933</td><th>1466 Mhz</th><td>366 Mhz</td><th>23466 MB/s</th></tr>
					
					<tr><th>PC4-25600</th><td>DDR4-3200</td><th>1600 Mhz</th><td>400 Mhz</td><th>25600 MB/s</th></tr>
				</table>
			</center>
		</div><br><br><br><br>

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