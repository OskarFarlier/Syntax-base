
<?php 
echo "<br>";
echo "<br>";
echo strtoupper('minsk');
echo "<br>";
?>

<?php 
echo mb_strtoupper('минск');
echo "<br>";
?>

<?php 
echo ucfirst(strtolower("MINSK"));
echo "<br>";
?>

<?php 
$date = '31-12-2030';
$arr = explode('-', $date); echo $arr[2].'.'.$arr[1].'.'.$arr[0]; 
?>

<?php 
echo "<br>";;
echo strtoupper('php');
echo "<br>";
?>

<?php 
echo strtolower('PHP');
echo "<br>";
?>

<?php
echo ucfirst('london');
echo "<br>";
?>

<?php
echo lcfirst('London');
echo "<br>";
?>

<?php
echo ucwords('london is the capital of great britain');
echo "<br>";
?>

<?php 
echo ucfirst(strtolower('LONDON'));
echo "<br>";
?>

<?php
echo substr('html css php', 0);
echo "<br>";    
?>

<?php
echo substr('htmlcssphp', 7);
echo "<br>";   
?>

<?php 
$str = "http://htmlcssphp"; 
if(substr($str, 0, 7)=="http://") {echo 'да';} 
else {echo 'нет';} 
echo "<br>";   
?> 

<?php 
$str = "http://htmlcssphp"; 
if(substr($str, 0, 7)=="http://" or 'https://') {echo 'да';} 
else {echo 'нет';} 
echo "<br>";   
?> 

<?php 
$str = "htmlcssphp.png"; 
if(substr($str, -4, 4)==".png") {echo 'да';} 
else {echo 'нет';} 
echo "<br>";   
?> 


<?php 
$str = "htmlcssphp.png"; 
if(substr($str, -4, 4)==".png" or ".jpg") {echo 'да';} 
else {echo 'нет';} 
echo "<br>";   
?> 


<?php 
$str = "12345"; 
if(substr($str, -4, 4)==".png" or ".jpg") {echo 'да';} 
else {echo 'нет';} 
echo "<br>";   
?> 


<?php 
$str = '123456sd'; 
if(strlen($str)>5) { 
echo substr($str, 0, 5); 
} 
else {echo $str;} 
echo "<br>";   
?> 

<?php 
$str = '31.12.2013'; 
echo str_replace('.', '-', $str); 
echo "<br>";
?> 

<?php
$str = 'aaabbbccc'; 
echo str_replace(['a','b','c'], [1,2,3], $str); 
echo "<br>";
?> 

<?php
$str = '1a2b3c4b5d6e7f8g9h0'; 
echo str_replace(['1', '2', '3', '4', '5', '6', '7', '8', '9','0'],'', $str); 
echo "<br>";
?> 

<?php
    $text2 = "aaaaabbbcccc";
    echo strtr($text2, '123', 'abc');     
    echo "<br>";    
    echo strtr($text2, ['a'=>1, 'b'=>2, 'c'=>3]); 
    echo "<br>";    
    echo strtr('111222333333', '123', 'abc'); 
    echo "<br>";        
?>

<?php 
$str = 'abc abc abc'; 
echo strpos($str, 'b'); 
echo "<br>";    
?> 

<?php 
$str = 'abc abc abc'; 
echo strrpos($str, 'b'); 
echo "<br>";    
?> 

<?php 
$str = 'abc abc abc'; 
echo strpos($str, 'b', 3); 
echo "<br>";    
?> 

<?php 
$str = 'ab..cdef'; 
if(strpos($str, '..')!==false) {echo 'есть';} 
else {echo 'нет';} 
echo "<br>";    
?> 


<?php
 // Специально поискал как сделать рандомные символы / после того как ты скзал это на конфиренции
echo str_shuffle('Hello world'); // str_shuffel рандомно выставляет текст
echo "<br>";        
?>

<?php 
$str = 'ddasdasd  fdsfsdffgdf'; 
$Qwer = str_shuffle($str); 
echo substr($Qwer, 0, 6); 
?> 

<?php 
$arr = explode('_', 'var_test_text'); 
$str = ''; 
foreach ($arr as $key => $value) { 
if($key != 0) {$str .= ucfirst($value);} 
else {$str .= $value;} 
} 
echo $str; 
?> 
