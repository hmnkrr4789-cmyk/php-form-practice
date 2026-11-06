<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>ユーザー登録 - 入力</title>
</head>
<body>
    <h1>ユーザー登録（1/3）入力</h1>
    <form action="confirm.php" method="post">
        <p>
            <label>お名前：</label>
            <input type="text" name="name" required>
        </p>
        <p>
            <label>メールアドレス:</label>
            <input type="email" name="email" required>
        </p>
        <p>
            <label>年齢:</label>
            <input type="number" name="age" required>
        </p>
        <button type="subnit">確認画面へ</button>
</body>
</html>
