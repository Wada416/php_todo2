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

        function getUserList(){
            $dbh = $this->pdo();
            $stmt = $dbh->prepare("SELECT id ,name FROM user");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        }

        function getItemList(){
            $dbh = $this->pdo();
            $stmt = $dbh->prepare("SELECT * FROM item");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        }

        function registItem($item){
            $dbh = $this->pdo();
            $stmt = $dbh->prepare("INSERT INTO item (name, user, deadline) VALUES (:name, :user, :deadline)");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt->bindParam(':name', $item['name'], PDO::PARAM_STR);
            $stmt->bindParam(':user', $item['user'], PDO::PARAM_STR);
            $stmt->bindParam(':deadline', $item['deadline'], PDO::PARAM_STR);
            $stmt->execute();
        }
    }
?>