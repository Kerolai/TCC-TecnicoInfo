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
	<title>TekMind | Matérias | Hardware | Unidades de Estado Sólido (SSD)</title>
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
		<table style="margin-left: 5%;" width="40%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Unidades de Estado Sólido (SSD)</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_hw/Hardware - C005 - Unidades de Estado Sólido (SSD).pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div>

	<!--CONTEÚDO-->
		<div>
			<center><font size="6"><b>Introdução</b></font></center>
			<p>
				Os HDs passaram por grandes evoluções, porém com as atualizações sempre é necessário novas aplicações nos dispositivos de armazenamento, como ter um desempenho rápido, boa capacidade de armazenamento, durabilidade e é claro que com pouco consumo de energia.
			</p>
			<center><img src="imagens/C5/foto1.jpg" width="20%"></center><br><br>

			<center><font size="6"><b>Características</b></font></center>
			<p>
				Os SSDs são <b>unidades totalmente eletrônicas</b> que utilizam memórias <i>Flash</i> para o armazenamento, <b>dispensando o uso de sistemas mecânicos</b> para o seu funcionamento, o que resulta em uma agilidade maior comparada aos discos rígidos.<br><br>
				Além disso, unidades SSDs são mais <b>econômicas no consumo de energia</b>, pesam menos, podem trabalhar com elevadas temperaturas e o tempo de transferência de dados entre a <b>memória RAM</b> e unidades <b>SSDs</b> costumam ser menor em relação aos discos rígidos.
			</p><br>

			<center><font size="6"><b>Capacidades e Limites de Capacidade</b></font></center>
			<p>
				Os SSDs geralmente são vendidos de acordo com a quantidade de memória Flash, e a divulgação dada pelos fabricantes é em quantidade em “GB”, porém a <b>quantidade correta deve ser dada em base dois</b> e em (“GIB”). Ademais, os SSDs reservam parte de sua memória para <b>uso interno</b> e ao <b>formatar</b> a capacidade disponível será menor do que a capacidade total da unidade.<br><br>
				<b>Dependendo da idade/ sistema operacional</b> do computador poderá ter dois limites de capacidade, sendo assim o SO (sistema operacional) não irá reconhecer unidades com capacidades superioras a estas:
			</p>
			<center>
				<div>
					<table class="tabela" width="13%">
						<tr><th>Limite</th></tr>
						<tr><td>128 GiB</td></tr>
						<tr><td>2 TiB</td></tr>
					</table>
				</div>
			</center>
		</div><br><br>
		<div>
			<center><font size="6"><b>Tipos de memórias</b></font></center>
			<p>
				Os tipos podem ser <b>SLC, MLC, TLC</b>, o qual varia de acordo com o modelo.<br><br>
				<b>SLC (<i>Single Level Cell</i>):</b> Baseado em chips, os quais armazenam um bit em cada célula. Além disso, são caros porque armazenam pouca informação em cada uma de suas células e suportam 100.000 ciclos de <b>apagamento e escrita</b>.<br><br>
				<b>MLC (<i>Multi Level Cell</i>):</b> Baseados em chips e armazenam <b>dois bits em cada célula</b>. Ademais, suportam 10.000 ciclos de apagamento e escrita em chips mais caros e 5.000 em chips intermediários.<br><br>
				<b>TLC (<i>Triple Level Cell</i>):</b> São memórias MLC com três bits por célula, possuem vida útil menor do que as MLC e também apresentam um baixo desempenho. Além disso, suportam <b>1.000 ciclos de apagamento e escrita</b>.
			</p><br>

			<center><font size="6"><b>Coleta de Lixo</b></font></center>
			<p>
				Os <b>discos rígidos e mídias magnéticas</b>, se for necessário <b>atualizar dados</b> de um arquivo <b>existente</b>, o disco poderá gravar os seus dados <b>atualizados</b> exatamente nos mesmos <b>setores</b>.<br><br>
				Nos SSDs, as <b>áreas</b> (páginas) utilizada pelos arquivos precisa ser <b>apagada primeiro</b> para depois poder salvar o arquivo <b>atualizado</b>, afim de evita <b>ciclos de apagamentos desnecessários</b>, a qual diminui a sua vida útil. Além disso, o SSD indica que as <b>páginas ocupadas</b> pela versão do arquivo <b>agora</b> são “inválidas” e grava novas páginas.<br><br>
				Sendo assim, as páginas as quais foram apagadas <b>ficam vazias</b> e podem serem utilizadas para gravarem novas páginas. Outro aspecto ao qual é importante salientar, é que em algum momento, as <b>páginas marcadas</b> como <b>inválidas</b> em algum momento irão ser efetivamente apagadas, resultando em espaços disponíveis para serem utilizados e esse processo é conhecido como <b>coleta de lixo</b>.
			</p><br>

			<center><font size="6"><b>Comando “TRIM”</b></font></center>
			<p>
				Esse comando é responsável por <b>informar ao SSD</b> as páginas as quais podem ser <b>marcadas</b> como <b>inválidas</b> e isso ocorre quando o usuário apaga certos arquivos ou formata a unidade. Sendo assim, se não houver a existência deste comando, o SSD “pensa” que as páginas ainda contêm dados mesmo que estes já foram apagadas pelo usuário.<br><br>
				Portanto, esse comando aumenta o desempenho do SSD, aumenta espaços livres no SSD e consequentemente a sua vida útil, pois menos ciclos de apagamento serão necessários.<br><br>
				<b>Curiosidade:</b> O comando é executado de forma automática a partir do Windows 7.
			</p><br>

			<center><font size="6"><b>Recuperação de Dados</b></font></center>
			<p>
				Quando um arquivo é <b>apagado no disco rígido</b>, ele não é efetivamente apagado, pois o documento apenas irá ser removido do diretório e consequentemente o seu espaço liberado, mas se não houve nenhum arquivo gravado nos setores liberados, o antigo arquivo ainda estará presente, sendo possível a recuperação utilizando somente softwares especializados para esse tipo de ação.<br><br>
				Entretanto, nos SSDs a funcionalidade é <b>diferente</b>, pois quando um arquivo é apagado e o comando <i>TRIM</i> <b>executado</b>, a coleta de lixo irá apagar as páginas que contém o <b>arquivo apagado pelo usuário</b>, resultando na <b>impossibilidade</b> de recuperação do mesmo.<br><br>
				<b>Curiosidade:</b> Quando ocorre a queima das unidades do SSD é quase impossível a recuperação dos seus dados, pois os dados são gravados eletronicamente.
			</p><br>

			<center><font size="6"><b>Vida Útil</b></font></center>
			<p>
				É importante entender que os SSDs não duram para sempre, pois as memórias flash possuí um limite máximo de ciclos de <b>apagamento e escrita</b>, e ao superar esse limite a memória simplesmente para de funcionar.<br><br>
				Ademais, os <b>SSDs não devem ser desfragmentados</b>, pois esse processo executa vários ciclos de <b>apagamentos e gravação</b>.<br><br>
				<b>Curiosidade:</b> Os fabricantes divulgam a vida útil das unidades através de um <b>parâmetro</b> denominado <b>TBW (<i>Terabytes</i> gravados)</b>. As vezes essas informações não são fornecidas pelo fabricante, mas pode ser encontrado facilmente com a ajuda dos softwares.
			</p><br>

			<center><font size="6"><b>Arquitetura e Tamanho Físico</b></font></center>
			<p>Os <b>SSDs</b> são formados pelos <b>componentes</b>:</p>
			<ul>
				<li>Um chip controlador.</li>
				<li>Um chip de RAM dinâmica utilizado como cache (em unidades mais baratas não se apresenta).</li>
				<li>Chips de memória <i>flash</i>.</li>
			</ul>
			<p>O seu <b>tamanho</b>:</p>
			<ul>
				<li>1,8 Polegadas</li>
				<li>2,5 Polegadas</li>
				<li>mSATA</li>
				<li>Mini PCI Express</li>
				<li>M.2</li>
			</ul>
			<center><img src="imagens/C5/foto2.jpg" width="23%"></center>
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