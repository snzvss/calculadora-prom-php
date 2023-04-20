<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="normalize.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400&display=swap" rel="stylesheet">
	<title>Notas Finales</title>
</head>
<body>
	<div class="titulo">
		<h2>Notas Finales</h2>
	</div>

	<div class="notas">
		<?php
			$estudiante1 = $_POST["estudiante1"];
			$calificacion1_est1 = $_POST["calificacion1_est1"];
			$calificacion2_est1 = $_POST["calificacion2_est1"];
			$estudiante2 = $_POST["estudiante2"];
			$calificacion1_est2 = $_POST["calificacion1_est2"];
			$calificacion2_est2 = $_POST["calificacion2_est2"];
			$estudiante3 = $_POST["estudiante3"];
			$calificacion1_est3 = $_POST["calificacion1_est3"];
			$calificacion2_est3 = $_POST["calificacion2_est3"];

			$nota_final_est1 = ($calificacion1_est1 * 0.4) + ($calificacion2_est1 * 0.6);
			$nota_final_est2 = ($calificacion1_est2 * 0.4) + ($calificacion2_est2 * 0.6);
			$nota_final_est3 = ($calificacion1_est3 * 0.4) + ($calificacion2_est3 * 0.6);

			echo '<div class="estudiante">';
			echo '<h3>' . $estudiante1 . '</h3>';
			echo '<p class="nota">';
			echo 'Nota Final: <span class="' . ($nota_final_est1 >= 3.0 ? 'nota_aprobado' : 'nota_rechazado') . '">' . ' ' . $nota_final_est1 . '</span>';
			echo '</p>';
			echo '</div>';
			
			echo '<div class="estudiante">';
			echo '<h3>' . $estudiante2 . '</h3>';
			echo '<p class="nota">';
			echo 'Nota Final: <span class="' . ($nota_final_est2 >= 3.0 ? 'nota_aprobado' : 'nota_rechazado') . '">' . ' ' . $nota_final_est2 . '</span>';
			echo '</p>';
			echo '</div>';
			
			echo '<div class="estudiante">';
			echo '<h3>' . $estudiante3 . '</h3>';
			echo '<p class="nota">';
			echo 'Nota Final: <span class="' . ($nota_final_est3 >= 3.0 ? 'nota_aprobado' : 'nota_rechazado') . '">' . ' ' . $nota_final_est3 . '</span>';
			echo '</p>';
			echo '</div>';
			

		?>
	</div>
</body>
</html>