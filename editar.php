<?php
session_start();
include_once("conexao.php");
$id = $_GET['id'];
$result_horario = "SELECT  * FROM agenda WHERE id = '$id'";
$resultado_horario = mysqli_query($conn, $result_horario);
$row_horario = mysqli_fetch_assoc($resultado_horario);
?>
<?php
	include("header.php");
?>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				
			</div>
			<div class="col">
				<h3>Editar Horários</h3>
					<?php
						if(isset($_SESSION['msg'])){
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
					?>
					<form method="POST" action="proc_edita.php">
						<!--<label>Procedimento: </label>
						<input type="text" name="proc" placeholder="Procedimento Desejado"><br><br>-->
						<input type="hidden" name="id" value="<?php print $row_horario['id']?>">
						<div class="mb-3">
							<label>Data: </label>
							<input type="date" name="data" placeholder="Informe a Data" value="<?php print $row_horario['data']?>">	
						</div>
						<div class="mb-3">
							<label>Início: </label>
							<input type="time" name="inicio" placeholder="Hora de Iníncio" value="<?php print $row_horario['inicio']?>">
						</div>
						<div class="mb-3">
							<label>Final: </label>
							<input type="time" name="final" placeholder="Hora do Final" value="<?php print $row_horario['final']?>">
						</div>

						<input type="submit" name="" value="Editar" class="btn btn-primary">
					</form><br>
					<a href="javascript:window.history.back();"><button class="btn btn-success">Voltar</button></a>				
			</div>
			<div class="col">
				
			</div>
		</div>
	</div>
</body>
</html>