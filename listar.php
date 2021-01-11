<?php
session_start();
include_once("conexao.php");
?>
<?php
	include("header.php");
?>
<body>
	<div class="row">
		<div class="col">
			
		</div>
		<div class="col">
		<h3>Horários Disponíveis por Data</h3>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			$result_horario = "SELECT * FROM agenda ORDER BY data";
			$resultado_horario = mysqli_query($conn, $result_horario);
			while($row_horario = mysqli_fetch_assoc($resultado_horario)){
				$d2 = $row_horario['data'];
				$d1 = date("d/m/Y",strtotime($d2));
				echo " Dia: $d1<br>";
				echo " Horários: Das " . $row_horario['inicio'] . " até às " . $row_horario['final'] . "<br>";
				echo "<a href='editar.php?id=" . $row_horario['id'] . " '>Editar</a><br>";
				echo "<a href='proc_deleta.php?id=" . $row_horario['id'] . " '>Remover</a><br><br><hr>";
			}
		?>
		<a href="indexdes.php"><button class="btn btn-primary">Voltar</button></a>	
		</div>
		<div class="col">
			
		</div>
	</div>
</body>
</html>