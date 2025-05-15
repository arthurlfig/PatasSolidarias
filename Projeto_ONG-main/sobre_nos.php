<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sobre_nos.css">
    <title>Sobre Nós</title>
</head>
<body>
    <?php include 'menu_teste.php'; ?>

    <div class="colecao_cards">
        <div class="card">
            <h2 class="titulo__secundario">Quem somos nós?</h2>
            <p class="card__paragrafo">A Pata Solidárias é uma ONG fundada em 2024 com a missão de resgatar, cuidar e promover a adoção responsável de cães abandonados na cidade de Curitiba. Com um time dedicado de voluntários, oferecemos abrigo temporário, cuidados veterinários e trabalhamos para encontrar lares amorosos para cada um dos nossos animais. Nossa ONG acredita que todos os cães merecem uma segunda chance e buscamos conscientizar a comunidade sobre a importância da adoção e do bem-estar animal. </p>
        </div>
        <div class="card">
            <h2 class="titulo__secundario">O que fazemos?</h2>
            <p class="card__paragrafo">A Pata Solidária atua em Curitiba resgatando cães abandonados, oferecendo a eles abrigo temporário, cuidados veterinários e muito carinho. A ONG trabalha para promover adoções responsáveis, conectando os animais com lares amorosos. Além disso, realiza campanhas de conscientização sobre a importância do bem-estar animal, buscando sensibilizar a comunidade sobre o cuidado e a responsabilidade com os pets. Cada cão resgatado recebe atenção especial para garantir uma nova chance de viver em um ambiente seguro e acolhedor. </p>
        </div>
    </div>
    <h2 class="paragrafo_secundario_historia">A história do nosso maior deseafio</h2>
    <div class="div_salvos">
        <img class="imagem_cachorros_salvos" src="img/equipe_de_cachorros.jpg" alt="Cachorros salvos pela nossa equipe">
        <p class="salvos_paragrafo">Na Patas Solidárias, nossa equipe recebeu uma chamada que mudou tudo: dezenas de cães estavam abandonados em um local remoto, precisando urgentemente de ajuda. Juntamos nossos voluntários, preparamos os materiais e partimos. Ao chegar, deparamos com uma cena que partiu nossos corações. Havia cães de todas as idades e tamanhos, magros, machucados e com olhares perdidos, como se já tivessem desistido de esperar por ajuda.</p>
        <p class="salvos_paragrafo">Cada cachorro que colocamos nas nossas vans recebia um carinho e uma promessa silenciosa: de que suas vidas mudariam dali em diante. No abrigo, eles receberam água fresca, comida e cuidados médicos. As feridas foram tratadas, e, dia após dia, vimos aqueles olhares tristes ganharem brilho e esperança. Muitos dos cães encontraram lares amorosos, enquanto outros ainda aguardam suas famílias.</p>
        <p class="salvos_paragrafo">Aquela missão foi um lembrete de por que existimos: para dar uma nova chance a quem só conheceu o abandono. Na Patas Solidárias, acreditamos que todo animal merece amor e dignidade, e seguimos trabalhando para que nenhum deles tenha que enfrentar o mundo sozinho novamente.</p>
    </div>
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
