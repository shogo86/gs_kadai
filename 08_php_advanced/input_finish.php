<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>アンケート</title>
</head>

<body>
    <?php
  //1. POSTデータ取得（）
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $comment = $_POST["comment"];


  //2. DB接続します
  $pdo = new PDO('mysql:dbname=gs_db;host=localhost','root','root');



  //2. DB文字コードを指定(固定)
  $stmt = $pdo->query('SET NAMES utf8');



  //３．データ登録SQL作成(セキュリティ保護の問題でbindvalueを使う)
  $stmt = $pdo->prepare("INSERT INTO gs_an_table2(id,name,email,age,comment,indate)VALUES(NULL, :a1, :a2, :a3, :a4,sysdate())");
  $stmt->bindValue(':a1', $name);
  $stmt->bindValue(':a2', $email);
  $stmt->bindValue(':a3', $age);
  $stmt->bindValue(':a4', $comment);
  $status = $stmt->execute();


  //４．データ登録処理後
  if($status==false){
    //Errorの場合$status=falseとなり、エラー表示
    echo "SQLエラー";
    exit;
  }else{
    print $name;
    print '様 ご意見ありがとうございました。<br />';
    print '<br />';
  }
?>

        <div id="wrapper">
            <a href='index.php'>最初に戻る</a>
            <a href='select.php'>アンケート結果を見る</a>
        </div>
</body>

</html>