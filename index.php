<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>作業一覧</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <h1>作業一覧</h1>
    ユーザー名<br/>
    <form action="">
      <input type="submit" value="作業登録">
    </form>
      <input type="text" name="work_name">
      <input type="submit" value="作業検索">
    <form>

    </form>
    
    <table border="1">
      <tr>
        <th>作業名称</th>
        <th>担当者</th>
        <th>期限</th>
        <th>終了日</th>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <form action="">
            <input type="submit" value="完了" />
          </form>
        </td>
        <td>
          <form action="">
            <input type="submit" value="更新" />
          </form>
        </td>
        <td>
          <form action="">
            <input type="submit" value="登録" />
          </form>
        </td>
      </tr>

    </table>
  </body>
</html>