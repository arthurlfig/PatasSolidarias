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

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pessoa = $_SESSION['id'];

    if (isset($_POST['amount']) && isset($_POST['paymentMethod'])) {
        $valor = $_POST['amount'];
        $forma_pagamento = $_POST['paymentMethod'];

        $sql = "INSERT INTO doacao (id_pessoa, valor, forma_pagamento) 
                VALUES ('$id_pessoa', '$valor', '$forma_pagamento')";

        if ($conn->query($sql) === TRUE) {
            $mensagem = "Doação de dinheiro registrada com sucesso!";
        } else {
            $mensagem = "Erro ao registrar doação de dinheiro: " . $conn->error;
        }
    } elseif (isset($_POST['foodType']) && isset($_POST['foodQuantity'])) {
        $tipo_alimento = $_POST['foodType'];
        $quantidade_alimento = $_POST['foodQuantity'];

        $sql = "INSERT INTO doacao (id_pessoa, tipo_alimento, quantidade_alimento) 
                VALUES ('$id_pessoa', '$tipo_alimento', '$quantidade_alimento')";

        if ($conn->query($sql) === TRUE) {
            $mensagem = "Doação de alimentos registrada com sucesso!";
        } else {
            $mensagem = "Erro ao registrar doação de alimentos: " . $conn->error;
        }
    }
}


$sql_total_doacao = "SELECT SUM(valor) as total_dinheiro FROM doacao WHERE valor IS NOT NULL";
$result_total = $conn->query($sql_total_doacao);
$total_doacao_dinheiro = $result_total->fetch_assoc()['total_dinheiro'] ?? 0;


$sql_total_alimentos = "SELECT SUM(quantidade_alimento) as total_alimentos FROM doacao WHERE quantidade_alimento IS NOT NULL";
$result_alimentos = $conn->query($sql_total_alimentos);
$total_doacao_alimentos = $result_alimentos->fetch_assoc()['total_alimentos'] ?? 0;


$meta_doacao = 10000;
$meta_alimentos = 1000; 

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doações para ONG</title>
    <link rel="stylesheet" href="colaboracao.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'menu_teste.php'; ?>

<div id="menuLateral" class="menu-lateral">
    <a href="javascript:void(0)" class="fechar" onclick="toggleMenu()">&times;</a>
    <a href="principal.html">Página Principal</a>
    <a href="contato.html">Adote um animal</a>    
    <a href="cadastrar_animal.html">Doar animal</a>
    <a href="antes_depois.html">Antes/Depois dos animais</a>
    <a href="creche_conhecer.html">Creche</a>
    <a href="contato.html">Veterinário</a>
    <a href="colaboracao.html">Faça uma doação para a ONG</a>
    <a href="sobre_nos.html">Sobre Nós</a>
</div>

<section>
    <div class="container">
        <div class="donation-form-container">
            <h2>Ajude doando qualquer valor!</h2>
            <form id="moneyDonationForm" method="POST" action="">
                <label for="amount">Valor (R$):</label>
                <input type="number" name="amount" id="amount" min="1" required>
                <label for="paymentMethod">Forma de Pagamento:</label>
                <select name="paymentMethod" id="paymentMethod" required>
                    <option value="pix">Pix</option>
                    <option value="debito">Débito</option>
                    <option value="credito">Crédito</option>
                </select>
                <button type="submit">Doar</button>
            </form>
            <?php if (!empty($mensagem)) echo "<p>$mensagem</p>"; ?>
        </div>

        <div class="chart-container">
            <canvas id="donationChart"></canvas>
        </div>
    </div>

    <div class="container">
        <div class="donation-form-container">
            <h2>Doe alimentos para ajudar a ONG!</h2>
            <form id="foodDonationForm" method="POST" action="">
                <label for="foodType">Tipo de Alimento:</label>
                <input type="text" name="foodType" id="foodType" placeholder="Ex: Ração, Petiscos" required>
                <label for="foodQuantity">Quantidade (Kg):</label>
                <input type="number" name="foodQuantity" id="foodQuantity" min="1" required>
                <button type="submit">Doar</button>
            </form>
        </div>

        <div class="chart-container">
            <canvas id="foodDonationChart"></canvas>
        </div>
    </div>
</section>

<footer>
    <div class="footer-container">
        <div class="footer-info">
            <h2>Contato</h2>
            <p>Telefone: (41) 9999-9999</p>
            <p>E-mail: <a href="mailto:patassolidariass@gmail.com">patassolidariass@gmail.com</a></p>
        </div>
        
        <div class="footer-img">
            <img src="img/image.png" alt="Logo Patas Solidárias">
        </div>
        
        <div class="footer-social">
            <h2>Siga-nos:</h2>
            <a href="https://www.tiktok.com/@patassolidariass?is_from_webapp=1&sender_device=pc" class="social-link">    
                <img src="img/tiktok.png" alt="Tiktok" class="footer-icon">
                Tiktok
            </a>
            <a href="https://www.instagram.com/patassolidariass/" class="social-link">
                <img src="img/instagram.png" alt="Instagram" class="footer-icon">
                Instagram 
            </a>
            <a href="https://x.com/patasolidariass" class="social-link">
                <img src="img/x.png" alt="Twitter" class="footer-icon">
                Twitter 
            </a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 PATAS SOLIDÁRIAS. Todos os direitos reservados para a equipe: Amanda Fila, Arthur Kalil, Carlos Leonardo, Eduardo Monteiro, Leonardo Grattao.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const totalDoacaoDinheiro = <?php echo $total_doacao_dinheiro; ?>;
    const metaDoacao = <?php echo $meta_doacao; ?>;
    const totalDoacaoAlimentos = <?php echo $total_doacao_alimentos; ?>;
    const metaAlimentos = <?php echo $meta_alimentos; ?>;

    const ctxMoney = document.getElementById('donationChart').getContext('2d');
    new Chart(ctxMoney, {
        type: 'bar',
        data: {
            labels: ['Doações Realizadas (R$)', 'Meta de Doações (R$)'],
            datasets: [{
                label: 'Doações Realizadas (R$)',
                data: [totalDoacaoDinheiro],
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }, {
                label: 'Meta de Doações (R$)',
                data: [metaDoacao],
                backgroundColor: 'rgba(153, 102, 255, 0.6)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

    const ctxFood = document.getElementById('foodDonationChart').getContext('2d');
    new Chart(ctxFood, {
        type: 'bar',
        data: {
            labels: ['Alimentos Doados (Kg)', 'Meta de Alimentos (Kg)'],
            datasets: [{
                label: 'Alimentos Doados (Kg)',
                data: [totalDoacaoAlimentos],
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }, {
                label: 'Meta de Alimentos (Kg)',
                data: [metaAlimentos],
                backgroundColor: 'rgba(153, 102, 255, 0.6)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });
</script>

</body>
</html>
