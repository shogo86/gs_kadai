<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>アンケート</title>
</head>

<body>
    <form method="post" action="confirm_enq.php">
        ニックネームを入力してください。
        <br />
        <input name="nickname" type="text" style="width:100px">
        <br /> メールアドレスを入力してください。
        <br />
        <input name="email" type="text" style="width:200px">
        <br /> 性別を選択してください。
        <br />
        <input name="sex" type="radio" value="男性"> 男性
        <input name="sex" type="radio" value="女性"> 女性
        <input name="sex" type="radio" value="モノノフ"> モノノフ
        <br />趣味を教えてください。
        <br />
        <input name="hobby[]" type="checkbox" value="釣り"> 釣り
        <input name="hobby[]" type="checkbox" value="合気道"> 合気道
        <input name="hobby[]" type="checkbox" value="鉄道"> 鉄道
        <br />
        <input type="submit" value="送信">
    </form>

</body>

</html>