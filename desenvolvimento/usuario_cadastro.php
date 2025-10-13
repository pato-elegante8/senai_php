<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $cpf = $_POST['cpf'];
    $query = $conn->query("SELECT * FROM quest WHERE nome='$nome' AND cpf='$cpf'");
    if (mysqli_num_rows($query) > 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Esse usuário já existe em nossa base de dados!');
        window.location.href='usu_sejuc.php';</script>";
        exit();
    } else {
        $sql = "INSERT INTO quest(nome,celular,cpf) VALUES ('$nome','$celular','$cpf')";
        if (mysqli_query($conn, $sql)) {
            echo "<script language='javascript' type='text/javascript'>
            window.location.href='usu_sejuc.php'
            </script>";
        } else {
            echo "<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar o usuário!');
            window.location.href='usu_sejuc.php';</script>";
        }
    }
    mysqli_close($conn);
?>