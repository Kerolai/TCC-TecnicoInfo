<?php
	$conexao = mysqli_connect ('localhost', 'root', '', 'tekmind') or die ('Erro!');

	$id = $_POST['idUsuario'];
    $nome = $_POST['nomeUsuario'];
    $email = $_POST['emailUsuario'];
    $endereco = $_POST['enderecoUsuario'];
    $cpf = $_POST['cpfUsuario'];

	$editar = "UPDATE usuarios SET nomeUsuario = '$nome', emailUsuario = '$email', enderecoUsuario = '$endereco', cpfUsuario = '$cpf' WHERE idUsuario = '$id'";

    $query = mysqli_query($conexao, $editar);
    header("Location:tabelaUsuarios.php");
?>