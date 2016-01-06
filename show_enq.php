<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>結果</title>
</head>

<body>
    <table border="1" cellpadding="5" cellspacing="1">
        <?php
        $handle = fopen('data/data.csv','r');
        flock($handle,LOCK_SH);
        $csv = array_map('str_getcsv', file('data/data.csv'));
        mb_convert_variables('UTF-8','SJIS-win',$csv);
        $test = count($csv);
        for($i = 0;$i < $test;$i++){
            $test2 = count($csv[$i]);
            echo '<tr>';
            for($x = 0;$x < $test2;$x++){
                echo '<td>'.$csv[$i][$x].'</td>';
            }
            echo '</tr>';
        }
        flock($handle, LOCK_UN);
        fclose($handle);
        ?>
    </table>
    <button onclick="location.href='index.php'">最初に戻る</button>
</body>

</html>