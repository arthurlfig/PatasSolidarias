<?php
session_start();
$_SESSION['user_type'] = 'COMUM'; 


$host = 'localhost'; 
$db = 'patassolidarias';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $stmt = $conn->prepare("SELECT id, senha FROM pessoa WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $senha_armazenada);
        $stmt->fetch();
        

        if ($senha === $senha_armazenada) {
            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;

            $_SESSION['logado'] = true; 
            header("Location: principal.php"); 
            exit();
        } else {
            echo "<script>alert('Senha incorreta!');</script>";
        }
    } else {
        echo "<script>alert('Email não encontrado!');</script>";
    }
    
    $stmt->close();
}

$conn->close();
?>