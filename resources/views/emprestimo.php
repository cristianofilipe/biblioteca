<?php 
 if($_SESSION["tipo_adm"] !== "funcionario")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="resources\\css\\emprestimo.css">
</head>

<body>
    <?php require_once "components/sidebar.php" ?>
    <div class="conteudo-principal">
      <?php require_once "components/header.html" ?>

      <div class="cont">
        <button type="button" class="btn btn-primary" style="margin-bottom: 20px;" data-bs-toggle="modal"
          data-bs-target="#userModal">
          +
        </button>
        <div class="inpts">

          <div class="inptss">
            Mostrar<input type="number" name="" id="" autofocus>Entradas
          </div>
          <input type="search" placeholder="pesquisar">
        </div>
        <table>
          <thead>
            <tr>
              <th>Livro</th>
              <th>Professor</th>
              <th>Quantidade</th>
              <th>Data do empréstimo</th>
              <th>Data da Devolução</th>
              <th>Acções</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Pai rico ,Pai pobre</td>
              <td>Boares Gunza</td>
              <td>3</td>
              <td>10-02-2024</td>
              <td>11-02-2024</td>
              <td rowspan="2">
                <!-- <button class="btn edit"  data-bs-toggle="modal"  data-bs-target="#userMo   dal">Editar</button>-->
                <a href="" data-bs-toggle="modal" data-bs-target="#userModal"><i class="bi bi-pencil-square"
                    style="padding: 10px;"></i></a><a href=""><i class="bi bi-trash3"></i></a>
              </td>
            </tr>

            <!-- Adicione mais linhas conforme necessário -->
          </tbody>
        </table>
      </div>
      <div class="modal fade" id="modalSair" tabindex="-1" role="dialog" aria-labelledby="modalSairLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalSairLabel">Deseja sair?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Tem certeza de que deseja sair?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
              <button type="button" class="btn btn-primary">Sim</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="resources\\js\\logout.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>