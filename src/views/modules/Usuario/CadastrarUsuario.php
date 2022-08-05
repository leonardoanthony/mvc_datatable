
  <?php include 'src/views/layout/header.php'; ?>

    <fieldset>
        <legend>Cadastro de Usuário</legend>

        <form action="/usuarios/form/save" method="post">

            <input type="hidden" name="id" value="<?= $model->id; ?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $model->nome; ?>">

            <label for="login">Login:</label>
            <input type="text" name="login" id="login" value="<?= $model->login; ?>">

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" value="<?= $model->senha; ?>">

            <button type="submit">Enviar</button>
        </form>

    </fieldset>

    <?php include 'src/views/layout/footer.php'; ?>
