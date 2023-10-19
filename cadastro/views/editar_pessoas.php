<!DOCTYPE html>
<html>

<head>
  <title>Editar Pessoa</title>
  <link rel="stylesheet" type="text/css" href="/cadastro/css/style.css">
</head>

<body>
  <h1>Editar pessoa</h1>
  <?php foreach ($pessoas as $pessoa): ?>
  <form method="POST" action="/cadastro/editar">
    <label for="id">ID:</label>
    <input type="text" name="id" value="<?= $pessoa['id'] ?>" readonly="readonly"><br>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?= $pessoa['nome'] ?>"><br>
    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" value="<?= $pessoa['cpf'] ?>"><br>
    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" name="data_nascimento" value="<?= $pessoa['data_nascimento'] ?>"><br>
    <input class="botaoAdicionar" type="submit" value="Editar">
  </form>

  <?php endforeach; ?>


</body>

</html>