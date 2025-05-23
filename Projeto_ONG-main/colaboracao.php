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


<header>
        <button class="botao_hamburguer" onclick="toggleMenu()">
            <img src="img/image 2.png" width="55" height="50" alt="Menu">
        </button>
        <div class="titulo">PATAS SOLIDÁRIAS</div>
        <a class="link_menu" href="login.html">Entrar/Cadastrar</a>
    </header>


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
                <form id="moneyDonationForm" action="colaboracao.php">
                    <label for="amount">Valor (R$):</label>
                    <input type="number" id="amount" min="1" required>
                    <label for="paymentMethod">Forma de Pagamento:</label>
                    <select id="paymentMethod" required>
                        <option value="pix">Pix</option>
                        <option value="debito">Débito</option>
                        <option value="credito">Crédito</option>
                    </select>
                    <button type="submit">Doar</button>
                </form>
            </div>

            <div class="chart-container">
                <canvas id="donationChart"></canvas>
            </div>
        </div>

        <div class="container">
            <div class="donation-form-container">
                <h2>Doe alimentos para ajudar a ONG!</h2>
                <form id="foodDonationForm" action="colaboracao.php">
                    <label for="foodType">Tipo de Alimento:</label>
                    <input type="text" id="foodType" placeholder="Ex: Ração, Petiscos" required>
                    <label for="foodQuantity">Quantidade (Kg):</label>
                    <input type="number" id="foodQuantity" min="1" required>
                    <button type="submit">Doar</button>
                </form>
            </div>

            <div class="chart-container">
                <canvas id="foodDonationChart"></canvas>
            </div>
        </div>
    </section>
    <footer>
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
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('donationChart').getContext('2d');
        let totalDoadoDinheiro = 1000; 
        let metaDinheiro = 10000;

        const moneyDonationChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Valor Doado', 'Meta'],
                datasets: [{
                    label: 'R$',
                    data: [totalDoadoDinheiro, metaDinheiro],
                    backgroundColor: ['rgba(75, 192, 192, 0.6)', 'rgba(255, 136, 17, 1)'],
                    borderColor: ['rgba(1, 1, 1, 1)', 'rgba(1, 1, 1, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: metaDinheiro
                    }
                }
            }
        });

        const ctxFood = document.getElementById('foodDonationChart').getContext('2d');
        let totalDoadoAlimentos = 500; 
        let metaAlimentos = 5000;

        const foodDonationChart = new Chart(ctxFood, {
            type: 'bar',
            data: {
                labels: ['Quantidade Doada (Kg)', 'Meta (Kg)'],
                datasets: [{
                    label: 'Kg',
                    data: [totalDoadoAlimentos, metaAlimentos],
                    backgroundColor: ['rgba(75, 192, 192, 0.6)', 'rgba(255, 136, 17, 1)'],
                    borderColor: ['rgba(1, 1, 1, 1)', 'rgba(1, 1, 1, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: metaAlimentos
                    }
                }
            }
        });

        document.getElementById('moneyDonationForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const amount = parseInt(document.getElementById('amount').value);
            const paymentMethod = document.getElementById('paymentMethod').value;

            if (!isNaN(amount) && amount > 0) {
                totalDoadoDinheiro += amount;
                moneyDonationChart.data.datasets[0].data[0] = totalDoadoDinheiro;
                moneyDonationChart.update();
                alert(`Obrigado pela sua doação de R$ ${amount} via ${paymentMethod}!`);
                document.getElementById('amount').value = '';
            } else {
                alert('Por favor, insira um valor válido.');
            }
        });

        document.getElementById('foodDonationForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const foodQuantity = parseInt(document.getElementById('foodQuantity').value);

            if (!isNaN(foodQuantity) && foodQuantity > 0) {
                totalDoadoAlimentos += foodQuantity;
                foodDonationChart.data.datasets[0].data[0] = totalDoadoAlimentos;
                foodDonationChart.update();
                alert(`Obrigado pela sua doação de ${foodQuantity} Kg!`);
                document.getElementById('foodType').value = '';
                document.getElementById('foodQuantity').value = '';
            } else {
                alert('Por favor, insira uma quantidade válida.');
            }
        });
        function toggleMenu() {
    const menuLateral = document.getElementById("menuLateral");
    if (menuLateral.style.width === "250px") {
        menuLateral.style.width = "0";
    } else {
        menuLateral.style.width = "250px";
    }
}
    </script>

</body>
</html>
<?php
    
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
        $id_pessoa = $_POST['id_pessoa'];

        if (isset($_POST['amount'])) {
            
            $valor = $_POST['amount'];
            $forma_pagamento = $_POST['paymentMethod'];

            $sql = "INSERT INTO patassolidarias.doacao (id_pessoa, valor, forma_pagamento) 
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

    $conn->close();
    ?>


