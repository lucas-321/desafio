<?php
session_start();
include_once("conexao.php");
?>
	<?php
		include("header.php");
	?>
	<div class="container">
		<div class="row">
			<div class="col">
				
			</div>
			<div class="col">
			<h3>Pesquisar Horários</h3>
				<form action="pesquisa.php" method="POST" class="form">
					<div class="mb-3">
						<label>Data Inicial: </label><br>
						<input type="date" name="in" placeholder="Informe a Data">
					</div>
					<div class="mb-3">
						<label>Data Final: </label><br>
						<input type="date" name="f" placeholder="Informe a Data">
					</div>

					<input type="submit" name="" value="Pesquisar" class="btn btn-primary">
				</form><br>
				<a href="indexdes.php"><button class="btn btn-primary">Voltar</button></a>
			</div>
			<div class="col">
				
			</div>
		</div>	
	</div>
</body>
</html>