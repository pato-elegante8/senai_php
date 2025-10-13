<?php
session_start();
include 'conecta.php';

if (!isset($_SESSION["user"])) {
    echo "<script>window.location.href='index.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <title>CONECTA JOVEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            padding: 5px;
            margin: 5px;
        }
        h2 {
            color: #00008B;
        }
        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 10px;
        }
        .user-info {
            display: flex;
            align-items: center;
            gap: 8px;
            color: gray;
        }
        .username {
            font-weight: bold;
        }
        .logout-link {
            color: red;
            font-weight: bold;
            text-decoration: none;
        }
        .logout-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header class="main-header">
    <h2>CONECTA JOVEM</h2>
    <div class="user-info">
        <?php if (!empty($_SESSION["user"])): ?>
            <?php $usuario = htmlspecialchars($_SESSION["user"]); ?>
            <span class="username"><?= $usuario ?> | </span>
            <a class="logout-link" href="sair.php">SAIR</a>
        <?php endif; ?>
    </div>
</header>

<hr>

<nav>
    <?php include 'menu.php'; ?>
</nav>

<br>

<center>
    <h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#00008B" class="bi bi-card-list" viewBox="0 0 16 16">
            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
            <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8m0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
        </svg>&nbsp;QUEST
    </h2>
</center>

<br>

<center>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        FAZER QUEST
    </button>
</center>

<br>

<div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h2>QUEST CADASTRADAS</h2>
            </div>
            <div class="card-body text-start">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">NOME</th>
                            <th scope="col">ESPORTES</th>
                            <th scope="col">MÚSICAS</th>
                            <th scope="col">CURSOS</th>
                            <th scope="col">PALESTRAS</th>
                            <th scope="col">WORKSHOPS</th>
                            <th scope="col">TEATRO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $pesquisa = mysqli_query($conn, "SELECT * FROM quest ORDER BY nome");
                        if (!$pesquisa) {
                            echo "<tr><td colspan='7'>Erro na consulta: " . htmlspecialchars(mysqli_error($conn)) . "</td></tr>";
                        } else {
                            if (mysqli_num_rows($pesquisa) > 0) {
                                while ($registro = mysqli_fetch_assoc($pesquisa)) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($registro['nome']) . "</td>";
                                    echo "<td>" . htmlspecialchars($registro['esportes']) . "</td>";
                                    echo "<td>" . htmlspecialchars($registro['musicas']) . "</td>";
                                    echo "<td>" . htmlspecialchars($registro['cursos']) . "</td>";
                                    echo "<td>" . htmlspecialchars($registro['palestras']) . "</td>";
                                    echo "<td>" . htmlspecialchars($registro['workshops']) . "</td>";
                                    echo "<td>" . htmlspecialchars($registro['teatro']) . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='7'>Nenhuma quest cadastrada.</td></tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="quest_cadastro.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CADASTRO DE QUEST</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nome" class="form-label">NOME</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>

                    <div class="mb-3">
                        <label for="esportes" class="form-label">ESPORTES</label>
                        <select class="form-select" id="esportes" name="esportes" required>
                            <option value="" selected disabled>Faça a sua escolha</option>
                            <option value="Basquete">Basquete</option>
                            <option value="Futebol">Futebol</option>
                            <option value="Vôlei">Vôlei</option>
                            <option value="Tênis">Tênis</option>
                            <option value="Natação">Natação</option>
                            <option value="Outro">Outro esporte que não esteja aqui.</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="musicas" class="form-label">MÚSICAS</label>
                        <select class="form-select" id="musicas" name="musicas" required>
                            <option value="" selected disabled>Faça a sua escolha</option>
                            <option value="Música Clássica">Música Clássica</option>
                            <option value="Rock">Rock</option>
                            <option value="Pop">Pop</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Hip-Hop/Rap">Hip-Hop/Rap</option>
                            <option value="Música Eletrônica">Música Eletrônica</option>
                            <option value="Reggae">Reggae</option>
                            <option value="Outro">Outro tipo de música que não esteja aqui.</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="cursos" class="form-label">CURSOS</label>
                        <select class="form-select" id="cursos" name="cursos" required>
                            <option value="" selected disabled>Faça a sua escolha</option>
                            <option value="Bacharelados">Bacharelados</option>
                            <option value="Licenciaturas">Licenciaturas</option>
                            <option value="Tecnólogos">Tecnólogos</option>
                            <option value="Outro">Outro tipo de curso que não esteja aqui.</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="palestras" class="form-label">PALESTRAS</label>
                        <select class="form-select" id="palestras" name="palestras" required>
                            <option value="" selected disabled>Faça a sua escolha</option>
                            <option value="Transformação Digital e Inovação.">Transformação Digital e Inovação.</option>
                            <option value="Novas Tecnologias e a IA.">Novas Tecnologias e a IA.</option>
                            <option value="Gestão de Conflitos.">Gestão de Conflitos.</option>
                            <option value="Sustentabilidade e Responsabilidade Social.">Sustentabilidade e Responsabilidade Social.</option>
                            <option value="Novas Profissões.">Novas Profissões.</option>
                            <option value="Inteligência Emocional.">Inteligência Emocional.</option>
                            <option value="Liderança Humanizada.">Liderança Humanizada.</option>
                            <option value="Outro">Outro tipo de palestra que não esteja aqui.</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="workshops" class="form-label">WORKSHOPS</label>
                        <select class="form-select" id="workshops" name="workshops" required>
                            <option value="" selected disabled>Faça a sua escolha</option>
                            <option value="Presencial">Presencial</option>
                            <option value="Online">Online</option>
                            <option value="Híbrido">Híbrido</option>
                            <option value="Outro">Outro tipo de workshop que não esteja aqui</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="teatro" class="form-label">TEATRO</label>
                        <select class="form-select" id="teatro" name="teatro" required>
                            <option value="" selected disabled>Faça a sua escolha</option>
                            <option value="Teatro Musical">Teatro Musical</option>
                            <option value="Teatro de Vanguarda">Teatro de Vanguarda</option>
                            <option value="Teatro Monólogo">Teatro Monólogo</option>
                            <option value="Teatro de Rua">Teatro de Rua</option>
                            <option value="Teatro de Fantoches/Marionetes">Teatro de Fantoches/Marionetes</option>
                            <option value="Teatro de Sombras">Teatro de Sombras</option>
                            <option value="Outro">Outro tipo de teatro que não esteja aqui</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">CADASTRAR</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">FECHAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
