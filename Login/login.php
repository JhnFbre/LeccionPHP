<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<?php 
			$_SESSION['MiSession']= $_POST['nombre'];
			$nombre= $_POST['nombre'];
			$clave= $_POST['clave'];

			echo "Usuario: " . $nombre . "\nclave: " . $clave . "";
			echo "<a href= 'index.php' class='btn btn-danger'> Volver </a>";
		?>		
	</body>
</html>