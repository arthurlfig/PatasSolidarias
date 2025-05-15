<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doações para ONG</title>
    <link rel="stylesheet" href="creche_conhecer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="creche_conhecer.css"> 
</head>
<body>

    <?php include 'menu_teste.php'; ?>

    <section class="galeria">
        <h2>Conheça Nossa Creche Parceira</h2>
        <div class="imagem-container">
            <img src="img/banheiro.jpeg" alt="Creche 1" class="imagem-creche">
            <img src="img/casa.jpeg" alt="Creche 2" class="imagem-creche">
            <img src="img/dormitorio.jpeg" alt="Creche 3" class="imagem-creche">
            <img src="img/escolinha.jpeg" alt="Creche 4" class="imagem-creche">
            <img src="img/espaco_gato.jpeg" alt="Creche 5" class="imagem-creche">
            <img src="img/parque.jpeg" alt="Creche 6" class="imagem-creche">
        </div>
    </section>

    <section class="descricao-creche quadro">
        <h2>Creche Parceira</h2>
        <p><strong>Endereço:</strong> Avenida dos Bichos, 123 - Bairro Petville, Curitiba, PR</p>
        <p>Nossa Creche é o espaço ideal para cuidar do seu aumigo enquanto você está fora. Oferecemos um ambiente seguro e divertido para cães, gatos e muitos outros tipos de animais com áreas de lazer, socialização e descanso. Nossos profissionais experientes garantem que cada animal receba a atenção e o carinho que merece. Com atividades supervisionadas, como brincadeiras em grupo, passeios e treinamento, seu pet vai se sentir em casa! Aqui, garantimos que a experiência na creche seja tão alegre e aconchegante quanto a sua, porque sabemos que cada patinha conta uma história!</p>
        <p>Contato: (41) 99999-9999</p>
        
       
        <a href="creche.php" class="botao-agendar">Agende aqui a estadia do seu aumigo!!!</a>
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