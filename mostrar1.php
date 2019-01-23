<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-dark bg-primary">
			<a class="navbar-brand mb-0 h1" href="./">LUIS ALEJO BALBUENA</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="./">Inicio <span class="sr-only">(current)</span></a>
					</li> 
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Mostrar
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="./mostrar1.php">Mostrar 1</a>
							<a class="dropdown-item" href="./mostrar2.php">Mostrar 2</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./formulari.php">Insertar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./modificar.php">Modificar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./eliminar.php">Eliminar</a>
					</li>
				</ul>
			</div>
		</nav>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nom</th>
					<th scope="col">Web</th>
					<th scope="col">Localitat</th>
					<th scope="col">Escut</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "futbol";
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
				$conn->set_charset("utf8");
				$sql = "SELECT codi, nom, escut, web, localitat FROM equips ORDER BY nom ASC";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						if($row["web"]==null) {
							$web="no hay web";
						}else{
							$web="<a target='_blank' href='".$row["web"]."'>".$row["web"]."</a>";
						}
						echo "<tr><th scope='row'>".$row["codi"]."</th><td>".$row["nom"]."</td><td>".$web."</td><td>".$row["localitat"]."</td><td><img heigth='auto' width='50px' src='".$row["escut"]."'/></td></tr>";
					}
				} else {
					echo "<tr><th scope='row'>0</th><td>S/N</td><td>S/N</td><td>S/N</td></tr>";
				}
			?>
			</tbody>
		</table>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html>