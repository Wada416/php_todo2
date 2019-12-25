<!DOCTYPE html>
    <html lang="ja"">
<head>
    <meta charset="utf-8">
    <title>削除</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <h1>削除</h1>
    次の項目を削除しますか？
    <br/>

    <table border="1">
      <tr>
        <th>作業名称</th>
        <th>担当者</th>
        <th>期限</th>
        <th>終了日</th>
      </tr>
      <tr>
        <td>
          <?php echo $_POST['name'] ?>
        </td>
        <td>
          <?php echo $_POST['user'] ?>
        </td>
        <td>
          <?php echo $_POST['deadline'] ?>
        </td>
        <td>
          <?php echo $_POST['end_date'] ?>
        </td>
      </tr>
    </table>

    <form method="post" action="delete_logic.php">
        <input type="submit" value="削除">
        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
    </form>

    <form method="get" action="index.php">
            <input type="submit" value="キャンセル">
    </form>

</body>

</html>