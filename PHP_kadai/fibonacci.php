<?php
// 定義決め
function fibonacci() {
    $num_list = [0,1]; //初期値の設定
    //
    for($i = 2; ; $i++) {
        //
        $fibo_num = $num_list[$i - 1] + $num_list[$i - 2];
        $num_list[] = $fibo_num;
        
        if($fibo_num > 10000) {
            break;
        }
    }
    return $num_list;
}    
//
$fibo_answer = fibonacci(); 
//
foreach ($fibo_answer as $v) {
    echo $v . "\n";
}