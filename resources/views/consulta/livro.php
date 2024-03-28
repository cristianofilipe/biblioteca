<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\resources\\css\\estilo.css">
    <link rel="stylesheet" href="..\..\resources\\css\\bootstrap_icon.min.css">
    <title>Lista dos Livros</title>

</head>
<body>
    <div class="sidebar">
        <img src="..\resources\\img\images-Photoroom.png-Photoroom copy.png" alt=""> 
        <ul class="menu">
            <li>
                <a href="..\..\home">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                      </svg>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="..\..\cadastrar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
                      </svg>
                    <span>Cadastrar</span>
                </a>
            </li>
            <li>
                <a href="..\..\consulta">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                    <span>Consulta</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5"/>
                    </svg>
                    <span>Emprestimo</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5"/>
                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                    </svg>
                    <span>Relatório</span>
                </a>
            </li>
            <li class="logout">
                <a href="#" data-toggle="modal" data-target="#modalSair">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                    </svg>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="conteudo-principal">
        <div class="cabecario">
          
            <div class="info-usuario">
                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <input type="search" placeholder="Search">
                </div>
              
            </div>
        
            <div class="">
                <i class="bi bi-person-circle" style="font-size: 30px;"></i>
            </div>
            
        </div>
        
        <div id="" style="font-family: Arial, Helvetica, sans-serif;font-size: 18;text-align: center;margin:10px; color: blue;">RESULTADO</div>
    
    <table class="table table-striped" style="font-size: 16px; border: 1px solid black;margin: auto; font-family:Arial, Helvetica, sans-serif;">
       
        <thead>
            <tr style="border: 1px solid black;padding: 4px;text-align: center; padding: 2px;">
              <th style="text-align: center;" scope="col">ID</th>
              <th style="text-align: center;" scope="col">Titulo</th>
              <th style="text-align: center;" scope="col">Editora</th>
              <th style="text-align: center;" scope="col">volume</th>
              <th style="text-align: center;" scope="col">edicao</th>
              <th style="text-align: center;" scope="col"> ano_pub</th>
              <th style="text-align: center;" scope="col">estante</th>
              <th style="text-align: center;" scope="col">isbn</th>
              <th style="text-align: center;" scope="col">local_publicacao</th>
              <th style="text-align: center;" scope="col">estante</th>
              <th style="text-align: center;" scope="col">Opcoes</th>
            </tr>
          </thead>
          <tbody style="border: 1px solid black;padding: 8px;text-align: center;" id="resultado">
            
          </tbody>
    </table>
    </div> 
    
    <script>
        fetch("http://localhost/sistema-biblioteca/livro/get", {
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            // Inicializa uma string para armazenar o HTML dos livros
        let html = '';

        // Itera sobre cada objeto no array de dados
        data.forEach(livro => {
            // Adiciona as informações do livro ao HTML
            html += `<tr style="padding: 10px;" id='${livro.id_livro}' >`;
            html += `<td style="padding: 10px;">${livro.id_livro}</td>`;
            html += `<td style="padding: 10px;">${livro.titulo}</td>`;
            html += `<td style="padding: 10px;">${livro.editora}</td>`;
            html += `<td style="padding: 10px;">${livro.volume}</td>`;
            html += `<td style="padding: 10px;">${livro.edicao}</td>`;
            html += `<td style="padding: 10px;">${livro.ano_pub}</td>`;
            html += `<td style="padding: 10px;">${livro.isbn}</td>`;
            html += `<td style="padding: 10px;">${livro.local_publicacao}</td>`;
            html += `<td style="padding: 10px;">${livro.estante}</td>`;
            html +='</tr>';
            // Adiciona uma linha horizontal para separar os livros
        });

        // Define o HTML gerado na div 'resultado'
        document.getElementById('resultado').innerHTML = html;
    })
        .catch(err => console.log('ERROR >',err));

    </script>
</body>
</html>