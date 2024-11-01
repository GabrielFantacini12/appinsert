<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST ['telefone'];
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];
    


//prepara a vincula

$stmt = $conn->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (? , ? , ?, ?)");
$stmt->bind_param("ssss", $nome, $telefone, $email, $senha);

//Executa
if ($stmt->execute()) {
    echo "Novo registro inserido com sucesso!";
} else{
    echo "Erro: " . $stmt->error;
}

// Fecha a Declaração e a conexão
$stmt->close();
$conn->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form method="POST" action="">
        <label for="nome">Nome:</lable>
        <input type="text" id="nome" name="nome" required> <br><br>

        <label for="telefone">Telefone:</lable>
        <input type="text" id="telefone" name="telefone" required> <br><br>

        <label for="email">Email:</lable>
        <input type="text" id="email" name="email" required> <br><br>

        <label for="senha"><S></S>enha:</lable>
        <input type="text" id="senha" name="senha" required> <br><br>

        <button type= "submit">Enviar</button>

        </form>
    
</body>
</html>
