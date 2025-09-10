<?php
// Configuração do banco
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "advocacia";

// Conectar ao banco
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Buscar contatos
$sql = "SELECT id, nome, email, mensagem, data_envio FROM contatos ORDER BY data_envio DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Painel de Contatos</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background-color: #f4f4f4; }
    h1 { margin-bottom: 20px; }
  </style>
</head>
<body>
  <h1>Mensagens Recebidas</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Mensagem</th>
      <th>Data de Envio</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['nome']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['mensagem']."</td>
                    <td>".$row['data_envio']."</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Nenhuma mensagem encontrada.</td></tr>";
    }
    ?>
  </table>
</body>
</html>

<?php
$conn->close();
?>
