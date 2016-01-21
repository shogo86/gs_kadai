<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>入力確認ページ</title>
</head>

<body>
    <?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $comment=$_POST['comment'];
    
    $name=htmlspecialchars($name);
    $email=htmlspecialchars($email);
    $age=htmlspecialchars($age);
    $comment=htmlspecialchars($comment);
    

    if($name=='')
    {
        print 'ニックネームが入力されていません。<br />';
        
    }
    else
    {
        print 'ようこそ';
        print $name;
        print '様';
        print '<br />';
        
    }
    
    
    if($email=='')
    {
        print 'メールアドレスが入力されていません<br />';
    }
    else
    {
        print 'メールアドレス:';
        print $email;
        print '<br />';
    }
    
    if($age=='')
    {
        print '年齢が入力されていません<br />';
    }
    else
    {
        print '年齢：';
        print $age;
        print '<br />';
        
    }
    
    if($comment=='')
    {
        print 'コメントが入力されていません<br />';
    }
    else
    {
        print 'コメント：';
        print $comment;
        print '<br />';
        
    }

   
    if($name==''||$email==''||$age==''||$comment=='')
    {
        print '<form>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '</form>';
        
    }
    else
    {
    
    print '<form method="post" action="input_finish.php">';
    print '<input name="name" type="hidden" value="'.$name.'">';
    print '<input name="email" type="hidden" value="'.$email.'">';    
    print '<input name="age" type="hidden" value="'.$age.'">';
    print '<input name="comment" type="hidden" value="'.$comment.'">';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '<input type="submit" value="OK">';
    print '</form>';
    }
    ?>
</body>

</html>