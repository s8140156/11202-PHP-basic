<h2>九九乘法表</h2>
<?php

for ($i = 1; $i <= 9; $i++) {
	echo '1 * ' . $i . ' = ' . (1 * $i);
	echo "<br>";
}
echo "<br>";
for ($i = 1; $i <= 9; $i++) {
	echo '2 * ' . $i . ' = ' . (2 * $i);
	echo "<br>";
}
echo "<br>";
for ($i = 1; $i <= 9; $i++) {
	echo '3 * ' . $i . ' = ' . (3 * $i);
	echo "<br>";
}
echo "<br>";
for ($i = 1; $i <= 9; $i++) {
	echo '4 * ' . $i . ' = ' . (4 * $i);
	echo "<br>";
}
echo "<br>";
for ($i = 1; $i <= 9; $i++) {
	echo '5 * ' . $i . ' = ' . (5 * $i);
	echo "<br>";
}
echo "<br>";
for ($i = 1; $i <= 9; $i++) {
	echo '6 * ' . $i . ' = ' . (6 * $i);
	echo "<br>";
}
?>

<hr>

<?php
// 使用巢狀迴圈
// 以原先的1*$i 來思考 把1變成變數$j取代

for ($j = 1; $j <= 9; $j++) {
	for ($i = 1; $i <= 9; $i++) {
		// 內圈會先跑1*1~1*9跑完後才會繼續2*1~
		echo $j . ' * ' . $i . ' = ' . ($j * $i) . '&nbsp&nbsp';
		// echo "<br>";
	}
}
?>

<style>
table,tr,td{
	border: 1px solid black;
}

td{
	padding: 3px 9px;
}
</style>

<!-- 以下老師作法 -->
<h2>九九乘法表</h2>
<?php
echo "<table>";
for ($j = 1; $j <= 9; $j++) {
	echo "<tr>";
	for ($i = 1; $i <= 9; $i++) {
		echo "<td>";
		echo $j . ' * ' . $i . ' = ' . ($j * $i) ;
		echo "</td>";
	}
}
echo "</table>"
?>

<br><hr><br>


	<!--以下是chatGPT範例 只show表頭及乘積結果  -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>chatGPT範例</h1>
<table border="1">
		<tr>
			<th>乘數</th>
			<?php
			for ($i = 1; $i <= 9; $i++) {
				echo "<th>$i</th>";
			}
			?>
		</tr>
		<?php
		for ($j = 1; $j <= 9; $j++) {
			echo "<tr>";
			echo "<th>$j</th>";
			for ($i = 1; $i <= 9; $i++) {
				echo "<td>" . $j * $i . "</td>";
			}
			echo "</th>";
		}
		?>
	</table>
</body>

</html>

<h2>九九乘法表-有標頭</h2>
<?php

echo "<table>";
echo "<tr>";
for($j=0;$j<10;$j++){
    if($j==0){
        echo "<tr style='background:#eee'>";
    }else{
        echo "<tr>";
    }
    for ($i=0;$i<10;$i++){
        if($i==0){
            echo "<td style='background:#eee'>";
        }else{
            echo "<td>";
        }
        if($i==0 && $j==0){
            echo "";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else{
            echo $j*$i;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>九九乘法表-有標頭-不顯示重複只顯示左下角</h2>
<?php

echo "<table>";
echo "<tr>";
for($j=0;$j<10;$j++){
    if($j==0){
        echo "<tr style='background:#eee'>";
    }else{
        echo "<tr>";
    }
    for ($i=0;$i<10;$i++){
        if($i==0){
            echo "<td style='background:#eee'>";
        }else{
            echo "<td>";
        }
        if($i==0 && $j==0){
            echo "";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
			// 要先讓標題列跑完才做上下顯示判斷 不然標題列會不見
        }else if($j<$i){
			echo "";
		}else{
            echo $j*$i;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>