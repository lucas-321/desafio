<?php
session_start();
?>
<?php
	include("header.php");
?>
<body>
	<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				
			</div>
			<div class="col-sm">
				<h3>Cadastrar Horário Para Atendimento</h3>
				<form method="POST" action="processa.php" class="form form-control">
				<!--<label>Procedimento: </label>
				<input type="text" name="proc" placeholder="Procedimento Desejado"><br><br>-->
					<div class="mb-3">
						<label>Data: </label>
						<input type="date" name="data" placeholder="Informe a Data" class="form-control">
					</div>
					<div class="mb-3">
						<label>Início: </label>
						<input type="time" name="inicio" placeholder="Hora de Iníncio" class="form-control" >
					</div>
					<div class="mb-3">
						<label>Final: </label>
						<input type="time" name="final" placeholder="Hora do Final" class="form-control" >
					</div>

				<input type="submit" name="" value="Salvar" class="btn btn-primary">
			</form>
			</div>
			<div class="col-sm">
				
			</div>	
		</div>
	</div>

	<!--<a href="listar.php"><button>Horários Disponíveis</button></a>
	<a href="intervalo.php"><button>Pesquisar Horários</button></a>-->
</body>
</html>