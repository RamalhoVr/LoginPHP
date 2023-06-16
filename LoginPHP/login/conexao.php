<?php
// Configurações de conexão com o banco de dados
$usuarioSQL = "root"; // Nome de usuário do banco de dados
$senha = ""; // Senha do banco de dados
$servidorBD = "localhost"; // Servidor do banco de dados
$database = "bdmichelramalho"; // Nome do banco de dados

// Estabelecendo a conexão com o banco de dados usando as configurações acima
$conexao = mysqli_connect($servidorBD, $usuarioSQL, $senha, $database);

// Selecionando o banco de dados
mysqli_select_db($conexao, $database);

// Agora a variável $conexao pode ser utilizada para executar consultas e operações no banco de dados
?>
