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
	<title>TekMind | Matérias | Hardware | Placas gráficas</title>
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
		<table style="margin-left: 5%;" width="23%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Placas gráficas</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_hw/Hardware - C007 - Placas Gráficas.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div>

	<!--CONTEÚDO-->
		<div>
			<center><font size="6"><b>Introdução</b></font></center>
			<p>
				A <b>placa de vídeo</b> (ou gráfica), é de suma importância quando se trata de transmitir imagens com uma boa qualidade ao monitor. Esse componente possui um <b>processador</b> (GPU) e uma <b>memória</b>, a qual é responsável pela funcionalidade do <b>processamento gráfico</b>.<br><br>
				Sendo assim, quanto mais <b>potente</b> for, mais <b>frames por segundos</b> (fps) serão exibidos e com uma <b>melhor resolução</b> na tela do computador.
			</p>
			<center><img src="imagens/C7/foto1.jpg" width="25%"></center>
			<p>
				<b>Curiosidades:</b> Caso o objetivo for somente realizar tarefas básicas como, assistir vídeos, acessar sites, rede social, entre outras, uma placa <b><i>OnBoard</i></b>, que vem junto ao computador já resolve, mas se o alvo é mais <b>“pesado”</b> como, jogos e edições de imagens e vídeo é recomentado uma <b>placa de vídeo</b> (<i>OffBoard</i>).<br><br>
				Ademais, o padrão de placas <b>mais usado é o SVGA</b> (<i>Super Video Graphics Array</i>), o qual é capaz de suportar altas resoluções com as 4K, que aumentam o desempenho dos jogos. E também o padrão <b>VGA</b> (<i>Video Graphics Array</i>), que é utilizada em <b>resoluções menores</b>.
			</p><br>

			<center><font size="6"><b>Funcionamento</b></font></center>
			<p>
				O <b>chip gráfico</b> (ou GPU) executa uma sequencia de etapas para que as imagens sejam exibidas no monitor do computador, as quais envolvem a elaboração de elementos gráficos, aplicação de tons de cores e inserção de efeitos.<br><br>
				E os recursos que as GPUs contam para a execução, são:<br><br>

				<b style="font-size: 19px;"><i>Pixel Shader:</i></b><br><br>
				Conjunto de instruções utilizado para o processamento de efeitos de renderização de imagem, ou seja, um programa que gera efeitos com base em pixels.<br><br>
				<b style="font-size: 19px;"><i>Vertex Shader:</i></b><br><br>
				Software que trabalha com estrutura formadas por vértices, com o intuito de modelar objetos que serão posteriormente exibidos.<br><br>
				<b style="font-size: 19px;"><i>Render Output Unit (ROP):</i></b><br><br>
				Manipula os dados armazenados na memória de vídeo transformado em um conjunto de pixels, as quais formarão as imagens que serão mostradas.<br><br>
				<b style="font-size: 19px;"><i>Texture Mapping Unit (TMU):</i></b><br><br>
				Rotaciona e redimensiona bitmaps (imagem formada por um conjunto de pixels), afim de que seja aplicada uma textura sob determinada superfície.
			</p><br>

			<center><font size="6"><b>Overclock</b></font></center>
			<p>
				Artificio usado para <b>aumentar</b> o calor do <i>clock</i> placa de vídeo, <b>forçando-a ampliar sua potência</b>, mas que pode danifica-la a médio e longo prazo, uma vez que esse componente <b>não</b> foi produzido para trabalhar nessa <b>intensidade</b>.
			</p><br>

			<center><font size="6"><b>Modelos</b></font></center>
			<p>Existem diversos modelos, mas iremos citar algumas as quais são muito cobiçadas no mercado. São elas:</p>
			<ul>
				<li><i>Geforce</i></li>
				<li><i>Radeon</i></li>
			</ul><br>

			<center><font size="6">Geforce GTX 1050</font></center>
			<center><img src="imagens/C7/foto2.jpg" width="25%"></center>
			<p>
				Seu desempenho quanto a jogos online é consideravelmente bom, pois garante uma ótima memória (2 GB GDDR5) e velocidade há jogos como <i>League of Legends e Fortnite</i>, sem exigir muito do computador. Além disso, pode rodar títulos em <i>Full HD</i> 1080p e sincronizar o monitor com a GPU para evitar erros entre os componentes, graças a sua tecnologia <i>G-Sync</i>.
			</p><br>

			<center><font size="6">Geforce GTX 1050TI</font></center>
			<center><img src="imagens/C7/foto3.jpg" width="25%"></center>
			<p>
				A tecnologia é útil para gabinetes mais compactos e possuí memória de 4GB GDDR5. Além disso, é ótimo em para rodar games com GTA V e <i>Battlefield</i> 1.
			</p><br>

			<center><font size="6">Geforce GTX 1060</font></center>
			<center><img src="imagens/C7/foto4.jpg" width="25%"></center>
			<p>
				O seu desempenho é mais avançado, pois possuí uma memória de 3GB ou 6GB GDDR5. Além disso, oferece um ótimo custo benefício e roda jogos com taxas superiores a 100 frames por segundo em <i>Full HD</i>, sem <i>lags</i>.
			</p><br>

			<center><font size="6">Geforce GTX 1070</font></center>
			<center><img src="imagens/C7/foto5.jpg" width="25%"></center>
			<p>
				O componente GTX 1070 possuí um alto desempenho e é indicado que os demais componentes tenham a mesma envergadura, como um processador Core i7 e um monitor <i>Ultrawide</i>. Sua memória é de 8GB GDDR5. 
			</p><br>

			<center><font size="6">AMD RX 560</font></center>
			<center><img src="imagens/C7/foto6.jpg" width="25%"></center>
			<p>
				A placa gráfica RX 560 apresenta memória de 2GB ou 4GB GDDR5, a qual é possível editar vídeos em <i>Full HD</i> (1080p). Além disso, possui tecnologia AMD <i>FreeSync</i>, semelhante a <i>G-Sync da Nvidia</i>.  
			</p><br>

			<center><font size="6">AMD RX 570</font></center>
			<center><img src="imagens/C7/foto7.jpg" width="25%"></center>
			<p>
				A RX 570 é recomenda ser utilizada junto a um monitor <i>Full HD</i> e um processador nível intermediário, como o <i>Ryzen</i> 3 ou <i>Core</i> i5 7400. Ademais, os jogos funcionam com perfeição e sem quedas de <i>frames</i>. A sua memória é de 4GB GDDR5.
			</p><br>

			<center><font size="6">AMD RX 580</font></center>
			<center><img src="imagens/C7/foto8.jpg" width="25%"></center>
			<p>
				A placa de vídeo RX 580 é ótima para quem utiliza o monitor com a tecnologia <i>FreeSync</i>. Além disso, apresenta uma memória de 8GB GDDR5, ótima para jogos muito pesados e para profissionais que utilizam <i>software</i> de edição.
			</p>
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