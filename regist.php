<?php
    session_start();
?>

<!DOCTYPE html>
    <html lang="ja">
<head>
    <meta charset="utf-8">
    <title>登録</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <h1>登録</h1>
    <form method="post" action="regist_logic.php">
        作業名称:
        <input tyep="text" name="name">
        <br/>
        担当者:
        <select name="user">
            <?php foreach($_SESSION['userList'] as $userList){ ?>
                <option value="<?php echo $userList['name']; ?>"><?php echo $userList['name']; ?></option>
            <?php } ?>
        </select>
        <br/>
        期限:
        <input type="date" name="deadline">
        <br/>
        
        <input type="submit" value="登録">
    </form>
</body>

<form method="get" action="index.php">
            <input type="submit" value="キャンセル">
</form>

</html>