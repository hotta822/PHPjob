<?php
//おみくじを引く関数
function omikuji($number){
    switch($number){
        case (0) : echo "凶"; break;
        case (1<=$number && $number<=3) : echo "小吉"; break;
        case (4<=$number && $number<=6) : echo "中吉"; break;
        case (7<=$number && $number<=8) : echo "吉"  ; break;
        case (9) : echo "大吉"; break;
        default :echo "error";
    }
}
    //フォームの受け取り
    $number = $_POST["number"];
    
    //数字を半角に変換する。
    $number = mb_convert_kana($number,"n");

    //入力された文字に0~9以外の文字が含まれているかの確認
    if(ctype_digit($number)){
        //0~9の数字が入力されたときの処理
        //乱数を使用して選ばれる数字の順番を決める。
        $order = mt_rand(0,strlen($number)-1);
        
        //タイムスタンプを使って日時を表示する。
        printf("%sの運勢は<br>選ばれた数字は%d<br>",date("Y/m/d", time()),$number[$order]);
        //選ばれた順番を引数にしておみくじの関数を呼び出す。
        echo omikuji($number[$order]);
       

    }else{
        //0~9以外の文字が入力されたときの処理
        echo "0~9の好きな数字の羅列を入力してください。";    
    }
    echo '<br>';
    //index.phpに戻る
    echo "<a href=","index.php",">もう一度占う</a>";
?>