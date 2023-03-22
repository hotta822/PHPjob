<?php
    $testFile = "test.txt";
    // "\n" 改行
    $contents_w = "こんにちは。\n";
    $contents_a = "今日はいい天気ですね。\n";

    if(is_writable($testFile)){
        //書き込み可能なときの処理

        //最初は書き込み可能か確認のためにechoで表示させる
        // echo "writable";

        //fopen 対象のファイルを開く
        $fp = fopen($testFile,"w");
        
        //対象のファイルに書き込む
        //"w"は完全上書き。
        //"a"は追記。
        fwrite($fp,$contents_w);
        fwrite($fp,$contents_a);

        //ファイルを閉じる
        fclose($fp);
        
        //書き込みをした旨の表示
        echo "finish writing!!";
        echo '<br>';
    }else{
        //書き込み不可のときの処理
        echo " not writable";
        exit;
    }
    
    //ファイルの読み込み
    $test_file = "test2.txt";

    if(is_readable($test_file)){
        // 読み込み可能なときの処理
        
        // fopen 対象のファイルを開く
        // "r" ファイルの読み込みだけを行う。
        $fp = fopen($test_file, "r");

        // 開いたファイルから1行ずつ読み込む
        while ($line = fgets($fp)) {
            // 改行コード込みで1行ずつ出力
            echo $line.'<br>';
        }
        }else {
            // 読み込み不可のときの処理
            echo "not readable!";
            exit;
        }    
?>