<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Análise e Modelagem de Sistemas</title>
	<style type="text/css">
		*{margin: 0; padding: 0;}

		/*FUNDO DO CORPO*/
			body {font-family: Century Gothic;}

			.titulo {
				background-color: #4B0082;
				width: 100%;
				height: 130px;
				position: fixed;
				z-index: 1;
			}

			.materia {text-align: center; color: white; margin: 5px;}

		/*MENU PRINCIPAL/CENTRAL*/
			/*menu*/
			.menu {
				background-color: #333;
				font-size: 18px;
				cursor: pointer;
				width: 750px;
				position: absolute;
				margin-left: 27%;
			}

			/*opções*/
			.menu li a {
				color: white;
				text-decoration: none;
				padding: 20px 30px;
				display: block;
			}

		/*MENU LATERAL*/
			/*menu lateral*/
			nav {
				background-color: #333;
				width: 325px;
				position: absolute;
				transition: all .2s linear;
				left: -350px;
				z-index: 2;
			}

			/*animação do menu*/
			#check:checked ~ nav { transform: translateX(350px); }

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
			.item label:hover{ background-color: #4B0082; }

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
			.item input:checked ~ ul { max-height: 100%; }

			/*animação das opções secundárias*/
			.item ul li a:hover { background-color: #9CF; }

			/*ajustes das opções secundárias*/
			.item ul {
				list-style: none;
				overflow: hidden;
				max-height: 0;
				transition: all .2s linear;
			}

			/*tirando a caixa de seleção do menu*/
			.item input { display: none; }

			/*ícone*/
			#icone {
				cursor: pointer;
				padding: 15px;
				position: absolute;
				z-index: 3;
			}

			/*ajustes do ícone*/
			#check { display: none; z-index: 1; }

			/*links externos*/
			a {
				display: block;
				text-decoration: none;
				color: white;
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
	</style>
</head>
<body>
		<!--ÍCONE DO MENU LATERAL-->
		<input type="checkbox" id="check">
		<label id="icone" for="check"><img src="imagens/iconeB.png"></label>
		
		<!--MENU LATERAL-->
		<nav><br><br><br>
			<!--LOGO-->
			<div class="logo"><img src="imagens/logoNova.png" width="98" height="100"><br></div><br>

			<!--1° DIVISÃO (1° ano)-->
			<div class="item">
				<input type="checkbox" id="check1">
				<label for="check1">1° Ano</label>
				<ul>
					<li><a href="http://localhost/TCC/materias/1ano/prog1.php">Programação I</a></li>
					<li><a href="http://localhost/TCC/materias/1ano/aplicativos.php">Aplicativos</a></li>
					<li><a href="http://localhost/TCC/materias/1ano/hardware.php">Hardware</a></li>
					<li><a href="http://localhost/TCC/materias/1ano/fundamentos.php">Fundamentos da Informática</a></li>
				</ul>
			</div>

			<!--2° DIVISÃO (2° ano)-->
			<div class="item">
				<input type="checkbox" id="check2">
				<label for="check2">2° Ano</label>
				<ul>
					<li><a href="prog2.php">Programação II</a></li>
					<li><a href="banco.php">Banco de Dados</a></li>
					<li><a href="redes.php">Redes de Computadores</a></li>
					<li><a href="analise.php">Análise e Modelagem de Sistemas</a></li>
				</ul>
			</div>

			<!--3° DIVISÃO (3° ano)-->
			<div class="item">
				<input type="checkbox" id="check3">
				<label for="check3">3° Ano</label>
				<ul>
					<li><a href="http://localhost/TCC/materias/3ano/prog3.php">Programação III</a></li>
					<li><a href="http://localhost/TCC/materias/3ano/empre.php">Empreendedorismo</a></li>
					<li><a href="http://localhost/TCC/materias/3ano/topicos.php">Tópicos Avançados em Informática</a></li>
					<li><a href="http://localhost/TCC/materias/3ano/tcc.php">TCC (Trabalho de Conclusão de Curso)</a></li>
				</ul>
			</div><br>

			<!--CONTATOS-->
				<font size="4" color="white">Contatos:</font>

				<!--E-mail-->
					<font size="3" color="white"><br><br><img src="imagens/gmail.png" width="25" height="20"> E-mail:<br>elisangela.2019315732@aluno.iffar.com.br<br>kerolai.2019315901@aluno.iffar.edu.br</font><br><br>
				<!--Facebook-->
					<img src="imagens/facebook.png" width="25" height="25"><font size="3" color="white"> Facebook:<br>Elisângela S. Mello<br>Kerolai Ribeiro França</font>
			<br><br><br><br><br><br>

			<!--OPÇÕES ADICIONAIS-->
			<div class="item">
				<input type="checkbox" id="check4">
				<label for="check4"><a href="http://localhost/TCC/inicial.php">Voltar</a></label>
				
				<input type="checkbox" id="check5">
				<label for="check5"><a href="http://localhost/TCC/index.php">Sair</a></label>
			</div>
		</nav>

		<!--MATÉRIA-->
		<div class="titulo">
			<div class="materia">
				<img src="imagens/anaBranco.png" height="90" width="90"><br>
				<font size="4"><b>ANÁLISE E MODELAGEM DE SISTEMAS</b></font>
			</div>
		</div><br><br><br><br>
		<br><br><br>

		<!--MENU PRINCIPAL-->
		<div class="menu">

			<!--1° divisão (Vídeos)-->
			<div class="item">
				<input type="checkbox" id="check6">
				<label for="check6">Vídeos</label>
				<ul>
			 		<li><a href=""></a></li>
				  	<li><a href=""></a></li>
				</ul>
			</div>

			<!--2° divisão (Conteúdos)-->
			<div class="item">
				<input type="checkbox" id="check7">
				<label for="check7">Conteúdos</label>
				<ul>
			 		<li><a href=""></a></li>
				  	<li><a href=""></a></li>
				</ul>
			</div>

			<!--3° divisão (Questões)-->
			<div class="item">
				<input type="checkbox" id="check8">
				<label for="check8">Questões</label>
				<ul>
			 		<li><a href=""></a></li>
				  	<li><a href=""></a></li>
				</ul>
			</div>
		</div>
</body>
</html>