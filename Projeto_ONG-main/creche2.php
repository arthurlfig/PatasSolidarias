<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "users";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}


$animal = $_POST['animal'];
$outroAnimal = isset($_POST['outroAnimal']) ? $_POST['outroAnimal'] : null;
$nomeAnimal = $_POST['nomeAnimal'];
$diaEntrada = $_POST['diaEntrada'];
$horarioEntrada = $_POST['horarioEntrada'];
$diaSaida = $_POST['diaSaida'];
$horarioSaida = $_POST['horarioSaida'];
$observacoes = $_POST['observacoes'];


$sql = "INSERT INTO agendamentos_creche (animal, outro_animal, nome_animal, dia_entrada, horario_entrada, dia_saida, horario_saida, observacoes)
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $animal, $outroAnimal, $nomeAnimal, $diaEntrada, $horarioEntrada, $diaSaida, $horarioSaida, $observacoes);


if ($stmt->execute()) {
    
    header("Location: sucesso_agendamento.html");
    exit(); 
} else {
    echo "Erro ao agendar: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
