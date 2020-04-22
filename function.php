<?php

echo '
/**
 *  数组函数
 */

/**
 * array_filter( array $array [, callable $callback [,int $flag = 0]])
 *
 * 对数组 键值进行过滤，去掉不符合的键名键值，返回一个结果数组
 * 第二项的回调会把所有的值依次传进去执行一遍
 * 在回调中返回 true即可保留该值，返回 false可移除该值
 * 不影响原索引数组的键名
 */
';
$arr_a = [
    'niubi'=>'asd',
    '666',
    '777',
    '3'
];

echo "原数组信息为\n";
var_dump($arr_a);


echo '执行如下操作 过滤了键值为 \'asd\' ，\'777\'的元素
```
    $arr_a = array_filter($arr_a , function($a){
       return !($a == \'asd\' || $a == 777);
    });
```
';
$arr_a = array_filter($arr_a , function($a){
    return !($a == 'asd' || $a == 777);
});

echo "新数组信息为\n";
var_dump($arr_a);
echo PHP_EOL;


