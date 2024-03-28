<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSSS3/estilo.css">
    <link rel="stylesheet" href="..\..\">
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
    background-color: #1a237e; /* Azul escuro */
    display: grid;
    grid-template-rows: auto 1fr auto;
    height: 100vh;
    padding: 20px;
}
img{
    width: 100px;
    margin-left: 40px;
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
    background: #f8f7f7;
    width: 100%;
    padding: 1rem;
    padding: 20px;
    grid-area: main;
}
.cabecario{
    display: flex;
    justify-content: space-between;
    border-radius: 10px;
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
    background: #f8f7f7;
    border-radius: 15px;
    color: rgba(113, 99, 186, 255);
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 4px 12px;
}
.search-box input{
    background: #f8f7f7;
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
    background-color: #f5f5f5;
    border-radius: 10px;
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


.contenti {

    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 40px auto;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.contenti header {
    position: relative;
    font-size: 12px;
    font-weight: 600;
    color: #333;
}

.contenti header::before {
    content: "";
    position: absolute;
    bottom: -2px;
    height: 3px;
    width: 27px;
    background: #4070f4;
    border-radius: 7px;
    left: 0;
}

.contenti form {
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background: #fff;
    overflow: hidden;
}

.contenti form .detalhes {
    margin-top: 30px;
}

.contenti form .title {
    display: block;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;

}

.contenti form .fields {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

form .fields .input-field {
    display: flex;
    flex-direction: column;
    width: calc(100% / 3 - 15px);
    margin: 4px 0;
}

.input-field label {
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}

.input-field input {
    padding: 0 15px;
    outline: none;
    border: 1px solid #aaa;
    border-radius: 5px;
    font-size: 14px;
    color: #3333;
    height: 42px;
    margin: 8px 0;
}

.input-field input:is(:focus, :valid) {
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
}

.input-field input[type="date"] {
    color: #707070;
}

.input-field input[type="date"]:valid {
    color: #333;
}
    </style>
  </head>
<body>
     <!--Sidebar-->
    
    <!--Formulario do livro-->
    <div class="contenti">
      <a href="#" id="voltarLink"
          style="border: 1px solid #000;text-decoration: none;border-radius: 3px;background-color: rgb(255, 195, 83)">VOLTAR</a>
      <header style="margin-top: 30px;">CADASTRO DE LIVRO</header>
      <form action="http://localhost/sistema-biblioteca/livro/post" method="post">
          <div class="form-first">
              <div class="detalhes">
                  <span class="title">
                      Registro 
                  </span>
                  <div class="fields">
                      <!--<div class="input-field">
                          <label for="">Nº de Registro do Livro</label>
                          <input type="number" name="id" required>
                      </div> -->

                      <div class="input-field">
                          <label for="">Título</label>
                          <input type="text" name="titulo" required>
                      </div>
                      
                      <div class="input-field">
                          <label for="">ISBN</label>
                          <input type="text" name="isbn" required>
                      </div>

                      <div class="input-field">
                          <label for="">Cota do Autor</label>
                          <input type="number" name="cota_autor" required>
                      </div>

                      <div class="input-field">
                          <label for="">Autor</label>
                          <input type="text" name="autor" required>
                      </div>

                      <div class="input-field">
                          <label for="">Editora</label>
                          <input type="text" name="editora" required>
                      </div>
                  </div>
              </div>

              <div class="detalhes">
                  <span class="title">
              Catalogação
                  </span>
                  <div class="fields">
                      <div class="input-field">
                          <label for="">Edição</label>
                          <input type="number" name="edicao" required>
                      </div>

                      <div class="input-field">
                          <label for="">Local de Publicação</label>
                          <input type="text" name="local_publicacao" required>
                      </div>

                      <div class="input-field">
                          <label for="">CDD</label>
                          <input type="number" name="cdd" required>
                      </div>

                      <div class="input-field">
                          <label for="">Modo de Aquisição</label>
                          <input type="text" name="modo_aquisicao" required>
                      </div>

                      <div class="input-field">
                          <label for="">Volume</label>
                          <input type="number" name="volume" required>
                      </div>
                      <div class="input-field">
                          <label for="">Estante</label>
                          <input type="number" name="estante" required>
                      </div>
                      <div class="input-field">
                          <label for="">Ano de Publicação</label>
                          <input type="number" name="ano_pub" required>
                      </div>
                      <div class="input-field">
                          <label for="">Quantidade</label>
                          <input type="number" name="qtd_material" required>
                      </div>
                      <div class="input-field">
                          <label for="">Data de entrada</label>
                          <input type="date" name="data_entrada" required>
                      </div>
                  </div>
                  <!--AREA PRA O BOTAO-->
              </div>
          </div>

          <button type="submit"
          style="background-color: rgb(255, 195, 83);font-size: 16px;font-weight: 300;">CADASTRAR</button> <button
          type="button" style="background-color: rgb(255, 195, 83);font-size: 16px;font-weight: 300;">EDITAR</button>

      </form>
  </div>
  
  
  <script>
      // Redirecionamento de página 
      document.getElementById("voltarLink").addEventListener("click", function(event) {
        event.preventDefault();
        window.location.href = "http://localhost/sistema-biblioteca/consulta//livro";
      });
      </script>

      
      
</body>

</html>