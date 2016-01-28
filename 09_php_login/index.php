<?php

session_start();
session_regenerate_id();
if(isset($_SESSION['login'])==false)
{
    print 'ログインされていません。　<br />';
    print '<a href="login_top.php">ログイン画面へ</a>';
    exit();
}
else
{
    print 'ようこそ';
    print $_SESSION['name'];
    print '様';
    
}

?>



    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Topページ</title>
    </head>

    <body>
        <div id="wrapper">
            <h1>アンケート</h1>
            <a href="input_enq.php">アンケートに答える</a>
            <a href="select.php">アンケートの結果を見る</a>
            </ul>
        </div>
    </body>

    </html>