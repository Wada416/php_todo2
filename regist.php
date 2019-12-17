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
            <option value="aaa">aaa</option>
            <option value="aaa">bbb</option>
            <option value="aaa">ccc</option>
        </select>
        <br/>
        期限:
        <input type="text" name="deadline">
        <br/>

        <input type="submit" value="登録">
    </form>
</body>

</html>