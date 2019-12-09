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

        function findUser($id,$pass){
    
            $dbh = $this->pdo();
            $stmt = $dbh->prepare("SELECT * FROM user WHERE id = ? AND pass = ?");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt->bindValue(1,$id);
            $stmt->bindValue(2,$pass);
            $stmt->execute();
            $data = $stmt->fetch();
            return $data;
        }
    }
?>