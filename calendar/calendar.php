
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

<h3>使用html製作表格</h3>
<ul>
	<li>所有程序手動輸入 花時間</li>
	<li>無法機動調整 如時間無法自動更新</li>
</ul>

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
// 透過年份來取得月份時間
$thisFirstday = date("Y-m-1");
// echo $thisFirstday;
// 這個月的第一天(Y-m-1) 顯示年月日
$thisLastDay=date("Y-m-t");
// echo $thisLastDay;
// 月份的天數(t) 知道該月有幾天就知道最後一天是幾號;但t沒有閏年的設定
// echo date("t");
$thisFirstDate = date('w', strtotime($thisFirstday));
// date(w以數字表示星期幾0是日6是六,
// 要注意可能就沒辦法使用>,<來判斷假日 因為6跟0;
// N也是顯示星期幾,排序是1~7(一到日),這兩種寫法只是看使用月曆是日或一放第一位)
// 這個函式是講這個月的第一天在第0個位置(by echo w)也就是星期日
// echo $thisFirstDate;
$thisMonthDays = date("t");
// echo $thisMonthDays; 
// 月份的天數(t) 知道該月有幾天就知道最後一天是幾號;但t沒有閏年的設定
// echo date("t");
$thisLastDay = date("Y-m-$thisMonthDays");
// echo $thisLastDay;
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
// echo $weeks;
// 用日期參數t(該月天數)+日期參數w(星期0~6)來加總總天數後/7然後無條件進位(ceil);
// 很多月份不會是第一週第一天 即使1號在週六也要算一週(所以用w(空白的天數)來補不足天數的週數)

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
	// 因變數i週數範圍會有4~6週變化, 這邊以$weeks取代
	echo "<tr>";
	for ($j = 0; $j < 7; $j++) {
		echo "<td>";
		$tmp = 7 * ($i + 1) - (6 - $j) - $thisFirstDate;
		// 順序：在畫出日期前先判斷是否有<0的日期產生(上個月的)
		// 算式是在計算每格日期格的日期
		// 但假設該月第一天不在星期日(起始日),需剪掉空白天數
		// 因為$thisFirstDate裡面參數w就代表第一天的位置天數=空白天數 以這個變數帶入
		if ($tmp > 0 && $tmp <= $thisMonthDays) {
			// 判斷這段在寫當該月>0(當月1號是1, 上月最後一天為0) &&及(找區間) 該月<=最後一天 就顯示日期; else就不顯示
			// 最後一天用日期參數“t”來判別
			echo $tmp;
		}

		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>

<!--以上寫法需要注意該月前後空白日及該月第一週第一天在哪天  -->
<!-- 以上程式帶出的僅是數字 而不是真正的日期 若要判斷日期是無法 -->


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
// echo $thisFirstDate;
$thisMonthDays = date("t");
// echo $thisMonthDays; 
$thisLastDay = date("Y-m-$thisMonthDays");
// echo $thisLastDay;
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
// echo $weeks;
$firstCell=date("Y-m-d",strtotime("-$thisFirstDate days",strtotime($thisFirstday)));

echo "<table>";
echo "<tr>";
echo "<th>sun</th>";
echo "<th>mon</th>";
echo "<th>tue</th>";
echo "<th>wed</th>";
echo "<th>thu</th>";
echo "<th>fri</th>";
echo "<th>sat</th>";
echo "</tr>";

for($i=0;$i<$weeks;$i++){
	echo "<tr>";
	for($j=0;$j<7;$j++){
		$addDays=7*$i+$j;
		// 計算日期格是第一週開始後的哪一天
		$thisCellDate=strtotime("+$addDays days",strtotime($firstCell));
		// 計算每個日期格的實際日期，基於第一週的第一格的時間
		if(date('w',$thisCellDate)==0 || date('w',$thisCellDate)==6){
			echo "<td style='background: lightcoral'>";
		}else{
			echo "<td>";
		}
		if(date("m",$thisCellDate)==date("m",strtotime($thisFirstday))){
			// 檢查日期格是否在本月範圍內 月份有符合本月則可以顯示
			echo date("j", $thisCellDate);
		}
		echo "</td>";
	}
	echo "</tr>";

}
echo "</table>";



 ?>