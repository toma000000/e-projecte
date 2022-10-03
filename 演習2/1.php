<?php

$n = $_POST["n"];

if($n < 0 && $n > 100) {
    echo("エラーです");
}else if($n < 10){
    echo("炎上可能性（低）です");
}else if($n < 20){
    echo("炎上可能性（中）です");
}else if($n < 25){
    echo("炎上可能性（大）です");
}

?>
