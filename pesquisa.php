<?php
	include("header.php");
?>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				
			</div>
			<div class="col">
			<h3>Horários Disponíveis na Data Solicitada</h3>
				<?php

				//session_start();
				include_once("conexao.php");

				//VARIÁVEIS PARA PESQUISA
					$i = $_POST['in'];
					$f = $_POST['f'];

					

					/*Paginação
					$pagina_atual = filter_input(INPUT_GET,'pagina',FILTER_SANITIZE_NUMBER_INT);
					$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

					$qnt_result_pg = 5;
					$comeco = ($qnt_result_pg * $pagina) - $qnt_result_pg;*/

			//RESPOSTAS

					//Requisição

					$result_horario = "SELECT * FROM agenda WHERE data > '$i' && data < '$f' ORDER BY data";
						$resultado_horario = mysqli_query($conn, $result_horario);
						while($row_horario = mysqli_fetch_assoc($resultado_horario)){
						//CONVERSÃO DOS VALORES PARA O FORMATO IDEAL
							//DATA
							$d2 = $row_horario['data'];
							$d1 = date("d/m/Y",strtotime($d2));
							//HORA
							$i1 = $row_horario['inicio'];
							$i2 = date("H:i",strtotime($i1));
							$f1 = $row_horario['final'];
							$f2 = date("H:i",strtotime($f1));

							//RESPOSTAS
							echo " Dia: $d1<br>";
							echo " Horários: Das $i2 até às $f2 <br>";
							echo "<a href='editar.php?id=" . $row_horario['id'] . " '>Editar</a><br>";
							echo "<a href='proc_deleta.php?id=" . $row_horario['id'] . " '>Remover</a><br><br><hr>";
						}	
						//echo '<a href="indexdes.php"><button>Voltar</button></a>';

				?>
				<a href="javascript:window.history.back();"><button class="btn btn-success">Voltar</button></a>
			</div>
			<div class="col">
				
			</div>
		</div>	
	</div>
</body>
</html>
