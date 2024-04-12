<style>
	* {
		font-family: 'Courier New', Courier, monospace;
		line-height: 10px;
	}
    /* 這是讓星星/空白變成等寬 主要是使用courier New字型 */
</style>
<?php

for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";

for($i=4;$i>=0;$i--){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";

for($i=0;$i<5;$i++){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";

for($i=4;$i>=0;$i--){ //記得倒三角形是遞減拉~~不然畫面會一直跑下去不停 哈
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";

for($i=0;$i<9;$i++){
    if($i<=4){
        $tmp=$i;
    }else{
        $tmp--;
    }
    for($j=0;$j<(4-$tmp);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($tmp*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}



?>