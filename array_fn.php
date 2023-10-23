<?php

$array=[3,2,1,7,10,13];


echo in_array(3,$array);
// 如果不加echo 看不出來是否式陣列
// 如果數字有在陣列中echo出來會顯示1 如果沒有 是完全不會顯示

if(in_array(3,$array)) {
echo "數字有在陣列中";
}else{
	echo "數字不在陣列中";
}

// echo "<br>";
// echo "<hr>";

echo "<hr>";
echo "explode & implode";
echo "<br>";


$ss="today is a good day";
$tt=explode(" ",$ss);
echo "<br>";
print_r($tt);

echo "<br>";

$cc=implode("--",$tt);
 echo $cc;

 echo "<hr>";

sort($array);

// 排序前的print
echo "<pre>";
print_r($array);
echo "</pre>";

// 排序後的print
echo "<pre>";
print_r($array);
echo "</pre>";

// reverse
rsort($array);

echo "<pre>";
print_r($array);
echo "</pre>";

?>

