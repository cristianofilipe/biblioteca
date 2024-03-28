<?php 
//verfica se existe variaveis de sessao
session_start();

if (isset($_SESSION["login"]))  {
    header("Location: http://localhost/sistema-biblioteca2/home");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<style>
    *{
    box-sizing: border-box;
    outline: none;
    border: none;    
}
body{
    font-size: 16px;
    color: #fff;
}
.wrapper{
    background-color: rgba(0,0,0,0.5);
    margin: auto;
    padding: 40px;
    border-radius: 5px;
    box-shadow: 0 0 10px #000;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 500px;
    height: 480px;
        
}
.wrapper::before{
    background-image: url("login.jpg");
    width: 100%;
    height: 100%;
    background-size: cover;
    content: '';
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: -1;
    display: block;
    
}
.wrapper .header-text{
    font-size: 36px;
    font-weight: 600;
    padding-bottom: 30px;
    text-align: left;
}
.wrapper input{
    margin: 20px 0;
    border: none;
    padding: 10px;
    border-radius: 5px;
    width: 100%;
    font-size: 16px;
}
.wrapper input[type="checkbox"]{
    display: none;
}
.wrapper label{
    position: relative;
    margin-left: 5px;
    margin-right: 10px;
    top: 5px;
    display: inline-block;
    width: 20px;
    height: 20px;
    cursor: pointer;
}
.wrapper label:before{
    content: "";
    display: inline-block;
    width: 20px;
    height: 20px;
    border-radius: 5px;
    position: absolute;
    left: 0;
    bottom: 1px;
    background: #ddd;
}
a{
    text-decoration: none;
}
a:link{
    color: #f3f3f3;
}
a:visited{
    color: #f3f3f3;
}
a:hover{
    color: #fff;
    font-size: 18px;
}
a:active{
    color: #f2f2f2;
}
.wrapper input[type="checkbox"]:checked + label:before{
    content: \2713;
    font-size: 20px;
    color: #262626;
    text-align: center;
    height: 20px;
    line-height: 20px;
}
.wrapper span{
    font-size: 14px;
}
.wrapper button{
   background-color: #ffcb22;; /* Laranja suave */
    color: #fff;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
    padding: 10px;
    margin: 30px 0;
}
.wrapper button:hover{
transform: translateY(5px);
transition: 0.2s all ease;
}
span a{
    color: #ddd;
}
/**Formatando o emprestimo.html**/
.container-tabela{
    width: 100%;
 display: flex;
}

</style>
<body>
    <form action="http://localhost/sistema-biblioteca2/login/auth" method="post">
        <div class="wrapper">
            <img src="resources\\img\\logo.png" alt="" style="width: 40%;display: flex;margin: 0 auto;height: 120px;">
            <img src="" alt="">
           <span style="font-size: 24px;">Login</span>
            <input type="email"name="email" id="email" placeholder="E-mail">
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <span style="font-size: 17px;"><a href="#">Esqueceu a senha?</a></span>
            <button>Login</button>
        </div>
    </form>    
</body>
</html>