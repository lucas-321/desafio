<?php

session_start();
include_once("conexao.php");
$id = $_GET['id'] ;

if(!empty($id)){
	$result_horario = "DELETE FROM agenda WHERE id='$id'";
	$resultado_horario = mysqli_query($conn, $result_horario);

	if(mysqli_affected_rows($conn)){
			$_SESSION['msg'] = "<p style='color:green;'>Horário Deletado com sucesso!</p>";
			header("Location: listar.php");
		}else{
			$_SESSION['msg'] = "<p style='color:red;'>Horário Não Deletado.</p>";
			header("Location: listar.php?id=$id");
		}
}
else{
			$_SESSION['msg'] = "<p style='color:red;'>Necessário Selecionar um usuário.</p>";
			header("Location: listar.php?id=$id");
		}
?>