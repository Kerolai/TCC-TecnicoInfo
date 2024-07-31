<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Estude onde e quando quiser</title>
	<link rel="stylesheet" type="text/css" href="estiloGeral.css">
	<style type="text/css">
		body{ font-family: Century Gothic; font-size: 14px;}
		
		/*DIVISÕES DE CORES*/
			/*parte roxa 1*/
			.div1 {
				background-color: #4B0082;
				width: 100%;
				height: 375px;
			}

			/*parte branca 1*/
			.div2 { width: 100%; height: 608px; }

			/*parte roxa 2*/
			.div3 {
				background-color: #4B0082;
				width: 100%;
				height: 400px;
				overflow: hidden;
			}

		/*FRASE DESTAQUE*/
			.texto1{ margin: 20px; color: white; }

		/*BOTÃO PRINCIPAL*/
			/*botão*/
			.bt1{
				width: 200px;
				height: 60px;
				border: 2px solid #228B22;
				border-radius: 45px;
				cursor: pointer;
				font-weight: bold;
				font-size: 18px;
				color: #228B22;
				margin-left: 170px;
			}

			/*transição de cor*/
			.bt1:hover{ background: #00FF00; color: white; }

		/*Slides*/
			.slides{
				width: 500%;
				height: 500px; 
				display: flex;
			}
			.slides input { display: none; }

			.foto {
				width: 20%;
				padding-top: 10px;
				transition: 2s;
			}
			.foto img{
				width: 600px;
				height: 300px;
				border: 2px solid white;
				border-radius: 30px;
			}

		/*Slide Manual*/
			.nav_manual{
				position: center;
				margin-top: -140px;
				display: flex;
				justify-content: center;
			}

			.manual_bot{
				border: 2px solid white;
				padding: 5px; 
				border-radius: 10px; 
				cursor: pointer;
				transition: 1s;
			}
			.manual_bot:not(:last-child){ margin-right: 5px; }
			.manual_bot:hover{ background: white; }

			#bot1:checked ~ .inicial{ margin-left: 0; }
			#bot2:checked ~ .inicial{ margin-left: -20%; }
			#bot3:checked ~ .inicial{ margin-left: -40%; }
			#bot4:checked ~ .inicial{ margin-left: -60%; }

		/*Navegação automática das imagens*/
			.navegar_auto{
				position: center;
				display: flex;
				justify-content: center;
				margin-top: 360px;
			}

			.navegar_auto div{
				border: 2px solid black;
				padding: 5px;
				border-radius: 10px;
				transition:1s; 
			}

			.navegar_auto div:not(:last-child){ margin-right: 5px; }

			#bot1:checked ~ .navegar_auto .auto_bot1{ background: white; }
			#bot2:checked ~ .navegar_auto .auto_bot2{ background: white; }
			#bot3:checked ~ .navegar_auto .auto_bot3{ background: white; }
			#bot4:checked ~ .navegar_auto .auto_bot4{ background: white; }

		/*ÍCONES*/
			.icones{
				display: flex;
				margin: 140px;
				margin-left: 410px;
			}

			.icone{
				width: 150px;
				height: 280px;
				padding: 16px;
				margin-right: 80px;
				background-color: #4B0082;
			}
			.icone img{
				width: 50px;
				height: 50px;
				margin-top: 16px;
			}

			.Quadro, .QuadroT{
				font-size: 15px;
				color: white;
				padding: 6px;
			}

			.efeito{
				width: 80px;
				height: 80px;
				border-radius: 50px;
				background: transparent;
				border: 2px solid white;
			}

		/*COOKIES*/
			.cookies.ocultar{ display: none !important; }

			.cookies{
				background-color: black;
				width: 270px;
				height: 130px;
				border-radius: 25px;
				padding: 7px;
				margin: 3px;
				float: right top;
				position: fixed;
				top: 80%;
				z-index: 1;
			}

			#ck {padding-top: 3px;}
			.msg-co {color: white;}

			#a{
				display: block;
				text-decoration: none;
				font-weight: bold;
				color: white;
				line-height: 20px;
				transition: 0.2s;
			}
			#a:hover{  transition: 0.2s; color: #87CEEB; }

			.bot{
				border: none;
				outline: none;
				background-color: white;
				color: black;
				height: 25px;
				width: 55px;
				border-radius: 10px;
				cursor: pointer;
				font-size: 14px;
				transition: 0.2s;
			}

			.bot:hover{ background-color: #87CEEB; transition: 0.2s; }

			.text{
				color: white;
				font-size: 16px;
				margin: 15px;
				letter-spacing: 7px;
				position: relative;
			}

			.marquee{
				width: 390px;
				height: 160px;
				padding: 2px;
				margin: 45px;
				border-radius: 12px;
				background-color: #4B0082;
			}

			footer{ background: #4B0082; }

			footer h2, footer p, footer a, footer span { color: #D1D1D1; }
			footer a { text-decoration: none; }
			footer ul { padding: 0; }
			footer li{list-style: none; }

			.footer-box{
				width: 31%;
				padding: 1%;
				float: left;	
			}	
			footer .foot:after{
				clear: both;
				content: "";
				display: block;
			}

			.company{ width: 80%; }
			.company h2{ margin-top: 20px; }
			.company h2, .company p{ margin-bottom: 20px; }

			.footer-list li { margin-bottom: 15px; }
			.footer-list a{ transition: .5s; }
			.footer-list a:hover{ color: #FA8072; }

			.footer-list li:after{
				clear: both;
				content: "";
				display: block;
			}

			.services{ width: 80%; }

			/*icone*/
			.fab{
				font-size: 30px;
				margin-right: 10px;
				float: left;
			}
			.footer-list li span {
				float: left;
				height: 30px;
				line-height: 30px;
			}

			.footer-botton .final{ border-top: 1px solid black; }
			.footer-botton p{
				font-weight: 600;
				margin-top: 40px;
			}
	</style>
</head>
<body>
		<div class="div1">
			<!--MENU SUPERIOR-->
			<nav>
			 	<ul class="menu">
			 		<li><a href="forum.php" type="submit">Fórum</a></li>
			 		<li><a href="cronograma.php" type="submit">Cronograma</a></li>
			 		<li><a href="sobre.php" type="submit">Sobre</a></li>
				  	<li><a href="cadastrar.php" type="submit">Cadastre-se</a></li>
				  	<li><a href="login.php" type="submit">Entre</a></li>
				</ul>
			</nav><br>
			
			<!--LOGO-->
				<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px"><br>
				<br><br>

			<!--FOTO PRINCIPAL 1-->
				<img src="imagens/fundos/index/foto1.png" align="right" width="565" height="365" style="padding-right: 45px; padding-top: 0;">

			<!--FRASE 1-->
				<div class="texto1">
					<!--Frase primária-->
					<font color="white" size="6"><b>TekMind</b>, a sua plataforma virtual <br> para você ser um técnico em informática.<br>100% gratuita e 100% digital.</font>
					<br><br>

				<!--FRASE 2-->
					<p>A TekMind ajuda você a se tornar um profissional capacitado.<br>Estude a tecnologia da informação em seu ritmo, quando e onde quiser.</p>
					<br><br><br>
				</div>
		</div>
		<br><br>

		<div class="div2">
			<!--Botão Principal-->
				<a href="login.php"><button class="bt1">Comece já!</button></a>
				
				<!--ÍCONES-->
			<center>
				<div class="icones">
					<!--Documentos atualizados-->
					<div class="icone">
						<center>
							<div class="efeito">
							<img src="imagens/fundos/index/DocumentosBranco.png">
							</div>

							<b><p class="Quadro">Documentos atualizados</p></b>
							<br>
							<p class="QuadroT">Resumos, vídeos e atividades revisados e documentados para facilitar seu estudo.</p>
						</center>
					</div>

					<!--Gratuito-->
					<div class="icone">
						<center>
							<div class="efeito">
								<img src="imagens/fundos/index/GratuitoBranco.png">
							</div>

							<b><p class="Quadro">Gratuito</p></b>
							<br>
							<p class="QuadroT">Não possui propagandas comerciais e conteúdos pagos.</p>
						</center>
					</div>

					<!--Fórum Interativo-->
					<div class="icone">
						<center>
							<div class="efeito">
								<img src="imagens/fundos/index/ForumBranco.png">
							</div>

							<b><p class="Quadro">Fórum interativo</p></b><br>
							<p class="QuadroT">Interação entre os alunos de forma simples e intuitiva.</p>
							</center>
					</div>
				</div>
			</center>
		</div>

		<!--SLIDES-->
		<center>
		<div class="div3">
			<div class="slides">
				
				<!--Botão de deslize-->
				<input type="radio" name="bot" id="bot1">
				<input type="radio" name="bot" id="bot2">
				<input type="radio" name="bot" id="bot3">
				<input type="radio" name="bot" id="bot4">
			
				<!--Fotos-->
				<div class="foto inicial"><img src="imagens/fundos/index/crono1.jpg" alt=""></div>
				<div class="foto"><img src="imagens/fundos/index/forum1.jpg" alt=""></div>
				<div class="foto"><img src="imagens/fundos/index/sobre1.jpg" alt=""></div>
				<div class="foto"><img src="imagens/fundos/index/inicio1.jpg" alt=""></div>

			<!--Navegação automática-->
				<div class="navegar_auto">
					<div class="auto_bot1"></div>
					<div class="auto_bot2"></div>
					<div class="auto_bot3"></div>
					<div class="auto_bot4"></div>
				</div>
			</div>

			<!--Navegação manual-->
				<div class="nav_manual">
					<label for="bot1" class="manual_bot"></label>
					<label for="bot2" class="manual_bot"></label>
					<label for="bot3" class="manual_bot"></label>
					<label for="bot4" class="manual_bot"></label>
				</div>
		</div>
		</center>

		<!--Função java navegação automática-->
		<script type="text/javascript">
			var cont = 1;
			setInterval(function(){
				document.getElementById('bot' + cont).checked = true;
				cont++;
				if (cont > 4) { cont = 1; }
			},5000 );
		</script>

		<!--COOKIES-->
		<div class="cookies ocultar" id="min">
			<p class="msg-co">Esta plataforma utiliza cookies para melhorar nossos serviços. Ao clicar no botão "aceito" você concorda e aceita o uso que fazemos dos cookies.<a id="a" href="#">Mais Informações</a></p><br>
			<center><div class="bot"><b><p id="ck">Aceito</p></b></div></center>
		</div>

		<!--Java do Cookie--->
		<script type="text/javascript">
			
			if(!localStorage.nossoCook){
				document.querySelector('.cookies').classList.remove('ocultar')
			}
			const acceptCookies= () => {
				document.querySelector('.cookies').classList.add('ocultar')
				localStorage.setItem("nossoCook", "accept");
			}

			const btnCookies = document.querySelector('.bot');
			btnCookies.addEventListener('click', acceptCookies)

			// Esconde a div no início
			var div = document.getElementById('min');
			div.style.display = 'none';

			setTimeout(function() {
    			div.style.display = 'block';
			}, 3000); //mostra a div depois de 3 segundos
		</script>
		<br><br><br>

		<!--IMAGEM PRINCIPAL 2-->
		<img src="imagens/fundos/index/foto2.png" align="right" width="420" height="400" style="padding-right: 140px; margin-top: -3%;"><br>
		
		<!-- +INFORMAÇÕES-->
		<div class="marquee">
			<font size="5" color="white" style="margin: 6%;"><b>O que a plataforma oferece?</b></font>
			<marquee class="text" width="365" loop="1" behavior="slide" direction="right" scrollamount="15">
				Conteúdos em PDFs;<br>
				Questões para praticar;<br>
				Vídeo aulas;
			</marquee>
		</div><br><br><br><br><br>

		<!--FOOTER-->
		<footer>
		<div class="foot">
			<div class="footer-box">
				<div class="company">
					<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px"><br>
					<h2>TekMind</h2>
					<p>A plataforma criada especialmente para você, aluno, que está precisando de uma 'mãozinha' nos estudos.</p>
				</div>	
			</div>

			<!--SERVIÇOS-->
			<div class="footer-box">
				<div class="services">
					<h2>Serviços</h2><br>
					<ul class="list footer-list">
						<li><a href="index.php">Página inicial</a></li>
						<li><a href="sobre.php">Sobre</a></li>
						<li><a href="forum.php">Fórum interativo</a></li>
						<li><a href="cronograma.php">Cronograma do aluno</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="cadastro.php">Cadastro</a></li>
					</ul>
				</div>
			</div>

			<!--REDES SOCIAIS-->
			<div class="footer-box">
				<h2>Redes Sociais</h2><br>

				<ul class="list"><li>
					<a href="#">
						<img src="imagens/contatos/facebook.png" width="15" height="15">
						<span>Facebook</span>
					</a>
				</li></ul><br>

				<ul class="list"><li>
					<a href="#">
						<img src="imagens/contatos/instagram.png" width="15" height="15">
						<span>Instagram</span>
					</a>
				</li></ul><br>

				<ul class="list"><li>
					<a href="#">
						<img src="imagens/contatos/twitter.png" width="15" height="13">
						<span>Twitter</span>
					</a>
				</li></ul>	
			</div>

			<!--CONTATOS-->
			<div class="footer-box">
				<div class="contatos">
					<h2>Contatos</h2>
					<br>
					<ul class="list footer-list">
						<li>
							<p><img src="imagens/contatos/gmail.png" width="16" height="12"> E-mail:<br>elisangela.2019315732@aluno.iffar.com.br<br>kerolai.2019315901@aluno.iffar.edu.br</p>
						</li>
						<li>
							<p><img src="imagens/contatos/facebook.png" width="15" height="15"> Facebook:<br>Elisângela S. Mello<br>Kerolai Ribeiro França</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!--Créditos-->
	<hr size=1 color= white>
	<div class="div">
		<p class="cred">Elisângela e Kerolai ® 2021</p>
	</div>
</body>
</html>