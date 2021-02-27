<?php

interface TariffInterface
{
<<<<<<< HEAD
    public function countPrice(): int;
    public function addService();
    public function getDistance(): int;
    public function getMinutes(): int;
=======
    public function countPrice(): int;  //считает цену поездки с заданными параметрами
    public function addService(ServiceInterface $service);  //подключает дополнительную услугу
    public function getMinutes(): int;  //посмотреть параметры тарифа
    public function getDistance(): int; //посмотреть параметры тарифа
>>>>>>> eb2591c1f5362625c4fc52f5d49956f5a146d607
}
