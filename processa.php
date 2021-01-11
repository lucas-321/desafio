<?php

session_start();
include_once("conexao.php");
//VARIÁVEIS PARA CADASTRO 
	$dia = $_POST['data'];
	$inicio = $_POST['inicio'];
	$fim = $_POST['final'];
	$d1 = date("d/m/Y",strtotime($dia));

//RESPOSTAS	
	echo "Dia: $d1 <br>Horário: Das $inicio até $fim";

	$result_agenda = "INSERT INTO agenda (data, inicio, final) VALUES ('$dia', '$inicio', '$fim')";
	$resultado_agenda = mysqli_query($conn, $result_agenda);

	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Horário Cadastrado com sucesso!</p>";
		header("Location: indexdes.php");
	}else{
		$_SESSION['msg'] = "<p style='color:red;'>Horário Não Cadastrado.</p>";
		header("Location: indexdes.php");
	}

?>