<?php include 'src/views/layout/header.php'; ?>

  <header id="header" class="position-fixed w-100 mb-3">
    <nav class="navbar ">
      <div class="container">
        <div class="nav-header">
          <a class="navbar-brand text-white" href="#"><b>CAF</b></a>
        </div>
      </div>
    </nav>
  </header>

  <div class="container pt-5">

    <section class="content-header">
      <h3>Cadastro de Usuários</h3>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <div class="d-flex justify-content-between">
              <div>
                <h3>Usuários Cadastrados</h3>
              </div>
              <div>
                <button data-toggle="modal" data-target="#filterModal" class="btn btn-primary"><i class="fa fa-filter" aria-hidden="true"></i> Filtrar</button>
                <button class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Cadastrar usuário</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table id="user-table" style="width: 100% !important" class="table table-hover">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cargo</th>
                <th scope="col">Perfil</th>
                <th scope="col">Status</th>
                <th scope="col">ON / OFF</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>

              <!-- <?php foreach ($model->rows as $key => $usuario) : ?>


                <tr>
                  <th scope="row"><?= $key + 1 ?></th>
                  <td><?= $usuario['nome'] ?></td>
                  <td><?= $usuario['cargo'] ?></td>
                  <td><?= $usuario['perfil'] ?></td>
                  <td><span class="badge badge-success">Ativo</span></td>
                  <td>
                    <button data-toggle="modal" data-target="#deleteModal" title="Desativar Usuário" class="btn btn-sm btn-danger"><i class="fa fa-square"></i></button>
                  </td>
                  <td>
                    <button data-toggle="modal" data-target="#editModal" class="btn btn-sm btn-warning text-white"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    <button data-collapse="button" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i></button>
                  </td>
                </tr>
                <tr data-collapse="info">
                  <td colspan="7">
                    <div class="card">
                      <div class="card-header">
                        <div class="card-title">
                          <h5>Sobre</h5>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-4">
                            <h5>Endereço</h5>
                            <p><b>Bairro:</b> <?= $usuario['bairro'] ?></p>
                            <p><b>Cidade:</b> <?= $usuario['cidade'] ?></p>
                            <p><b>Estado:</b> <?= $usuario['estado'] ?></p>
                          </div>
                          <div class="col-4">
                            <h5>Contato</h5>
                            <p><b>Telefone:</b> <?= $usuario['fone'] ?></p>
                            <p><b>Telefone:</b> <?= $usuario['fone2'] ?></p>
                            <p><b>E-mail:</b> <?= $usuario['email'] ?></p>
                          </div>
                          <div class="col-4">
                            <h5>Status</h5>
                            <p><b>Data cadastro:</b> <?= $usuario['data'] ?></p>
                            <p><b>Hora cadastro:</b> <?= $usuario['hora'] ?> </p>
                          </div>
                        </div>
                      </div>
                    </div>

                  </td>
                </tr>

              <?php endforeach; ?> -->



            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>


<?php include 'src/views/layout/footer.php'; ?>