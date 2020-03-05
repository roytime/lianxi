<?php
// ini_set("display_errors","on");
ini_set("display_errors", "On");
/**
1、定义
 */
$arr[] = 3;
$arr1 = [1, 2, 3];
$arr2 = array('x' => 'this is a x', 'y' => 'this is a y');
$arr3[100] = 10000;

//2、遍历
echo count($arr3);

foreach ($arr3 as $key => $value) {
	# code...
	echo $key;
	echo $value;
}

list($one, $two, $there) = $arr1;
echo '<br>' . $one . $two . $there;

while (list($key, $value) = each($arr2)) {
	# code...
	echo 'the key = ' . $key . 'and the value =' . $value;
}

//3、常用函数
//关联数组的相同键值会被覆盖
$arr4 = array_merge($arr1, $arr2, [1], array('x' => 'x'));
print_r($arr4);

$arr5 = array_map(function ($item) {
	return $item . 'the key';
}, $arr4);

echo '<pre>';
print_r($arr5);

$keys = array_keys($arr5);
print_r($keys);
