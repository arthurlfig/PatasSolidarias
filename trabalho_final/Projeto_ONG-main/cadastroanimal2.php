<?php
session_start();


if (!isset($_SESSION['email'])) {
    echo "<script>
        alert('Você precisa fazer login para acessar esta página.');
        window.location.href = 'login.html';
    </script>";
    exit; 
}

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "patassolidarias";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['name'];
    $tipo = $_POST['selecione_tipo'];
    $raca = $_POST['selecione_raca'];
    $temperamento = $_POST['selecione_temperamento'];
    $porte = $_POST['selecione_porte'];
    $idade = $_POST['idade'];
    $espaco = $_POST['espaco'];
    $comentarios = $_POST['comentarios'];
    $id_doador = $_SESSION['id'];


    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $foto = file_get_contents($_FILES['foto']['tmp_name']);
        $foto = $conn->real_escape_string($foto);

        $sql = "INSERT INTO animal (nome, tipo, raca, temperamento, porte, idade, necessita_espaco, comentários, foto, id_doador, status_adocao) VALUES ('$nome', '$tipo', '$raca', '$temperamento', '$porte', '$idade', '$espaco', '$comentarios', '$foto', '$id_doador', 'adoção')";
    } else {
        echo "Erro ao fazer o upload da foto.";
        exit; 
    }


    if ($conn->query($sql) === TRUE) {
        header('Location: sucesso.html');
        exit(); 
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}

$conn->close();
?>

