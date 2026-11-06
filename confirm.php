<?php
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録 - 確認</title>
</head>
<body>
    <h1>ユーザー登録 (2/3) 確認</h1>
    <p>
        以下の内容で登録します。よろしいですか？
    </p>
    <table broder="1">
    <tr>
        <td class="border px-4 py-2 text-left">お名前</td>
        <td class="border px-4 py-2 text-left"><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8');?></td>
    </tr>
    <tr>
        <td class="border px-4 py-2 text-left">メールアドレス</td>
        <td class="border px-4 py-2 text-left"><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');?></td>
    </tr>
    <tr>
        <td class="border px-4 py-2 text-left">年齢</td>
        <td class="border px-4 py-2 text-left"><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8');?></td>
    </tr>
    <form action="complete.php" method="post">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name ?? '', ENT_QUOTES, 'UTF-8');?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
    <p>
        <button type="button" onclick="histor.back()">戻る</button>
        <button type="submit">登録する</button>
    </p>
    </form>

</body>
</html>