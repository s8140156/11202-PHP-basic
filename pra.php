<h1>閏年判斷，給定一個西元年份，判斷是否為閏年</h1>

<?php
$year=2100;
echo "年份:" .$year;
echo "<hr>";

// 以下巢狀格式
// 條件設定若能被4整除且被100整除(沒有餘數)則是閏年
// 設定條件要將基準一致 例如以閏年為主設定
if($year%4==0 && $year%100!=0){
	echo $year."是閏年";
}else{
	echo $year."是平年";
}

if($year%4==0){
	// 4的倍數
	// 8,24,104,200,400,300,
	if($year%100!=0){
	// 4的倍數
	// 8,24,104,200,400,300,
		echo $year."是閏年";
}else{
	echo $year."是平年";
}
}


?>