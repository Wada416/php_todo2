<?php
    require "DAO.php";
    session_start();
    $dao = new DAO;
    $data = $dao->findUser($_POST['id'],$_POST['pass']);

    if ($data != null){
        header('Location: http://localhost/php_todo2/index.php');
    }else{
        $_SESSION['msg'] = "ユーザーIDまたはパスワードが正しくありません";
        header('Location: http://localhost/php_todo2/error.php');
    }
?>