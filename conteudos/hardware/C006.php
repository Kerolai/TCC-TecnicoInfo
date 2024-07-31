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
	<title>TekMind | Matérias | Hardware | Placas de Comunicação</title>
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
		<table style="margin-left: 5%;" width="33%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Placas de Comunicação</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_hw/Hardware - C006 - Placas de Comunicação.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div>

	<!--CONTEÚDO-->
		<div>
			<center><font size="6"><b>Introdução</b></font></center>
			<p>
				O acesso a informação é algo muito precioso, considerando que a sua falta pode afetar o desempenho de inúmeras áreas, sejam elas acadêmicas, empresarial, entre outras. Sendo assim é importante saber a diversas tecnologias sejam elas cabeadas ou Wireless que estão presente na atualidade e o mais importante ter conhecimento de como diferencia-las.
			</p><br>

			<center><font size="6"><b>Rede Cabeada</b></font></center>
			<p>
				A <b>rede cabeada</b> é composta por um <b>conjunto de cabos</b>, os quais se conectam a um dispositivo, criando assim uma <b>rede</b>. Essa rede é mais rápida e eficiente, o que resulta em uma <b>maior confiabilidade no envio das informações</b>.
			</p>
			<center><img src="imagens/C6/foto1.jpg" width="27%"></center>
			<p>
				Além disso, para que a <b><i>internet</i></b> chegue com <b>eficiência</b> aos dispositivos, tais cabos precisam estar conectados ao <b><i>Ethernet</i></b>. Esse equipamento com um único cabo, agrega novas tecnologias e os compartilha para inúmeros dispositivos, permitindo que a rede se expanda, sem ter que modificar os dispositivos antigos.
			</p><br>

			<center><font size="6"><b>Rede <i>Wireless</i></b></font></center>
			<p>
				A <b>rede <i>wireless</i></b> não utiliza o sistema de <b>cabeamento</b> e a circulação de dados é por meio de uma <b>conexão sem fio</b>. Essa rede é de baixo custo tanto na sua implementação quanto na sua manutenção e também permite que os dispositivos conectados à rede possam se <b>locomover</b>, pois não dependem de uma conexão via cabo.
			</p>

			<center><img src="imagens/C6/foto2.jpg" align="left" width="16%" style="padding-left: 300px;"></center>
			<div>
				<fieldset class="field6">
					Tipos de transmissão de dados que pertencem a essa <b>rede</b>:
					<ul>
						<li>Roteador,</li>
						<li>Rádio,</li>
						<li>Satélite, e</li>
						<li>Internet 3G e 4G.</li>
					</ul>
				</fieldset>
			</div><br><br><br>
			<p>
				Sendo assim, a <b>ausência de cabos</b> exige dos <b>dispositivos</b> que se conectem ao <b>sinal</b> responsável pela <b>circulação de dados</b> por meio de componentes <b>internos</b>, próprios para essa captação.
			</p><br>

			<center><font size="6"><b>Desvantagens das Redes</b></font></center>
			<p>
				<b>Rede cabeada:</b> Possui um alto custo de implementação e diferentemente da rede de transmissão de dados wireless, esta <b>não permite a livre locomoção</b> dos usuários.<br><br>
				<b>Rede <i>wireless</i>:</b> Bloqueios (naturais ou não) podem interferir no sinal, o que <b>reduz a eficiência</b> na transmissão de dados. Ademais, a liberdade de conexões pode reduzir a sua banda, o que resulta na <b>ineficiência</b> quanto ao sinal seja recebido por todos os dispositivos conectados.  
			</p><br>

			<center><font size="6"><b>Modelos da Rede <i>Wireless</i></b></font></center>
			<p>Existem diversos padrões, os quais são compatíveis entre si, independentemente da sua evolução. São eles:</p>

			<center><font size="6"><i>Wi-fi</i> 4</font></center>
			<p>
				Este padrão se refere a antiga tecnologia 802.11n, o qual é presente nos roteadores mais antigos. Além disso, utiliza a frequência (2.4GHz ou a 5GHz), sendo a frequência 5GHz opcional e a taxa de transferência liquida varia entre 54Mbit/s e 600Mbit/s.
			</p><br>

			<center><font size="6"><i>Wi-fi</i> 5</font></center>
			<p>
				Esta tecnologia é referente a antiga 802.11ac, a qual permite uma alta taxa de transferência, suportando acesso a jogos online, streaming de áudio e vídeos ultra HD e transferência entre dispositivos. Além disto, opera na frequência de 5GHz.
			</p><br>

			<center><font size="6"><i>Wi-fi</i> 6</font></center>
			<p>
				O padrão possui uma taxa máxima de dados de até 9,6Gbps e funciona nas frequências 2,4GHz e 5GHz. Ademais, suporta uma grande proporção de dispositivos conectados simultaneamente sem que haja perda na velocidade.
			</p><br>

			<center><font size="6"><i>Wi-fi</i> 6E</font></center>
			<p>
				Sendo uma extensão do <b>Wi-fi 6</b>, este possui a mesma denominação técnica, a qual é “802.11ax”. Sendo assim, a grande melhoria foi passar a funcionar em modo <b><i>tri-band</i></b>, ao contrário do <b><i>dual-band</i></b> que persistia até o <i>Wi-Fi</i> 6.<br><br>
				Ademais, é possível encontrar faixas de frequência com 2,4 e 6GHz ao mesmo tempo, em dispositivos. 
			</p><br>

			<center><font size="6"><b>Redes <i>Dual-band</i> e <i>Tri-band</i></b></font></center>
			<p>
				A partir do <i>Wi-fi 5</i> estabelecem redes com múltiplas bandas, afim de atingir um maior alcance e velocidade. Sendo assim, por razões físicas, frequências de rádio mais baixa acabam indo mais longe, como por exemplo redes de 2,4GHz alcançam áreas maiores e têm maior penetração diante de obstáculos. Diferentemente de frequências maiores como 5 e 6 GHz, a qual permitem uma conexão mais rápida, mas têm um alcance limitado.
			</p>
			<center><img src="imagens/C6/foto3.jpg" width="38%"></center><br><br>

			<center><font size="6"><b>Nomenclatura</b></font></center>
			<p>
				Desde de 2018 a nomenclatura comercial de um determinado <i>Wi-fi</i> é mais <b>dinâmica</b>, pois foi a diferenciada da nomenclatura que tem uma <b>referência técnica</b>. Sendo assim, ao invés de se referir ao dispositivo “Wi-Fi 802.11ac”, simplesmente é preciso classificá-lo como o aparelho compatível com Wi-Fi 5.
			</p>
			<center><img src="imagens/C6/foto4.jpg" width="30%"></center><br><br>

			<center><font size="6"><b><i>Bluetooth</i></b></font></center>
			<p>
				A conexão via <b><i>Bluetooth</i></b> é uma tecnologia muito comum em dispositivos eletrônicos como smartphones, notebooks, caixas de som, entre outros. Ademais, com essa tecnologia é possível realizar uma <b>interação sem a utilização de cabos</b>, resultando em uma maior praticidade para os usuários, pois utiliza para a <b>transferência somente ondas de radiofrequência</b>.
			</p>
			<center><img src="imagens/C6/foto5.jpg" width="20%"></center>
			<p>
				A razão pela grande procura destes tipos de tecnologia, é baixo consumo de energia. Sendo assim, essa ferramenta é dividida em <b>quatro classes</b> distintas, as quais depende somente da <b>variação de energia</b> e da <b>distância</b> entre os dispositivos. Dessa forma, compreende-se que quanto <b>maior</b> for a distância, <b>maior</b> será o seu consumo. 
			</p>
			<ul>
				<li><b>Classe 1:</b> potência máxima de consumo 100 mW e alcance de até 100 metros.</li>
				<li><b>Classe 2:</b> potência máxima de consumo 2,5 mW e alcance de até 10 metros.</li>
				<li><b>Classe 3:</b> potência máxima de consumo 1 mW e alcance de até 1 metro.</li>
				<li><b>Classe 4:</b> potência máxima de consumo 0,5 mW e alcance de até 0,5 metro.</li>
			</ul><br>

			<center><font size="6">Versões</font></center>
			<p>
				<b style="font-size: 19px;">Bluetooth 1.0:</b><br><br>
				A primeira versão foi originada em 1994 e operava com frequência de 721 kbps. A versão obteve modificações posteriormente, as quais foram denominadas 1.2 e 1.3.<br><br>

				<b style="font-size: 19px;">Bluetooth 2.0:</b><br><br>
				A versão aprimorada foi criada em 2004, a qual possuía recursos mais agíeis, sendo 3 Mb/s e com um consumo menor de energia. Ademais o padrão EDR (Enhanced Data Rate), triplicava a taxa de transferência de dados, mesmo que o mesmo não era obrigatório, sem ele, a velocidade de transferência era menor. Logo veio a versão 2.1, a qual oferecia mais segurança aos usuários.<br><br>

				<b style="font-size: 19px;">Bluetooth 3.0:</b><br><br>
				Criado em 2009, o Bluetooth 3.0 era um projeto de buscar uma melhor velocidade, a qual foi para 25 Mb/s com o sistema High Speed (HS).<br><br>

				<b style="font-size: 19px;">Bluetooth 4.0:</b><br><br>
				Com o número alto de consumidores reclamando, surgiu uma nova versão, a qual era focada no menor consumo de energia. Sendo assim, quando o sistema não estivesse sendo utilizado, mesmo que ativado, a bateria dos dispositivos móveis não gastaria o mesmo.<br><br>
 				Posteriormente, com a inserção da Internet, surgiu a versão 4.1 no final de 2013. Essa versão tornou essencial conexões via Bluetooth para dispositivos, e não sendo mais vistas como algo incremental.<br><br>
				E por fim, a versão 2014, a qual permitiu a transferência de dados mais pesados e sem tanto impacto para a funcionalidade dos aparelhos.<br><br>

				<b style="font-size: 19px;">Bluetooth 5.0:</b><br><br>
				Em 2016 criaram a versão 5.0, a qual suportava 40 metros de distância (classe 1). Além disso, a sua velocidade acabou crescendo para 50 Mb/s, eliminando assim, interferências de rádios e Wi-fi que, ante disso, impactava o desempenho do recurso.<br><br>

				<b style="font-size: 19px;">Bluetooth LE:</b><br><br>
				E finalmente a versão LE (Low Energy), que é um avanço para a tecnologia, pois a transferência de dados opera em uma taxa de 1 Mb/s.
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