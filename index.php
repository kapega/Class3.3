<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	require 'autoloader.php';
	$loader = new Psr4AutoloaderClass;
	$loader -> addNamespace('Ekaterina\\Interfaces', 'Ekaterina/Interfaces');
	$loader -> addNamespace('Ekaterina\\Classes', 'Ekaterina/Classes');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Классы</title>
<body>
<h1>Машина</h1>
<?php
$Megane = new Car('Renault Megane', 'Москва', 800000);
echo $Megane->getPrice();
$Picanto = new Car('Kia Picanto', 'Нижний Новгород', 550000);
echo $Picanto->getPrice();

?>

<h1>Телевизор</h1>
<?php
$samsung = new TV('Samsung', 40, 100000);
echo $samsung->getPrice();
$lg = new TV('LG', 42, 120000);
echo $lg->getPrice();
?>

<h1>Шариковая ручка</h1>
<?php
$bluepen = new Pen('Bruno','синего', 90);
echo $bluepen->getAmount();
$greenpen = new Pen('Ben', 'зеленого', 2);
echo $greenpen->getAmount();
?>

<h1>Утка</h1>
<?php
$ugly_duck = new Duck('Первая', 'белый', 'big');
echo $ugly_duck->checkUgly();
$simple_duck = new Duck('Вторая', 'серый', 'normal');
echo $simple_duck->checkUgly();
$white_duck = new Duck('Третья', 'белый', 'normal');
echo $white_duck->checkUgly();
?>

<h1>Товар</h1>
<?php
$ticket_NN_MSK = new Product('Нижний Новгород - Москва', 50, 1000);
echo $ticket_NN_MSK->getPrice();
$ticket_MSK_NVR = new Product('Москва - Новороссийск', 1, 4000);
echo $ticket_MSK_NVR->getPrice();
$ticket_Kaz_SPB = new Product('Казань - Санкт-Петербург', 91, 2000);
echo $ticket_Kaz_SPB->getPrice();
?>

</body>
</html>