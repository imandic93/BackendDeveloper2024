<?php

class Car
{
    public function __construct(private string $VIN, private string $model, private string $manufacturer)
    {}

    public function __destruct()
    {
        echo "Odvodim automobil marke $this->manufacturer i modela $this->model (broj sasije: $this->VIN) na reciklazu!", "\n";
    }
}