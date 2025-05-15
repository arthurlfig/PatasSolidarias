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
$email = $_SESSION['email'];
$id_doador = $_SESSION['id'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


if (isset($_POST['adotar'])) {
    $id_animal = $_POST['id_animal'];
    $sql_update = "UPDATE animal SET status_adocao = 'adotado' WHERE id = '$id_animal' AND id_doador = '$id_doador'";

    if ($conn->query($sql_update) === TRUE) {

    } else {
        echo "Erro ao atualizar status: " . $conn->error;
    }
}


$sql = "SELECT id, nome, foto FROM animal WHERE id_doador = '$id_doador' AND status_adocao != 'adotado'";
$result = $conn->query($sql);

if (!$result) {
    die("Erro na consulta SQL: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais para Adoção</title>
    <link rel="stylesheet" href="pagina_animais.css">
</head>
<body>

<?php include 'menu_teste.php'; ?>

<h1>Meus animais para adoção</h1>
<div class="animal-container">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="animal-card">';
            echo '<h3>' . htmlspecialchars($row["nome"]) . '</h3>';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["foto"]) . '" alt="Foto de ' . htmlspecialchars($row["nome"]) . '">';
            echo '<form action="" method="post">';
            echo '<input type="hidden" name="id_animal" value="' . $row["id"] . '">';
            echo '<input type="submit" name="adotar" value="Mudar status para adotado">';
            echo '</form>';
            echo '</div>';
        }
    } else {
        echo "<p>Você ainda não cadastrou nenhum animal para adoção.</p>";
    }
    ?>
</div>

</body>
</html>

<?php
$conn->close();
?>
