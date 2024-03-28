<?php 
    //Verifica se existe uma sessão
    session_start();
    if (!isset($_SESSION["login"]) && empty($_SESSION)) {
        header("Location: login");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php require_once "components/sidebar.php" ?>
    <div class="conteudo-principal">
        <?php require_once "components/header.html" ?>
        <div class="wrapper" >
            <div class="card">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                    viewBox="0 0 16 16">
                    <path
                        d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                </svg>
                <h2>Materiais</h2>
                <p style="font-size: 24px;"><?= $data["materiais"] ?></p>
            </div>
            <div class="card">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-journal-text" viewBox="0 0 16 16">
                    <path
                        d="M2 0h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm8.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM3 2.5A.5.5 0 0 1 3.5 2h1A.5.5 0 0 1 5 2.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM3.5 6a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-1zM3 9.5A.5.5 0 0 1 3.5 9h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v1z" />
                </svg>

                <h2>Livros Emprestados</h2>
                <p style="font-size: 24px;">Total: 0</p>
            </div>
            <div class="card">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people"
                   ] viewBox="0 0 16 16">
                    <path
                        d="M6 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm7 4a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm-1-2a5 5 0 0 0-4 4H2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h6a5 5 0 0 0 0 10h4a5 5 0 0 0 0-10h6a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-6a5 5 0 0 0-4-4z" />
                </svg>
                <h2>Visitantes</h2>
                <p style="font-size: 24px;"><?= $data["visitantes"] ?></p>
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
                        <form action="login/close_session">
                            <button type="submit" class="btn btn-primary">Sim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="chart-js">

        </div>
    </div>

    <script src="resources\\js\\logout.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>