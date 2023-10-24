
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
$time=strtotime("now");
echo "<br>";
echo date("Y-m-d H:i:s",$time);

$date1='2023-10-24';
$date2='2023-11-15';
$days=(strtotime($date2)-strtotime($date1))/(60*60*24);
// 程式在運算乘法時是用連續加法 其實比較消耗晶片運作
// 可以直接寫83000秒比較有效率

echo "<hr>";
echo $date1 .'到' . $date2. "有". $days. "天";

?>

<h2>計算距離自己下一次生日還有幾天</h2>
<?php

$date="1985-01-09";
$br=strtotime($date);
$diff=strtotime(date("Y")."-".date("m-d",$br));
// 這邊是在將自己生日改成今年年/及自己生日時間
//  date(要修改的格式,帶入變數)
$now=strtotime('now');
if($diff>$now){
	$days=($diff-$now)/(60*60*24);
	// 如果今年的生日>現在的時間 設$days 將今年生日-現在時間 看差異時間(還沒到)
}else{
	$diff=strtotime("+1 year", $diff);
	// 注意:這個$diff是另一個變數! 這邊是在計算 當生日已過 計算到明年生日與現在差距幾天
}

echo "距離下一次生日:" .date("Y-m-d", $diff)."還有".floor($days)."天";
// 變數可以覆寫 這邊的$diff 是最近的變數喔!!




?>