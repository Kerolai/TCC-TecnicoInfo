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
	<title>TekMind | Matérias | Programação I | Funções</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="estiloCP1.css">
</head>
<body>
	<!--MENU-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; font-size: 65px;">Programação I</font>
			
	<!--LOGO-->
		<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
	</div>
	<br><br><br><br><br><br><br>

	<!--BOTÃO PARA VOLTAR-->
		<div>
			<table style="margin-left: 2%;" width="7%">
			  	<tr>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/materias/1ano/prog1.php'"> <img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/materias/1ano/prog1.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="16%">
		  	<tr>
		    	<td><img src="imagens/prog1.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Funções</b></font></td>
		 	</tr>
		</table><br><br>

	<!--DOWNLOAD-->
		<div style="padding-left: 5%;">
			<a href="PDF_prog1/Prog.1 - C010 - Funções.pdf" download class="down">
				<img src="imagens/download.png" width="25px"><font style="margin-left: 7px;"><b>Baixar material</b></font>
			</a>
		</div><br>

	<!--CONTEÚDO-->
		<div>
			<p>Consiste em <b>dividir uma tarefa</b> complexa em <b>menores</b>, permitindo esconder detalhes de implementação. Assim <b>evitando a repetição</b> de um mesmo código.</p>

			<center>
				<table id="sintaxe" width="19%">
					<tr><td><b>
						&nbsp;&nbsp;tipo nome (lista de parâmetros){<br>
						&nbsp;&nbsp;&nbsp;&nbsp;bloco de comandos;<br>
						&nbsp;&nbsp;}
					</b></td></tr>
				</table>
			</center><br>
			<ul>
				<li>Podem ser do tipo <b>void</b>, conhecidas como <b>função sem retorno</b>.</li>
				<li>O nome pode ser uma palavra reservada da biblioteca do C, ou um nome dado pelo programador caso esta tenha sido estruturada durante a criação do programa.</li>
				<li>A declaração dos parâmetros/argumentos pode ser do tipo void (não receber argumento), ou receber qualquer outro tipo suportado pelo C.</li>
				<li>Podemos definir a função no início de um programa, antes ou depois da <i>main()</i>.</li>
				<li>A declaração da função consiste do cabeçalho da função seguido do ";".</li>
				<li>Toda função deve ser <b>declarada</b> antes de ser usada.</li>
			</ul><br><br>

			<font size="5" style="margin-left: 7%;"><b>→ Funções de retorno (VOID)</b></font><br>
			<p>
				<b style="font-size: 19px">Protótipo da função:</b><br><br>
				<b>Protótipo</b> é uma declaração de uma função que omite o corpo, mas especifica o seu nome, tipos de argumentos e tipos de retorno. Enquanto a <b>definição da função</b> especifica o que ela faz. Um protótipo de função pode ser entendido como a <b>especificação</b> da sua interface.<br><br>
			<b>Exemplo</b> (sem retorno):
			</p>
			<img src="imagens/C10/foto1.jpg" width="39%" style="margin-left: 10%;">

			<p><b>Exemplo</b> (com retorno):</p>
			<img src="imagens/C10/foto2.jpg" width="35%" style="margin-left: 10%;">

			<p>
				<b style="font-size: 19px">Passagem de parâmetros:</b><br><br>
				Serve para <b>passar dados</b> para uma função, onde, uma cópia do argumento é passada para a função. O parâmetro se comporta como uma <b>variável local</b>.<br><br>

				<b>Exemplo</b> (sem retorno e parâmetro):
			</p>
			<img src="imagens/C10/foto3.jpg" width="35%" style="margin-left: 10%;">

			<p><b>Exemplo</b> (com retorno e parâmetro):</p>
			<img src="imagens/C10/foto4.jpg" width="29%" style="margin-left: 10%;">

			<p>
				<b style="font-size: 19px">Variáveis locais:</b><br><br>
				Variáveis declaradas dentro de <b>uma função</b> são denominadas <b>locais</b> e somente podem ser usadas <b>dentro do próprio bloco</b>. São criadas apenas na entrada do bloco e destruídas na saída automaticamente.<br><br>

				<b style="font-size: 19px">Variáveis globais:</b><br><br>
				Variável declarada <b>externamente</b> podendo ser acessada por <b>qualquer função</b>.<br><br>

				<b>Exemplo</b> (com variáveis globais e local):
			</p>
			<img src="imagens/C10/foto5.jpg" width="22%" style="margin-left: 10%;">
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