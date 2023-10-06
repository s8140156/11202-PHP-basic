<?php

// for(起始值(不一定要從0到1開始 像計數器 ex.$開始=0 $i=0);條件式;增減值){
// 	程式碼
// }

$sum = 0;
for ($i = 1; $i <= 100; $i = $i + 1) {
	// $sum = $sum + $i;
	echo '當$i='.$i."時";
    echo '$sum+$i的結果是';
    echo $sum . " + ". $i."=";
    echo $sum+$i;
    echo "<br>";
    $sum += $i;
}
echo "1加到100為" . $sum;

?>

<h1>迴圈練習</h1>
<h3>使用for迴圈來產生以下的數列</h3>
<ul>
	<li>1,3,5,7,9,...n</li>
	<li>10,20,30,40,50,60……n</li>
	<li>3,5,7,11,13,17……97</li>
</ul>

<?php

$n = 100;

for ($i = 1; $i <= $n; $i = $i + 2) {
	echo $i;
	echo ",";
}

echo "<hr>";
for($i=1;$i<=$n;$i++){
    echo $i*10;
    echo ",";
}

echo "<hr>";

$a = 83;

$flag = true;
for ($i = 2; $i < ($a / 2); $i++) {
	echo "$a 除以 $i 餘數" . ($a % $i);
	if ($a % $i == 0) {
		$flag = false;
		echo "<br>";
		break;
	}
	echo "<br>";
}

if ($flag == true) {
	echo $a . "是質數";
} else {
	echo $a . "不是質數";
}

?>

<h3>巢狀迴圈</h3>
<?php
$n = 100;
$count = 0;
for ($j = 3; $j <= $n; $j++) {
	$flag = true;
	// 原先程式$i<($a/2)這樣造成4沒有跑到(因為i從2開始 4/2=2會沒有算到)
	for ($i = 2; $i <= ($j / 2); $i++) {
		$count++;
		// echo "$a 除以 $i 餘數" . ($j % $i);
		if ($j % $i == 0) {
			$flag = false;
			// echo "<br>";
			break;
		}
		// echo "<br>";
	}

	if ($flag == true) {
		echo $j;
		echo ",";
	} else {
		// echo $a . "不是質數";
	}
}
echo "<br>";
echo "一共執行了" . $count . "次的程式內容";
?>

<h3>陣列</h3>

<?php
$a=['甲','乙','丙','丁'];

for($i=0;$i<count($a);$i++){
	echo $a[$i];
}

echo "<br>";

foreach($a as $b){
	echo $b;
	echo "<br>";
}

foreach($a as $idx => $b){
	echo $idx ."=>" .$b;
	echo "<br>";
}

?>