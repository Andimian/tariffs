<?php
interface TariffInterface
{
    public function countPrice(): int;  //считает цену поездки с заданными параметрами
    public function addService(ServiceInterface $service);  //подключает дополнительную услугу
    public function getMinutes(): int;  //посмотреть параметры тарифа
    public function getDistance(): int; //посмотреть параметры тарифа
}
