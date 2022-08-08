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
        <form name="editModal" method="post" action="/usuarios/form/save">
          <div class="form-group">
            <input type="hidden" id="editId" name="editId">
            <label for="Nome">
              <h5>Nome</h5>
            </label>
            <input type="text" class="form-control" id="editNome" name="editNome" placeholder="Nome">
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="Cargo">
                <h5>Cargo</h5>
              </label>
              <select id="editCargo" class="form-control" name="editCargo">
                <option value="Gerente">Gerente</option>
              </select>
            </div>
            <div class="form-group  col-6">
              <label for="Perfil"  >
                <h5>Perfil</h5>
              </label>
              <select id="editPerfil" class="form-control" name="editPerfil">
                <option>Admin</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="Login">
                <h5>Login</h5>
              </label>
              <input type="text" class="form-control" id="editLogin" name="editLogin" placeholder="Login">
            </div>
            <div class="form-group col-6">
              <label for="Senha">
                <h5>Senha</h5>
              </label>
              <input type="password" class="form-control" id="editSenha" name="editSenha" placeholder="Senha">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group  col-12">
              <label for="Endereco">
                <h5>Endereco</h5>
              </label>
              <input type="text" class="form-control" id="editEndereco" placeholder="Endereco" value="Recife" name="editEndereco">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-4">
              <label for="Estado">
                <h5>Estado</h5>
              </label>
              <select id="editEstado" class="form-control" name="editEstado">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
              </select>
            </div>
            <div class="form-group  col-4">
              <label for="Cidade">
                <h5>Cidade</h5>
              </label>
              <input type="text" class="form-control" id="editCidade" placeholder="Cidade"  name="editCidade">
            </div>
            <div class="form-group  col-4">
              <label for="Bairro">
                <h5>Bairro</h5>
              </label>
              <input type="text" class="form-control" id="editBairro" placeholder="Bairro" name="editBairro" >
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-3">
              <label for="Telefone">
                <h5>Telefone</h5>
              </label>
              <input type="text" class="form-control" id="editTelefone" placeholder="Telefone" name="editFone">
            </div>
            <div class="form-group col-3">
              <label for="Telefone">
                <h5>Telefone2</h5>
              </label>
              <input type="text" class="form-control" id="editTelefone2" placeholder="Telefone" name="editFone2">
            </div>
            <div class="form-group col-6">
              <label for="E-mail">
                <h5>E-mail</h5>
              </label>
              <input type="text" class="form-control" id="editEmail" placeholder="E-mail" name="editEmail">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Salvar</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>