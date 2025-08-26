<?php
session_start();

// Inicializa a sessão de pessoa
if (!isset($_SESSION['pessoas'])) {
    $_SESSION['pessoas'] = [];
}

// Variáveis de edição
$id_edicao = null;
$nome_edicao = '';
$email_edicao = '';
$celular_edicao = '';
$cpf_edicao = '';
$cidade_edicao = '';
$steam_edicao = '';
$modo_edicao = false;

// Ação de deletar
if (isset($_POST['acao']) && $_POST['acao'] == 'deletar' && isset($_POST['id'])) {
    $id_para_deletar = $_POST['id'];
    foreach ($_SESSION['pessoas'] as $indice => $pessoa) {
        if ($pessoa['id'] == $id_para_deletar) {
            unset($_SESSION['pessoas'][$indice]);
            header('Location: index.php');
            exit;
        }
    }
}

// Ação de editar
if (isset($_GET['acao']) && $_GET['acao'] == 'editar' && isset($_GET['id'])) {
    $id_para_editar = $_GET['id'];
    foreach ($_SESSION['pessoas'] as $pessoa) {
        if ($pessoa['id'] == $id_para_editar) {
            $id_edicao = $pessoa['id'];
            $nome_edicao = $pessoa['nome'];
            $email_edicao = $pessoa['email'];
            $celular_edicao = $pessoa['celular'];
            $cpf_edicao = $pessoa['cpf'];
            $cidade_edicao = $pessoa['cidade'];
            $steam_edicao = $pessoa['steam'];
            $modo_edicao = true;
            break;
        }
    }
}

// Recebendo dados do formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $celular = $_POST['celular'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $steam = $_POST['steam'] ?? '';

    // Verifica se todos os campos foram preenchidos
    if (!empty($nome) && !empty($email) && !empty($celular) && !empty($cpf) && !empty($cidade) && !empty($steam)) {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            // Atualiza pessoa
            $id_para_atualizar = $_POST['id'];
            foreach ($_SESSION['pessoas'] as $indice => $pessoa) {
                if ($pessoa['id'] == $id_para_atualizar) {
                    $_SESSION['pessoas'][$indice]['nome'] = $nome;
                    $_SESSION['pessoas'][$indice]['email'] = $email;
                    $_SESSION['pessoas'][$indice]['celular'] = $celular;
                    $_SESSION['pessoas'][$indice]['cpf'] = $cpf;
                    $_SESSION['pessoas'][$indice]['cidade'] = $cidade;
                    $_SESSION['pessoas'][$indice]['steam'] = $steam;
                    break;
                }
            }
        } else {
            // Adiciona nova pessoa
            $nova_pessoa = [
                'id' => uniqid(),
                'nome' => $nome,
                'email' => $email,
                'celular' => $celular,
                'cpf' => $cpf,
                'cidade' => $cidade,
                'steam' => $steam,
            ];
            $_SESSION['pessoas'][] = $nova_pessoa;
        }

        // Redireciona para a página de coiso
        header('Location: parabens.php');
        exit;
    }
}
?>

<!-- HTML do bagulho -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Sorteio</title>
    <style>
        body {
            background-color: #1a1a59;
            font-family: "Roboto", sans-serif;
            color: #fff;
        }
        .container {
            margin: 20px auto;
            padding: 20px;
            width: 500px;
            background-color: #8585cc;
            border-radius: 10px;
        }
        label {
            font-size: 18px;
            margin-bottom: 10px;
            display: block;
        }
        input {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sorteio de Skin no CS</h1>
        <h2>Preencha o formulário para participar</h2>
        <form action="index.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id_edicao); ?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo htmlspecialchars($nome_edicao); ?>" required>

            <label for="email">E-mail:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($email_edicao); ?>" required>

            <label for="celular">Celular:</label>
            <input type="text" name="celular" value="<?php echo htmlspecialchars($celular_edicao); ?>" required>

            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" value="<?php echo htmlspecialchars($cidade_edicao); ?>" required>

            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" value="<?php echo htmlspecialchars($cpf_edicao); ?>" required>

            <label for="steam">Steam:</label>
            <input type="text" name="steam" value="<?php echo htmlspecialchars($steam_edicao); ?>" required>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
