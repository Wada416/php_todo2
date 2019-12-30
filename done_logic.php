<?php
    require "DAO.php";
    session_start();
    $date = date('Y/m/d');
    $dao = new DAO;
    $dao->doneItem($_POST['id'],$date);
    $itemList = $dao->getItemList();
    $_SESSION['itemList'] = $itemList;
    header('Location: http://localhost/php_todo2/index.php');
?>