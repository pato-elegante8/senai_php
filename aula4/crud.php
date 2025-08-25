<?php
session_start ();
if (!isset($_SESSION['pessoas'])) {
    $_SESSION['pessoas'] = [];
}
if (empty($_SESSION['pessoas'])) {
    $dados = json_decode(file_get_contents("pessoas.json"), true);
    $_SESSION['pessoas'] = $dados;
}

//

$id_edicao = null;
$nome_edicao = '';
$idade_edicao = '';
$telefone_edicao = '';
$email_edicao = '';
$senha_edicao = '';
$cpf_edicao = '';
$modo_edicao = false;

// fazer de um jeito diferente depois
if (isset($_GET['acao']) && $_GET['acao'] == 'deletar' && isset($_GET['id'])) {
    foreach ($_SESSION['pessoas'] as $indice => $pessoa) {
        if ($pessoa['id'] == $id_para_deletar) {
            unset($_SESSION['pessoas'][$indice]);
            break;
        }
    }
    header('Location: aula4');
    exit;
}
// fazer de um jeito diferente depois

if (isset($_GET['acao']) && $_GET['acao'] == 'editar' && isset($_GET['id'])) {
    $id_para_editar = $_GET['id'];
    foreach ($_SESSION['pessoas'] as $pessoa) {       
if ($pessoa['id'] == $id_para_deletar) {
    unset($_SESSION['pessoas'][$indice]);
    break;
}
}
}
header('Location: aula4');
exit
    // fazer de um jeito diferente depois
  
  
  
  
  
  
?>