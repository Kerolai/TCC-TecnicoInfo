<?php
	$conexao = mysqli_connect ('localhost', 'root', '', 'tekmind') or die ('Erro!');
	if (isset ($_POST['enviar'])) {
		$email = $_POST["emailUsuario"];
		$senha = $_POST["senhaUsuario"];

		//criando variáveis específicas dos administradores
			//Elisangela
				$emailADM= "elisschaefermello60@gmail.com";
				$senhaADM= "12345";

			//Kerolai
				$emailADM2= "kerolai.ribeiro@gmail.com";
				$senhaADM2= "98765";

		//se forem diferentes...
		if ($email != $emailADM || $email != $emailADM2 || $senha != $senhaADM || $senha != $senhaADM2) {
			echo "<script> alert('Email ou senha incorretos!');</script>";
		}
		//se forem iguais
		if ($email == $emailADM && $senha == $senhaADM) { header ('Location:opcoesADM.php'); }
		if ($email == $emailADM2 && $senha == $senhaADM2) { header ('Location:opcoesADM.php'); }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Conecte-se como Administrador</title>
	<link rel="stylesheet" type="text/css" href="estiloGeral.css">
	<link rel="stylesheet" type="text/css" href="estiloBot.css">
</head>
<body>
	<!--CAIXA SUPERIOR FIXA-->
		<!--Título-->
		<div class="titulo">
			<font id="fonte1" style="left: 28%; margin: 2%; font-family: Courier New; font-size: 60px;">Login Administrador</font>
		
		<!--Menu superior horizontal-->
			<ul class="menu">
				<li><a href="cadastrar.php" type="submit">Cadastre-se</a></li>
				<li><a href="login.php" type="submit">Voltar</a></li>
			</ul>

		<!--Logo-->
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
					<br><br>
					
					<!--Botão de envio-->
					<button class="bot" name="enviar">Entrar</button><br><br>
				</form>
			</fieldset>

		<!--CRÉDITOS-->
		<div class="div" style="position: fixed;">
			<p class="cred">Elisângela e Kerolai ® 2021</p>
		</div>
	</div>
</body>
</html>