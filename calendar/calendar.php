
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
echo $thisFirstDate;
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
for ($i = 0; $i < $weeks; $i++) {
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

?>

<h3>程式寫法</h3>

 <?php

echo "<h3>";
echo date("西元Y年m月");
echo "</h3>";
$thisMonth = date("Y");
// echo $thisMonth;
$thisFirstday = date("Y-m-1");
// echo $thisFirstday;
$thisFirstDate = date('w', strtotime($thisFirstday));
echo $thisFirstDate;
$thisMonthDays = date("t");
// echo $thisMonthDays; 
$thisLastDay = date("Y-m-$thisMonthDays");
// echo $thisLastDay;
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
// echo $weeks;
// $firstCell=date()還沒寫完




 ?>