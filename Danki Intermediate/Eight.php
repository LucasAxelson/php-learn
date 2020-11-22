<?php
 /*   $array1 = array("Key1"=>"Value1","Key2"=>"Value2");
    $array2 = array("Key3"=>'Value3','Key4'=> 'Value4');
    $array3 = array("Key5"=>'Value5','Key6'=> 'Value6');
    $result = array_merge($array1, $array2, $array3);
    print_r($result);


//Array Intersect returns repeated values found in both arrays.

$array1 = array("Key1"=>"Value1","Key2"=>"Value2");
$array2 = array("Key2"=>"Other value","Key3"=>'Value3','Key4'=> 'Value4');

print_r(array_intersect_key($array1,$array2));

*/
//Array_Map applies a function on the array's values.
//1st V. = Function - 2nd V. = Array
$arr = ['<p>Lucas</p>','John','<h1>Fabio</h1>'];

print_r(array_map('strip_tags',$arr));

?>