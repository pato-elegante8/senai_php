<?php
    session_start();
    include 'conecta.php';
    if (!isset($_SESSION["user"])) {
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='index.php';
        </script>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <title>SALGADOS DA MAMÃE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <style>
            body {
                padding: 5px;
                margin: 5px;
            }
            h2 {
                color: gray;
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
            <h2>SALGADINHOS DA MAMÃE</h2>
            <div class="user-info">
                <?php
                    if (!empty($_SESSION["user"])) {
                        $usuario = $_SESSION["user"];
                        echo "<span class='username'>".htmlspecialchars($usuario)." | </span><a class='logout-link' href='sair.php'>SAIR</a>";
                    }
                ?>
            </div>
        </header>
        <hr>
        <nav>
            <?php
                include 'menu.php';
            ?>
        </nav>
        <br>
        <center><h2><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#00008B" class="bi bi-people-fill" viewBox="0 0 16 16">
        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
        </svg>&nbsp;SALGADOS</h2></center>
        <br>
        <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                CADASTRAR NOVO SALGADO
        </button></center>
        <br>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <h2>SALGADOS CADASTRADOS</h2>
                    </div>
                    <div class="card-body text-start">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">NOME</th>
                                    <th scope="col">TIPO</th>
                                    <th scope="col">VALOR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $pesquisa = mysqli_query($conn, "SELECT * FROM salgados ORDER BY nome");
                                        $row = mysqli_num_rows($pesquisa);
                                        if ($row > 0) {
                                            while ($registro = $pesquisa -> fetch_array()) {
                                                $id = $registro['id'];
                                                $nome = $registro['nome'];
                                                $tipo = $registro['tipo'];
                                                $valor = $registro['valor'];
                                                echo '<td>'.$nome.'</td>';
                                                echo '<td>'.$tipo.'</td>';
                                                echo '<td>'.$valor.'</td>';
                                                echo '<td><a href="salgados_editar.php?id='.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                                                </svg></a> | <a href="salgados_excluir.php?id='.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                                </svg></a></td>';
                                                echo '</tr>';
                                            }
                                        } else {
                                            echo "NÃO HÁ SALGADOS CADASTRADOS!";
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
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CADASTRO DE SALGADOS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
        <div class="modal-body">
        <form action="salgados_cadastro.php" method="POST">
            <div class="form-group">
            <label>NOME DO SALGADO</label>
            <input type="text" class="form-control" name="nome" required>
            <label>TIPO</label>
            <input type="text" class="form-control" name="tipo" required>
            <label>VALOR</label>
            <input type="number" class="form-control" name="valor" required>
            <br>
            <button type="submit" class="btn btn-success">CADASTRAR</button>
            </div>                            
    </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="fechar">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>