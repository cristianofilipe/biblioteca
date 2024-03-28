<link rel="stylesheet" href="resources\\css\\estilo.css">
<div class="sidebar">
    <img src="resources\\img\\logo.png" style="margin: auto;" alt=""> 
   <ul class="menu">
    <?= $_SESSION["tipo_adm"] ?><br>
    <?= $_SESSION["login"] ?>
        <li>
            <a href="home">
                <i class="bi bi-house-door"></i>
                <span>Home</span>
            </a>
        </li>



        <li>
            <a href="cadastro">
                <i class="bi bi-plus-circle"></i>
                 <span>Cadastrar</span>
            </a>
        </li>

        <li>
            <a href="consulta">
                <i class="bi bi-search"></i>
                <span>Consulta</span>
            </a>
        </li>

        <?php if($_SESSION["tipo_adm"] == "admin"): ?>
            <li>
                <a href="emprestimo">
                    <i class="bi bi-arrow-left-right"></i>
                    <span>Emprestimo</span>
                </a>
            </li>
        <?php endif ?>

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
