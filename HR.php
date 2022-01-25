<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/ICarrier.php';

class sales extends Person implements ICarrier
{
    protected int $maxSales;
    protected $carrier;


    public function __construct(string $name, string $age,
        string $model, string $company,
        int $maxSales=1000000)
    {
        parent::__construct($name, $age, $model, $company);
        $this->maxSales = $maxSales;
    }

    public function skillCheck()
    {
        print("Checked English.\n");
        print("Checked Prepenstation.\n");
        print("Checked Mindset.\n");
        print("Checked Teamworking.\n");
    }

    public function getMaxSales()
    {
        return $this->maxSales;
    }

    public function load() {
        // TODO: perform cargo load here.
    }

    public function unload() {
        // TODO: perform package upload here.
    }

}

