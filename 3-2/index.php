<?php
//step1 フルーツと単価の連想配列
$fruits = ["りんご"=> 150 , "みかん"=> 50 , "もも"=> 300];

$FruitsQuantity = [2,3,10];   //フルーツの個数の配列 [りんご , みかん , もも]

//step2 フルーツの価格を計算する関数の定義
function FruitsSubtotal($quantity , $price){
    $subtotal = $quantity * $price ;
    return $subtotal;
}
//step3 繰り返しを使用してそれぞれのフルーツを書き出す。
$i = 0;
foreach ($fruits as $key => $value){
    echo $key."は".FruitsSubtotal($FruitsQuantity[$i] , $value)."円です";
    echo '<br>';
    $i++;
}
?>