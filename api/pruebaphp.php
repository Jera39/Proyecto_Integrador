<!DOCTYPE html>
<html lang="ES">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Black Gym</title>
	<link rel="stylesheet" href="../Estilos/styles.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<!--comentario-->

<body>

	<header>
		<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html"><img src="../img/logo.png" alt="" width="75" height="75"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
					<ul class="navbar-nav ">
						<li class="nav-item">
							<a class="nav-link active " href="index.html">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active " aria-current="page" href="Nosotros.html">Nosotros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active " href="Entrenadores.html">Entrenadores</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active " href="Ejercicios.html">Ejercicios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active " href="Calificacion.html">Calificar</a>
						</li>

					</ul>

				</div>
				<li class="d-flex" id="login">
					<a href="login.html" class="btn btn-outline-success me-2"><svg width="256px" height="256px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="loglog">

							<g id="SVGRepo_bgCarrier" stroke-width="0" />

							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

							<g id="SVGRepo_iconCarrier">
								<circle cx="12" cy="9" r="3" stroke="#1b7c50" stroke-width="1.5" />
								<path d="M17.9691 20C17.81 17.1085 16.9247 15 11.9999 15C7.07521 15 6.18991 17.1085 6.03076 20" stroke="#1b7c50" stroke-width="1.5" stroke-linecap="round" />
								<path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#1b7c50" stroke-width="1.5" stroke-linecap="round" />
							</g>

						</svg>
						Loguearme</a>
				</li>
			</div>
		</nav>
	</header>

	<main class="main ">

		<div class="Contador">
			<div class="container text-center align-self-center ">
				<div class="row-1 bg-dark align-self-center  ">
					<h2 class="af1">AFORO:</h2>
					<div class="col align-self-center align-item-center">
						<br>
						<h2 id="contadorAforo" class="af">
							<?php

							include __DIR__ . '/conexion.php';

							try {
								// Realiza la consulta SQL para obtener el valor del contador desde la tabla "Aforo"
								$query = 'SELECT "Contador" FROM "Aforo"';
								$result = $db->query($query);

								if ($result !== false) {
									$row = $result->fetch(PDO::FETCH_ASSOC);
									if ($row) {
										// Imprime el valor del contador en pantalla
										$contador = $row['Contador'];
										echo $contador;
									} else {
										echo "No se encontraron registros en la tabla 'Aforo'.";
									}
								} else {
									echo "Error al ejecutar la consulta SQL.";
								}
							} catch (PDOException $e) {
								echo "Error al conectar a la base de datos: " . $e->getMessage();
							}
							?>

						</h2>

					</div>
					<a href="#" type="button" class="btn btn-outline-warning" id="ejecutarPHP">Actualizar</a>
				</div>
			</div>
		</div>

	</main>

	<footer class="dark-footer">

		<div class="container-fluid ">

			<div class="row p-5 pb-2 bg-dark">

				<div class="col-xs-12  col-md-6  col-lg-2">
					<a class="navbar-brand" href="file:///C:/Users/Marco/Desktop/CICLOS/CICLO%20JULIO%20-2023/Integrador%201/Proyecto/Gym/Index.html#"><img src="../img/logo.png" alt="" width="75" height="75"></a>
				</div>
				<div class="col-xs-12 col-md-6  col-lg-2">
					<p class="h4">Siguenos:</p>
				</div>
				<div class="redes col-xs-12 col-md-6  col-lg-2">
					<p class="h6"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
							<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
						</svg><a href="https://api.whatsapp.com/send?phone=51978010304" class="text-white text-decoration-none" target="_blank"> whatsapp</a> </p>
				</div>
				<div class="redes col-xs-12 col-md-6  col-lg-2">
					<p class="h6"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
							<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
						</svg><a href="https://www.instagram.com/black.gym23/?igshid=NzZhOTFlYzFmZQ%3D%3D" class="text-white text-decoration-none" target="_blank"> Instagram</a> </p>
				</div>
				<div class="redes col-xs-12 col-md-6  col-lg-2">
					<p class="h6"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="icon line-color" viewBox="0 0 24 24" id="tiktok" data-name="Line Color">
							<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
							<g id="SVGRepo_iconCarrier">
								<path id="primary" d="M21,7H20a4,4,0,0,1-4-4H12V14.5a2.5,2.5,0,1,1-4-2V8.18a6.5,6.5,0,1,0,8,6.32V9.92A8,8,0,0,0,20,11h1Z" style="fill: none; stroke: #ffffff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
								</path>
							</g>
						</svg><a href="https://www.tiktok.com/@black310628?_t=8fq0wVSPzUs&_r=1" class="text-white text-decoration-none" target="_blank"> TikTok</a></p>
				</div>
				<div class="redes col-xs-12 col-md-6  col-lg-2">
					<a href="#" class="text-white text-decoration-none" target="_blank"> @Terminos y condiciones</a>
				</div>

			</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/supabase@1.14.0/dist/supabase.js"></script>
	<script src="conexion.js"></script>
</body>

</html>