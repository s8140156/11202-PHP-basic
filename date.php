<h1>日期與時間</h1>
<?php

date_default_timezone_set('Asia/Taipei');
// 亞洲/城市
echo date("Y-m-d H:i:s");
// h:i:s 時分秒; 
// 如果只設date會以格林威治時區預設
// 所以前面要先設定時區

echo "<br>";
echo date("Y-m-D H:i:s");

echo "<br>";
echo date("Y-m-l H:i:s");

echo "<br>";
echo date("Y-m-l N H:i:s");

echo "<br>";
echo date("Y-m-l W H:i:s");

?>

<h2>strtotime</h2>

<?php

echo strtotime("now");
$time = strtotime("now");
echo "<br>";
echo date("Y-m-d H:i:s", $time);

$date1 = '2023-10-24';
$date2 = '2023-11-15';
$days = (strtotime($date2) - strtotime($date1)) / (60 * 60 * 24);
// 程式在運算乘法時是用連續加法 其實比較消耗晶片運作
// 可以直接寫83000秒比較有效率

echo "<hr>";
echo $date1 . '到' . $date2 . "有" . $days . "天";

?>

<h2>計算距離自己下一次生日還有幾天</h2>
<?php

$date = "1985-01-09";
$br = strtotime($date);
$diff = strtotime(date("Y") . "-" . date("m-d", $br));
// 這邊是在將自己生日改成今年年/及自己生日時間
//  date(要修改的格式,帶入變數)
$now = strtotime('now');
if ($diff > $now) {
	$days = ($diff - $now) / (60 * 60 * 24);
	// 如果今年的生日>現在的時間 設$days 將今年生日-現在時間 看差異時間(還沒到)
} else {
	$diff = strtotime("+1 year", $diff);
	// 注意:這個$diff是另一個變數! 這邊是在計算 當生日已過 計算到明年生日與現在差距幾天
}

echo "距離下一次生日:" . date("Y-m-d", $diff) . "還有" . floor($days) . "天";
// 變數可以覆寫 這邊的$diff 是最近的變數喔!!




?>

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
	<li>2021/10/05</li>
	<li>10月5日 Tuesday</li>
	<li>2021-10-5 12:9:5</li>
	<li>2021-10-5 12:09:05</li>
	<li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>

<?php

echo date("Y/m/d");
echo "<br>";

echo date("m月d日 l");
echo "<br>";


echo date("今天是西元Y年m月d日");

if (date('N') <= 5) {
	echo "上班日";
} else {
	echo "假日";
}

?>

<h3>利用迴圈來計算連續五個周一的日期</h3>
<ul>
	<li>2021-10-04 星期一</li>
	<li>2021-10-11 星期一</li>
	<li>2021-10-18 星期一</li>
	<li>2021-10-25 星期一</li>
	<li>2021-11-01 星期一</li>
</ul>

<?php
// $date=date("Y-m-d D");

// for($wk=1;$wk<=5;$wk++){
// 	for($date=)
// 	echo $date;
// 	echo "<br>";
// }

$todaywk = date("N");
// 先看本周是星期幾
// echo $todaywk;
$diff = 1 - $todaywk;
// echo $diff;
// 這段是在說明這周幾離星期一差距幾天 所以用1減(如果是以周2就是用2減)
$lastMonday = strtotime("$diff days");
// echo $lastMonday;
// 這是在計算用算是這周周一(起始點)
$nextMonday = date("Y-m-d", strtotime("+1 week", $nextMonday));

// for($i=0;$i<5)還沒寫完



?>

<style>
	* {
		font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	}

	table,
	tr,
	td,
	th {
		border: 3px double;
		/* double其實是三條線 但中間線是白色 看起來像雙線 */
		border-collapse: collapse;
	}

	table {
		width: 50%;
		hight: 50vh;
	}

	td {
		text-align: right;
		height: 20px;
		padding: 5px 10px;
	}
</style>


<table>
	<tr>
		<th>sun</th>
		<th>mon</th>
		<th>tue</th>
		<th>wed</th>
		<th>thu</th>
		<th>fri</th>
		<th>sat</th>
	</tr>
	<tr>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
		<td>6</td>
		<td>7</td>
	</tr>
	<tr>
		<td>8</td>
		<td>9</td>
		<td>10</td>
		<td>11</td>
		<td>12</td>
		<td>13</td>
		<td>14</td>
	</tr>
	<tr>
		<td>15</td>
		<td>16</td>
		<td>17</td>
		<td>18</td>
		<td>19</td>
		<td>20</td>
		<td>21</td>
	</tr>
	<tr>
		<td>22</td>
		<td>23</td>
		<td>24</td>
		<td>25</td>
		<td>26</td>
		<td>27</td>
		<td>28</td>
	</tr>
	<tr>
		<td>29</td>
		<td>30</td>
		<td>31</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;

<?php

echo "<h3>";
echo date("西元Y年m月");
echo "</h3>";
$thisMonth = date("Y");
// echo $thisMonth;
$thisFirstday = date("Y-m-1");
// echo $thisFirstday;
$thisFirstDate = date('w', strtotime($thisFirstday));
$thisMonthDays = date("t");
// echo $thisMonthDays;
$thisLastDay = date("Y-m-$thisMonthDays");
// echo $thisLastDay;
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
// echo $weeks;

echo "<table>";
echo "<tr>";
echo "<th>sun</th>";
echo "<th>mon</th>";
echo "<th>tue</th>";
echo "<th>wed</th>";
echo "<th>thu</th>";
echo "<th>fri</th>";
echo "<th>sat</th>";
echo "	</tr>";
for ($i = 0; $i < 6; $i++) {
	echo "<tr>";
	for ($j = 0; $j < 7; $j++) {
		echo "<td>";
		$tmp = 7 * ($i + 1) - (6 - $j) - $thisFirstDate;
		if ($tmp > 0 && $tmp <= $thisMonthDays) {
			echo $tmp;
		}

		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";




echo "</table>";
