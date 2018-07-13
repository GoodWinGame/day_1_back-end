<meta charset = "utf-8">
<?php


$name = "Николай";
$age = "29";
$speciality = "начинающий веб-разработчик";

function greeting($name, $age, $speciality){
	echo "Привет, меня зовут $name! Мне $age лет. Я - $speciality.<br>";
	echo "Список книг, которые я прочел этим летом:<br>";
}

greeting($name, $age, $speciality);



$books = array(
	"Янн мартел" => '"Жизнь Пи"', 
	"Эрих Мария Ремарк" => '"Черный обелиск"', 
	"Энтони Бёрджесс" => '"Заводной апельсин"', 
	"Марио Пьюзо" => '"Крестный отец"', 
	"Джон Рональд Руэл Толкин" => '"Хоббит, или туда и обратно"'
);
echo "<ol>";
foreach ($books as $author => $nameOfTheBook) {
	echo "<li><b>$author</b> - <b>$nameOfTheBook</b></li>";
}
echo "</ol>";



/*  Массивы
 $carBrands = array(
	 "BMW", 
	 "VW", 
	 "Skoda", 
	 "Audi", 
	 "Renault", 
	 "Kia"
 );

 echo "<ul>";
 foreach ($carBrands as $key => $value) {
 	echo "<li>Индекс = $key. Значение = $value</li>";
 }
 echo "</ul>"; 
 */


/* Ассоциативные массивы  

$carBrands = array(
	"BMW" => "X5", 
	"VW" => "Passat", 
	"Scoda" => "Yeti", 
	"Audi" => "Q5"
);

echo "<ul>";
foreach ($carBrands as $key => $value) {
	echo "<li>Ключ: $key. Значение = $value</li>";
}
echo "</ul>";
*/


/* Функции 

function sum($a, $b) {
	echo $a + $b;
}

sum(5, 10);
echo "<br>";
sum(5, 10);
echo "<br>";
sum(5, 10);
echo "<br>";

function greeting($name, $time){
	echo "Привет $name! Добрый $time! Как дела?<br>";
}

greeting("Николай", "вечер");
greeting("Петр", "день");
greeting("Дарья", "вечер");
*/


/*  Варианты вывода сообщения
// echo "<pre>";
// print_r($carBrands); // распечатать массив (можно в браузере нажать crtl + U)
// echo "</pre>";

// echo $carBrands[3];
*/

?> 
