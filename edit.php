<?php
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
    <form action="">
        作業名称:
        <input tyep="text" name="work_name" value="<?php echo $name; ?>">
        <br/>
        担当者:
        <select name="user_name">
            <option value="" selected><?php echo $user; ?></option>
            <option value="">aaa</option>
            <option value="">bbb</option>
            <option value="">ccc</option>
        </select>
        <br/>
        期限:
        <input type="date" name="deadline" value="<?php echo $deadline; ?>">
        <br/>

        <input type="submit" value="更新">
    </form>
</body>

</html>