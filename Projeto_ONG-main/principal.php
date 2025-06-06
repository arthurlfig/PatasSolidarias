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
    <link rel="stylesheet" href="principal.css">
</head>
<body>
    <div class="banner-section">
        <h1 class="banner-title">Aqui, seu AUmigo encontra um lar.</h1>
    </div>
    
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
    <a href="meus_animais.php">Meus animais</a>
   
    <a href="pesqui_animais.php">Adote um animal</a>  
    
    <a href="cadastroanimal.php">Doar animal</a> 
    <a href="antes_depois.php">Antes/Depois dos animais</a>
    <a href="creche_conhecer.php">Creche</a>
    <a href="veterinaria.php">Veterinário</a>
    <a href="colaboracao_mostrar.php">Faça uma doação para a ONG</a>
    <a href="sobre_nos.php">Sobre Nós</a>
</div>

    <script>

        const images = [
            'img/dogoo2.jpg',
            'img/gatcho3.jpg',
            'img/dogoo4.jpg',
            'img/dogoo5.jpg'
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

        setInterval(changeBackgroundImage, 3600);

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
    <main>
        <div class="doacao-animais-section">
            <h2><img src="img/adoption.png" alt="Ícone" class="titulo-icone"> Adote um Aumigo!</h2>
            <p class="descricao-doacao">
                Encontre aumigos prontos para serem adotados e ofereça a eles um novo lar. Veja como você pode ajudar.
            </p>
            <a href="animais.php" class="doacao-botao">Ver animais para adoção</a>
        </div>

        <div class="adocao-animais-section">
            <h2><img src="img/adopt.png" alt="Ícone" class="titulo-icone">Colocar Para Adoção!</h2>
            <p class="descricao-adocao">
                Ajude um aumigo a encontrar seu lar, aqui embaixo você consegue fazer a ficha de um animal para cadastrá-lo para adoção.
            </p>
            <a class="adocao-botao" href="cadastroanimal.php">Doar animal</a>
        </div>

        <div class="antes-depois-section">
            <h2><img src="img/veterinary.png" alt="Ícone" class="titulo-icone"> Antes e Depois!</h2>
            <div class="antes-depois-gallery">
                <div class="antes-depois-item">
                    <div class="antes-depois-imagem antes" style="background-image: url('img/antes1.jpg');"></div>
                    <div class="antes-depois-imagem depois" style="background-image: url('img/depois1.jpg');"></div>
                </div>
                <div class="antes-depois-item">
                    <div class="antes-depois-imagem antes" style="background-image: url('img/antes2.jpg');"></div>
                    <div class="antes-depois-imagem depois" style="background-image: url('img/depois2.jpg');"></div>
                </div>
            </div>
            <p class="descricao">Aqui você pode conferir o antes e depois de aumigos que foram resgatados de maus-tratos por denúncias.</p>
            <a href="antes_depois.php" class="antes-depois-botao">Veja Mais</a>
        </div>
        
        <div class="doar">
            <h2 class="doar-title">
                <img src="img/heart.png" alt="Ícone Doação" class="doar-icon">
                Ajude-nos com uma doação!
            </h2>
            <div class="doar-list">
                <div class="doar-container">
                    <h3>Doações</h3>
                    <p>Sua doação faz toda a diferença na vida de centenas de animais que precisam de amor e cuidado. Com seu apoio, conseguimos proporcionar resgate, abrigo, alimentação, e cuidados veterinários para cães, gatos e outros animais que foram abandonados ou maltratados.
                    <br>Cada contribuição nos ajuda a oferecer uma nova chance para esses bichinhos, dando-lhes a oportunidade de encontrar um lar amoroso e seguro. Seja parte dessa missão!</p>
                    <p><strong>Doe agora e ajude-nos a proporcionar um futuro para todos os animais.</strong></p>
                    <a href="colaboracao_mostrar.php"  class="ong-link">Fazer uma doação</a>
                </div>
            </div>
        </div>

        <div class="veterinaria-parceira">
            <div class="veterinaria-header">
                <img src="img/animal-care.png" alt="Ícone veterinaria" style="width: 75px; height: 75px; margin-right: 10px;">
                <h2>Veterinária Parceira!!!!</h2>
            </div>
            <div class="veterinaria-info">
                <h3>Veterinária Salve a Todos</h3>
                <p><strong>Endereço:</strong> Avenida dos animais, 123 - Bairro Wildlife, Curitiba, PR</p>
                <p>A Clínica Veterinária Salve a Todos oferece cuidados completos para a saúde e bem-estar dos pets. Com uma equipe experiente e infraestrutura moderna, estão prontos para atender seu amigo com carinho e dedicação.</p>
                <a href="veterinaria.php" class="veterinaria-link">Visite a página</a>
            </div>
        </div>

         <div class="creche-parceira">
            <div class="creche-header">
                <img src="img/animal-shelter.png" alt="Ícone Creche" style="width: 75px; height: 75px; margin-right: 10px;">
                <h2>Creche Parceira!!!!</h2>
            </div>
            <div class="creche-info">
                <h3>Creche Patas Felizes</h3>
                <p><strong>Endereço:</strong> Avenida dos Bichos, 321 - Bairro Petville, Curitiba, PR</p>
                <p>A Creche Patas Felizes oferece um ambiente seguro e divertido para os pets enquanto seus donos estão fora. Com profissionais qualificados e atividades variadas, seu amigo de quatro patas estará sempre bem cuidado.</p>
                <a href="creche_conhecer.php" class="creche-link">Visite a página</a>
            </div>
        </div>

<div class="denuncia-container">
    <div class="denuncia-header">
        <img src="img/attention.png" alt="Ícone de Denúncia" class="denuncia-icon" />
        <h2 class = "h2-denuncie">Denuncie um caso</h2>
    </div>
    <h3 class="denuncia-title">Não fique calado.</h3>
    <p class="denuncia-description">
        Se você presenciou algum abuso aos nossos aumigos de quatro patas, por favor, denuncie. 
        No botão abaixo tem informações relevantes que vão ajudar você neste processo.
    </p>
    <a href="denuncie.php" class="denuncia-button">Denunciar</a>
</div>
        <div class="container">
            <div class="recommended-ongs" style="text-align: center;">
                <h2 style="display: inline-flex; align-items: center; justify-content: center; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                    <img src="img/dog.png" alt="Icone ONG" style="width: 80px; height: 80px; margin-right: 10px;">
                    ONGs e Clínicas Recomendadas
                </h2>
                <div class="ong-list">
                    <div class="ong-item">
                        <h3>SPAC</h3>
                        <p><strong>Endereço: </strong>Estrada Nova de Colombo, 5504 Santa Cândida – 82.720-010 – Curitiba – PR</p>
                        <p>A Sociedade Protetora dos Animais de Curitiba tem como fim doar animais e oferecer cuidados veterinários aos animais necessitados.</p>
                        <a href="https://spacuritiba.org.br/" target="_blank" class="ong-link">Visite o site</a>
                    </div>
                    <div class="ong-item">
                        <h3>Vida Livre</h3>
                        <p><strong>Endereço: </strong>Rua Presidente Rodrigo Otávio, 1890
                            Hugo Lange
                            Curitiba/PR</p>
                        <p>Focada em animais silvestres e pequenos mamíferos, a clínica oferece serviços como atendimentos e exames.</p>
                        <a href="https://vidalivreclinica.com.br/r" target="_blank" class="ong-link">Visite o site</a>
                    </div>
                    <div class="ong-item">
                        <h3>Adote Bicho</h3>
                        <p><strong>Endereço: </strong>...</p>
                        <p>Focada em doação de animais diversos, e contém uma categoria de animais perdidos e animais encontrados. Ajuda usuários a colocar seus animais para adoção.</p>
                        <a href="https://www.adotebicho.com.br/" target="_blank" class="ong-link">Visite o site</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="faq-container">
            <h1>
                <img src="img/conversation.png" alt="Imagem FAQ" class="faq-image" style="width: 70px; height: 70px; margin-left: 10px; margin-right: 20px;"> 
                Perguntas Frequentes
            </h1>
            <div class="faq-item">
                <summary class="faq-title" onclick="toggleFaq(this)">Como posso adotar um pet?</summary>
                <div class="faq-content">Para adotar um pet, você pode acessar aqui mesmo no nosso site e preencher o formulário de adoção. E então o futuro aumigo de alguém, estará na nossa lista de animais para adoção!</div>
            </div>
            <div class="faq-item">
                <summary class="faq-title" onclick="toggleFaq(this)">Que tipos de doação a ONG aceita?</summary>
                <div class="faq-content">Nós recebemos 2 tipos de doações. Doação de mantimentos e doação monetária, que você pode conferir aqui mesmo no nosso site!</div>
            </div>
            <div class="faq-item">
                <summary class="faq-title" onclick="toggleFaq(this)">Como posso ajudar a ONG?</summary>
                <div class="faq-content">Você pode ajudar de várias formas: realizando doações, adotando um animal, sendo voluntário ou divulgando nosso trabalho nas redes sociais.</div>
            </div>
            <div class="faq-item">
                <summary class="faq-title" onclick="toggleFaq(this)">Quais animais estão disponíveis para adoção?</summary>
                <div class="faq-content">Temos cães e gatos de diferentes idades e raças. Confira a nossa seção de adoção para ver todos os disponíveis.</div>
            </div>
            <div class="faq-item">
                <summary class="faq-title" onclick="toggleFaq(this)">A ONG oferece serviços de veterinário?</summary>
                <div class="faq-content">Sim, temos uma clínica veterinária parceira da ONG, na qual oferecem serviços básicos de saúde animal.</div>
            </div>
        </div>

        <div class="contact-info">
            <h2 style="color: black; display: flex; align-items: center;font-size: 30px;">
                <img src="img/place.png" alt="Ícone Endereço" style="width: 70px; height: 70px; margin-left: 10px; margin-right: 20px;">
                Endereço
            </h2>
            <p>Curitiba, PR</p>
            <p>Pontificia universidade dos cachorrinhos - Rua AuAu - Numero: 123</p>
            <p><strong>Horário de Atendimento:</strong><br>Segunda a Sexta: 8h - 18h</p>
            
            <iframe class=mapa src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.6020583832774!2d-49.25532212281319!3d-25.451564433748548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce4fa6efc3181%3A0x8b0f452491a6f477!2sPUCPR%20-%20Pontif%C3%ADcia%20Universidade%20Cat%C3%B3lica%20do%20Paran%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1730244720860!5m2!1spt-BR!2sbr" width="600" height="450" allowfullscreen loading="lazy"></iframe>
        </div>
    </main>
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
</body>
</html>
