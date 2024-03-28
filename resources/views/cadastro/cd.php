<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSSS3/estilo.css">
  <title>Cadastro de discos</title>
  <link rel="stylesheet" href="CSSS3/disco.css">
  </style>
</head>

<body>
   <!--Sidebar-->
   <div class="sidebar">
    <img src="images-Photoroom.png-Photoroom.png" alt="">
    <ul class="menu">
      <li>
        <a href="index.html">
          <i class="bi bi-house-door"></i>
          <span>Home</span>
        </a>
      </li>



      <li>
        <a href="cadastrar.html">
          <i class="bi bi-plus-circle"></i>
          <span>Cadastrar</span>
        </a>
      </li>

      <li>
        <a href="consulta.html">
          <i class="bi bi-search"></i>
          <span>Consulta</span>
        </a>
      </li>

      <li>
        <a href="emprestimo.html">
          <i class="bi bi-arrow-left-right"></i>
          <span>Emprestimo</span>
        </a>
      </li>

      <li>
        <a href="#">
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
    <h2>Cadastro de Disco</h2>
    <form action="http://localhost/sistema-biblioteca2/cd/post" method="POST">
      <div class="form-group">
        <label for="capacidade">Capaciade:</label>
        <input type="text" id="capacidade" name="capacidade" placeholder="" required>
      </div>
      <div class="form-group">
        <label for="conteudo">Conteudo:</label>
        <input type="text" id="conteudo" name="conteudo" placeholder="" required>
      </div>

      <div class="form-group">
        <label for="qtd_material">Quantidade</label>
        <input type="number" id="qtd_material" name="qtd_material" required>
      </div>

      <div class="form-group">
        <label for="modo_aquisicao">Modo de Aquisição</label>
        <select name="modo_aquisicao" id="modo_aquisicao">
          <option value="comprado">Comprado</option>
          <option value="ofertado">Ofertado</option>
          <option value="doado">Doado</option>
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