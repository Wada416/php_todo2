<?php
    require "DAO.php";
    session_start();
    $dao = new DAO;
    $dao->registItem($_POST);
    $itemList = $dao->getItemList();
    $_SESSION['itemList'] = $itemList;
    header('Location: http://localhost/php_todo2/index.php');
?>