<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>アンケート</title>
</head>

<body>
    <?php
    $id=$_GET['id'];
    
    //DBに接続
    $dsn='mysql:dbname=gs_db;host=localhost';
    $user='root';
    $password='root';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');
    
    //SQLを使ってデータの取得
    $sql='SELECT id,name,email,age,comment FROM gs_an_table2 WHERE id=?';
    $stmt=$dbh->prepare($sql);
    $data[]=$id;
    $stmt->execute($data);
    
    //$stmtから一行レコードを取り出し
    $rec=$stmt->fetch(PDO::FETCH_ASSOC);
    $code=$rec['id'];
    $name=$rec['name'];
    $email=$rec['email'];
    $age=$rec['age'];
    $comment=$rec['comment'];
    
    //DB接続を切断
    $dbh=null;
    
    ?>
        情報の更新
        <br />
        <br />
        <form method="post" action="update_finish.php">
            <input type="hidden" name="code" value="<?php print $code; ?>"> ニックネームを入力してください。
            <br />
            <input type="text" name="name" style="width:200px" value="<?php print $name;?>">
            <br /> メールアドレスを入力してください。
            <br />
            <input name="email" type="text" style="width:200px" value="<?php print $email; ?>">
            <br /> 年齢を教えてください。
            <br />
            <input name="age" type="text" style="width:50px" value="<?php print $age; ?>">
            <br />コメント
            <br />
            <input name="comment" type="text" style="width:200px" value="<?php print $comment; ?>">
            <br />
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" name="update" value="更新">
        </form>

</body>

</html>