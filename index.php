<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Odontologia WEB</title>
	<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\almir\CSS.css">		
</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<a href="index.php"><li>Cadastro</li></a>
				<a href="consultas.php"><li>Consultas</li></a>
			</ul>
		</nav>
		<section>
			<h1>Cadastro de Pacientes</h1>
			<hr><br><br>

			<form method="post" action="processa.php">
				<input type="submit" value="Salvar" class="bnt">
				<input type="reset" value="Limpar" class="bnt">
				<br><br>

				Nome<br>
				<input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
				Email<br>
				<input type="email" name="email" class="campo" maxlength="50" required><br>
			</form>
		</section>
	</div>

</body>
</html>