<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>アンケート</title>
</head>

<body>
    <?php
    $nickname=$_POST['nickname'];
    $email=$_POST['email'];
    $sex=$_POST['sex'];
    $hobby=$_POST['hobby'];
    
    $nickname=htmlspecialchars($nickname);
    $email=htmlspecialchars($email);
    $goiken=htmlspecialchars($goiken);
    
    print $nickname;
    print '様<br />';
    print'アンケートありがとうございました<br />';
    
    //CSVファイルで書き込み
    $handle = fopen('data/data.csv','a');
    flock($handle,LOCK_EX);
    if(filesize('data/data.csv') === 0){
        $title_array = ['ニックネーム','Email','性別','趣味'];
        mb_convert_variables('SJIS-win','UTF-8',$title_array);
        fputcsv($handle,$title_array);
    }

    $array = [$nickname,$email,$sex,$hobby];
    mb_convert_variables('SJIS-win','UTF-8',$array);
    fputcsv($handle,$array);
    flock($handle,LOCK_UN);
    fclose($handle);
    
    
    ?>
        <div id="wrapper">
            <a href='index.php'>最初に戻る</a>
            <a href='show_enq.php'>アンケート結果を見る</a>
        </div>
</body>

</html>