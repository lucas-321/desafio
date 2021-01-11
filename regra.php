<?php
session_start();
?>
<?php
	include("header.php");
?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm"></div>
			<div class="col-sm">
				<h3>Cadastrar Regra de Horário</h3>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
				?>
				<form method="POST" action="cria.php" class="form form-control">
					<div class="mb-3">
						<h5>Escolha um dia:</h5>
						<select name=dias>
							<option value="Domingo">Domingo</option>
							<option value="Segunda">Segunda</option>
							<option value="Terça">Terça</option>
							<option value="Quarta">Quarta</option>
							<option value="Quinta">Quinta</option>
							<option value="Sexta">Sexta</option>
							<option value="Sábado">Sábado</option>
						</select>
					</div>
					<!--<select name="dias">
					  <option value="0">Domingo</option>
					  <option value="1">Segunda</option>
					  <option value="2">Terça</option>
					  <option value="3">Quarta</option>
					  <option value="4">Quinta</option>
					  <option value="5">Sexta</option>
					  <option value="6">Sábado</option>
					</select><br>-->
					<h5>Escolha o Horário: </h5>
					<div class="mb-3">
						<label>Hora de Início: </label>
						<input type="time" name="inicio" class="form-control" >
					</div>
					<div class="mb-3">
						<label>Hora de Início: </label>
						<input type="time" name="fim" class="form-control" >
					</div>	

					<input type="submit" value="Cadastrar" class="btn btn-primary">	
				</form>				
			</div>
			<div class="col-sm"></div>
		</div>
	</div>
</body>
</html>