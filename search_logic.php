<?php
    require "DAO.php";
    session_start();
    $dao = new DAO;
    $_SESSION['searchList'] = $dao->searchItem($_POST['name']);
    header('Location: http://localhost/php_todo2/result.php');
?>