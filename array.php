<?php

// 宣告陣列方式(以下兩種)
// $a=array();
// $a=[];

// 空[]索引 會依0 1 2 3順序 第一個數字是0
$a=[];
$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';

// print_r($a);

echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[0];
echo $a[3];
echo "<hr>";

// 指定鍵值
$b=[];
$b['姓名']='陳彥伶';
$b['最高學歷']='銘傳大學';
$b['TEL']='12-345678';
$b['星座']='摩羯座';

echo "<pre>";
print_r($b);
echo "</pre>";

echo $b['姓名'];
echo $b['星座'];
echo "<hr>";

// 多維陣列
// 二維陣列
$c=[];
$c['name']='陳彥伶';
$c['興趣']=['唱歌','逛街','睡覺'];

echo "<pre>";
print_r($c);
echo "</pre>";

// 取用多維陣列的方式
echo $c['name'];
echo $c['興趣'][1];
echo $c['興趣'][0];


?>