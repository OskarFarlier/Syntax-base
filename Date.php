
<?php 
//Выведите текущее время в формате timestamp. 

echo "<br>";
echo time(); 
echo "<br>";


//Выведите 1 марта 2025 года в формате timestamp. 

echo "<br>";
echo mktime(0,0,0,3,1,2025);


//  Выведите 31 декабря текущего года в формате timestamp.
// Скрипт должен работать независимо от года, в котором он запущен. 

echo "<br>";
echo mktime(0, 0, 0, 12, 31); 
echo "<br>";


//  Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года 
//до настоящего момента времени. 

echo "<br>";
echo time() - mktime(13, 12, 59, 03, 15, 2000); 
echo "<br>";

//  Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего момента времени. 

echo "<br>";
echo floor((time() - mktime(7, 23, 48))/3600); 
echo "<br>";


// Выведите на экран текущий год, месяц, день, час, минуту, секунду. 

echo "<br>";
echo date('Y-m-d H:i:s'); 
echo "<br>";

// Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'.

echo date('2025-12-31'); 
echo "<br>";
echo date('31-12-2025'); 
echo "<br>";
echo date('31-12-2013'); 
echo "<br>";
echo date('12:59:59'); 
echo "<br>";


// С помощью функций mktime и date выведите 12 февраля 2025 года в формате '12.02.2025'

echo "<br>";
echo date('d.m.Y', mktime(0, 0, 0, 2, 12, 2025)); 
echo "<br>";

// Создайте массив дней недели $week. Выведите на экран название текущего дня недели с помощью массива $week 
// и функции date. Узнайте какой день недели был 06.06.2006, в ваш день рождения.

echo "<br>";
$week = ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб']; 
echo $week[date('w', mktime(0, 0, 0, 6, 06, 2006))]; 
echo "<br>";
echo $week[date('w', mktime(0, 0, 0, 8, 31, 2019))];
echo "<br>";

// Создайте массив месяцев $month. 
//Выведите на экран название текущего месяца с помощью массива $month и функции date.

$month = ['Январь','Февраль','Марь','Апрель','Май','Июнь','Июль','Август','Сенябрь','Октябрь','Ноябрь','Декаюрь',]; 
echo "<br>";
echo $month[date('n', mktime(0,0,0, 7,31,2019))]; 
echo "<br>";


// Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен.
echo "<br>";
echo date('t'); 
echo "<br>";

// Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год.
?> 

<form method="get"> 
<p>Год: <input type="number" name="year"/></p> 
<input type="submit" value="Проверка"/> 
</form> 
<?php
if(date('L', mktime(0,0,0, 1,1,$_GET['year'])) =='1') { 
echo 'Высокосный'; 
} 
else {echo 'Нет';} 


?>


<!-- Сделайте форму, которая спрашивает дату в формате '31.12.2025'.
 С помощью функций mktime и explode переведите эту дату в формат timestamp.
 Узнайте день недели (словом) за введенную дату. -->

<form method='get'> 
<input type="text" name="date"/> 
<input type="submit" value="Отправить"/> 
</form> 
<?php 
echo "<br>";

$week = ['вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб']; 
$date = explode('.', $_GET['date']); 
echo $week[date('w', mktime(0,0,0, $date[1],$date[0],$date[2]))]; 
echo "<br>";

?> 
<!-- 
 Сделайте форму, которая спрашивает дату в формате '2025-12-31'. 
 С помощью функций mktime и explode переведите эту дату в формат timestamp.
  Узнайте месяц (словом) за введенную дату.  -->


<form method='get'> 
<input type="text" name="date"/> 
<input type="submit" value="Отправить"/> 
</form> 
<?php 
echo "<br>";
$month = ['','янв', 'фев', 'мар', 'апр','май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек']; 
$date = explode('-', $_GET['date']); 
echo $month[date('n', mktime(0,0,0, $date[1],$date[2],$date[0]))]; 
echo "<br>";

?>

<?php 
// Узнайте сколько дней осталось до Нового Года. Скрипт должен работать в любом году. 
echo "<br>";
$new_year = mktime(23,59,59, 12,31); 
$new_year = $new_year+1; 
echo floor(($new_year - time())/86400); 
echo "<br>";


?>
