<?php


$subject = ['國文', '英文', '數學', '地理', '歷史',];
$judy = [95, 64, 70, 90, 84];
$amo = [95, 64, 70, 90, 84];
$john = [95, 64, 70, 90, 84];

// 算平均成績: 國文
$avg = ($judy[0] + $amo[0] + $john[0]) / 3;

echo $avg;
?>

<h2>利用程式來產生陣列</h2>

<style>
	table,
	tr,
	td {
		border: 1px solid black;
		/* border-collapse: collapse; */
	}
</style>
<?php

$nine = [];

for ($j = 1; $j <= 9; $j++) {
	for ($i = 1; $i <= 9; $i++) {
		$nine[] = "$j * $i =" . ($j * $i);
	}
}

print_r($nine);

foreach ($nine as $idx => $value) {
	echo $value;
	if ($idx % 9 == 8) {
		echo "<br>";
	}
}

// foreach ($variable as $key => $value) {
// 	# code...
// }

echo "<table>";
foreach ($nine as $idx => $value) {
	echo "<td>";
	echo $value;
	echo "</td>";
	if ($idx % 9 == 8) {
		echo "<tr>";
		echo "<br>";
		echo "</tr>";
	}
}
echo "</table>";

// 老師的作法
echo "<table>";
foreach ($nine as $idx => $value) {
	// echo $value;
	if ($idx % 9 == 0) {
		echo "<tr>
		<td>$value</td>";
	} else if ($idx % 9 == 8) {
		echo "<td>$value</td>
			</tr>";
	} else {
		echo "<td>$value</td>";
	}
}
echo "</table>";
echo "<br>";

?>

<?php

echo rand(1, 100);

$a = [$rand, $rand];
print_r($a);



?>