<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "patassolidarias";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $conn->real_escape_string($_POST['nome']);
    $comentarios = $conn->real_escape_string($_POST['comentarios']);

    if (isset($_FILES['foto_antes']) && $_FILES['foto_antes']['error'] == 0 &&
        isset($_FILES['foto_depois']) && $_FILES['foto_depois']['error'] == 0) {
        
        $foto_antes = file_get_contents($_FILES['foto_antes']['tmp_name']);
        $foto_antes = $conn->real_escape_string($foto_antes);

        $foto_depois = file_get_contents($_FILES['foto_depois']['tmp_name']);
        $foto_depois = $conn->real_escape_string($foto_depois);

        $sql = "INSERT INTO antes_depois (nome, foto_antes, foto_depois, comentarios) 
                VALUES ('$nome', '$foto_antes', '$foto_depois', '$comentarios')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Tudo certo";
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }

    } else {
        echo "Erro ao fazer o upload da foto.";
    }
}

$conn->close();
?>
