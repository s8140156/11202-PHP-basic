<style>

</style>

<?php

echo "*<br>";
echo "**<br>";
echo "***<br>";
echo "****<br>";
echo "*****<br>";
echo "<hr>";

// $i $j
// 0   1
// 1   2
// 2   3
// 3   4
// 4   5

// 直角三角形

for ($i = 0; $i < 5; $i++) {
	for ($j = 0; $j <= $i; $j++) {
		echo "*";
	}
	echo "<br>";
}

echo "<hr>";
// 倒三角形
// 外圈印星星幾行 所以內圈跑完後才在外圈echo br斷行
for ($i = 4; $i >= 0; $i--) {
	// 內圈是印星星(所以跟上面三角一樣) 所以echo *
	for ($j = 0; $j <= $i; $j++) {
		echo "*";
	}
	echo "<br>";
}

echo "<hr>";
?>

<style>
	* {
		font-family: 'Courier New', Courier, monospace;
		line-height: 10px;
	}
</style>
<?php

// 正三角形
// echo "&nbsp;&nbsp;&nbsp;&nbsp;*";
// echo "<br>";
// echo "&nbsp;&nbsp;&nbsp;***";
// echo "<br>";
// echo "&nbsp;&nbsp;*****";
// echo "<br>";
// echo "&nbsp;*******";
// echo "<br>";
// echo "*********";

for ($i = 0; $i < 5; $i++) {
	for ($j = 0; $j < (4 - $i); $j++) { //印空白 從左邊開始
		echo "&nbsp;";
	}
	for ($k = 0; $k < ($i * 2 + 1); $k++) { //印星星(跑完空白再跑星星)
		echo "*";
	}
	echo "<br>";
}

echo "<hr>";

// 倒正三角形
for ($i = 4; $i >= 0; $i--) {
	for ($j = 0; $j < (4 - $i); $j++) {
		echo "&nbsp;";
	}
	for ($k = 0; $k < ($i * 2 + 1); $k++) {
		echo "*";
	}
	echo "<br>";
}

echo "<hr>";

// 菱形

for ($i = 0; $i < 9; $i++) {
	// 菱形外圈總共要跑九次 印星星九行
	if ($i <= 4) {
		$tmp = $i;
	} else {
		$tmp--;
		// tmp數值最高就是到4當遞減時是從4開始減
	}
	for ($j = 0; $j < (4 - $tmp); $j++) {
		echo "&nbsp;";
	}
	for ($k = 0; $k < ($tmp * 2 + 1); $k++) {
		echo "*";
	}
	echo "<br>";
}

echo "<hr>";

// 矩形

for ($i = 0; $i < 7; $i++) {
	for ($j = 0; $j < 7; $j++) {
		if ($i == 0 || $i == 6) {
			echo "*";
		} else if ($j == 0 || $j == 6) {
			echo "*";
		} else {
			echo "&nbsp;";
		}
	}
	echo "<br>";
}

// 矩形+對角線
for ($i = 0; $i < 7; $i++) {
	for ($j = 0; $j < 7; $j++) {
		if ($i == 0 || $i == 6){
			echo "*";
		}else if($j==$i || $j+$i==6){
			// echo '<font color="red">*</font>';
			echo "<span style='color:red'>*</span>";

		} else if ($j == 0 || $j == 6) {
			echo "*";
		} else {
			echo "&nbsp;";
		}
	}
	echo "<br>";
}

?>