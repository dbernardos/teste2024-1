<?php

// Acesso ao banco de dados
define("BD_USUARIO", "root");
define("BD_SENHA", "");
define("BD_DSN", "mysql:dbname=aps20241;host=localhost");


try {
    $pdo = new PDO(BD_DSN, BD_USUARIO, BD_SENHA);
} catch (PDOException $e) {
    echo "Falha na conexão com o banco de dados: "
        . $e->getMessage();
    die();
}

function tem_post()
{
    if (count($_POST) > 0) {
        return true;
    }

    return false;
}