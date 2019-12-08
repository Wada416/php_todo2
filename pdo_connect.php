<?php
    $dsn = 'mysql:dbname=todo;host=127.0.0.1';
    $user = 'homestead';
    $password = 'secret';
    try {
        $dbh = new PDO($dsn, $user, $password);
        echo "接続成功\n";
    } catch (PDOException $e) {
        echo "接続失敗: " . $e->getMessage() . "\n";
        exit();
    }
?>
