<?php

session_start();
include_once("conexao.php");
//VARIÁVEIS PARA CADASTRO 
	$id = $_POST['id'];
	$dia = $_POST['data'];
	$inicio = $_POST['inicio'];
	$fim = $_POST['final'];
	$d1 = date("d/m/Y",strtotime($dia));

//RESPOSTAS	
	echo "Dia: $d1 <br>Horário: Das $inicio até $fim";

	$result_agenda = "UPDATE agenda SET data = '$dia', inicio = '$inicio', final = '$fim' WHERE id = '$id'";
	$resultado_agenda = mysqli_query($conn, $result_agenda);

	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Horário Modificado com sucesso!</p>";
		header("Location: editar.php?id=$id");
	}else{
		$_SESSION['msg'] = "<p style='color:red;'>Horário Não Modificado.</p>";
		header("Location: editar.php?id=$id");
	}

?>