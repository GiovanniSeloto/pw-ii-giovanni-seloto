<?php

    include("conexao.php");

    $produto = $_POST['txProduto'];
    $valor = $_POST['txValor'];
    $descricao = $_POST['txDescricao'];

    //echo "$nome $email $assunto $mensagem";

    $stmt = $conn->prepare("insert into tbproduto values(
        null,
        '$produto',
        '$valor',
        '$descricao'
    )
    ");

    $stmt->execute(); 

    header('location:listarprodutos.php');
?>

<?php

    include("conexao.php");

    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $assunto = $_POST['txAssunto'];
    $mensagem = $_POST['txMensagem'];

    //echo "$nome $email $assunto $mensagem";

    $stmt = $conn->prepare("insert into tbContato values(
        null,
        '$nome',
        '$email',
        '$assunto',
        '$mensagem'
        )
    ");

    $stmt->execute(); 

    header('location:contato.php');
?>