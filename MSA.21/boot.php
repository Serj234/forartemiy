<?php
// Инициализируем сессию
session_start();
function pdo(): PDO
{
    static $pdo;
    if (!$pdo) {
        $config = include('bd_config.php');
        $dsn = 'mysql:dbname='.$config['db_name'].';host='.$config['db_host'];
        $pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
       // $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
       // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $pdo;
}
?>