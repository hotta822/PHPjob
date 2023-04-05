//問１
let numbers = [2,5,12,13,15,18,22];
//ここに答えを実装してください。↓↓↓
function isEven(num){
    for(let i = 0; i < num.length;i++){
        if(num[i] % 2 === 0){
            console.log(num[i]+'は偶数です');
        }
    }
}
isEven(numbers);
/*
問１の考え方
for文を使って配列の中身をチェックする。
if文を使い偶数のときだけ出力する。
*/

//問２
class car{ //クラスの作成
    constructor(gass,Number){
        this.gass = gass;
        this.Number = Number;
    }
    getNumGas(){ //関数(メソッド)の作成
        console.log(`ガソリンは${this.gass}です。ナンバーは${this.Number}です。`)
    }
}
let my_car = new car(21.5,1534); //インスタンス化
my_car.getNumGas();
