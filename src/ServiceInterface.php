<?php
interface ServiceInterface
{

    public function apply(TariffInterface $tariff, &$price);    //действет на тариф, изменяя цену
}