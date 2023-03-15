<?php

//for , if
for($i=1; $i<101; $i++) {
    if ($i%3 == 0 && $i%5 == 0) {
        echo "FIZZBUZZ!!";
    }elseif ($i%3 == 0) {
        echo "FIZZ!";
    }elseif ($i%5 == 0) {
        echo "BUZZ!";
    }else {
        echo $i ;
    }
    echo '<br>';
} 

/*
//while switch
$i = 1 ;
while ($i<101) {
    switch($i) {
        case $i%3==0 && $i%5==0 : echo "FIZZBUZZ!!"; break;
        case $i%3==0 : echo "FIZZ!"; break;
        case $i%5==0 : echo "BUZZ!"; break;
        default : echo $i;
    }
    echo '<br>';
    $i++;
}
*/
?>

<!--
FIZZBUZZ問題
考え方
i=1
ループ(iが100になるまで)
    ループ処理
        iの余りで条件分岐させる
        i%3==0 && i%5==0 fizzbuzz!!を出力
        i%3==0のときfizz!を出力
        i%5==0のときbuzz!を出力
        それ以外のときiに代入されている数字を出力
        iに1を加える。
-->