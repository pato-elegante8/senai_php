<?php
    include 'conecta.php';
    session_start();
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
        <center><h2>DASHBOARD</h2></center>
                
        <div class="row justify-content-center row-cols-1 row-cols-md-4 mb-5 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <h2></h2>
                    </div>
                    <div class="card-body text-start">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    
                                      $result = $conn->query("SELECT COUNT(id) AS total_clientes FROM clientes");
                                      $data = $result->fetch_assoc();
                                      echo "<h2>Total de clientes: " . $data['total_clientes'] . "</h2>";{
                                            while ($registro = $result -> fetch_array()) {
                                               $quantidade = $sql;
                                               $quantidade = ['quatidade'];
                                            }
                                        }
                                    ?>
                                        
                        </tbody>
                        </table>
                    </div>
                </div>       
            </div>
        </div>
                                
                                </tr> 
            </div>   
<html>

            <div class="row justify-content-center row-cols-1 row-cols-md-4 mb-5 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <h2>Salgados</h2>   
                        <html> <div
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'Gráfico dos Salgados' 

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 425px; height: 200px;"></div> 
  </body> </div>
</html>

                    </div>
                    <div class="card-body text-start">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                 </html> 
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <?php
                                      $pedidos = $conn->query("SELECT COUNT('id_pedido') AS total_pedido FROM salgados");
                                      $data = $pedidos->fetch_assoc();
                                      echo "<h2>Total de pedidos feitos : " . $data['total_pedido'] . "</h2>";{
                                            while ($registro = $pedidos -> fetch_array()) {
                                               $quantidade = $pedidos;
                                               $quantidade = ['pedidos'];
                                            }
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>       
            </div>
        </div>
                                
                                </tr> 
            </div>   

            <div class="row justify-content-center row-cols-1 row-cols-md-4 mb-5 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="green" class="bi bi-cash-coin" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
</svg>    
                    <h2>VALOR ARRECADADO</h2>
                    </div>
                    <div class="card-body text-start">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <?php
                                      $pedidos = $conn->query("SELECT COUNT(id) AS total_peidodos FROM pedidos");
                                      $data = $pedidos->fetch_assoc();
                                      echo "<h2>valor arrecadado: " . $data['total_peidodos'] . "</h2>";{
                                            while ($registro = $pedidos -> fetch_array()) {
                                               $quantidade = $pedidos;
                                               $quantidade = ['pedidos'];
                                            }
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>       
            </div>
        </div>
                                
            
            </div>   
    </body>
</html>