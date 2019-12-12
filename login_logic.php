<?php
    require "DAO.php";
    session_start();
    $dao = new DAO;
    $data = $dao->findUser($_POST['id'],$_POST['pass']);
    //echo $data['name'];
    if ($data == null){
        $_SESSION['msg'] = "ユーザーIDまたはパスワードが正しくありません";
        header('Location: http://localhost/php_todo2/error.php');
    }
?>