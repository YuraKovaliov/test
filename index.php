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
 echo "<pre>";
 print_r($Difference);
 echo "<pre>";

print_r(array_uintersect($firstArr, $secondArr,"strcasecmp"));

$result = array_diff_assoc($firstArr, $secondArr);
print_r($result);
//
//$FirstArr = [
//
//    'one' => 1,
//
//    'two' => [
//
//        'one' => 1,
//
//        'seven' => 22,
//
//        'three' => 32,
//
//    ],
//
//    'three' => [
//
//        'one' => 1,
//
//        'two' => 2,
//
//    ],
//
//    'foure' => 5,
//
//    'five' => [
//
//        'three' => 32,
//
//        'foure' => 5,
//
//        'five' => 12,
//
//    ],
//
//];
//print_r( array_slice( $directors, 1, 2 ) );
//foreach ($arrays as $array) {
// echo '<pre>';
// echo $array[1,];
//}


//echo count($FirstArr);
$FirstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];

$secondElements = [];

$index = 0;
foreach ($FirstArr as $key => $value) {
 if ($index % 2 !== 0) {
  $secondElements[$key] = $value;
 }
 $index++;
}

print_r($secondElements);

function countRecursive($array) {
 $count = count($array);
 foreach ($array as $value) {
  if (is_array($value)) {
   $count += countRecursive($value);
  }
 }
 return $count;
}

$totalElements = countRecursive($FirstArr);
echo $totalElements ;
echo "<br>";
function sumRecursive($array) {
 $sum = 0;
 foreach ($array as $value) {
  if (is_array($value)) {
   $sum += sumRecursive($value);
  } else {
   $sum += $value;
  }
 }
 return $sum;
}

$totalSum = sumRecursive($FirstArr);
echo $totalSum ;


?>





















