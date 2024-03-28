<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Visitantes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="resources//css//estilo.css">
  <link rel="stylesheet" href="resources//css//tcc.css">
  <style>
    *{
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
    box-sizing: border-box;
}
body{
    display: flex;
}
.sidebar{
    position: sticky;
    top: 0;
    left: 0;
    bottom: 0;
    width: 28   0px;
    color: #fff;
    overflow: hidden;
    background-color: #2b3d58; /* Azul escuro */
    display: grid;
    grid-template-rows: auto 1fr auto;
    height: 100vh;
    padding: 20px;
}
.sidebar ul li a span{
    color: #fff;
}
img{
    width: 100px;
    
    margin-top: 10px;
    margin-bottom: 20px;
}

.logo{
    height: 80px;
    padding: 16px;
}
.menu{
    height: 88%;
    position: relative;
    list-style: none;
    padding: 0;
}
.menu li{
    padding: 1rem;
    margin: 8px 0;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: all 0.5s ease-in-out;
}
.menu li:hover{
    background: #f7efef58;
}
.menu a{
    color: white;
    font-size: 14px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 1.5rem;
}
.menu a span{
    overflow: hidden;
    color: #000;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
}
.menu a i{
    font-size: 1.7rem;
}
.menu a:hover {
    color: #ff9800; /* Laranja suave */
}

.logout{
    position: absolute;
    bottom: -80px;
    left: 0;
    width: 100%;
}
.conteudo-principal{
    position: relative;
    background: #dee2e6;
    width: 100%;
    padding: 1rem;
    padding: 1px;
    grid-area: main;
}
.cabecario{
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    flex-shrink: inherit;
    background: #fff;
    padding: 10px 2rem;
    margin-bottom: 1rem;
}
.cabecario-titulo{
    color: rgba(113, 99, 186, 255);
}
.info-usuario{
    display: flex;
    align-items: center;
    gap: 1rem;
}
.info-usuario i{
    font-size: 1.8rem;
}
.search-box{
    background: #dee2e6;
    border-radius: 15px;
    color: rgba(113, 99, 186, 255);
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 4px 12px;
}
.search-box input{
    background: #dee2e6;
    padding: 10px;    
}
.search-box i{
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.5s ease-out;
}
.search-box i:hover{
    transform: scale(1.1);
}
/** Media Queries para adptar o codigo  as telas!**/
@media (min-width:468){
    .sidebar{
        width: 290px;
    }
}
@media (min-width:768px){
    .sidebar{
        width: 300px;
    }
}
@media (min-width:992px){
    .sidebar{
        width: 247px;
    }
}
/***FIM DA FORMATACAO DO INDEX.HTML***/

/**Inicio da Formatacao do cadastrar.html **/
.wrapper{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px;
}

.caixa-conteudo{
    display: flex;
    justify-content: space-between;
    width: 1000px;
    margin-top: 30px;
    margin-bottom: 30px;
}
.card{
    min-height: 90px;
    width: 290px;
    padding: 30px;
    margin: 10px 4px;
    background-color: #fff;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center;

}
.card h2:hover{
    font-size: 25px;
}       

.card h2 {
    margin-bottom: 5px;
    font-size: 1.5rem;
    font-weight: 500;
}

.card p {
    margin: 0;
    font-size: 1rem;
    color: #888;
}
.card svg {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
}

/*.card:hover i, .card:hover p{
    color: #fff;
}*/
.card:hover h2{
    font-weight: 300;
}


@media (max-width:991px){
    .wrapper{
        padding: 12.7px;
    }
    .wrapper h1{
        font-size: 2.5em;
        font-weight: 600;
    }
    .caixa-conteudo{
        flex-direction: column;
        width: 100%;
    }
    .card{
        min-width: 200px;
        margin: 10px auto;
    }
}
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
</head>

<body>
   
   <!--Sidebar-->
   <div class="sidebar">
   <img src="resouces//img//logo.png" alt=""> 
    <ul class="menu">
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
        <a href="#">
          <i class="bi bi-search"></i>
          <span>Consulta</span>
        </a>
      </li>

      <li>
        <a href="#">
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
    <h2>Cadastro de Revista</h2>
    <form action="http://localhost/sistema-biblioteca2/revista/post" method="POST">
      <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo" required>
      </div>

      <div class="form-group">
        <label for="subTitulo">Subtítulo</label>
        <input type="text" id="subTitulo" name="subTitulo" required>
      </div>

      <div class="form-group">
        <label for="localPub">Local de Publicação</label>
        <input type="text" id="localPub" name="localPub" required>
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
      
      <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>