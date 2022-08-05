
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

  <script src="src/views/js/datatable.js"></script>
  <script src="src/views/js/editUsuario.js"></script>

  <script type="module" src="src/views/js/script.js"></script>

  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Editar Usuário</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="Nome">
                <h5>Nome</h5>
              </label>
              <input type="text" class="form-control" id="Nome" placeholder="Nome" value="Emanuel">
            </div>
            <div class="form-row">
              <div class="form-group col-6">
                <label for="Cargo">
                  <h5>Cargo</h5>
                </label>
                <select id="Cargo" class="form-control">
                  <option>Gerente</option>
                </select>
              </div>
              <div class="form-group  col-6">
                <label for="Perfil">
                  <h5>Perfil</h5>
                </label>
                <select id="Perfil" class="form-control">
                  <option>Admin</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-6">
                <label for="Login">
                  <h5>Login</h5>
                </label>
                <input type="text" class="form-control" id="Login" placeholder="Login" value="emanoel@grautecnico.com.br">
              </div>
              <div class="form-group col-6">
                <label for="Senha">
                  <h5>Senha</h5>
                </label>
                <input type="text" class="form-control" id="Senha" placeholder="Senha" value="*************">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-4">
                <label for="Estado">
                  <h5>Estado</h5>
                </label>
                <select id="Estado" class="form-control">
                  <option>PE</option>
                </select>
              </div>
              <div class="form-group  col-4">
                <label for="Cidade">
                  <h5>Cidade</h5>
                </label>
                <select id="Cidade" class="form-control">
                  <option>Recife</option>
                </select>
              </div>
              <div class="form-group  col-4">
                <label for="Bairro">
                  <h5>Bairro</h5>
                </label>
                <input type="text" class="form-control" id="Bairro" placeholder="Bairro" value="Centro">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-6">
                <label for="Telefone">
                  <h5>Telefone</h5>
                </label>
                <input type="text" class="form-control" id="Telefone" placeholder="Telefone" value="(81) 9999-9999">
              </div>
              <div class="form-group col-6">
                <label for="E-mail">
                  <h5>E-mail</h5>
                </label>
                <input type="text" class="form-control" id="E-mail" placeholder="E-mail" value="emanoel@grautecnico.com">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-success">Salvar</button>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Aplicar Filtros</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <h4>Selecione as Colunas</h4>
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn border-primary btn-outline-primary">
                <input type="checkbox" checked autocomplete="off"> Nome
              </label>
            </div>
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn border-primary btn-outline-primary">
                <input type="checkbox" checked autocomplete="off"> Cargo
              </label>
            </div>
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn border-primary btn-outline-primary">
                <input type="checkbox" checked autocomplete="off"> Perfil
              </label>
            </div>
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn border-primary btn-outline-primary">
                <input type="checkbox" checked autocomplete="off"> Login
              </label>
            </div>
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn border-primary btn-outline-primary">
                <input type="checkbox" checked autocomplete="off"> Senha
              </label>
            </div>
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn border-primary btn-outline-primary">
                <input type="checkbox" checked autocomplete="off"> Estado
              </label>
            </div>
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn border-primary btn-outline-primary">
                <input type="checkbox" checked autocomplete="off"> Cidade
              </label>
            </div>
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn border-primary btn-outline-primary">
                <input type="checkbox" checked autocomplete="off"> Bairro
              </label>
            </div>
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn border-primary btn-outline-primary">
                <input type="checkbox" checked autocomplete="off"> E-mail
              </label>
            </div>
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn border-primary btn-outline-primary">
                <input type="checkbox" checked autocomplete="off"> Telefone
              </label>
            </div>
          </div>
          <div class="form-group">
            <h4>Ordenar por:</h4>
            <select class="form-control">
              <option disabled selected>Selecione</option>
              <option>Nome</option>
              <option>Login</option>
              <option>Senha</option>
              <option>Cargo</option>
              <option>Perfil</option>
              <option>Estado</option>
              <option>Cidade</option>
              <option>Bairro</option>
              <option>Telefone</option>
              <option>E-mail</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Aplicar Filtros</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Desativar Usuário</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Tem certeza que deseja desativar o usuário: <b>Emanoel</b> </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger">Desativar</button>
        </div>
      </div>
    </div>
  </div>

</body>

</html>