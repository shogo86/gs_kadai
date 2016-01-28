<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
</head>

<body>
    <br /> ログイン
    <br />
    <br />
    <form method="post" action="login_check.php">
        メールアドレスを入力してください。
        <br />
        <input type="text" name="email" style="width:200px">
        <br /> パスワードを入力してください。
        <br />
        <input type="password" name="pass" style="width:100px">
        <br />
        <br />
        <input type="submit" value="OK">
    </form>
    <br />
    <br /> 新規登録の方はこちら
    <br />
    <br />
    <form method="post" action="login_add_check.php">
        名前を入力してください。
        <br />
        <input type="text" name="name" style="width:200px">
        <br /> 管理者になりたいですか？
        <br />
        <select name="kanri">
            <option value="1">なりたい</option>
            <option value="2">なりたくない</option>
        </select>
        <br /> emailを入力してください。
        <br />
        <input type="email" name="email" style="width:200px">
        <br /> パスワードを入力してください。
        <br />
        <input type="password" name="pass" style="width:100px">
        <br /> パスワードをもう一度入力してください。
        <br />
        <input type="password" name="pass2" style="width:100px">
        <br />
        <input type="submit" value="OK">
    </form>
</body>

</html>