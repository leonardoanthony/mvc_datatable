
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