<?php
session_start();
?>


<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>エラー</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <h1>エラー</h1>
    <P>エラーが発生しました</P>
    <?php
        echo $_SESSION['msg'];
    ?>
    <form action="">
        <input type="submit" value="戻る"/>
    </form>
  </body>
</html>