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
		<h3>Horários Semanais Disponíveis</h3>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			$result_semana = "SELECT * FROM semana ORDER BY CASE WHEN sem = 'Domingo' THEN CHAR(1) WHEN sem = 'Segunda' THEN CHAR(2) WHEN sem = 'Terça' THEN CHAR(3) WHEN sem = 'Quarta' THEN CHAR(4) WHEN sem = 'Quinta' THEN CHAR(5) WHEN sem = 'Sexta' THEN CHAR(6) WHEN sem = 'Sábado'  THEN CHAR(7) ELSE sem END";
			$resultado_semana = mysqli_query($conn, $result_semana);
			while($row_semana = mysqli_fetch_assoc($resultado_semana)){
				
				//CONVERSÃO DOS VALORES PARA O FORMATO IDEAL
				$hi1 = $row_semana['entra'];
				$hi2 = date("H:i",strtotime($hi1));
				$hs1 = $row_semana['sai'];
				$hs2 = date("H:i",strtotime($hs1));

				//RESPOSTA
				echo $row_semana['sem'] . " atendimento das $hi2 às $hs2.<br>";
				echo "<a href='edita_sem_form.php?id=" . $row_semana['ident'] . " '>Editar</a><br>";
				echo "<a href='deleta_sem.php?id=" . $row_semana['ident'] . " '>Remover</a><br><hr>";
				
			}
		?>
		<a href="regra.php"><button class="btn btn-primary">Voltar</button></a>	
		</div>
		<div class="col">
			
		</div>
	</div>
</body>
</html>