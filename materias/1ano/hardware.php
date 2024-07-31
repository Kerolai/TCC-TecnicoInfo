<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Hardware</title>
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
		<!--ícone do menu lateral-->
		<input type="checkbox" id="check">
		<label id="icone" for="check"><img src="imagens/iconeB.png"></label>
		
		<!--MENU LATERAL-->
		<nav><br><br><br>
			<!--Logo-->
			<div class="logo"><img src="imagens/logoNova.png" width="98" height="100"><br></div><br>

			<!--Primeira divisão (1 ano)-->
			<div class="item">
				<input type="checkbox" id="check1">
				<label for="check1">1° Ano</label>
				<ul>
					<li><a href="prog1.php">Programação I</a></li>
					<li><a href="aplicativos.php">Aplicativos</a></li>
					<li><a href="hardware.php">Hardware</a></li>
					<li><a href="fundamentos.php">Fundamentos da Informática</a></li>
				</ul>
			</div>

			<!--Segunda divisão (2 ano)-->
			<div class="item">
				
				<input type="checkbox" id="check2">
				<label for="check2">2° Ano</label>
				<ul>
					<li><a href="http://localhost/TCC/materias/2ano/prog2.php">Programação II</a></li>
					<li><a href="http://localhost/TCC/materias/2ano/banco.php">Banco de Dados</a></li>
					<li><a href="http://localhost/TCC/materias/2ano/redes.php">Redes de Computadores</a></li>
					<li><a href="http://localhost/TCC/materias/2ano/analise.php">Análise e Modelagem de Sistemas</a></li>
				</ul>
			</div>

			<!--Terceira divisão (3 ano)-->
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

			<div class="item">
				<input type="checkbox" id="check4">
				<label for="check4"><a href="http://localhost/TCC/inicial.php">Voltar</a></label>
				
				<input type="checkbox" id="check5">
				<label for="check5"><a href="http://localhost/TCC/index.php">Sair</a></label>
			</div>
		</nav>

		<!--MENU-->
		<div class="titulo">
			<div class="materia">
				<img src="imagens/hardwareBranco.png" height="90" width="90"><br>
				<font size="4"><b>HARDWARE</b></font>
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
			 			<li><a href="https://www.youtube.com/watch?v=0aU18JHkzC4">TecnoArt | Diferença entre HD, SSD E SSD M.2 NVME</a></li>
				  		<li><a href="https://www.youtube.com/watch?v=O9845EjK7o0">MW Informática | Aprenda a montar um PC completamente</a></li>
				  		<li><a href="https://www.youtube.com/watch?v=BAntQj_DW4k">Kabum! TV | Como montar corretamente a placa mãe</a></li>
				  		<li><a href="https://www.youtube.com/watch?v=AdS9l22zVlc">MMFORTAL | Instalação e Formatação Windows 7 pelo DVD</a></li>
				  		<li><a href="https://www.youtube.com/watch?v=rVI3eTou5oM">Hiper Tutoriais | Instalação do Windows 8 / 8.1 (Passo-a-Passo)</a></li>
				  		<li><a href="https://www.youtube.com/watch?v=B2-elHzo4JM">PH Tutoriais | Como formatar o computador e instalar Windows 10</a></li>
				  		<li><a href="https://www.youtube.com/watch?v=daDHMsCvv0g">PC do FAFA | Como instalar o Windows 11 oficial em qualquer PC</a></li>
					</ul>
				</div>

				<!--2° divisão (Conteúdos)-->
				<div class="item">
					<input type="checkbox" id="check7">
					<label for="check7">Conteúdos</label>
					<ul>
			 			<li><a href="http://localhost/TCC/conteudos/hardware/C001P1.php">Tipos de Computadores e seus componentes</a></li>
						<li><a href="http://localhost/TCC/conteudos/hardware/C002P1.php">Fonte de Alimentação</a></li>
						<li><a href="http://localhost/TCC/conteudos/hardware/C003P1.php">Placa-mãe</a></li>
						<li><a href="http://localhost/TCC/conteudos/hardware/C004P1.php">Disco Rígido (HD)</a></li>
						<li><a href="http://localhost/TCC/conteudos/hardware/C005.php">Unidades de Estado Sólido (SSD)</a></li>
						<li><a href="http://localhost/TCC/conteudos/hardware/C006.php">Placas de comunicação</a></li>
						<li><a href="http://localhost/TCC/conteudos/hardware/C007.php">Placas gráficas</a></li>
						<li><a href="http://localhost/TCC/conteudos/hardware/C008.php">Placas de som</a></li>
						<li><a href="http://localhost/TCC/conteudos/hardware/C009.php">Barramentos</a></li>
						<li><a href="http://localhost/TCC/conteudos/hardware/C010P1.php">Memória RAM</a></li>
						<li><a href="http://localhost/TCC/conteudos/hardware/C011.php">Processadores</a></li>
						<li><a href="http://localhost/TCC/conteudos/hardware/C012.php">Energia Eletrostática</a></li>
					</ul>
				</div>

				<!--Segunda divisão (Questões)-->
				<div class="item">
					<input type="checkbox" id="check8">
					<label for="check8">Questões</label>
					<ul>
			 			<li><a href="http://localhost/TCC/questoes/hardware/AT001.php">Tipos de Computadores e seus componentes</a></li>
						<li><a href="http://localhost/TCC/questoes/hardware/AT002.php">Fonte de Alimentação</a></li>
						<li><a href="http://localhost/TCC/questoes/hardware/AT003.php">Placa-Mãe</a></li>
					</ul>
				</div>
			</div>
</body>
</html>