<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Página - PATAS SOLIDÁRIAS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="denuncie.css">
</head>
<body>
    <?php include 'menu_teste.php'; ?>

    <main>

        <h2 class="main-title">DENUNCIE!</h2>


        <div class="contact-info">
            <h2 class="contact-title">Aqui estão algumas informações importantes de como denunciar abuso de animais:</h2>
            <p> <strong>1. Identificação do Animal</strong><br>
                Tipo de animal: Especifique se é um cão, gato, ave, etc.
                Raça, cor e tamanho: Descreva a aparência física do animal.
                Marcas distintivas: Identifique se há características especiais, como cicatrizes ou coleiras.<br><br>
                <strong>2. Descrição da Situação</strong><br>
                Natureza do abuso: Descreva o que você presenciou, como negligência, maus-tratos, abandono, etc.
                Frequência do abuso: Informe se é um incidente isolado ou uma situação recorrente.
                Localização: Indique onde o abuso está ocorrendo, incluindo endereço e pontos de referência.<br><br>
                <strong>3. Testemunhas</strong><br>
                Nome e contato de testemunhas: Se houver outras pessoas que presenciaram o abuso, forneça seus dados.
                Declarações: Se possível, obtenha declarações por escrito de testemunhas.<br><br>
                <strong>4. Evidências</strong><br>
                Fotografias ou vídeos: Registre evidências visuais do abuso ou das condições em que o animal se encontra.
                Anotações: Faça anotações detalhadas sobre o que aconteceu, incluindo datas e horários.<br><br>
                <strong>5. Informações do Suposto Abusador</strong><br>
                Nome e contato: Se você souber quem é o responsável pelo abuso, forneça essas informações.
                Descrição: Inclua informações sobre a aparência da pessoa e seu comportamento em relação ao animal.<br><br>
                <strong>6. Contatos para Denúncia</strong><br>
                Vá na delegacia da policia cívil mais próxima de você e denuncie.</p>
            <h3 class="contact-title">Por que devemos denunciar?</h3>
            <p>
                Denunciar abuso de animais é essencial por diversas razões. Primeiramente, a denúncia permite a proteção imediata dos animais em situação de risco, resultando muitas vezes em salvamentos. Além disso, a responsabilização legal dos agressores não apenas garante consequências para quem comete abusos, mas também pode educá-los sobre o bem-estar animal.<br><br>
                Ao promover o bem-estar dos animais, a denúncia ajuda a assegurar que eles tenham acesso a cuidados adequados, abrigo e alimentação. Esse ato também gera um impacto social significativo, contribuindo para uma mudança cultural em relação ao tratamento de animais e inspirando outras pessoas a se engajar na proteção animal.<br><br>
                Além disso, a denúncia é uma medida preventiva, criando um ambiente mais seguro para os animais e desencorajando comportamentos violentos. Isso pode refletir em uma conscientização maior sobre os direitos dos animais e sobre a responsabilidade ética que temos em relação a eles. Por fim, denunciar abusos é uma ação moralmente correta que demonstra empatia e compromisso em proteger aqueles que não podem se defender.</p>
        </div>
    </main>


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
                    <img src="img/tiktok.png" alt="Tiktok" class="footer-icon"> Tiktok
                </a>
                <a href="https://www.instagram.com/patassolidariass/" class="social-link">
                    <img src="img/instagram.png" alt="Instagram" class="footer-icon"> Instagram
                </a>
                <a href="https://x.com/patasolidariass" class="social-link">
                    <img src="img/x.png" alt="Twitter" class="footer-icon"> Twitter
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 PATAS SOLIDÁRIAS. Todos os direitos reservados para a equipe: Amanda Fila, Arthur Kalil, Carlos Leonardo, Eduardo Monteiro, Leonardo Grattao.</p>
        </div>
    </footer>

    <script>
        const images = [
            'img/dogoo2.jpg',
            'img/gatcho3.jpg'
        ];

        let currentImageIndex = 0;
        const totalImages = images.length;

        images.forEach((image, index) => {
            const imgElement = document.createElement('div');
            imgElement.classList.add('banner-image');
            if (index === 0) imgElement.classList.add('active');
            imgElement.style.backgroundImage = `url(${image})`;
            document.querySelector('.banner-section').appendChild(imgElement);
        });

        function changeBackgroundImage() {
            const images = document.querySelectorAll('.banner-image');
            images[currentImageIndex].classList.remove('active');
            currentImageIndex++;
            if (currentImageIndex >= totalImages) {
                currentImageIndex = 0;
            }
            images[currentImageIndex].classList.add('active');
        }

        setInterval(changeBackgroundImage, 5000);

        function toggleMenu() {
            const menuLateral = document.getElementById("menuLateral");
            menuLateral.style.width = (menuLateral.style.width === "250px") ? "0" : "250px";
        }
    </script>
</body>
</html>
