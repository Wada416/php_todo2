<?php
    session_start();
    $item = $_POST['item'];
    $name = $item['name'];
    $user = $item['user'];
    $deadline = $item['deadline'];
?>

<!DOCTYPE html>
    <html lang="ja">
<head>
    <meta charset="utf-8">
    <title>更新</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <h1>更新</h1>
    <form method="post" action="edit_logic.php">
        作業名称:
        <input tyep="text" name="name" value="<?php echo $name; ?>">
        <br/>
        担当者:
        <select name="user">
            <option value="<?php echo $user; ?>" selected><?php echo $user; ?></option>
            <?php foreach($_SESSION['userList'] as $userList){ ?>
                <option value="<?php echo $userList['name']; ?>"><?php echo $userList['name']; ?></option>
            <?php } ?>
        </select>
        <br/>
        期限:
        <input type="date" name="deadline" value="<?php echo $deadline; ?>">
        <br/>
        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
        <input type="submit" value="更新">
    </form>
    
    <form method="get" action="index.php">
            <input type="submit" value="キャンセル">
    </form>
</body>

</html>