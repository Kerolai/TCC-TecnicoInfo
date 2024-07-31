<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Opções</title>
	<style type="text/css">
		*{ margin: 0; padding: 0 }
		body{font-family: Century Gothic;}

		/*FUNDO DO TÍTULO PRINCIPAL*/
			.titulo {
				background-color: #4B0082;
				width: 100%;
				height: 120px;
			}
			#fonte1 {
				font-size: 65px;
				position: absolute;
				color: white;
				margin: 2%;
				left: 30%;
			}

		/*CAIXA DE MENU SUPERIOR*/
			/*caixa*/
			.menu{
				list-style: none;
				border: 1px solid #c0c0c0;
				float: right;
				cursor: pointer;
				font-size: 14px;
			}

			/*posição e borda*/
			.menu li{ float: left; border-right: 1px solid #c0c0c0; }

			/*estilo da fonte*/
			.menu li a{
				color: white;
				text-decoration: none;
				padding: 10px 20px;
				display: block;
			}

			/*transição de cor*/
			.menu li a:hover{ background: #BA55D3; color :#fff; }

		/*BOTÕES DE ESCOLHA*/
			.btn1 {
				padding: 35px 55px;
				border-color: #4B0082;
				background-color: #4B0082;
				color: white;
				border-radius: 35px;
				box-shadow: 0 0 60px 60px #4B0082 inset, 0 0 0 0 #4B0082;
				-webkit-transition: all 150ms ease-in-out;
				transition: all 150ms ease-in-out;
				cursor: pointer;
			}
			.btn1:hover { box-shadow: 0 0 400px 0 #4B0082 inset, 0 0 15px 5px #4B0082; }

			p{ font-size: 17px; position: center; }
			
			fieldset {
				border: 2px solid white;
				width: 20%;
				height: 30%;
				border-radius: 30px;
				padding: 50px 20px;
			}

			.div{
				display: flex;
				margin: 100px;
				margin-left: 32%;
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
	<!--Título-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; font-size: 65px;">Menu de Opções</font>

		<!--Menu superior horizontal-->
			<nav>
			 	<ul class="menu"><li><a href="index.php" type="submit">Sair</a></li></ul>
			</nav>
		<!--Logo-->
			<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 10px; margin: 5px;">
	</div>

	<!--BOTÕES-->
		<br><br>
		<div class="div">
			<div class="div2">
				<center>
					<fieldset>
						<a href="editForum.php"><button class="btn1"><p><b>Editar Fórum</b></p></button></a>
					</fieldset>
				</center>
			</div>

			<div class="div2">
				<center>
					<fieldset>
						<a href="tabelaUsuarios.php"><button class="btn1"><p><b>Editar Usuários</b></p></button></a>
					</fieldset>
				</center>
			</div>
		</div>
</body>
</html>