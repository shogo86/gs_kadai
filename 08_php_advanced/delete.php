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
    
    //SQLを使ってデータの削除
    $sql='DELETE FROM gs_an_table2 WHERE id=?';
    $stmt=$dbh->prepare($sql);
    $data[]=$id;
    $stmt->execute($data);
    
    //DB接続を切断
    $dbh=null;
    
    ?>
        削除しました
        <br />
        <br />
        <a href="index.php">TOPに戻る</a>
</body>

</html>