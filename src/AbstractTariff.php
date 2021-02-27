<?php

class AbstractTariff implements TariffInterface
{
    protected $minutes;
    protected $distance;
    protected $pricePerMinute;
    protected $pricePerKm;
    /** @var ServiceInterface[] */
    protected $services = [];

    public function __construct($minutes, $distance)
    {
        $this->minutes = $minutes;
        $this->distance = $distance;
    }

    public function countPrice(): int
    {
        $price = $this->minutes * $this->pricePerMinute + $this->distance * $this->pricePerKm;
        if ($this->services) {
            foreach ($this->services as $service) {
                $service->apply($this, $price);
            }
        }
    }

    public function addService($service)
    {
        array_push($this->services, $service);
    }

    public function getDistance(): int
    {
        return $this->distance;
    }

    public function getMinutes(): int
    {
        return $this->minutes;
    }
}