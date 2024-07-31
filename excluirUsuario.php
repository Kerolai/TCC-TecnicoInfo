<?php
	$conexao = mysqli_connect ('localhost', 'root', '', 'tekmind') or die ('Erro!');
	$id = $_GET['idUsuario'];
	
	$sql = "DELETE FROM usuarios WHERE idUsuario = '" . $id ."';";
	$resultado = mysqli_query($conexao, $sql);

	if (!$resultado) {
		echo "<script> alert('Não foi possível excluir!');</script>";
	}else{
		header ('Location:tabelaUsuarios.php');
	}
?>