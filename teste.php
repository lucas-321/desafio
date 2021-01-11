<?php
	$diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
	$data = date('2020-12-12');
	$dia = date('w',strtotime($data));

	print "$data não é $diasemana[$dia]";
?>