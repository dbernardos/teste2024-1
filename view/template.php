<html>
    <head>
        <meta charset="utf-8" />
        <title>Gerenciador de Produtos</title>
        <link rel="stylesheet" href="assets/produtos.css" type="text/css" />
    </head>
    <body>
        <div id="bloco_principal">
            <h1>Gerenciador de Produtos</h1>

            <?php include('formulario.php'); ?>

            <?php //if ($exibir_tabela) : ?>
                <?php include('tabela.php'); ?>
            <?php //endif; ?>
        </div>
    </body>
</html>
