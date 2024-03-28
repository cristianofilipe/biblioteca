<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Visitantes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
        * {
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

.container {
  max-width: 600px;
  margin: 100px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  margin-top: 0;
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"],
textarea {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
}
a{
  margin-top: 30px
}
button {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  font-size: 16px;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

  </style>
</style>
</head>
<body>
  <div class="container">
    <h2>Cadastro de Usuário</h2>
    <form action="create_user" method="POST">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Nome do Usuário"  required>
      </div>
      <div class="form-group">
        <div class="form-group">
            <label for="role">Tipo de Acesso:</label>
            <select   style="padding: 12px;width: 100%;border-radius: 7px;" id="role" name="tipo_adm" required>
                <option value="admin">Admin</option>
                <option value="funcionario">Funcionário</option>
            </select>
        </div>  
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="exemplo@gmail.com" required>
      </div>



    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="senha" required>
      </div>

      <button type="submit" class="btn btn-success">CADASTRAR</button>
      <a href="cadastrar.html" class="btn btn-primary">VOLTAR</a>
    </form>
  </div>
  
</body>

