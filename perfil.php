<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Perfil das desenvolvedoras</title>
	<link rel="stylesheet" type="text/css" href="estiloGeral.css">
	<style type="text/css">
		.corpo{
			display: flex;
			margin: 75px;
			position: center;
			margin-left: 400px;
			background: #fff;
		}
		
		.meio{
			width: 300px;
			height: 350px;
			margin-right: 170px;
			border-radius: 6px;
			box-shadow: 0 1px 5px rgba(0, 0, 0, .3);
		}
		.meio:hover, .meio:hover .descri{
			transition: .5s ease;
			background: #4B0082;
			color: #fff;
		}	
		.meio:hover h4, .meio:hover h3{
			transition: .4s ease;
			color: #fff;
		}
		.meio:hover p { color: #FFE4B5; }

		.topo{
			height: 100px;
			width: 100%;
			border-radius: 6px;
			background: #4B0082;
			display: flex;
			justify-content: center;
		}

		.imag{
			background-color: #fff;
			width: 100px;
			height: 100px;
			padding: 5px;
			border-radius: 50%;
			margin: 40px;
		}
		.imag img{
			background-color: #fff;
			width: 100px;
			height: 100px;
			border-radius: 50%;
			transition: .4s ease;
		}
		.imag:hover{ transform: scale(1.10); }

		.descri{
			background-color: #fff;
			padding: 20px;
			padding-top: 60px;
			text-align: center;
		}
		.descri h3{
			padding-top: 10px;
			line-height: .4;
			font-size: 1.1rem;
			color: rgba(0, 0, 0, .8);
		}
		.descri h4{
			padding-top: 22px;
			line-height: .4;
			font-size: 0.94rem;
			color: #A020F0;
		}
		.descri p {
			padding-top: 30px;
			color: rgba(0, 0, 0, .7);
		}

		.linhaV {
			width: 75%;
			height: 2px;
			background-color: black;
			position: absolute;
			left: 20%;
			top: 23%;
		}

		.linhaV2 {
			width: 68%;
			height: 2px;
			background-color: black;
			left: 27%;
			bottom: 80px;
			position: absolute;
		}
	</style>
</head>
<body>
	<!--Menu principal-->
	<div class="titulo" style="position: fixed; z-index: 1;">
		<font id="fonte1" style="margin: 2%; left: 41%; font-family: Courier New; font-size: 65px;">Perfil</font>

		<!--MENU SUPERIOR-->
			<nav>
			 	<ul class="menu">
			 		<li><a href="cronograma.php" type="submit">Cronograma</a></li>
			 		<li><a href="sobre.php" type="submit">Sobre</a></li>
			 		<li><a href="forum.php" type="submit">Fórum</a></li>
				  	<li><a href="login.php" type="submit">Entre</a></li>
				  	<li><a href="index.php" type="submit">Voltar</a></li>
				</ul>
			</nav>
			
		<!--LOGO-->
			<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
	</div>
	<br><br><br><br><br><br><br><br><br>

	<h2 style="padding-left: 50px;">Desenvolvedoras</h2>
	<div class="linhaV"></div>

	<!--Desenvolvedoras-->
	<div class="corpo">

		<!--Kerolai-->
		<div class="meio">
			<div class="topo">
				<div class="imag">
					<img src="imagens/perfil/KE.jpeg">
				</div>
			</div>
			<div class="descri">
				<h3>Kerolai Ribeiro França</h3>
				<h4>17 anos</h4>
				<h4>Estudante</h4>
				<p>Estou cursando informática e este é o nosso TCC.</p>
			</div>
		</div>

		<!--Elisângela-->
		<div class="meio">
			<div class="topo">
				<div class="imag">
					<img src="imagens/perfil/EL.jpg">
				</div>
			</div>
			<div class="descri">
				<h3>Elisângela Schaefer de Mello</h3>
				<h4>17 anos</h4>
				<h4>Estudante</h4>
				<p>Estou cursando informática e este é o nosso TCC.</p>
			</div>	
		</div>
	</div>

	<div class="linhaV2"></div>
	<h2 style="padding-left: 50px;">Orientadora e Coorientadora</h2>

	<!--Orientadora e Coorientadora-->
	<div class="corpo">

		<!--Maria Angélica-->
		<div class="meio">
			<div class="topo">
				<div class="imag">
					<img src="imagens/perfil/M.jpg">
				</div>
			</div>
			<div class="descri">
				<h3>Maria Angelica Figueiredo<br><br><br><br> Oliveira</h3><br>
				<h4>Professora</h4>
				<h4>Orientadora</h4>
			</div>
		</div>

		<!--Sandra Oliveira-->
		<div class="meio">
			<div class="topo">
				<div class="imag">
					<img src="imagens/perfil/S.jpg">
				</div>
			</div>
			<div class="descri">
				<h3>Sandra Maria do Nascimento<br><br><br><br> de Oliveira</h3><br>
				<h4>Professora</h4>
				<h4>Coorientadora</h4>
			</div>	
		</div>
	</div>
</body>
</html>