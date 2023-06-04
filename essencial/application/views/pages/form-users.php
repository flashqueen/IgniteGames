<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar Usuário</h1>
      </div>

			<div class="col-md-12">
				<form action="<?= base_url() ?>users/update/<?= $user["id"] ?>" method="post">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Nome</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="<?= $user["name"] ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= $user["email"] ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="country">País</label>
							<input type="text" class="form-control" name="country" id="country" placeholder="Categoria" value="<?= $user["country"] ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="price">Estado</label>
							<input type="text" class="form-control" name="state" id="state" placeholder="Estado" value="<?= $user["state"] ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="city">Cidade</label>
							<input type="text" class="form-control" name="city" id="city" placeholder="Cidade" value="<?= $user["city"] ?>">
						</div>
					</div>

                    <div class="col-md-6">
						<div class="form-group">
							<label for="age">Idade</label>
							<input type="text" class="form-control" name="age" id="age" placeholder="Idade" value="<?= $user["age"] ?>">
						</div>
					</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
							<a href="<?= base_url() ?>users" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>