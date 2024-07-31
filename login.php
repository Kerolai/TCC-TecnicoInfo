<?php
	$conexao = mysqli_connect ('localhost', 'root', '', 'tekmind') or die ('Erro!');
	if (isset ($_POST['envio'])) {

		$email = ($_POST['emailUsuario']);
		$senha = MD5($_POST['senhaUsuario']);

		$sql = "SELECT * FROM usuarios WHERE emailUsuario = '$email' AND senhaUsuario = '$senha'";
		$resultado = mysqli_query ($conexao, $sql);
		
		/*senha e email confirmado -> ir à página principal do curso*/
		if (mysqli_num_rows ($resultado) > 0) {
			header ('Location:inicial.php');
		}else{
			echo "<script> alert('Email ou senha incorretos!');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Conecte-se</title>
	<link rel="stylesheet" type="text/css" href="estiloGeral.css">
	<link rel="stylesheet" type="text/css" href="estiloBot.css">
</head>
<body>
	<!--CAIXA PRINCIPAL-->
		<div class="titulo">
			<font id="fonte1" style="left: 42%; margin: 2%; font-family: Courier New; font-size: 65px;">Login</font>
		
		<!--MENU SUPERIOR-->
			<ul class="menu">
				<li><a href="cadastrar.php" type="submit">Cadastre-se</a></li>
				<li><a href="loginADM.php" type="submit">Administrador</a></li>
				<li><a href="index.php" type="submit">Voltar</a></li>
			</ul>

			<!--LOGO-->
			<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
		</div>

	<!--PARTE PRINCIPAL-->
	<div class="principal">
		<br><br><br>
		<center>
			<fieldset>
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>"><br>
					<img src="imagens/userR.png" width="110" height="110">

					<!--Caixa de E-mail e Senha-->
					<input type="email" name="emailUsuario" placeholder="E-mail" required="" maxlength="100">
					<input type="password" name="senhaUsuario" placeholder="Senha" required="" maxlength="32">
					<br>

					<!--links externos-->
					<a class="a" href="cadastrar.php">Não tem uma conta? Cadastre-se!</a><br><br>

					<!--Botão de envio-->
					<button class="bot" name="envio">Entrar</button><br><br>
				</form>
			</fieldset>
		</center>

		<!--CRÉDITOS-->
		<div class="div" style="position: fixed;">
			<p class="cred">Elisângela e Kerolai ® 2021</p>
		</div>
	</div>
</body>
</html>