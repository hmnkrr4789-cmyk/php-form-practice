<?php
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>ユーザー登録 - 完了</title>
</head>
<body>
    <h1>ユーザー登録 （3/3）完了</h1>
    <p>
        <strong><?php echo htmlspecialchars($name ?? '', ENT_QUOTES, 'UTF-8');?></strong>さん、登録が完了しました！
    </p>
    <p>
        確認メールを<strong><?php echo htmlspecialchars($email ?? '', ENT_QUOTES, 'UTF-8');?></strong>に送信しました。
    </p>
    <p>
        <a href="input.php">最初に戻る</a>
    </p>
</body>
</html>