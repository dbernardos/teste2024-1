<?php

if(isset($_REQUEST['produtos'])){
    $produtos = $_REQUEST['produtos'];
} else {
    echo "O array de produtos não foi recuperado";
}

?>

<!DOCTIPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Detalhes do Produto</title>
    </head>

    <body>
        <table>
            <tr>
                <th>Codigo</th>
                <th>Descricao</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>
            <?php foreach($produtos as $produto): ?>
                <tr><?php echo $produto->getCodigo(); ?></tr>
                <tr><?php echo $produto->getDescricao(); ?></tr>
                <tr><?php echo $produto->getQuantidade(); ?></tr>
                <tr><?php echo $produto->getValor(); ?></tr>
                <?php endforeach; ?>
        </table>
    </body>
</html>