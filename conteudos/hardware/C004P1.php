<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Hardware | Disco Rígido (HD)</title>
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
		<table style="margin-left: 5%;" width="26%">
		  	<tr>
		    	<td><img src="imagens/hardware.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Disco Rígido (HD)</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_hw/Hardware - C004 - Disco Rígido (HD).pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div>

	<!--CONTEÚDO-->
		<div>
			<center><font size="6"><b>Introdução</b></font></center>
			<p>
				O disco rígido ou HDD (<i>Hard Disk Driver</i>), é o principal em termos, para <b>armazenamento</b> de dados, programas e sistema operacional. Além disso, uma informação importante, é que os processadores <b>não processam</b> nada no <b>disco rígido</b>; são os discos que devem transferir os dados para a memória volátil (RAM), para assim poderem ser processados no processador.
			</p>
			<center><img src="imagens/C4/foto1.jpg" width="17%"></center><br><br>

			<center><font size="6"><b>Características</b></font></center>
			<ul>
				<li>É <b>selado</b>, com discos magnéticos no seu interior, os quais giram em alta velocidade;</li>
				<li>A superfície magnética é sensível;</li>
				<li>Só podem ser montados e abertos em “salas limpas”, onde as partículas, incluindo as invisíveis a olho nu, foram completamente removidas;</li>
				<li>Os técnicos precisam usar <b>roupas especiais</b> para entrar na sala ou se manipularem o equipamento do lado de fora, devem utilizar luvas;</li>
			</ul><br>
			<center><img src="imagens/C4/foto2.jpg" width="38%"></center><br><br>

			<center><font size="6"><b>Componentes de um disco rídigo</b></font></center>
			<p>
				<b style="font-size: 19px;">Placa lógica:</b><br><br>
				Também chamada de <b>controladora</b>, é a parte “pensante” do HD, sem ela o HD é um dispositivo simples, composto por partes mecânicas. Além disto, faz interface com a <b>placa-mãe</b>, controla a rotação do motor e o movimento das cabeças de leitura, também verifica e identifica erros.
			</p>
			<ul>
				<li>O cache do disco (<i>buffer</i>), é um componente rápido e importante, para fazer a leitura nas mídias magnéticas.</li>
				<li>A placa controladora é um componente externo do HD, a qual pode ser facilmente trocada ao <b>queimar a rede elétrica</b>.</li>
			</ul><br>
			<center><img src="imagens/C4/foto3.jpg" width="35%"></center><br>

			<p>
				<b style="font-size: 19px;">Motor:</b><br><br>
				O motor é responsável por fazer girar os pratos (onde os dados são armazenados);
			</p>
			<ul>
				<li>Tem alta precisão e velocidade na rotação dos pratos para leitura dos dados (5.400rpm ou 7.200 rpm).</li>
				<li>Se for abaixo desse valor, pode ocorrer erros na leitura.</li>
			</ul><br>
			<center><img src="imagens/C4/foto4.jpg" width="38%"></center><br>

			<p><b style="font-size: 19px;">Pratos e eixo:</b><br></p>
			<ul>
				<li>Os discos (pratos), é onde se <b>localiza</b> os dados que foram armazenados.</li>
				<li>Geralmente feitos de alumínio (ou cristal), recoberto com material magnético e também uma camada de material protetor.</li>
				<li>Quanto <b>mais denso</b> o material magnético, <b>maior a capacidade</b> de armazenamento.</li>
				<li>Os HDs com grande capacidade, possuem mais um prato e são posicionados um sobre o outro, que são posicionados sob o eixo, o qual é responsável por faze-los girar.</li>
			</ul><br>
			<center><img src="imagens/C4/foto5.jpg" width="30%"></center><br>

			<p><b style="font-size: 19px;">Buffer:</b><br></p>
			<ul>
				<li>É uma memória ultrarrápida (2MB e 64MB), utilizada para <b>melhorar a velocidade</b> do acesso de um dispositivo.</li>
				<li>O <i>buffer</i> permite à controladora do HD, executar diversos operadores úteis, para melhorar o desempenho.</li>
				<li>Graças ao <i>buffer</i>, a cabeça de leitura lê todos os setores próximos, independentemente de terem sido solicitados ou não. Após fazer sua verificação de rotina, o sistema solicitará o próximo setor e irá fornecer em tempo recorde.</li>
				<li>Nos atuais HDs, pode ser utilizado nas operações de escrita.</li>
			</ul>

			<p>
				<b style="font-size: 19px;">Cabeça e braço:</b><br><br>
				A cabeça (ou cabeçote), de leitura e gravação é um dispositivo pequeno, a qual possui uma <b>bobina</b> que utiliza impulsos magnéticos para manipular as moléculas da superfície do disco e assim <b>gravar</b> as informações.<br><br>
				Além disto, existe uma cabeça para cada lado dos discos, a qual está localizado na ponta de um dispositivo denominado braço e tem a função de <b>posicionar os cabeçotes</b> acima das superfícies dos pratos.
			</p><br>
			<center><img src="imagens/C4/foto6.jpg" width="20%"></center><br>
			<ul>
				<li>A cabeça de leitura não toca nos discos, existe uma pequena distância e a “comunicação” é dada por impulsos magnéticos.</li>
			</ul><br>
			<center><img src="imagens/C4/foto7.jpg" width="35%"></center><br>

			<p>
				<b style="font-size: 19px;">Atuador:</b><br><br>
				O atuador (ou <i>voice coil</i>), é responsável por <b>mover</b> o braço acima da superfície dos pratos, permitindo que as cabeças façam o seu trabalho.
			</p>
			<ul>
				<li>O atuador no seu interior, possui uma bobina que é “induzida” por imãs, para que a movimentação aconteça.</li>
			</ul><br>
			<center><img src="imagens/C4/foto8.jpg" width="27%"></center>
		</div><br><br><br>
		
		<center>
			<div>
				<table width="12%">
				  	<tr>
				    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C004P2.php'"> <img src="imagens/direita.png" width="35px"></button></td>
				    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/hardware/C004P2.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Continuar leitura</b></font></button></td>
				 	</tr>
				</table>
			</div>
		</center><br><br>

		<!--CRÉDITOS-->
		<div class="div">
			<p class="cred">Elisângela e Kerolai ® 2021</p>
		</div>
</body>
</html>