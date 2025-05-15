<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "patassolidarias";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$sql = "SELECT nome, foto_antes, foto_depois, comentarios FROM antes_depois";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais para Adoção</title>
    <link rel="stylesheet" href="antes_depois.css">
</head>
<body>

<?php include 'menu_teste.php'; ?>

<h1>Antes e depois de nossos AUmigos</h1>
<div class="animal-container">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="animal-card">';
            echo '<h3>' . htmlspecialchars($row["nome"]) . '</h3>';
            echo '<div class="fotos">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["foto_antes"]) . '" alt="Foto antes de ' . htmlspecialchars($row["nome"]) . '" class="foto-antes">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["foto_depois"]) . '" alt="Foto depois de ' . htmlspecialchars($row["nome"]) . '" class="foto-depois">';
            echo '</div>';
            echo '<p>' . htmlspecialchars($row["comentarios"]) . '</p>';    
            echo '</div>';
        }
    } else {
        echo "<p>Não foram cadastradas fotos.</p>";
    }
    ?>
</div>

</body>
</html>

<?php
$conn->close();
?>
