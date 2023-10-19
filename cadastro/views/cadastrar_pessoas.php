<!DOCTYPE html>
<html>

<head>
  <title>Cadastrar Pessoa</title>
  <link rel="stylesheet" type="text/css" href="/cadastro/css/style.css">
</head>

<body>
  <h1>Cadastrar Pessoa</h1>
  <form method="POST" action="/cadastro/adicionar">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>
    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" required><br>
    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" name="data_nascimento"><br>
    <input class="botaoAdicionar" type="submit" value="Adicionar">
  </form>
  <a class="edit" href="/cadastro/listar">Voltar para a lista de pessoas</a>
</body>

</html>