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
    if (menuLateral.style.width === "250px") {
        menuLateral.style.width = "0";
    } else {
        menuLateral.style.width = "250px";
    }
}
</script>

<style>
    .menu-lateral {
    height: 100%;
    width: 0;
    position: fixed;
    top: 0;
    left: 0;
    background-color: var(--azul_marinho);
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 70px; 
    box-shadow: 3px 0 15px rgba(0, 0, 0, 0.3);
    font-family: 'Encode Sans Expanded', sans-serif;
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
    z-index: 10; 
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
    text-align: center;
}
.menu-lateral .fechar:hover {
    color: var(--amarelo);
}
.menu-lateral a:hover {
    background-color: var(--laranja);
    color: var(--azul_marinho);
    transform: scale(1.05);
}

</style>