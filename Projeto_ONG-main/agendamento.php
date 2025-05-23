<?php
session_start();
$logado = isset($_SESSION['logado']) && $_SESSION['logado'];
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas Frequentes - PATAS SOLIDÁRIAS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="agendamento.css">
</head>
<body>  
    <header>
        <button class="botao_hamburguer" onclick="toggleMenu()">
            <img src="img/menu-bar.png" width="55" height="50" alt="Menu">
        </button>
        <div class="titulo">PATAS SOLIDÁRIAS</div>
        <a class="link_menu" href="login.html">Entrar/Cadastrar</a>
    </header>


<div id="menuLateral" class="menu-lateral">
    <a href="javascript:void(0)" class="fechar" onclick="toggleMenu()">&times;</a>
    <a href="principal.php">Página Principal</a>
    <a href="javascript:void(0)" onclick="verificarLogin('meus_animais.php')">Meus animais</a>
    <a href="animais.php">Adote um animal</a>  
    <a href="javascript:void(0)" onclick="verificarLogin('cadastroanimal.html')">Doar animal</a>      
    <a href="antes_depois.html">Antes/Depois dos animais</a>
    <a href="creche_conhecer.html">Creche</a>
    <a href="contato.html">Veterinário</a>
    <a href="colaboracao.html">Faça uma doação para a ONG</a>
    <a href="sobre_nos.html">Sobre Nós</a>
</div>

    <script>

        function verificarLogin(destino) {
            if (!logado) {
                alert("Você precisa estar logado para acessar esta página.");
            } else {
                window.location.href = destino;
            }
        }

        const logado = <?php echo json_encode($logado); ?>;

        function toggleMenu() {
            const menuLateral = document.getElementById("menuLateral");
            menuLateral.style.width = (menuLateral.style.width === "250px") ? "0" : "250px";
        }

        function toggleFaq(element) {
            const content = element.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
                content.style.paddingTop = "0";
                content.style.paddingBottom = "0";
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
                content.style.paddingTop = "10px";
                content.style.paddingBottom = "10px";
            }
        }
    </script>

    <div class="container">
        <h1>Agendamento de Consultas</h1><br>
        <h2>Preencha o formulário abaixo:</h2>
        <form id="agendamentoForm">
            <label for="name">Nome Completo:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Telefone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="date">Data da Consulta:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Horário da Consulta:</label>
            <select id="time" name="time" required>
                <option value="">Selecione a hora</option>
                <option value="08:00">08:00</option>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
            </select>

            <label for="type">Tipo de Consulta:</label>
            <select id="type" name="type" required>
                <option value="">Selecione o tipo</option>
                <option value="Presencial">Presencial</option>
                <option value="Vídeo chamada">Vídeo chamada</option>
            </select>

            <label for="observations">Animal que será consultado:</label>
            <textarea id="observations" name="observations" rows="4" placeholder="Ex: Cachorro, gato, hamster, passarinho" required></textarea>

            <button type="submit">Agendar Consulta</button>
        </form>

        <div class="contact-info">
            <p><strong>Contato:</strong></p>
            <p>Telefone: (41) 9999-9999</p>
            <p>E-mail: patassolidarias@gmail.com</p>
            <p><strong>Horário de Atendimento:</strong><br>Segunda a Sexta: 8h - 18h</p>
        </div>
    </div>

    <script>
        document.getElementById('agendamentoForm').addEventListener('submit', function(event) {

            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const date = document.getElementById('date').value;
            const time = document.getElementById('time').value;
            const type = document.getElementById('type').value;
            const observations = document.getElementById('observations').value.trim();

            if (!name || !email || !phone || !date || !time || !type || !observations) {
                alert('Por favor, preencha todos os campos obrigatórios.');
                event.preventDefault();
            }
        });
    </script>
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
    
        <script>
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
