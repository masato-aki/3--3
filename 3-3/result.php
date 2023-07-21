<?php

  //②フォームからのデータを受け取ります
  $my_name = $_POST['my_name'];
  $num = $_POST['num'];

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
  echo date("Y年m月d日 H時i分s秒", time());

echo "<br>";
echo "名前は".$my_name."です";
echo "<br>";



    $r = $num * mt_rand(1, 6);

    echo "番号は".$r."です";
    echo "<br>";
  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
if($r>1 && $r<10){
    echo "凶";
}else if($r>11 && $r<15){
    echo "小吉";
}else if($r>16 && $r<20){
    echo "中吉";
}else if($r>21 && $r<25){
    echo "吉";
}else if($r>26 && $r<36){
    echo "大吉";
}else if($r>37){
    echo "残念だよね";
}
  
?>


  