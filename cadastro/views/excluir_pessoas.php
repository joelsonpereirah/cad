<!DOCTYPE html>
<html>

<head>
  <title>Listagem de Pessoas</title>
  <link rel="stylesheet" type="text/css" href="/cadastro/css/style.css">
</head>

<body>
  <h1>Listagem de Pessoas para excluir</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>cpf</th>
      <th>data_nascimento</th>
    </tr>
    <?php foreach ($pessoas as $pessoa): ?>
    <tr>
      <td><?= $pessoa['id']; ?></td>
      <td><?= $pessoa['nome']; ?></td>
      <td><?= $pessoa['cpf']; ?></td>
      <td><?= $pessoa['data_nascimento']; ?></td>
      <td>
        <a href="/cadastro/exlcluir">Excluir</a>
      </td>

    </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>