<?php
// Configuração do banco de dados
$host = "localhost";
$usuario = "root";   // ajuste conforme seu ambiente
$senha = "";         // ajuste conforme seu ambiente
$banco = "maparajuba_db";

// Criar conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Receber dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $mensagem = $conn->real_escape_string($_POST['mensagem']);

    // Inserir no banco
    $sql = "INSERT INTO contatos (nome, email, mensagem) 
            VALUES ('$nome', '$email', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green; font-family:Arial; text-align:center; margin-top:50px;'>
                Obrigado, $nome! Sua mensagem foi enviada com sucesso.
              </p>";
        echo "<p style='text-align:center;'><a href='../front-end/index.html'>Voltar ao site</a></p>";
    } else {
        echo "<p style='color:red; font-family:Arial; text-align:center; margin-top:50px;'>
                Erro: " . $conn->error . "
              </p>";
    }
}

$conn->close();
?>
