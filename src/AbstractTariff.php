<?php

class AbstractTariff implements TariffInterface
{
    protected $minutes;
    protected $distance;
    protected $pricePerMinute;
    protected $pricePerKm;
    /** @var ServiceInterface[] */
    protected $services = [];

    public function countPrice(): int
    {
        $price = $this->minutes * $this->pricePerMinute + $this->distance * $this->pricePerKm;
        if ($this->services) {
            foreach ($this->services as $service) {
                $service->apply($this, $price);
            }
        }
    }

    public function addService()
    {
        // TODO: Implement addService() method.
    }

    public function getDistance(): int
    {
        // TODO: Implement getDistance() method.
    }

    public function getMinutes(): int
    {
        // TODO: Implement getMinutes() method.
    }
}