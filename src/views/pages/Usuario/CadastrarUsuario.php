
  <?php include 'src/views/partials/header.php'; ?>

    <fieldset>
        <legend>Cadastro de Usuário</legend>

        <form action="/usuarios/form/save" method="post">

            <input type="hidden" name="editId" value="<?= $model->id; ?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="editNome" value="<?= $model->nome; ?>">

            <label for="login">Login:</label>
            <input type="text" name="login" id="editLogin" value="<?= $model->login; ?>">

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="editSenha" value="<?= $model->senha; ?>">

            <button type="submit">Enviar</button>
        </form>

    </fieldset>

    <?php include 'src/views/partials/footer.php'; ?>
