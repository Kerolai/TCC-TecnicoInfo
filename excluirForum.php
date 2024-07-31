<?php
	$conexao = mysqli_connect ('localhost', 'root', '', 'tekmind') or die ('Erro!');
	$idMensagem = $_GET['idMensagem'];
	
	$sql = "DELETE FROM forum WHERE idMensagem = '" . $idMensagem ."';";
	$resultado = mysqli_query($conexao, $sql);

	if (!$resultado) {
		echo "<script> alert('Não foi possível excluir!');</script>";
	}else{
		header ('Location:editForum.php');
	}
?>