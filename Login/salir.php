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
			if(isset($_SESSION['MiSession'])){
				session_destroy();
				echo "Se ha destruido session exitosamente </br>";
				echo "<a href='index.php' class='btn btn-danger'>Volver</a>";
			}
			else{
				echo "error <br>";
				echo "<a href='index.php' class='btn btn-danger'>Volver</a>";
			}
		?>
	</body>
</html>