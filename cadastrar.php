<?php
	$conexao = mysqli_connect ('localhost', 'root', '', 'tekmind') or die ('Erro!');
	if (isset ($_POST['cadastro'])) {

		$nome = $_POST['nomeU'];
		$email = $_POST['emailU'];
		$endereco = $_POST['enderecoU'];
		$cpf = $_POST['cpfU'];
		$senha = MD5($_POST['senhaU']);
		$senhaC = MD5($_POST['senhaC']);
		
		if($senha == $senhaC) {
			$sql = "INSERT INTO usuarios VALUES (null, '$nome', '$email', '$endereco', '$cpf', '$senha');";
			$resultado = mysqli_query ($conexao, $sql);

			echo "<script> alert('Usuário cadastrado com sucesso! Clique em fazer login para continuar');</script>";
		}else{
			echo "<script> alert ('Senhas não equivalentes!');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Cadastre-se</title>
	<link rel="stylesheet" type="text/css" href="estiloGeral.css">
	<link rel="stylesheet" type="text/css" href="estiloBot.css">
</head>
<body>
	<!--TÍTULO-->
		<div class="titulo">
			<font id="fonte1" style="left: 39%; margin: 2%; font-family: Courier New; font-size: 60px;">Cadastro</font>

		<!--MENU SUPERIOR-->
			<ul class="menu">
				<li><a href="login.php" type="submit">Login</a></li>
				<li><a href="index.php" type="submit">Voltar</a></li>
			</ul>

		<!--LOGO-->
			<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 10px; margin-top: 8px;"><br>
	</div>

	<!--CORPO PRINCIPAL-->
	<div class="principal">
		<center><br>
			<fieldset>
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>"><br>
					<img src="imagens/userR.png" width="120" height="120">

					<!--Caixa de Dados-->
						<input type="text" name="nomeU" placeholder="Nome Completo" required maxlength="100">
						<input type="email" name="emailU" placeholder="E-mail" required maxlength="100">
						<input type="text" name="enderecoU" placeholder="Endereço" required maxlength="50">
						<input type="text" name="cpfU" placeholder="CPF" required maxlength="12">
						<input type="password" name="senhaU" placeholder="Senha" required maxlength="32">
						<input type="password" name="senhaC" placeholder="Confirmar senha" required maxlength="32">

					<!--Botão de envio-->
					<button class="bot" name="cadastro">Cadastrar</button>
					<br><br>
				</form>
			</fieldset><br><br>
		</center>
			
		<!--CRÉDITOS-->
		<div class="div">
			<p class="cred">Elisângela e Kerolai ® 2021</p>
		</div>
	</div>
</body>
</html>