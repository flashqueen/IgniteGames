<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Usuários</h1>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Email</th>
					<th>País</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>Idade</th>
                    <th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user) : ?>
					<tr>
						<td><?= $user["id"] ?></td>
						<td><?= $user["name"] ?></td>
						<td><?= $user["email"] ?></td>
						<td><?= $user["country"] ?></td>
                        <td><?= $user["state"] ?></td>
                        <td><?= $user["city"] ?></td>
                        <td><?= $user["age"] ?></td>
                        <td>
							<a href="<?= base_url() ?>users/edit/<?= $user["id"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</main>
  