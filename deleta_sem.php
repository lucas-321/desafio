<?php

session_start();
include_once("conexao.php");
$id = $_GET['id'] ;

if(!empty($id)){
	$result_semana = "DELETE FROM semana WHERE ident='$id'";
	$resultado_semana = mysqli_query($conn, $result_semana);

	if(mysqli_affected_rows($conn)){
			$_SESSION['msg'] = "<p style='color:green;'>Horário Deletado com sucesso!</p>";
			header("Location: consultar.php");
		}else{
			$_SESSION['msg'] = "<p style='color:red;'>Horário Não Deletado.</p>";
			header("Location: consultar.php?id=$id");
		}
}
else{
			$_SESSION['msg'] = "<p style='color:red;'>Necessário Selecionar um usuário.</p>";
			header("Location: consultar.php?id=$id");
		}
?>