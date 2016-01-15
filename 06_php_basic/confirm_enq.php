<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>入力確認ページ</title>
</head>

<body>
    <?php
    $nickname=$_POST['nickname'];
    $email=$_POST['email'];
    $sex=$_POST['sex'];
    $hobby=$_POST['hobby'];
    
    $nickname=htmlspecialchars($nickname);
    $email=htmlspecialchars($email);
    $sex=htmlspecialchars($sex);
    

    if($nickname=='')
    {
        print'ニックネームが入力されていません。<br />';
        
    }
    else
    {
        print'ようこそ';
        print $nickname;
        print'様';
        print'<br />';
        
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
    
    if($sex=='')
    {
        print '性別が入力されていません<br />';
    }
    else
    {
        print '性別：';
        print $sex;
        print '<br />';
        
    }
    
    if($hobby=='')
    {
        print '趣味が入力されていません<br />';
    }
    else
    {
        print '趣味：';
       for($i=0; $i<sizeof($hobby); $i++){
print "$hobby[$i] ";
        
    }}

   
    if($nickname==''||$email==''||$sex=='')
    {
        print'<form>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';
        
    }
    else
    {
    
    print'<form method="post" action="input_finish.php">';
    print'<input name="nickname" type="hidden" value="'.$nickname.'">';
    print'<input name="email" type="hidden" value="'.$email.'">';    
    print'<input name="sex" type="hidden" value="'.$sex.'">';
    print'<input name="hobby" type="hidden" value="'.$hobby.'">';
    print'<input type="button" onclick="history.back()" value="戻る">';
    print'<input type="submit" value="OK">';
    print'</form>';
    }
    ?>
</body>

</html>