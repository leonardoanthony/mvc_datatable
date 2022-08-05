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

            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>


<?php include 'src/views/layout/footer.php'; ?>