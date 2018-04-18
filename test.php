<!DOCTYPE html>
<html>
<head>
	<title>Классы</title>
<body>
<h1>Машина</h1>
<?php
$cart = new Ekaterina\Classes\Cart();

$Megane = new Ekaterina\Classes\Car('Renault Megane', 'Москва', 800000);
echo $Megane->getPriceText();
$cart->add($Megane);

$Picanto = new Ekaterina\Classes\Car('Kia Picanto', 'Нижний Новгород', 550000);
echo $Picanto->getPriceText();
$cart->add($Picanto);
?>

<h1>Телевизор</h1>
<?php
$samsung = new Ekaterina\Classes\TV('Samsung', 40, 100000);
echo $samsung->getPriceText();
$cart->add($samsung);

$lg = new Ekaterina\Classes\TV('LG', 42, 120000);
echo $lg->getPriceText();
$cart->add($lg);
?>

<h1>Шариковая ручка</h1>
<?php
$bluepen = new Ekaterina\Classes\Pen('Bruno','синего', 90);
echo $bluepen->getAmount();
$cart->add($bluepen);

$greenpen = new Ekaterina\Classes\Pen('Ben', 'зеленого', 2);
echo $greenpen->getAmount();
$cart->add($greenpen);
?>

<h1>Утка</h1>
<?php
$ugly_duck = new Ekaterina\Classes\Duck('Первая', 'белый', 'big');
echo $ugly_duck->checkUgly();
$cart->add($ugly_duck);

$simple_duck = new Ekaterina\Classes\Duck('Вторая', 'серый', 'normal');
echo $simple_duck->checkUgly();
$cart->add($simple_duck);

$white_duck = new Ekaterina\Classes\Duck('Третья', 'белый', 'normal');
echo $white_duck->checkUgly();
$cart->add($white_duck);
?>

<h1>Товар</h1>
<?php
$ticket_NN_MSK = new Ekaterina\Classes\Product('Нижний Новгород - Москва', 50, 1000);
echo $ticket_NN_MSK->getPriceText();
$cart->add($ticket_NN_MSK);

$ticket_MSK_NVR = new Ekaterina\Classes\Product('Москва - Новороссийск', 1, 4000);
echo $ticket_MSK_NVR->getPriceText();
$cart->add($ticket_MSK_NVR);

$ticket_Kaz_SPB = new Ekaterina\Classes\Product('Казань - Санкт-Петербург', 91, 2000);
echo $ticket_Kaz_SPB->getPriceText();
$cart->add($ticket_Kaz_SPB);
?>

<h1>Корзина</h1>
<?php
echo "<p>В корзине {$cart->countItems()} товаров с общей стоимостью {$cart->sum()}.</p>";
$order = new Ekaterina\Classes\Order($cart);
$order->getOrder();
?>

</body>
</html>
