<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Bootstrap demo</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
			crossorigin="anonymous"
		/>
	</head>
	<body class="bg-info">
		<nav class="navbar navbar-expand-lg bg-info navbar-dark">
			<div class="container">
				<a class="navbar-brand text-capitalize" href="#">pusima</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarNavAltMarkup"
					aria-controls="navbarNavAltMarkup"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ms-auto">
						<a
							class="nav-link active text-capitalize"
							aria-current="page"
							href="#"
							>Home</a
						>
						<a class="nav-link text-capitalize" href="#">mahasiswa</a>
						<a class="nav-link text-capitalize" href="#">dosen</a>
						<a class="nav-link text-capitalize" href="#">mata kuliah</a>
					</div>
				</div>
			</div>
		</nav>
		<div class="container">
			<span class="text-center text-capitalize">
				<h1 class="text-light text-capitalize text-center mt-5">Praktek 6</h1>
				<p class="text-light fs-4">
					nama : fajar septianto <br />nim : 0110221171 <br />mata kuliah :
					pemrograman web
				</p>
			</span>
		</div>
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-5">
					<table class="table table-hover table-dark">
						<thead>
							<tr class="text-capitalize">
								<td>no</td>
								<td>nama mahasiswa</td>
								<td>nim</td>
								<td>jurusan</td>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</div>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
			crossorigin="anonymous"
		></script>
	</body>
</html>
