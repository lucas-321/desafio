<?php
session_start();
include_once("conexao.php");
$id = $_GET['id'];
$result_semana = "SELECT  * FROM semana WHERE ident = '$id'";
$resultado_semana = mysqli_query($conn, $result_semana);
$row_semana = mysqli_fetch_assoc($resultado_semana);
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
					<form method="POST" action="edita_sem.php">
						<!--<label>Procedimento: </label>
						<input type="text" name="proc" placeholder="Procedimento Desejado"><br><br>-->
						<input type="hidden" name="id" value="<?php print $row_semana['ident']?>">
						<div class="mb-3">
							<label>Dia: </label>
							<select name=dia>
							<option value="<?php print $row_semana['sem']?>"><?php print $row_semana['sem']?></option>
							<option value="Domingo">Domingo</option>
							<option value="Segunda">Segunda</option>
							<option value="Terça">Terça</option>
							<option value="Quarta">Quarta</option>
							<option value="Quinta">Quinta</option>
							<option value="Sexta">Sexta</option>
							<option value="Sábado">Sábado</option>
						</select>
							<!--<input type="text" name="dia" placeholder="Informe a Data" value="<?php print $row_semana['sem']?>">-->
						</div>
						<div class="mb-3">
							<label>Início: </label>
							<input type="time" name="inicio" placeholder="Hora de Iníncio" value="<?php print $row_semana['entra']?>">
						</div>
						<div class="mb-3">
							<label>Final: </label>
							<input type="time" name="final" placeholder="Hora do Final" value="<?php print $row_semana['sai']?>">
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