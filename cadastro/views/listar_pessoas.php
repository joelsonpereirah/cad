<!DOCTYPE html>
<html>

<head>
  <title>Listagem de Pessoas</title>

  <link rel="stylesheet" type="text/css" href="/cadastro/css/style.css">


</head>

<body>
  <h1>Listagem de Pessoas Novo</h1>
  <h2><a class="confirm" href="/cadastro/adicionar">Cadastrar Pessoa</a></h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>CPF</th>
      <th>Data de Nascimento</th>
      <th>Acao</th>
    </tr>
    <?php foreach ($pessoas as $pessoa): ?>
    <tr>
      <td><?= $pessoa['id']; ?></td>
      <td><?= $pessoa['nome']; ?></td>
      <td><?= $pessoa['cpf']; ?></td>
      <td><?= $pessoa['data_nascimento']; ?></td>
      <td><a class="edit" href="/cadastro/editarform/<?= $pessoa['id']; ?>">Editar</a> <a class="delete" href="/cadastro/excluir/<?= $pessoa['id']; ?>">Excluir</a></td>
      <!-- <td><a href="/cadastro/excluir/<?= $pessoa['id']; ?>">Excluir</a></td> -->
    </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>