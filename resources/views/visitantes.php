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


label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"]
{
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
}
.form-group{margin-bottom: 5px;}
a{
  margin-top: 30px
}
button {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 20px;
}

button:hover {
  background-color: #0056b3;
}

  </style>
</style>
</head>
<body>
  <div class="container">
    <h2>Cadastro de Visitantes</h2>
    <form action="cadastrar.php" method="POST">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Nome do Visitantes  "  required>
      </div>
      <div class="form-group">
        <div class="form-group">
            <label for="role">Sexo:</label>
            <select   style="padding: 12px;width: 100%;border-radius: 7px;" id="role" name="role" required>
                <option value="">Selecione...</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Femenino</option>
            </select>
        </div>  
      </div>
      <div class="form-group">
        <div class="form-group">
            <label for="role">Curso:</label>
            <select   style="padding: 12px;width: 100%;border-radius: 7px;" id="role" name="role" required>
                <option value="">Selecione...</option>
                <option value="7 classe">7 Classe</option>
                <option value="8 classe">8 Classe</option>
                <option value="9 classe">9 Classe</option>
                <option value="10 classe">10 Classe</option>
                <option value="11 classe">11 Classe</option>
                <option value="12 classe">12 Classe</option>
                <option value="13 classe">13 Classe</option>

            </select>
        </div>  
      </div>

      <div class="form-group">
        <div class="form-group">
            <label for="role">Categoria:</label>
            <select   style="padding: 12px;width: 100%;border-radius: 7px;" id="role" name="role" required>
                <option value="">Selecione...</option>
                <option value="estudante">Estudante</option>
                <option value="profesor">Professor</option>
            </select>
        </div>  
      </div>
      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="tel" style="padding: 12px;width: 100%;border-radius: 7px;" id="tel" name="tel" placeholder="Digite o telefone"  required>
      </div>
      <div class="form-group">
        <label for="data_de_registro">Data de Registro:</label>
        <input type="date" style="padding: 12px;width: 100%;border-radius: 7px;" id="data_de_registro" name="data_de_registro" placeholder=""  required>
      </div>
       <button type="submit" class="btn btn-success">CADASTRAR</button>
   <a href="cadastrar.html" class="btn btn-primary">VOLTAR</a>
    </form>
  </div>
</body>
