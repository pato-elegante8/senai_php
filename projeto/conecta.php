<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "desenvolvimento";
//habilita os rélatorios de erro da classe mysqli
mysqli_report(MYSQLI_REPORT_ERROR);
try{
    $conn = new mysqli($hostname, $username, $password, $database);
    //define o charset para 8
    $conn -> set_charset("utf8mb4");
   

} catch (mysqli_sql_exception $e ){
    error_log("erro na conexão com o banco". $e->getMessage());
    //mensagem generica para o usuario 
    die("ocorreu um erro") ;
}
?>