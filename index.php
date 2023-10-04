<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
//var_dump($arr) ;
echo count($arr);
echo "<br>";
echo $arr[4] + $arr[5] + $arr[6];

$firstArr = [

  'one' => 1,

  'two' => 2,

  'three' => 3,

  'foure' => 5,

  'five' => 12,

];

$secondArr = [

  'one' => 1,

  'seven' => 22,

  'three' => 32,

  'foure' => 5,

  'five' => 13,

  'six' => 37,

];
// $Difference = array_diff ($firstArr, $secondArr );
// print_r($Difference);
 $Difference = array_merge (array_diff ($secondArr, $firstArr), array_diff ($firstArr, $secondArr));
 print_r($Difference);



?>





















