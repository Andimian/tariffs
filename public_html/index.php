<?php

include "../src/TariffInterface.php";
include "../src/ServiceInterface.php";
include "../src/TariffAbstract.php";
include "../src/TariffBasic.php";
include "../src/ServiceGPS.php";
include "../src/ServiceDriver.php";
include "../src/TariffHour.php";

/** @var TariffInterface $tariff */  //говорим, что это тариф интерфейс
$tariff = new TariffHour(5, 61);
//$tariff->addService(new ServiceGPS(15));
//$tariff->addService(new ServiceDriver(100));
echo $tariff->countPrice();


/*Представьте, что вы создаете сайт для компании сдающих автомобили поминутно (каршеринг). У компании есть ряд тарифов.
 Вам необходимо реализовать каждый тариф в своем классе. У каждого тарифа две основные характеристики - цена за 1 км,
 цена за 1 минуту. Каждый тариф обязан иметь метод для подсчета цены поездки. В некоторых тарифах возможно использование
 дополнительных услуг. Ваша задача - посчитать цену, которую получит пользователь, если проедет Х км и Y минут по тарифу Z.

Тариф базовый Цена за 1 км = 10 рублей Цена за 1 минуту = 3 рубля
Тариф почасовой Цена за 1 км = 0 Цена за 60 минут = 200 рублей Округление до 60 минут в большую сторону
Тариф студенческий Цена за 1 км = 4 рубля Цена за 1 минуту = 1 рубль
Дополнительные услуги (трейты):
Gps в салон - 15 рублей в час, минимум 1 час. Округление в большую сторону
Дополнительный водитель - 100 рублей единоразово44
Ожидаемая реализация: Создать интерфейс, который будет содержать описание метода подсчета цены, метода добавления услуги
(принимает на вход интерфейс услуги) Описать интерфейс доп. услуги, который содержит метод применения услуги к тарифу,
который пересчитывает цену в зависимости от особенностей услуги Реализовать абстрактный класс тарифа, который будет
описывать основные методы и имплементировать описанный в п.1 интерфейс Все тарифы должны наследоваться от абстрактного
 тарифа из п.2 Описать 2 услуги реализовав интерфейс услуг Пример вызова:
1. Тариф базовый(5 км, 1 час)
- добавить услугу GPS
= 5км * 10 руб / км + 60 мин * 3 руб / мин + 15 руб / час * 1 час = 50 + 180 + 15 = 245*/
