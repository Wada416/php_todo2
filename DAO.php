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

        function select($sql){
            $dbh = $this->pdo();
            $stmt = $dbh->query($sql);
            $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $items;
        }
        
        function findUser($id,$pass){
            $sql = 'SELECT * FROM user WHERE id=:id AND password=:pass';
            $dbh = $this->pdo();
            $stmt = $dbh->query($sql);
            $stmt->execute(array(':id'=>$id,':ps'=>$pass));
            $data = $stmt->fetch();
            return $data;
        }
        

    }
?>