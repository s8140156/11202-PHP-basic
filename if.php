<?php

$score=75;

// $score=$score+20;

echo "我的成績:" . $score;
echo "<br>";
echo "判斷為:";

if($score>=60){
	echo "及格";
}else{
	echo "不及格";
}



echo "<br>";
if($score>=90 && $score<=100){
	$level="A";
}
if($score>=80 && $score<=89){
	$level="B";
}
if($score>=70 && $score<=79){
	$level="C";
}
if($score>=60 && $score<=69){
	$level="D";
}
if($score>=0 && $score<=59){
	$level="E";
}

// $level="B";
echo "成績等級為:" . $level;
echo "<br>";

switch ($level) {
    case "A":
        echo "表現優良，請繼續保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "是否無心學業?";
}



$name="小吳";

echo "<br>"; 
echo "<br>"; 
echo "姓名填寫:" . $name;
echo "<br>";
echo "確認狀況:";

if($name=="陳彥伶"){
	echo "填寫正確";
}else{
	echo "查無此人";
}
?>