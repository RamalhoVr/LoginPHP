<!--
*   
*   Feito por: Victor Ramalho
*   ultima atualização: 14/06/2023
*   
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- links do bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="login.css">
    

</head>


<body>
    
<div class="container"> 
    <div class="row"> 
        <div class="col-md-6"> 
            <div class="card">
                <!-- Formulário de Login -->
                <form class="box" action="login.php" method="POST">
                    <h1>Login</h1> 
                    <p class="text-muted">Coloque seu login e sua senha!</p>
                    
                    <!-- Campos de entrada para o login e senha -->
                    <input type="text" name="login" placeholder="Usuário" value="login">
                    <input type="password" name="senha" placeholder="Senha" value="senha">
                    
                    <a class="forgot text-muted" href="#">Esqueceu a senha?</a> 
                    
                    <!-- Botão de envio do formulário -->
                    <input type="submit" name="">
                    
                    <div class="col-md-12"> 
                        <ul class="social-network social-circle">  
                        </ul>
                    </div> 
                </form> 
            </div> 
        </div> 
    </div>
</div>
</body>

<?php


// Incluir o arquivo 'conexao.php'
include 'conexao.php';

// Obter os valores do formulário enviado
$login = $_POST["login"];
$senha = $_POST["senha"];

// Função para buscar dados no banco de dados
function puxardados($login, $senha, $conexao){
    
    // Consultar o banco de dados para o nome de usuário fornecido
    $user = mysqli_query($conexao, "SELECT usuario FROM tab_alunos WHERE usuario = '$login'");
    
    // Verificar se a consulta retornou alguma linha
    if (mysqli_num_rows($user) > 0) {
        echo "logado com sucesso"; // Mensagem de login bem-sucedido
    } else {
        echo "deu erro pae"; // Mensagem de erro
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
}

// Chamar a função com o login, senha e conexão com o banco de dados fornecidos
puxardados($login, $senha, $conexao);
?>


</html>