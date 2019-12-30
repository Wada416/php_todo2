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

    <form method="post" action="search_logic.php">
      <input type="text" name="name">
      <input type="submit" value="作業検索">
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
          <form method="post" action="done_logic.php">
            <input type="submit" value="完了">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          </form>
        </td>
        <td>
          <form method="post" action="edit.php">
            <input type="hidden" name="item[id]" value="<?php echo $row['id']; ?>">
            <input type="hidden" name="item[name]" value="<?php echo $row['name']; ?>">
            <input type="hidden" name="item[user]" value="<?php echo $row['user']; ?>">
            <input type="hidden" name="item[deadline]" value="<?php echo $row['deadline']; ?>">
            <input type="submit" value="更新" />
          </form>
        </td>
        <td>
          <form method="post" action="delete.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
            <input type="hidden" name="user" value="<?php echo $row['user']; ?>">
            <input type="hidden" name="deadline" value="<?php echo $row['deadline']; ?>">
            <input type="hidden" name="end_date" value="<?php echo $row['end_date']; ?>">
            <input type="submit" value="削除" />
          </form>
        </td>
      </tr>
      <?php } ?>

    </table>
  </body>
</html>