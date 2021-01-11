<?php
	session_start();
	include_once("conexao.php");
	$data = $_POST['dias'];
	//$diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
	//$dia = date('w',strtotime($data));
	$horai = $_POST['inicio'];
	$horaf = $_POST['fim'];

	print "$data entra $horai e sai às $horaf";


	$result_semana = "INSERT INTO semana (sem, entra, sai) VALUES ('$data', '$horai', '$horaf')";
	$resultado_semana = mysqli_query($conn, $result_semana);

	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Horário Cadastrado com sucesso!</p>";
		header("Location: regra.php");
	}else{
		$_SESSION['msg'] = "<p style='color:red;'>Horário Não Cadastrado.</p>";
		header("Location: regra.php");
	}
?>