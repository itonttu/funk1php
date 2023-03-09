<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>continue</title>
</head>
<body>
    <?php
    function kakenum($dat1,$dat2){
        $yyy=$dat1*$dat2;
        return($yyy);
    }
    $ans=kakenum(3,7);
    echo'結果は',$ans,'です。';
    ?>
</body>
</html>