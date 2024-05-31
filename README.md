# Código de Login em PHP

Este é um exemplo de código PHP para um formulário de login simples. Ele consiste em um formulário que solicita um nome de usuário e uma senha, e um arquivo PHP que verifica as informações fornecidas no banco de dados.

## Instruções de Uso

1. Baixe os arquivos `login.html` e `login.css` para o seu projeto.
2. Crie um arquivo `login.php` e coloque o código PHP fornecido nele.
3. Certifique-se de ter um servidor PHP configurado para executar o código corretamente.
4. Crie um banco de dados e configure as credenciais de conexão no arquivo `conexao.php`.
5. Abra o arquivo `login.html` em um navegador da web.

## Arquivos do Projeto
- `login.css`: Contém os estilos CSS para o formulário de login.
- `login.php`: Contém o HTML e o código PHP para verificar as informações de login no banco de dados.
- `conexao.php`: Contém as credenciais de conexão com o banco de dados.

## Dependências

- Bootstrap: Este código utiliza o framework Bootstrap para estilizar o formulário. Certifique-se de incluir os links corretos para os arquivos CSS do Bootstrap no cabeçalho HTML.

## Funcionamento

1. Quando o usuário preenche o formulário de login e clica no botão "Enviar", os dados são enviados para o arquivo `login.php` usando o método POST.
2. O arquivo `login.php` inclui o arquivo `conexao.php` para estabelecer a conexão com o banco de dados.
3. Em seguida, o código PHP obtém o nome de usuário e a senha enviados pelo formulário usando a variável $_POST.
4. A função `puxardados` é chamada, passando o nome de usuário, a senha e a conexão com o banco de dados como argumentos.
5. A função realiza uma consulta no banco de dados para verificar se o nome de usuário existe.
6. Se a consulta retornar alguma linha, exibe a mensagem "logado com sucesso". Caso contrário, exibe a mensagem "Algo deu errado, verifique seus dados e tente novamente.".
7. Por fim, a conexão com o banco de dados é fechada.

   # Configurações de conexão com o banco de dados

Este código PHP contém as configurações necessárias para estabelecer a conexão com o banco de dados. Certifique-se de preencher as informações corretas de acordo com a configuração do seu ambiente.

## Configurações

- Nome de usuário do banco de dados: `root`
- Senha do banco de dados: `''` (vazio)
- Servidor do banco de dados: `localhost`
- Nome do banco de dados: `bdramalho`


Após configurar corretamente as informações do banco de dados, você pode utilizar a variável `$conexao` para realizar consultas e operações no banco de dados desejado.


Observação: Este código é apenas um exemplo simplificado e não deve ser utilizado em produção, pois não lida com questões de segurança, como proteção contra injeção de SQL.

# PHP Login Code

This is a PHP code example for a simple login form. It consists of a form that prompts for a username and password, and a PHP file that verifies the provided information against the database.

## Usage Instructions

1. Download the `login.html` and `login.css` files to your project.
2. Create a `login.php` file and place the provided PHP code in it.
3. Make sure you have a PHP server set up to run the code correctly.
4. Create a database and configure the connection credentials in the `conexao.php` file.
5. Open the `login.html` file in a web browser.

## Project Files
- `login.css`: Contains the CSS styles for the login form.
- `login.php`: Contains the HTML and PHP code to verify the login information against the database.
- `conexao.php`: Contains the connection credentials for the database.

## Dependencies

- Bootstrap: This code utilizes the Bootstrap framework to style the form. Make sure to include the correct links to the Bootstrap CSS files in the HTML header.

## Functionality

1. When the user fills out the login form and clicks the "Submit" button, the data is sent to the `login.php` file using the POST method.
2. The `login.php` file includes the `conexao.php` file to establish a connection to the database.
3. Next, the PHP code retrieves the username and password submitted through the form using the $_POST variable.
4. The `puxardados` function is called, passing the username, password, and database connection as arguments.
5. The function performs a database query to check if the username exists.
6. If the query returns any rows, it displays the message "Logged in successfully." Otherwise, it displays the message "Something went wrong, check your data and try again."
7. Finally, the database connection is closed.

# Database Connection Settings

This PHP code contains the necessary settings to establish a connection to the database. Make sure to fill in the correct information according to your environment configuration.

## Settings

- Database username: `root`
- Database password: `''` (empty)
- Database server: `localhost`
- Database name: `bdramalho`

After correctly configuring the database information, you can use the `$conexao` variable to perform queries and operations on the desired database.

Note: This code is just a simplified example and should not be used in production, as it does not address security concerns like SQL injection protection.

