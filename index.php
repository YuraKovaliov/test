<?php
$a = 7 ;
$b = 7.15 ;
$c = $a / $b ;

var_dump(7 % 3) ; // 1. Отримати залишок від ділення 7 на 3

echo "<hr>" ;
echo intdiv($a,$b);  //2.Отримати цілу частину ділення 7 и 7,15
echo "<hr>" ;

$num = 25 ;
echo sqrt($num); //3.Отримати корінь из 25
echo "<hr>";

$d="Десять негритят пошли купаться в море";
//echo strtok($d, 4);

echo strstr($d,4); //4.Отримати 4-е слово з фрази - Десять негритят пошли купаться в море
//if ($d === 'went') {
 // echo 'swimming';
//}else{
 // echo 'swimming';
//};
  
echo '<hr>';

 //5.Отримати 17-й символ із фрази - Десять негритят пошли купаться в море
 echo mb_substr($d,16,1) ;
echo '<hr>';

var_dump($d); //7.Порахувати длину строки - Десять негритят пошли купаться в море
echo '<hr>';

$h = "Ten little Indians went swimming in the sea";
$h = ucwords($h);
echo $h;

 //6.Зробити великою кожну першу букву слів фрази - Десять негритят пошли купаться в море
echo '<hr>';

var_dump(1 === TRUE);//8.Чи вірно твердження true дорівнює 1
echo '<hr>';

var_dump(0 == false); //9.Чи вірно твердження false тождественно 0
echo '<hr>';

$arr = array(
1 => "true" ,
2 => "folse",
);

echo '<pre>';
print_r($arr);
echo '<pre>';

$l= 125 * 13 +7 ;
$j= 223 + 28 * 2 ;
if($l > $j){
   echo "l больше j";
}elseif($l == $j){
   echo "l равен j";
}else{
   echo "l меньше j";
};
echo "Привет мир";

   

?>





















