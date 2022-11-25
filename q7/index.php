<?php
	$contatos = [];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Minha Agenda</title>

	<link rel="stylesheet" href="../styles\bootstrap.min.css">
</head>

<body class="container-fluid p-0">
	<header class="p-4 bg-dark text-white">
		<h1 class="fs-2">Agenda telefônica</h1>
	</header>
	<main class="p-4 vstack gap-4">
		<form class="col-12 col-sm-8 col-lg-3 vstack gap-3">
			<div>
				<label for="nome" class="form-label">Nome</label>
				<input type="text" name="nome" id="nome" class="form-control">
			</div>
			<div>
				<label for="tel" class="form-label">Telefone</label>
				<input type="text" name="tel" id="tel" class="form-control">
			</div>
			<button class="btn btn-primary w-50">Adicionar</button>
		</form>
		<section class="mt-4 table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>Telefone</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>1</th>
						<td>Mark</td>
						<td>8877-6655</td>
						<td>
							<div class="hstack align-items-center gap-2">
								<button class="btn btn-sm btn-info">Editar</button>
								<button class="btn btn-sm btn-danger">Excluir</button>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</section>
	</main>
</body>

</html>