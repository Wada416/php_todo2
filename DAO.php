<?php
    class DAO {
        const dsn = 'mysql:dbname=todo;host=127.0.0.1';
        const user = 'homestead';
        const password = 'secret';

        function pdo(){
            $dsn = self::dsn;
            $user = self::user;
            $password = self::password;

            try {
                $pdo = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                echo "接続失敗: " . $e->getMessage() . "\n";
                exit();
            }
            return $pdo;
        }


    }
?>