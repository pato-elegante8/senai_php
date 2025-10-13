<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Página com Login</title>
<style>
/* Estilos gerais */
body {
    background-color: #155c98; /* azul de fundo */
    margin: 0;
    font-family: "Times New Roman", serif; /* fonte formal */
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/* Imagem no topo */
img {
    display: block;
    width: 100%;
    max-width: 1500px;
    height: auto;
    margin: 0 auto;
}

/* Container central */
.caixa {
    flex: 1; /* ocupa o espaço disponível */
    display: flex;
    justify-content: center; /* centraliza horizontalmente */
    align-items: center; /* centraliza verticalmente */
}

/* Botão personalizado */
.custom-btn {
    font-size: 20px;       /* tamanho da fonte */
    padding: 20px 80px;    /* altura e largura do botão */
    border-radius: 10px;   /* cantos arredondados */
    cursor: pointer;
}

/* Barra azul escuro no rodapé */
.footer {
    background-color: #0d2a5b; /* azul escuro */
    width: 100%;
    height: 60px;
}
</style>
</head>
<body>

<!-- Imagem no topo -->
<img src="Captura de tela 2025-10-13 084403.png" alt="Imagem no topo">

<!-- Botão central -->


<div class="caixa">
<a href="pagina_login.php">
    <button type="button" class="btn btn-outline-primary custom-btn">ENTRAR</button>
</div>

<!-- Barra no rodapé -->
<div class="footer"></div>

</body>
</html>
