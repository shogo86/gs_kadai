<?php
//1.  DB接続します
  $pdo = new PDO('mysql:dbname=gs_db;host=localhost','root','root');


//2. DB文字コードを指定（固定）
$stmt = $pdo->query('SET NAMES utf8');

//３．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_an_table2");

//４．SQL実行
$flag = $stmt->execute();



?>


    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>フリーアンケート表示</title>
        <link rel="stylesheet" href="css/range.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            div {
                padding: 10px;
                font-size: 16px;
            }
        </style>
    </head>

    <body id="main">
        <!-- Head[Start] -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">TOPに戻る</a>
                    </div>
            </nav>
        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
        <div>
            <div class="container jumbotron">
            </div>
        </div>
        </div>
        <!-- Main[End] -->
        <table border="1">
            <thead>
                <tr>
                    <th>名前</th>
                    <th>メールアドレス</th>
                    <th>年齢</th>
                    <th>コメント</th>
                    <th>登録日時</th>
                </tr>
            </thead>
            <tbody>
                <?php 
    //5.表示文字列を作成→変数に追記で代入
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo '<tr>';
    echo "<td>{$result['name']}</td>";
    echo "<td>{$result['email']}</td>";
    echo "<td>{$result['age']}</td>";
    echo "<td>{$result['comment']}</td>";
    echo "<td>{$result['indate']}</td>";
    echo '</tr>';
    }
?>
            </tbody>
        </table>
    </body>

    </html>