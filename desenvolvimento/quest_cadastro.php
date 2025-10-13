<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $esportes = $_POST['esportes'];
    $musicas = $_POST['musicas'];
    $cursos = $_POST['cursos'];
    $palestras = $_POST['palestras'];
    $workshops = $_POST['workshops'];
    $teatro = $_POST['teatro'];
    $query = $conn->query("SELECT * FROM quest WHERE nome='$nome' AND teatro='$teatro'");
    if (mysqli_num_rows($query) > 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Esse usuário já existe em nossa base de dados!');
        window.location.href='quest.php';</script>";
        exit();
    } else {
        $sql = "INSERT INTO quest(nome,esportes,musicas,cursos,palestras,workshops,teatro) VALUES ('$nome','$esportes','$musicas','$cursos','$palestras','$workshops','$teatro')";
        if (mysqli_query($conn, $sql)) {
            echo "<script language='javascript' type='text/javascript'>
            window.location.href='quest.php'
            </script>";
        } else {
            echo "<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar o usuário!');
            window.location.href='quest.php';</script>";
        }
    }
    mysqli_close($conn);
?>