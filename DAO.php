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

        function updateItem($item){
            $dbh = $this->pdo();
            $stmt = $dbh->prepare("UPDATE item SET name = :name, user = :user, deadline = :deadline WHERE id = :id;");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt->bindParam(':id', $item['id'], PDO::PARAM_INT);
            $stmt->bindParam(':name', $item['name'], PDO::PARAM_STR);
            $stmt->bindParam(':user', $item['user'], PDO::PARAM_STR);
            $stmt->bindParam(':deadline', $item['deadline'], PDO::PARAM_STR);
            $stmt->execute();
        }

        function deleteItem($id){
            $dbh = $this->pdo();
            $stmt = $dbh->prepare("DELETE FROM item WHERE id = :id;");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        }

        function searchItem($name){
            $dbh = $this->pdo();
            $stmt = $dbh->prepare("SELECT * FROM item WHERE name = :name;");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        }

        function doneItem($id,$end_date){
            $dbh = $this->pdo();
            $stmt = $dbh->prepare("UPDATE item SET end_date = :end_date WHERE id = :id;");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':end_date', $end_date, PDO::PARAM_STR);
            $stmt->execute();
        }

    }
?>