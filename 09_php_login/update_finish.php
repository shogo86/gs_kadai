<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>アンケート</title>
</head>

<body>
    <?php
  //1. POSTデータ取得（）
    $code=$_POST["code"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $age=$_POST["age"];
    $comment=$_POST["comment"];
    
  //2. DB接続します
    $dsn='mysql:dbname=gs_db;host=localhost';
    $user='root';
    $password='root';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');



  //3．SQLを使ってデータの修正
  $sql='UPDATE gs_an_table2 SET name=?,email=?,age=?,comment=? WHERE id=?';
  $stmt=$dbh->prepare($sql);
  $data[]=$name;
  $data[]=$email;
  $data[]=$age;
  $data[]=$comment;
  $data[]=$code;
  $stmt->execute($data);

  //4.DB接続を切断
  $dbh=null;
    
?>
        修正しました
        <br />

        <div id="wrapper">
            <a href='index.php'>最初に戻る</a>
            <a href='select.php'>アンケート結果を見る</a>
        </div>
</body>

</html>