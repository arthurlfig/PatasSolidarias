<?php
session_start();


if (!isset($_SESSION['email'])) {
    
    echo "<script>
        alert('Você precisa fazer login para acessar esta página.');
        window.location.href = 'login.html';
    </script>";
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro_animal.css">
    <title>Cadastro de animal</title>
</head>
<body>
    <?php include 'menu_teste.php'; ?>

    <h2>Cadastro de animal</h2>
    
    <form class="informacoes" action="cadastroanimal2.php" method="POST" enctype="multipart/form-data">
        Nome: <input type="text" name="name" id="txtName" class="jose" required> <br><br>
        
        Tipo: 
        <select name="selecione_tipo" id="tipo" class="jose" required>
            <option value="">Selecione</option>
            <option value="gato">Gato</option>
            <option value="cachorro">Cachorro</option>
        </select> 
        <br><br>

        Raça: 
        <select name="selecione_raca" id="raca" class="jose" required>
            <option value="">Selecione</option>
        </select> 
        <br><br>

        Temperamento: 
        <select name="selecione_temperamento" id="temperamento" class="jose" required>
            <option value="selecione_temperamento">Selecione</option>
            <option value="calmo">Calmo</option>
            <option value="agitado">Agitado</option>
            <option value="nervoso">Nervoso</option>
            <option value="amigavel">Amigável</option>
        </select> 
        <br><br>

        Tamanho: 
        <select name="selecione_porte" id="tamanho" class="jose" required>
            <option value="selecione_porte">Selecione</option>
            <option value="pequeno">Pequeno</option>
            <option value="medio">Médio</option>
            <option value="grande">Grande</option>
        </select> 
        <br><br>

        Idade: <input type="number" name="idade" class="jose" required min="0" max="17"> <br>

        Necessita espaço? <br>
        <input type="radio" value="1" name="necessita_espaco" id=1 class="jose" required>Sim
        <input type="radio" value="0" name="necessita_espaco" id=0 class="jose" required>Não <br>

        <div class="caixa-upload">
            Foto: 
            <input type="file" name="foto" id="foto" accept="image/*" class="jose" onchange="mostrarMiniatura()"> <br>
            <div class="miniatura-container">
                <img id="miniatura" alt="Pré-visualização da imagem" style="display: none;">
            </div>
        </div>

        Comentários: <input type="text" name="comentarios" size="30" class="jose" >

        <input type="submit" class="cadastrar" name="submit" value="Enviar">
    </form>

    <script>
        function toggleMenu() {
    const menuLateral = document.getElementById("menuLateral");
    
    if (menuLateral.style.width === "250px") {
        menuLateral.style.width = "0";
    } else {
        menuLateral.style.width = "250px";
    }
}
        const tipo = document.getElementById('tipo');
        const racaSelect = document.getElementById('raca');

        
        const racasGato = [
            { value: 'persa', text: 'Persa' },
            { value: 'siames', text: 'Siamês' },
            { value: 'outra_raca', text: 'Outro' }
        ];

        const racasCachorro = [
            { value: 'golden', text: 'Golden' },
            { value: 'Bulldog', text: 'Bulldog' },
            { value: 'corgi', text: 'corgi' },
            { value: 'pinscher', text: 'Pinscher' },
            { value: 'vira-lata', text: 'vira-lata' },
            { value: 'salsicha', text: 'salsicha' },
            { value: 'outra_raca', text: 'Outro' }
        ];

        
        function atualizarRacas() {
    racaSelect.innerHTML = '<option value="">Selecione</option>';
    
 
    const racas = tipo.value === 'gato' ? racasGato : tipo.value === 'cachorro' ? racasCachorro : [];


    racas.forEach(raca => {
        const option = document.createElement('option');
        option.value = raca.value;
        option.textContent = raca.text;
        racaSelect.appendChild(option);
    });
}

        
        tipo.addEventListener('change', atualizarRacas);
        function mostrarMiniatura() {
        const fotoInput = document.getElementById('foto');
        const miniatura = document.getElementById('miniatura');

        
        if (fotoInput.files && fotoInput.files[0]) {
            const reader = new FileReader();
            
            
            reader.onload = function(e) {
                miniatura.src = e.target.result;  
                miniatura.style.display = 'block'; 
            };

            
            reader.readAsDataURL(fotoInput.files[0]);
        }
    }

    </script>
</body>
</html>