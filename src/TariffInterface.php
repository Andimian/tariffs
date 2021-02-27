<?php

interface TariffInterface
{
    public function countPrice(): int;
    public function addService();
    public function getDistance(): int;
    public function getMinutes(): int;
}
