<?php
//
interface インターフェイスA
{
    public function メソッドA();
}
//
interface インターフェイスB
{
    public function メソッドB(int $i);
}

//
class Hoge implements インターフェイスA, インターフェイスB
{
    //
    public function メソッドA()
    {
        echo "メソッドA \n";
    }
    
    //
    public function メソッドB(int $i)
    {
        echo "メソッドB {$i} \n";
    }
}

//
$obj = new Hoge();
var_dump($obj);
$obj->メソッドA();
$obj->メソッドB(999);