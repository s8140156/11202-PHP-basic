<h2>字串取代</h2>
將”aaddw1123”改成”*********”

<?php

$s = "aaddw1123addw1123addw1123";

$t = str_replace('a', '*', $s);
// a是要改的字元, 改成*, 你要變的變數
echo $t;
echo "<br>";
echo str_repeat("*", mb_strlen($s));

?>


<h2>字串分割</h2>
將”this,is,a,book”依”,”切割後成為陣列

<?php

$s = "this, is, a, book";
$a = explode(',', $s);

echo "<pre>";
print_r($a);
echo "</pre>";


// <!-- <h2>字串組合</h2>
// 將上例陣列重新組合成“this is a book” -->


$b = join(' ', $a);

echo "<pre>";
print_r($b);
echo "</pre>";

?>

<h2>子字串取用</h2>
<h3>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h3>
<?php

$s = "The reason why a great man is great is that he resolves to be a great man";

echo mb_substr($s, 0, 10);
// 從哪個變數取, 從第幾個位置開始, 取的長度
echo "...";
echo "<br>";

$cs = "今天天氣似乎真的不太好";

echo mb_substr($cs, 0, 3);
// 東方語系會用mb_substr

echo "<br>";

echo substr($cs, 0, 3);
// 這是英語系在用的字串取用中文字是吃3個字元 2個字元+1個空白

?>

<h2>尋找字串與HTML、css整合應用</h2>
<ul>
	<li>給定一個句子，將指定的關鍵字放大</li>
	<li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
	<li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>
<style>
	span {
		font-size: 20px;
		color: green;
	}
</style>


<?php

$key = "薪水";
$str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
echo str_replace($key, "<span>$key</span>", $str);

?>

<?php

$str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
// for($i=0;$i<mb_strlen($str);$i=$i=3){
	// echo $str[$i];
	// echo $str[$i+1];
	// echo $str[$i+2];
// }
