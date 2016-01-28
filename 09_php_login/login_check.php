<?php

try
    
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $email=htmlspecialchars($email);
    $pass=htmlspecialchars($pass);
    
    $pass=md5($pass);
    
    
    //DBに接続
    $dsn='mysql:dbname=gs_db;host=localhost';
    $user='root';
    $password='root';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');
    
    //SQLでデータの取得
    $sql='SELECT * FROM gs_login WHERE email=:email AND password=:password';
    $stmt=$dbh->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $pass);
    $stmt->execute();
    
    //DB接続を切断
    $dbh=null;
    
    //$stmtから一行レコードを取り出し
    $rec=$stmt->fetch(PDO::FETCH_ASSOC);
    
    if($rec==false)
    {
        print $rec;
        print 'メールアドレスかパスワードが間違っています。<br />';
        print '<a href="login_top.php">戻る</a>';
        
    }
    else
    {
        session_start();
        $_SESSION['login']=1;
        $_SESSION['email']=$email;
        $_SESSION['name']=$rec['name'];
        header('Location:index.php');
        
    }
    
}
catch(Exception $e)
{
    print 'ただいま障害により大変ご迷惑をお掛けしています';
    exit();
     
    
}
?>