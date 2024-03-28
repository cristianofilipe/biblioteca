<?php 
  //Verifica se existe uma sessão
  session_start();
  if (!isset($_SESSION["login"]) && empty($_SESSION)) {
      header("Location: login");
  }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources\\css\\cadastrar.css">
</head>
<body>
    <?php require_once "components/sidebar.php" ?>
    <div class="conteudo-principal">
        <?php require_once "components/header.html" ?>
        <div class="card-container">
            <div class="card">
                <a href="cadastro/livro">
                    <h2>LIVRO</h2>
                    <i class="bi bi-book" style="font-size: 2rem;"></i>
                </a>
            </div>
            <div class="card">
                <a href="cadastro/revista">
                    <h2>REVISTA</h2>
                    <i class="bi bi-journal-text" style="font-size: 2rem;"></i>
                </a>
            </div>
            <div class="card">
                <a href="cadastro/tcc">
                    <h2>TCC</h2>
                    <i class="bi bi-file-earmark-text" style="font-size: 2rem;"></i>
                </a>
            </div>
            <div class="card">
                <a href="cadastro/cd">
                    <h2>DISCO</h2>
                    <i class="bi bi-disc" style="font-size: 2rem;"></i>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <h2>VISITANTES</h2>
                    <i class="bi bi-people" style="font-size: 2rem;"></i>
                </a>
            </div>
            <div class="card">
                <a href="cadastro/usuario">
                    <h2>USUÁRIOS</h2>
                    <i class="bi bi-person" style="font-size: 2rem;"></i>
                </a>
            </div>

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
        <script src="resources\\js\\logout.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>