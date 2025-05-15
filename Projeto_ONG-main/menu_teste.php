
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

    function toggleMenu() {
        const menuLateral = document.getElementById("menuLateral");
        menuLateral.style.width = (menuLateral.style.width === "250px") ? "0" : "250px";
    }

</script>

<style>
    :root {
    --amarelo: #f4d06f;
    --laranja: #ff8811;
    --verde: #9dd9d2;
    --bege: #fff8f0;
    --azul_marinho: #392f5a;
}

    body {
        background-color: var(--bege);
        margin: 0;
        padding: 0;
        font-family: 'Encode Sans Expanded', sans-serif;
    }

    header {
        display: flex;
        background-color: var(--verde);
        height: 120px;
        padding: 0 35px;
        align-items: center;
        justify-content: space-between;
        font-family: 'Playfair Display', serif;
        color: var(--azul_marinho);
        border-bottom: 3px solid #333;
        
        top: 0;                
        left: 0;             
       
        z-index: 10;           
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
    }

    main {
        padding-top: 20px;     
        display: flex;
        flex-direction: column;
        align-items: center;    
    }

    .link_menu {
        font-size: 16px;
        background-color: var(--verde);
        text-decoration: none;
        border: 1px solid var(--azul_marinho);
        border-radius: 25px;
        padding: 10px;
        color: var(--azul_marinho);
        transition: background-color 0.7s ease, transform 0.5s ease;
    }

    .link_menu:hover {
        background-color: var(--laranja);
        color: var(--azul_marinho);
    }

    .titulo {
        font-size: 28px;
    }

    .botao_hamburguer {
        background: none;
        border: none;
        cursor: pointer;
    }


    .menu-lateral {
        height: 100%;
        width: 0;
        position: fixed;
        top: 0;
        left: 0;
        background-color: var(--azul_marinho);
        overflow-x: hidden;
        transition: width 0.5s; 
        padding-top: 70px;
        box-shadow: 3px 0 15px rgba(0, 0, 0, 0.3);
        font-family: 'Encode Sans Expanded', sans-serif;
        z-index: 20;             
    }

    .menu-lateral .fechar {
        position: absolute;
        top: 1px;
        right: 20px;
        font-size: 25px;
        color: var(--bege);
        background: none;
        border: none;
        cursor: pointer;
        transition: color 0.3s;
    }

    .menu-lateral .fechar:hover {
        color: var(--laranja);
    }

    .menu-lateral a {
        padding: 15px 20px;
        text-decoration: none;
        font-size: 20px;
        color: var(--azul_marinho);
        display: block;
        margin: 10px 0;
        background-color: var(--verde);
        transition: 0.3s;
    }

    .menu-lateral a:hover {
        background-color: var(--laranja);
        color: var(--azul_marinho);
        transform: scale(1.05);
    }
</style>