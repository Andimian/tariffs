<?php

class TariffHour extends AbstractTariff
{
    protected $pricePerKm = 0;
    protected $pricePerMinute = 200/60;
    public function __construct($minutes, $distance)
    {
        parent::__construct($minutes, $distance);
        $this->minutes = $this->minutes - $this->minutes % 60 + 60;
    }
}