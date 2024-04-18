<?php
$produtos = $_REQUEST['produtos'];
?>;
<!-- productView.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
 <body>
 <table>
 <tr>
    <th>Codigo</th>
    <th>Descrição</th>
    <th>Preço</th>
 </tr>
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?php echo $produto->getCodigo(); ?></td>
            <td><?php echo $produto->getDescricao(); ?></td>
            <td><?php echo $produto->getPreco(); ?></td>
        </tr>
    <?php endforeach; ?>
 </table>
 </body>
</html>