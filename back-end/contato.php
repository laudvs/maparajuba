<?php
// Configuração do banco
$servername = "localhost";
$username = "root";  // padrão do XAMPP
$password = "";      // senha padrão é vazia
$dbname = "advocacia";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Capturar dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Inserir no banco
$sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "<p>Mensagem enviada com sucesso!</p>";
    echo "<a href='../front-end/index.html'>Voltar</a>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
