<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Visitantes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    
  </style>
</head>

<body>
   <!--Sidebar-->
   <div class="sidebar">
   <img src="resources\\img\\logo.png" alt=""> 
    <ul class="menu">
      <li>
        <a href="../home">
          <i class="bi bi-house-door"></i>
          <span>Home</span>
        </a>
      </li>



      <li>
        <a href="../cadastro">
          <i class="bi bi-plus-circle"></i>
          <span>Cadastrar</span>
        </a>
      </li>

      <li>
        <a href="../consulta">
          <i class="bi bi-search"></i>
          <span>Consulta</span>
        </a>
      </li>

      <li>
        <a href="../emprestimo">
          <i class="bi bi-arrow-left-right"></i>
          <span>Emprestimo</span>
        </a>
      </li>

      <li>
        <a href="../relatorio">
          <i class="bi bi-file-earmark-text"></i>
          <span>Relatório</span>
        </a>
      </li>

      <li class="logout">
        <a href="#" data-toggle="modal" data-target="#modalSair">
          <i class="bi bi-box-arrow-left"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="container">
    
    <h2>Cadastro de Tcc</h2>
    <form action="http://localhost/sistema-biblioteca2/tcc/post" method="post">
      <div class="form-group">
        <label for="Tema">Tema</label>
        <input type="text" id="tema" name="tema" required>
      </div>

      <div class="form-group">
        <label for="data_entrada">Orientador</label>
        <input type="text" id="orientador" name="orientador" required>
      </div>

      <div class="form-group">
        <label for="curso">Area</label>
        <select name="curso" id="curso">
          <option value="1">Informatica</option>
          <option value="2">Bioquimica</option>
          <option value="3">Mecanica</option>
          <option value="4">Electricidade</option>
          <option value="5">Projectista</option>
        </select>
      </div>

      <div class="form-group">
        <label for="data_entrada">Data de entrada</label>
        <input type="date" id="data_entrada" name="data_entrada" required>
      </div>
      <button type="submit" class="btn btn-success">CADASTRAR</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>