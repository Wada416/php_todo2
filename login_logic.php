<?php
    require "DAO.php";
    session_start();
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    $dao = new DAO;
    $data = $dao->findUser($id,$pass);
    //echo $data['name'];
    if ($data == null){
        $_SESSION['msg'] = "ユーザーIDまたはパスワードが正しくありません";
        header('Location: http://localhost/php_todo2/error.php');
    }
?>