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
    <?php
        echo $_SESSION['loginUser']."さんログイン中";
    ?><br/>
    <form method="get" action="regist.php">
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

      <?php foreach($_SESSION['itemList'] as $row){ ?>
      <tr>
        <td>
          <?php echo $row['name'] ?>
        </td>
        <td>
          <?php echo $row['user'] ?>
        </td>
        <td>
          <?php echo $row['deadline'] ?>
        </td>
        <td>
          <?php echo $row['end_date'] ?>
        </td>
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
      <?php } ?>

    </table>
  </body>
</html>