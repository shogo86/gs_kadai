<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ログインチェック</title>
</head>

<body>
    <?php
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];
    
    $name=htmlspecialchars($name);
    $email=htmlspecialchars($email);
    $pass=htmlspecialchars($pass);
    $pass2=htmlspecialchars($pass2);
    
    if($name=='')
    {
        print '名前が入力されていません。<br />';
    }
    else
    {
        print '名前：';
        print $name;
        print '<br />';
        
    }
    
    
    if($email=='')
    {
        print 'emailが入力されていません。<br />';
    }
    else
    {
        print 'email：';
        print $email;
        print '<br />';
        
    }
    
    if($pass=='')
    {
        print 'パスワードが入力されていません。<br />';
    }
    
    if($pass!=$pass2)
    {
        print 'パスワードが一致しません。<br />';
    }
    
    if($name==''||$email==''||$pass==''||$pass!=$pass2)
    {
        print '<form>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '</form>';
    }
    else
    {
        $pass=md5($pass);
        print '<form method="post" action="login_add_done.php">';
        print '<input type="hidden" name="name" value="'.$name.'">';
        print '<input type="hidden" name="email" value="'.$email.'">';
        print '<input type="hidden" name="pass" value="'.$pass.'">';
        print '<br />';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '<input type="submit" value="OK">';
        print '</form>';
    }
    
    ?>


</body>

</html>