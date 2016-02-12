<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>レッスン登録完了</title>
</head>

<body>
    <?php
    session_start();
    session_regenerate_id();
        
    $id=$_SESSION['id'];
    
    //サーバーエラー時の対策
    try
    {
        //データの受け取り
        $request_lesson_id=$_POST['request_lesson_id'];
        $matching=$_POST['matching'];
        
        //DBに接続
        $dsn='mysql:dbname=language_db;host=localhost';
        $user='root';
        $password='root';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->query('SET NAMES utf8');
        
        //SQLを使ってデータの追加
        $sql='UPDATE lesson_request SET matching=? WHERE id=?';
        $stmt=$dbh->prepare($sql);
        $data[]=$matching;
        $data[]=$request_lesson_id;

        $stmt->execute($data);
        
        //DB接続を切断
        $dbh=null;
        
        if($matching=1)
        {
        print 'リクエストを承認しました。 <br />';
        }else{
        print 'リクエストを拒否しました。 <br />';
        }
        
    }
    //サーバーエラー時の対策
    catch(Exception $e)
    {
        
        print 'ただいま障害により大変ご迷惑をお掛けしています。';
        exit();
    }
    ?>
        <a href="lesson_list.php">戻る</a>

</body>

</html>