<link rel="stylesheet" href="css/style.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$user_name = $_POST["user_name"];   //名前
$port_num = $_POST["port_num"];     //入力された①の回答
$port_answer = $_POST["port_answer"];   //①の答え
$lang_web = $_POST["lang_web"];     //入力された②の回答
$lang_answer = $_POST["lang_answer"];   //②の答え
$cmd_MySQL = $_POST["cmd_MySQL"];   //入力された③の回答
$cmd_answer = $_POST["cmd_answer"];     //③の答え

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function judgment($selection,$answer){
    if($selection==$answer){
        echo "正解！";
    }else{
        echo "残念・・・";
    }
}
?>
<p><!--POST通信で送られてきた名前を表示--><?= $user_name ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php judgment($port_num,$port_answer);?></p>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php judgment($lang_web,$lang_answer);?></p>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php judgment($cmd_MySQL,$cmd_answer);?></p>