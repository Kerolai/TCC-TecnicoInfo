<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias</title>
	<style type="text/css">
		*{ margin: 0; padding: 0; font-family: Century Gothic; }

		/*MENU LATERAL*/
			/*menu*/
			nav {
				background-color: #333;
				position: static;
				width: 325px;
				height: auto;
				border: 1px solid black;
				position: absolute;
				transition: all .2s linear;
				left: -350px;
				z-index: 1;
			}

			/*animação do menu*/
			#check:checked ~ nav { transform: translateX(350px); }

			/*Logo*/
			.logo { position: right; padding: 1%;}

			/*opções primárias*/
			.item label {
				display: block;
				padding: 10px;
				background-color: #333;
				font-size: 20px;
				cursor: pointer;
				color: #fff;
				border-bottom: solid 2px #aaa;
			}

			/*Animação das opções primárias*/
			.item label:hover { background-color: #4B0082; }

			/*opções secundárias*/
			.item ul li a {
				width: 100%;
				height: 20px; 
				padding: 10px;
				display: block;
				text-decoration: none;
				background-color: #fafafa;
				color: #333;
				border-bottom: solid 2px #aaa;
			}

			/*função das opções secundárias*/
			.item input:checked ~ ul {
				height: auto;
				max-height: 200px;
				transform: all;
			}

			/*animação das opções secundárias*/
			.item ul li a:hover { background-color: #9CF; }

			/*opções secundárias - ajustes*/
			.item ul {
				width: 100%;
				list-style: none;
				overflow: hidden;
				max-height: 0;
				transition: all .2s linear;
			}
			.item input { display: none; }

			/*ícone*/
			#icone{
				cursor: pointer;
				padding: 15px;
				position: absolute;
				z-index: 2;
			}
			#check { display: none; z-index: 1; }

			/*link externo*/
			a{ display: block; text-decoration: none; color: white; }

		/*caixas das matérias*/
		.materias { display: flex; flex-wrap: wrap; width: 90%; }

		/*cada caixa*/
		.materias_item {
			flex-basis: 12%;
			margin-top: 2%;
			margin-left: 7%;
		    padding: 10px 30px;
		    border-radius: 25px;
		    background-color: #4B0082;
		    cursor: pointer;
		}
		.materias_item:hover{ background: #8B008B;}

		/*fundos*/
		.titulo { background-color: #4B0082; width: 100%; height: 98px; }
		.anos { width: 100%; height: 55px; }

		/*fonte do título*/
		#fonte {
			font-family: Courier New;
			font-size: 65px;
			color: white;
			position: absolute;
			margin: 1%;
			left: 39%;
		}

		/*fonte dos subtítulos*/
		#fonte2 {
			font-family: Courier New;
			font-size: 30px;
			left: 15%;
		}

		/*CRÉDITO*/
			.cred{
				text-align: center;
				font-family: Apple Chancery, cursive;
				font-size: 16px;
				color: white;
			}
			.div {
				background-color: #4B0082;
				width: 100%;
				height: 30px;
				bottom: 0;
			}

		/*BARRA DE ROLAGEM*/
			/*tamanho*/
			::-webkit-scrollbar { width: 10px; }

			/*fundo*/
			::-webkit-scrollbar-track { background-color: #808080; }

			/*cor inicial (sem clicar)*/
			::-webkit-scrollbar-thumb { background-color: #1C1C1C; border-radius: 20px; }

			/*cor final (clicando)*/
			::-webkit-scrollbar-thumb:hover {
				background-color: #363636;
			}
		
			.dominante{ float: right; margin-right: 20px; }

			.dominante .foto{
				position: relative;
				width: 65px;
				height: 65px;
				border-radius: 30%;
				overflow: hidden;
				margin: 15px;
			}

			/*foto ícone do aluno*/
			.dominante .foto img{
				position: absolute;
				width: 100%;
				height: 100%;
				object-fit: cover;
			}
	</style>
</head>
<body>
	<!--ícone do menu lateral-->
		<input type="checkbox" id="check">
		<label id="icone" for="check"><img src="imagens/iconeB.png"></label>

		<!--MENU LATERAL-->
		<nav><br><br><br>
			<!--LOGO-->
			<div class="logo"><img src="imagens/logoNova.png" width="98" height="100"><br></div><br>
			
			<!--1° divisão (1° ano)-->
			<div class="item">
				<input type="checkbox" id="check1">
				<label for="check1">1° Ano</label>
				<ul>
					<li><a href="materias/1ano/prog1.php">Programação I</a></li>
					<li><a href="materias/1ano/aplicativos.php">Aplicativos</a></li>
					<li><a href="materias/1ano/hardware.php">Hardware</a></li>
					<li><a href="materias/1ano/fundamentos.php">Fundamentos da Informática</a></li>
				</ul>
			</div>

			<!--2° divisão (2° ano)-->
			<div class="item">
				<input type="checkbox" id="check2">
				<label for="check2">2° Ano</label>
				<ul>
					<li><a href="materias/2ano/prog2.php">Programação II</a></li>
					<li><a href="materias/2ano/banco.php">Banco de Dados</a></li>
					<li><a href="materias/2ano/redes.php">Redes de Computadores</a></li>
					<li><a href="materias/2ano/analise.php">Análise e Modelagem de Sistemas</a></li>
				</ul>
			</div>

			<!--3° divisão (3° ano)-->
			<div class="item">
				<input type="checkbox" id="check3">
				<label for="check3">3° Ano</label>
				<ul>
					<li><a href="materias/3ano/prog3.php">Programação III</a></li>
					<li><a href="materias/3ano/empre.php">Empreendedorismo</a></li>
					<li><a href="materias/3ano/topicos.php">Tópicos Avançados em Informática</a></li>
					<li><a href="materias/3ano/tcc.php">TCC (Trabalho de Conclusão de Curso)</a></li>
				</ul>
			</div><br><br>

			<!--CONTATOS-->
				<font size="4" color="white">Contatos:</font>

				<!--E-mail-->
					<font size="3" color="white"><br><br><img src="imagens/contatos/gmail.png" width="25" height="20"> E-mail:<br>elisangela.2019315732@aluno.iffar.com.br<br>kerolai.2019315901@aluno.iffar.edu.br</font><br><br>

				<!--Facebook-->
					<img src="imagens/contatos/facebook.png" width="25" height="25"><font size="3" color="white"> Facebook:<br>Elisângela S. Mello<br>Kerolai Ribeiro França</font>
			<br><br><br><br><br><br><br><br>

			<!--ADICIONAIS-->
				<div class="item">
					<input type="checkbox" id="check4">
					<label for="check4"><a href="index.php">Sair</a></label>
				</div>
		</nav>

	<!--PARTE PRINCIPAL-->
		<div class="titulo">
			<font id="fonte">Matérias</font>
			
			<div class="dominante">
				<div class="foto"><img src="imagens/menuB.png" onclick="menuToggle();"></div>
			</div>
			<script>
				function menuToggle(){
					const toggleMenu = document.querySelector('.menu');
					toggleMenu.classList.toggle('active');
				}
			</script>
		</div><br><br>

		<!--SUBTÍTULO 1-->
		<table style="margin-left: 6%;" width="11%">
			<td><img src="imagens/flechar.png" width="38" height="38"></td>
			<td><font id="fonte2"><b>1° ano</b></font></td>
		</table>

		<center>
		<div class="materias">
	    	<div class="materias_item">
	    		<a href="materias/1ano/prog1.php"><img src="imagens/logoM/prog1Branco.png" width="90" height="90"></a>
	    		<br><font size="4" color="white">Programação I</font>
	    	</div>

	    	<div class="materias_item">
	    		<a href="materias/1ano/aplicativos.php"><img src="imagens/logoM/aplicativosBranco.png" width="90" height="90"></a>
				<br><font size="4" color="white">Aplicativos</font>
	    	</div>

	    	<div class="materias_item">
	    		<a href="materias/1ano/hardware.php"><img src="imagens/logoM/hardwareBranco.png" width="90" height="90"></a>
	    		<br><font size="4" color="white">Hardware</font>
	    	</div>

	    	<div class="materias_item">
	    		<a href="materias/1ano/fundamentos.php"><img src="imagens/logoM/fundaBranco.png" width="90" height="90"></a>
	    		<br><font size="4" color="white">Fundamentos da Informática</font>
	    	</div>
		</div><br>
	</center>

	<!--SUBTÍTULO 2-->
		<table style="margin-left: 6%;" width="11%">
			<td><img src="imagens/flechar.png" width="38" height="38"></td>
			<td><font id="fonte2"><b>2° ano</b></font></td>
		</table>
	<center>
		<div class="materias">
	    	<div class="materias_item">
	    		<a href="materias/2ano/prog2.php"><img src="imagens/logoM/prog2Branco.png" width="90" height="90"></a>
	    		<br><font size="4" color="white">Programação II</font>
	    	</div>

	    	<div class="materias_item">
	    		<a href="materias/2ano/banco.php"><img src="imagens/logoM/bancoBranco.png" width="90" height="90"></a>
	    		<br><font size="4" color="white">Banco de Dados</font>
	    	</div>

	    	<div class="materias_item">
	    		<a href="materias/2ano/redes.php"><img src="imagens/logoM/redesBranco.png" width="90" height="90"></a>
	    		<br><font size="4" color="white">Redes de Computadores</font>
	    	</div>

	    	<div class="materias_item">
	    		<a href="materias/2ano/analise.php"><img src="imagens/logoM/anaBranco.png" width="90" height="90"></a>
	    		<br><font size="4" color="white">Análise e Modelagem <br>de Sistemas</font>
	    	</div>
		</div><br>
	</center>
	<!--SUBTÍTULO 3-->
		<table style="margin-left: 6%;" width="11%">
			<td><img src="imagens/flechar.png" width="38" height="38"></td>
			<td><font id="fonte2"><b>3° ano</b></font></td>
		</table>

		<center>
		<div class="materias">
	    	<div class="materias_item">
	    		<a href="materias/3ano/prog3.php"><img src="imagens/logoM/prog3Branco.png" width="90" height="90"></a>
	    		<br><br><font size="4" color="white">Programação III</font>
	    	</div>

	    	<div class="materias_item">
	    		<a href="materias/3ano/empre.php"><img src="imagens/logoM/empreBranco.png" width="90" height="90"></a>
	    		<br><br><font size="3" color="white">Empreendedorismo</font>
	    	</div>

	    	<div class="materias_item">
	    		<a href="materias/3ano/topicos.php"><img src="imagens/logoM/topicoBranco.png" width="90" height="90"></a>
	    		<br><font size="4" color="white">Tópicos Avançados <br>em Informática</font>
	    	</div>

	    	<div class="materias_item">
	    		<a href="materias/3ano/tcc.php"><img src="imagens/logoM/TCCBranco.png" width="90" height="90"></a>
	    		<br><br><font size="4" color="white">TCC</font>
	    	</div>
		</div><br><br>

		<div class="div">
			<font class="cred">Elisângela e Kerolai ® 2021</font>
		</div>
		</center>
</body>
</html>