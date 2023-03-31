<link rel="stylesheet" href="css/style.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$user_name = $_POST["user_name"];
//①画像を参考に問題文の選択肢の配列を作成してください。
$port_array = ["未選択","80","22","20","21"] ; //問題１ ポート番号
$lang_array = ["未選択","PHP","Python","JAVA","HTML"]; //問題２ webページを作成するための言語
$cmd_array = ["未選択","join","select","insert","update"]; //問題３ MySQLで情報を取得するためのコマンド

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$port_answer = "80"; //$_SERVER['SERVER_PORT']で確認
$lang_answer = "HTML"; //問題２ webページを作成する言語
$cmd_answer = "select"; //問題３ MuSQLで情報を取得するためのコマンド
?>

<!--POST通信で送られてきた名前を出力-->
<p>お疲れ様です<?= $user_name ?>さん</p>

<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <div style="text-align:center;color:white"> 
        <?php foreach($port_array as $value) { ?>
            <input type="radio" name="port_num" value="<?= $value ?>"<?php if ($value == "未選択") { echo "checked"; } ?>/><?= $value; ?>
        <?php } ?>
    </div>

    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <div style="text-align:center;color:white">
        <?php foreach($lang_array as $value) { ?>
            <input type="radio" name="lang_web" value="<?= $value ?>"<?php if ($value == "未選択") { echo "checked"; } ?>/><?= $value; ?>
    <?php } ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <div style="text-align:center;color:white">
        <?php foreach($cmd_array as $value) { ?>
            <input type="radio" name="cmd_MySQL" value="<?= $value ?>"<?php if ($value == "未選択") { echo "checked"; } ?>/><?= $value; ?>
    <?php } ?>

    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <br>
    <input type="hidden" name="user_name" value="<?= $user_name ?>"/>
    <input type="hidden" name="port_answer" value="<?= $port_answer ?>"/>
    <input type="hidden" name="lang_answer" value="<?= $lang_answer ?>"/>
    <input type="hidden" name="cmd_answer" value="<?= $cmd_answer ?>"/>
    <input type="submit" value="回答する">
</form>
